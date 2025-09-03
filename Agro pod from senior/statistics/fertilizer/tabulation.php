<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    table{
        border-collapse: collapse;
        width: 100%;
        color: black;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }
    th{
        background-color: blue;
        color: white;
    }
    tr:hover{
        background-color: brown;
    }
  </style>
</head>
<body>
     <table>  
       <caption style="caption-side:top;text-align:right;color:aqua;">Note:The Sales measured in Mtn (Metric Ton),2005/06,2006/07,2019/20 AD</caption>
              <tr>
                <th>Type</th>
                <th>2005/06</th>
                <th>2006/07</th>
                <th>2019/20</th>
            </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "statistics";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Type,FirstYear,SecondYear,ThirdYear FROM fertilizersale";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["Type"]."</td><td>". $row["FirstYear"]."</td><td>".$row["SecondYear"]."</td><td>".$row["ThirdYear"]."</td></tr>"."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 
  </table>
    </div>
</body>
</html>