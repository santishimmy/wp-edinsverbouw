<!DOCTYPE html>

<?php /* Template Name: Loenen */ ?>

<html lang="nl">
    <head>
        <title>Edin's Verbouw & Renovatie</title>
        <!-- Meta Tags (SEO and all that) -->
        <meta name="description" content="<?php the_field('field_60e2d4c4e62d6') ?>">
        <meta name="keywords" content="<?php the_field('field_60e2d4c4e27d5') ?>">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="public">
        <link rel="cannonical" href="https://edinsverbouw.nl/projecten/loenen">

        <!-- Favicon Tags (a lot of them for something so small) -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">

        <!-- Link CDN's -->
        <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- JavaScript -->
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/Jquery/jquery.mobile.custom.min.js"></script>

        <!-- Link Actual Written Code -->
        <!-- CSS -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bouwproject.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/bouwproject.js"></script>

    </head>

    <body>
        <div class="blue-ish-background tiny-section">
            <a href="<?php echo site_url(); ?>/projecten" class="transparant-button">Terug naar projecten</a>
        </div>

        <div class="blue-ish-background small-section">
            <div class="section-title">
                <h1><?php the_field('field_60e2d4c4af374') ?></h1>
                <h2><?php the_field('field_60e2d4c4b2f4a') ?></h2>
            </div>
        </div>
  
        <div id="away-with-the-padding-bottom" class="grey-ish-background section">
            <div class="carousel carousel-main" data-flickity>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4bdf0c') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4c19a5') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4c544b') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4c8ed1') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4cc96b') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4d0403') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4d3ea3') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4d7944') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4db3d0') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4dee67') ?>">
                    <span class="overlay-cell"></span>
                </div>
            </div>

            <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4bdf0c') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4c19a5') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4c544b') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4c8ed1') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4cc96b') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4d0403') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4d3ea3') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4d7944') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4db3d0') ?>">
                    <span class="overlay-cell"></span>
                </div>
                <div class="carousel-cell">
                    <img src="<?php the_field('field_60e2d4c4dee67') ?>">
                    <span class="overlay-cell"></span>
                </div>
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
</html>