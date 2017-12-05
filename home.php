<?php
    session_start();
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baker's Pizza</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="mystyles.css" media="screen"/>
    </head>

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

            <!-- Main content at the center of the page -->
            <div class="main frame">

                <div class="storeDescription">
                    <h2>Welcome to Baker's pizza!</h2>
                    <p><em>"We still remember how to make pizza."</em></p>
                    <p>If you are looking for delicious, real stone oven baked pizza look no further.<br>
                        At Baker's pizza we make <u>real</u> pizza. Our pizzas are baked in our traditional<br>
                        stone oven like in the old days. We never skimp on toppings so you can always<br>
                        enjoy the best oven hot, delicious and affordable, lovingly made pizzas!<br>
                    </p><br>
                </div>

                <div class="ovenPic">
                    <img src="images/pizza-oven-2537308_1280.jpg" alt="Our oven" height="188" width="320">
                </div>

                <div class="floatclear"></div>
                    
                <hr><br>
                <div class="storeDescription">
                    <fieldset>
                        <legend><b>Opening Hours:</b></legend>
                        <div class="indent">
                            <table>
                                <tr><td>Monday:</td><td>9am - 12am</td></tr>
                                <tr><td>Tuesday:</td><td>9am - 12am</td></tr>
                                <tr><td>Wednesday:</td><td>9am - 12am</td></tr>
                                <tr><td>Thursday:</td><td>9am - 12am</td></tr>
                                <tr><td>Friday:</td><td>9am - 12am</td></tr>
                                <tr><td>Monday:</td><td>9am - 12am</td></tr>
                                <tr><td>Sunday:</td><td>9am - 12am</td></tr>
                            </table>
                        </div>
                    </fieldset>
                </div>
                
                <div class="ovenPic">
                    <fieldset style="width: 500px">
                        <legend>Deals and offers:</legend>
                        <ul>
                            <li><a href="wip.php" class="nodecor black"><b>Menu meal deal for 1:</b> any 1 small pizza, plus can of drink £5</a></li>
                            <br/>
                            <li><a href="wip.php" class="nodecor black"><b>Menu deal 2 for 1:</b> any 2 medium or large pizzas</a></li>
                        </ul>
                    </fieldset>
                </div>

                <div class="floatclear"></div>
                
                <hr>
            </div>
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
    </body>
</html>