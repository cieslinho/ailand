<?php
/**
 * @package ailand Opole
 */
?>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__wrapper">
                <a href="/" class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="">
                </a>
            </div>
            <div class="footer__wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path
                        d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12Z" />
                </svg>
                <div class="footer__phone">
                    <a href="telto:+48 664 918 257" class="footer__link">+48 664 918 257</a>
                    <a href="telto:+48 666 093 211" class="footer__link">+48 666 093 211</a>
                </div>
            </div>
            <div class="footer__wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path
                        d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280 320-200v-80L480-520 160-720v80l320 200Z" />
                </svg>
                <a href="mailto:opole@al-land.com.pl" class="footer__link">opole@al-land.com.pl</a>
            </div>
            <div class="footer__wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path
                        d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 400Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Z" />
                </svg>
                <p class="footer__link">Józefa Cygana 4, 45-131, Opole</p>
            </div>
            <div class="footer__wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path
                        d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z" />
                </svg>
                <p class="footer__link">Pn. - Pt. 7:30 - 15:30</p>
            </div>
        </div>
        <div class="footer__middle">
            <div class="footer__box">
                <p class="footer__title">Informacje</p>
                <?php wp_nav_menu(
            array(
                'theme_location' => 'ailand_footer_info_menu',
                'menu_class' => 'footer__menu',
                'container' => 'false',
                'menu_id' =>  'footer-menu',
                'add_a_class' => 'footer__link'
            )
        );
    ?>
            </div>
            <div class="footer__box">


            </div>

            <div class="footer__box">
                <p class="footer__title">Sklep internetowy</p>
                <?php wp_nav_menu(
            array(
                'theme_location' => 'ailand_footer_shop_menu',
                'menu_class' => 'footer__menu',
                'container' => 'false',
                'menu_id' =>  'footer-menu',
                'add_a_class' => 'footer__link'
            )
        );
    ?>
            </div>
            <div class="footer__box">

            </div>
            <div class="footer__box">
                <p class="footer__title">Tworzywa sztuczne</p>
                <?php wp_nav_menu(
            array(
                'theme_location' => 'ailand_footer_plastics_menu',
                'menu_class' => 'footer__menu',
                'container' => 'false',
                'menu_id' =>  'footer-menu',
                'add_a_class' => 'footer__link'
            )
        );
    ?>
            </div>
        </div>
        <div class="footer__bottom"></div>
    </div>
</footer>
<?php wp_footer(); ?>


</body>

</html>