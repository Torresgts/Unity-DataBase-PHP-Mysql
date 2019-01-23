<?php

//Server Infos for Connection
$servername = "localhost" //It can be localhost;
$username = "";
$password = "";
$dbname = "" // The name of your database (usually is: "yourusername_databasename");

//variables submited by user (in Unity)
$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];


// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM users WHERE username = '" . $loginUser ."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    //Tell user that name is already taken
    echo "Username is already taken.";
    
    
} else {
    echo "Creating user.";

    //Insert the user and password into the database
    $sql2 = "INSERT INTO users (username, password, level, coins) VALUES ('" . $loginUser ."', '" . $loginPass ."', 1, 0)";

    if($conn->query($sql2) === TRUE)
    {
        echo "New record created successfuly";
    }
    else 
    {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
}
$conn->close();

?>