<!DOCTYPE html>

<?php /* Template Name: Home */ ?>

<html lang="nl">
    <head>
        <title>Edin's Verbouw & Renovatie</title>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RGZGDEHK5K"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-RGZGDEHK5K');
        </script>

        <!-- Meta Tags (SEO and all that) -->
        <meta name="description" content="<?php the_field('field_60e19dea37635') ?>">
        <meta name="keywords" content="<?php the_field('field_60e19dd337634') ?>">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="public">
        <link rel="cannonical" href="https://edinsverbouw.nl">

        <!-- Favicon Tags (a lot of them for something so small) -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">

        <!-- Link CDN's -->
        <!-- CSS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- JavaScript -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/Jquery/jquery.mobile.custom.min.js"></script>

        <!-- Link Actual Written Code -->
        <!-- CSS -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/brochure.js"></script>

    </head>

    <body>
    
        <!-- Header and banner -->

        <div class="info-header">
            <div class="center-content">
                <div class="centered-item"><a href="tel:+31617084835"><i class="fas fa-mobile-alt"></i>+31 6 17084835</a></div>
            </div>
        </div>

        <div class="header">
            <a href="/" aria-label="Homepage" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/logo.png">
            </a>

            <div class="navbar-desktop">
                <div class="nav-item-desktop"><a href="<?php echo get_site_url(); ?>/projecten">Projecten</a></div>
                <div class="nav-item-desktop"><a href="<?php echo get_site_url(); ?>/diensten">Diensten</a></div>
                <div class="nav-item-desktop"><a href="<?php echo get_site_url(); ?>/over-ons">Over Ons</a></div>
            </div>

            <div class="header-buttons-container">
                <a href="<?php echo get_site_url(); ?>/diensten#offerte" id="special-button" class="filled-button">Offerte Ontvangen</a>
                <a href="<?php echo get_site_url(); ?>/contact#contact" class="transparant-button">Contact</a>
            </div>

            <!-- Mobile Navbar Button -->

            <div class="navbar-button-mobile">
                <ul class="menu-ul">
                    <li class="menu-li"></li>
                    <li class="menu-li"></li>
                    <li class="menu-li"></li>
                </ul>
            </div>
        </div>

        <div class="banner-main-page">
                <div class="page-title">
                    <h1><?php the_field('field_60df23dd87e37') ?></h1>
                    <h2><?php the_field('field_60df2a3ccc539') ?></h2>
                    <a href="<?php echo get_site_url(); ?>/#brochure" class="remove-margin-left filled-button">Brochure Ontvangen</a>
                    <a href="<?php echo get_site_url(); ?>/diensten#offerte" class="transparant-button">Offerte Aanvragen</a>
                </div>
        </div>

        <!-- Mobile Nav Elements -->

        <div class="nav-overlay">
            <div class="navmenu-mobile">
                <div class="nav-item-mobile">
                    <a href="<?php echo get_site_url(); ?>/">Home</a>
                </div>
                
                <div class="nav-item-mobile">
                    <a href="<?php echo get_site_url(); ?>/diensten">Diensten</a>
                </div>
                
                <div class="nav-item-mobile">
                    <a href="<?php echo get_site_url(); ?>/projecten">Projecten</a>
                </div>
                
                <div class="nav-item-mobile">
                    <a href="<?php echo get_site_url(); ?>/over-ons">Over Ons</a>
                </div>
                
                <div class=" nav-item-mobile">
                    <a href="<?php echo get_site_url(); ?>/contact#contact" class="transparant-button">Contact</a>
                </div>

                <div class="remove-padding-top nav-item-mobile">
                    <a href="<?php echo get_site_url(); ?>/diensten#offerte" class="filled-button">Offerte Aanvragen</a>
                </div>
            </div>
        </div>

        <!-- Posts, articles, content and all that -->

        <div id="first-in-main" class="tiny-section">
            <div class="social-media-container">
                <div class="first-social-media-item"><a href=""><i class="fab fa-facebook-square"></i></a></div>
                <div class="social-media-item"><a href=""><i class="fab fa-linkedin"></i></a></div>
                <div class="social-media-item"><a href=""><i class="fab fa-instagram"></i></a></div>
            </div>
        </div>

        <div class="section">
            <div id="bounce-on-phone" class="post-dark">
                <h5><?php the_field('field_60df2a77cc53a') ?></h5>
                <h6><?php the_field('field_60df2b1e1b89d') ?></h6>
                <p><?php the_field('field_60df2c16e2a48'); ?></p>
                <p>Meer over <a href="<?php echo get_site_url(); ?>/over-ons#atlantis">Atlantis</a><p>
            </div>

            <div class="post-light">
                <h3><?php the_field('field_60df2ce5c7c87'); ?></h3>
                <h4><?php the_field('field_60df2ce4c7c86'); ?></h4>
                <p><?php the_field('field_60df2ce4c7c85'); ?></p>
            </div>

            <div id="bounce" class="post-dark">
                <h5><?php the_field('field_60df2a77cc53a'); ?></h5>
                <h6><?php the_field('field_60df2b1e1b89d'); ?></h6>
                <p><?php the_field('field_60df2c16e2a48'); ?></p>
                <p>Meer over <a href="<?php echo get_site_url(); ?>/over-ons#atlantis">Atlantis</a><p>
            </div>

            <div class="post-light">
                <h3><?php the_field('field_60df2d989717c'); ?></h3>
                <h4><?php the_field('field_60df2db59717d'); ?></h4>
                <p><?php the_field('field_60df2dd39717e'); ?></p>
            </div>
        </div>

        <div class="grey-ish-background section">
            <div class="section-title">
                <h1><?php the_field('field_60df2e83ee1df'); ?></h1>
            </div>

            <div data-aos="fade-right" data-aos-duration="1000" class="article-text-right">
                <h3><?php the_field('field_60df2ea9ee1e0'); ?></h3>
                <h4><?php the_field('field_60df2ec1ee1e1'); ?></h4>
                <p><?php the_field('field_60df2edeee1e2'); ?></p>
                <a href="<?php echo get_site_url(); ?>/diensten" class="remove-margin-right filled-button">Ga naar diensten</a>
            </div>

            <div class="image-container">
                <img src="<?php the_field('field_60dda5abc9817'); ?>"/>
            </div>
        </div>

        <div class="blue-ish-background section">
            <div class="section-title">
                <h1>Projecten </h1>
            </div>

            <div class="image-container">
                <a class="hoverable" href="<?php echo get_site_url(); ?>/projecten"><img src="<?php the_field('field_60dda601c9818'); ?>"/></a>
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h3><?php the_field('field_60df3116763a9'); ?></h3>
                <h4><?php the_field('field_60df3198763aa'); ?></h4>
                <p><?php the_field('field_60df31bb763ab'); ?></p>
                <a href="<?php echo get_site_url(); ?>/projecten" class="remove-margin-left transparant-button">Projecten</a>
            </div>
        </div>

        <div class="blue-ish-background section">
            <div class="card-container">
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">
                <div class="cards">
                    <label class="card" for="item-1" id="project-1">
                        <img src="<?php the_field('field_60ddc8ce05f68'); ?>" alt="project"/>
                    </label>
                    <label class="card" for="item-2" id="project-2">
                        <img src="<?php the_field('field_60ddc8de3553a'); ?>" alt="project"/>
                    </label>
                    <label class="card" for="item-3" id="project-3">
                        <img src="<?php the_field('field_60ddc95271401'); ?>" alt="project"/>
                    </label>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">
                <h1><?php the_field('field_60df33ce62e00'); ?></h1>
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-centered">
                <h3><?php the_field('field_60df33f062e01'); ?></h3>
                <p><?php the_field('field_60df341062e02'); ?></p>
                <a href="<?php echo get_site_url(); ?>/over-ons" class="remove-margin-left transparant-button">Over Ons</a>
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-centered">
                <h3><?php the_field('field_60df343862e03'); ?></h3>
                <p><?php the_field('field_60df345562e04'); ?></p>
                <a href="<?php echo get_site_url(); ?>/contact#contact" class="remove-margin-left transparant-button">Contact</a>
            </div>
        </div>

        <div id="hide-everywhere" class="carrousel-section">
            <div class="no-box-sizing section-title">
                <h1>Referenties</h1>
                <h2>Wat zeggen onze klanten over ons?</h2>
            </div>

            <?php include 'php-files/referenties.php';?>
        </div>

        <div class="dark-background small-section">
            <div class="section-title">
                <h5>Onze Partner</h5>
            </div>

            <div class="partner-logo">
                <a href="https://atlantis-schildersbedrijf.nl" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/media/partners/atlantis-schildersbedrijf.png"></a>
            </div>
            <h5>Atlantis Schildersbedrijf</h5>
            <br><br>
        </div>

        <div class="dark-sand-background section">
            <div class="post-dark">
                <h5><?php the_field('field_60df3534153d4'); ?></h5>
                <h6><?php the_field('field_60df354d153d5'); ?></h6>
                <p><?php the_field('field_60df3569153d6'); ?></p>
            </div>

            <div class="post-dark">
                <h5><?php the_field('field_60df358a153d7'); ?></h5>
                <h6><?php the_field('field_60df35a7153d8'); ?></h6>
                <p><?php the_field('field_60df35bd153d9'); ?></p>
            </div>
        </div>

        <!-- Footer -->

        <div id="brochure" class="dark-background section">
            <div class="page-title">
                <form id="request-brochure" name="brochure" method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" target="brochure-frame">
                    <input type="hidden" name="action" value="my_brochure_form">
                    <h5>Brochure Aanvragen</h5>
                    <h6>Laat het emailadress achter waarop u de brochure wenst te ontvangen</h6>
                    <br><br>
                    <input id ="brochure-email" name="email-voor-brochure" type="email" placeholder="Emailadress" required>
                    <label for="brochure-email"></label>
                    <label for="brochure-submit">
                        <input type="submit" id="brochure-submit" form="request-brochure" name="submit" value="Ontvang brochure">
                    </label>
                </form>
                <iframe name="brochure-frame"></iframe>
            </div>
        </div>

        <div class="dark-sand-background footer">
            <div class="article-text-left">
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/media/partners/edinsverbouwenrenovatie.png"> 
                </div>
            </div> 

            <div class="article-text-left">
                <h5>Contact</h5>
                <p>Heeft u vragen of wilt u meer informatie, wij zijn telefonisch en per email bereikbaar.</p>
                <ul>
                    <li><a href="tel:+31617084835">+31 6 17084835</a></li>
                    <li><a href="mailto:info@edinsverbouw.nl">info@edinsverbouw.nl</a></li>
                </ul>
            </div>

            <div class="article-text-left">
                <h5>Links</h5>
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>/projecten">Projecten</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/diensten">Diensten</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/over-ons">Over Ons</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="dark-sand-background footer-bottom">
            <p>© 2021 Edin's Verbouw & Renovatie B.V.</p> <p> | </p> <p> Alle Rechten Voorbehouden  </p> <p> | </p> <p> Made by <a href="https://draftex.nl" target="blank"> Draftex</a> </p>
        </div>

    </body>

    <script>
        AOS.init({
           once: true 
        });
    </script>
</html>