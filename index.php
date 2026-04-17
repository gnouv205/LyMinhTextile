<?php include 'includes/header.php'; ?>

<?php
$page = $_GET['page'] ?? 'home';

$route = [
  'home'            => 'pages/home.php',
  'thongtincongty'  => 'pages/thongtincongty.php',
  'nhomsanpham'     => 'pages/nhomsanpham.php',
  'xuongsanxuat'    => 'pages/xuongsanxuat.php',
  'congnhanvien'    => 'pages/congnhanvien.php',
  'lienhe'          => 'pages/lienhe.php',
];

if (array_key_exists($page, $route)) {
  include $route[$page];
} else {
  include 'pages/home.php';
}
?>

<?php include 'includes/footer.php'; ?>