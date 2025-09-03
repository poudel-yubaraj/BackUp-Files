
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

$sql = "SELECT * FROM landusedistributionbycategory where Category='$_POST[category]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //  echo $row[$_POST["year"]];
        session_start();
        $_SESSION["landuse"]=  $row[$_POST["type"]];
    // echo $row[$_POST["type"]];  
        header('Location:../landusebycategory.php');
  }
} else {
  echo "0 results";
}
$conn->close();
 
?>