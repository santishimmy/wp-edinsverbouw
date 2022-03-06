<!DOCTYPE html>

<?php /* Template Name: Over Ons */ ?>

<html lang="nl">
    <head>
        <title>Edin's Verbouw & Renovatie</title>
        <!-- Meta Tags (SEO and all that) -->
        <meta name="description" content="<?php the_field('field_60e219f7c70fa'); ?>">
        <meta name="keywords" content="<?php the_field('field_60e219eac70f9'); ?>">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="public">
        <link rel="cannonical" href="https://edinsverbouw.nl/over-ons">

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
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/over-ons.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    </head>

    <body>
    
        <!-- Header and banner -->

        <div class="info-header">
            <div class="center-content">
                <div class="centered-item"><a href="tel:+31617084835"><i class="fas fa-mobile-alt"></i>+31 6 17084835</a></div>
            </div>
        </div>

        <div class="header">
            <a href="<?php echo site_url(); ?>/" aria-label="Homepage" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/logo.png">
            </a>
            
            <div class="navbar-desktop">
                <div class="nav-item-desktop"><a href="<?php echo site_url(); ?>/projecten">Projecten</a></div>
                <div class="nav-item-desktop"><a href="<?php echo site_url(); ?>/diensten">Diensten</a></div>
                <div class="nav-item-desktop"><a href="<?php echo site_url(); ?>/over-ons">Over Ons</a></div>
            </div>

            <div class="header-buttons-container">
                <a href="<?php echo site_url(); ?>/diensten#offerte" id="special-button" class="filled-button">Offerte Ontvangen</a>
                <a href="<?php echo site_url(); ?>/contact#contact" class="transparant-button">Contact</a>
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

        <div class="banner">
            <div class="page-title">
                <h1><?php the_field('field_60e21572603e1') ?></h1>
                <h2><?php the_field('field_60e2158a603e2') ?></h2>
                <a href="<?php echo site_url(); ?>/diensten#offerte" class="remove-margin-left filled-button">Offerte Aanvragen</a>
            </div>

        </div>

        <!-- Mobile Nav Elements -->

        <div class="nav-overlay">
            <div class="navmenu-mobile">
                <div class="nav-item-mobile">
                    <a href="<?php echo site_url(); ?>/">Home</a>
                </div>
                
                <div class="nav-item-mobile">
                    <a href="<?php echo site_url(); ?>/diensten">Diensten</a>
                </div>
                
                <div class="nav-item-mobile">
                    <a href="<?php echo site_url(); ?>/projecten">Projecten</a>
                </div>
                
                <div class="nav-item-mobile">
                    <a href="<?php echo site_url(); ?>/over-ons">Over Ons</a>
                </div>
                
                <div class=" nav-item-mobile">
                    <a href="<?php echo site_url(); ?>/contact#contact" class="transparant-button">Contact</a>
                </div>

                <div class="remove-padding-top nav-item-mobile">
                    <a href="<?php echo site_url(); ?>/diensten#offerte" class="filled-button">Offerte Aanvragen</a>
                </div>
            </div>
        </div>

        <!-- Posts, articles, content and all that -->

        

        <div id="first-section" class="small-section">
            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h1><?php the_field('field_60e216318c781') ?></h1>
                <h2><?php the_field('field_60e2165b8c782') ?></h2>
                <p><?php the_field('field_60e2167c8c783') ?></p>
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h1><?php the_field('field_60e216e80792a') ?></h1>
                <h2><?php the_field('field_60e216fd0792b') ?></h2>
                <p><?php the_field('field_60e217100792c') ?></p>
            </div>
        </div>

        <div class="small-section">
            <div id="atlantis" data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h1><?php the_field('field_60e2176edf2e4') ?></h1>
                <h2><?php the_field('field_60e21783df2e5') ?></h2>
                <p><?php the_field('field_60e21799df2e6') ?></p>
                <a href="https://www.atlantis-schildersbedrijf.nl/schilderwerk-beglazing-behang-en-meer.html" target="blank" class="remove-margin-left transparant-button">Bezoek de website</a>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" class="image-container">
                <img src="<?php the_field('field_60e2197a0a6ac') ?>">
            </div>
        </div>

        <div class="grey-ish-background small-section">
            <div class="section-title">
                <h1>Waarom Edin's Verbouw & Renovatie?</h1>
            </div>

            <div class="usp-container">
                <div class="usp-item">
                    <div class="circle">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2>Bekwaam</h2> 
                </div>  

                <div class="usp-item">
                    <div class="circle">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2>Resultaatgericht</h2> 
                </div>

                <div class="usp-item">
                    <div class="circle">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2>Goede Nazorg</h2> 
                </div>

                <div class="usp-item">
                    <div class="circle">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2>Transparant</h2> 
                </div>  
            </div>         
        </div>
        
        <div class="blue-ish-background tiny-section"></div>

        <div class="blue-ish-background small-section">
            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h1><?php the_field('field_60e21873fb89b') ?></h1>
                <h2><?php the_field('field_60e21888fb89c') ?></h2>
                <p><?php the_field('field_60e218a0fb89d') ?></p>
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h1><?php the_field('field_60e218cffb89e') ?></h1>
                <h2><?php the_field('field_60e218e9fb89f') ?></h2>
                <p><?php the_field('field_60e218fafb8a0') ?></p>
            </div>
        </div>

        <!-- <div class="blue-ish-background tiny-section"></div> -->

        <div class=" blue-ish-background small-section">
            <div class="section-title">
                <h1>Wilt u weten wat wij voor u kunnen betekenen?</h1>
            </div>
            <a href="<?php echo site_url(); ?>/diensten" class="filled-button">Onze Diensten<a>
        </div>

        <!-- Footer -->

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
                    <li><a href="<?php echo site_url(); ?>/projecten">Projecten</a></li>
                    <li><a href="<?php echo site_url(); ?>/diensten">Diensten</a></li>
                    <li><a href="<?php echo site_url(); ?>/over-ons">Over Ons</a></li>
                    <li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
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