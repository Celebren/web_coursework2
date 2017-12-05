<?php
    session_start();
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baker's Pizza - Under Construction</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="mystyles.css" media="screen"/>
    </head>

    <!-- PLACEHOLDER PAGES; to be used for links to pages that are not completed yet/work in progress -->
    <body>

        <!-- Tile banner -->
        <div class="title">
            <a href="home.php" class="nodecor titleEffect"><h1>Baker's Pizza</h1></a>
        </div>

        <!-- Menu bar -->               
        <div class="menu">
            <ul>
                <li><a href="pizzas_menu.php" class="nodecor menuLinks">Pizzas</a></li>
                <li><a href="wip.php" class="nodecor menuLinks">Sides</a></li>
                <li><a href="wip.php" class="nodecor menuLinks">Desserts</a></li>
                <li><a href="wip.php" class="nodecor menuLinks">Drinks</a></li>
                <li><a href="wip.php" class="nodecor special">Cart</a></li>
                <li>
                    <!-- if a user is logged in, display their name and show a log out link
                        otherwise display the log-in/register link -->
                    <?php 
                        if (isset($_SESSION['name'])) {
                            echo "<a href=\"process-log-out.php\" class=\"nodecor menuLinks2\">Currently Logged-in as ".$_SESSION['name']." - Log-out</a></li>";
                            echo "<li><a href =\"user_profile.php\" class=\"nodecor menuLinks2\">Profile</a></li>";
                        } else {
                            echo "<a href=\"log_in.php\" class=\"nodecor menuLinks2\">Log-in/Register</a></li>";
                        }
                    ?>                               
            </ul>
        </div>

        <div class="content">
            <div class="main">
                <p> !!! This section is under construction. !!!</p>
                <p><a href="home.php">Click here to return to main page.</a></p>    
            </div>   

            <!-- Page footer with company information -->
            <div class="bottom">
                <address>
                    <b>Where to find us:</b>
                    <div class="indent">
                        Baker's Pizza<br>
                        1 Address Street<br>
                        AB12 3CD<br>
                        Edinburgh<br>
                        tel: 1234 54789
                    </div>
                </address> 
                <p class="copyright">&copy; 2017 Rena Silver, matric. number: 40321603</p>
            </div>
        </div>
    </body>
</html>