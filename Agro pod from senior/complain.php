<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital AgroPod</title>
     <!-- favicon -->
<link rel="icon" type="images/x-icon" href="images/seedling-solid.svg">
  <!-- CSS only -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
<!-- local Css -->
<link rel="stylesheet" href="css/index.css" type="text/css">
<link rel="stylesheet" href="css/animation.css" type="text/css">
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body style="background-image:url(images/field1.jpg); background-size:cover;">
 <div class="my-3 py-5 position-absolute  start-50 translate-middle-x  text-light" style="background-image:linear-gradient(rgb(66, 49, 138),rgb(54, 65, 224),rgb(25, 155, 230)); height:auto;width:70%;">
  <div class="h1 text-center ">
    Contact Us
  </div >
  <div class="text-center">Got a question? We would love to hear from you.<br>
     Send us a message and we wll respond as soon as possible
   </div>
   <form action="">
    <div class="position-relative start-50 translate-middle-x" style="height:auto;width:50%">
    <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter your Full Name" name="name">
  </div>
   <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <textarea name="message" id="message" class="form-control" cols="5" rows="5">Enter message  here</textarea>
  </div>
  <button type="submit" class="btn btn-warning">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button>
  </div>
   </form>

</div>
</body>