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
<div id="ab"></div>
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
              urla = (
                  "https://docs.google.com/spreadsheets/d/e/2PACX-1vTciKH6POY7twqRQoOj8YJ9E3BE9pUlr2HcExQC6NWkNCmpGaTKAzSGQXJJVBhfenq1WCZ8UePq9I52/pub?output=csv"
              )
              
              
              state_geo = f"{url}/nepal-districts-new.geojson"  
              state_data = pd.read_csv(open_url(urla))
              geo_json = json.loads(open_url(state_geo).read())
              hdurl=f"{url}/nepal-district-headquarters.geojson"
              hddata=json.loads(open_url(hdurl).read())
              
            

              m = folium.Map(location=[27.7023144, 85.3171192], zoom_start=7)
              tooltip = "Click me!"

              i=0
              while i< 75:
               a=hddata["features"][i]["geometry"]["coordinates"][1]
               b=hddata["features"][i]["geometry"]["coordinates"][0]
               hqname=hddata["features"][i]["properties"]["HQ_NAME"]
               pop='<div style="font-size:10px;font-weight:bold;color:primary;">{}</div>'
              
               folium.Marker(
                [a,b], popup=pop.format(hqname), tooltip=tooltip
               ).add_to(m)
               i+=1
             
              folium.Choropleth(
                  geo_data=geo_json,
                  name="Visualize",
                  data=state_data,
                  columns=["District_Name", "usercount"],
                  key_on="properties.DIST_EN",
                  fill_color="YlGn",
                  fill_opacity=1,
                  line_opacity=1,
                  legend_name="User Participation (number)",
              ).add_to(m)


          

              folium.LayerControl().add_to(m)
             
                

              display(m, target="folium")
             
            </py-script>
    
</body>
</html>