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
    <script src="jquery-1.12.2.min.js"></script>
    <script src="script.js"></script>
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
            <li><a href="#">nochwas</a></li>
            <li><a href="../index.php?page=home">Frontend</a></li>
        </ul>
       <div class="handle">&#9776;﻿</div>
</header>

<div class="backend_wrapper">

<nav class="nav_backend" >
    <ul >
        <li><a href="index.php?page=dashboard">Dashboard</a></li>
        <li><a href="index.php?page=admins">Admin</a></li>
        <li><a href="index.php?page=users">Users</a></li>
        <li><a href="index.php?page=staff">Mitarbeiter</a></li>
        <li><a href="index.php?page=shop">Shop</a></li>   <!-- category + item -->
        <li><a href="index.php?page=orders">Bestellungen</a></li>
        <li><a href="index.php?page=kurse">Kurse</a></li>
        <li><a href="index.php?page=content">Content</a></li>
        <li><a href="index.php?page=socialmedia">Social Media</a></li>
    </ul>
</nav>

