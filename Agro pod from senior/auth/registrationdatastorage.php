<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agropod";
$table = "admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = " INSERT INTO $table (firstname, middlename,lastname,address,username,password)
VALUES ('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[address]','$_POST[username]','$_POST[password]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
header('Location:login.php');
?>
