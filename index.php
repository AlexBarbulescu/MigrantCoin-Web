<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Blockchain-based decentralized money transfer powered by users. Possibility to send money home straight from your virtual wallet." />
    <!-- SITE TITLE -->
    <title>MigrantCoin</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png?version=2">
    <!-- Animation CSS -->

    <link rel=" stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Font Awesome CSS 
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" >-->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- ionicons CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" type="text/css" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/spop.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?version=<?= time() ?>">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css?version=<?= time() ?>">
    <!-- Map CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/map.css?version=<?= time() ?>">
    <!-- Team CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/team.css?version=<?= time() ?>">
    <!-- MigrantCoin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/migrantcoin.css?version=<?= time() ?>">
    <link rel="stylesheet" type="text/css" href="assets/color/migrantcoin.css?version=<?= time() ?>">

    <link rel="stylesheet" type="text/css" href="assets/css/cookieconsent.min.css" />


    <?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $json = file_get_contents('assets/js/language.json');
    $language = json_decode($json, true);

    if (!isset($_COOKIE["active_language"])) {
        // setcookie("active_language", 'en');
        // $_COOKIE["active_language"] = 'en';
        $active_language = 'en';
        setcookie("active_language", 'en');
        $_COOKIE["active_language"] = 'en';
    } else {
        $active_language = $_COOKIE["active_language"];
    }

    // $language[$active_language]  = str_replace("\n", "<br />", $language[$active_language]);

    ?>

</head>

<body class="bg_light" data-spy="scroll" data-offset="110">
    <!-- START LOADER -->
    <div id="loader-wrapper">
        <div id="loader-animation" class="spinner-container">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- START SOCIAL MEDIA BAR -->
    <!-- <div class="sticky-container">
        <ul class="sticky">
            <li>
                <img src="assets/images/telegram-circle.png" width="32" height="32">
                <p><a href="https://t.me/migrantcoin" target="_blank">Join us on<br>Telegram</a></p>
            </li>
            <li>
                <img src="assets/images/twitter-circle.png" width="32" height="32">
                <p><a href="https://twitter.com/MigrantcoinO" target="_blank">Follow Us on<br>Twitter</a></p>
            </li>
        </ul>
    </div> -->
    <!-- END SOCIAL MEDIA BAR -->

    <!-- START HEADER -->
    <header id="header" class="header_wrap fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand page-scroll animation" href="#home_section" data-animation="fadeInDown" data-animation-delay="0.1s">
                    <img class="logo_light no-select" src="assets/images/logo_white.png" alt="logo" />
                </a>
                <button class="navbar-toggler animation" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-animation="fadeInDown" data-animation-delay="0.1s">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.1s">
                            <a class="nav-link page-scroll nav_item lang" key="HOME" href="#home_section"><?php print_r($language[$active_language]['HOME']); ?></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">
                            <a class="nav-link page-scroll nav_item lang" key="HOWITWORKS" href="#how-it-works"><?php print_r($language[$active_language]['HOWITWORKS']); ?></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.3s">
                            <a class="nav-link page-scroll nav_item lang" key="VISION" href="#vision"><?php print_r($language[$active_language]['VISION']); ?></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.4s">
                            <a class="nav-link page-scroll nav_item lang" key="TOKEN" href="#token"><?php print_r($language[$active_language]['TOKEN']); ?></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">
                            <a class="nav-link page-scroll nav_item lang" key="ROADMAP" href="#roadmap"><?php print_r($language[$active_language]['ROADMAP']); ?></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.6s">
                            <a class="nav-link page-scroll nav_item lang" key="MISSION" href="#mission"><?php print_r($language[$active_language]['MISSION']); ?></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.7s">
                            <a class="nav-link page-scroll nav_item lang" key="VALUES" href="#values"><?php print_r($language[$active_language]['VALUES']); ?></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.8s">
                            <a class="nav-link page-scroll nav_item lang" key="TEAM" href="#team"><?php print_r($language[$active_language]['TEAM']); ?></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.9s">
                            <a class="nav-link page-scroll nav_item lang" key="FAQ" href="#faq"><?php print_r($language[$active_language]['FAQ']); ?></a>
                        </li>

                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.10s">&nbsp;</li>

                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.11s">
                            <a class="nav-icon nav_icon nav_item" href="https://www.facebook.com/MigrantCoinOfficial/" target="_blank"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.12s">
                            <a class="nav-icon nav_icon nav_item" href="https://t.me/migrantcoin" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.14s">
                            <a class="nav-icon nav_icon nav_item" href="https://twitter.com/MigrantcoinO" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.13s">
                            <a class="nav-icon nav_icon nav_item" href="https://medium.com/@Migrantcoin" target="_blank"><i class="fab fa-medium-m"></i></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="0.15s">
                            <a class="nav-icon nav_icon nav_item" href="https://www.instagram.com/migrantcoin/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon lang language" key="LANG"> <?php print_r($language[$active_language]['LANG']); ?></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item translate" id="en" href="#en"><span class="flag-icon flag-icon-en"> </span> EN</a>
                                <a class="dropdown-item translate" id="ro" href="#ro"><span class="flag-icon flag-icon-ro"> </span> RO</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- END HEADER -->
    <!-- START TOP -->
    <section id="home_section" class="section_banner blue_lr">
        <div id="banner_bg_effect" class="banner_effect"></div>
        <div class="container"><br /><br /><br />
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 order-lg-first">
                    <div class="banner_text text_md_center">
                        <h1 class="lang" key="TOP_01"><?php print_r($language[$active_language]['TOP_01']); ?></h1>
                        <p class="mb-0 lang" key="TOP_02"><?php print_r($language[$active_language]['TOP_02']); ?></p>
                        <p class="lang" key="TOP_03"><?php print_r($language[$active_language]['TOP_03']); ?></p><br />
                        <div class="btn_group">
                            <a href="MIGRANTCOIN_Whitepaper.pdf" target="_blank" class="btn btn-border-white btn-radius lang" key="TOP_04"><?php print_r($language[$active_language]['TOP_04']); ?></i></a>
                            <a href="MIGRANTCOIN_Whitepaper.pdf" target="_blank" class="btn btn-border-white btn-radius lang">LightPaper</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 order-first">
                    <div class="embed-responsive embed-responsive-16by9">
                        <a class="thumbnail-link">
                            <img src="assets/images/thumbnail.jpg" id="hideMe" class="video-thumbnail no-select" alt="Thumbnail Video">
                            <iframe class=" embed-responsive-item" src="https://www.youtube.com/embed/XFWOkMsg_lw?showinfo=0&autohide=1&color=white&controls=2&modestbranding=1&rel=0" allowfullscreen></iframe>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="divider small_divider"></div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="banner_inner">
                        <div class="mgc_blue_bg banner_token text-center animation" data-animation="fadeIn" data-animation-delay="0.1s">
                            <div class="tk_counter_inner p-0 mw-100 d-lg-flex align-items-center">
                                <div class="token_col">
                                    <div class="tk_countdown_time border-0 p-0 counter_medium animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-time="2019/06/01 00:00:00"></div>
                                </div>
                                <div class="progress_col">
                                    <div class="progress animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                                        <div class="progress-bar progress-bar-striped gradient" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width:0%"> 0% </div>
                                        <span class="progress_label bg-white" style="left: 30%"> <strong> 46,000 MGC </strong></span>
                                        <span class="progress_label bg-white" style="left: 75%"> <strong> 90,000 MGC </strong></span>
                                        <span class="progress_min_val lang" key="TOP_05">Sale Raised</span>
                                        <span class=" progress_max_val lang" key="TOP_06">Soft-caps</span>
                                    </div>
                                </div>
                                <div class=" btn_col">
                                    <a href="#" class="btn btn-border-white btn-radius animation lang" key="TOP_07" data-animation=" fadeInUp" data-animation-delay="0.4s">Buy Tokens <i class="ion-ios-arrow-thin-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row text-center hidden-m title_default_light" style="margin-top:0px;">
            <div class="col-sm-12">
                <br /> <br /> <br /> <br /> <br />
                <!-- <h4 class="animation " data-animation="fadeInUp" data-animation-delay="0.2s">Find out more</h4> -->
                <a href="#how-it-works">
                    <img src="assets/images/icon-large-downchevron.png" class="arrow_down" alt="Jump Arrow">
                </a>
            </div>
            <br>
        </div>

        <!-- <div class="angle_bottom"></div> -->
    </section>
    <!-- END TOP -->

    <!-- START HOW IT WORKS -->
    <section id="how-it-works" class="white_ce">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="title_blue_dark title_border text-center">
                        <h4 class="lang" key="HOWITWORKS_01"><?php print_r($language[$active_language]['HOWITWORKS_01']); ?></h4>
                    </div>

                    <p>
                        <img class="sedr_big" src="assets/images/SEDR01.png" alt="How it Works Big">
                        <img class="sedr_small" src="assets/images/SEDR02.png" alt="How it Works Small">
                    </p>

                    <div class="title_blue_dark title_border text-center">
                        <p class="animation font-weight-bold lang lang-width" key="HOWITWORKS_02" data-animation="fadeInUp" data-animation-delay="0.2s"><?php print_r($language[$active_language]['HOWITWORKS_02']); ?>.</p><br />
                        <p class="animation lang lang-width" key="HOWITWORKS_03" data-animation="fadeInUp" data-animation-delay="0.3s"><?php print_r($language[$active_language]['HOWITWORKS_03']); ?></p>
                        <p class="animation lang lang-width" key="HOWITWORKS_04" data-animation="fadeInUp" data-animation-delay="0.3s"><?php print_r($language[$active_language]['HOWITWORKS_04']); ?></p>
                        <p class="animation lang lang-width" key="HOWITWORKS_05" data-animation="fadeInUp" data-animation-delay="0.3s"><?php print_r($language[$active_language]['HOWITWORKS_05']); ?></p><br />

                        <p class="animation lang lang-width" key="HOWITWORKS_06" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['HOWITWORKS_06']); ?></p>
                        <p class="animation lang lang-width" key="HOWITWORKS_07" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['HOWITWORKS_07']); ?></p>
                        <p class="animation lang lang-width" key="HOWITWORKS_08" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['HOWITWORKS_08']); ?></p>
                        <p class="animation lang lang-width" key="HOWITWORKS_09" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['HOWITWORKS_09']); ?></p>
                        <p class="animation lang lang-width" key="HOWITWORKS_10" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['HOWITWORKS_10']); ?></p><br />

                        <p class="animation lang lang-width" key="HOWITWORKS_11" data-animation="fadeInUp" data-animation-delay="0.5s"><?php print_r($language[$active_language]['HOWITWORKS_11']); ?></p>
                        <p class="animation lang lang-width" key="HOWITWORKS_12" data-animation="fadeInUp" data-animation-delay="0.5s"><?php print_r($language[$active_language]['HOWITWORKS_12']); ?>.</p>
                        <p class="animation lang lang-width" key="HOWITWORKS_13" data-animation="fadeInUp" data-animation-delay="0.5s"><?php print_r($language[$active_language]['HOWITWORKS_13']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOW IT WORKS -->

    <!-- START MAP -->
    <section class="section_token blue_lr">
        <div class="angle_top"></div>
        <div class="divider large_divider"></div>
        <div class="container-map d-flex">
            <div class="container">
                <!-- <span class="sparks spark-1 ripple-out"></span>
                <span class="sparks spark-2 ripple-out"></span>
                <span class="sparks spark-3 ripple-out"></span>
                <span class="sparks spark-4 ripple-out"></span>
                <span class="sparks spark-5 ripple-out"></span>
                <span class="sparks spark-6 ripple-out"></span> -->
                <div class="box-text text-center wow fadeIn">
                    <p class="map-textbig lang" key="MAP_01"><?php print_r($language[$active_language]['MAP_01']); ?></p>
                    <p class="map-textsmall lang" key="MAP_02"><?php print_r($language[$active_language]['MAP_02']); ?></p>
                </div>
            </div>
        </div>
        <div class="divider large_divider"></div>
        <div class="angle_bottom"></div>
        <div class="ripple_effect_left_bottom">
            <div class="circle_bg1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="ripple_effect_right_top">
            <div class="circle_bg1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </section>
    <!-- END MAP -->

    <!-- VISION -->
    <section id="vision" class="white_ce">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="title_blue_dark title_border text-center">
                        <h4 class="lang" key="VISION_01"><?php print_r($language[$active_language]['VISION_01']); ?></h4>
                        <p class="lang" key="VISION_02"><?php print_r($language[$active_language]['VISION_02']); ?></p> <br />
                        <p class="animation lang lang-width" key="VISION_03" data-animation="fadeInUp" data-animation-delay="0.5s"><?php print_r($language[$active_language]['VISION_03']); ?></p>
                        <p class="animation lang lang-width" key="VISION_04" data-animation="fadeInUp" data-animation-delay="0.5s"><?php print_r($language[$active_language]['VISION_04']); ?></p>
                        <p class="animation lang lang-width" key="VISION_05" data-animation="fadeInUp" data-animation-delay="0.5s"><?php print_r($language[$active_language]['VISION_05']); ?></p> <br />
                        <p class="animation lang lang-width" key="VISION_06" data-animation="fadeInUp" data-animation-delay="0.6s"><?php print_r($language[$active_language]['VISION_06']); ?></p>
                        <p class="animation lang lang-width" key="VISION_07" data-animation="fadeInUp" data-animation-delay="0.6s"><?php print_r($language[$active_language]['VISION_07']); ?></p>
                        <p class="animation lang lang-width" key="VISION_08" data-animation="fadeInUp" data-animation-delay="0.6s"><?php print_r($language[$active_language]['VISION_08']); ?></p> <br />
                        <p class="animation lang lang-width" key="VISION_09" data-animation="fadeInUp" data-animation-delay="0.7s"><?php print_r($language[$active_language]['VISION_09']); ?></p>
                        <p class="animation lang lang-width" key="VISION_10" data-animation="fadeInUp" data-animation-delay="0.7s"><?php print_r($language[$active_language]['VISION_10']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END VISION -->

    <!-- TOKEN -->
    <section id="token" class="white_ce">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_blue_dark title_border text-center">
                        <h4 class="lang" key="TOKEN_01"><?php print_r($language[$active_language]['TOKEN_01']); ?></h4>
                        <p class="lang" key="TOKEN_02"><?php print_r($language[$active_language]['TOKEN_02']); ?></p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-12">
                    <div class="token_chart res_md_mb_30 res_sm_mb_20 text-center animation" data-animation="fadeInRight" data-animation-delay="0.4s">
                        <canvas id="token_sale"></canvas>
                        <div class="chart_icon">
                            <img src="assets/images/logo-chart.png" alt="logo" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="list_none chart_list animation" data-animation="fadeInLeft" data-animation-delay="0.4s">
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_03"><?php print_r($language[$active_language]['TOKEN_03']); ?></p>
                            </h6>
                            <div class="progress bg-orange">
                                <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_04"><?php print_r($language[$active_language]['TOKEN_04']); ?></p>
                            </h6>
                            <div class="progress bg-green">
                                <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_05"><?php print_r($language[$active_language]['TOKEN_05']); ?></p>
                            </h6>
                            <div class="progress bg-red">
                                <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_06"><?php print_r($language[$active_language]['TOKEN_06']); ?></p>
                            </h6>
                            <div class="progress bg-blue">
                                <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_07"><?php print_r($language[$active_language]['TOKEN_072']); ?></p>
                            </h6>
                            <div class="progress bg-purple">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <br />
            <div class="row text-center">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_blue_dark title_border text-center">
                        <h4 class="lang" key="TOKEN_15"><?php print_r($language[$active_language]['TOKEN_15']); ?></h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 offset-md-3 animation offset-left-token" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="row">
                    <div class="col col-box">
                        <p class="lang black" key="TOKEN_16"><?php print_r($language[$active_language]['TOKEN_16']); ?></p>
                        <p class="lang gray">&nbsp;&nbsp; MGC</p><br />
                    </div>
                    <div class="col offset-right-token col-box">
                        <p class="lang black" key="TOKEN_17"><?php print_r($language[$active_language]['TOKEN_17']); ?></p>
                        <p class="lang gray">&nbsp;&nbsp; ERC-20</p>
                    </div>
                    <div class="w-100"></div>
                    <div class="col col-box">
                        <p class="lang black" key="TOKEN_18"><?php print_r($language[$active_language]['TOKEN_18']); ?></p>
                        <p class="lang gray">&nbsp;&nbsp; 1 MGC = 0.01 USD</p><br />
                    </div>
                    <div class="col offset-right-token col-box">
                        <p class="lang black" key="TOKEN_19"><?php print_r($language[$active_language]['TOKEN_19']); ?></p>
                        <p class="lang gray">&nbsp;&nbsp; 2,000,000,000</p>
                    </div>
                </div>
            </div>

            <br />
            <div class="row text-center">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_blue_dark title_border text-center">
                        <h4 class="lang" key="TOKEN_08"><?php print_r($language[$active_language]['TOKEN_08']); ?></h4>
                        <p class="lang" key="TOKEN_09"><?php print_r($language[$active_language]['TOKEN_09']); ?></p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center flex-row-reverse">
                <div class="col-lg-7 col-md-12">
                    <div class="token_chart res_md_mb_30 res_sm_mb_20 text-center animation" data-animation="fadeInRight" data-animation-delay="0.4s">
                        <canvas id="token_dist"></canvas>
                        <div class="chart_icon">
                            <img src="assets/images/logo-chart.png" alt="logo" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="list_none chart_list animation" data-animation="fadeInLeft" data-animation-delay="0.4s">
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_10"><?php print_r($language[$active_language]['TOKEN_10']); ?></p>
                            </h6>
                            <div class="progress bg-orange">
                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_11"><?php print_r($language[$active_language]['TOKEN_11']); ?></p>
                            </h6>
                            <div class="progress bg-green">
                                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_12"><?php print_r($language[$active_language]['TOKEN_12']); ?></p>
                            </h6>
                            <div class="progress bg-red">
                                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_13"><?php print_r($language[$active_language]['TOKEN_13']); ?></p>
                            </h6>
                            <div class="progress bg-blue">
                                <div class="progress-bar" role="progressbar" style="width: 2%;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100">2%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_14"><?php print_r($language[$active_language]['TOKEN_14']); ?></p>
                            </h6>
                            <div class="progress bg-purple">
                                <div class="progress-bar" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100">3%</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END TOKEN -->

    <!-- ROADMAP -->
    <section id="roadmap" class="blue_lr">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_default_light title_border text-center">
                        <h4 class="lang" key="ROADMAP_01"><?php print_r($language[$active_language]['ROADMAP_01']); ?></h4>
                        <p class="lang" key="ROADMAP_02"><?php print_r($language[$active_language]['ROADMAP_02']); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 pl-0 pr-0">
                    <div class="roadmap owl-carousel small_space">
                        <div class="item">
                            <div class="roadmap_box rd_complete current">
                                <div class="roadmap_inner">
                                    <div class="spinner_circle">
                                        <div class="spinner_point"></div>
                                        <div class="double-bounce1"></div>
                                        <div class="double-bounce2"></div>
                                        <div class="double-bounce3"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q2-Q3 2019</h6>
                                    <p class="animation lang" key="ROADMAP_03" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_03']); ?></p>
                                    <p class="animation lang" key="ROADMAP_04" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_04']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-cube-grid">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube sk-cube1"></div>
                                        <div class="sk-cube sk-cube2"></div>
                                        <div class="sk-cube sk-cube3"></div>
                                        <div class="sk-cube sk-cube4"></div>
                                        <div class="sk-cube sk-cube5"></div>
                                        <div class="sk-cube sk-cube6"></div>
                                        <div class="sk-cube sk-cube7"></div>
                                        <div class="sk-cube sk-cube8"></div>
                                        <div class="sk-cube sk-cube9"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q3 2019</h6>
                                    <p class="animation lang" key="ROADMAP_05" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        <?php print_r($language[$active_language]['ROADMAP_05']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-cube-grid">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube sk-cube1"></div>
                                        <div class="sk-cube sk-cube2"></div>
                                        <div class="sk-cube sk-cube3"></div>
                                        <div class="sk-cube sk-cube4"></div>
                                        <div class="sk-cube sk-cube5"></div>
                                        <div class="sk-cube sk-cube6"></div>
                                        <div class="sk-cube sk-cube7"></div>
                                        <div class="sk-cube sk-cube8"></div>
                                        <div class="sk-cube sk-cube9"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q4 2019</h6>
                                    <p class="animation lang" key="ROADMAP_06" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        <?php print_r($language[$active_language]['ROADMAP_06']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-cube-grid">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube sk-cube1"></div>
                                        <div class="sk-cube sk-cube2"></div>
                                        <div class="sk-cube sk-cube3"></div>
                                        <div class="sk-cube sk-cube4"></div>
                                        <div class="sk-cube sk-cube5"></div>
                                        <div class="sk-cube sk-cube6"></div>
                                        <div class="sk-cube sk-cube7"></div>
                                        <div class="sk-cube sk-cube8"></div>
                                        <div class="sk-cube sk-cube9"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q1-Q2 2020</h6>
                                    <p class="animation lang" key="ROADMAP_07" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        <?php print_r($language[$active_language]['ROADMAP_07']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-cube-grid">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube sk-cube1"></div>
                                        <div class="sk-cube sk-cube2"></div>
                                        <div class="sk-cube sk-cube3"></div>
                                        <div class="sk-cube sk-cube4"></div>
                                        <div class="sk-cube sk-cube5"></div>
                                        <div class="sk-cube sk-cube6"></div>
                                        <div class="sk-cube sk-cube7"></div>
                                        <div class="sk-cube sk-cube8"></div>
                                        <div class="sk-cube sk-cube9"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q2 2020</h6>
                                    <p class="animation lang" key="ROADMAP_08" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_08']); ?></p>
                                    <p class="animation lang" key="ROADMAP_09" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_09']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-cube-grid">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube sk-cube1"></div>
                                        <div class="sk-cube sk-cube2"></div>
                                        <div class="sk-cube sk-cube3"></div>
                                        <div class="sk-cube sk-cube4"></div>
                                        <div class="sk-cube sk-cube5"></div>
                                        <div class="sk-cube sk-cube6"></div>
                                        <div class="sk-cube sk-cube7"></div>
                                        <div class="sk-cube sk-cube8"></div>
                                        <div class="sk-cube sk-cube9"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q3 2020</h6>
                                    <p class="animation lang" key="ROADMAP_10" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        <?php print_r($language[$active_language]['ROADMAP_10']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-cube-grid">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube sk-cube1"></div>
                                        <div class="sk-cube sk-cube2"></div>
                                        <div class="sk-cube sk-cube3"></div>
                                        <div class="sk-cube sk-cube4"></div>
                                        <div class="sk-cube sk-cube5"></div>
                                        <div class="sk-cube sk-cube6"></div>
                                        <div class="sk-cube sk-cube7"></div>
                                        <div class="sk-cube sk-cube8"></div>
                                        <div class="sk-cube sk-cube9"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q4 2020</h6>
                                    <p class="animation lang" key="ROADMAP_11" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        <?php print_r($language[$active_language]['ROADMAP_11']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-cube-grid">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube sk-cube1"></div>
                                        <div class="sk-cube sk-cube2"></div>
                                        <div class="sk-cube sk-cube3"></div>
                                        <div class="sk-cube sk-cube4"></div>
                                        <div class="sk-cube sk-cube5"></div>
                                        <div class="sk-cube sk-cube6"></div>
                                        <div class="sk-cube sk-cube7"></div>
                                        <div class="sk-cube sk-cube8"></div>
                                        <div class="sk-cube sk-cube9"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q1 2021</h6>
                                    <p class="animation lang" key="ROADMAP_12" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_12']); ?></p>
                                    <p class="animation lang" key="ROADMAP_13" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_13']); ?></p>
                                    <p class="animation lang" key="ROADMAP_14" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_14']); ?></p>
                                    <p class="animation lang" key="ROADMAP_15" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_15']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-cube-grid">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube sk-cube1"></div>
                                        <div class="sk-cube sk-cube2"></div>
                                        <div class="sk-cube sk-cube3"></div>
                                        <div class="sk-cube sk-cube4"></div>
                                        <div class="sk-cube sk-cube5"></div>
                                        <div class="sk-cube sk-cube6"></div>
                                        <div class="sk-cube sk-cube7"></div>
                                        <div class="sk-cube sk-cube8"></div>
                                        <div class="sk-cube sk-cube9"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q2 2021</h6>
                                    <p class="animation lang" key="ROADMAP_16" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_16']); ?></p>
                                    <p class="animation lang" key="ROADMAP_17" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_17']); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-cube-grid">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube sk-cube1"></div>
                                        <div class="sk-cube sk-cube2"></div>
                                        <div class="sk-cube sk-cube3"></div>
                                        <div class="sk-cube sk-cube4"></div>
                                        <div class="sk-cube sk-cube5"></div>
                                        <div class="sk-cube sk-cube6"></div>
                                        <div class="sk-cube sk-cube7"></div>
                                        <div class="sk-cube sk-cube8"></div>
                                        <div class="sk-cube sk-cube9"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q3-Q4 2021</h6>
                                    <p class="animation lang" key="ROADMAP_18" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_18']); ?></p>
                                    <p class="animation lang" key="ROADMAP_19" data-animation="fadeInUp" data-animation-delay="0.4s"><?php print_r($language[$active_language]['ROADMAP_19']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ROADMAP -->

    <!-- MISSION -->
    <section id="mission">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <div class="title_default_dark title_border text-center">
                        <h4 class="lang" key="MISSION_01"><?php print_r($language[$active_language]['MISSION_01']); ?></h4>
                        <p class="lang" key="MISSION_02"><?php print_r($language[$active_language]['MISSION_02']); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <i class="fas fa-user-clock"></i>
                        <h4 class="lang" key="MISSION_03"><?php print_r($language[$active_language]['MISSION_03']); ?></h4>
                        <p class="lang" key="MISSION_04"><?php print_r($language[$active_language]['MISSION_04']); ?></p>
                        <p class="lang" key="MISSION_05"><?php print_r($language[$active_language]['MISSION_05']); ?></p>
                        <p class="lang" key="MISSION_06"><?php print_r($language[$active_language]['MISSION_06']); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-shield-alt"></i>
                        <h4 class="lang" key="MISSION_07"><?php print_r($language[$active_language]['MISSION_07']); ?></h4>
                        <p class="lang" key="MISSION_08"><?php print_r($language[$active_language]['MISSION_08']); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-12">
                    <div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
                        <i class="fas fa-user-shield"></i>
                        <h4 class="lang" key="MISSION_09"><?php print_r($language[$active_language]['MISSION_09']); ?></h4>
                        <p class="lang" key="MISSION_10"><?php print_r($language[$active_language]['MISSION_10']); ?></p>
                        <p class="lang" key="MISSION_11"><?php print_r($language[$active_language]['MISSION_11']); ?>.</p>
                        <p class="lang" key="MISSION_12"><?php print_r($language[$active_language]['MISSION_12']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END MISSION -->

    <!-- VALUES -->
    <section id="values" class="blue_lr">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <div class="title_default_light title_border text-center">
                        <h4 class="lang" key="VALUES_01"><?php print_r($language[$active_language]['VALUES_01']); ?></h4>
                        <p class="lang" key="VALUES_02"><?php print_r($language[$active_language]['VALUES_02']); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value1" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <i class="fas fa-lightbulb"></i>
                        <span class="btn_text lang" key="VALUES_03"><?php print_r($language[$active_language]['VALUES_03']); ?></span>
                    </button>
                    <div id="value1" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_04"><?php print_r($language[$active_language]['VALUES_04']); ?></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value2" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-heart"></i>
                        <span class="btn_text">
                            <p class="lang" key="VALUES_05"><?php print_r($language[$active_language]['VALUES_05']); ?></p>
                            <p class="lang" key="VALUES_06"><?php print_r($language[$active_language]['VALUES_06']); ?></p>
                        </span>
                    </button>
                    <div id="value2" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_07"><?php print_r($language[$active_language]['VALUES_07']); ?></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value3" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-chess"></i>
                        <span class="btn_text">
                            <p class="lang" key="VALUES_08"><?php print_r($language[$active_language]['VALUES_08']); ?></p>
                            <p class="lang" key="VALUES_09"><?php print_r($language[$active_language]['VALUES_09']); ?></p>
                        </span>
                    </button>
                    <div id="value3" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_10"><?php print_r($language[$active_language]['VALUES_10']); ?></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value4" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-eye"></i>
                        <span class="btn_text">
                            <p class="lang" key="VALUES_11"><?php print_r($language[$active_language]['VALUES_11']); ?></p>
                            <p class="lang" key="VALUES_12"><?php print_r($language[$active_language]['VALUES_12']); ?></p>
                        </span>
                    </button>
                    <div id="value4" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_13"><?php print_r($language[$active_language]['VALUES_13']); ?></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value5" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-tasks"></i>
                        <span class="btn_text lang" key="VALUES_14"><?php print_r($language[$active_language]['VALUES_14']); ?></span>
                    </button>
                    <div id="value5" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_15"><?php print_r($language[$active_language]['VALUES_15']); ?></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value6" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-handshake"></i>
                        <span class="btn_text lang" key="VALUES_16"><?php print_r($language[$active_language]['VALUES_16']); ?></span>
                    </button>
                    <div id="value6" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_17"><?php print_r($language[$active_language]['VALUES_17']); ?></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value7" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-rocket"></i>
                        <span class="btn_text">
                            <p class="lang" key="VALUES_18"><?php print_r($language[$active_language]['VALUES_18']); ?></p>
                            <p class="lang" key="VALUES_19"><?php print_r($language[$active_language]['VALUES_19']); ?></p>
                        </span>
                    </button>
                    <div id="value7" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_20"><?php print_r($language[$active_language]['VALUES_20']); ?></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value8" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-hands-helping"></i>
                        <span class="btn_text lang" key="VALUES_21"><?php print_r($language[$active_language]['VALUES_21']); ?></span>
                    </button>
                    <div id="value8" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_22"><?php print_r($language[$active_language]['VALUES_22']); ?></span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END VALUES -->

    <!-- START SECTION TEAM -->
    <section class="about_shape_bg" id="team">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_default_dark title_border text-center">
                        <h4 class="lang" key="TEAM_01"><?php print_r($language[$active_language]['TEAM_01']); ?></h4>
                        <p class="lang" key="TEAM_02"><?php print_r($language[$active_language]['TEAM_02']); ?></p>
                    </div>
                </div>
            </div>
            <div class="row small_space justify-content-center">

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="0.7s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/00.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Vlad Cosma
                            </div>
                            <div class="job lang" key="TEAM_15">
                                <?php print_r($language[$active_language]['TEAM_15']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Vlad Cosma
                            </div>
                            <div class="job lang" key="TEAM_15">
                                <?php print_r($language[$active_language]['TEAM_15']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/vlad-cosma-66b272125/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="0.8s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/12.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Serban Victor
                            </div>
                            <div class="job lang" key="TEAM_08">
                                <?php print_r($language[$active_language]['TEAM_08']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Serban Victor
                            </div>
                            <div class="job lang" key="TEAM_08">
                                <?php print_r($language[$active_language]['TEAM_08']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/serban-victor-itil/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="0.8s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/00.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Raul Daniel Siderias
                            </div>
                            <div class="job lang" key="TEAM_16">
                                <?php print_r($language[$active_language]['TEAM_16']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Raul Daniel Siderias
                            </div>
                            <div class="job lang" key="TEAM_16">
                                <?php print_r($language[$active_language]['TEAM_16']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/raul-siderias/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="0.3s">
                    <div class="team-item">
                        <div class="info-top">
                            <div class="name">
                                Titus Pal
                            </div>
                            <div class="job lang" key="TEAM_03">
                                <?php print_r($language[$active_language]['TEAM_03']); ?>
                            </div>
                        </div>
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/07.jpg" alt="Team Member">
                        <div class="info-bottom">
                            <div class="name">
                                Titus Pal
                            </div>
                            <div class="job lang" key="TEAM_03">
                                <?php print_r($language[$active_language]['TEAM_03']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/titus-pal-19295082/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="0.4s">
                    <div class="team-item">
                        <div class="info-top">
                            <div class="name">
                                Abel Dragomir
                            </div>
                            <div class="job lang" key="TEAM_04">
                                <?php print_r($language[$active_language]['TEAM_04']); ?>
                            </div>
                        </div>
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/01.jpg" alt="Team Member">
                        <div class="info-bottom">
                            <div class="name">
                                Abel Dragomir
                            </div>
                            <div class="job lang" key="TEAM_04">
                                <?php print_r($language[$active_language]['TEAM_04']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/abeldragomir/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="0.5s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/02.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Krall Mazilu Ion
                            </div>
                            <div class="job lang" key="TEAM_05">
                                <?php print_r($language[$active_language]['TEAM_05']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Krall Mazilu Ion
                            </div>
                            <div class="job lang" key="TEAM_05">
                                <?php print_r($language[$active_language]['TEAM_05']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/ion-mazilu-krall-51291972" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="0.6s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/14.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Istvan Preda
                            </div>
                            <div class="job">
                                <?php print_r($language[$active_language]['TEAM_06']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Istvan Preda
                            </div>
                            <div class="job">
                                <?php print_r($language[$active_language]['TEAM_06']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/istvanpreda/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="0.9s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/11.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Emanuel Tanasa
                            </div>
                            <div class="job lang" key="TEAM_09">
                                <?php print_r($language[$active_language]['TEAM_09']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Emanuel Tanasa
                            </div>
                            <div class="job lang" key="TEAM_09">
                                <?php print_r($language[$active_language]['TEAM_09']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/emanueltanasa/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.0s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/10.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Dragos Ungur
                            </div>
                            <div class="job lang" key="TEAM_09">
                                <?php print_r($language[$active_language]['TEAM_09']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Dragos Ungur
                            </div>
                            <div class="job lang" key="TEAM_09">
                                <?php print_r($language[$active_language]['TEAM_09']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/dragos-ungur-2b008926/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.1s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/05.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Cristian Zlatea
                            </div>
                            <div class="job lang" key="TEAM_09">
                                <?php print_r($language[$active_language]['TEAM_09']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Cristian Florin Zlatea
                            </div>
                            <div class="job lang" key="TEAM_09">
                                <?php print_r($language[$active_language]['TEAM_09']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/czlatea/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.2s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/04.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Valean Octavian
                            </div>
                            <div class="job lang" key="TEAM_10">
                                <?php print_r($language[$active_language]['TEAM_10']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Valean Octavian
                            </div>
                            <div class="job lang" key="TEAM_10">
                                <?php print_r($language[$active_language]['TEAM_10']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/valean-octavian-933101168/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.7s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/03.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Alex Barbulescu
                            </div>
                            <div class="job lang" key="TEAM_07">
                                <?php print_r($language[$active_language]['TEAM_07']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Alex Bărbulescu
                            </div>
                            <div class="job lang" key="TEAM_07">
                                <?php print_r($language[$active_language]['TEAM_07']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/alex-barbulescu-78b46a1b/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/Alex_TNT" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Twitter icon</title>
                                        <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row small_space justify-content-center">

                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.4s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/08.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Adina Suciu
                            </div>
                            <div class="job lang" key="TEAM_13">
                                <?php print_r($language[$active_language]['TEAM_13']); ?>
                            </div>
                        </div>
                        <div class="info-bottom">
                            <div class="name">
                                Adina Suciu
                            </div>
                            <div class="job lang" key="TEAM_13">
                                <?php print_r($language[$active_language]['TEAM_13']); ?>
                            </div>
                            <p></p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/adinasuciu/" target="_blank">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn icon</title>
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.3s">
                    <div class="team-item">
                        <div class="hover-back"></div>
                        <img class="img-fluid" src="assets/images/team/09.jpg" alt="Team Member">
                        <div class="info-top">
                            <div class="name">
                                Kiraly Tamas
                            </div>
                            <div class="job lang" key="TEAM_11"">
                                <?php print_r($language[$active_language]['TEAM_11']); ?>
                            </div>
                        </div>
                        <div class=" info-bottom">
                                <div class="name">
                                    Kiraly Tamas
                                </div>
                                <div class="job lang" key="TEAM_11">
                                    <?php print_r($language[$active_language]['TEAM_11']); ?>
                                </div>
                                <p></p>
                                <div class="social">
                                    <a href="" target="_blank">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>LinkedIn icon</title>
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.6s">
                        <div class="team-item">
                            <div class="hover-back"></div>
                            <img class="img-fluid" src="assets/images/team/13.jpg" alt="Team Member">
                            <div class="info-top">
                                <div class="name">
                                    Mircea Dima
                                </div>
                                <div class="job lang" key="TEAM_14">
                                    <?php print_r($language[$active_language]['TEAM_14']); ?>
                                </div>
                            </div>
                            <div class="info-bottom">
                                <div class="name">
                                    Mircea Dima
                                </div>
                                <div class="job lang" key="TEAM_14">
                                    <?php print_r($language[$active_language]['TEAM_14']); ?>
                                </div>
                                <p></p>
                                <div class="social">
                                    <a href="http://www.linkedin.com/in/mircead" target="_blank">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>LinkedIn icon</title>
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.5s">
                        <div class="team-item">
                            <div class="hover-back"></div>
                            <img class="img-fluid" src="assets/images/team/06.jpg" alt="Team Member">
                            <div class="info-top">
                                <div class="name">
                                    Zarcher
                                </div>
                                <div class="job lang" key="TEAM_14">
                                    <?php print_r($language[$active_language]['TEAM_14']); ?>
                                </div>
                            </div>
                            <div class="info-bottom">
                                <div class="name">
                                    Zarcher
                                </div>
                                <div class="job lang" key="TEAM_14">
                                    <?php print_r($language[$active_language]['TEAM_14']); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br /><br /><br />
        <div class="angle_bottom"></div>
    </section>
    <!-- END SECTION TEAM -->

    <!-- FAQ -->
    <section id="faq" class="blue_lr">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_default_light title_border text-center">
                        <h4 class="lang" key="FAQ_01"><?php print_r($language[$active_language]['FAQ_01']); ?></h4>
                        <p class="lang" key="FAQ_02"><?php print_r($language[$active_language]['FAQ_02']); ?></p><br />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="accordion1" class="faq_content2">
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <div class="card-header" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <p class="lang inline language" key="FAQ_03"><?php print_r($language[$active_language]['FAQ_03']); ?></p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                                        <div class="card-body lang" key="FAQ_04"><?php print_r($language[$active_language]['FAQ_04']); ?></div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <div class="card-header" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <p class="lang inline language" key="FAQ_05"><?php print_r($language[$active_language]['FAQ_05']); ?></p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                                        <div class="card-body">
                                            <p class="lang language" key="FAQ_06"><?php print_r($language[$active_language]['FAQ_06']); ?></p>
                                            <p class="lang language" key="FAQ_07"><?php print_r($language[$active_language]['FAQ_07']); ?>.</p>
                                            <p class="lang language" key="FAQ_08"><?php print_r($language[$active_language]['FAQ_08']); ?></p>
                                            <p class="lang language" key="FAQ_09"><?php print_r($language[$active_language]['FAQ_09']); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                    <div class="card-header" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <p class="lang inline language" key="FAQ_10"><?php print_r($language[$active_language]['FAQ_10']); ?></p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                                        <div class="card-body">
                                            <p class="lang language" key="FAQ_11"><?php print_r($language[$active_language]['FAQ_11']); ?>.</p>
                                            <p class="lang language" key="FAQ_12"><?php print_r($language[$active_language]['FAQ_12']); ?></p>
                                            <p class="lang language" key="FAQ_13"><?php print_r($language[$active_language]['FAQ_13']); ?></p>
                                            <p class="lang language" key="FAQ_14"><?php print_r($language[$active_language]['FAQ_14']); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                    <div class="card-header" id="headingFour">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <p class="lang inline language" key="FAQ_15"><?php print_r($language[$active_language]['FAQ_15']); ?></p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                                        <div class="card-body lang" key="FAQ_16"><?php print_r($language[$active_language]['FAQ_16']); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="accordion2" class="faq_content2">
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <div class="card-header" id="headingSix">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <p class="lang inline language" key="FAQ_17"><?php print_r($language[$active_language]['FAQ_17']); ?></p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                        <div class="card-body">
                                            <p class="lang language" key="FAQ_18"><?php print_r($language[$active_language]['FAQ_18']); ?></p>
                                            <p class="lang language" key="FAQ_19"><?php print_r($language[$active_language]['FAQ_19']); ?></p>
                                            <p class="lang language" key="FAQ_20"><?php print_r($language[$active_language]['FAQ_20']); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <div class="card-header" id="headingSix">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <p class="lang inline language" key="FAQ_21"><?php print_r($language[$active_language]['FAQ_21']); ?></p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                        <div class="card-body">
                                            <p class="lang language" key="FAQ_22"><?php print_r($language[$active_language]['FAQ_22']); ?>.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                    <div class="card-header" id="headingSeven">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                <p class="lang inline language" key="FAQ_23"><?php print_r($language[$active_language]['FAQ_23']); ?></p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                                        <div class="card-body lang" key="FAQ_24"><?php print_r($language[$active_language]['FAQ_24']); ?></div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                    <div class="card-header" id="headingEight">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                <p class="lang inline language" key="FAQ_25"><?php print_r($language[$active_language]['FAQ_25']); ?></p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                        <div class="card-body lang" key="FAQ_26"><?php print_r($language[$active_language]['FAQ_26']); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FAQ -->

    <!-- FOOTER -->
    <footer>
        <div class="top_footer bg_blue_dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="footer_logo mb-3">
                            <a href="#home_section" class="page-scroll">
                                <img alt="logo" src="assets/images/logo.png">
                            </a>
                        </div>
                        <div class="footer_desc">
                            <p class="lang" key="FOOTER_01"><?php print_r($language[$active_language]['FOOTER_01']); ?></p>
                            <p class="lang" key="FOOTER_02"><?php print_r($language[$active_language]['FOOTER_02']); ?></p>
                            <br />
                            <p class="lang" key="FOOTER_03"><a href="#"><?php print_r($language[$active_language]['FOOTER_03']); ?></a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 res_md_mt_30 res_sm_mt_20">
                        <h4 class="footer_title border_title lang" key="FOOTER_04"><?php print_r($language[$active_language]['FOOTER_04']); ?></h4><br />
                        <ul class="footer_link list_arrow">

                            <li>
                                <a class="page-scroll lang" href="https://www.facebook.com/Migrantcoin-2336469606669909" target="_blank"><i class="fab fa-facebook"></i> &nbsp; Facebook</a>
                            </li>
                            <li>
                                <a class="page-scroll lang" href="https://t.me/migrantcoin" target="_blank"><i class="fab fa-telegram-plane"></i> &nbsp; Telegram</a>
                            </li>
                            <li>
                                <a class="page-scroll lang" href="https://medium.com/@Migrantcoin" target="_blank"><i class="fab fa-medium-m"></i> &nbsp; Medium</a>
                            </li>
                            <li>
                                <a class="page-scroll lang" href="https://twitter.com/MigrantcoinO" target="_blank"><i class="fab fa-twitter"></i> &nbsp; Twitter</a>
                            </li>
                            <li>
                                <a class="page-scroll lang" href="https://www.instagram.com/migrantcoin/" target="_blank"><i class="fab fa-instagram"></i> &nbsp; Instagram</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-6 res_md_mt_30 res_sm_mt_20">
                        <div class="newsletter_form">
                            <h4 class="footer_title border_title lang" key="FOOTER_10"><?php print_r($language[$active_language]['FOOTER_10']); ?></h4> <br />
                            <p class="lang" key="FOOTER_11"><?php print_r($language[$active_language]['FOOTER_11']); ?></p><br />


                            <!-- <form class="subscribe_form" action="https://migrantcoin.us18.list-manage.com/subscribe/post?u=d5f6a9e61425f4e4d98ddc8d0&amp;id=38f1c78ace" method="post" target="_blank" novalidat>
                                <input class="input-rounded" type="text" required placeholder="Enter Email Address" />
                                <button type="submit" title="Subscribe" class="btn-info" name="submit" value="Submit">
                                    <p class="lang" key="FOOTER_12"></p>
                                </button>
                            </form> -->


                            <form id="mc-form" class="subscribe_form">
                                <input id="mc-email" type="email" placeholder="email" class="input-rounded">
                                <label for="mc-email" class="valid lang">By clicking subscribe you agree on our GDPR, (<a href="./GDPR.pdf" class="yellow">for more info</a>)
                                </label>
                                <input type="hidden" name="action" value="0" />
                                <button type="submit" class="btn-info">
                                    <p class="lang" key="FOOTER_12"><?php print_r($language[$active_language]['FOOTER_12']); ?></p>
                                </button>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="language">MigrantCoin &copy; <a class="class=" copyright lang" key="FOOTER_13"><?php print_r($language[$active_language]['FOOTER_13']); ?></a></p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list_none footer_menu">
                            <li class="lang language" key="FOOTER_14"><a href=" #"><?php print_r($language[$active_language]['FOOTER_14']); ?>y</a></li>
                            <li class="lang language" key="FOOTER_15"><a href="#"><?php print_r($language[$active_language]['FOOTER_15']); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- END FOOTER -->
    <a href="#" class="scrollup btn-default"><i class="ion-ios-arrow-up"></i></a>
    <!-- Latest jQuery -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- translation js  -->
    <script src="assets/js/language.js?version=<?= time() ?>"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="assets/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- particles min js  -->
    <script src="assets/js/particles.min.js"></script>
    <!-- scripts js -->
    <script src="assets/js/jquery.dd.min.js"></script>
    <!-- jquery.counterup.min js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/spop.min.js"></script>
    <!-- chart js  -->
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/Chart.PieceLabel.min.js"></script>
    <script src="assets/js/chart_script.js?version=<?= time() ?>"></script>
    <!-- scripts js -->
    <script src="assets/js/scripts.js?version=<?= time() ?>"></script>

    <script src="assets/js/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function() {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#1D3BB7"
                    },
                    "button": {
                        "background": "transparent",
                        "text": "#ffffff",
                        "border": "#FF7000"
                    }
                }
            })
        });
    </script>

    <!-- Mailchimp Signup Form -->
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script src="assets/js/jquery.ajaxchimp.js"></script>

    <script type='text/javascript'>
        $('#mc-form').ajaxChimp({
            url: 'https://migrantcoin.us18.list-manage.com/subscribe/post?u=d5f6a9e61425f4e4d98ddc8d0&amp;id=38f1c78ace'
        });

        (function($) {
            window.fnames = new Array();
            window.ftypes = new Array();
            fnames[0] = 'EMAIL';
            ftypes[0] = 'email';
        }(jQuery));
        var $mcj = jQuery.noConflict(true);
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123257907-1%22%3E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-123257907-1');
    </script>

</body>

</html>