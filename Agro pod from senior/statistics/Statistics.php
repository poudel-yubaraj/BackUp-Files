<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital AgroPod</title>
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- favicon -->
<link rel="icon" type="images/x-icon" href="../images/seedling-solid.svg">
</head>
<body>
    <div class="container-fluid border border-light text-info text-center fs-1 fw-bold">
      Visualize the data of Nepalese Agriculture
    </div>
    
<div  id="demo" class="collapse">
<ul class="nav justify-content-around bg-success py-3">
<li class="nav-item dropdown bg-light ">
        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">AgroPod data</a>
        <ul class="dropdown-menu">
          <li> <a href="representation/reptemp.php" target="stat_frame" class="dropdown-item">Representation</a></li>
          <li> <a href="dependency.php" target="stat_frame" class="dropdown-item">Dependency</a></li>
          <li> <a href="" class="dropdown-item">Fertilizer</a></li>
          <li> <a href="" class="dropdown-item">Major issues</a></li>
        </ul>
      </li>
      
      <li class="nav-item dropdown bg-light ">
        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">Data</a>
        <ul class="dropdown-menu">
          <li>  <a class="nav-link dropdown-toggle" target="stat_frame" href="echologicalbelt.php">Data of 2078 (MOALD)</a>
              </li>
              <li> <a class="nav-link dropdown-toggle" target="stat_frame" href="../statistics/economy.php">Agricultural Export and Import</a>
</li>
        </ul>
      </li>

     
      <li class="nav-item dropdown bg-light ">
        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">Graphical plots</a>
        <ul class="dropdown-menu">
        <li><a  class="dropdown-item" target="stat_frame"  href="Graph/CRJ.php">Rubber,Cotton and Jute</a></li>
         <li><a  target="stat_frame"  class="dropdown-item" href="eco.php">Geology</a></li>
         <li><a  target="stat_frame"  class="dropdown-item" href="fertilizer.php">Fertilizer sales</a></li>
         <li><a  target="stat_frame"  class="dropdown-item" href="Graph/trade.php">Trade picture 2022</a></li>

        </ul>
      </li>
</ul>
</div>
<div class="container-fluid overflow-hidden bg-info text-center  " style="height:590px;width:auto;" >
  <iframe src="ecophoto.php"  name="stat_frame" frameborder="0" style="height: 93%;width:100%;">
  </iframe>
  <button class="btn btn-danger mt-0 pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#demo">Menu</button>
 <a href="../index.php"><button class="btn btn-danger mt-0 pt-0" type="button">Home</button></a>
</div>
</body>
</html>