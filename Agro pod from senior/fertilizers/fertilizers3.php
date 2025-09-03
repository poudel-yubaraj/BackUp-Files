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
    <!-- Link to edit the chatbot is-->

    <!-- Icon for left right arrow -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">


</head>

<body>

    <!-- header -->
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

    <!-- fertilizers part -->

    <section id="product1" class="section-p1">
        <!-- Herbicides -->
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


        <!-- Fungicides -->
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


    <!-- left right page  -->
    <section id="pagination" class="section-p1">
        <a href="fertilizers2.php"><i class="fal fa-long-arrow-alt-left"></i></a>
        <a href="#">3</a>
        <a href="fertilizers.php"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>


    <!-- footer -->
    <section class="footer">
        <link rel="stylesheet" href="../css/custom.css" type="text/css">
        <link rel="stylesheet" href="../css/index.css" type="text/css">
        <div class="container-fluid  mt-5 text-dark" style="background-color: rgb(242, 244, 247);background-image:linear-gradient(lightblue,white);">
            <div class="row px-4 py-4 ">
                <div class="col-sm-4">
                    <img src="../images/logo7.png" class=" mx-auto d-block ms-2 " alt="Website-logo" style="height: 140px;width:200px;">
                    <a class="nav-link  ps-0 " href="#">
                        <div class="badge text-wrap text-dark " style="width: 15rem;">
                            <p class=" text-start lh-1 pt-3 ">
                                <!-- <span class="fw-light text-primary" style="font-size: 16px;">KHWOPA ENGINEERING COLLEGE </span> -->
                                <!-- <span class="fs-2" style="color: rgb(7, 104, 231);font-weight:10px;">Digital AgroPods</span> -->
                                <span class="fs-4 lh-base">Bhaktapur, Nepal</span>
                            </p>
                        </div>
                    </a>
                    <p class="fw-bold text-dark ps-2">FOLLOW US ON </p>
                    <i class="fa-brands fa-square-facebook ms-2" style="font-size: 30px;color:rgb(6, 96, 199);"></i>
                    <i class="fa-brands fa-youtube mx-2" style="font-size: 30px;color:rgb(94, 4, 4);"></i>
                    <i class="fa-brands fa-whatsapp mx-2" style="font-size: 30px;color:rgb(10, 226, 28);"></i>
                    <i class="fa-brands fa-skype mx-2" style="font-size: 30px;color:rgb(10, 204, 238);"></i>
                    <i class="fa-brands fa-github mx-2" style="font-size: 30px;color:rgb(53, 54, 50);"></i>
                    <i class="fa-brands fa-twitter me-2" style="font-size: 30px;color:rgb(41, 144, 241);"></i>
                </div>
                <div class="col-sm-3">
                    <P class="fw-bolder fs-5">RELATED LINKS</P>
                    <hr class="border border-primary border-2">
                    <p class="fw-light fs-5 lh-lg ">
                        <a href="#"> Events<br></a>
                        <a href="#"> News <br></a>
                        <a href="#"> Publication <br></a>
                        <a href="#"> Download<br></a>
                        <a href="#"> Contacts
                    </p></a>

                </div>
                <div class="col-sm-5">
                    <p class="fw-bolder fs-5" id="linkcontact">CONTACT</p>
                    <hr class="border border-primary border-2">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1766.749098960463!2d85.43854470564648!3d27.670992998472894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb05531bf45063%3A0xeec9e70e9a3ea1cc!2sKhwopa%20College%20of%20Engineering!5e0!3m2!1sen!2snp!4v1668760221457!5m2!1sen!2snp" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    <span><i class="fa-solid fa-location-dot me-3"></i>Liwali 02,Bhaktapur Nepal</span>
                    <span><br><i class="fa-solid fa-phone me-3"></i>04123456</span>
                    <span><br><i class="fa-solid fa-square-envelope me-3"></i>infoAgroPods@yahoo.com</span>
                </div>
            </div>
        </div>
        <div class="container border-top border-info border-5 rounded sticky-bottom  text-center">
            <div class="row bg-light justify-content-sm-center pt-2">

                <div class="col-sm"> <a href="../fertilizers/fertilizers.php"> <i class="fa-solid fa-chart-line " style="font-size: 30px;color:red;"></i><br>
                        <p class="fs-6 fw-bold" style="color:blueviolet;">Fertilizer</p>
                    </a> </div>

                <div class="col-sm"> <a href="../statistics/Statistics.php"> <i class="fa-solid fa-chart-pie " style="font-size: 30px; color:red"></i>
                        <br>
                        <p class="fs-6 fw-bold" style="color:blueviolet;">Nepal Agriculture Statistics</p>
                    </a> </div>

                <div class="col-sm">
                    <a href="../complains/complain.php"> <i class="fa-solid fa-comments " style="font-size: 30px;color:red;"></i>
                        <br>
                        <p class="fs-6 fw-bold" style="color:blueviolet;">Complaints/Suggestions</p>
                    </a>
                </div>
            </div>
        </div>
    </section>


</body>

</html>