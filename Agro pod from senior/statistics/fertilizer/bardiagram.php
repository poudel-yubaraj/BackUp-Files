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
  
<div id="mpl"></div>
            <py-config>
            packages = [
              "matplotlib",
            ]
            </py-config>
            <py-script>
            import matplotlib.pyplot as plt
import numpy as np


labels = ['Urea', 'Dap', 'Potash', 'AmmSul', 'SSP','APS','NP','CompNPi']
firstyear = [19099,29131,686,8119,3393,17324,1040,12568]
secondyear = [30842,19074,2,4170,1005,30212,333,5212]


x = np.arange(len(labels))  # the label locations
width = 0.3  # the width of the bars

fig, ax = plt.subplots()
rects1 = ax.bar(x - width/2, firstyear, width, label='firstyear')
rects2 = ax.bar(x + width/2, secondyear, width, label='secondyear')

# Add some text for labels, title and custom x-axis tick labels, etc.
ax.set_ylabel('(MetricTon)')
ax.set_title('Sales in different three years')
ax.set_xticks(x, labels)
ax.legend()

ax.bar_label(rects1, padding=3)
ax.bar_label(rects2, padding=3)

fig.tight_layout()

display(fig, target="mpl")
            </py-script>

</body>
</html>