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
 
<div id="pie1" class="container bg-info py-5 px-5 text-center"  style="height:100%,width:80%;"></div>
 


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
                  "https://docs.google.com/spreadsheets/d/e/2PACX-1vQZps0VZbRINzi2gwGQaukj9t-qBdJTHgDmZlcQMwdSmxbA7vSCMasdq3WE4xDl6Fn2J-wUgL-NN-s6/pub?output=csv"
              )
              
              state_data = pd.read_csv(open_url(urla))

              labels = ['UREA','DAP','POTASH']
              first=[int(state_data.loc[3]["Unnamed: 1"].replace("," , "")),int(state_data.loc[4]["Unnamed: 1"].replace("," , "")),int(state_data.loc[5]["Unnamed: 1"].replace("," , ""))]
              second=[int(state_data.loc[3]["Unnamed: 2"].replace("," , "")),int(state_data.loc[4]["Unnamed: 2"].replace("," , "")),int(state_data.loc[5]["Unnamed: 2"].replace("," , ""))]
              third=[int(state_data.loc[3]["Unnamed: 3"].replace("," , "")),int(state_data.loc[4]["Unnamed: 3"].replace("," , "")),int(state_data.loc[5]["Unnamed: 3"].replace("," , ""))]
              x = np.arange(len(labels))  # the label locations
              width = 0.20  # the width of the bars
              fig, ax = plt.subplots()
              rects1 = ax.bar(x-width, first, width, label='2075/76')
              rects2 = ax.bar(x, second, width, label='2076/77')
              rects3 = ax.bar(x+width, third, width, label='2077/78')
              # Add some text for labels, title and custom x-axis tick labels, etc.
              ax.set_ylabel('Amount(in Metric Tonnes)')
              ax.set_title('ANNUAL SALES OF CHEMICAL FERTILIZER')
              ax.set_xticks(x, labels)
              ax.legend()
              ax.bar_label(rects1, padding=3)
              ax.bar_label(rects2, padding=3)
              ax.bar_label(rects3, padding=3)
              fig.tight_layout()
              display(fig, target="pie1")
              
       
</body>
</html>