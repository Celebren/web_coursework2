<?php
    session_start();
    include 'connect.php';
    
    // stay on page only if admin is logged in otherwise return to login page
    if ($_SESSION['name'] != "administrator") {
        header("location:warning.html");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baker's Pizza - Under Construction</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="mystyles.css" media="screen"/>        
        <!-- borders for the table -->
        <style>
            table, td {
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <div class="title">
            <a href="process-log-out.php" class="nodecor titleEffect"><h1>Baker's Pizza</h1></a>
        </div>                
        <div class="menu">
            <ul>
                <li><a href="process-log-out.php" class="nodecor menuLinks2">Currently Logged-in as <?php echo $_SESSION['name']; ?> - Log-out</a></li>                                
            </ul>
        </div>

        <div class="content">
            <div class="main">
                <fieldset>
                    <legend><h2>Store Users:</h2></legend>
                    <?php include 'display-members-table.php'; ?>
                </fieldset>
                <p><a href="process-log-out.php">Click here to log out.</a></p>    
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