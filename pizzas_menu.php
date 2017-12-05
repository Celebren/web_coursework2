<?php
    session_start();
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baker's Pizza - Pizzas</title>
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
            <div class="main">
                <p>Pizzas</p><hr><br>

                <!-- Each div element with the pizza class is a store catalogue item. 
                    More can be added by simply copying and pasing  -->
                
                <!-- 1. Pepperoni pizza -->                
                <div class="pizza">
                    <img src="images/pexels-photo-280453.jpeg" alt="pizza1">    
                    <div class="pizzaname">
                        Pepperoni <br>
                    </div>
                    <div class="pizzainf">
                        cheese, tomato sauce, pepperoni<br><br><br>
                    </div>
                    <select>
                        <option value="small">Small &pound;5</option>
                        <option value="medium">Medium &pound;7</option>
                        <option value="large">Large &pound;10</option>
                    </select>
                    <form action="/action_page.php" class="crust">
                        <label>
                            <input type="checkbox" name="crust" value="stuffed-crust">Stuffed crust (50p extra)
                        </label>
                        <div class="floatclear"></div>
                            <input class="basket" type="submit" value="Add to basket">
                    </form>
                </div>
            
                <!-- 2. Margarita pizza -->
                <div class="pizza">
                    <img src="images/pizza-restaurant-dinner-lunch.jpg" alt="pizza1">    
                    <div class="pizzaname">
                        Margarita <br>
                    </div>
                    <div class="pizzainf">
                        cheese and tomato sauce<br><br><br>
                    </div>
                    <select>
                        <option value="small">Small &pound;5</option>
                        <option value="medium">Medium &pound;7</option>
                        <option value="large">Large &pound;10</option>
                    </select>
                    <form action="/action_page.php" class="crust">
                        <label>
                            <input type="checkbox" name="crust" value="stuffed-crust">Stuffed crust (50p extra)
                        </label>
                        <div class="floatclear"></div>
                            <input class="basket" type="submit" value="Add to basket">
                    </form>
                </div>
                
                <!-- 3. Special pizza -->
                <div class="pizza">
                    <img src="images/vegetables-italian-pizza-restaurant.jpg" alt="pizza1">    
                    <div class="pizzaname">
                        Special Pizza <br>
                    </div>
                    <div class="pizzainf">
                        cheese, tomato sauce, pepperoni, ham, black olives, green peppers, bacon, mushrooms <br>
                    </div>
                    <select>
                        <option value="small">Small &pound;5</option>
                        <option value="medium">Medium &pound;7</option>
                        <option value="large">Large &pound;10</option>
                    </select>
                    <form action="/action_page.php" class="crust">
                        <label>
                            <input type="checkbox" name="crust" value="stuffed-crust">Stuffed crust (50p extra)
                        </label>
                        <div class="floatclear"></div>
                            <input class="basket" type="submit" value="Add to basket">
                    </form>
                </div> 
                 
                <div class="floatclear"></div>
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