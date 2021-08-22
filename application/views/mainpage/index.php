<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lembaga Pelatihan Kerja Resmi. Daftar Member LPK Mardizu"/>
    <!-- Title -->
    <title>Mardizu Outsorcing</title>
    <link rel="icon" href="https://mardizu.co.id/assets/asset_index/images/cropped-favicon-2-1-192x192.png" sizes="192x192" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/asset_index/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/asset_index/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/asset_index/') ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/asset_index/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/asset_index/') ?>css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('assets/asset_index/') ?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/asset_index/') ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/asset_index/') ?>css/style-slider.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/asset_index/') ?>css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/icons/newfontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>dist/nice-select/css/nice-select.css">
    <script src="<?php echo base_url('assets/asset_index/') ?>js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--[if lt IE 9]>
        <script src="<?php echo base_url('assets/asset_index/') ?>//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="<?php echo base_url('assets/asset_index/') ?>//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<script type="text/javascript">
  $(document).ready(function(){
        
        $("#news-slider").owlCarousel({
            autoplay: 3000,
            loop: true,
            items : 1, // THIS IS IMPORTANT
            dots : true,
            responsive : {
                  480 : { items : 1  }, // from zero to 480 screen width 
                  768 : { items : 3  }, // from 480 screen widthto 768
                  1024 : { items : 3   // from 768 screen width to 1024
                  }
              },
        });
});
</script>
<style type="text/css">
    ::-webkit-scrollbar {
          width: 0px;  /* Remove scrollbar space */
          background: transparent;  /* Optional: just make scrollbar invisible */
    }
    .anlge-bg{
        background: url(<?php echo base_url('assets/asset_index/images/header-bubble.png') ?>) no-repeat scroll center bottom -120px / 100% auto;
    }

    * {
      box-sizing: border-box;
    }

</style>

<body data-spy="scroll" data-target="#primary-menu">

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="0">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span id="br" class="icon-bar"></span>
                    <span id="br" class="icon-bar"></span>
                    <span id="br" class="icon-bar"></span>
                </button>
                <a id="fl" href="<?php echo site_url('p') ?>" class="navbar-brand logo">
                    <img class="white-logo" src="<?php echo base_url('assets/asset_index/') ?>images/mdzwhite.png" style="height: 40px;display: inline-block;margin-top: -10px;">
                    <h2 style="display: inline-block;max-width: 30vh; font-size: 28px">OUTSORCING</h2>
                </a>
                <a id="sl" href="<?php echo site_url('p') ?>" class="navbar-brand logo">
                    <img class="normal-logo" src="<?php echo base_url('assets/asset_index/') ?>images/mdz.png" style="height: 40px;display: inline-block;margin-top: -10px;">
                    <h2 style="display: inline-block;max-width: 30vh; font-size: 28px">OUTSORCING</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right" style="margin-top: -5px">
                    <li><a href="#">Coming Soon</a></li>
                    <li><a href="#"><span class="button" style="margin-top: -10px;background-color: #2a9d8f">Kontak</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->



    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <!-- <div class="col-md-6 header-text animated fadeInLeft">
                    <h2 style="font-size: 35px;font-weight: 100;">Rental Mobil Semua Tipe</h2>
                    <h1 style="font-family: Gotham,sans-serif;line-height: 1.1;font-size: 5rem;font-weight: 700;">Coming Soon!</h1>
                    <!-- <p>PT.Mardizu Sejahtera</p> -->
                    <!-- <a href="#" class="button white">Watch video</a> -->
                </div>
                <div class="col-xs-12 col-md-12 text-right animated fadeInRight">
                  <center><h2 style="font-size: 35px;font-weight: 100;">Satpam, Cleaning Service, Driver</h2>
                    <h1 style="font-family: Gotham,sans-serif;line-height: 1.1;font-size: 5rem;font-weight: 700;">Coming Soon!</h1></center>
                               
                </div>
            </div>    
        </div>
    </header>
    <!--Header-area/-->  
   <section class="gray-bg section-padding" style="padding-top: 50px;padding-bottom: 50px;" id="news-page">
   <div id="news-slider" class="owl-carousel">
                                
                                    <div class="post-slide">
                                        <div class="post-img">
                                            <img src="https://mardizu.co.id/assets/images/galeri_index/os1.jpeg" alt="">
                                        </div>
                                        <ul class="post-bar">
                                            <li class="pull-right"> <a style="cursor: pointer;" class="btn-show-news"><i class="fas fa-chevron-circle-right"></i>Nantikan</a> </li>
                                            <li> <a>Mardizu@2020</a> </li>
                                        </ul>
                                    </div>

                                    <div class="post-slide">
                                        <div class="post-img">
                                            <img src="https://mardizu.co.id/assets/images/galeri_index/os2.jpeg" alt="">
                                        </div>
                                        <ul class="post-bar">
                                            <li class="pull-right"> <a style="cursor: pointer;" class="btn-show-news"><i class="fas fa-chevron-circle-right"></i>Nantikan</a> </li>
                                            <li> <a>Mardizu@2020</a> </li>
                                        </ul>
                                    </div>

                                    <div class="post-slide">
                                        <div class="post-img">
                                            <img src="https://mardizu.co.id/assets/images/galeri_index/os3.jpeg" alt="">
                                        </div>
                                        <ul class="post-bar">
                                            <li class="pull-right"> <a style="cursor: pointer;" class="btn-show-news"><i class="fas fa-chevron-circle-right"></i>Nantikan</a> </li>
                                            <li> <a>Mardizu@2020</a> </li>
                                        </ul>
                                    </div>
                               
                                </div>
   </section>


    <footer class="footer-area relative sky-bg" id="contact-page" style="padding-top:120px;">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Kontak Kami</h2>
                            <p>Mardizu Outsorcing Call Center.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?php echo base_url('assets/asset_index/') ?>images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Address: </strong>Ruko Central Business District (CBD) Blok C12
                                 Jl. Niaga Raya Kawasan Industri Jababeka II Cikarang – Bekasi 17550</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?php echo base_url('assets/asset_index/') ?>images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:+628111849346">+62 811-1849-346 (Asep)</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?php echo base_url('assets/asset_index/') ?>images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:trans@mardizu.co.id">outsorcing@mardizu.co.id</a> <br />
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="row" style="background: #fff; padding: 20px; border-radius: 30px;">
                          <div class="col-md-6" style="color:#888;padding: 15px">
                            <h1>Hubungi Officier Kami</h1><br>
                            Untuk kenyamanan anda menggunakan kami siap membantu anda untuk menyelesaikan masalah dan kendala yang anda alami.
                          </div>
                          <div class="col-md-6" style="color:#888">
                            <img src="<?php echo base_url('assets/images/') ?>cust1.png">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p>Mardizu Outsorcing, Penyaluran SDM Berkualitas dan Terampil.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2020  All right resurved. By Wildan</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Vendor-JS-->
    <script src="<?php echo base_url('assets/asset_index/') ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url('assets/asset_index/') ?>js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="<?php echo base_url('assets/asset_index/') ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/asset_index/') ?>js/contact-form.js"></script>
    <script src="<?php echo base_url('assets/asset_index/') ?>js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url('assets/asset_index/') ?>js/scrollUp.min.js"></script>
    <script src="<?php echo base_url('assets/asset_index/') ?>js/magnific-popup.min.js"></script>
    <script src="<?php echo base_url('assets/asset_index/') ?>js/wow.min.js"></script>
    <script src="<?php echo base_url() ?>dist/nice-select/js/jquery.nice-select.js"></script>
    <!--Main-active-JS-->
    <script src="<?php echo base_url('assets/asset_index/') ?>js/main.js"></script>
</body>

</html>
