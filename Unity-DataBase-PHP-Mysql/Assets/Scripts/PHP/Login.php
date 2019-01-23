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

$sql = "SELECT password FROM users WHERE username = '" . $loginUser ."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       if($row["password"] == $loginPass)
       {
            echo "Login Success.";
       }
       else{
           echo "Wrong Credentials";
       }
    }
} else {
    echo "Username does not exist.";
}
$conn->close();

?>