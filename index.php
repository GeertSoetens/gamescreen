<?php
session_start();
$username = $_SESSION['name'];
if (isset($username) && !empty($username)){
    $out = "<p id=\"logout_header_top\">Welcome <span style=\"color: #FFFFE7;\">$username</span><a id='logoutlink_header_top' href=\"login_database.php?logout=true\"> (Logout)</a></p>";
}else{
    $out = '<a href="login.php">Login</a>';
}
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Gamescreen - Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="CSS/cssreset.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script>
            function showDiv() {
                document.getElementById('div_popup').style.display = "block";
            }
        </script>
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
            <img id="header_img" src="IMG/fotodiv3.jpg">
        </header>
        <div id="background_div_mid">
            <div id="title_div_mid">
                <h1 id="title_parent">LATEST POSTS</h1>
            </div>
            <div id="parent_div_mid">
                <div id="child1_mid" class="child_div_mid">
                    <div id="foto_div_1" class="child_child_div"></div>
                    <h1 class="title_child_div"><span class="span_child_title">PLACEHOLDER</span></h1>
                    <h1 class="contentgame_child_div">OVERWATCH</h1>
                    <p class="content_child_div">
                        This is placeholder text,
                        You will find the most recent posts
                        about the title or the picture above.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                    </p>
                    <p class="read_more_mid"><a href="#">Read more...</a></p>
                    <hr class="line_mid">
                    <p class="date_child_mid">-27/09-</p>
                </div>
                <div id="child2_mid" class="child_div_mid">
                    <div id="foto_div_2" class="child_child_div"></div>
                    <h1 class="title_child_div"><span class="span_child_title">PLACEHOLDER</span></h1>
                    <h1 class="contentgame_child_div">WORLD OF WARCRAFT</h1>
                    <p class="content_child_div">
                        This is placeholder text,
                        You will find the most recent posts
                        about the title or the picture above.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                    </p>
                    <p class="read_more_mid"><a href="#">Read more...</a></p>
                    <hr class="line_mid">
                    <p class="date_child_mid">-27/09-</p>
                </div>
                <div id="child3_mid" class="child_div_mid">
                    <div id="foto_div_3" class="child_child_div"></div>
                    <h1 class="title_child_div"><span class="span_child_title">PLACEHOLDER</span></h1>
                    <h1 class="contentgame_child_div">DEAD BY DAYLIGHT</h1>
                    <p class="content_child_div">
                        This is placeholder text,
                        You will find the most recent posts
                        about the title or the picture above.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                    </p>
                    <p class="read_more_mid"><a href="#">Read more...</a></p>
                    <hr class="line_mid">
                    <p class="date_child_mid">-27/09-</p>
                </div>
            </div>
            <ul>
                <li id="more_posts_mid"><a id="more_posts_mid" href="#"><span id="border_mid_post">Show more posts</span></a></li>
            </ul>
            <div id="parent_div_bot">
                <div id="child1_bot" class="child_div_bot">
                    <h1 class="title_child_bot">PLACEHOLDER</h1>
                    <h1 class="subtitle_child_bot">WII U</h1>
                    <p class="content_child_bot">
                        This is placeholder text,
                        You will find the most recent posts
                        about the title or the picture above.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                    </p>
                    <p class="read_more_mid"><a href="#">Read more...</a></p>
                </div>
                <div id="child2_bot" class="child_div_bot">
                    <h1 class="title_child_bot">PLACEHOLDER</h1>
                    <h1 class="subtitle_child_bot">NINTENDO SWITCH</h1>
                    <p class="content_child_bot">
                        This is placeholder text,
                        You will find the most recent posts
                        about the title or the picture above.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                    </p>
                    <p class="read_more_mid"><a href="#">Read more...</a></p>
                </div>
                <div id="child3_bot" class="child_div_bot">
                    <h1 class="title_child_bot">PLACEHOLDER</h1>
                    <h1 class="subtitle_child_bot">XBOX ONE X</h1>
                    <p class="content_child_bot">
                        This is placeholder text,
                        You will find the most recent posts
                        about the title or the picture above.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                    </p>
                    <p class="read_more_mid"><a href="#">Read more...</a></p>
                </div>
                <div id="child4_bot" class="child_div_bot">
                    <h1 class="title_child_bot">PLACEHOLDER</h1>
                    <h1 class="subtitle_child_bot">PLAYSTATION 4</h1>
                    <p class="content_child_bot">
                        This is placeholder text,
                        You will find the most recent posts
                        about the title or the picture above.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                        There will be some links here too.
                        about the title or the picture above.
                        There will be some links here too.
                    </p>
                    <p class="read_more_mid"><a href="#">Read more...</a></p>
                </div>
            </div>
            <h1 id="copyright_bot">Copyright © 2017 Gamescreen</h1>
    </body>
</html>
