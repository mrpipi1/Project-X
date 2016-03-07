<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <!-- mobile initial -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <!-- information -->
    <title><?php echo "Lotus Yoga - " .$_GET['page'];?></title>
    <meta name="description" content=" ">
    <meta name="author" content=" ">
    <!-- favicon -->
    <link rel="icon" type="icon" href="" sizes="16x16">

    <!-- stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- jQuery library (served from Google) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
  <header class="header_main">
    <h1 class="logo"> <a name="h1"></a>
  	  <a href="#">
  		  Logo
  		</a>
  	</h1>
    <nav class="nav_main">
      <ul>
        <li><a href="<?php if( !isset($_GET["page"]) || $_GET["page"] == "home" ){echo "#about_us";}else{echo "index.php?page=home#about_us";} ?>">Über uns</a></li>
    	  <li><a href="<?php if( !isset($_GET["page"]) || $_GET["page"] == "home" ){echo "#course";}else{echo "index.php?page=home#course";} ?>">Kurse</a></li>
  		  <li><a href="<?php if( !isset($_GET["page"]) || $_GET["page"] == "home" ){echo "#contact";}else{echo "index.php?page=home#contact";} ?>">Kontakt</a></li>
        <li><a href="<?php if( !isset($_GET["page"]) || $_GET["page"] == "home" ){echo "#saleproducts_main";}else{echo "index.php?page=home#saleproducts_main";} ?>""#saleproducts_main">Shop</a></li>
        <li><a href="<?php if( !isset($_GET["page"]) || $_GET["page"] == "home" ){echo "#login";}else{echo "index.php?page=home#login";} ?>">Login</a></li>
        <li><a href="index.php?page=Warenkorb">CART</a></li>
  		</ul>
  	</nav>
  </header>
