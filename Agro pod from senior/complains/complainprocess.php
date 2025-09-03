<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agropod";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO complain (name,email,message)
VALUES ('$_POST[name]','$_POST[email]','$_POST[message]')";

if ($conn->query($sql) === TRUE) {
  header('location:../index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>