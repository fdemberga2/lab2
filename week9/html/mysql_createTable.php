<?php
$servername = "http://apcwebprog.csf.ph/phpmyadmin/";
$username = "webprogmi212";
$password = "webprogmi212";
$dbname = "fdemberga_masterclass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Registrants (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
email VARCHAR(50),
website VARCHAR(100) NOT NULL,
comment VARCHAR(100),
gender VARCHAR(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Masterclass created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>