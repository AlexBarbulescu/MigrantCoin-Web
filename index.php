<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MigrantCoin - A platform on the Stellar blockchain" />
    <!-- SITE TITLE -->
    <title>MigrantCoin</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png?version=2>
    <!-- Animation CSS -->
    
    <link rel=" stylesheet" href="assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Font Awesome CSS 
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" >-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- ionicons CSS -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/spop.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css?version=<?= time() ?>">
    <link rel="stylesheet" href="assets/css/responsive.css?version=<?= time() ?>">
    <!-- Map CSS -->
    <link rel="stylesheet" href="assets/css/map.css?version=<?= time() ?>">
    <!-- Team CSS -->
    <link rel="stylesheet" href="assets/css/team.css?version=<?= time() ?>">
    <!-- MigrantCoin CSS -->
    <link rel="stylesheet" href="assets/css/migrantcoin.css?version=<?= time() ?>">
    <link rel="stylesheet" href="assets/color/migrantcoin.css?version=<?= time() ?>">
    <link rel="stylesheet" href="assets/player/mediaelementplayer.min.css">
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
                <a class="navbar-brand page-scroll animation" href="#home_section" data-animation="fadeInDown" data-animation-delay="2s">
                    <img class="logo_light" src="assets/images/logo-white.png" alt="logo" />
                </a>
                <button class="navbar-toggler animation" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-animation="fadeInDown" data-animation-delay="0.1s">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.1s">
                            <a class="nav-link page-scroll nav_item lang" key="HOME" href="#home_section">Home</a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.2s">
                            <a class="nav-link page-scroll nav_item lang" key="HOWITWORKS" href="#how-it-works">How it works</a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.3s">
                            <a class="nav-link page-scroll nav_item lang" key="VISION" href="#vision">Vision</a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.4s">
                            <a class="nav-link page-scroll nav_item lang" key="TOKEN" href="#token">Token</a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.5s">
                            <a class="nav-link page-scroll nav_item lang" key="ROADMAP" href="#roadmap">Roadmap</a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.6s">
                            <a class="nav-link page-scroll nav_item lang" key="MISSION" href="#mission">Mission</a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.7s">
                            <a class="nav-link page-scroll nav_item lang" key="VALUES" href="#values">Values</a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.8s">
                            <a class="nav-link page-scroll nav_item lang" key="TEAM" href="#team">Team</a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.9s">
                            <a class="nav-link page-scroll nav_item lang" key="FAQ" href="#faq">FAQ</a>
                        </li>

                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.10s">&nbsp;</li>

                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.11s">
                            <a class="nav-icon nav_icon nav_item" href="https://t.me/migrantcoin" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.12s">
                            <a class="nav-icon nav_icon nav_item" href="https://medium.com/@Migrantcoin" target="_blank"><i class="fab fa-medium-m"></i></a>
                        </li>
                        <li class="animation" data-animation="fadeInDown" data-animation-delay="2.13s">
                            <a class="nav-icon nav_icon nav_item" href="https://twitter.com/MigrantcoinO" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon lang language" key="LANG"> EN</span></a>
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
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 order-lg-first">
                    <div class="banner_text text_md_center">
                        <h1 class="animation lang" key="TOP_01" data-animation="fadeInUp" data-animation-delay="0.1s">MigrantCoin delivers money to your home</h1>
                        <p class="animation mb-0 lang" key="TOP_02" data-animation="fadeInUp" data-animation-delay="0.3s">Blockchain-based decentralized money transfer powered by users.</p>
                        <p class="animation lang" key="TOP_03" data-animation="fadeInUp" data-animation-delay="0.4s">Possibility to send money home straight from your virtual wallet.</p><br />
                        <div class="btn_group animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <a href="MIGRANTCOIN_Whitepaper.pdf" target="_blank" class="btn btn-border-white btn-radius lang" key="TOP_04">Whitepaper</i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 order-first">
                    <div class="banner_image_right res_md_mb_50 res_xs_mb_20 animation" data-animation-delay="0.5s" data-animation="fadeInRight">
                        <video src="assets/videos/about.mp4" class="mejs__player" width="555" height="312" type="video/mp4"></video>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="divider small_divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_inner">
                        <div class="mgc_blue_bg banner_token text-center animation" data-animation="fadeIn" data-animation-delay="0.1s">
                            <div class="tk_counter_inner p-0 mw-100 d-lg-flex align-items-center">
                                <div class="token_col">
                                    <div class="tk_countdown_time border-0 p-0 counter_medium animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-time="2019/06/01 00:00:00"></div>
                                </div>
                                <div class="progress_col">
                                    <div class="progress animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                                        <div class="progress-bar progress-bar-striped gradient" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width:46%"> 46% </div>
                                        <span class="progress_label bg-white" style="left: 30%"> <strong> 46,000 BCC </strong></span>
                                        <span class="progress_label bg-white" style="left: 75%"> <strong> 90,000 BCC </strong></span>
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
            </div>
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
                        <h4 class="animation lang" key="HOWITWORKS_01" data-animation="fadeInUp" data-animation-delay="0.2s">How It works</h4>
                    </div>

                    <p class="animation" data-animation="fadeInUp" data-animation-delay="1s">
                        <img class="sedr_big" src="assets/images/SEDR01.png">
                        <img class="sedr_small" src="assets/images/SEDR02.png">
                    </p>

                    <div class="title_blue_dark title_border text-center">
                        <span class="font-weight-bold lang lang-width" key="HOWITWORKS_02">FASTER THAN EVER BEFORE, STRAIGHT TO THE RECIPIENT’S DOORSTEP.</span>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="1s">
                            <p class="lang lang-width" key="HOWITWORKS_03">By using blockchain and the Stellar platform, remittances take a few minutes to reach their destination.</p>
                            <p class="lang lang-width" key="HOWITWORKS_04">The user only needs to sign in, deposit the amount he or she wants to send and choose the way to deliver it.</p>
                            <p class="lang lang-width" key="HOWITWORKS_05">The sender may opt for a bank account transfer, delivery to the door or for a paypoint via which the money can reach the beneficiary.</p><br />

                            <p class="lang lang-width" key="HOWITWORKS_06">It takes a few simple steps:</p>
                            <p class="lang lang-width" key="HOWITWORKS_07">1. Download the MigrantCoin app.</p>
                            <p class="lang lang-width" key="HOWITWORKS_08">2. Sign up to create an account.</p>
                            <p class="lang lang-width" key="HOWITWORKS_09">3. Choose between a paypoint and a bank account (sender’s discretion) to purchase MGC.</p>
                            <p class="lang lang-width" key="HOWITWORKS_10">4. Send the money.</p><br />

                            <p class="lang lang-width" key="HOWITWORKS_11">MigrantCoin will then process quickly the transaction and deliver the money to the beneficiary in person, by courier.</p>
                            <p class="lang lang-width" key="HOWITWORKS_12">The beneficiary will acknowledge the receipt of the money with an electronic signature.</p>
                            <p class="lang lang-width" key="HOWITWORKS_13">Lastly, the sender will receive in the app a confirmation that the money was delivered successfully.</p>
                        </p>
                        </p>
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
        <div class="o-purchased-tokens d-flex align-items-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            <div class="container">
                <span class="sparks spark-1 ripple-out"></span>
                <span class="sparks spark-2 ripple-out"></span>
                <span class="sparks spark-3 ripple-out"></span>
                <span class="sparks spark-4 ripple-out"></span>
                <span class="sparks spark-5 ripple-out"></span>
                <span class="sparks spark-6 ripple-out"></span>
                <div class="box-text text-center wow fadeIn">
                    <p class="map-textbig lang" key="MAP_01">258 Millions of migrants</p>
                    <p class="map-textsmall lang" key="MAP_02">Spens 128 days on commuting in their lifetime to send money to their relatives</p>
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
                        <h4 class="animation lang" key="VISION_01" data-animation="fadeInUp" data-animation-delay="0.2s">Vision</h4>
                        <p class="animation lang" key="VISION_02" data-animation="fadeInUp" data-animation-delay="0.4s">Spending money is easy, sending them should be the same</p> <br />
                        <p class="animation lang lang-width" key="VISION_03 VISION_04" data-animation="fadeInUp" data-animation-delay="0.6s">Aiming for a shift in the core structure of our money remittance systems, we also seek a change in the way we engage and commit to one another.</p>
                        <p class="lang lang-width" key="VISION_04">As we stride towards the comprehensive use of blockchain technology, new prospects of establishing sustainable communities arise.</p>
                        <p class="lang lang-width" key="VISION_05">MigrantCoin is such an opportunity, tying the senders and receivers more reliably, owing to the very ease attached to the whole remittance process.</p> <br />
                        <p class="animation lang lang-width" key="VISION_06" data-animation="fadeInUp" data-animation-delay="0.2s">In other words, we aim for a revolution.</p>
                        <p class="lang lang-width" key="VISION_07">In the end, the future belongs to those who are able to challenge the state-of-things, to believe that they can do more and be better than they are right now.</p>
                        <p class="lang lang-width" key="VISION_08">(Im)migrants do just that: they strive for improvement and hope and dream for a more serene future.</p> <br />
                        <p class="animation lang lang-width" key="VISION_09" data-animation="fadeInUp" data-animation-delay="0.4s">We see ourselves moving forward towards the same ideals and making MigrantCoin available at a large scale, to any migrant who wants to use it.</p>
                        <p class="lang lang-width" key="VISION_10">This will mean the opportunity to obtain easy access (that would be otherwise very difficult) to user-friendly and secure remittance mechanisms.</p>
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
                        <h4 class="animation lang" key="TOKEN_01" data-animation="fadeInUp" data-animation-delay="0.2s">Token allocation</h4>
                        <p class="animation lang" key="TOKEN_02" data-animation="fadeInUp" data-animation-delay="0.4s">A fixed number of tokens will be created for token sale. There will be no more tokens generated after that.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-12">
                    <div class="token_chart res_md_mb_30 res_sm_mb_20 text-center animation" data-animation="fadeInRight" data-animation-delay="1.5s">
                        <canvas id="token_sale"></canvas>
                        <div class="chart_icon">
                            <img src="assets/images/logo-chart.png" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="list_none chart_list animation" data-animation="fadeInLeft" data-animation-delay="1.5s">
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_03">Founder & Team - 200.000.000</p>
                            </h6>
                            <div class="progress bg-orange">
                                <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_04">Advisors - 100.000.000</p>
                            </h6>
                            <div class="progress bg-green">
                                <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_05">Marketing - 300.000.000</p>
                            </h6>
                            <div class="progress bg-red">
                                <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_06">Partnerships - 100.000.000</p>
                            </h6>
                            <div class="progress bg-blue">
                                <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_07">Crowdsale - 1.300.000.000</p>
                            </h6>
                            <div class="progress bg-purple">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_blue_dark title_border text-center">
                        <h4 class="animation lang" key="TOKEN_08" data-animation="fadeInUp" data-animation-delay="0.2s">Funds distribution</h4>
                        <p class="animation lang" key="TOKEN_09" data-animation="fadeInUp" data-animation-delay="0.4s">It is also possible to have a static supply with a dynamic funding goal, in which the distribution of tokens will be made according to the funds received</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center flex-row-reverse">
                <div class="col-lg-7 col-md-12">
                    <div class="token_chart res_md_mb_30 res_sm_mb_20 text-center animation" data-animation="fadeInRight" data-animation-delay="1.5s">
                        <canvas id="token_dist"></canvas>
                        <div class="chart_icon">
                            <img src="assets/images/logo-chart.png" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="list_none chart_list animation" data-animation="fadeInLeft" data-animation-delay="1.5s">
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_10">R & D - 4.231.966</p>
                            </h6>
                            <div class="progress bg-orange">
                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_11">Marketing - 2.115.983</p>
                            </h6>
                            <div class="progress bg-green">
                                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_12">Ops - 3.702.971</p>
                            </h6>
                            <div class="progress bg-red">
                                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_13">Legal - 211.598</p>
                            </h6>
                            <div class="progress bg-blue">
                                <div class="progress-bar" role="progressbar" style="width: 2%;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100">2%</div>
                            </div>
                        </li>
                        <li>
                            <h6>
                                <p class="lang" key="TOKEN_14">Licensing - 317.397</p>
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
                        <h4 class="animation lang" key="ROADMAP_01" data-animation="fadeInUp" data-animation-delay="0.2s">Roadmap</h4>
                        <p class="animation lang" key="ROADMAP_02" data-animation="fadeInUp" data-animation-delay="0.4s">Our journey has just began</p>
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
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q2 2019</h6>
                                    <p class="animation lang" key="ROADMAP_03" data-animation="fadeInUp" data-animation-delay="0.4s">Token creation</p>
                                    <p class="animation lang" key="ROADMAP_04" data-animation="fadeInUp" data-animation-delay="0.4s">Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="roadmap_box">
                                <div class="roadmap_inner">
                                    <div class="sk-folding-cube mask">
                                        <div class="spinner_square"></div>
                                        <div class="sk-cube1 sk-cube"></div>
                                        <div class="sk-cube2 sk-cube"></div>
                                        <div class="sk-cube4 sk-cube"></div>
                                        <div class="sk-cube3 sk-cube"></div>
                                    </div>
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Q3 2019</h6>
                                    <p class="animation lang" key="ROADMAP_05" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        Alpha version of the platform released
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
                                        Testing Alpha version with Alpha customers and delivery businesses and banks
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
                                        Mobile Phone app released
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
                                    <p class="animation lang" key="ROADMAP_08" data-animation="fadeInUp" data-animation-delay="0.4s">Beta version of the platform released</p>
                                    <p class="animation lang" key="ROADMAP_09" data-animation="fadeInUp" data-animation-delay="0.4s">Testing beta version</p>
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
                                        Relase version 1 of platform (web and mobile)
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
                                        Platform fully functional in Romania
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
                                    <p class="animation lang" key="ROADMAP_12" data-animation="fadeInUp" data-animation-delay="0.4s">Compliance implementation</p>
                                    <p class="animation lang" key="ROADMAP_13" data-animation="fadeInUp" data-animation-delay="0.4s">Infrastructure setup</p>
                                    <p class="animation lang" key="ROADMAP_14" data-animation="fadeInUp" data-animation-delay="0.4s">Security implementation</p>
                                    <p class="animation lang" key="ROADMAP_15" data-animation="fadeInUp" data-animation-delay="0.4s">Security enforcement: penetration test by independent specialists</p>
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
                                    <p class="animation lang" key="ROADMAP_16" data-animation="fadeInUp" data-animation-delay="0.4s">Money transfer licence UK - (6-12 months)</p>
                                    <p class="animation lang" key="ROADMAP_17" data-animation="fadeInUp" data-animation-delay="0.4s">Public support – Call Center</p>
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
                                    <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">2021</h6>
                                    <p class="animation lang" key="ROADMAP_18" data-animation="fadeInUp" data-animation-delay="0.4s">Extend to other Countries,</p>
                                    <p class="animation lang" key="ROADMAP_19" data-animation="fadeInUp" data-animation-delay="0.4s">beside the initial 6 initially planned.</p>
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
                        <h4 class="animation lang" key="MISSION_01" data-animation="fadeInUp" data-animation-delay="0.2s">Mission</h4>
                        <p class="animation lang" key="MISSION_02" data-animation="fadeInUp" data-animation-delay="0.4s">To allow migrants who want to send money to a recipient in their country of origin through blockchain.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <i class="fas fa-user-clock"></i>
                        <h4 class="lang" key="MISSION_03">Time saving</h4>
                        <p class="lang" key="MISSION_04">Time is money and so much more, and we urge you to keep this in mind.</p>
                        <p class="lang" key="MISSION_05">A decentralized cryptocurrency remittance system will help people save precious hours they would otherwise waste on trips to the nearest bank or MTO.</p>
                        <p class="lang" key="MISSION_06">Our solution will enable you to avoid commuting just for the sake of sending and receiving money.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-shield-alt"></i>
                        <h4 class="lang" key="MISSION_07">Fully Secured</h4>
                        <p class="lang" key="MISSION_08">The world we envisage is one in which people have undeterred, steady access to the methods by which they can send and receive money and in which they can feel the money they send/pick up is safe.</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-12">
                    <div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
                        <i class="fas fa-user-shield"></i>
                        <h4 class="lang" key="MISSION_09">Risk free</h4>
                        <p class="lang" key="MISSION_10">Many receive money via occasional delivering parties, which raises the risk of losing it.</p>
                        <p class="lang" key="MISSION_11">Even worse, the money may never reach its intended destination.</p>
                        <p class="lang" key="MISSION_12">MigrantCoin seeks to eliminate this risk, by its user-powered structure allowing the detection of any potential error in the process of sending and receiving a specific sum of money, owing to the ensuing transparency and security of the system.</p>
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
                        <h4 class="animation lang" key="VALUES_01" data-animation="fadeInUp" data-animation-delay="0.2s">Values</h4>
                        <p class="animation lang" key="VALUES_02" data-animation="fadeInUp" data-animation-delay="0.4s">For more detail, click on each item.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value1" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <i class="fas fa-lightbulb"></i>
                        <span class="btn_text lang" key="VALUES_03">We embrace change and innovation</span>
                    </button>
                    <div id="value1" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_04">Change and innovation are needed if we want to advance. MigrantCoin looks at the money remittance market and finds that there is considerable room for improvement.</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value2" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-heart"></i>
                        <span class="btn_text">
                            <p class="lang" key="VALUES_05">We value</p>
                            <p class="lang" key="VALUES_06">people</p>
                        </span>
                    </button>
                    <div id="value2" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_07">Our concept is being developed for migrants and those at home alike. We believe that our appreciation of the people will draw, in time, their appreciation of our efforts. Without people, there would be no point to our struggle.</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value3" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-chess"></i>
                        <span class="btn_text lang" key="VALUES_08">We like to think differently</span>
                    </button>
                    <div id="value3" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_09">Following a careful analysis of the remittance market, we concluded that, in general, the solutions offered to the problems of this market are rather similar. MigrantCoin seeks to implement unique solutions to these issues and we believe that we can make a difference.</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value4" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-eye"></i>
                        <span class="btn_text">
                            <p class="lang" key="VALUES_10">We value</p>
                            <p class="lang" key="VALUES_11">transparency</p>
                        </span>
                    </button>
                    <div id="value4" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_12">We believe that transparency in relation to the investors and to our community is very important. We propose that all the amounts of money gathered in the ICO should be justified and we shall do our best to fulfill our commitments.</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value5" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-tasks"></i>
                        <span class="btn_text lang" key="VALUES_13">We identify needs and satisfy them</span>
                    </button>
                    <div id="value5" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_14">The MigrantCoin project is, first of all, the result of the desire to solve some of the needs of a specific category of people ((im)migrants) and, thus, to make their lives easier.</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value6" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-handshake"></i>
                        <span class="btn_text lang" key="VALUES_15">We offer guarantees and trust</span>
                    </button>
                    <div id="value6" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_16">Our main concern is to guarantee the amounts of money entrusted to us for their delivery to the destination indicated by the client. Your trust is our success – and we aim for success.</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value7" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-rocket"></i>
                        <span class="btn_text lang" key="VALUES_17">We keep an eye on the future</span>
                    </button>
                    <div id="value7" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_18">Conventional payment and money transfer systems cannot keep the pace with the human kind’s desire of quick and constant evolution. We are the result of the technological revolution and it is our duty to offer to the future generations the tools required for the same remittance of money, anywhere in the world, fast and risk-free.</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <button data-toggle="collapse" data-target="#value8" class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <i class="fas fa-hands-helping"></i>
                        <span class="btn_text lang" key="VALUES_19">We are open for partnerships</span>
                    </button>
                    <div id="value8" class="collapse btn_collapse">
                        <span class="btn_textsmall lang" key="VALUES_20">MigrantCoin is a project aiming to make its services available across the world. This is a very difficult and complex process we alone cannot complete. For this reason, you will be happy to know that, in the countries where we will offer our services, you too can become our partner.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END VALUES -->

    <!-- START SECTION TEAM -->
    <section class="about_shape_bg">
        <div class="angle_top"></div>
        <br id="team"><br /><br />
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_default_dark title_border text-center">
                        <h4 class="animation lang" key="TEAM_01" data-animation="fadeInUp" data-animation-delay="0.2s">A Small Team Having a Vast Experience</h4>
                        <p class="animation lang" key="TEAM_02" data-animation="fadeInUp" data-animation-delay="0.4s">Our extraordinary team, ready to achieve high results.</p>
                    </div>
                </div>
            </div>
            <div class="row small_space justify-content-center">
                <div class="row no-gutters">
                    <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1s">
                        <div class="team-item">
                            <div class="info-top">
                                <div class="name">
                                    Abel Dragomir
                                </div>
                                <div class="job lang" key="TEAM_03">
                                    Community Manager
                                </div>
                            </div>
                            <div class="hover-back"></div>
                            <img class="img-fluid" src="assets/images/team/01.png" alt="">
                            <div class="info-bottom">
                                <div class="name">
                                    Abel Dragomir
                                </div>
                                <div class="job lang" key="TEAM_03">
                                    Community Manager
                                </div>
                                <p>Insert text here.</p>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/abeldragomir/">
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
                            <img class="img-fluid" src="assets/images/team/02.png" alt="">
                            <div class="info-top">
                                <div class="name">
                                    Krall Mazilu Ion
                                </div>
                                <div class="job lang" key="TEAM_04">
                                    Legal Adviser
                                </div>
                            </div>
                            <div class="info-bottom">
                                <div class="name">
                                    Krall Mazilu Ion
                                </div>
                                <div class="job lang" key="TEAM_04">
                                    Legal Adviser
                                </div>
                                <p>Insert text here</p>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/ion-mazilu-krall-51291972">
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
                            <img class="img-fluid" src="assets/images/team/03.png" alt="">
                            <div class="info-top">
                                <div class="name">
                                    Alex Barbulescu
                                </div>
                                <div class="job lang" key="TEAM_05">
                                    Graphic Designer
                                </div>
                            </div>
                            <div class="info-bottom">
                                <div class="name">
                                    Alex Barbulescu
                                </div>
                                <div class="job lang" key="TEAM_05">
                                    Graphic Designer
                                </div>
                                <p>Insert text here</p>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/ion-mazilu-krall-51291972">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Twitter icon</title>
                                            <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.3s">
                        <div class="team-item">
                            <div class="hover-back"></div>
                            <img class="img-fluid" src="assets/images/team/4.png" alt="">
                            <div class="info-top">
                                <div class="name">
                                    William Cox
                                </div>
                                <div class="job">
                                    Software Development
                                </div>
                            </div>
                            <div class="info-bottom">
                                <div class="name">
                                    William Cox
                                </div>
                                <div class="job">
                                    Software Development
                                </div>
                                <p>William has long worked in the field of information technology. He is responsible for developing the platform and manages the creation of a mobile application and CRX Wallet.</p>
                                <div class="social">
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>LinkedIn icon</title>
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Facebook icon</title>
                                            <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.4s">
                        <div class="team-item">
                            <div class="hover-back"></div>
                            <img class="img-fluid" src="assets/images/team/5.png" alt="">
                            <div class="info-top">
                                <div class="name">
                                    Darren Leonard
                                </div>
                                <div class="job">
                                    Board Advisor
                                </div>
                            </div>
                            <div class="info-bottom">
                                <div class="name">
                                    Darren Leonard
                                </div>
                                <div class="job">
                                    Board Advisor
                                </div>
                                <p>Advisor to several large
                                    companies in Western Europe
                                    and the US
                                </p>
                                <div class="social">
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>LinkedIn icon</title>
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Facebook icon</title>
                                            <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.5s">
                        <div class="team-item">
                            <div class="hover-back"></div>
                            <img class="img-fluid" src="assets/images/team/6.png" alt="">
                            <div class="info-top">
                                <div class="name">
                                    Pauline Rose
                                </div>
                                <div class="job">
                                    Board Advisor
                                </div>
                            </div>
                            <div class="info-bottom">
                                <div class="name">
                                    Pauline Rose
                                </div>
                                <div class="job">
                                    Board Advisor
                                </div>
                                <p>Pauline manages a large number of crypto funds of large companies. It has been active since the beginning of the origin of crypto-currencies.</p>
                                <div class="social">
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>LinkedIn icon</title>
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Facebook icon</title>
                                            <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.6s">
                        <div class="team-item">
                            <div class="hover-back"></div>
                            <img class="img-fluid" src="assets/images/team/7.png" alt="">
                            <div class="info-top">
                                <div class="name">
                                    Robert Parks
                                </div>
                                <div class="job">
                                    Board Advisor
                                </div>
                            </div>
                            <div class="info-bottom">
                                <div class="name">
                                    Robert Parks
                                </div>
                                <div class="job">
                                    Board Advisor
                                </div>
                                <p>Robert graduated with honors from several prestigious US universities in the direction of Finance. Since 2010, he is a trusted advisor in 5 crypto-exchange markets.</p>
                                <div class="social">
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>LinkedIn icon</title>
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Facebook icon</title>
                                            <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-4 col-sm-4 animation" data-animation="fadeInDown" data-animation-delay="1.7s">
                        <div class="team-item">
                            <div class="hover-back"></div>
                            <img class="img-fluid" src="assets/images/team/8.png" alt="">
                            <div class="info-top">
                                <div class="name">
                                    Gilbert Carr
                                </div>
                                <div class="job">
                                    Board Advisor
                                </div>
                            </div>
                            <div class="info-bottom">
                                <div class="name">
                                    Gilbert Carr
                                </div>
                                <div class="job">
                                    Board Advisor
                                </div>
                                <p>More than 5 years, provides
                                    technology services for start-up
                                    companies around the world.
                                </p>
                                <div class="social">
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>LinkedIn icon</title>
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Facebook icon</title>
                                            <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"></path>
                                        </svg>
                                    </a>
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
                        <h4 class="animation lang" key="FAQ_01" data-animation="fadeInUp" data-animation-delay="0.2s">Have Any Questions?</h4>
                        <p class="animation lang" key="FAQ_02" data-animation="fadeInUp" data-animation-delay="0.4s">Frequently asked questions (FAQ) or Questions and Answers (Q&A), are listed questions and answers, all supposed to be commonly asked in some context</p><br />
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
                                                <p class="lang inline language" key="FAQ_03">What is Migrantcoin?</p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                                        <div class="card-body lang" key="FAQ_04">A platform started on the Stellar blockchain, meant for international money transfer, through a currency of the same name. The Migrantcoin platform applies especially to the immigrants who want to send money toward a recipient in their country of origin.</div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <div class="card-header" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <p class="lang inline language" key="FAQ_05">Why is the Migrantcoin project unique?</p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                                        <div class="card-body">
                                            <p class="lang language" key="FAQ_06">- The transactions are reversible.</p>
                                            <p class="lang language" key="FAQ_07">- The guarantee of the amount in the case where the transaction is reversible.</p>
                                            <p class="lang language" key="FAQ_08">- The money which is sent reaches directly the recipient’s address.</p>
                                            <p class="lang language" key="FAQ_09">- The lowest taxes on the market OR We offer some of the lowest taxes on the market.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                    <div class="card-header" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <p class="lang inline language" key="FAQ_10">What are the benefits of Migrantcoin for customers?</p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                                        <div class="card-body">
                                            <p class="lang language" key="FAQ_11">- They can send money with just a few clicks.</p>
                                            <p class="lang language" key="FAQ_12">- Money which is sent reaches the receiver’s door.</p>
                                            <p class="lang language" key="FAQ_13">- The money transfer is a matter of seconds.</p>
                                            <p class="lang language" key="FAQ_14">- Bonuses for those who achieve a specific amount/value of the transactions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                    <div class="card-header" id="headingFour">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <p class="lang inline language" key="FAQ_15">Does Migrantcoin have a legal entity for its business?</p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                                        <div class="card-body lang" key="FAQ_16">Yes. Migrantcoin Ltd is an active company with the registered office located in Aldershot, Hampshire (UK). It can also be contacted via email at contact@migrantcoin.com.</div>
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
                                                <p class="lang inline language" key="FAQ_17">What problems does Migrantcoin seek to solve?</p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                        <div class="card-body">
                                            <p class="lang language" key="FAQ_18">- The high taxes applied in the case of international money transfers.</p>
                                            <p class="lang language" key="FAQ_19">- It will simplify the difficult process through which the money dispatched by a sender reaches the recipient. You will be able to send money in just a few clicks.</p>
                                            <p class="lang language" key="FAQ_20">- It will save a lot of time for customers, both for sender and receiver.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <div class="card-header" id="headingSix">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <p class="lang inline language" key="FAQ_21">How will Migrantcoin benefit holders?</p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                        <div class="card-body">
                                            <p class="lang language" key="FAQ_22">- We will offer a quarterly or annual bonus for staking.</p>
                                            <p class="lang language" key="FAQ_23"> - We are also considering other benefits for the holders, but we will disclose all these aspects at the right time.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                    <div class="card-header" id="headingSeven">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                <p class="lang inline language" key="FAQ_24">How is Migrantcoin legally compliant?</p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                                        <div class="card-body lang" key="FAQ_25">Migrantcoin platform will operate under the legislation of UK.</div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                    <div class="card-header" id="headingEight">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                <p class="lang inline language" key="FAQ_26">Will Migrantcoin be available worldwide?</p>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                        <div class="card-body lang" key="FAQ_27">First, the Migrantcoin will develop its services for Europe, thereafter, with the growth of the business, it will extend worldwide.</div>
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
                        <div class="footer_logo mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <a href="#home_section" class="page-scroll">
                                <img alt="logo" src="assets/images/logo.png">
                            </a>
                        </div>
                        <div class="footer_desc">
                            <p class="animation lang" key="FOOTER_01" data-animation="fadeInUp" data-animation-delay="0.4s">Migrantcoin Ltd</p>
                            <p class="animation lang" key="FOOTER_02" data-animation="fadeInUp" data-animation-delay="0.4s">2 Institute Road Aldershot, Institute Road, Aldershot, GU12 4DA, United Kingdom</p>
                            <br />
                            <p class="animation lang" key="FOOTER_03" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#">contact@migrantcoin.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 res_md_mt_30 res_sm_mt_20">
                        <h4 class="footer_title border_title animation lang" key="FOOTER_04" data-animation="fadeInUp" data-animation-delay="0.2s">Quick Links</h4><br />
                        <ul class="footer_link list_arrow">
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                <a class="page-scroll lang" key="FOOTER_05" href="#vision">Vision</a>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                                <a class="page-scroll lang" key="FOOTER_06" href="#token">Token</a>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                <a class="page-scroll lang" key="FOOTER_07" href="#roadmap">Roadmap</a>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                                <a class="page-scroll lang" key="FOOTER_08" href="#mission">Mission</a>
                            </li>
                            <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                <a class="page-scroll lang" key="FOOTER_09" href="#values">Values</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-6 res_md_mt_30 res_sm_mt_20">
                        <div class="newsletter_form">
                            <h4 class="footer_title border_title animation lang" key="FOOTER_10" data-animation="fadeInUp" data-animation-delay="0.2s">Newsletter</h4> <br />
                            <p class="animation lang" key="FOOTER_11" data-animation="fadeInUp" data-animation-delay="0.4s">Sign up for updates and market news. Subscribe to our newsletter and receive update about ICOs and crypto tips</p><br />
                            <form class="subscribe_form animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                <input class="input-rounded" type="text" required placeholder="Enter Email Address" />
                                <button type="submit" title="Subscribe" class="btn-info" name="submit" value="Submit">
                                    <p class="lang" key="FOOTER_12">Subscribe</p>
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
                        <p class="language">MigrantCoin &copy; <a class="class=" copyright lang" key="FOOTER_13">2019 All Rights Reserved.</a></p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list_none footer_menu">
                            <li class="lang language" key="FOOTER_14"><a href=" #">Privacy Policy</a></li>
                            <li class="lang language" key="FOOTER_15"><a href="#">Terms & Conditions</a></li>
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
    <script src="assets/player/mediaelement-and-player.min.js"></script>
    <script src="assets/js/scripts.js?version=<?= time() ?>"></script>
    <script src="assets/js/language.js?version=<?= time() ?>"></script>

</body>

</html>