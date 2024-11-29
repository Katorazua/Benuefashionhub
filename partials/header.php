<?php require "config/database.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benue | Fashion Hube</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&display=swap" rel="stylesheet">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boxicon cdn Links -->
    <link href='boxicons-2.1.4/css/boxicons.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>    

    <!-- CSS Links -->
     <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!-- start header section -->
    <header>
        <a href="#" class="logo">
            <!-- uncoment if you need  image logo -->
             <!-- <img src="" alt="logo"> -->
             <h1>BFH</h1>
        </a>

        <ul class="navmenu">
            <li><a href="index.php">Home</a></li>
            <li class="submenu"><a href="#shop" aria-disabled="false">Shop</a>
                <ul>
                    <li><a href="men.php">Men</a></li>
                    <li><a href="wemen.php">Wemen</a></li>
                    <li><a href="accessory.php">Accessory</a></li>
                </ul>
            </li> 
            <li><a href="blog.php">Blog</a></li>
            <li><a href="#">Contact</a></li>
            <li class="submenu"><a href="#pages">Pages</a>
                <ul>
                    <li><a href="men.php">Men</a></li>
                    <li><a href="wemen.php">Wemen</a></li>
                    <li><a href="accessory.php">Accessory</a></li>
                </ul>
            </li>            
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="login.php"><i class='bx bx-user'></i></a>
            <a href="login.php" class="avatar">
                <img src="img/client.jpg" alt="avater">
            </a>
            <a href="#"><i class='bx bx-cart' ></i></a>

            <div class="bx bx-menu" id="open-menu-icon"></div>
            <div class="bx bx-x" id="close-menu-icon"></div>
        </div>
    </header><!-- end header section -->