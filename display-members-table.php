<?php 
    
    include 'process-remove-user.php';

    $query = "SELECT * FROM users";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
    
    echo "There are currently $num users registered";

    if ($num > 0) {
        echo '
            <table>
                <tr>
                    <td><b>User ID</b></td>
                    <td><b>User Name</b></td>
                    <td><b>email</b></td>
                    <td><b>Address line 1</b></td>
                    <td><b>Address line 2</b></td>
                    <td><b>City</b></td>
                    <td><b>Post Code</b></td>
                    <td><b>Phone</b></td>
                    <td></td>
                </tr>
        ';

        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                <tr>
                    <td>".$row['usrID']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['address1']."</td>
                    <td>".$row['address2']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['postcode']."</td>
                    <td>".$row['phone']."</td>
                    <td><a href=\"admin.php?removeID=$row[usrID]\">remove</a></td>
                </tr>
            ";
        }
        echo '</table>';
        mysqli_free_result($result);
        
    }
?>