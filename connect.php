<?php
    // connect to the databse
    $server = 'localhost';    
    $username = 'root';    
    $password = '';
    $database = '40321603';

    $connect = mysqli_connect($server, $username, $password, $database);
    
    // check connection
    if (mysqli_connect_errno()) {
        die ('Could not connect to the database: '.mysqli_connect_error());
    }
?>