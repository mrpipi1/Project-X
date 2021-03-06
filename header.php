<?php
//setcookie ( 'landingpage', 'landingpage_visited', time() + 60, "/");
?>
<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="UTF-8">
    <!-- mobile initial -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <!-- information -->
    <!-- title wird mit dem GET Paramenter automatisch angepasst, if => für home.php, else => individuell für alle anderen Seiten -->
    <title>
        <?php if( !isset($_GET["page"]) || $_GET["page"] == "home" ) { echo "Lotus Yoga";} else{ echo "Lotus Yoga - " .$_GET['page']; } ?>
    </title>
    <meta name="description" content=" ">
    <meta name="author" content=" ">
    <!-- Google Roboto Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500' rel='stylesheet' type='text/css'>
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="font/fontawesome/css/font-awesome.min.css">
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body onunload="GUnload()" class="body">
  <?php
  if(!isset($_GET['page']) || $_GET['page'] == 'home') {
    $class = 'header_home';
  }else{
    $class = '';
  }
  if(isset($_COOKIE['landingpage'])){
    $no_landingpage = 'header_no_landingpage';
  }else{
    $no_landingpage = '';
  }
  ?>
  <header class="header <?php echo $class.' '.$no_landingpage;?>">
    <h1 class="logo">
  	  <a href="index.php?page=home#about_us">
  		  Logo
  		</a>
  	</h1>
    <nav class="nav nav_main">
        <!-- mit php abfrage ob man gerade auf home.php (if) oder irgenwo anders (else) ist und der link wird dementsprechend mit einem echo "befüllt" -->
      <ul>
    	  <li><a href="<?php if( !isset($_GET['page']) || $_GET['page'] == 'home' ){echo '#about_us';}else{echo 'index.php?page=home#about_us';} ?>">Über uns</a></li>
    	  <li><a href="<?php if( !isset($_GET['page']) || $_GET['page'] == 'home' ){echo '#course';}else{echo 'index.php?page=home#course';} ?>">Kurse</a></li>
        <li><a href="<?php if( !isset($_GET['page']) || $_GET['page'] == 'home' ){echo '#saleproducts_main';}else{echo 'index.php?page=home#saleproducts_main';} ?>">Aktionen</a></li>
          <li><a href="<?php if( !isset($_GET['page']) || $_GET['page'] == 'home' ){echo '#contact';}else{echo 'index.php?page=home#contact';} ?>">Kontakt</a></li>
          <li><a href="index.php?page=Shop">Shop</a></li>
        <li>
            <?php if( !is_logged_in() && !isset($_SESSION["is_admin"])){ echo "<a href='index.php?page=Registrieren'>Login</a>"; } ?>
            <?php if( is_logged_in() && !isset ($_SESSION['is_admin']) && isset($_SESSION["user"]["user_id"])){ echo "<a href='index.php?page=profile'>Profile</a>"; } ?>
            <?php if( is_logged_in() && isset ($_SESSION['is_admin']) && isset($_SESSION["user"]["user_id"])){ echo "<a href='backend/index.php'>Backend</a>"; }?>

        </li>
        <?php if($admin) {
            echo "<li><a href=\"backend/index.php?page=dashbord\">Backend</a></li>";
          } ?>
          <li class="cart">
            <a href="index.php?page=Warenkorb">CART</a>
          <?php
          $cnt = mysqli_num_rows($cart);
            if($cnt > 0) {
                echo '<span id = "cart-counter" >'.$cnt.'</span >';
            }
            ?>
          </li>

          <?php if( is_logged_in()){ echo '<li><a href=\'index.php?page=home&action=logout\'><i class="fa fa-sign-out logout" aria-hidden="true"></i></a></li>'; }; ?>

  		</ul>
        <div id="cart-display" class="cart-header">
            <?php
            $cnt = 0;
            $price = 0;
            while ($row = mysqli_fetch_assoc($cart)) {
                mysqli_data_seek($products, 0);
                while ($row2 = mysqli_fetch_assoc($products)) {
                    if ($row['product_id'] == $row2['id']) {
                        $cnt++;
                        $price += $row2['price'] * $row['quantity'];
                        ?>
                        <div class="cart-header-item">
                            <img src="<?php echo $row2['pic']; ?>"/>
                            <span class="cart-header-name"><?php echo $row2['_name']; ?></span>
                            <span id="cart-header-quantity"><?php echo $row['quantity']; ?></span>
                        </div>
                        <?php
                    }
                }
            }
            if($price < 40){
               $price += 5;
            }
            if($cnt != 0) {
                echo "<span class='cart-header-price'>" . $price . "€</span>";
            }
            ?>
        </div>
  	</nav>
  </header>
