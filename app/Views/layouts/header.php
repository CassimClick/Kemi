<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kemi Advocates | <?=$title?></title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Bellefair&family=Open+Sans:wght@300;400;700;800&family=Oswald:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo"><a href="<?=base_url()?>"><img src="assets/images/logo.png" alt=""
                                    title="Kemi Advocates"></a>
                        </div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="<?=base_url()?>">Home</a>

                                    </li>
                                    <li class=""><a href="<?=base_url()?>/about">About</a>

                                    </li>
                                    <li class="dropdown"><a href="#">Practice Areas</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>/realEstate">Real Estate</a></li>
                                            <li><a href="<?=base_url()?>/corporate">Corporate Law</a></li>
                                            <li><a href="<?=base_url()?>/tax">Tax Law</a></li>
                                            <li><a href="<?=base_url()?>/banking">Banking & Finance</a></li>
                                            <li><a href="<?=base_url()?>/litigation">Litigation & ADR</a></li>
                                            <li><a href="<?=base_url()?>/competition">Competition Law</a></li>
                                            <li><a href="<?=base_url()?>/shipping">Shipping & Trade Law</a></li>
                                            <li><a href="<?=base_url()?>/privateClient">Private Client Service</a>
                                            </li>
                                            <li><a href="<?=base_url()?>/energy">Energy, Oil, Gas & Mining</a></li>
                                            <li><a href="<?=base_url()?>/employment">Employment Labour</a></li>
                                            <li><a href="<?=base_url()?>/ngo">Non Profit NGO</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Insight</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>/news">News</a></li>
                                            <li><a href="<?=base_url()?>/publications">Publications</a></li>

                                        </ul>
                                    </li>

                                    <li><a href="<?=base_url()?>/contact">Contact us</a></li>
                                </ul>
                            </div>
                        </nav>

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">

                            <!-- Btn Box -->
                            <!-- <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Contact
                                        US</span></a>
                            </div> -->

                            <!-- Phone Box -->
                            <div class="phone-box">
                                <div class="box-inner">
                                    <span class="icon flaticon-smartphone-1"></span>
                                    Call US Today!
                                    <strong>+255 673 662 664</strong>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="<?=base_url()?>" title=""><img src="assets/images/logo-small.png" alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav><!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">

                            <!-- Btn Box -->
                            <!-- Phone Box -->
                            <div class="phone-box">
                                <div class="box-inner" style="color: #12829e;">
                                    <span style="color: #12829e;" class=" icon flaticon-smartphone-1"></span>
                                    Call US Today!
                                    <strong style="color: #12829e;">+255 673 662 664</strong>
                                </div>
                            </div>

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        </div>

                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>