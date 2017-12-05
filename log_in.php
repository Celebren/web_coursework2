<?php
    session_start();
    include 'connect.php';
    include 'process-registration-form.php';
    include 'process-log-in-form.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baker's Pizza - Sign in</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="mystyles.css" media="screen"/>
        <!-- javascript function that checks if passwords match -->
        <script>
            var check = function() {
                if (document.getElementById('password1').value ==
                    document.getElementById('password2').value) {
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Passwords matching';
                } else {
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').innerHTML = 'Passwords not matching';
                }
            }
        </script>
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
                        } else {
                            echo "<a href=\"log_in.php\" class=\"nodecor menuLinks2\">Log-in/Register</a></li>";
                        }
                    ?>                                   
            </ul>
        </div>


        <div class="content">

            <div class="main">
                    <p>Please provide required details to register. If you have registered before, log in using your email and password.</p><hr>
                
                <!-- Registration and sign-in forms -->
                <div class="forms">

                    <div class="registration">
                        <fieldset style="padding-right: 50px">
                            <p><b>New customer registration</b></p>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="indent">
                                Name:<br>
                                <input type="text" name="name" value="" required>
                                <br>
                                E-mail:<br>
                                <input type="email" name="email" value="" required>
                                <br>
                                Address Line 1: <br>
                                <input type="text" name="addressline1" value="" required>
                                <br>
                                Address Line 2: <br>
                                <input type="text" name="addressline2" value="">
                                <br>
                                City: <br>
                                <input type="text" name="city" value="" required>
                                <br>
                                Post Code: <br>
                                <input type="text" name="postcode" value="" required>
                                <br>
                                Contact Telephone Number: <br>
                                <input type="text" pattern="\d*" name="phone" value="" maxlength="10" required>
                                <br>
                                Password: <br>
                                <input type="password" name="password1"  id="password1" value="" required onkeyup="check();"/>
                                <br>
                                Repeat Password: <br>
                                <input type="password" name="password2" id="password2" value="" required onkeyup="check();"/>
                                <br>
                                <span id="message"></span>
                                <br><br>
                                <input type="submit" name="register" value="Register" class="indent">
                            </form>
                        </fieldset>
                    </div>

                    <div class="login">
                        <fieldset style="padding-right: 50px">
                            <p><b>Existing customer log-in</b></p>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="indent">
                                E-mail:<br>
                                <input type="email" name="email1" value="">
                                <br>
                                Password:<br>
                                <input type="password" name="password3" value="">
                                <br><br>
                                <input type="submit" name="log-in" value="Log-in" class="indent">
                            </form>
                        </fieldset>
                    </div>
                        
                </div>
                <div class="floatclear">
                    <br><hr>
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
        </div>
    </body>
</html>