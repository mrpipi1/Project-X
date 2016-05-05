<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16/04/16
 * Time: 15:35
 */
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
    <!-- favicon -->
    <link rel="icon" type="icon" href="" sizes="16x16">

    <!-- stylesheet -->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- jQuery library (served from Google) -->
    <script src="../jquery-1.12.2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.4/d3.min.js"></script>
    <script src="d3pie.min.js"></script>
    <script src="../script.js"></script>
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
            <li><a href="#">profil</a></li>
            <li><a href="../index.php?page=home">Frontend</a></li>
            <li><a href="../index.php?page=home&amp;action=logout">logout</a></li>
        </ul>
       <div class="handle">&#9776;﻿</div>
</header>

<div class="backend_wrapper">

    <nav class="nav_backend" >
        <ul >
            <li><a href="index.php?page=dashboard"> <img class="icon" src=" ../img/icons/statistik.svg" /><span class="text-wrapper">Dashboard</span></a></li>
            <li><a href="index.php?page=statistik"> <img class="icon" src=" ../img/icons/statistik.svg" /><span class="text-wrapper">Statistik</span></a></li>
            <li><a href="#"> <img class="icon" src=" ../img/icons/statistik.svg" /><span class="text-wrapper">Users</span></a>
                <ul>
                    <li><a href="index.php?page=admins"> <span class="text-wrapper">Admin</span></a></li>
                    <li><a href="index.php?page=users"> <span class="text-wrapper">Users</span></a></li>
                </ul>
            </li>
            <li><a href="#"> <img class="icon" src=" ../img/icons/statistik.svg" /><span class="text-wrapper">Content</span></a>
                <ul>
                    <li><a href="index.php?page=contents"> <span class="text-wrapper">Content</span></a></li>
                    <li><a href="index.php?page=courses"> <span class="text-wrapper">Courses</span></a></li>
                    <li><a href="index.php?page=header_items"> <span class="text-wrapper">Header Items</span></a></li>
                    <li><a href="index.php?page=employees"> <span class="text-wrapper">Employees</span></a></li>
                    <li><a href="index.php?page=socialmedia_icons"> <span class="text-wrapper">Social Media Icons</span></a></li>
                </ul>
            </li>
            <li><a href="#"> <img class="icon" src=" ../img/icons/statistik.svg" /><span class="text-wrapper">Shop</span></a>
                <ul>
                    <li><a href="index.php?page=shop_categories"> <span class="text-wrapper">Categories</span></a></li>
                    <li><a href="index.php?page=products"> <span class="text-wrapper">Products</span></a></li>
                    <li><a href="index.php?page=orders"> <span class="text-wrapper">Orders</span></a></li>
                    <li><a href="index.php?page=bestell_items"> <span class="text-wrapper">Order Icons</span></a></li>
                </ul>
            </li>
            <li><a href="index.php?page=user_messages"> <img class="icon" src=" ../img/icons/statistik.svg" /><span class="text-wrapper">User Messages</span></a></li>
            <li><a href="index.php?page=log"> <img class="icon" src=" ../img/icons/statistik.svg" /><span class="text-wrapper">Log</span></a></li>


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
