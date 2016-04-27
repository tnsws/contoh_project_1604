<?php // include "modul/koneksi.php" ?>
<?php
require '../assets/config.php';
require '../assets/db_class.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Control Panel Web Portal Berita</title>
<link href="assets/style.css" rel="stylesheet" type="text/css">
  <link href="../assets/jquery-ui.css" rel="stylesheet" type="text/css">
  <link href="../assets/sample.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
  <div id="header">
    <div id="header-text">Portal Berita Control Panel</div>
  </div>
  <div id="content">
    <div id="sidebar">
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="?p=pengguna">Pengguna</a></li>
        <li><a href="?p=kategori">Kategori</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
    <div id="main-content">
      <div id="breadcrumb">&gt;&gt; Dashboard</div>
          <!-- begin post -->
          <?php
		  if(isset($_GET['p'])){
			  $page= $_GET['p'];
		  }else{
			  $page = 'dashboard';
		  }
		  include 'konten/'.$page.'.php';
		  ?>
          <!-- end post -->
        
    </div>
  </div>
  <div id="footer">Web Programming 2 &copy; AMIK BSI Tegal</div>
</div>
</body>
</html>