<?php
    $db_user = "root";
    $server = "localhost";
    $db_password = "clxMnTBnEeZ7";
    $database = "assignment4";

    $conn = mysqli_connect($server, $db_user, $db_password, $database);

    if(!$conn){
       echo "Error: Unable to connect to database";
    } else {
        echo "HOORAY: A proper connection to database was made";
    }

    mysqli_close($conn);
?>