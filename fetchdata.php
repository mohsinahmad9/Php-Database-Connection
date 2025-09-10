<?php
$servername = "127.0.0.1:3307";   // MySQL server
$username = "root";          // MySQL username
$password = "";              // MySQL password
$dbname = "credibledb";     // Database name
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM emp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " | Name: " . $row["name"]. " | Mobile: " . $row["mobile"]. " | City:  " .$row["city"]. "<br>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>




