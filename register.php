<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $link = new mysqli('localhost', 'root', 'root', 'gamescreen');
//    $username1 = $link->real_escape_string($username);
//    $password1 = $link->real_escape_string($password);
//    $email1 = $link->real_escape_string($email);
    $sql = "INSERT INTO login (username, password) VALUES ('$username','$password')";

    if (preg_match('/script/', $username) || preg_match('/script/', $password)) {
        echo "Uhm... Could you just not do that?";
        die();
    }
    $result = $link->query($sql);
    $link->close();
    header("location:login.php");
}
?>
<?php

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
        <form id="form_register" class="form_login_register" method="post" action="register.php">
            <h1 id="login_title">REGISTER</h1>
            <input name="username" type="text" placeholder="Username (How you will be called on the website) "><br>
            <input name="password" type="password" placeholder="Password"><br>
            <input type="password" placeholder="Confirm Password"><br>
            <input name="email" type="text" placeholder="E-mail (Used to login)"><br>
            <input type="text" placeholder="Confirm E-mail"><br>
            <input name="verzend" id="submit" type="submit" value="Create Account"><br>
            <p class="message">Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</header>
</body>
</html>
