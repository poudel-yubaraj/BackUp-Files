<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

              from pyodide.http import open_url

              url = (
                  "https://raw.githubusercontent.com/python-visualization/folium/master/examples/data"
              )
              state_geo = f"{url}/world-countries.json"
            
     
              geo_json = json.loads(open_url(state_geo).read())
              m = folium.Map(location=[30, 86], zoom_start=3)
              folium.Choropleth(
                  geo_data=geo_json,
                  name="choropleth",
                  key_on="feature.id",
                  fill_color="YlGn",
                  fill_opacity=0.7,
                  line_opacity=0.2,
                  legend_name="Unemployment Rate (%)",
              ).add_to(m)

              folium.LayerControl().add_to(m)

              display(m, target="folium")
            </py-script>
</body>
</html>