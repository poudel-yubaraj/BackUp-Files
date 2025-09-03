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
</head>
<body>
    <?php session_unset(); session_unset();      $_SESSION['state'] = "logoff"; header('location:login.php') ?>

</body>
</html>