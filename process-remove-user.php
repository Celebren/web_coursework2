<?php
    if(isset($_GET['removeID'])){
        $userID = $_GET['removeID'];

        $query = "DELETE FROM users WHERE usrID=$userID";

        mysqli_query($connect, $query);
    }
?>