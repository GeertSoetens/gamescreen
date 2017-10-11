<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if($_GET['err']){
        $out = "<p style='color: red; margin-top: 25px; font-family: \"Roboto\", sans-serif; text-align: center;'>Your username/password is incorrect</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Login - Gamescreen</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/stylesheetLogin.css">
        <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="CSS/cssreset.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
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
        <div id="background_div_mid_login">
            <?php echo $out ?>
            <form class="form_login_register" method="post" action="login_database.php">
                <h1 id="login_title">LOGIN</h1>
                <input name="un" type="text" placeholder="Username"><br>
                <input name="pw" type="password" placeholder="Password"><br>
                <input type="submit" value="LOGIN">
                <p class="message">Not registered? <a href="register.php">Create an account</a></p>
            </form>
        </div>
    </header>
    </body>
</html>
