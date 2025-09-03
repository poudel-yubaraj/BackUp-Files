<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Image Slider</title>
    <link rel="stylesheet" href="slider.css">
</head>

<body>

    <!--image slider start-->
    <div class="slider">
        <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">

            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
                <img src="fertimages/fertilizers.svg" alt="">
            </div>
            <div class="slide">
                <img src="fertimages/Bar-diagram-showing-application-of-Nitrogen-Phosphorus-and-potassium-fertilizer-in-rice.png " alt="images">
            </div>

            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>

            </div>
            <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>

        </div>
        <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 2) {
                counter = 1;
            }
        }, 4000);
    </script>

</body>

</html>