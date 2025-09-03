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

if(isset($_POST['add']))
{

    $target_dir = "file/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["upload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["upload"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"  && $imageFileType != "pdf" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.";
        session_start();
        $_SESSION["complain"]= htmlspecialchars( basename( $_FILES["upload"]["name"]));
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }


    $sql = "INSERT INTO download (title,filename)
VALUES ('$_POST[title]','$_SESSION[complain]');";

if ($conn->query($sql) === TRUE) {
    echo "add";
    header('location:../admin/admindashboard.php') ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

elseif(isset($_POST['delete'])){
 
  $sqldelete="DELETE FROM download where id=$_POST[id];";
  $sqlfind="SELECT * FROM download where id=$_POST[id];";

$result = $conn->query($sqlfind);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  $row['filename'];
    $file = fopen("file/$row[filename]","r");
    fclose($file);
    unlink("file/$row[filename]");
    echo "filedelete";
  }
} else {
  echo "0 results";
}
  if($conn->query($sqldelete)==TRUE)
  { 
  header('location:../admin/admindashboard.php');
  }
  else{
    echo "Error: " . $sqldelete . "<br>" . $conn->error;

  }

}

$conn->close();
?>
