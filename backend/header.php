<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:35
 */
?>

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
    <script src="script.js"></script>
    <script src="statistic.js"></script>

</head>
<body class="body_backend">
<header class="header_backend">
    <div class=" logo_wrapper">
        <h1 class="logo">
            <a href="index.php?page=dashboard">
                Logo
            </a>
        </h1>
    </div>

        <ul class="nav_header_backend">
            <li><a href="../index.php?page=home">Frontend</a></li>
            <li><a href="#">Username</a></li>
            <li><a href="../index.php?page=home&amp;action=logout"><i class="fa fa-sign-out logout" aria-hidden="true"></i></a></li>
        </ul>
       <!--<div class="handle">&#9776;﻿</div>-->
</header>

<div class="backend_wrapper">

    <nav class="nav_backend" >
        <ul class="sidebar">
            <li>
                    <a href="index.php?page=dashboard">
                        <i class="fa fa-pie-chart"></i><span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
            </li>
            <li>
                <a href="index.php?page=statistik">
                    <i class="fa fa-bar-chart"></i><span class="title">Statistik</span>
                    <span class="selected"></span>
                </a>
            <li>
                <a href="">
                    <i class="fa fa-users"></i><span class="title">Users</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub_menu">
                    <li><a href="index.php?page=admins">
                            <i class="fa fa-star"></i><span class="title">Admin</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li><a href="index.php?page=users">
                            <i class="fa fa-user"></i><span class="title">Users</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-sitemap"></i><span class="title">Content</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub_menu">
                    <li><a href="index.php?page=contents">
                            <i class="fa fa-file"></i><span class="title">Content</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li><a href="index.php?page=courses">
                            <i class="fa fa-graduation-cap"></i><span class="title">Courses</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li><a href="index.php?page=header_items">
                            <i class="fa fa-anchor"></i><span class="title">Header Items</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li><a href="index.php?page=employees">
                            <i class="fa fa-user-md"></i><span class="title">Employees</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li><a href="index.php?page=socialmedia_icons">
                            <i class="fa fa-twitter"></i><span class="title">Social Media Icons</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-shopping-basket"></i><span class="title">Shop</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub_menu">
                    <li><a href="index.php?page=shop_categories">
                            <i class="fa fa-file"></i><span class="title">Categories</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li><a href="index.php?page=products">
                            <i class="fa fa-gift"></i><span class="title">Products</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li><a href="index.php?page=orders">
                            <i class="fa fa-credit-card-alt"></i><span class="title">Orders</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li><a href="index.php?page=bestell_items">
                            <i class="fa fa-user-md"></i><span class="title">Order Icons</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.php?page=statistik">
                    <i class="fa fa-commenting-o"></i><span class="title">User Messages</span>
                    <span class="selected"></span>
                </a>
            <li>
                <a href="index.php?page=log">
                    <i class="fa fa-database"></i><span class="title">Log</span>
                    <span class="selected"></span>
                </a>
            </li>

        </ul>
    </nav>



    <!-- FLYOUT -->

    <!-- <nav class='nav_backend'>
        <ul>
             <li>
                 <a href="index.php?page=dashboard"><span>Dashboard</span></a>
             </li>
             <li>
                 <a href="index.php?page=admins">Admin</a>
                 <ul>
                   <li><a href='#'><span>Lorem</span></a></li>
                </ul>
             </li>
             <li>
                 <a href="index.php?page=users">Users</a>
                 <ul>
                   <li><a href='#'><span>Lorem</span></a></li>
                </ul>
             </li>
             <li>
                 <a href="index.php?page=staff">Mitarbeiter</a>
                 <ul>
                   <li><a href='#'><span>Lorem</span></a></li>
                </ul>
             </li>
             <li>
                 <a href="index.php?page=shop_categories">Shop Kategorien</a>
                 <ul>
                   <li><a href='#'><span>Lorem</span></a></li>
                   <li><a href='#'><span>Lorem</span></a></li>
                </ul>
             </li>
             <li>
                 <a href="index.php?page=shop_item">Shop Items</a>
                 <ul>
                   <li><a href='#'><span>Lorem</span></a></li>
                   <li><a href='#'><span>Lorem</span></a></li>
                   <li><a href='#'><span>Lorem</span></a></li>
                </ul>
             </li>
             <li>
                 <a href="index.php?page=orders"><span>Bestellungen</span></a>
                 <ul>
                   <li><a href='#'><span>Lorem</span></a></li>
                   <li><a href='#'><span>Lorem</span></a></li>
                   <li><a href='#'><span>Lorem</span></a></li>
                </ul>
             </li>
             <li>
                 <a href="index.php?page=kurse"><span>Kurse</span></a>
                 <ul>
                   <li><a href='#'><span>Neue Kurse</span></a></li>
                </ul>
             </li>
             <li>
                 <a href="index.php?page=content">Content</a></li>
             </li>
             <li>
                 <a href="index.php?page=socialmedia">Social Media</a>
             </li>
        </ul>
    </nav> -->
