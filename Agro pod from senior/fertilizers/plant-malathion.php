<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital AgroPod</title>
    <!-- favicon -->
    <link rel="icon" type="images/x-icon" href="../images/seedling-solid.svg">

    <link rel="stylesheet" href="fertilizers.css">
    <!-- Bootstrap via content delivery network -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Link to edit the chatbot is 
https://dashboard.collect.chat/63d8defcdbdefebfff0f4535/builder/share
 and  script code is below
-->

</head>

<body>

    <!-- header part -->
    <section>

        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="d-flex bg-light justify-content-end  ">
                            <!-- <a href="#" class="text-info me-3">Nepali</a>
            <i class="fa-regular fa-pipe"></i>
           <a href="# " class="text-info me-3">English</a>  -->

                            <div id="google_translate_element"></div>
                            <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            <script>
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                            pageLanguage: "en",
                                            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
                                        },
                                        "google_translate_element"
                                    );
                                }
                            </script>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Top header bar -->
            <div class="container-fluid text-white" style="background-image: linear-gradient(green,green);">
                <div class="row  ">
                    <div class="col-sm-5  ps-4">
                        <div class="d-inline-flex mb-1 ">
                            <img src="../images\softwarelogo.png" class="rounded mx-auto mt-1 d-block " alt="Website-logo" style="height: 120px;width:120px;">
                            <div class="container-fluid mt-2 ">
                                <p class=" text-start lh-base ">
                                    <span class="fw-bold " style="font-size: 16px;">KHWOPA ENGINEERING COLLEGE </span><br>
                                    <span class="fs-2 fw-bold" style="color:rgb(80, 7, 99);font-weight:10px;">Digital AgroPods</span><br>
                                    <span class="fs-5 lh-base">Bhaktapur, Nepal</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5  ps-3 ">
                        <p class="fs-5 fw-bolder text-center pt-4" style="color: blue;"> "Innovative technology and modern system to develop the country's agricultural structure and industry."
                        </p>
                    </div>
                    <div class="col-sm-2  ps-2 mt-3 ">
                        <img src="../images/fastflag.gif" class=" mx-auto d-block " alt="Website-logo" style="height: 100px;width:100px;">

                    </div>

                </div>
            </div>

            <nav class="navbar navbar-expand-sm navbar-dark   bg-info sticky-top">
                <div class="container-fluid " style="height: 30px;">
                    <a class="navbar-brand" href="../index.php">
                        <i class="fa-solid fa-house ps-2">AgroPods</i>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse  " id="mynavbar">
                        <ul class="navbar-nav mx-auto bg-info fs-5 fw-bold">
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="../aboutus.php">Abouts</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle  text-white" role="button" data-bs-toggle="dropdown"> Services</a>
                                <ul class="dropdown-menu">
                                    <li> <a href="../weather/weathermain.php" class="dropdown-item">Weather forecast</a></li>
                                    <li> <a href="" class="dropdown-item"> Disease Diagnosis</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle  text-white" role="button" data-bs-toggle="dropdown"> Forms</a>
                                <ul class="dropdown-menu">
                                    <li> <a href="https://forms.gle/FjVUw362yBtGV9M79" class="dropdown-item">Krisi Bibaran Sankalan form</a></li>
                                    <li> <a href="https://forms.gle/aY6iPckDkiD2HAbt5" class="dropdown-item">Krisak darta form</a></li>
                                </ul>
                            </li>

                        </ul>

                        <form class="d-flex " style="height: 30px;">
                            <input class="form-control me-2" type="text" placeholder="Search">
                            <button class="btn btn-primary pt-1" type="button">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

    </section>

    <!-- Product detail -->
    <section id="prodetails" class="section-p1">

        <div class="single-pro-image">
            <img src="fertimages/plant-malathion.jpg" width="100%" id="mainimg" alt="">

            <div class="small-img-group">

                <div class="small-img-col">
                    <img src="fertimages/plant-malathion.jpg" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="fertimages/plant-malathion2.jpg" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="fertimages/plant-malathion3.jpg" width="100%" class="small-img" alt="">
                </div>

            </div>
        </div>
        <div class="single-pro-details">

            <h4>Product Details</h4>
            <span>The Gildan Ultra Cotton tshirt is made from a substantial 6.0 oz. Per sq. yd. fabric constructed from
                100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort with each wear. Featuring
                a tapped neck and shoulder, and a seamless double-needle collar, and available in a range of colors, it
                offers it all in the ultimate head-turning package. </span>
        </div>

    </section>



    <!-- Remaining product  -->

    <!-- Fertilizers -->
    <section id="product1" class="section-p1">
        <h2>Fertilizers Uses in Nepal</h2>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='urea.php';">
                <img src="fertimages/urea.jpg" alt="">
                <div class="des"><span>Urea</span>
                    <h5>Nitrogen</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='dap.php';">
                <img src="fertimages/dap.jfif" alt="">
                <div class="des"><span>DAP</span>
                    <h5>Phosphorus</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='potash.php';">
                <img src="fertimages/potash.jpg" alt="">
                <div class="des"><span>Potash</span>
                    <h5>Potassium sulphate</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='calcium.php';">
                <img src="fertimages/calcium-nitrate.jpg" alt="">
                <div class="des"><span>Calcium</span>
                    <h5>Calcium-nitrate</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='zinc.php';">
                <img src="fertimages/zinc.webp" alt="">
                <div class="des"><span>Zinc</span>
                    <h5>Zinc Sulphate Heptahydrate</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='seawood.php';">
                <img src="fertimages/seaweed.jpg" alt="">
                <div class="des"><span>Sea Weed</span>
                    <h5>Extract powder & Liquid</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='humagra.php';">
                <img src="fertimages/humic-acid3.png" alt="">
                <div class="des"><span>Humagra</span>
                    <h5>Humic acid</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='mop.php';">
                <img src="fertimages/murate-of-potash.png" alt="">
                <div class="des"><span>Murate of Potash</span>
                    <h5>Potassium Chloride</h5>
                </div>
            </div>
        </div>


        <br> <br>
        <h2>Insecticides Uses in Nepal</h2>

        <div class="pro-container">

            <div class="pro" onclick="window.location.href='rogor.php';">
                <img src="fertimages/rogor.webp" alt="">
                <div class="des"><span>Rogor</span>
                    <h5>Dimethoate 30 % Ec</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='emamectin.php';">
                <img src="fertimages/emamectin.jpg" alt="">
                <div class="des"><span>Emamectin</span>
                    <h5>Emamectin Benzoate 5% SG</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='tamasa.php';">
                <img src="fertimages/imidacloprid.jpg" alt="">
                <div class="des"><span>Tamasa</span>
                    <h5>Imidacloprid 70 % WDG</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='samridhi.php';">
                <img src="fertimages/samridhi.jpg" alt="">
                <div class="des"><span>Samridhi</span>
                    <h5>Chlorpyriphos 50%+Cypermethrin 5% EC</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='delta.php';">
                <img src="fertimages/delta.jpg" alt="">
                <div class="des"><span>Delta 2.8</span>
                    <h5>Deltamethrin 2.8% EC</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='coraplus.php';">
                <img src="fertimages/coraplus.jpg" alt="">
                <div class="des"><span>Cora Plus</span>
                    <h5>Indoxacarb 8% + Emamectin Benzoate</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='agrineem.php';">
                <img src="fertimages/agrineem.jpg" alt="">
                <div class="des"><span>Agrineem</span>
                    <h5>Neem Oil</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='intrepid.php';">
                <img src="fertimages/Intrepid.jpg" alt="">
                <div class="des"><span>Intrepid</span>
                    <h5>Chlorfenapyr 10% SC</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='ocean.php';">
                <img src="fertimages/ocean.jpg" alt="">
                <div class="des"><span>Ocean</span>
                    <h5>Propargite 57% EC</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='plant-malathion.php';">
                <img src="fertimages/plant-malathion.jpg" alt="">
                <div class="des"><span>Plant Malathion</span>
                    <h5>Malathion 50% EC</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='prosac.php';">
                <img src="fertimages/prosac.jpg" alt="">
                <div class="des"><span>Prosac</span>
                    <h5>Profenofos 40%+Cypermethrim 4% EC</h5>
                </div>
            </div>
        </div>



        <br> <br>
        <h2>Herbicides Uses in Nepal</h2>

        <div class="pro-container">

            <div class="pro" onclick="window.location.href='jwala.php';">
                <img src="fertimages/jwala.jpg" alt="">
                <div class="des"><span>Jwala</span>
                    <h5>Ammonium salt of Glyphosphate 71% SG</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='krizin.php';">
                <img src="fertimages/krizin.jpg" alt="">
                <div class="des"><span>Krizin</span>
                    <h5>Metribuzin 70% W.P</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='rodular.php';">
                <img src="fertimages/rodular.jpg" alt="">
                <div class="des"><span>Rodular</span>
                    <h5>Paraquat Dichlorite 24% SL</h5>
                </div>
            </div>
        </div>



        <br> <br>
        <h2>Fungicides Uses in Nepal</h2>

        <div class="pro-container">

            <div class="pro" onclick="window.location.href='farmthor.php';">
                <img src="fertimages/farmthor.jpg" alt="">
                <div class="des"><span>Farmthor</span>
                    <h5>Chlorothaloni 75%</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='carbazim.php';">
                <img src="fertimages/carbazim.jpg" alt="">
                <div class="des"><span>Carba Zim</span>
                    <h5>Carbendazim 500 g/l</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='g-tuphan.php';">
                <img src="fertimages/g-tuphan.jpg" alt="">
                <div class="des"><span>G-Tuphan</span>
                    <h5>Fungicide</h5>
                </div>
            </div>

            <div class="pro" onclick="window.location.href='hothot.php';">
                <img src="fertimages/hothot.jpg" alt="">
                <div class="des"><span>Hot-Hot</span>
                    <h5>Mancozeb 54% + Cymoxanil 8% WP</h5>
                </div>
            </div>

        </div>


    </section>


    <script>
        var mainimg = document.getElementById("mainimg");
        var smallimg = document.getElementsByClassName("small-img");
        smallimg[0].onclick = function() {
            mainimg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            mainimg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            mainimg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            mainimg.src = smallimg[3].src;
        }
    </script>
    <script src="script.js"></script>

    <?php include '../layout/footer.php' ?>

</body>