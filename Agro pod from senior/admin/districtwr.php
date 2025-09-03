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
<div class="container-fluid">
  <table class="table table-hover">
    <thead class="bg-info">
     <tr>
      
       <th>District</th>
       <th>Province</th>
       <th>Percentage</th>

      

     </tr>
    </thead>
    <tbody class="bg-secondary text-light fs-4">
      <tr>
        <td id="dis"></td>
        <td id="pro"></td> 
        <td id="em"></td><br><hr>
      </tr>
    </tbody>
  </table>
</div>
            <py-config>
            packages = [
              "matplotlib",
              "pandas"
            ]
            </py-config>
            <py-script>
              import pandas as pd

              from pyodide.http import open_url
              url = (
                  "https://docs.google.com/spreadsheets/d/e/2PACX-1vQ6x-UHEX_ocv7W32YMQtAKX4-cULwjs_cGphB4rJyeWEUbCm41Fz02pJEBhPwVBukqN19Akp-dROvu/pub?output=csv"
              )
              
              df = pd.read_csv(open_url(url))
              count=0
              count2=0
              i=0
              while i< len(df):
               bc=df.loc[i]['District']
               display(df.loc[i]['District'],target='dis')
               display(df.loc[i]['Province'],target='pro')              
               if bc=="Achham":
                count=count+1
                c="{}%"
                display(c.format((count/len(df))*100),target='em')  
               if bc=="Bhaktapur":
                count2=count2 +1
                c="{}%"
                display(c.format((count2/len(df))*100),target='em')  
               i+=1  
            </py-script>
</body>
</html>