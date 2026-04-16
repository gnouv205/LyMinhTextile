<?php include 'includes/header.php'; ?>

<?php $page = $_GET['page'] ?? 'home'; $route = ['home' =>
  'pages/home.php', // Thong tin cong ty 'introduce'
  'pages/ThongTinCongTy/introduce.php', 'technology' =>
  'pages/ThongTinCongTy/technology.php', 'environment' =>
  'pages/ThongTinCongTy/environment.php', 'showroom' =>
  'pages/ThongTinCongTy/showroom.php',
  'pages/NhomSanPham/fabricgroup.php', 'mask' =>
  'pages/NhomSanPham/medicalmaskgroup.php', 'accessories' =>
  'pages/NhomSanPham/garmentaccessories.php',
  'pages/XuongSanXuat/dyeing.php', 'circula' => 
  'pages/XuongSanXuat/circulaknitting.php', 'warp' =>
  'pages/XuongSanXuat/warpknitting.php', 'quality' =>
  'pages/XuongSanXuat/qualitycontrol.php', 'lab' =>
  'pages/XuongSanXuat/laboratory.php', 'finishing' =>
  'pages/XuongSanXuat/finishing.php',
  'pages/CongNhanVien/careers.php', 'opportunities' => 
  'pages/CongNhanVien/opportunities.php', 'rewards' =>
  'pages/CongNhanVien/rewards.php', 'teamwork',
  'pages/LienHe/infomations.php', 'agency' =>
  'pages/LienHe/agents.php',
];

if (array_key_exists($page, $route)) {
  include $route[$page];
}
else {
  include 'pages/home.php';
}

?>
<?php include 'includes/footer.php'; ?>