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
<script defer src="https://pyscript.net/latest/pyscript.js"></script>

</head>
<body>
<div id="folium"></div>
            <py-config>
            packages = [
              "folium",
              "pandas"
            ]
            </py-config>
            <py-script>
              import folium
              import json
              import pandas as pd
              import branca 
              

              from pyodide.http import open_url


              url = (
                  "https://raw.githubusercontent.com/mesaugat/geoJSON-Nepal/master"
              )
              def api(lat,lon):
                urla="https://api.openweathermap.org/data/3.0/onecall?lat={}&lon={}&appid=198700fd07cfb27eb62679f850c5d048"
              
                urlb=(
                 urla.format(lat,lon)
                   )
                res = json.loads(open_url(urlb).read())
                return res


              
              state_geo = f"{url}/nepal-states.geojson"  
              
              geo_json = json.loads(open_url(state_geo).read())

              m = folium.Map(location=[27.7023144, 85.3171192], zoom_start=7)
              
              tooltip = "Click me!"
              resultktm=api(27.7023144, 85.3171192)
              resultpok=api(28.237988, 83.995590)
              resultsur=api(28.601789, 81.600906)
              resultbirat=api(26.452475, 87.271782)
              resultjan=api(26.727146, 85.940674)
              resulthet=api(27.429071, 85.029716)
              resultlum=api(27.679199,83.507019)
              resultdhan=api(28.683359,  80.608063)

              
              popupktm="<b>Kathmandu</b><br>Temp:{} <span>&#8451;</span>"
              folium.Marker(
                 [27.7023144, 85.3171192], popup=popupktm.format(int(resultktm["current"]["temp"]-273.15)), tooltip=tooltip, icon=folium.Icon(color="red", icon="info-sign")
              ).add_to(m)
              popuppok="<b>Pokhara</b><br>Temp:{} <span>&#8451;</span>"
              folium.Marker(
                 [28.237988, 83.995590], popup=popuppok.format(int(resultpok["current"]["temp"]-273.15)), tooltip=tooltip, icon=folium.Icon(color="red", icon="info-sign")
              ).add_to(m)

              popupsur="<b>Birendranagar</b><br>Temp:{} <span>&#8451;</span>"
              folium.Marker(
                 [28.601789, 81.600906], popup=popupsur.format(int(resultsur["current"]["temp"]-273.15)), tooltip=tooltip, icon=folium.Icon(color="red", icon="info-sign")
              ).add_to(m)
            
              popupbirat="<b>Biratnagar</b><br>Temp:{} <span>&#8451;</span>"
              folium.Marker(
                 [26.452475, 87.271782], popup=popupbirat.format(int(resultbirat["current"]["temp"]-273.15)), tooltip=tooltip, icon=folium.Icon(color="red", icon="info-sign")
              ).add_to(m)
            
              popupjan="<b>Janakpur</b><br>Temp:{} <span>&#8451;</span>"
              folium.Marker(
                 [26.727146, 85.940674], popup=popupjan.format(int(resultjan["current"]["temp"]-273.15)), tooltip=tooltip, icon=folium.Icon(color="red", icon="info-sign")
              ).add_to(m)
            
              popuphet="<b>Hetauda</b><br>Temp:{} <span>&#8451;</span>"
              folium.Marker(
                 [27.429071, 85.029716], popup=popuphet.format(int(resulthet["current"]["temp"]-273.15)), tooltip=tooltip, icon=folium.Icon(color="red", icon="info-sign")
              ).add_to(m)

              popuplum="<b>Lumbini</b><br>Temp:{} <span>&#8451;</span>"
              folium.Marker(
                 [27.679199,83.507019], popup=popuplum.format(int(resultlum["current"]["temp"]-273.15)), tooltip=tooltip, icon=folium.Icon(color="red", icon="info-sign")
              ).add_to(m)

              popupdhan="<b>Dhangadi</b><br>Temp:{} <span>&#8451;</span>"
              folium.Marker(
                 [28.683359,  80.608063], popup=popupdhan.format(int(resultdhan["current"]["temp"]-273.15)), tooltip=tooltip, icon=folium.Icon(color="red", icon="info-sign")
              ).add_to(m)
 
             

            
              
             
              folium.Choropleth(
                  name="Chropleth",
                  geo_data=geo_json,
                  fill_color="#0a96f5",
                  fill_opacity=1,
                  line_opacity=1,
                  legend_name="Unemployment Rate (%)",
              ).add_to(m)

              folium.LayerControl().add_to(m)
              
     
              display(m, target="folium")

            </py-script>
    
</body>
</html>