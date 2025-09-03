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
        color:black;
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
      <caption style="caption-side:top;text-align:right;color:aqua;">Note:The Area('000 Hectares)</caption>
              <tr>
                <th>Category</th>
                <th>Area</th>
                <th>Percentage<br></th>
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

$sql = "SELECT Category,Area,Percentage FROM landusedistributionbycategory";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["Category"]."</td><td>". $row["Area"]."</td><td>".$row["Percentage"]."%"."</td></tr>". "<br>";
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