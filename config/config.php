<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lyminh_web";

define("MAIL_USERNAME", "vuong4720@gmail.com");
define("MAIL_PASSWORD", "lfuh aowb mmiu jxvh");

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_errno) {
    die("Ket noi khong thanh cong: " . $conn->connect_error);
    $conn->set_charset("utf8mb4");
} else {
    echo "Ket noi thanh cong";
}
