<!DOCTYPE html>
<html lang="de" class="html_backend">
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
    <!-- favicon -->
    <link rel="icon" type="icon" href="" sizes="16x16">

    <!-- stylesheet -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../font/fontawesome/css/font-awesome.min.css">
    <!-- jQuery library (served from Google) -->
    <script src="../js/jquery-1.12.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.4/d3.min.js"></script>
    <script src="d3pie.min.js"></script>
    <script src="statistic.js"></script>
    <script src="script.js"></script>

</head>
<body class="body_backend">
<div class="notification"><h4>Notificationtext</h4></div>
<header class="header_backend">
    <div class=" logo_wrapper">
        <h1 class="logo">
            <a href="index.php?page=dashboard">
                Logo
            </a>
        </h1>
    </div>

        <ul class="nav_header_backend">
            <li>Welcome <?php echo $_SESSION['user']['username']; ?></li>
            <li><a href="../index.php?page=home">Frontend</a></li>

            <li><a href="../index.php?page=home&amp;action=logout"><i class="fa fa-sign-out logout" aria-hidden="true"></i></a></li>
        </ul>
       <!--<div class="handle">&#9776;﻿</div>-->
</header>

<div class="backend_wrapper">

    <nav class="nav_backend" >
        <ul class="sidebar">
            <li>
                <p onClick="load_Content('dashboard', '1', 'id', 'ASC')">
                        <i class="fa fa-pie-chart"></i><span class="title">Dashboard</span>
                        <span class="selected"></span>
                </p>
            </li>
            <li>
                <p onClick="load_Content('statistik', '1', 'id', 'ASC')">
                    <i class="fa fa-bar-chart"></i><span class="title">Statistik</span>
                    <span class="selected"></span>
                </p>
            <li>
                <p>
                    <i class="fa fa-users"></i><span class="title">Users</span>
                    <span class="arrow"></span>
                </p>
                <ul class="sub_menu">
                    <li><p onClick="load_Content('admins', '1', 'id', 'ASC')">
                            <i class="fa fa-star"></i><span class="title">Admin</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('users', '1', 'id', 'ASC')">
                            <i class="fa fa-user"></i><span class="title">Users</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                </ul>
            </li>
            <li>
                <p>
                    <i class="fa fa-sitemap"></i><span class="title">Content</span>
                    <span class="arrow"></span>
                </p>
                <ul class="sub_menu">
                    <li><p onClick="load_Content('contents', '1', 'id', 'ASC')">
                        <i class="fa fa-file"></i><span class="title">Content</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('courses', '1', 'id', 'ASC')">
                            <i class="fa fa-graduation-cap"></i><span class="title">Courses</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('header_items', '1', 'id', 'ASC')">
                            <i class="fa fa-anchor"></i><span class="title">Header Items</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('employees', '1', 'id', 'ASC')">
                            <i class="fa fa-user-md"></i><span class="title">Employees</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('socialmedia_icons', '1', 'id', 'ASC')">
                            <i class="fa fa-twitter"></i><span class="title">Social Media Icons</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                </ul>
            </li>
            <li>
                <p>
                    <i class="fa fa-shopping-basket"></i><span class="title">Shop</span>
                    <span class="arrow"></span>
                </p>
                <ul class="sub_menu">
                    <li><p onClick="load_Content('shop_categories', '1', 'id', 'ASC')">
                            <i class="fa fa-file"></i><span class="title">Categories</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('products', '1', 'id', 'ASC')">
                            <i class="fa fa-gift"></i><span class="title">Products</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('orders', '1', 'id', 'ASC')">
                            <i class="fa fa-credit-card-alt"></i><span class="title">Orders</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('bestell_items', '1', 'id', 'ASC')">
                            <i class="fa fa-user-md"></i><span class="title">Order Items</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('carts', '1', 'id', 'ASC')">
                            <i class="fa fa-shopping-basket"></i><span class="title">Cart</span>
                            <span class="selected"></span>
                        </p>
                    </li>
                    <li><p onClick="load_Content('delivery_options', '1', 'id', 'ASC')">
                            <i class="fa fa-truck" aria-hidden="true"></i><span class="title">Delivery Options</span>
                            <span class="selected"></span>
                        </p>
                    </li>

                </ul>
            </li>
            <li>
                <p onClick="load_Content('user_messages', '1', 'id', 'ASC')">
                    <i class="fa fa-commenting-o"></i><span class="title">User Messages</span>
                    <span class="selected"></span>
                </p>
            <li>
                <p onClick="load_Content('logs', '1', 'id', 'ASC')">
                    <i class="fa fa-database"></i><span class="title">Log</span>
                    <span class="selected"></span>
                </p>
            </li>

        </ul>
    </nav>

    <section class="content-wrapper_backend">
        <section class="wrapper-form-backend">
            </section>
       <!-- <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>-->
        </section>
