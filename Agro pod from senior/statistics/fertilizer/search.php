
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "statistics";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM fertilizersale where Type='$_POST[type]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //  echo $row[$_POST["year"]];
        session_start();
        $_SESSION["fertilizer"]=  $row[$_POST["year"]];     
        header('Location:../fertilizer.php');
  }
} else {
  echo "0 results";
}
$conn->close();
 
?>