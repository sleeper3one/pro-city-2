<?php wp_footer(); ?>
<div class="foot">
    <div class="social-links">
        <a href="mailto:biuro@pro-city.pl">
            <img src="http://localhost/procity/wp-content/themes/prosleepy/images/mail.svg" alt="Napisz do nas w sprawie wyceny. Oto nasz adres mailowy."></a>
        <a href="tel:+48531717818">
            <img src="http://localhost/procity/wp-content/themes/prosleepy/images/mobile.svg" alt="Zadzwoń do nas w sprawie wyceny. Oto nasz numer komórkowy."></a>
        <a href="tel:+48717345504">
            <img src="http://localhost/procity/wp-content/themes/prosleepy/images/phone.svg" alt="Napisz do nas w sprawie wyceny.Oto nasz numer stacjonarny."></a>
        <a href="https://fb.com/gemma.wroclaw" target="_blank">
            <img src="http://localhost/procity/wp-content/themes/prosleepy/images/fb.svg" alt="Odwiedź nas na Facebook`u!"></a>
    </div>

    <div class="foot-info">

    <div class="product-menu">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'left'
            ) );
        ?>
    </div>

    <div class="main-menu">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary'
            ) );
        ?>
    </div>

    <div class="address">
        <b>GEMMA</b><br>
        ul. Powstańców Śląskich 58C<br>
        53-333 Wrocław <br>
        <br>
        NIP: 899-287-58-80 <br>
        Nr konta: mBank <br> 
        70 1140 2004 0000 3002 7971 8294
    </div>

    </div>


    <div class="copyrights">
        <span>© Copyright 2008 - 2020 by GEMMA</span>
    </div>
</div>
    </body>
</html>