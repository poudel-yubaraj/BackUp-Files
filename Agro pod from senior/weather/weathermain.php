<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <!-- favicon -->
<link rel="icon" type="images/x-icon" href="../images/cloud-solid.svg">
<!-- local Css -->
<link rel="stylesheet" href="css/index.css" type="text/css">
<link rel="stylesheet" href="css/animation.css" type="text/css">
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
 
</head>
<body >
    <div class="container-fluid text-center" style="background-image:url(../images/whitecloud.jpg);background-size:cover;height:850px;width:auto;">
     <div class="container-fluid fw-bold ">
       <div class="d-inline-flex justify-content-around shadow rounded bg-light my-5" style="height:200px;width:60%">
         <div><img class="" src="../images/softwarelogo.png" alt=""  width="auto"></div>
          <div class=" d-none d-md-block fs-1 fw-bolder text-success"><p>Weather Information</p>
            <p>Digital AgroPod</p></div>
       </div>
      </div>
      <div class="container-fluid"> <iframe src="weather.php" frameborder="0" height="500px" width="80%"></iframe></div>
    </div>

    <hr>
     <div class="container-fluid">
      <div class="row text-primary   py-3 px-5" >
        <div class="col-md-9">
          <table class="table table-primary text-center ">
          <caption  class=" fw-bold fs-3 text-primary"style="text-align:center;caption-side:top;">Forecasts</caption>

            <thead>
              <tr>
                <th>Time</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Today</td>
                <td>
                  <p  style="text-align:justify;text-justify:inter-word;">
Partly to generally cloudy in the hilly regions of Province 1, Bagmati Province and Gandaki Province and 
Partly cloudy to mainly fair in the rest of the country. Brief rain/ thundershowers is likely to occur at one
 or two places of hilly regions of Province 1, Bagmati Province and Gandaki Province. Chances of light
  snowfall at one or two places of the high hilly and mountaineous region of Province 1, Bagmati Province and
   Gandaki Province.
                  </p>
                </td>
              </tr>
              <tr>
                <td>Tonight</td>
                <td>
                  <p  style="text-align:justify;text-justify:inter-word;">       
Partly cloudy in the hilly regions of Province 1, Bagmati Province and Gandaki Province and mainly fair in 
rest of the country. Brief rain/ thundershowers is likely to occur at one or two places of hilly regions of
 Province 1.
                  </p>
                </td>
              </tr>
              <tr>
                <td>Analysis</td>
                <td>हाल देशमा पश्चिमी वायुको सामान्य प्रभाव रहेको छ।</td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="col-md " >
          <table class="table table-dark text-center" style="background-image:linear-gradient(to right,brown,pink,grey)">
          <caption class=" fw-bold fs-3 text-primary" style="text-align:center;caption-side:top;">Government Alerts</caption>
 
          <thead>
              <tr>
                <th>S.N</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>No alert issued by Meterological Department of Nepal</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 px-5 ">
        <div class="bg-info text-center py-2 fs-3 fw-bold text-light  border  border-primary ">Observations</div>
          <iframe src="obtable.php" frameborder="0" height="500px" width="100%;"></iframe>
        </div>
      <div class="col-md-5 ">
      <div class="container" style="height:auto;width:80%">
      <div class="border border-primary ">
       <div class="bg-info text-center py-2 fs-3 fw-bold ">Satellite Images</div>
      <img   src="../images/satellite.jpg" alt="" style="height:250px;width:100%;">
      </div>   
      </div>
      <div class="container my-4" style="height:auto;width:80%">
      <div class=" border border-primary ">
       <div class="bg-info text-center py-2 fs-3 fw-bold ">National Weather Forecast</div>
       <div class="my-2 "><img  class="img-fluid px-3" src="../images/wmo.jpg" alt="" style="height:auto;width:100%;">
       <div class="container bg-warning mt-2 " style="height:10px;width:90%;"></div>      
       <div class="container bg-primary" style="height:10px;width:90%;"></div>      
      </div>
      </div>  
     </div>
     </div>
      </div>
      </div>  
      <div class="container-fluid bg-light text-success py-2 text-center fs-4 border-top border-info">
              <p>Powered by <strong> Digital AgroPod </strong> </p>
            </div>  
</body>
</html>