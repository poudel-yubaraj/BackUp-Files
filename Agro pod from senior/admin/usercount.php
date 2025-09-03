<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- favicon -->
<link rel="icon" type="images/x-icon" href="images/seedling-solid.svg">
<!-- local Css -->
<link rel="stylesheet" href="css/index.css" type="text/css">
<link rel="stylesheet" href="css/animation.css" type="text/css">
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script defer src="https://pyscript.net/latest/pyscript.js"></script>
</head>
<body> 
<div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
         <div id="countuser" style="font-size:30px;"></div>
       </div><br></br>
        <h4 class="text-start">Users</h4>
      </div>
            <py-config>
            packages = [
              "pandas"
            ]
            </py-config>
            <py-script>
              import pandas as pd

              from pyodide.http import open_url
              url = (
                  "https://docs.google.com/spreadsheets/d/e/2PACX-1vQ6x-UHEX_ocv7W32YMQtAKX4-cULwjs_cGphB4rJyeWEUbCm41Fz02pJEBhPwVBukqN19Akp-dROvu/pub?output=csv"
              )
              
              df = pd.read_csv(open_url(url))
              display(len(df),target='countuser')  
            </py-script>
</body>
</html>