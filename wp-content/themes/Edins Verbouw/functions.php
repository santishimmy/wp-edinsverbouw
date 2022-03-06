<?php

function my_handle_quote_form_submit() {

    if(isset($_POST['submit'])) {
        $firstname = $_POST['voornaam'];
        $lastname = $_POST['achternaam'];
        $phone = $_POST['telefoonnummer'];
        $email = $_POST['emailadress'];
        $description = $_POST['omschrijving'];
    
    
        $recipient = "info@edinsverbouw.nl";
        $subject = "Aanvraag Offerte";
        $message= "Van: $firstname $lastname \n \n Met Telefoonummer: $phone \n \n Bericht: $description";
        $mailheader = $email;
    
    
        mail($recipient, $subject, $message, $mailheader);
        
        echo "<h5 style='text-align:center; font-size:2rem; color: rgb(243, 206, 90); font-family: sans-serif;'>Wij hebben uw aanvraag binnen!</h5>"; 
        echo "<h6 style='text-align:center; font-size:1.35rem; color: rgb(255, 255, 255); font-family: sans-serif;'>U zult spoedig uw offerte op de mail binnenkrijgen</h6>";
    
    } else {
        echo "<h5' style='text-align:center; font-size:2rem; color: rgb(243, 206, 90); font-family: sans-serif;'>Er heeft zich een technische fout voorgedaan...</h5>";
        echo "<h6 style='text-align:center; font-size:1.35rem; color: rgb(255, 255, 255); font-family: sans-serif;'>Probeer het alstublieft later opnieuw</h6>";
        
        $destination = "info@edinsverbouw.nl";
        $root = "hosting:draftex:edinsverbouw&renovatie";
        $log = "Error / Foutmelding - Offerte Formulier";
        $error = "POST Error - _POST krijgt geen gegevens binnen bij form.submit(); [Mogelijke Fout: Syntax, Depreciatie, Overbelasting]";
    
        mail($destination, $log, $error, $root);
    }

}

// Use your hidden "action" field value when adding the actions
add_action( 'admin_post_nopriv_my_quote_form', 'my_handle_quote_form_submit' );
add_action( 'admin_post_my_quote_form', 'my_handle_quote_form_submit' );





















function my_handle_contact_form_submit() {

    if(isset($_POST['submit'])) {
        $firstname = $_POST['voornaam'];
        $lastname = $_POST['achternaam'];
        $phone = $_POST['telefoonnummer'];
        $email = $_POST['emailadress'];
        $description = $_POST['omschrijving'];
    
    
        $recipient = "info@edinsverbouw.nl";
        $subject = "Bericht van klant (Contactformulier)";
        $message= "Van: $firstname $lastname \n \n Met Telefoonummer: $phone \n \n Bericht: $description";
        $mailheader = $email;
    
    
        mail($recipient, $subject, $message, $mailheader);
    
        echo "<h3 style='text-align:center; font-size:2rem; color: rgb(0, 140, 149); font-family: sans-serif;  margin: 0;'>Wij hebben uw bericht ontvangen!</h3><br>";
        echo "<h4 style='text-align:center; font-size:1.35rem; color: rgb(41, 50, 61); font-family: sans-serif;  margin: 0;'>U zult spoedig van ons horen</h4>";
    
    } else {
        echo "<h3 style='text-align:center; font-size:2rem; color: rgb(0, 140, 149); font-family: sans-serif;  margin: 0;'>Er heeft zich een technische fout voorgedaan...</h3><br>";
        echo "<h4 style='text-align:center; font-size:1.35rem; color: rgb(41, 50, 61); font-family: sans-serif;  margin: 0;'>Probeer het alstublieft later opnieuw</h4>";
        
        $destination = "info@edinsverbouw.nl";
        $root = "hosting:draftex:edinsverbouw&renovatie";
        $log = "Error / Foutmelding - Contact Formulier";
        $error = "POST Error - _POST krijgt geen gegevens binnen bij form.submit(); [Mogelijke Fout: Syntax, Depreciatie, Overbelasting]";
    
        mail($destination, $log, $error, $root);
    }

}

// Use your hidden "action" field value when adding the actions
add_action( 'admin_post_nopriv_my_contact_form', 'my_handle_contact_form_submit' );
add_action( 'admin_post_my_contact_form', 'my_handle_contact_form_submit' );





































function my_handle_brochure_form_submit() {

    if(isset($_POST['submit'])) {
        $email = $_POST['email-voor-brochure'];
    
        $recipient = "vajzatezeza@gmail.com";
        $subject = "Bericht van klant (Brochure aanvraag)";
        $message= "Emailadress: $email heeft een brochure aanvraag gedaan";
        $mailheader = $email;
    
        mail($recipient, $subject, $message, $mailheader);
    
        echo "<h5 style='text-align:center; font-size:2rem; color: rgb(243, 206, 90); font-family: sans-serif; margin: 0;'>Dankuwel!</h5><br>";
        echo "<h6 style='text-align:center; font-size:1.35rem; color: rgb(255, 255, 255); font-family: sans-serif; margin: 0;'>U zult binnenkort een mail ontvangen</h6>";
    
    } else {
        echo "<h5 style='text-align:center; font-size:2rem; color: rgb(243, 206, 90); font-family: sans-serif; margin: 0;'>Er gaat iets fout...</h5><br>";
        echo "<h6 style='text-align:center; font-size:1.35rem; color: rgb(255, 255, 255); font-family: sans-serif; margin: 0;'>Probeer het alstublieft later opnieuw</h6>";
        
        $destination = "vajzatezeza@gmail.com";
        $root = "hosting:draftex:edinsverbouw&renovatie";
        $log = "Error / Foutmelding - Brochure Aanvraag";
        $error = "POST Error - _POST krijgt geen gegevens binnen bij form.submit(); [Mogelijke Fout: Syntax, Depreciatie, Overbelasting]";
    
        mail($destination, $log, $error, $root);
    }

}

// Use your hidden "action" field value when adding the actions
add_action( 'admin_post_nopriv_my_brochure_form', 'my_handle_brochure_form_submit' );
add_action( 'admin_post_my_brochure_form', 'my_handle_brochure_form_submit' );

?>
