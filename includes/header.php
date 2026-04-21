<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lý Minh Textile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="../assets/img/fabric.png">
</head>

<body>
    <header id="navbar">
        <a href="index.php" class="logo">
            LYMITEX
            <img src="assets/img/header/organic.png" alt="Icon">
        </a>
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
                    <a href="index.php?page=nhomsanpham">Nhóm sản phẩm</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=nhomsanpham#fabric">Vải</a></li>
                        <li><a href="index.php?page=nhomsanpham#medical">Khẩu trang</a></li>
                        <li><a href="index.php?page=accessories">Phụ liệu</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="index.php?page=xuongsanxuat">Xưởng sản xuất</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=xuongsanxuat#dyeing">Xưởng nhuộm</a></li>
                        <li><a href="index.php?page=xuongsanxuat#circular">Dệt tròn</a></li>
                        <li><a href="index.php?page=xuongsanxuat#warp">Dệt kim bằng</a></li>
                        <li><a href="index.php?page=xuongsanxuat#weaving">Dệt dây</a></li>
                        <li><a href="index.php?page=xuongsanxuat#quality">Kiểm soát chất lượng</a></li>
                        <li><a href="index.php?page=xuongsanxuat#lab">Phòng thí nghiệm</a></li>
                        <li><a href="index.php?page=xuongsanxuat#finishing">Xưởng hoàn thiện</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="index.php?page=congnhanvien">Công nhân viên</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=congnhanvien#career">Phát triển nghề nghiệp</a></li>
                        <li><a href="index.php?page=congnhanvien#rewards">Khen thưởng</a></li>
                        <li><a href="index.php?page=congnhanvien#teamwork">Làm việc nhóm</a></li>
                        <li><a href="index.php?page=congnhanvien#jobs">Cơ hội việc làm</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="index.php?page=lienhe">Liên hệ</a>
                    <ul class="submenu">
                        <li><a href="index.php?page=lienhe#contact">Thông tin liên hệ</a></li>
                        <li><a href="index.php?page=lienhe#agency">Đại lý</a></li>
                    </ul>
                </li>

                <li>
                    <a href="http://192.168.0.6/lyminhshop/" target="_blank" class="btn-eshop">eShop</a>
                </li>
            </ul>
        </nav>
    </header>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        // Mobile Menu Toggle
        function toggleMenu() {
            document.querySelector('.menu').classList.toggle('active');
        }
    </script>