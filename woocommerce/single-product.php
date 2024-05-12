<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

<?php while ( have_posts() ) : ?>
<?php the_post(); ?>

<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		
		 
		 do_action( 'woocommerce_after_main_content' );
		
		
	?>

<section class="section tabs">
	<div class="container">
		<p class="section-title">Dodatkowe informacje</p>
		<div class="tabs">
			<button id="description" class="tabs-btn">Informacje o produkcie <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.9992 12L2.99922 24L0.199219 21.2L9.39922 12L0.199219 2.8L2.99922 3.33897e-08L14.9992 12Z" fill="#231F20"/>
</svg>
</button>
			<div class="tab">
				<?php echo do_shortcode('[acf field="informacje_o_produkcie"]'); ?>
			</div>
			<button id="dimensions" class="tabs-btn">Wymiary <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.9992 12L2.99922 24L0.199219 21.2L9.39922 12L0.199219 2.8L2.99922 3.33897e-08L14.9992 12Z" fill="#231F20"/>
</svg>
</button>
			<div class="tab">
				<?php echo do_shortcode('[acf field="wymiary"]'); ?>
			</div>
			<button id="frezowanie" class="tabs-btn">Frezowanie <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.9992 12L2.99922 24L0.199219 21.2L9.39922 12L0.199219 2.8L2.99922 3.33897e-08L14.9992 12Z" fill="#231F20"/>
</svg>
</button>
			<div class="tab">
				<?php echo do_shortcode('[acf field="frezowanie"]'); ?>
			</div>
			<button id="reviews" class="tabs-btn">Opinie <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.9992 12L2.99922 24L0.199219 21.2L9.39922 12L0.199219 2.8L2.99922 3.33897e-08L14.9992 12Z" fill="#231F20"/>
</svg>
</button>
			<div class="tab">
			<?php echo do_shortcode('[cusrev_all_reviews]'); ?>
			</div>
			
		</div>
	</div>
</section>




<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */