<!DOCTYPE html>

<?php /* Template Name: Projecten */ ?>

<html lang="nl">
    <head>
        <title>Edin's Verbouw & Renovatie</title>
        <!-- Meta Tags (SEO and all that) -->
        <meta name="description" content="<?php the_field('field_60e1e46036924') ?>">
        <meta name="keywords" content="<?php the_field('field_60e1e43a36923') ?>">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="public">
        <link rel="cannonical" href="https://edinsverbouw.nl/projecten">

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
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/projecten.css" rel="stylesheet">

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
            <a href="<?php echo get_site_url(); ?>/" aria-label="Homepage" class="logo">
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

        <div class="banner">
            <div class="page-title">
                <h1><?php the_field('field_60e1dc72f7165') ?></h1>
                <h2><?php the_field('field_60e1dc98f7166') ?></h2>
                <a href="<?php echo get_site_url(); ?>/diensten#offerte" class="remove-margin-left filled-button">Offerte Aanvragen</a>
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
                    <a href="<?php echo get_site_url(); ?>/diensten/#offerte" class="filled-button">Offerte Aanvragen</a>
                </div>
            </div>
        </div>

       <!-- Posts, articles, content and all that -->
        <div id="first-section" class="small-section">
            <div class="article-text-left">
                <h1><?php the_field('field_60e1dcfa3e3df') ?></h1><br><br>
                <h3><?php the_field('field_60e1dd263e3e0') ?></h3>
                <p><?php the_field('field_60e1dd403e3e1') ?></p>
            </div>
        </div>
        
        <div class="grey-ish-background section-projecten section">
            <div class="image-container">
                <img src="<?php the_field('field_60deff7d47af0'); ?>">
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h3><?php the_field('field_60e1ddcf95ad2'); ?></h3>
                <h4><?php the_field('field_60e1ddf195ad3'); ?></h4>
                <p><?php the_field('field_60e1de1795ad4'); ?></p>
                <a href="<?php echo site_url(); ?>/vreeland" class="remove-margin-left transparant-button">Galerij</a>
            </div>
        </div>

        <div class="blue-ish-background section-projecten section">
            <div class="image-container">
                <img src="<?php the_field('field_60deffc047af1'); ?>">
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h3><?php the_field('field_60e1dfb87bdfc'); ?></h3>
                <h4><?php the_field('field_60e1dfce7bdfd'); ?></h4>
                <p><?php the_field('field_60e1dfe17bdfe'); ?></p>
                <a href="<?php echo site_url(); ?>/laren" class="remove-margin-left transparant-button">Galerij</a>
            </div>
        </div>

        <div class="grey-ish-background section-projecten section">
            <div class="image-container">
                <img src="<?php the_field('field_60deffd547af2'); ?>">
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h3><?php the_field('field_60e1e0622214d'); ?></h3>
                <h4><?php the_field('field_60e1e07f2214e'); ?></h4>
                <p><?php the_field('field_60e1e0942214f'); ?></p>
                <a href="<?php echo site_url(); ?>/loenen" class="remove-margin-left transparant-button">Galerij</a>
            </div>
        </div>

        <div class="blue-ish-background section-projecten section">
            <div class="image-container">
                <img src="<?php the_field('field_60deffec47af3'); ?>">
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h3><?php the_field('field_60e1e0e6fc655'); ?></h3>
                <h4><?php the_field('field_60e1e0fefc656'); ?></h4>
                <p><?php the_field('field_60e1e113fc657'); ?></p>
                <a href="<?php echo site_url(); ?>/loosdrecht" class="remove-margin-left transparant-button">Galerij</a>
            </div>
        </div>

        <div class="grey-ish-background section-projecten section">
            <div class="image-container">
                <img src="<?php the_field('field_60df000247af4'); ?>">
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h3><?php the_field('field_60e1e1a3a3699'); ?></h3>
                <h4><?php the_field('field_60e1e1b9a369a'); ?></h4>
                <p><?php the_field('field_60e1e1d1a369b'); ?></p>
                <a href="<?php echo site_url(); ?>/kortenhoef" class="remove-margin-left transparant-button">Galerij</a>
            </div>
        </div>

        <div class="blue-ish-background section-projecten section">
            <div class="image-container">
                <img src="<?php the_field('field_60df001f47af5'); ?>">
            </div>

            <div data-aos="fade-left" data-aos-duration="1000" class="article-text-left">
                <h3><?php the_field('field_60e1e21776e42'); ?></h3>
                <h4><?php the_field('field_60e1e22b76e43'); ?></h4>
                <p><?php the_field('field_60e1e23c76e44'); ?></p>
                <a href="<?php echo site_url(); ?>/loenen-aan-de-vecht" class="remove-margin-left transparant-button">Galerij</a>
            </div>
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