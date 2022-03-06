<!DOCTYPE html>

<?php /* Template Name: Diensten */ ?>

<html lang="nl">
    <head>
        <title>Edin's Verbouw & Renovatie</title>
        
        <!-- Meta Tags (SEO and all that) -->
        <meta name="description" content="<?php the_field('field_60e21509e5c3f'); ?>">
        <meta name="keywords" content="<?php the_field('field_60e214f3e5c3e'); ?>">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="public">
        <link rel="cannonical" href="https://edinsverbouw.nl/diensten">

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
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/diensten.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/offerte-form.js"></script>

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
                <a href="<?php echo site_url(); ?>/diensten#offerte" id="special-button" class="special filled-button">Offerte Ontvangen</a>
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
                <h1><?php the_field('field_60e200d53824e');  ?></h1>
                <h2><?php the_field('field_60e200f63824f');  ?></h2>
                <a href="<?php echo site_url(); ?>/diensten#offerte" class="remove-margin-left special filled-button">Offerte Aanvragen</a>
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
            <div class="article-text-right">
                <h3><?php the_field('field_60e20117bac42');  ?></h3>
                <h4><?php the_field('field_60e20140bac43');  ?></h4>
                <p><?php the_field('field_60e20168bac44');  ?></p>
            </div>
            
            <div class="animations-container">
                <div class="center-animations-left">
                    <div class="tools-icon"><i class="fas fa-tools"></i></div>
                    <div class="toolbox-icon"><i class="fas fa-toolbox"></i></div>
                </div>
            </div>
        </div>

        <div class="small-section">
            <div id="hide-on-phone" class="animations-container">
                <div class="center-animations-right">
                    <div class="fill-icon"><i class="fas fa-fill"></i></div>
                    <div class="roller-icon"><i class="fas fa-paint-roller"></i></div>
                </div>
            </div>

            <div class="article-text-left">
                <h3><?php the_field('field_60e203b3c5dbd');  ?></h3>
                <h4><?php the_field('field_60e203c9c5dbe');  ?></h4>
                <p><?php the_field('field_60e203e1c5dbf');  ?></p>
            </div>

            <div id="show-on-phone" class="animations-container">
                <div class="center-animations-left">
                    <div class="fill-icon"><i class="fas fa-fill"></i></div>
                    <div class="roller-icon"><i class="fas fa-paint-roller"></i></div>
                </div>
            </div>
        </div>

        <div class="grey-ish-background small-section">
            <div class="article-text-left">
                <h3><?php the_field('field_60e2056ae6306');  ?></h3>
                <h4><?php the_field('field_60e20588e6307');  ?></h4>
                <ul><?php the_field('field_60e205b5e6308');  ?></ul>
            </div>

            <div class="article-text-left">
                <h3><?php the_field('field_60e2064dacecd');  ?></h3>
                <h4><?php the_field('field_60e20668acece');  ?></h4>
                <p><?php the_field('field_60e2067aacecf');  ?></p>
                <a href="<?php echo site_url(); ?>/contact#contact" class="remove-margin-left filled-button">Contact</a>
            </div>
        </div>

        <div class="dark-sand-background section">
            <div class="section-title">
                <h1>Vraag offerte aan</h1>
            </div>

            <div class="article-text-left">
                <h5>Geheel Vrijblijvend</h5>
                <h6>Binnen twee dagen ontvangt u uw offerte en weet u waar u aan toe bent</h6>
            </div>
            
            <div id="offerte" class="article-text-left">
                <form id="offerte-formulier" name="offerte" method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" target="confirmation-frame">
                    <input type="hidden" name="action" value="my_quote_form">

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
                        <textarea rows="9" name="omschrijving" placeholder="Beschrijf zo duidelijk mogelijk wat uw wensen zijn" required></textarea>
                    </label>

                    <div class="form-buttons">
                        <label>
                            <input id="submit" form="offerte-formulier" type="submit" class="remove-margin-left remove-margin-right filled-button" name="submit" value="Indienen">
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