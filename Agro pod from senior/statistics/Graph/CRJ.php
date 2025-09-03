<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fertilizer</title>
    <script src="../js/statistics.js"></script>
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
<script defer src="https://pyscript.net/latest/pyscript.js"></script>
</head>
<body>
  
<div id="folium1" class="container  py-5 px-5 text-center"  style="height:100%;width:50%;"></div>
<div id="folium2" class="container  py-5 px-5 text-center"  style="height:100%;width:50%;"></div>
<div id="folium3" class="container  py-5 px-5 text-center"  style="height:100%;width:50%;"></div>

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
              import math
            
              from pyodide.http import open_url

              
              urla = (
                  "https://docs.google.com/spreadsheets/d/e/2PACX-1vTgWcMoNAMyJdqac9cVINu8oHxjBMAR248yPI370lVfQZ7tQg3Zdp3Onrqt75DFicMfF8XQdS6U4IDL/pub?output=csv"
              )
              
              state_data = pd.read_csv(open_url(urla))


              
               
              labels = ['ILLAM','JHAPA','MORANG','SUNSARI','SIRAHA','SAPTARI']
              area = [int(state_data.loc[1]["Unnamed: 1"]),int(state_data.loc[2]["Unnamed: 1"]),int(state_data.loc[3]["Unnamed: 1"].replace("," , "")),int(state_data.loc[4]["Unnamed: 1"].replace("," , "")),int(state_data.loc[5]["Unnamed: 1"]),int(state_data.loc[6]["Unnamed: 1"])]
              production = [int(state_data.loc[1]["Unnamed: 2"]),int(state_data.loc[2]["Unnamed: 2"]),int(state_data.loc[3]["Unnamed: 2"].replace("," , "")),int(state_data.loc[4]["Unnamed: 2"].replace("," , "")),int(state_data.loc[5]["Unnamed: 2"]),int(state_data.loc[6]["Unnamed: 2"])]
              x = np.arange(len(labels))  # the label locations
              width = 0.35  # the width of the bars 
              fig1, ax = plt.subplots()
              rects1 = ax.bar(x - width/2, area, width, label='Area(Ha)')
              rects2 = ax.bar(x + width/2, production, width, label='Production(Mt.)')
              # Add some text for labels, title and custom x-axis tick labels, etc.
              ax.set_ylabel('Scale')
              ax.set_title('Jute: Area and Production by Districts, Fiscal Year 2077/78 (2020/21')
              ax.set_xticks(x, labels)
              ax.legend()
              ax.bar_label(rects1, padding=3)
              ax.bar_label(rects2, padding=3)
              fig1.tight_layout()
              display(fig1, target="folium1") 
              labels = ['DANG','BANKE','MUGU']
              area2 = [int(state_data.loc[10]["Unnamed: 1"]),int(state_data.loc[11]["Unnamed: 1"]),int(state_data.loc[12]["Unnamed: 1"])]
              production2 = [int(state_data.loc[10]["Unnamed: 2"]),int(state_data.loc[11]["Unnamed: 2"]),int(state_data.loc[12]["Unnamed: 2"])]
              x = np.arange(len(labels))  # the label locations
              width = 0.35  # the width of the bars 
              fig2, ax = plt.subplots()
              rects1 = ax.bar(x - width/2, area2, width, label='Area(Ha)')
              rects2 = ax.bar(x + width/2, production2, width, label='Production(Mt.)')
              # Add some text for labels, title and custom x-axis tick labels, etc.
              ax.set_ylabel('Scale')
              ax.set_title('Cotton: Area and Production by Districts, Fiscal Year 2077/78 (2020/21)')
              ax.set_xticks(x, labels)
              ax.legend()
              ax.bar_label(rects1, padding=3)
              ax.bar_label(rects2, padding=3)
              fig1.tight_layout()
             
              display(fig2, target="folium2")
              labels = ['JHAPA','ILLAM','MORANG','SUNSARI']
              area3 = [int(state_data.loc[16]["Unnamed: 1"]),int(state_data.loc[17]["Unnamed: 1"]),float(state_data.loc[18]["Unnamed: 1"]),int(state_data.loc[19]["Unnamed: 1"])]
              production3 = [float(state_data.loc[16]["Unnamed: 1"]),int(state_data.loc[17]["Unnamed: 1"]),float(state_data.loc[18]["Unnamed: 1"]),int(state_data.loc[19]["Unnamed: 1"])]
              x = np.arange(len(labels))  # the label locations
              width = 0.35  # the width of the bars 
              fig3, ax = plt.subplots()
              rects1 = ax.bar(x - width/2, area3, width, label='Area(Ha)')
              rects2 = ax.bar(x + width/2, production3, width, label='Production(Mt.)')
              # Add some text for labels, title and custom x-axis tick labels, etc.
              ax.set_ylabel('Scale')
              ax.set_title('Rubber: Area and Production by Districts, Fiscal Year 207/78(2020/21)')
              ax.set_xticks(x, labels)
              ax.legend()
              ax.bar_label(rects1, padding=3)
              ax.bar_label(rects2, padding=3)
              fig1.tight_layout()
             
              display(fig3, target="folium3") 


            </py-script>
    
</body>
</html>