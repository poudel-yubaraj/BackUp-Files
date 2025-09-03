<?php
$loginId = $_POST['username'];
$loginPassword = $_POST['password'];
echo $loginId . $loginPassword;
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
$sql = "SELECT firstname,username,password FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row['username']==$loginId&&$row['password']==$loginPassword)
    {
            session_start();
            $_SESSION['id'] = $loginId;
            $_SESSION['name'] = $row['firstname'];
            $_SESSION['state'] = "login";
            header('location:../admin/admindashboard.php');

    }
    
  }
  if(!isset($_SESSION['state']))
  {
    header('location:login.php');
  }

} else {
  echo "0 results";
}
$conn->close();
?>