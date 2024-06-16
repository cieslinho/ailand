<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );



/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */



    /**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */



    do_action( 'woocommerce_before_main_content' );

    
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_template_part' );
	?>
	<?php 
		global $wp_query;
		$term = $wp_query->get_queried_object();
		if ( $term && property_exists( $term, 'term_id' ) ) {
			$term_id = $term->term_id;
			$customHeadingH1 = get_field('naglowek_h1', 'product_cat_' . $term_id);
		}
	?>

    

	<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<?php
			if(!empty($customHeadingH1)){ ?>
				<h1 class="woocommerce-products-header__title page-title section-title"><?php echo $customHeadingH1; ?></h1>
			<?php } else { ?>
				<h1 class="woocommerce-products-header__title page-title section-title"><?php woocommerce_page_title(); ?></h1>
		<?php }
	endif; ?>
	
			<?php
			/**
			 * 
			 * 
			 * Hook: woocommerce_archive_description.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			
			?>
		</header>
	<?php
	do_action( 'woocommerce_archive_description' );
	do_action( 'woocommerce_before_shop_loop' );
	

	
	

		function myfunction() {
	?>
		
<div class='shop-wrapper'>
    <div class="filters">
    <?php echo do_shortcode('[wpf-filters id=1]');?>
	<?php echo do_shortcode('[wpf-filters id=2]');?>
    </div>
	
	<?php woocommerce_product_loop_start();

if ( wc_get_loop_prop( 'total' ) ) {
		
	while ( have_posts() ) {
	
		the_post();

		
		do_action( 'woocommerce_shop_loop' );

		wc_get_template_part( 'content', 'product' );

		
	}
}  ?>


</div>
<div class="shop-pagination">	<? do_action( 'woocommerce_after_shop_loop' ); ?> </div>
<?php   	  return;
	  }
	
	  myfunction();

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

global $wp_query;
	$term = $wp_query->get_queried_object();

	if ( $term && property_exists( $term, 'term_id' ) ) {
		if ( $wp_query->get( 'paged' ) <= 1 ) {
			$term_id = $term->term_id;
			$customDesc = get_field( 'opis_dolny', 'product_cat_' . $term_id );
			if ( $customDesc ) {
				echo '<div class="term-description"><div class="ek-term-desc-container">' . $customDesc . '</div></div>';
			}
		}
	}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );


?>
</div>
<?php
get_footer( 'shop' );
?>
</div>
</div>
