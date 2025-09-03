<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onion</title>
         <!-- favicon -->
<link rel="icon" type="images/x-icon" href="../images/seedling-solid.svg">
<!-- local Css -->
<link rel="stylesheet" href="css/index.css" type="text/css">
<link rel="stylesheet" href="css/animation.css" type="text/css">
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<script>
    function disease(value)
    {
      document.getElementById("iframe1").src="onion/"+value+".php";
    }
</script>
</head>
<body>
<section class="intro-single bg-light border-bottom border-success border-5 py-3">
    <div class="container ">
        <div class="row">

            <div class="col-md-12 col-lg-8 border-start border-success border-5 ps-4">
                <div class="title-single-box">
                    <h1 class="title-single ">Onion
                    </h1>
                    <span class="color-text-a fw-bold">Trouble Shooting Module(TSM)</span>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 border-start border-success border-5 ps-4">
            <div class="title-single-box">
                    <form>
                            <h5>Disease</h5>
                        <select class="disease-select rounded-2 border border-success border-3" onchange="disease(this.value)">
                        
                            <option value="5">बैजनी धव्बा (Purple Blotch)</option>
                            
                            <option value="9">प्याजको कालो पोक ( Onion Smut )</option>
                            
                            <option value="10">फेंद सडन  (Basal Rot or Pink Rot)</option>
                            
                            <option value="11">शीते ढुसी रोग (Downy Mildew)</option>
                            
                            <option value="12">स्टेमफाइलियम डढुवा</option>
                            
                            <option value="13">कालो ढुँसी (Black Mould)</option>
                            
                            <option value="14">कोत्रे रोग</option>
                            
                            <option value="20">खैरो सडन</option>
                            
                            <option value="15">सेतो सडन</option>
                            
                            <option value="16">घाँटी सडन</option>
                            
                            <option value="17">नीलो ढुँसी</option>
                            
                            <option value="18">सेतो टुप्पा</option>
                            
                            <option value="19">गीले सडन</option>
                            
                            <option value="21">Iris Spot Virus</option>
                            
                            <option value="22">पहेंलो पुड्के भाईरस</option>
                            
                            <option value="23">डाँठमा लाग्ने जुका</option>
                            
                            <option value="24">जरामा लाग्ने जुका</option>
                            
                        </select>
                    </form>
                    <a href="../index.php"> <div class="btn btn-warning mt-1 ">Home</div></a>

                </div> 
            </div>

        </div>
    </div>
</section>
<div class="container " style="height:500px;width:100%;">
<iframe src="onion/5.php" frameborder="0" height="90%" width="100%" id="iframe1"></iframe>
</div>
</body>
</html>