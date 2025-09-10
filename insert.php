<?php
$servername = "127.0.0.1:3307";  // MySQL server
$username   = "root";           // MySQL username
$password   = "";               // MySQL password
$dbname     = "credibledb";     // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data

$name   = $_POST['name'];
$mobile = $_POST['mobile'];
$city   = $_POST['city'];

// Insert data
$sql = "INSERT INTO student ( name, mobile, city) VALUES ( '$name', '$mobile', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "✅ New record created successfully!";
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
