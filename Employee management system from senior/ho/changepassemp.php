<?php

require_once ('connection.php');
$sql = "SELECT * FROM `employee` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = $_POST['id'];
  $old = $_POST['oldpass'];
  $new = $_POST['newpass'];
  
  $result = mysqli_query($conn, "select employee.password from employee WHERE id = $id");
     $employee = mysqli_fetch_assoc($result);
          if($old == $employee['password']){
            $sql = "UPDATE `employee` SET `password`='$new' WHERE id = $id";
            mysqli_query($conn, $sql);
             echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Password Updated')
                window.location.href='myprofile.php?id=$id';</SCRIPT>"); 
          
        }

        else{
          echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Update Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
        }

  
}
?>
