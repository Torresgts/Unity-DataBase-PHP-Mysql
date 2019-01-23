<?php

//Server Infos for Connection
$servername = "localhost" //It can be localhost;
$username = "";
$password = "";
$dbname = "" // The name of your database (usually is: "yourusername_databasename");

//variables submited by user
$loginUser = $_POST["loginUser"];
//$loginPass = $_POST["loginPass"];
$coins = $_POST["coins"];

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Update the values in the table
$sql2 = "UPDATE users SET coins = '" . $coins ."' WHERE username = '" . $loginUser ."'";

$result = $conn->query($sql2);

    echo "Updating Data.";

    if($conn->query($sql2) === TRUE)
    {
        echo "Data Updated Successfuly";
    }
    else 
    {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

$conn->close();

?>