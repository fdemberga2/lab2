<?php
$servername = "localhost";
$username = "webprogmi212";
$password = "webprogmi212";
$dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, NAME, EMAIL, WEBSITE, COMMENT, GENDER FROM fdemberga_masterclass";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " | Name: " . $row["firstname"]. "<br>Email: " . $row["email"]. "<br>Website: " . $row ["website"]. "<br>Comment: " . $row ["comment"]. "<br>Gender: " . $row ["gender"]. "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>