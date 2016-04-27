<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Web Programming</title>
<link href="assets/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="wrapper">
  <div id="header">
    <div id="header-text">Web Portal Berita</div>
  </div>
	<div id="contents">
	  <div id="menu">
	    <ul>
	      <li><a href="?">Home</a></li>
	      <li><a href="?p=pengguna">Pengguna</a></li>
	      <li><a href="#">Login</a></li>
        </ul>
	    <div class="clear"></div>
      </div>
      <div id="content-bottom">
        <div id="main-content">
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
        <div id="sidebar">
        	<!-- begin widget -->
          <div class="box">
            <h2>Berita Terbaru</h2>
            <div class="box-content">Content for  class "box-content" Goes Here</div>
          </div>
          <!-- end widget -->
          <div class="box">
            <h2>Kategori</h2>
            <div class="box-content">Content for  class "box-content" Goes Here</div>
          </div>
          <div class="box">
            <h2>Judul 3</h2>
            <div class="box-content">Content for  class "box-content" Goes Here</div>
          </div>
        </div>
        
<div class="clear"></div>
      </div>
	</div>
	<div id="footer">Content for  id "footer" Goes Here</div>
</div>
</body>
</html>