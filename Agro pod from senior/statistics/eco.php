<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echological belt</title>
    <script src="../js/statistics.js"></script>
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
<script defer src="https://pyscript.net/latest/pyscript.js"></script>
</head>
<body>
 
<div id="pie1" class="container  py-5 px-5 text-center"  style="height:100%;width:80%;"></div>
<div id="pie2" class="container text-center "></div>

            <py-config>
            packages = [
              "matplotlib",
              "pandas"
            ]
            </py-config>
            <py-script>
              import json
              import pandas as pd
              import matplotlib.pyplot as plt
              import numpy as np

            
              from pyodide.http import open_url

              
              urla = (
                  "https://docs.google.com/spreadsheets/d/e/2PACX-1vRk7EE_kWU5as5vP2yDUM9kR1-eyh6pSRsR6opu4awm0aU4jiQLbfYolRiDnGKUuhEWQlQlLahEwv_7/pub?output=csv"
              )
              
              state_data = pd.read_csv(open_url(urla))

              fig, ax = plt.subplots(figsize=(10, 5), subplot_kw=dict(aspect="equal"))
              data =[int(state_data.loc[1]["Unnamed: 1"].replace("," , "")),int(state_data.loc[2]["Unnamed: 1"].replace("," , "")),int(state_data.loc[3]["Unnamed: 1"].replace("," , ""))]
              ingredients = ['MOUNTAIN','HILL','TERAI']
              def func(pct, allvals):
                absolute = int(np.round(pct/100.*np.sum(allvals)))
                return "{:.1f}%\n({:d} sqkm)".format(pct, absolute)
              wedges, texts, autotexts = ax.pie(data, autopct=lambda pct: func(pct, data),
                                  textprops=dict(color="w"))
              ax.legend(wedges, ingredients,
              title="Ingredients",
              loc="center left",
              bbox_to_anchor=(1, 0, 0.5, 1))
              plt.setp(autotexts, size=8, weight="bold") 
              ax.set_title("NATIONAL AREA BY ECOLOGICAL BELT")
              display(fig, target="pie1")

              
              # Pie chart, where the slices will be ordered and plotted counter-clockwise:
              data =[int(state_data.loc[8]["Unnamed: 1"].replace("," , "")),int(state_data.loc[9]["Unnamed: 1"].replace("," , "")),int(state_data.loc[10]["Unnamed: 1"].replace("," , "")),int(state_data.loc[11]["Unnamed: 1"].replace("," , "")),int(state_data.loc[12]["Unnamed: 1"].replace("," , "")),int(state_data.loc[13]["Unnamed: 1"].replace("," , "")),int(state_data.loc[14]["Unnamed: 1"].replace("," , ""))]
              ingredients = 'Cultivated','Uncultivated','Forest','Shrubland','Grassland','Water','Others'
              explode = (0, 0.1, 0, 0,0,0,0)  # only "explode" the 2nd slice (i.e. 'Hogs')
              fig2, ax1 = plt.subplots()
              ax1.pie(data, explode=explode, labels=ingredients, autopct='%1.1f%%',
              shadow=True, startangle=90)
              ax1.axis('equal')  # Equal aspect ratio ensures that pie is drawn as a circle.
              ax1.set_title("LAND USE DISTRIBUTION BY USE CATEGORY")
              display(fig2, target="pie2") 
              
</body>
</html>