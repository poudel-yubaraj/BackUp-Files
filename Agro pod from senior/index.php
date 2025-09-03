<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital AgroPod</title>
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
  <style>
    .indicators {
      animation-name: indicator;
      animation-duration: 30s;
      animation-direction: reverse;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
      position: relative;
    }

    @keyframes indicator {
      from {
        top: -1400px;
      }

      to {
        top: 350px;
      }
    }
  </style>

  <script>
    (function(w, d) {
      w.CollectId = "63d8defcdbdefebfff0f4535";
      var h = d.head || d.getElementsByTagName("head")[0];
      var s = d.createElement("script");
      s.setAttribute("type", "text/javascript");
      s.async = true;
      s.setAttribute("src", "https://collectcdn.com/launcher.js");
      h.appendChild(s);
    })(window, document);
  </script>

</head>

<body>
  <?php include 'layout/header.php';
  ?>
  <div class="container-fluid px-4" style="background-image:url('images/wheat.jpg');">
    <div class="row ">
      <div class="col-sm-4 pt-4 ">

        <div class="d-flex px-3  py-3 shadow rounded bg-white">
          <div>
            <img src="images/Ashal.jpg" alt="" class="img-thumbnail" style="height: 125px;width:125px;">
          </div>
          <div class="ps-3 pt-1 ">
            <p>
              <span class="fw-bold fs-5 text-info">Mr. Ashal Upreti</span>
              <span class="fw-bold fs-6"><br>Developer<br>Digital AgroPods</span>
              <span><br>
                <i class="fa-sharp fa-solid fa-phone">9845364289</i>

            </p>
          </div>
        </div>


        <div class="d-flex px-3 mt-3 py-3 shadow rounded bg-white">
          <div>
            <img src="images/Madan.jpg" alt="" class="img-thumbnail" style="height: 125px;width:125px;">
          </div>
          <div class="px-3 pt-1">
            <p>
              <span class="fw-bold fs-5 text-info">Mr.Madan Acharya </span>
              <span class="fw-bold fs-6"><br>Developer<br>Digital AgroPods</span>
              <span><br>
                <i class="fa-sharp fa-solid fa-phone">9868986429</i>

            </p>
          </div>
        </div>


        <div class="d-flex px-3 mt-3 py-3 shadow rounded bg-white">
          <div>
            <img src="images/Nijjal.jpg" alt="" class="img-thumbnail" style="height: 125px;width:125px;">
          </div>
          <div class="px-3 pt-1">
            <p>
              <span class="fw-bold fs-5 text-info">Mr.Nijjal Kachhepati </span>
              <span class="fw-bold fs-6"><br>Founder<br>Digital AgroPods</span>
              <span><br>
                <i class="fa-sharp fa-solid fa-phone">9861789523</i>

            </p>
          </div>
        </div>

      </div>
      <div class="col-sm-8 ">
        <!-- Carousel -->


        <div id="demo" class="carousel slide ps-5 pt-4 pb-1 " data-bs-ride="carousel" style="height:95%;width:auto;">

          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner" style="height:100%;">

            <div class="carousel-item">
              <img src="images/junar.jpg" alt="Chicago" class="d-block" style="width:100%">
              <div class="carousel-caption">
                <h3>Sindhuliko Junar</h3>
                <p>Junar from the professional junar production region. </p>
              </div>
            </div>
            <div class="carousel-item active">
              <img src="images/dhan.jpg" alt="New York" class="d-block" style="width:100%">
              <div class="carousel-caption">
                <h3>Basmati Dhan</h3>
                <p>Nepali original kind of rice.</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="images/wheat.jpg" alt="Los Angeles" class="d-block" style="width:100%">
              <div class="carousel-caption">
                <h3>Wheat</h3>
                <p>Second major crops of the Nepal!</p>
              </div>
            </div>
          </div>

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid  border-top border-secondary border-5 px-4" style="background-image:url('images/sky.jpeg');opacity:1;background-size:cover;">
    <div class="row py-3">
      <div class="col-sm-8">
        <div class="h3">Welcome to Digital AgroPod</div>
        <hr>
        <p class="aboutsoftware text-primary px-3 py-3 bg-secondary text-white fw-bold rounded-5">Digital AgroPod is the modern software product designed and developed by the academic research scholars.
          It is primarily target to serve as the Integrated Agriulture Knowledge System
          with the purpose of promoting
          and digiting the agriculture industry of the country. This could be the backbone of the digital agroeconomy and business.
          Moreover, this work is inspired by the day to day life and livelihood of majority of the Nepali farmer and others who
          are related to the agriculture profession. So, simply adopting the modern culture and tradition and embeding the technology
          for scaling the flourishing the agriculture sector.
        </p>
        <!-- Starting of the download modal -->
        <div class="bg-white pb-1" style="height:auto;width:auto;">

          <div class="container-fluid " style="width:auto;">
            <br>
            <!-- Nav pills -->
            <ul class="nav nav-pills justify-content-right mx-3 py-2 fs-5  border-bottom border-secondary border-5" role="tablist">
              <li class="nav-item" id="noticespace">
                <a class="nav-link active" data-bs-toggle="pill" href="#notice">
                  <i class="fa-solid fa-list pe-2"></i>Notices</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#downloads">
                  <i class="fa-solid fa-download pe-2"></i>Downloads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#miscellaneous">
                  <i class="fa-solid fa-database pe-2"></i>Miscellaneous</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content  mt-2">
              <div id="notice" class="  container-fluid tab-pane active border border-info py-2"><br>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "agropod";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM notice";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {

                    $_SESSION["noticefilename"] = $row["filename"];
                    echo '<div class="d-flex justify-content-between py-2 border-bottom border-dark">
<div class="d-flex fs-6 fw-bolder  bg-secondary rounded rounded-5 overflow-hidden text-center" style="height: 65px;width: 120px;flex-direction:column;">
<div class=" text-white fw-bold fs-6" style="height: 32px;width:100%;background-color:rgb(71, 5, 116);">' . substr($row["upload_date"], 8, 2) . '</div> 
' . substr($row["upload_date"], 5, 2) . "," . substr($row["upload_date"], 0, 4) . '
</div>
<div class="my-2 fs-5 fw-bold" style="color:blueviolet;"><p>"' . $row["title"] . '"</p></div>
<button type="button" class="btn btn-light my-2 mx-2" style="color:blueviolet;"  data-bs-toggle="modal" data-bs-target="#myModal">View Deatails</button> </div>';
                    include 'modal.php';
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                ?>
              </div>
              <div id="downloads" class="container-fluid tab-pane fade border border-info py-2"><br>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "agropod";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM download";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {

                    // $_SESSION["noticefilename"]=$row["filename"];       
                    echo '<div class="d-flex justify-content-between py-2 border-bottom border-dark">
    <div class="d-flex fs-6 fw-bolder  bg-secondary rounded rounded-5 overflow-hidden text-center" style="height: 65px;width: 120px;flex-direction:column;">
   <div class=" text-white fw-bold fs-6" style="height: 32px;width:100%;background-color:rgb(71, 5, 116);">' . substr($row["upload_date"], 8, 2) . '</div>' . substr($row["upload_date"], 5, 2) . "," . substr($row["upload_date"], 0, 4) . '
           </div>
           <div class="my-2 fs-5 fw-bold" style="color:blueviolet;"><p>"' . $row["title"] . '"</p></div>
          <a href="downloads/file/' . $row['filename'] . '" download><button type="button" class="btn btn-light my-2 mx-2" style="color:blueviolet;">Downloads</button></a> 
         </div>';
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                ?>
              </div>
              <div id="miscellaneous" class=" container-fluid tab-pane fade  border border-info py-2"><br>

              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Start of the research section -->
      <div class="col-sm-4 px-4">
        <div class="container-fluid">
          <p class="border-bottom border-primary border-3 text-white fs-5 fw-bold ">Key Indicators</p>
          <div class="d-flex shadow bg-white rounded rounded-5 overflow-hidden text-left fw-bold text-primary  mt-2 mx-5" style="height: 300px;width:auto;flex-direction:column;">
            <div class="indicators  px-5 py-5">

              <div> <a href="">
                  <p class="border-bottom border-dark">Major Agricultural Exports </p>
                </a>
                <span class="fw-6 text-dark fw-normal">
                  <p>Soyabean Oil: $198M</p>
                  <p>Knotted Carpets: ($55.2M) </p>
                  <p>Synthetic Staple Fibers Yarn:($53.5M)</p>
                  <p> Nutmeg, mace and cardamons :($48.4M) </p>
                  <p> Palm Oil:($44.9M) </p>
                </span>
              </div>

              <div> <a href="">
                  <p class="border-bottom border-dark">Major Exporting Countries </p>
                </a>
                <span class="fw-6 text-dark fw-normal">
                  <p>Exporting mostly to India:($611M) </p>
                  <p> United States: ($90M)</p>
                  <p> Germany:($26M)</p>

                  <p>United Kingdom ($17.1M)</p>
                  <p>China :($15.3M) </p>
                </span>
              </div>

              <div> <a href="">
                  <p class="border-bottom border-dark">Major Imports </p>
                </a>
                <span class="fw-6 text-dark fw-normal">
                  <p>Refined Petroleum:($818M) </p>
                  <p> Semi-Finished Iron:($388M) </p>
                  <p> Broadcasting Equipment:($339M) </p>
                  <p> Rice:($331M) </p>
                  <p> Petroleum Gas:($236M) </p>
                </span>
              </div>

              <div> <a href="">
                  <p class="border-bottom border-dark">Major Importing Countries </p>
                </a>
                <span class="fw-6 text-dark fw-normal">
                  <p>Importing mostly from India:($5.85B) </p>
                  <P> China:($1.17B) </P>
                  <P> United Arab Emirates:($194M) </P>
                  <P> Hong Kong :($130M) </P>
                  <P>Singapore :($115M)</p>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <p class="border-bottom border-primary border-3  text-white fs-5 fw-bold">Information Officer</p>
          <div class="d-flex px-3 mt-3 py-3 shadow rounded bg-secondary ">
            <div>
              <img src="images/Jiban.jpg" alt="" class="img-thumbnail" style="height: 125px;width:125px;">
            </div>
            <div class="ps-3 pt-1">
              <p>
                <span class="fw-bold fs-5 text-info">Mr.Jiban Rawal</span>
                <span class="fw-bold fs-6"><br>Digital AgroPods</span>
                <span><br>
                  <i class="fa-sharp fa-solid fa-phone"> 9861733640</i>
                  <span class="fw-bold"><br>
                    <i class="fa-solid  fa-square-envelope "></i> jibanrawal4@gmail.com</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- End of the reserarch section -->
    </div>
  </div>
  <div class="container-fluid  " style="background-image: url('images/wheat.jpg'); height:auto;width:100%;">
    <div class="row py-5">
      <div class="col-sm-8 ps-5">
        <iframe style="width:100%; height: 300px;" src="https://www.youtube.com/embed/lt1vnLJu1GU" title="Israel Agriculture No.1 On the World  - AGRITECH 2018" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <p>
          Video courtesy of
          <a href="" target="_blank">Israel Agriculture (AGRITECH 2018)</a>.
        </p>
      </div>
      <div class="col-sm-4  align-items-center ps-5">

        <div class="d-flex shadow-lg bg-white rounded rounded-5 overflow-hidden text-center " style="height: 350px;width:90%;flex-direction:column;">
          <div class=" text-white fw-bold fs-4" style="height: 50px;width:100%;background-color:rgb(9, 115, 207);">Quick Links</div>
          <div class="text-start text-left  px-3 py-4 fs-6">
            <a href="https://moald.gov.np/">
              <div class="border-bottom border-secondary text-secondary">Ministry of Agriculture and Livestock development</div>
            </a>
            <a href=" https://soil.narc.gov.np/">
              <div class="border-bottom border-secondary text-secondary pt-3">National Agriculture and Research council</div>
            </a>
            <a href=" https://cbs.gov.np/">
              <div class="border-bottom border-secondary text-secondary pt-3">Central Bureau of Statistics</div>
            </a>
            <a href=" https://www.adbl.gov.np/">
              <div class="border-bottom border-secondary text-secondary pt-3">Agriculture Development Bank </div>
            </a>
            <a href=" https://www.npc.gov.np/en">
              <div class="border-bottom border-secondary text-secondary pt-3">National Planning Council</div>
            </a>
            <a href="http://www.afu.edu.np/">
              <div class="border-bottom border-secondary text-secondary pt-3">Agriculture and Forest Univeristy</div>
            </a>

          </div>
        </div>

      </div>
    </div>
  </div>
  <?php include 'layout/footer.php'; ?>
</body>

</html>