<?php
//Start the session
    //Start the session

session_start();

$error = "";
//Access your POST variables
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Website Kings">
    <!-- description -->
    <meta name="description" content="Website-Kings - Der einfachste Weg zu deiner Website.">
    <!-- keywords -->
    <meta name="keywords" content="Website, Design, Content, Quality">
    <!-- Page Title -->
    <title>Website-Kings</title>
    <!-- Favicon -->
    <link href="assets/logo/black_crown_white_background.png" rel="icon">
    <!-- Bundle -->
    <link href="vendor/css/bundle.min.css" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="vendor/css/LineIcons.min.css" rel="stylesheet">
    <link href="vendor/css/revolution-settings.min.css" rel="stylesheet">
    <link href="vendor/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/css/cubeportfolio.min.css" rel="stylesheet">
    <link href="vendor/css/wow.css" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="digital-agency/css/slick.css" rel="stylesheet">
    <link href="digital-agency/css/slick-theme.css" rel="stylesheet">
    <link href="digital-agency/css/style.css" rel="stylesheet">

    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/d27b234240.js" crossorigin="anonymous"></script>

    <!-- Animate on Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--start loader-->
<div class="loader center-block">
    <div class="spinner">
        <div class="spinner-container container1">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <div class="spinner-container container2">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>

    </div>
</div>
<!--loader end-->


<header id="home">
    <div class="container">
        <div class="upper-nav">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <div class="contact-info">
                        <span></span>
                    </div>
                </div>
                <!--div class="col-6">
                    <div class="contact-social-icons d-flex justify-content-end align-items-center">
                        <ul class="upper-social-icons">
                            <li><a href="#" class="facebook-text-hvr"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter-text-hvr"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin-text-hvr"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="instagrams-text-hvr"><i class="lni lni-instagram-filled"></i></a></li>
                        </ul>
                    </div>
                </div-->
            </div>
        </div>
        <div class="main-nav">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand bg-dark" href="index-digital-agency.html"><img
                                src="assets/logo/crown_white.png"></a>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link wow fadeInUp scroll" href="#home">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInDown scroll1" href="#about-sec">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInUp scroll"
                                       href="#company-portfolio-section">PORTFOLIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInDown scroll" href="#testimonial-sec">CLIENTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInDown scroll" href="#testimonial-sec">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInUp scroll" href="#lastest-blog">PROJECTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInDown scroll" href="#contact-sec">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Side Menu Button-->
    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <i class="lni lni-menu"></i>
    </a>
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <a class="navbar-brand"><img src="assets/logo/crown_white.png" alt="logo"></a>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll1" href="#about-sec">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#company-portfolio-section">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#testimonial-sec">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#testimonial-sec">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#lastest-blog">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#contact-sec">Contact</a>
                    </li>
                </ul>
            </nav>

            <!--div class="side-footer text-white w-100 d-flex justify-content-center">
                <ul class="social-icons-simple">
                    <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a class="youtube-text-hvr" href="javascript:void(0)"><i class="fab fa-youtube"></i> </a> </li>
                    <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
            </div-->
        </div>
        <svg class="separator__svg" id="site-mmenu-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none"
             fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path d="M 100 100 V 10 L 0 100"/>
            <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
        </svg>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>


</header>

<div class="banner parallax">
    <div class="container-fluid">
        <div class="row banner-row">
            <div class="col-12 col-lg-7 d-flex justify-content-center justify-content-lg-end align-items-center text-center text-lg-right">
                <div class="banner-text-left wow fadeInLeft" data-depth="0.1">
                </div>
            </div>
            <div class="col-12 col-lg-5 d-flex align-items-center">
                <div class="banner-text-right wow fadeInRight" data-depth="0.1">
                    <div class="overlay-yellow-box"></div>
                    <div class="banner-right-area-content">
                        <h2>Website<span class="main-bold-text"> KINGS</span></h2>
                        <p style="opacity: 0">Wir setzen deine Wunsch-Website in Rekordzeit um. Und das ganz ohne
                            Probleme oder jegliche
                            Komplikationen.</p>
                        <p id="perks">Wir setzen deine Wunsch-Website in Rekordzeit um. Und das ganz ohne Probleme oder
                            jegliche
                            Komplikationen.</p>
                        <p id="perks2">Wir setzen deine Wunsch-Website in Rekordzeit um. Und das ganz ohne Probleme oder
                            jegliche
                            Komplikationen.</p>
                        <a href="#skill-sec" class="btn btn-large btn-rounded white-tran-black-btn scroll">Get
                            started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg id="banner_svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none"
         fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"/>
    </svg>
</div>

<section id="mission-sec">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 offset-lg-5 text-center text-lg-right">
                <div class="mission-statement">
                    <h2 class="title">Unsere Mission</h2>
                </div>
            </div>
            <div class="mission-content">
                <p>
                    <i>
                        "Webseite Kings – wir bauen Websites die funktionieren.<br>
                        Ohne Aufwand für Sie, zum fixen Preis, in klaren Paketen.<br>
                        Google optimiert, einfach zu warten und einfach großartig."
                    </i>
                </p>
                <i class="fas fa-quote-right"></i>
            </div>
        </div>
    </div>

</section>
<!--About Star-->
<section class="about-sec" id="about-sec">
    <svg id="about-header-svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none"
         fill="#39c5de" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100" fill="#39c5de"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#39c5de" stroke-width="0"/>
    </svg>
    <div class="container">
        <div class="row">
            <!-- Heading Area-->
            <div class="col-lg-5 wow fadeInUp">
                <div class="service-details">
                    <h1>WIR MACHEN</h1>
                    <h1><span>DEINE</span> WEBSITE</h1>
                    <p>Und das mit allem was dazugehört! Damit deine Website auch am Smartphone erreichbar ist und auf
                        Google die Nummer 1 unter den Suchergebnissen.</p>
                    <!--a href="javascript:void(0);" class="btn btn-large btn-rounded btn-black-white-background mr-2 mt-2">Learn More</a-->
                </div>
            </div>

            <!-- Features Box-->
            <div class="col-lg-7">
                <div class="services-area-width-manage">
                    <div class="row no-gutters services-area">
                        <div class="col-12 col-md-6 services text-center">
                            <div class="service-card wow fadeInRight">
                                <div class="icon-holder">
                                    <i class="fab fa-google"></i>
                                </div>
                                <h4 class="card-heading">Google optimiert</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 services text-center">
                            <div class="service-card wow fadeInRight">
                                <div class="icon-holder">
                                    <i class="far fa-money-bill-alt"></i>
                                </div>
                                <h4 class="card-heading">Fixe Preise</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 services text-center">
                            <div class="service-card wow fadeInRight" data-wow-delay=".5s">
                                <div class="icon-holder">
                                    <i class="fas fa-wrench"></i>
                                </div>
                                <h4 class="card-heading">Einfach zu warten</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 services text-center">
                            <div class="service-card wow fadeInRight" data-wow-delay=".5s">
                                <div class="icon-holder">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <h4 class="card-heading">Maximale Sicherheit</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <svg id="banner_svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none"
         fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"/>
        <img src="digital-agency/img/pot.png" class="wow slideInLeft" data-wow-delay="1s" alt="plant">
    </svg>
</section>
<!--About End-->

<!--Skill section start-->
<section class="skill-sec" id="skill-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 offset-lg-5 text-center text-lg-right skill-header">
                <div class="skill-details">
                    <!--h6 class="sub-title main-color">Lorem ipsum is simply dummy text</h6-->
                    <h2 class="title">So einfach geht's!</h2>
                    <p class="paragraph">In nur ein paar kleinen Schritten geht es zu deiner Homepage!</p>
                </div>
            </div>
            <div class="col-12">
                <div data-aos="fade-up-right" class="step-wrapper">
                    <div class="step">
                        <div>
                            <h4>Dein passendes Paket wählen</h4>
                            <p>Wenn Du gerne dazu beraten werden möchtest machen wir das sehr gerne (Link zum
                                Kontaktformular</p>
                            <h1 class="number">1</h1>
                        </div>
                        <div class="translatey50">
                            <i class="fas fa-check-square"></i>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up-left" class="step-wrapper">
                    <div class="step">
                        <div class="translatey502">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div>
                            <h4>Infos an uns</h4>
                            <p>Schicke uns alle Deine Wünsche, Inhalte, Texte, Bilder – alles was Du gerne auf
                                Deiner neuen Webseite ausdrücken, zeigen und erreichen möchtest – damit wir Dich
                                und Dein Business erfolgreich präsentieren können.</p>
                            <h1 class="number">2</h1>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up-right" class="step-wrapper">
                    <div class="step">
                        <div>
                            <h4>Start the Coding!</h4>
                            <p>Unsere erfahrenen Entwickler beginnen Deine neue Webseite zu programmieren, die
                                Texter geben Deinen Inhalten den letzten Schliff und die Grafik arbeitet an der
                                optischen Umsetzung</p>
                            <h1 class="number">3</h1>
                        </div>
                        <div class="translatey50">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up-left" class="step-wrapper">
                    <div class="step">
                        <div class="translatey502">
                            <i class="fas fa-laugh-beam"></i>
                        </div>
                        <div id="beratung">
                            <h4>Go live!</h4>
                            <p>Deine neue Webseite wird auf den Server übersiedelt und ist ab sofort unter Deiner
                                Wunschdomain abrufbar, ebenso wie Deine Mails – und Du bekommst eine
                                Einschulung von uns.</p>
                            <h1 class="number">4</h1>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in" class="beratung">
                    <h3>Hol dir dein kostenloses Beratungsgespräch!</h3>

                <?php
                    if(isset($_SESSION['error'])) {
                         $error = $_SESSION['error'];
                         if(!$error) {
                            echo '<div class="beratung-success"><i class="fas fa-check-circle"></i><p>Danke für deine Nachricht!</p></div>';
                         } else {
                            echo '<div class="beratung-error"><i class="fas fa-exclamation-circle"></i><p>Da hat wohl etwas nicht funktioniert! Kontaktiere uns bitte über die unten Angeführten Möglichkeiten!</p></div>';
                         }
                    } else {
                        echo '<form action="vendor/contact-mailer-beratung.php" method="post">
                            <input name="beratungmail" type="email" placeholder="Deine E-Mail" required>
                            <button type="submit">Senden</button>
                        </form>';
                    }
                ?>

                </div>


            </div>
        </div>
    </div>
</section>
<!-- Skill section start-->

<!--team section start-->
<section class="team-section" id="team-section">
    <svg class="separator__svg" id="team-header-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none"
         fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
    </svg>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="team-details pr-lg-5">
                    <h6 class="sub-title main-color">Ihre Website zum Fixpreis</h6>
                    <h2 class="title">Unsere Angebote</h2>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="card-container" data-aos="fade-up">
                    <div class="card text-center start">
                        <h2 class="card-header">Hero</h2>
                        <div class="card-content">
                            <p class="description">Ihr Unternehmen gehört zu den ganz Großen.</p>
                            <div class="price-container">
                                <p>Für nur</p>
                                <h3 class="price">4000€</h3>
                            </div>
                            <button class="button"><a class="scroll" href="#contact-sec" onclick="changeSelect('HERO')">Jetzt
                                kaufen!</a></button>
                        </div>
                    </div>
                    <div class="card text-center center">
                        <h2 class="card-header">Pro</h2>
                        <div class="card-content">
                            <p class="description">Sie haben es bereits geschafft, jetzt ist Zeit für ein Upgrade.</p>
                            <div class="price-container">
                                <p>Für nur</p>
                                <h3 class="price">3000€</h3>
                            </div>
                            <button class="button"><a class="scroll" href="#contact-sec" onclick="changeSelect('PRO')">Jetzt
                                kaufen!</a></button>
                        </div>
                    </div>
                    <div class="card text-center end">
                        <h2 class="card-header">Starter</h2>
                        <div class="card-content">
                            <p class="description">Ideal für alle, die ihren Fuß in die Tür bekommen möchten.</p>
                            <div class="price-container">
                                <p>Für nur</p>
                                <h3 class="price">2000€</h3>
                            </div>
                            <button class="button"><a class="scroll" href="#contact-sec"
                                                      onclick="changeSelect('STARTER')">Jetzt kaufen!</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg class="separator__svg" id="team-foot-svg" width="100%" height="100" viewBox="0 0 100 100"
         preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
    </svg>
</section>

<!--contents section-->

<section class="contents-sec padding-top position-relative" id="contents-sec">
    <div class="container">
        <div class="col-12 col-lg-7 offset-lg-5 text-center text-lg-right contents-title">
            <h1 class="heading">WAS IST DRIN?</h1>
        </div>
        <div class="col-12">
            <div class="grid-container">
                <!--Header-->
                <div class="grid-item grid-header invisible"></div>
                <div class="grid-item grid-header">STARTER</div>
                <div class="grid-item grid-header">PRO</div>
                <div class="grid-item grid-header">HERO</div>
                <!--Überarbeitungen-->
                <div class="grid-item grid-left">Überarbeitungen</div>
                <div class="grid-item">1</i></div>
                <div class="grid-item">5</i></div>
                <div class="grid-item">Unendlich</i></div>
                <!--SEO-->
                <div class="grid-item grid-left">Google Optimierung</div>
                <div class="grid-item"><i class="fas fa-check"></i></div>
                <div class="grid-item"><i class="fas fa-check"></i></div>
                <div class="grid-item"><i class="fas fa-check"></i></div>
                <!--Animationen-->
                <div class="grid-item grid-left">Animationen</div>
                <div class="grid-item"></div>
                <div class="grid-item"><i class="fas fa-check"></i></div>
                <div class="grid-item"><i class="fas fa-check"></i></div>
                <!--Preis-->
                <div class="grid-item grid-left">Preis</div>
                <div class="grid-item">2000€</div>
                <div class="grid-item">3000€</div>
                <div class="grid-item">4000€</div>
            </div>
        </div>
    </div>
</section>

<!--testimonial section start-->
<section class="testimonial-sec padding-top position-relative" id="testimonial-sec">
    <svg class="separator__svg" id="testimonial-header-svg" width="100%" viewBox="0 0 100 100"
         preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
    </svg>
    <div class="container">
        <div class="testimonial-area">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-title">
                        <h1 class="heading">SATISFIED <span>CUSTOMERS</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-carousel">
                        <div class="testimonial-box owl-carousel owl-theme">
                            <div class="item text-center wow fadeInUp">
                                <div class="icon-holder">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <p class="text">
                                    Das Beste an Website-Kings war, dass ich keinerlei Fachwissen benötigt habe. Ich
                                    konnte einfach zwischen einigen Designs wählen, und schon war die Website fertig!
                                </p>
                                <div class="img-holder">
                                    <img src="assets/images/customers/customer_1.JPG">
                                </div>
                                <h4 class="user-name">Leo Sollereder</h4>
                            </div>
                            <div class="item text-center wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon-holder">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <p class="text">
                                    Was ich besonders toll fand, war die kurze Zeit in der die Webpage bei mir war. Nur
                                    eine Woche nachdem ich Kontakt aufgenommen hatte, bekam ich die Website schon
                                    zugesendet.
                                </p>
                                <div class="img-holder">
                                    <img src="assets/images/customers/customer_1.JPG">
                                </div>
                                <h4 class="user-name">Leo Sollereder</h4>
                            </div>
                            <div class="item text-center wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon-holder">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <p class="text">
                                    Eigentlich wollte ich gar keine Website, weil ich dachte, das sei zu viel Arbeit.
                                    Aber dank Website-Kings werde ich nun von zahlreichen neuen Kunden online gefunden.
                                </p>
                                <div class="img-holder">
                                    <img src="assets/images/customers/customer_1.JPG">
                                </div>
                                <h4 class="user-name">Leo Sollereder</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg class="separator__svg" id="testimonial-foot-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none"
         fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
    </svg>
</section>
<!--testimonial section end-->

<!--faq section start-->
<section class="faq-sec" id="faq">
    <div class="container">
        <div class="col-12">
            <div class="faq-title">
                <h1 class="heading">Häufig gestellte Fragen</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="accordion">
                <div class="item" data-aos="fade-up">
                    <div class="question">
                        Kann ich mit meiner bestehenden Domain zu den WebsiteKings wechseln?
                        <div class="plus"></div>
                    </div>
                    <div class="answer">
                        Ja natürlich. Wir übernehmen den Wechsel für Sie. Ihre Domain und E-Mail Adressen können
                        Sie mitnehmen.
                    </div>
                </div>
                <div class="item" data-aos="fade-up">
                    <div class="question">
                        Es bleibt fix beim Paketpreis aus der Liste?
                        <div class="plus"></div>
                    </div>
                    <div class="answer">
                        Solange wir nicht von Außerirdischen gekidnappt werden garantieren wir, dass Ihre neue
                        Seite in spätestens 4 Wochen zum vereinbarten Listenpreis online ist.
                    </div>
                </div>
                <div class="item" data-aos="fade-up">
                    <div class="question">
                        Wo liegen meine Daten?
                        <div class="plus"></div>
                    </div>
                    <div class="answer">
                        Auf einem gesicherten Serverstandort in Deutschland der nach DIN ISO/IEC 27001
                        ZERTIFIZIERT ist.
                    </div>
                </div>
                <div class="item" data-aos="fade-up">
                    <div class="question">
                        Wie lange muss ich auf meine neue Webseite warten?
                        <div class="plus"></div>
                    </div>
                    <div class="answer">
                        Nach Erhalt aller Daten und Infos dauert die Erstellung maximal 20 Werktage.
                    </div>
                </div>
                <div class="item" data-aos="fade-up">
                    <div class="question">
                        Woher kommen die Infos auf meiner Webseite?
                        <div class="plus"></div>
                    </div>
                    <div class="answer">
                        Sie kennen Ihr Unternehmen selbst am Besten und geben uns alle Fotos, Grafiken und Texte
                        die Sie haben und wir bereiten alles bestmöglich auf. Sollten Sie Interesse an zusätzlichen
                        Firmenvideos, Fotoshootings bis hin zur Visitenkarte oder dem Briefpapier haben helfen wir
                        Ihnen sehr gerne weiter.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--brands section end-->

<!--Lastest Blog section start-->
<section class="lastest-blog" id="lastest-blog">
    <svg class="separator__svg" id="blog-header-svg" width="100%" height="200" viewBox="0 0 100 100"
         preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
    </svg>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="blog-content slider-detail wow fadeInDown">
                    <div class="slider-slide">
                        <h1>Project</h1>
                        <h1><span>ATLAS</span></h1>
                        <p>Eine individuelle Website, gebucht über das HERO-Paket. Ganz nach dem Wunsch des Kunden.</p>
                        <a href="https://project-atlas.at/#0" target="_blank" class="btn btn-large btn-rounded white-tran-yellow-btn">Zur Website</a>
                    </div>
                    <div class="slider-slide">
                        <h1>SOLLEREDER</h1>
                        <h1><span>.AT</span></h1>
                        <p>Eine Portfolio-Website für einen selbstständigen Webdesigner. Authentisch und Idividuell mit
                            dem Pro-Package.</p>
                        <a href="https://sollereder.at/" target="_blank" class="btn btn-large btn-rounded white-tran-black-btn">Zur Website</a>
                    </div>
                    <div class="slider-slide">
                        <h1>Die Yoga</h1>
                        <h1><span>Lehrerin</span></h1>
                        <p>Eine Portfolio-Website für eine selbstständige Yogalehrerin. Ganz einfach und problemlos.</p>
                        <a href="https://dieyogalehrerin.at/" target="_blank" class="btn btn-large btn-rounded white-tran-black-btn">Zur Website</a>
                    </div>
                    <div class="slider-slide">
                        <h1>Armin</h1>
                        <h1><span>Rogl</span></h1>
                        <p>Eine weitere persönliche Portfolio Website, gebucht im Starter-Paket.</p>
                        <a href="https://www.arminrogl.com/" target="_blank" class="btn btn-large btn-rounded white-tran-black-btn">Zur Website</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="blog-img wow fadeInUp">
                    <img src="digital-agency/img/blog-mokeup.png">
                    <div class="slider-img">
                        <div class="img-slide">
                            <img src="assets/projects/atlas.JPG" class="mockup-img">
                        </div>
                        <div class="img-slide">
                            <img src="assets/projects/sollereder.png" class="mockup-img">
                        </div>
                        <div class="img-slide">
                            <img src="assets/projects/yoga.JPG" class="mockup-img">
                        </div>
                        <div class="img-slide">
                            <img src="assets/projects/armin.JPG" class="mockup-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class='circle' id="blog-circle-left"><i class="lni lni-chevron-right"></i></a>
        <a class='circle' id="blog-circle-right"><i class="lni lni-chevron-left"></i></a>
    </div>

    <svg class="separator__svg" id="blog-foot-svg" width="100%" height="200" viewBox="0 0 100 100"
         preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
        <img src="digital-agency/img/pot-2.png" alt="plant" class="pot-2 wow slideInLeft" data-wow-delay=".5s">
    </svg>
</section>
<!--Lastest Blog section start-->

<!--Contact section start-->
<section class="contact-sec" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h4 class="heading text-center text-lg-left">HOL DIR DEINE WEBSITE</h4>
                <form class="row contact-form wow fadeInLeft" id="contact-form-data">
                    <div class="col-sm-12" id="result"></div>
                    <div class="col-12 col-md-5">
                        <input type="text" name="userName" placeholder="Dein Name *" class="form-control">
                        <input type="email" name="userEmail" placeholder="Email-Addresse *" class="form-control">
                        <label>Paketauswahl</label>
                        <select id="package" name="package" class="form-control">
                            <option value="HERO">HERO</option>
                            <option value="PRO" selected>PRO</option>
                            <option value="STARTER">STARTER</option>
                        </select>
                        <!--input type="text" name="userSubject" placeholder="Subject" class="form-control"-->
                    </div>
                    <div class="col-12 col-md-7">
                        <textarea class="form-control" name="userMessage" rows="6"
                                  placeholder="Deine Nachricht"></textarea>
                    </div>
                    <div id="checkbox-wrapper">
                        <p>Mit dem Senden der Nachricht akzeptierst du die <a
                                href="#"><b>Datenschutzbedingungen</b></a></p>
                        <!--input id="checkbox" type="checkbox" name="checkbox" checked required>
                        <label for="checkbox">Ich habe die Datenschutzbedingungen akzeptiert</label-->
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0);" class="btn yellow-and-black-btn rounded-pill w-100 contact_btn"><i
                                class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> <b>Send Message</b>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-5 text-center text-lg-left position-relative">
                <div class="contact-details wow fadeInRight">
                    <h4 class="heading">DU HAST EINE FRAGE?</h4>
                    <p class="text">
                        Für spezielle Anliegen kannst du uns auch in unserem Büro besuchen. Ruf uns dazu einfach an und
                        mach dir einen Termin aus!
                    </p>
                    <ul>
                        <li><i aria-hidden="true" class="fas fa-map-marker-alt"></i>Teststraße 25, 1120 Wien</li>
                        <li><i aria-hidden="true" class="fas fa-phone-volume"></i>
                            <span>+1 631 1234 5678</span>
                        </li>
                        <li><i aria-hidden="true" class="fas fa-envelope"></i><a href="mailto:email@website.com">email@website.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact section end-->

<!--Footer Start-->
<footer class="footer-style-1">

    <div class="container">
        <div-- class="row align-items-center">
            <!--Social-->
            <div class="col-lg-6 text-center text-lg-left" style="padding-bottom: 2vh;">
                <p class="company-about fadeIn">Hier findest du unser <a class="foot-links" href="">Impressum</a></p>
                <p class="company-about fadeIn">Hier findest du Informationen zu unserer <a class="foot-links" href="">DSGVO</a>
                </p>
            </div>
            <!--div class="col-lg-6 row">
                <a href="">Impressum</a>
                <a href="">DSGVO</a>
                <div class="footer-social text-center text-lg-left ">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-google-plus-g"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div-->
            <!--Text-->
            <div class="col-lg-6 text-center text-lg-right">
                <p class="company-about fadeIn">© 2020 MegaOne. Made With Love By <a href="javascript:void(0);">Themesindustry</a>
                </p>
            </div>
    </div>
    </div>
</footer>
<!--Footer End-->

<div class="fixed-nav-on-scroll fixed-nav-appear d-none">
    <div class="row no-gutters">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="logo-fixed-scroll">
                <img src="assets/logo/crown_white.png" alt="logo">
            </div>
            <div class="fixed-icon-scroll">
                <a href="javascript:void(0)" id="sidemenu_toggle1"><i class="lni lni-menu"></i></a>
            </div>
        </div>
    </div>
</div>


</body>
<!-- JavaScript -->
<script src="vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="vendor/js/jquery.appear.js"></script>
<script src="vendor/js/jquery.fancybox.min.js"></script>
<script src="vendor/js/owl.carousel.min.js"></script>
<script src="vendor/js/parallaxie.min.js"></script>
<script src="vendor/js/wow.min.js"></script>
<script src="vendor/js/jquery.cubeportfolio.min.js"></script>
<script src="vendor/js/wow.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- Kekse -->
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>


<!-- custom script-->
<script src="digital-agency/js/slick.min.js"></script>
<script src="vendor/js/contact_us.js"></script>
<script src="digital-agency/js/script.js"></script>

<script src="digital-agency/js/aos.js"></script>
<script src="digital-agency/js/javascript.js"></script>


</html>

<?php
    session_unset();
    ?>