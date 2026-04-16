<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lymitex</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header id="navbar">
    <a href="index.php" class="logo">LYMITEX</a>

    <div class="burger" onclick="toggleMenu()">☰</div>

    <nav>
        <ul class="menu">

            <li><a href="index.php">Trang chủ</a></li>

            <!-- Thông tin công ty -->
            <li class="dropdown">
                <a href="#">Thông tin công ty</a>
                <ul class="submenu">
                    <li><a href="index.php?page=introduce">Giới thiệu</a></li>
                    <li><a href="index.php?page=technology">Công nghệ</a></li>
                    <li><a href="index.php?page=environment">Môi trường</a></li>
                    <li><a href="index.php?page=showroom">Phòng trưng bày</a></li>
                </ul>
            </li>

            <!-- Nhóm sản phẩm -->
            <li class="dropdown">
                <a href="#">Nhóm sản phẩm</a>
                <ul class="submenu">
                    <li><a href="index.php?page=fabric">Vải</a></li>
                    <li><a href="index.php?page=mask">Khẩu trang</a></li>
                    <li><a href="index.php?page=accessories">Phụ liệu</a></li>
                </ul>
            </li>

            <!-- Xưởng -->
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

            <!-- Công nhân viên -->
            <li class="dropdown">
                <a href="#">Công nhân viên</a>
                <ul class="submenu">
                    <li><a href="index.php?page=careers">Phát triển nghề nghiệp</a></li>
                    <li><a href="index.php?page=opportunities">Cơ hội việc làm</a></li>
                    <li><a href="index.php?page=rewards">Khen thưởng</a></li>
                    <li><a href="index.php?page=teamwork">Làm việc nhóm</a></li>
                </ul>
            </li>

            <!-- Liên hệ -->
            <li class="dropdown">
                <a href="#">Liên hệ</a>
                <ul class="submenu">
                    <li><a href="index.php?page=contact">Thông tin công ty</a></li>
                    <li><a href="index.php?page=agency">Đại lý</a></li>
                </ul>
            </li>

            <li>
                <a href="http://192.168.0.6/lyminhshop/" target="_blank" class="btn-eshop">
                    eShop
                </a>
            </li>

        </ul>
    </nav>
</header>