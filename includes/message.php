<?php
    
    echo "1";

    //define variables and set them equal to empty values
    $name = $email = $message = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $message = test_input($_POST["message"]);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //$hashed = hash('sha512', $password);  //database password field must be CHAR 128 length

    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO messagess (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_prepare("sss", $name, $email, $message);

    //execute
    $stmt->execute();

    echo "New record was created successfully";
    $stmt->close();
    $conn->close();
?>