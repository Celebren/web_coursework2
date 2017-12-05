<?php

    // if new user, add user to databse

    if (isset($_POST['register'])){
        
        //reset all variables
        $name='';
        $email='';
        $address1='';
        $address2='';
        $city='';
        $postcode='';
        $phone='';
        $password='';

        if (!empty($_POST['name'])){
            $name = $_POST['name'];
        }

        if (!empty($_POST['email'])){
            $email = $_POST['email'];
        }

        if (!empty($_POST['addressline1'])){
            $address1 = $_POST['addressline1'];
        }

        if (!empty($_POST['addressline2'])){
            $address2 = $_POST['addressline2'];
        }

        if (!empty($_POST['city'])){
            $city = $_POST['city'];
        }

        if (!empty($_POST['postcode'])){
            $postcode = $_POST['postcode'];
        }

        if (!empty($_POST['phone'])){
            $phone = $_POST['phone'];
        }

        if (!empty($_POST['password1'])){
            $password = $_POST['password1'];
        }

        $query = "INSERT INTO users (name, email, address1, address2, city, postcode, phone, password) VALUES ('$name', '$email', '$address1', '$address2', '$city', '$postcode', '$phone', '$password')";
        
        mysqli_query($connect, $query);        

        // set session as the user's name and go to home page as a new user
        $_SESSION['name'] = $name;
        header("location:home.php");
        
        die();
    }