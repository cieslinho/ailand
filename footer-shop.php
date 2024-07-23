<?php
/**
 * @package ailand Opole
 */
?>
<footer class="footer shop">
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
                    <a href="telto:+48 535 078 981" class="footer__link">+48 535 078 981</a>
                    <a href="telto:+48 531 560 280" class="footer__link">+48 531 560 280</a>
                </div>
            </div>
            <div class="footer__wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path
                        d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280 320-200v-80L480-520 160-720v80l320 200Z" />
                </svg>
                <a href="mailto:sklep@al-land.com.pl" class="footer__link">sklep@al-land.com.pl</a>
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