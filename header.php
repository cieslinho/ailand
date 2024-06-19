<?php
/**
 * @package ailand Opole
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>

<body <?php body_class();?>>
<nav class="nav nav--mobile">
    <div class="nav__navbar">
    <div class="nav__top">
<a href="/" class="nav__logo">   
<img class="logo-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-mobile.png" alt="AL-LAND Opole Logo">
</a>
</div> 
        <div class="nav__buttons">
            <button class="nav__btn">MENU</button>
            <button class="nav__btn nav__close">Zamknij X</button>
        </div>
    <?php wp_nav_menu(
            array(
                'theme_location' => 'ailand_mobile_menu',
                'menu_class' => 'nav__mobile',
                'container' => 'false',
                'menu_id' =>  'menu-mobile',
                'add_li_class'  => 'nav__item',
                'add_a_class' => 'nav__link'
            )
        );
    ?>    
    
    </div>
    <div class="nav__bottom">
        <a class="nav__bottom-item" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/start.svg" alt="">
            Start
        </a>
        <a class="nav__bottom-item" href="/sklep/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/shop.svg" alt="">
            E-sklep
        </a>
        <a class="nav__bottom-item" href="/koszyk/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cart.svg" alt="">
            Koszyk
        </a>
        <a class="nav__bottom-item" href="/moje-konto/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/account.svg" alt="">
            Konto
        </a>
        <btn class="nav__bottom-item nav__open">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/menu.svg" alt="">
            Menu
        </btn>
    </div>
</nav>
    <nav class="nav nav--desktop">
        <div class="nav__navbar">
        <a href="/" class="nav__logo">
            <img class="logo-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="AL-LAND Opole Logo">
            
        </a>
    <?php wp_nav_menu(
            array(
                'theme_location' => 'ailand_main_menu',
                'menu_class' => 'nav__desktop',
                'container' => 'false',
                'menu_id' =>  'menu',
                'add_li_class'  => 'nav__item',
                'add_a_class' => 'nav__link'
            )
        );
    ?>    
    <div class="nav__right">
        <a href="/koszyk/" class="nav__link nav__shop">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM208-800h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Z"/></svg>
            Koszyk</a>
        <a href="/moje-konto/" class="nav__link nav__shop">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Z"/></svg>
            Zaloguj się</a>
    </div>
    </div>
    </nav>
    
    <main class="main">
        <?php the_content(); ?>


    </main>