<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dirctions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    $button = $_POST["button"];
    $stmt = $conn->prepare("INSERT INTO robot (moves) VALUES (?)");
    if ($stmt === false) {
        die('Prepare Error: ' . $conn->error);
    }
    
    $stmt->bind_param("s", $button);
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Execute Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();

?>
