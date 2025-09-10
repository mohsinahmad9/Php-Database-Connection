<?php
$servername = "127.0.0.1:3307";   // MySQL server
$username = "root";          // MySQL username
$password = "";              // MySQL password
$dbname = "credibledb";     // Database name
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "✅ Connected successfully";

$sql = "INSERT INTO emp (id,name,mobile,city) VALUES (2, 'sandeep', '9897665544','noida')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
