<!DOCTYPE html>

<?php /* Template Name: Contact */ ?>

<html lang="nl">
    <head>
        <title>Edin's Verbouw & Renovatie</title>
        <!-- Meta Tags (SEO and all that) -->
        <meta name="description" content="<?php the_field('field_60e21c52c1f54'); ?>">
        <meta name="keywords" content="<?php the_field('field_60e21c45c1f53'); ?>">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="public">
        <link rel="cannonical" href="https://edinsverbouw.nl/contact">

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
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/contact.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/contact-form.js"></script>

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
                <a href="<?php echo site_url(); ?>/contact" class="transparant-button">Contact</a>
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
                <h1><?php the_field('field_60e21ac4ef4d1'); ?></h1>
                <h2><?php the_field('field_60e21ae9ef4d2'); ?></h2>
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
                    <a href="<?php echo site_url(); ?>/contact" class="transparant-button">Contact</a>
                </div>

                <div class="remove-padding-top nav-item-mobile">
                    <a href="<?php echo site_url(); ?>/diensten#offerte" class="filled-button">Offerte Aanvragen</a>
                </div>
            </div>
        </div>

       <!-- Posts, articles, content and all that -->

        <div id="first-section" class="section">
        <div class="section-title">
                <h1>Contact</h1>
            </div>

            <div class="article-text-left">
                <h2>Edin's Verbouw & Renovatie</h2>
                <h3>Onze Gegevens</h3>
                <h4>Bezoekadress</h4>
                <p><?php the_field('field_60e21b73900fb'); ?></p>

                <h4>Contactgegevens</h4>
                <ul><?php the_field('field_60e21baa900fc'); ?></ul>

                <h4>Bedrijfsgegevens</h4>
                <ul><?php the_field('field_60e21bc8900fd'); ?></ul>
            </div>
            
            <div id="contact" class="article-text-centered">
                <h2>Contact Formulier</h2><br><br>
                <form id="contact-formulier" name="contact" method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" target="confirmation-frame">
                    <input type="hidden" name="action" value="my_contact_form">

                   <label>
                        <input type="text" name="voornaam" placeholder="Voornaam" required>
                   </label> 

                   <label>
                        <input type="text" name="achternaam" placeholder="Achternaam" required>
                   </label> 

                   <label>
                        <input type="email" name="emailadress" placeholder="Emailadress" required>
                   </label> 

                   <label>
                        <input type="number" name="telefoonnummer" placeholder="Telefoonnummer" required>
                   </label>

                    <label>
                        <textarea rows="9" name="omschrijving" placeholder="Waar kunnen we u mee van dienst zijn?" required></textarea>
                    </label>

                    <div class="form-buttons">
                        <label>
                            <input id="submit" form="contact-formulier" type="submit" class="remove-margin-left remove-margin-right filled-button" name="submit" value="Verzenden">
                        </label>

                        <label>
                            <input type="submit" class="remove-margin-left remove-margin-right fake-button" name="submit" value="Vul het formulier in" disabled>
                        </label>

                        <i class="fas fa-sync-alt"></i>
                    </div>
                </form>
                <iframe name="confirmation-frame"></iframe>
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