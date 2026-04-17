<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lý Minh Textile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="../assets/img/fabric.png">
</head>

<body>
    <header id="navbar">
        <a href="index.php" class="logo">LYMITEX</a>

        <div class="burger" onclick="toggleMenu()">☰</div>

        <nav>
            <ul class="menu">
                <li><a href="index.php">Trang chủ</a></li>

                <li class="dropdown">
                    <a href="index.php?page=thongtincongty">Thông tin công ty</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=thongtincongty#gioi-thieu">Giới thiệu</a></li>
                        <li><a href="index.php?page=thongtincongty#technology">Công nghệ</a></li>
                        <li><a href="index.php?page=thongtincongty#objective">Mục tiêu công ty</a></li>
                        <li><a href="index.php?page=thongtincongty#environment">Bảo vệ môi trường</a></li>
                        <li><a href="index.php?page=thongtincongty#color-chart">Bảng màu</a></li>
                        <li><a href="index.php?page=thongtincongty#showroom">Phòng trưng bày</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Nhóm sản phẩm</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=nhomsanpham#fabric">Vải</a></li>
                        <li><a href="index.php?page=nhomsanpham#medical">Khẩu trang</a></li>
                        <li><a href="index.php?page=accessories">Phụ liệu</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Xưởng sản xuất</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=dyeing">Xưởng nhuộm</a></li>
                        <li><a href="index.php?page=circular">Dệt tròn</a></li>
                        <li><a href="index.php?page=warp">Dệt kim</a></li>
                        <li><a href="index.php?page=quality">Kiểm soát chất lượng</a></li>
                        <li><a href="index.php?page=lab">Phòng thí nghiệm</a></li>
                        <li><a href="index.php?page=finishing">Hoàn thiện</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Công nhân viên</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=careers">Phát triển nghề nghiệp</a></li>
                        <li><a href="index.php?page=opportunities">Cơ hội việc làm</a></li>
                        <li><a href="index.php?page=rewards">Khen thưởng</a></li>
                        <li><a href="index.php?page=teamwork">Làm việc nhóm</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Liên hệ</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=contact">Thông tin liên hệ</a></li>
                        <li><a href="index.php?page=agency">Đại lý</a></li>
                    </ul>
                </li>

                <li>
                    <a href="http://192.168.0.6/lyminhshop/" target="_blank" class="btn-eshop">eShop</a>
                </li>
            </ul>
        </nav>
    </header>

    <script>
        // Hiệu ứng Header khi cuộn
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        // Mobile Menu Toggle
        function toggleMenu() {
            document.querySelector('.menu').classList.toggle('active');
        }
    </script>