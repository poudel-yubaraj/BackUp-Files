<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<script defer src="https://pyscript.net/latest/pyscript.js"></script>
</head>
<body>
<table class="table  table-dark   border border-top-0 border-primary">
        <thead class="text-info fw-bold bg-info">
          <tr>
            <th>Station</th>
            <th>Max Temp(<span>&#8451;</span>)</th>
            <th>Min Temp( <span>&#8451;</span>)</th>
            <th>Sky condition</th>
          </tr>
        </thead>
        <tbody class="bg-secondary text-light fs-1 ">
          <tr>
            <td id="station"></td>
            <td id="max"></td>
            <td id="min"></td>
            <td id="sky"></td>
          </tr>
        </tbody>
      </table>
           <py-config>
            packages = [
              "matplotlib",
              "pandas"
            ]
            </py-config>
            <py-script>

              import pandas as pd
              import json
              import datetime

              from pyodide.http import open_url
              def api(lat,lon):
                urla="https://api.openweathermap.org/data/3.0/onecall?lat={}&lon={}&appid=198700fd07cfb27eb62679f850c5d048"
              
                urlb=(
                 urla.format(lat,lon)
                   )
                res = json.loads(open_url(urlb).read())
                return res
              
              resultkat=api(27.7023144, 85.3171192)
              resultpok=api(28.237988, 83.995590)
              resultsur=api(28.601789, 81.600906)
              resultbirat=api(26.452475, 87.271782)
              resultjan=api(26.727146, 85.940674)
              resulthet=api(27.429071, 85.029716)
              resultlum=api(27.679199,83.507019)
              resultdhan=api(28.683359,  80.608063)
              cities=["Kathmandu","Pokhara","Surkhet","Biratnagar","Janakpur","Hetauda","Lumbini","Dhangadi"]
              weekdays=["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
              fdate = datetime.datetime.now()
              x=fdate.strftime("%A")
              y=weekdays.index(x);
              display("Kathmandu",target="station")
              display(int(resultkat["daily"][y]["temp"]["max"]-273.15),target="max")
              display(int(resultkat["daily"][0]["temp"]["min"]-273.15),target="min")  
              display(resultkat["current"]["weather"][0]["description"],target="sky")  



              display("Pokhara",target="station")
              display(int(resultpok["daily"][0]["temp"]["max"]-273.15),target="max")
              display(int(resultpok["daily"][0]["temp"]["min"]-273.15),target="min")
              display(resultpok["current"]["weather"][0]["description"],target="sky")  


              display("Surkhet",target="station")
              display(int(resultsur["daily"][0]["temp"]["max"]-273.15),target="max")
              display(int(resultsur["daily"][0]["temp"]["min"]-273.15),target="min")
              display(resultsur["current"]["weather"][0]["description"],target="sky")  


              display("Biratnagar",target="station")
              display(int(resultbirat["daily"][0]["temp"]["max"]-273.15),target="max")
              display(int(resultbirat["daily"][0]["temp"]["min"]-273.15),target="min")
              display(resultbirat["current"]["weather"][0]["description"],target="sky")  


              display("Janakpur",target="station")
              display(int(resultjan["daily"][0]["temp"]["max"]-273.15),target="max")
              display(int(resultjan["daily"][0]["temp"]["min"]-273.15),target="min")
              display(resultjan["current"]["weather"][0]["description"],target="sky")  


              display("Hetauda",target="station")
              display(int(resulthet["daily"][0]["temp"]["max"]-273.15),target="max")
              display(int(resulthet["daily"][0]["temp"]["min"]-273.15),target="min")
              display(resulthet["current"]["weather"][0]["description"],target="sky")  


              display("Lumbini",target="station")
              display(int(resultlum["daily"][0]["temp"]["max"]-273.15),target="max")
              display(int(resultlum["daily"][0]["temp"]["min"]-273.15),target="min")
              display(resultlum["current"]["weather"][0]["description"],target="sky")  


              display("Dhangadi",target="station")
              display(int(resultdhan["daily"][0]["temp"]["max"]-273.15),target="max")
              display(int(resultdhan["daily"][0]["temp"]["min"]-273.15),target="min")
              display(resultdhan["current"]["weather"][0]["description"],target="sky")  

            </py-script>
           
</body>
</html>