<?php
/**
 * Created by PhpStorm.
 * User: geertsoetens
 * Date: 11/10/2017
 * Time: 16:09
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Gamescreen - Communities</title>
        <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="CSS/cssreset.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <ul>
            <li onclick="showDiv()" id="myaccount_li"><a id="myaccount_a" href="#">My Account</a></li>
        </ul>
        <div id="div_popup">

        </div>
        <p id="top_logo">GA<span id="top_logo_screen">MESCRE</span>EN</p>
        <nav id="navbar_top">
            <ul>
                <li><a class="link_menu" href="index.php">HOME</a></li>
                <li><div class="circles_nav"></div></li>
                <li><a class="link_menu" href="#">GAMES</a></li>
                <li><div class="circles_nav"></div></li>
                <li><a class="link_menu" href="#">COMMUNITIES</a></li>
                <li><div class="circles_nav"></div></li>
                <li><a class="link_menu" href="#">FORMS</a></li>
            </ul>
        </nav>
        <header>
            <img id="header_img" src="IMG/witcher3_headerimg.png">
        </header>
    </body>
</html>