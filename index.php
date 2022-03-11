<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chammie - Food Product</title>
    <link rel="icon" href="assets/img/Chammie Logo-06.1.svg">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/slick-slide.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/remixicon/remixicon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&amp;family=Bebas+Neue&amp;family=Satisfy&amp;family=Quattrocento:wght@400;700&amp;display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        * {
            font-family: "Barlow", sans-serif;
            font-size: 1rem;
        }
/* ---------------------------------HEADER START--------------------------------- */

        header {
            position: fixed;
            width: 100%;
            font-family: "Barlow", sans-serif;
            display: flex;
            font-size: 1.4rem !important;
            justify-content: space-around;
            align-items: center;
            background-color: #e63b4c;
            color: #fff;
            text-align: center;
            max-height: 100px;
            z-index: 99;

        }

        header .logo {
            display: flex;
            margin-right: 100px;
            align-items: flex-end;
            background-color: transparent;
        }

        header .logo img {
            display: flex;
            justify-content: flex-start;
        }

        header ul {
            display: flex;
            text-decoration: none;
            list-style: none;
        }

        header ul li {
            display: flex;
            padding: 10px;
        }

        header ul li a:hover {
            color: #fdc913;
        }
/* ---------------------------------HEADER END--------------------------------- */
/* ---------------------------------TOGGLE ICON START--------------------------------- */

        .icon {
            background-color: #e63b4c;
            display: flex;
            justify-content: end;
            margin-top: -50px;
            display: none;

        }

        .icon button {
            outline: none;
            border: none;
            background-color: transparent;
            color: #fff;

        }

        .model {
            display: none;
        }
/* ---------------------------------TOGGLE ICON END--------------------------------- */

/* ---------------- footer START----------------------- */


        footer {
            background-color: black;

            display: flex;
            justify-content: space-around;
        }

        footer .footer-container {
            padding: 10px;
            margin-left: 10px;
        }

        footer .footer-content-right {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        footer .footer-content-right .col-1 {

            min-width: 200px;
        }

        footer .footer-content-right .col-2 {

            margin-top: 50px;
            min-width: 200px;
        }

        footer ul li {
            list-style: none;
        }

        .footer-bottom {
            background-color: black;
        }

/* ---------------- footer END----------------------- */
/* ----------------carosal START----------------------- */

        .section-carosal {
            padding-top: 50px;
            position: relative;
        }


        .mySlides {
            display: none;
        }

        #img {
            margin-top: 50px;
            display: block;
        }

        .w3-content .button {
            display: flex;
            justify-content: space-between;
            position: absolute;
            width: 100%;
            top: 40%;
            margin-top: 10px;
        }


        @media screen and(max-width:750px) {
            .w3-content .button {
                display: flex;
                justify-content: space-between;
                position: absolute;
                width: 100%;
                top: 30%;
                margin-top: 10px;
            }
        }

        .w3-content .button button {
            outline: none;
            border: none;
            color: white;
            background-color: transparent;
            font-size: 50px;
        }

        @media screen and (max-width:450px) {
            .w3-content .button {
                position: absolute;
                top: 150px;

            }

            .w3-content .button button {

                font-size: 30px;
            }
        }

/* ----------------carosal END----------------------- */


/* --------------------------------- @MEDIA --------------------------------- */

        @media screen and (max-width:750px) {
 /* ---------------------------------HEADER START--------------------------------- */

            header {
                display: flex;
                justify-content: space-between;

            }

            header ul {
                display: none;
            }

            header .logo {
                display: flex;
                margin-right: 250px;
                z-index: 99;
                justify-content: right;
                background-color: transparent;
            }
 /* ---------------------------------HEADER END--------------------------------- */

 /* ---------------------------------TOGGLE ICON START--------------------------------- */
  

            .icon {
                display: flex;
                position: fixed;
                background-color: transparent;
                width: 100%;
                margin-top: 30px;
                z-index: 999;
                font-size: 25px;


            }

            .actived {
                position: fixed;
                width: 100%;
                z-index: 99;
                margin-top: 100px;
                display: flex;
                flex-direction: column;
                background-color: #e63b4c;
            }

            .actived #ul .li {

                list-style: none;
                border-bottom: 1px solid #fff;
                padding-bottom: 10px;
                color: #fff;
            }

            .actived #ul .li a:hover {
                color: #fdc913;
            }

 /* ---------------------------------TOGGLE ICON END--------------------------------- */

 /* ---------------- footer START----------------------- */

            footer {

                display: flex;
                flex-wrap: wrap;
            }

            footer .footer-content-right {
                display: flex;
                flex-wrap: wrap;
                margin-top: 50px;
            }

        }
 /* ---------------- footer END----------------------- */

/* --------------------------------- @MEDIA --------------------------------- */

    </style>

    <script>

        /* ---------------------------------TOGGLE ICON START--------------------------------- */

            $(document).ready(function() {
                $("#btn-id").click(function() {
                    $('.model ').toggleClass("actived");


                });
            });
        /* ---------------------------------TOGGLE ICON END--------------------------------- */

        /* ----------------carosal START----------------------- */

            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
            }

        /* ----------------carosal END----------------------- */

    </script>

</head>

<body class='sc5'>
<!--  ---------------------------------preloader  START---------------------------------   -->

    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div id="wave1">
            </div>
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
<!--  ---------------------------------preloader   END---------------------------------   -->

<!--  ---------------------------------HEADER START---------------------------------   -->

    <header style="font-size: 1.4rem !important; color:#fff;">
        <div class="menu">
            <ul style="font-size: 1.4rem !important;">
                <li><a href="index.php">HOME</a></li>
                <li><a href="./menu.php">MENU</a></li>
                <li><a href="./about.php">ABOUT </a></li>
                <li><a href="./contact.php">CONTACT</a></li>

            </ul>
        </div>
        <div class="logo">
            <img src="./assets/img/cha logo.svg" width="230px" height="150px">
        </div>

        <div class="number">
            <ul>
                <li><i class="ri-phone-fill float-start"> <a href="tel:9698623777" style="padding: 0px 10px;">9698623777</a> </i></li>

            </ul>

        </div>
    </header>

<!--  ---------------------------------HEADER END---------------------------------   -->

<!--  ---------------------------------TOOGLE ICON START---------------------------------   -->

    <div class="icon">
        <button id="btn-id"><i class="fa fa-bars"></i></button>
    </div>
    <div class="model">
        <ul id="ul">
            <li class="li"><a href="index.php">HOME</a></li>
            <li class="li"><a href="./menu.php">MENU</a></li>
            <li class="li"><a href="./about.php">ABOUT US</a></li>
            <li class="li"><a href="./contact.php">CONTACT</a></li>

        </ul>
    </div>
 
<!--  --------------------------------- TOOGLE ICON  END---------------------------------   -->

<!-- ----------------carosal START-----------------------  -->

    <section class="section-carosal">

        <div class="w3-content w3-display-container">
            <img id="img" class="mySlides" src="./assets/img/Untitled-1-01.jpg" style="width:100%">
            <img class="mySlides" src="./assets/img/Untitled-1-02.jpg" style="width:100%; padding-top:50px">
            <img class="mySlides" src="./assets/img/Untitled-1-03.jpg" style="width:100%; padding-top:50px">
            <div class="button">
                <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>

        </div>
    </section>

<!-- ----------------carosal  END-----------------------  -->



<!-- Banner Area Start-->
    <section class="about-area pd-top-120 pd-bottom-90">
        <div class="container" style="max-width: 300%;">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="thumb mb-lg-0 mb-4">
                        <div style="padding:30 50px;">
                            <h3 style="padding-top: 30px; font-family: var(--satisfy-font); font-weight: 400; color: #ce2829; font-size: 36px;">Savor the Taste</h3>
                            <h1 style="font-size: 42px; font-weight: 600;">Different spice for a Different taste</h1>
                            <p style="line-height: var(--line-height30); font-size: 20px;">Chammie food product is an eminent organization with 25 Years of Experience in Vegtables & Fruits
                                Business Now we have stepped into manufacturing of quality & healthy food products to deliver it all over India. Our strong focus is on
                                quality, taste and customer satisfaction. Quality products purchasing direct from formers.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-lg-start text-center">
                        <img src="./assets/img/jam-on-whole-wheat-bread.jpg" alt="img" height="450px" style="padding-top: 50px;">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
<!-- Banner Area End -->




<!-- about Area Start-->
    <section class="about-area pd-top-120 pd-bottom-90">
        <div class="container" style="max-width: 300%;">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="thumb mb-lg-0 mb-4">
                        <img src="./assets/img/t sauce bottle.jpg" alt="img" height="500px">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-lg-start text-center">
                        <div style="padding:30px 50px;">
                            <h3 class="sub-title">Why choose us</h3>
                            <h2 class="title">Why we are the best</h2>
                            <p style="line-height: var(--line-height30)">Our strong focus is on quality, taste and customer satisfaction. We purchase Quality
                                vegetables & fruits direct from farmers all over Tamilnadu. We have latest food machinery
                                adhering to all quality standards with experienced staffs from food processing industry. We
                                are best in manufacturing of quality assured range of Fruit Jams and Sauces. Quality
                                products purchasing direct from formers. We are the renowned manufacture of quality assured
                                range of Fruit Jam, Sauces. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
<!-- about Area END-->


    

<!-- product Area Start-->
    <section class="product-area pd-bottom-90">
        <div class="container" style="max-width: 300%;">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="sub-title">Our signature</h3>
                        <h2 class="title">Delicious Deals for Delicious Product</h2>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                 <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-item-wrap style-2">
                            <div class="thumb">
                                <img src="./assets/img/t bottle.png" alt="img">

                            </div>
                            <div class="wrap-details">
                                <h5><a href="menu.html">Tomato Sauce</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>

                                    </div>
                                </div>
                                <div class="btn-area">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-item-wrap style-2">
                            <div class="thumb">
                                <img src="./assets/img/soya.png" alt="img">

                            </div>
                            <div class="wrap-details">
                                <h5><a href="menu.php">Soya Sauce</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>

                                    </div>
                                </div>
                                <div class="btn-area">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-item-wrap style-2">
                            <div class="thumb">
                                <img src="./assets/img/red-apple.jpg" alt="img">

                            </div>
                            <div class="wrap-details">
                                <h5><a href="menu.php">Vinegar </a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>

                                    </div>
                                </div>
                                <div class="btn-area">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-item-wrap style-2">
                            <div class="thumb">
                                <img src="./assets/img/z1 (1).jpg" alt="img">

                            </div>
                            <div class="wrap-details">
                                <h5><a href="menu.php">Hot & Spicy Chilli Sauce</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>

                                    </div>
                                </div>
                                <div class="btn-area">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-item-wrap style-2">
                            <div class="thumb">
                                <img src="./assets/img/z5 (2).jpg" alt="img">

                            </div>
                            <div class="wrap-details">
                                <h5><a href="menu.php">Fruit Jam</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>

                                    </div>
                                </div>
                                <div class="btn-area">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-item-wrap style-2">
                            <div class="thumb">
                                <img src="./assets/img/z4 (1).jpg" alt="img">

                            </div>
                            <div class="wrap-details">
                                <h5><a href="menu.php">Beetroot Jam</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>

                                    </div>
                                </div>
                                <div class="btn-area">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-item-wrap style-2">
                            <div class="thumb">
                                <img src="./assets/img/z2 (1).jpg" alt="img">

                            </div>
                            <div class="wrap-details">
                                <h5><a href="menu.php">Strawberry Jam</a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>

                                    </div>
                                </div>
                                <div class="btn-area">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-item-wrap style-2">
                            <div class="thumb">
                                <img src="./assets/img/z3 (1).jpg" alt="img">

                            </div>
                            <div class="wrap-details">
                                <h5><a href="menu.php">Mango Pulp</a> </a></h5>
                                <div class="wrap-footer">
                                    <div class="rating">
                                        4.9
                                        <span class="rating-inner">
                                            <i class="ri-star-fill ps-0"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line pe-0"></i>
                                        </span>

                                    </div>
                                </div>
                                <div class="btn-area">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="tab-pane fade" id="pills-pizza" role="tabpanel" aria-labelledby="pills-pizza-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-item-wrap style-2">
                                <div class="thumb">
                                    <img src="assets/img/index/product/05.png" alt="img">

                                </div>
                                <div class="wrap-details">
                                    <h5><a href="menu.php">Mango Pulp Jam</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="btn-area">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
<!-- product Area End -->

<!-- about Area Start-->
    <section class="about-area pd-top-120 pd-bottom-90" style="background-image: url(assets/img/index/about/bg.png); background-color:white">
        <div class="container" style="max-width: 300%;">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="about-default-thumb">
                        <img src="./assets/img/ketchup-bowl.jpg" alt="img" style="padding-bottom: 50px; padding-left: 30px; padding-left: 70px;     margin-top: 50px;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 order-lg-first align-self-center">
                    <div class="section-title text-lg-start text-center">
                        <h3 class="sub-title">Tasty Notch</h3>
                        <h2 class="title">We Have Excellent Of Quality Food Product</h2>
                        <p style="line-height: var(--line-height30)">We are best in manufacturing of quality assured range of Fruit Jams and Sauces. Quality
                            products purchasing direct from formers. We are the renowned manufacture of quality assured
                            range of Fruit Jam, Sauces. Our strong focus is on quality, taste and customer satisfaction.
                            Quality products purchasing direct from formers. We are the renowned manufacture of quality
                            assured range of Fruit Jam, Sauces.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- about Area End -->

     

<!-- footer area start -->
    <?php include './Footer.php' ?>
<!-- footer area end -->

<!-- back-to-top  start  -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>
<!-- back-to-top end -->



    <!-- all plugins here -->
    <script src="assets/js/jquery.3.6.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imageloded.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/slick-slider.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tweenmax.min.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>