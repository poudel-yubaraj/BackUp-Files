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
import numpy as np
import matplotlib.pyplot as plt
fig, ax = plt.subplots(figsize=(8, 5), subplot_kw=dict(aspect="equal"))

recipe = ["35  Mountain",
          "42  Hill",
          "23  Terai"]

data = [float(x.split()[0]) for x in recipe]
ingredients = [x.split()[-1] for x in recipe]


def func(pct, allvals):
    absolute = int(np.round(pct/100.*np.sum(allvals)))
    return "{:1.0f}%".format(pct)


wedges, texts, autotexts = ax.pie(data, autopct=lambda pct: func(pct, data),
                                  textprops=dict(color="w"))

ax.legend(wedges, ingredients,
          title="Ingredients",
          loc="center left",
          bbox_to_anchor=(1, 0, 0.5, 1))

plt.setp(autotexts, size=15, weight="bold")

ax.set_title("AgroPod: Area Distribution by Ecological Belt")
           
display(fig, target="mpl")
            </py-script>

</body>
</html>