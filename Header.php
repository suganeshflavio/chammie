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




    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&amp;family=Bebas+Neue&amp;family=Satisfy&amp;family=Quattrocento:wght@400;700&amp;display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        * {
            font-family: "Barlow", sans-serif;
            font-size: 1rem;
        }

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
            align-items: center;
            text-decoration: none;
            list-style: none;
            padding-top: 10px;
        }

        header ul li {
            display: flex;
            padding: 10px;
        }

        header ul li a:hover {
            color: #fdc913;
        }

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



        @media screen and (max-width:750px) {
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
    </style>

    <script>
        $(document).ready(function() {
            $("#btn-id").click(function() {
                $('.model ').toggleClass("actived");


            });
        });
    </script>

</head>

<body class='sc5'>

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

    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <header style="font-size: 1.4rem !important; color:#fff;">
        <div class="menu">
            <ul style="font-size: 1.4rem !important;">
                <li><a href="index.php">HOME</a></li>
                <li><a href="./menu.php">MENU</a></li>
                <li><a href="./about.php">ABOUT</a></li>
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