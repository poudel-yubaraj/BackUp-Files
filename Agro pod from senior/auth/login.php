
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>
    <link rel="stylesheet" href="../css/index.css"type="text/css">
    <link rel="stylesheet" href="../css/animation.css"type="text/css">
   
    
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<style>
        a {
            text-decoration: none;
        }
    </style>

   </head>
<body style="background-image:url('../images/bluesky.jpg');background-size:cover;">
 <div class="d-flex flex-column border border-info rounded-5 bg-light pt-3 px-2 position-absolute top-50 start-50 translate-middle" style="height:450px; width:420px;">
 <a href="../index.php"> <div>
    <img src="../images/softwarelogo.png" class="rounded mx-auto mt-1 d-block "  alt="Website-logo" style="height: 120px;width:110px;">
</div>
<div>
    <p class="lh-sm text-center">
 
        <span class="fs-2 fw-bold" style="color:rgb(80, 7, 99);font-weight:10px;">Digital AgroPods</span><br>
      </p>
    
</div> </a>
<div class="container-fluid">
 <form action="loginauthorization.php"  class="was-validated" method="post">
<div class="input-group mb-3">
    <input type="text" class="form-control " placeholder="Username" id="username" name="username" required>
    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control " placeholder="Password"  id="password" name="password" required >
        <span class="input-group-text"><i class="fa fa-lock"></i></span>
        <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-check">
        <label class="form-check-label mx-5 ">
            <input type="checkbox" class="form-check-input" name="remember">
            Remember me</label>
            <button type="submit" class="btn btn-dark btn-outline-info btn-sm ms-5 ">Signin</button> </div>   
        <div class="text-center text-primary fw-bold mt-3"><a href="registration.php"> !Create a new account!</a></div>
</form>
 </div> </div>
</body>
</html>