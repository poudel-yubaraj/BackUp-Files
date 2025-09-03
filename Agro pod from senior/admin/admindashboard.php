<!DOCTYPE html>
<html>
<head>
<title>Admin </title>
<meta charset="UTF-8">
 <!-- favicon -->
 <link rel="icon" type="images/x-icon" href="../images/seedling-solid.svg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body>
<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>AgroPods</button>
  <span class="w3-bar-item w3-right">Admin</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row ">
    <div class="w3-col s4">
      <img src="../images/<?php session_start();echo $_SESSION["name"];?>.jpg" class="w3-circle w3-margin-right" style="width:100px">
    </div>
    <div class="w3-col s8 w3-bar mt-4 ps-4">
      <span>Welcome, <strong><?php  echo $_SESSION["name"];?></strong></span><br>
      <a href="mailto:jibanrawal4@gmail.com" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>Fertilizer</a>
    <a href="#customers" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>Customer</a>
    <a href="#noticead" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>Notices</a>
    <a href="#downloadad" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>Downloads</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>Forms</a>
    <a href="../auth/logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw" ></i>Log out</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
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


$sql = "SELECT * FROM complain";
$result = $conn->query($sql);
 $count=0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $count++;
  }
  echo $count;
} else {
  echo "0 results";
}

$conn->close();
?>

          </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Complains</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Views</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shares</h4>
      </div>
    </div>
    <div class="w3-quarter">
     <iframe src="usercount.php" frameborder="0" style="width:100%;height:130px;"></iframe>
    </div>
  </div>  
 
  <hr>
  <div class="container-sm">
    <!-- <div class="btn btn-primary my-3 " data-bs-target="#customers" data-bs-toggle="collapse">Custmers</div> -->
    <div class="row text-center" id="customers" collapse="collapse">
      <div class="col-sm-6 ">
        <div class="container border bg-secondary py-3" style="height:auto;width:70%;">
        <div class="d-box bg-light text-primary fs-4 fw-bold">
        <i class="fa-solid fa-file-csv" style="font-size: 150px;"></i><br>
         User Informations </div>

         <a href="https://docs.google.com/spreadsheets/d/1jPMSVZpbI_Y58gqltmuWPdBo2aLUSJzl10VAhvP2kQQ/edit#gid=886600597"><div class="btn btn-info my-3 ">Update</div></a>
        </div>

      </div>
      <div class="col-sm-6">
      <div class="container border bg-secondary py-3" style="height:auto;width:70%;">
        <div class="d-box bg-light text-primary fs-4 fw-bold">
        <i class="fa-solid fa-file-csv" style="font-size: 150px;"></i><br>
         Business Informations </div>

        <a href="https://docs.google.com/spreadsheets/d/1yRUk4tYRBXyczER8oiYnontwXwP-TI05LN9zJwg9MVo/edit#gid=2076049339"><div class="btn btn-info my-3 ">Update</div></a> 
        </div>

      
      </div>
    </div>

   
  </div>
  <hr>
  <div class="container-sm" id="noticead">
  <h5>Notices</h5>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
         <th>Title</th>
         <th>Filename</th>
         <th>Upload Date</th>
      </tr> 
    </thead>
      <tbody>
         
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agropod";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM notice";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["id"]."</td><td>". $row["title"]."</td><td>".$row["filename"]."</td><td>".$row["upload_date"]."</td></tr>". "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 

        <!-- <tr>
          <td>a</td>
          <td>b</td>
          <td>c</td>
        </tr> -->
  </tbody>
  </table>
  <button class="w3-button w3-dark-grey" data-bs-toggle="collapse" data-bs-target="#noticeadd">Add<i class="fa fa-arrow-right"></i></button>
  <button class="w3-button w3-dark-grey" data-bs-toggle="collapse" data-bs-target="#noticedelete">Delete <i class="fa fa-arrow-right"></i></button>
  <div id="noticeadd" class="collapse d-box border border-primary">
   <form action="../notices/notice.php" method="post" class="was-validated" enctype="multipart/form-data">
   <div class="mb-3 mt-3">
   <label for="title" class="form-label">Title:</label>
   <input type="text" id="title" name="title" class="form-control" placeholder="Enter the title of the notice" required>
   <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Check this checkbox to continue.</div>
  </div>
   <div class="mb-3">
    <label for="upload" class="form-label">File:</label>
    <input type="file" class="form-control" id="upload" name="upload"  accept="image/*" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Check this checkbox to continue.</div>
  </div>
   <button type="submit" value="button" class="btn btn-info" value="" name="add">Add</button>
   </form>
  </div>

  <div id="noticedelete" class="collapse d-box border border-primary">
   <form action="../notices/notice.php" method="post" class="was-validated">
   <div class="mb-3 mt-3">
   <label for="id" class="form-label">Valid Id:</label>
   <input type="id" id="id" name="id" class="form-control" placeholder="Enter the id of the notice" required>
   <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Check this checkbox to continue.</div>
  </div>
   <button type="submit" value="button" class="btn btn-info" value="" name="delete">Delete</button>
   </form>
  </div>




  </div>
  <hr>
  <div class="container-sm" id="downloadad">
  <h5>Downloads</h5>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
         <th>Title</th>
         <th>Filename</th>
         <th>Upload Date</th>
      </tr> 
    </thead>
      <tbody>
         
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agropod";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM download";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["id"]."</td><td>". $row["title"]."</td><td>".$row["filename"]."</td><td>".$row["upload_date"]."</td></tr>". "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 


  </tbody>
  </table>
  <button class="w3-button w3-dark-grey" data-bs-toggle="collapse" data-bs-target="#downloadadd">Add<i class="fa fa-arrow-right"></i></button>
  <button class="w3-button w3-dark-grey" data-bs-toggle="collapse" data-bs-target="#downloaddelete">Delete <i class="fa fa-arrow-right"></i></button>
  <div id="downloadadd" class="collapse d-box border border-primary">
   <form action="../downloads/download.php" method="post" class="was-validated" enctype="multipart/form-data">
   <div class="mb-3 mt-3">
   <label for="title" class="form-label">Title:</label>
   <input type="text" id="title" name="title" class="form-control" placeholder="Enter the title of the notice" required>
   <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Check this checkbox to continue.</div>
  </div>
   <div class="mb-3">
    <label for="upload" class="form-label">File:</label>
    <input type="file" class="form-control" id="upload" name="upload"  accept=".pdf" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Check this checkbox to continue.</div>
  </div>
   <button type="submit" value="button" class="btn btn-info" value="" name="add">Add</button>
   </form>
  </div>

  <div id="downloaddelete" class="collapse d-box border border-primary">
   <form action="../downloads/download.php" method="post" class="was-validated">
   <div class="mb-3 mt-3">
   <label for="id" class="form-label">Valid Id:</label>
   <input type="id" id="id" name="id" class="form-control" placeholder="Enter the id of the notice" required>
   <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Check this checkbox to continue.</div>
  </div>
   <button type="submit" value="button" class="btn btn-info" value="" name="delete">Delete</button>
   </form>
  </div>

  </div>
  <hr>
  <div class="container-sm">
    <h5>Forms Controls</h5>
    <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>ID</th>
         <th>Form Title</th>
         <th>Service</th>
      </tr> 
    </thead>
      <tbody>
       <tr>
        <td>1</td>
        <td>Krisi Bibaran Sankalan Form</td>
        <td> <a href="https://docs.google.com/forms/d/1Cg2L43s9bKHD6JXqp3jH_LybkE2kRXSxcDEu_fhEg_U/edit"> <div class="btn btn-warning">Control</div></a></td>
       </tr>
       <tr>
        <td>1</td>
        <td>Krisak Darta  Form</td>
        <td> <a href="https://docs.google.com/forms/d/1ILLbqbdWODxUdPODCK8S7C5OxnBmJ4MZR7_oDA5Tq8A/edit"> <div class="btn btn-warning">Control</div></a></td>
       </tr>
  </tbody>
  </table>
  </div>
  
  <hr>
  <div class="container-fluid my-3">
    <h5 class="">Recent Complains</h5>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agropod";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM complain";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {        
  //   echo '<div class="w3-col m2 text-center"><img class="w3-circle" src="../complains/images/'.$row["name"].'.jpg'.'"' .'style="width:96px;height:96px"></div>
  // <div class="w3-col m10 w3-container"> <h4>'.$row["name"].'<span class="w3-opacity w3-medium text-dark fs-4 ms-3">'.$row["complain_date"].'</span></h4> <p>'.$row["message"].'</p> </div>';
  echo '<div class="container-fluid bg-light my-3">
  <div class="row bg-secondary">
 <div class="col-2 pt-2 "> <img src="../complains/images/'.$row["name"].'.jpg" style="width:56px;height:56px" class="rounded-circle"></div>
   <div class="col-10 fs-5 fw-bold">  <p>'.$row["name"].'<span class="fw-normal ms-3">'.$row["complain_date"].'</span></p>
   <div class="text-info">'.$row["message"].'</div>
  </div></div></div>';
}
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
<hr>
<div class="container-fluid bg-warning text-center" >
  <h3>Powered by Digial AgroPods</h3>
  <p>All rights reserved @2079</p>
</div>
<hr>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
