<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserRegistration</title>
    <link rel="stylesheet" href="css/custom.css"type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  </head>
<body>
    <div class="d-flex   justify-content-center py-2"><h2>Registration Form</h2></div>
     <div class=" container border border-info rounded-2 bg-light pt-3 px-2 position-absolute top-50 start-50 translate-middle" style="height:80%; width:100%;">
        <form action="registrationdatastorage.php" method="post" class="need-validation">
        <div class="container-fluid border">
          <div class="d-2">Individual Information</div>
          <div class="row">
            <div class="col">
           <label for="fname" class="form-label">First name:</label>
           <input type="text" class="form-control" placeholder="Your first name" id="fname" name="fname" required>
        </div>  
        <div class="col">
            <label for="mname" class="form-label">Middle name:</label>
            <input type="text" class="form-control" placeholder="Your middle name" id="mname" name="mname">
         </div>  
         <div class="col">
          <label for="lname" class="form-label">Last name:</label>
          <input type="text" class="form-control" placeholder="Your last name" id="lname" name="lname" >
         </div>
        </div>
        <div class="row">
        <div class="col">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" placeholder="address" id="address" name="address">
          
        </div>
        <div class="col">
          <label for="username" class="form-label">Username:</label>
          <input type="email" class="form-control" placeholder="usernama" id="username" name="username" required>
        </div>
        <div class="col">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" placeholder="password" id="password" name="password" required>
        </div>
        </div>
     <button class="btn btn-info" type="submit" value="Submit Button">Save</button>
     <button class="btn btn-primary" type="reset" value="Reset Button">Reset</button>
       
          </div>
        </form> 
     </div>
</body>
</html>