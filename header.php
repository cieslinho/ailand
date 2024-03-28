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
 
    <?php wp_head(); ?>

<body <?php body_class();?>>
    <nav class="nav">
       
    </nav>
    <main class="main">
        <?php the_content(); ?>


    </main>