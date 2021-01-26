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
        <link href="assets/logo/crown_blue.svg" rel="icon">
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
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@700;900&display=swap"
              rel="stylesheet">

        <link rel="stylesheet" type="text/css"
              href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css"/>

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
                            <a class="navbar-brand bg-dark" href="#home"><img height="auto" width="auto"
                                                                              src="assets/logo/crown_white_no_text.svg"></a>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link wow fadeInUp scroll" href="#home">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link wow fadeInDown scroll1" href="#about-sec">ÜBER</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link wow fadeInDown scroll" href="#package-section">PAKETE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link wow fadeInDown scroll" href="#testimonial-sec">KUNDEN</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link wow fadeInDown scroll" href="#faq-sec">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link wow fadeInUp scroll" href="#latest-customers">PROJEKTE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link wow fadeInDown scroll"
                                           href="#contact-sec">KONTAKT</a>
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
                <a class="navbar-brand"><img src="assets/logo/crown_white.svg" alt="logo"></a>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll1" href="#about-sec">Über</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll1" href="#package-section">Pakete</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#testimonial-sec">Kunden</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#faq-sec">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#latest-customers">Projekte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact-sec">Kontakt</a>
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
            <svg class="separator__svg" id="site-mmenu-svg" width="100%" viewBox="0 0 100 100"
                 preserveAspectRatio="none"
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
                        <div class="banner-right-area-content">
                            <h2>Website<b>KINGS</b></h2>
                            <div id="perks-wrapper">
                                <p id="perks">Deine Website ohne Aufwand – zum Fixpreis.</p>
                            </div>
                            <a href="#skill-sec" id="banner-btn"
                               class="btn btn-large btn-rounded white-tran-black-btn scroll">Loslegen</a>
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
                            "Website Kings – wir bauen Websites die funktionieren.<br>
                            Ohne Aufwand für Sie, zum fixen Preis, in klaren Paketen.<br>
                            Google optimiert, einfach zu warten und einfach großartig.<br>
                            Sie machen einen tollen Job – wir machen den Rest."

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
            <path d="M 100 100 V 10 L 0 100" fill="#1A393C"/>
            <path d="M 30 73 L 100 18 V 10 Z" fill="#1A393C" stroke-width="0"/>
        </svg>
        <div class="container">
            <div class="row">
                <!-- Heading Area-->
                <div class="col-lg-5 wow fadeInUp">
                    <div class="service-details">
                        <h1>WIR MACHEN</h1>
                        <h1><span>DEINE</span> WEBSITE</h1>
                        <p>Und das mit allem was dazugehört! Damit deine Website auch am Smartphone erreichbar ist und
                            auf
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
            <img src="assets/images/123rf/laptop.png" class="wow slideInLeft" alt="laptop">
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
                                <p>Wenn Du gerne dazu beraten werden möchtest machen wir das sehr gerne.</p>
                                <button class="button"><a class="scroll" href="#beratung">Kontaktieren</a>
                                </button>
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
                                <p>Wir sagen dir genau, wie viele Fotos und welche Texte und Inhalte wir von dir
                                    benötigen, um deine Homepage nach deinen Vorstellungen umsetzen zu können. Gemeinsam
                                    schaffen wir eine Website, die dich und dein Business erfolgreich präsentiert. </p>
                                <h1 class="number">2</h1>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-up-right" class="step-wrapper">
                        <div class="step">
                            <div>
                                <h4>Lass uns beginnen</h4>
                                <p>Unsere erfahrenen Entwickler beginnen deine neue Webseite zu programmieren, die
                                    Texter geben deinen Inhalten den letzten Schliff und die Grafik arbeitet an der
                                    optischen Umsetzung.</p>
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
                                <h4>Ziel erreicht</h4>
                                <p>Deine neue Webseite wird auf den Server übersiedelt und ist ab sofort unter deiner
                                    Wunschdomain abrufbar, ebenso wie deine Mails. Natürlich bekommst du von uns auch
                                    eine Einschulung. </p>
                                <h1 class="number">4</h1>
                            </div>
                        </div>
                    </div>

                    <div data-aos="zoom-in" class="beratung">
                        <h3>Hol dir dein kostenloses Beratungsgespräch!</h3>
                        <?php
                        if (isset($_SESSION['error'])) {
                            $error = $_SESSION['error'];
                            if (!$error) {
                                echo '<div class="beratung-success"><i class="fas fa-check-circle"></i><p>Danke für deine Nachricht!</p></div>';
                            } else {
                                echo '<div class="beratung-error"><i class="fas fa-exclamation-circle"></i><p>Da hat wohl etwas nicht funktioniert! Kontaktiere uns bitte über die unten Angeführten Möglichkeiten!</p></div>';
                            }
                        } else {
                            echo '<form action="vendor/contact-mailer-beratung.php" method="post">
                            <input name="beratungmail" id="beratungmail" type="email" placeholder="Deine E-Mail" required>
                            <button type="submit" id="getInfos">Senden</button>
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
    <section class="package-section" id="package-section">
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
                        <div class="card text-center end">
                            <h2 class="card-header">Starter</h2>
                            <div class="card-content">
                                <p class="description">Für das eigene Yoga-Studio, die Boutique, den Verein oder die
                                    Praxis. Wofür auch immer du eine Homepage benötigst. Dieses Paket ist zum
                                    Losstarten. </p>
                                <div class="bottom-container">
                                    <div class="price-container">
                                        <p>Für nur</p>
                                        <h3 class="price">1.490,-</h3>
                                    </div>
                                    <button class="button"><a class="scroll" href="#contact-sec"
                                                              onclick="changeSelect('STARTER')">Jetzt kaufen!</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card text-center center">
                            <h2 class="card-header">Business</h2>
                            <div class="card-content">
                                <p class="description">Für kleine Webshops und beispielsweise KMUs, die ihre Kunden
                                    direkt ansprechen und sich besser vermarkten wollen.</p>
                                <div class="bottom-container">
                                    <div class="price-container">
                                        <p>Für nur</p>
                                        <h3 class="price">1.990,-</h3>
                                    </div>
                                    <button class="button"><a class="scroll" href="#contact-sec"
                                                              onclick="changeSelect('BUSINESS')">Jetzt
                                            kaufen!</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="card text-center start">
                            <h2 class="card-header">Pro</h2>
                            <div class="card-content">
                                <p class="description">Das sorgenfreie All-in Paket</p>
                                <div class="bottom-container">
                                    <div class="price-container">
                                        <p>Für nur</p>
                                        <h3 class="price">2.990,-</h3>
                                    </div>
                                    <button class="button"><a class="scroll" href="#contact-sec"
                                                              onclick="changeSelect('PRO')">Jetzt
                                            kaufen!</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="card text-center start">
                            <h2 class="card-header">Enterprise</h2>
                            <div class="card-content">
                                <p class="description">Für alle, die noch mehr erreichen wollen.</p>
                                <div class="bottom-container">
                                    <div class="price-container">
                                        <p>Preis</p>
                                        <h3 class="price">Auf Anfrage</h3>
                                    </div>
                                    <button class="button"><a class="scroll" href="#contact-sec"
                                                              onclick="changeSelect('ENTERPRISE')">Jetzt
                                            kaufen!</a></button>
                                </div>
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
        <div class="container" id="content-container">
            <div class="col-12 col-lg-7 offset-lg-5 text-center text-lg-right contents-title">
                <h1 class="heading">WAS IST DRIN?</h1>
            </div>
            <div class="col-12">
                <div class="grid-container">
                    <!--Header-->
                    <div class="grid-item grid-header invisible"></div>
                    <div class="grid-item grid-header">STARTER</div>
                    <div class="grid-item grid-header">BUSINESS</div>
                    <div class="grid-item grid-header">PRO</div>
                    <div class="grid-item grid-header">ENTERPRISE</div>
                    <!--Professionelle Firmenwebsite-->
                    <div class="grid-item grid-left">Professionelle Firmenwebseite, mobil optimiert, DSGVO konform</div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <!--Website Hosting-->
                    <div class="grid-item grid-left">Hosting inkl. Domain*</div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <!--Domain inkl.-->
                    <div class="grid-item grid-left">E-Mail Adressen</div>
                    <div class="grid-item">2</div>
                    <div class="grid-item">5</div>
                    <div class="grid-item">10</div>
                    <div class="grid-item">Unlimitiert</div>
                    <!--Server einrichten-->
                    <div class="grid-item grid-left">Anzahl Subseiten</div>
                    <div class="grid-item">3</div>
                    <div class="grid-item">5</div>
                    <div class="grid-item">8</div>
                    <div class="grid-item">Unlimitiert</div>
                    <!--Eigene Mailadresse-->
                    <div class="grid-item grid-left">Webshop</div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <!--Anzahl Subseiten-->
                    <div class="grid-item grid-left">Fotoshooting & Werbung</div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <!--Anzahl Subseiten-->
                    <div class="grid-item grid-left">
                        Blog Artikel, Werbung auf Google, Social Media, Video, Gewinnspiele, Workshops
                    </div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><i class="fas fa-check"></i></div>
                    <!--Webshop-->
                    <div class="grid-item grid-left">Preis</div>
                    <div class="grid-item">1.490,-</div>
                    <div class="grid-item">1.990,-</div>
                    <div class="grid-item">2.990,-</div>
                    <div class="grid-item">Auf Anfrage</div>
                </div>
            </div>
            <p>* im 1. Jahr, darauffolgende Jahre Domain 10,- / Server 10,-/Monat</p>
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
                                        Die Websitekings haben meine Wünsche rasch und unkompliziert umgesetzt. Ich
                                        konnte einfach zwischen einigen Designs wählen und schon war die Website
                                        fertig!
                                    </p>
                                    <div class="img-holder">
                                        <img src="assets/images/customers/customer_2.jpg">
                                    </div>
                                    <h4 class="user-name">Martin Lückl</h4>
                                </div>
<!--                                <div class="item text-center wow fadeInUp" data-wow-delay=".3s">-->
<!--                                    <div class="icon-holder">-->
<!--                                        <i class="fas fa-quote-right"></i>-->
<!--                                    </div>-->
<!--                                    <p class="text">-->
<!--                                        Zwei Wochen nachdem ich Kontakt aufgenommen hatte, bekam ich die Website schon-->
<!--                                        fertig zugesendet.-->
<!--                                    </p>-->
<!--                                    <div class="img-holder">-->
<!--                                        <img src="assets/images/customers/customer_1.JPG">-->
<!--                                    </div>-->
<!--                                    <h4 class="user-name">Leo Sollereder</h4>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="separator__svg" id="testimonial-foot-svg" width="100%" viewBox="0 0 100 100"
             preserveAspectRatio="none"
             fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path d="M 100 100 V 10 L 0 100"/>
            <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
        </svg>
    </section>
    <!--testimonial section end-->

    <!--faq section start-->
    <section class="faq-sec" id="faq-sec">
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
                            Ja natürlich. Wir übernehmen den Wechsel für dich. Deine Domain und die E-Mail Adressen
                            kannst du mitnehmen.
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up">
                        <div class="question">
                            Bleibt es wirklich fix beim Paketpreis aus der Liste?
                            <div class="plus"></div>
                        </div>
                        <div class="answer">
                            Solange wir nicht von Außerirdischen gekidnappt werden, garantieren wir, dass deine neue
                            Seite in spätestens 4 Wochen zum vereinbarten Preis online ist.
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up">
                        <div class="question">
                            Wo liegen meine Daten?
                            <div class="plus"></div>
                        </div>
                        <div class="answer">
                            Auf einem gesicherten Serverstandort in Deutschland der nach DIN ISO/IEC 27001 zertifiziert
                            ist.
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up">
                        <div class="question">
                            Woher kommen die Infos auf meiner Webseite?
                            <div class="plus"></div>
                        </div>
                        <div class="answer">
                            Du kennst dein Unternehmen am besten, deshalb kommen die Bilder und Texte auch von dir. Wir
                            sagen dir wie viele und welche Fotos wir benötigen und welche Texte erforderlich sind, damit
                            deine neue Website ein Erfolg wird. Die Aufbereitung der Bilder und Texte ist dann unser
                            Job. Wenn du zusätzlich ein Fotoshooting, ein Firmenvideo, neue Visitenkarten oder ein
                            Firmenbriefpapier benötigst, bringen wir dich gerne mit den richtigen Personen zusammen, die
                            diese Dinge für dich umsetzen können.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--brands section end-->

    <!--Lastest Blog section start-->
    <section class="latest-customers" id="latest-customers">
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
                            <p>Eine individuelle Website, gebucht über das HERO-Paket. Ganz nach dem Wunsch des
                                Kunden.</p>
                            <a href="https://project-atlas.at/#0" target="_blank"
                               class="btn btn-large btn-rounded white-tran-yellow-btn">Zur Website</a>
                        </div>
                        <div class="slider-slide">
                            <h1>Die Yoga</h1>
                            <h1><span>Lehrerin</span></h1>
                            <p>Eine Portfolio-Website für eine selbstständige Yogalehrerin. Ganz einfach und
                                problemlos.</p>
                            <a href="https://dieyogalehrerin.at/" target="_blank"
                               class="btn btn-large btn-rounded white-tran-black-btn">Zur Website</a>
                        </div>
                        <div class="slider-slide">
                            <h1>Armin</h1>
                            <h1><span>Rogl</span></h1>
                            <p>Eine weitere persönliche Portfolio Website, gebucht im Starter-Paket.</p>
                            <a href="https://www.arminrogl.com/" target="_blank"
                               class="btn btn-large btn-rounded white-tran-black-btn">Zur Website</a>
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
                                <img src="assets/projects/yoga.JPG" class="mockup-img">
                            </div>
                            <div class="img-slide">
                                <img src="assets/projects/armin.png" class="mockup-img">
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
<!--            <img src="assets/images/123rf/laptop_top.png" alt="plant" class="pot-2 wow slideInLeft" data-wow-delay=".5s">-->
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
                                <option value="ENTERPRISE">ENTERPRISE</option>
                                <option value="PRO">PRO</option>
                                <option value="BUSINESS" selected>BUSINESS</option>
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
                            <a href="javascript:void(0);"
                               class="btn yellow-and-black-btn rounded-pill w-100 contact_btn"><i
                                        class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> <b>Nachricht senden</b>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-5 text-center text-lg-left position-relative">
                    <div class="contact-details wow fadeInRight">
                        <h4 class="heading">DU HAST EINE FRAGE?</h4>
                        <p class="text">
                            Für spezielle Anliegen kannst du uns auch in unserem Büro besuchen. Ruf uns dazu einfach an
                            und
                            mach dir einen Termin aus!
                        </p>
                        <ul>
                            <li><i aria-hidden="true" class="fas fa-map-marker-alt"></i>Thurngasse 8/14, 1090 Wien</li>
                            <li><i aria-hidden="true" class="fas fa-phone-volume"></i>
                                <span>+43 677 64169669</span>
                            </li>
                            <li><i aria-hidden="true" class="fas fa-envelope"></i><a
                                        href="mailto:office@websitekings.at">office@websitekings.at</a>
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
            <div class="row">
                <!--Social-->
                <div class="col-lg-6 legal-container">
                    <p class="company-about fadeIn spacer"><a class="foot-links" href="impressum.html">Impressum</a></p>
                    <p class="company-about fadeIn"><a class="foot-links"
                                                       href="datenschutz.html">Datenschutzerklärung</a>
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
                    <img src="assets/logo/crown_white_no_text.svg" alt="logo">
                </div>
                <div class="fixed-icon-scroll">
                    <a href="javascript:void(0)" id="sidemenu_toggle1"><i class="lni lni-menu"></i></a>
                </div>
            </div>
        </div>
    </div>


    </body>

    <!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->
    <script type="text/javascript"
            src="//www.freeprivacypolicy.com/public/cookie-consent/3.1.0/cookie-consent.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({
                "notice_banner_type": "simple",
                "consent_type": "express",
                "palette": "light",
                "language": "de",
                "website_name": "Websitekings",
                "cookies_policy_url": "https://websitekings.at/datenschutz#cookies"
            });
        });
    </script>

    <noscript>Cookie Consent by <a href="https://www.FreePrivacyPolicy.com/free-cookie-consent/"
                                   rel="nofollow noopener">FreePrivacyPolicy.com</a></noscript>
    <!-- End Cookie Consent -->

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
    <!--<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script src="digital-agency/js/cookies.js"></script>-->


    <!-- custom script-->
    <script src="digital-agency/js/slick.min.js"></script>
    <script src="vendor/js/contact_us.js"></script>
    <script src="digital-agency/js/script.js"></script>

    <script src="digital-agency/js/aos.js"></script>
    <script src="digital-agency/js/javascript.js"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script cookie-consent="tracking" type="text/plain" async
            src="https://www.googletagmanager.com/gtag/js?id=G-M8XDB6S5VN"></script>
    <script cookie-consent="tracking" type="text/plain">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-M8XDB6S5VN');







    </script>

    <!-- end of Google Analytics-->


    <!-- Facebook Pixel Code -->
    <script cookie-consent="tracking" type="text/plain">
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window,document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '885760415525287');
            fbq('track', 'PageView');







    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=885760415525287&ev=PageView
&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->


    </html>

<?php
session_unset();
?>