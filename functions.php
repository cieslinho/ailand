<?php
/**
 * @package ailand Opole
 */

if ( ! defined( '_S_VERSION' ) ) {
  define( 'S_VERSION', '1.0.0' );
}


function ailand_scripts() {
  /**
   *  Main styles 
  */
  wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [], false, 'all' );
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/script-min.js', [], filemtime( get_template_directory() . '/assets/js/script-min.js' ), true );
  
  wp_enqueue_style( 'main-css' );
	wp_enqueue_script( 'main-js' );
}
add_action( 'wp_enqueue_scripts', 'ailand_scripts');

/**
 * Add admin styles and scripts
 */
function ailand_admin_style() {
	wp_enqueue_style( 'main-admin-style', get_template_directory_uri() . '/assets/css/admin.css', [], false, 'all' );
}
add_action( 'admin_enqueue_scripts', 'ailand_admin_style' );


function ailand_config(){
  register_nav_menus(
    array(
  'ailand_main_menu' => 'ailand Main Menu',
  'ailand_mobile_menu' => 'ailand Mobile Menu',
  'ailand_footer_info_menu' => 'ailand Footer Info Menu',
  'ailand_footer_shop_menu' => 'ailand Footer Shop Menu',
  'ailand_footer_plastics_menu' => 'ailand Footer Plastics Menu',
    )
  );
  add_theme_support('woocommerce', array(
    'thumbnails_image_width' => 300,
    'single_image_width' => 800,
    'product_grid' => array(
      'default_rows' => 10,
      'min_rows' => 1,
      'max_rows' => 10,
      'default_columns' => 1,
      'min_columns' => 1,
      'max_columns' => 5
    )
  ));
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
}


add_action('after_setup_theme', 'ailand_config', 0);
add_theme_support( 'title-tag' );

  


  function change_excerpt($excerpt) {
    return substr($excerpt, 0, 150) . '...';
  }
  
  add_filter('the_excerpt', 'change_excerpt');

  function trim_text($input, $length) {

    // If the text is already shorter than the max length, then just return unedited text.
    if (strlen($input) <= $length) {
      return $input;
    }
    
    // Find the last space (between words we're assuming) after the max length.
    $last_space = strrpos(substr($input, 0, $length), ' ');
    // Trim
    $trimmed_text = substr($input, 0, $last_space);
    // Add ellipsis.
    $trimmed_text .= '...';
    
    return $trimmed_text;
    }
  
    function li_menu_class($classes, $item, $args) {
      if($args->theme_location == 'ailand_main_menu') {
        $classes[] = 'nav__item';
      }
      if($args->theme_location == 'ailand_mobile_menu') {
        $classes[] = 'nav__item';
      }
      if($args->theme_location == 'ailand_footer_info_menu') {
        $classes[] = 'footer__item';
      }
      return $classes;
    }
    add_filter('nav_menu_css_class','li_menu_class',1,3);


    function add_class_on_a_tag_first($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
return $classes;
}


add_filter('nav_menu_link_attributes', 'add_class_on_a_tag_first', 1, 3);
    function add_class_on_a_tag($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
return $classes;
}

  
function custom_breadcrumb() {
	global $post;
	if ( ! is_home() ) {
		echo '<a class="breadcrumbs-parent" href="' . site_url() . '">Strona Główna</a> > ';
		if ( is_category() || is_single() ) {
			the_category( ' / ' );
			if ( is_single() ) {
				echo ' / ';
				the_title();
			}
		} elseif ( is_page() ) {
			if ( $post->post_parent ) {
				$anc   = get_post_ancestors( $post->ID );
				$title = get_the_title();
				foreach ( $anc as $ancestor ) {
					$output = '<a class="breadcrumbs-parent" href="' . get_permalink( $ancestor ) . '" title="' . get_the_title( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a> > ';
				}
				echo $output;
				echo $title;
			} else {
				echo '<p class="breadcrumbs-active">' . get_the_title() . '</p>';
			}
		}
	}
}

function enable_svg_upload( $upload_mimes ) {



  $upload_mimes['svg'] = 'image/svg+xml';



  $upload_mimes['svgz'] = 'image/svg+xml';



  return $upload_mimes;


}




add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );


add_action( 'woocommerce_after_order_notes', 'nip_checkout_field' );

function nip_checkout_field( $checkout ) {

    echo '<div id="nip_checkout_field"><h2>' . __('Dane do faktury') . '</h2>';

    woocommerce_form_field( 'nip', array(
        'type'          => 'text',
        'class'         => array('nip-class form-row-wide'),
        'label'         => __('Numer NIP'),
        'placeholder'   => __('Wprowadź numer NIP'),
        ), $checkout->get_value( 'nip' ));

    echo '</div>';
}

add_action( 'woocommerce_checkout_update_order_meta', 'nip_checkout_field_update_order_meta' );

function nip_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['nip'] ) ) {
        update_post_meta( $order_id, 'NIP', sanitize_text_field( $_POST['nip'] ) );
    }
}

add_action( 'woocommerce_admin_order_data_after_billing_address', 'nip_checkout_field_display_admin_order_meta', 10, 1 );

function nip_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('NIP').':</strong> ' . get_post_meta( $order->id, 'NIP', true ) . '</p>';
}



add_filter( 'woocommerce_product_tabs', '__return_empty_array', 98 );

add_shortcode( 'product_reviews', 'product_reviews_shortcode' );

function product_reviews_shortcode( $atts ) {
    
   if ( empty( $atts ) ) return '';
 
   if ( ! isset( $atts['id'] ) ) return '';
       
   $comments = get_comments( 'post_id=' . $atts['id'] );
   
   $total_comments = count( $comments );
   
   if ( ! $comments ) return '';
   
   $total_rating = 0;

   $html .= '<div class="woocommerce-tabs"><div id="reviews"><ol class="commentlist">';
    
   foreach ( $comments as $comment ) {   
      $rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
      $total_rating = $total_rating + $rating;
      $html .= '<li class="review">';
      $html .= get_avatar( $comment, '60' );
      $html .= '<div class="comment-text">';
      if ( $rating ) $html .= wc_get_rating_html( $rating );
      $html .= '<p class="meta"><strong class="woocommerce-review__author">';
      $html .= get_comment_author( $comment );
      $html .= '</strong></p>';
      $html .= '<div class="description">';
      $html .= $comment->comment_content;
      $html .= '</div></div>';
      $html .= '</li>';
   }
    
   $html .= '</ol></div></div>';
    
    if( $total_rating > 0 ) {
       $total_average = $total_rating / $total_comments;
       $total_average =  number_format($total_average, 2, '.', '');
    }

   return $html;
}


function acf_wysiwyg_remove_wpautop() {
  remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');