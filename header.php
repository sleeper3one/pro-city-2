<script>window.$czater = {tok: "8a6f804b3690f0592a3f17ed980a9df5f16bacd8", domain: "https://www.czater.pl/", login: undefined, email: undefined};</script><script src="https://www.chater.biz/static/685/assets/modules/chat/js/chat.js" async></script>
<html xmlns="http://www.w3.org/1999/xhtml">

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    </head>

    <body>

    <header>
        <div class="top-bar">
            <span class="top-bar-span">ZAPYTAJ O WYCENĘ:</span>
            <span class="top-bar-span">
                <a href="mailto:biuro@pro-city.pl">
                    <img src="http://localhost/procity/wp-content/themes/prosleepy/images/mail.svg" alt="Napisz do nas w sprawie wyceny. Oto nasz adres mailowy." class="no-border"> biuro@pro-city.pl</a>
            </span>
            
            <span class="top-bar-span">
                <a href="tel:+48531717818">
                    <img src="http://localhost/procity/wp-content/themes/prosleepy/images/mobile.svg" alt="Zadzwoń do nas w sprawie wyceny. Oto nasz numer komórkowy." class="no-border"> + 48 531-717-818</a>
            </span>
            
            <span class="top-bar-span">
                <a href="tel:+48717345504">
                    <img src="http://localhost/procity/wp-content/themes/prosleepy/images/phone.svg" alt="Napisz do nas w sprawie wyceny.Oto nasz numer stacjonarny." class="no-border"> + 48 71 734-55-04</a>
            </span>
        </div>

        <div class="bar-image">
            <img src="http://localhost/procity/wp-content/themes/prosleepy/images/bar-image.jpg" alt="Pro-City - Mała Architektura Miejska"  class="no-border">
        </div>

        <div class="low-bar">
            
            <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary'
                    ) );
            ?>
        </div>    

        <div id="dropdown">
            <button id="myBtn" class="dropbtn">MENU</button>
                <div id="myDropdown" class="dropdown-content">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </div>
        </div>
         

        <div class="crumb">
            <?php breadcrumbs(); ?>
        </div>

        <div id="facebook_slider_widget" style="display: none">
            <script type="text/javascript" src="http://webfrik.pl/widget/facebook_slider.html?fb_url=https://www.facebook.com/gemma.wroclaw&amp;fb_width=290&amp;fb_height=590&amp;fb_faces=true&amp;fb_stream=true&amp;fb_header=true&amp;fb_border=true&amp;fb_theme=light&amp;chx=787&amp;speed=SLOW&amp;fb_pic=logo&amp;position=LEFT">
            </script>
	    </div>

        <script>
            document.getElementById("myBtn").onclick = function() {myFunction()};
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
	        }
        </script>

    </header>
        