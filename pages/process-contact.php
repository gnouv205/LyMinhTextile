<?php
include "../config/config.php";

include "../libs/PHPMailer/src/Exception.php";
include "../libs/PHPMailer/src/PHPMailer.php";
include "../libs/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($phone) || empty($email)) {
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin');history.back();</script>";
        exit;
    }

    // Sửa lỗi: VALUES (số nhiều) thay vì VALUE
    $stmt = $conn->prepare("INSERT INTO contacts (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);
    $stmt->execute();

    $mail = new PHPMailer(true);

    try {
        // QUAN TRỌNG: Phải có dòng isSMTP() thì mail mới gửi được qua Gmail
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = MAIL_USERNAME;
        $mail->Password = MAIL_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        $mail->setFrom(MAIL_USERNAME, 'Website Lý Minh Textile');
        $mail->addAddress('vuong4720@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Đăng ký thông tin liên hệ mới";

        $mail->Body = "
        <h3>Thông tin đăng ký liên hệ</h3>
        <p><b>Họ tên: </b>$name</p>
        <p><b>Số điện thoại: </b>$phone</p>
        <p><b>Email: </b>$email</p>
        <p><b>Subject: </b>$subject</p>
        <p><b>Message: </b><br>" . nl2br($message) . "</p>
        ";

        $mail->send();

        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Đăng ký liên hệ thành công',
                html: 'Cảm ơn <b>$name</b> đã đăng ký thông tin liên hệ',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                confirmButtonColor: '#2aa4d6',
                timer: 3000,
                timerProgressBar: true
            }).then(() => {
                window.location.href = '../index.php';
            });
        });
        </script>
        ";
    } catch (Exception $ex) {
        // Hiển thị lỗi cụ thể để bạn dễ debug khi đang làm localhost
        echo "Lỗi gửi mail: " . $mail->ErrorInfo;
    }
}
