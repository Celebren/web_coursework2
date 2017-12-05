<?php    
    if (isset($_POST['log-in'])){

        $email='';
        $password='';
        
        $email = $_POST['email1'];
        $password = $_POST['password3'];

        // check if admin is trying to log in
        if ($email == "admin@email.com" && $password == "admin") {
            $_SESSION['name'] = 'administrator';
            header("location:admin.php");
            die();
        } else {
            // look for matches in the database
            $query = "SELECT * FROM users WHERE email='$email' and password='$password'";
            $result = mysqli_query($connect, $query);
            $num = mysqli_num_rows($result);

            if ($num > 0) {
                // if user is found in database, add their name to the session 
                // and open the home page viewing it as a logged in user
                $userName = mysqli_query($connect, "SELECT name FROM users WHERE email='$email'");

                while ($row = mysqli_fetch_assoc($userName)) {
                    $_SESSION['name'] = $row['name'];
                }
                
                header("location:home.php");
                die();
            }
        }
        
    }
?>