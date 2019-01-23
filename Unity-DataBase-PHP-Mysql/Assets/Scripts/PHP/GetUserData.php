<?php

//Server Infos for Connection
$servername = "localhost" //It can be localhost;
$username = "";
$password = "";
$dbname = "" // The name of your database (usually is: "yourusername_databasename");

//variables submited by user
$loginUser = $_POST["loginUser"];

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, coins FROM users WHERE username = '" . $loginUser ."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "Coins: " . $row["coins"].;
    }
} else {
    echo "0 results";
}
$conn->close();

?>