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

add_action('woocommerce_after_variations_form', 'variable_fabrics_additional_info');
function variable_fabrics_additional_info(){
  echo '
      <div class="product-addons">
      <div class="product-box">
       <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.54545 14.5455C3.78788 14.5455 3.14394 14.2803 2.61364 13.75C2.08333 13.2197 1.81818 12.5758 1.81818 11.8182H0V1.81818C0 1.31818 0.17803 0.890152 0.534091 0.534091C0.890152 0.17803 1.31818 0 1.81818 0H14.5455V3.63636H17.2727L20 7.27273V11.8182H18.1818C18.1818 12.5758 17.9167 13.2197 17.3864 13.75C16.8561 14.2803 16.2121 14.5455 15.4545 14.5455C14.697 14.5455 14.053 14.2803 13.5227 13.75C12.9924 13.2197 12.7273 12.5758 12.7273 11.8182H7.27273C7.27273 12.5758 7.00758 13.2197 6.47727 13.75C5.94697 14.2803 5.30303 14.5455 4.54545 14.5455ZM4.54545 12.7273C4.80303 12.7273 5.01894 12.6402 5.19318 12.4659C5.36742 12.2917 5.45455 12.0758 5.45455 11.8182C5.45455 11.5606 5.36742 11.3447 5.19318 11.1705C5.01894 10.9962 4.80303 10.9091 4.54545 10.9091C4.28788 10.9091 4.07197 10.9962 3.89773 11.1705C3.72348 11.3447 3.63636 11.5606 3.63636 11.8182C3.63636 12.0758 3.72348 12.2917 3.89773 12.4659C4.07197 12.6402 4.28788 12.7273 4.54545 12.7273ZM15.4545 12.7273C15.7121 12.7273 15.928 12.6402 16.1023 12.4659C16.2765 12.2917 16.3636 12.0758 16.3636 11.8182C16.3636 11.5606 16.2765 11.3447 16.1023 11.1705C15.928 10.9962 15.7121 10.9091 15.4545 10.9091C15.197 10.9091 14.9811 10.9962 14.8068 11.1705C14.6326 11.3447 14.5455 11.5606 14.5455 11.8182C14.5455 12.0758 14.6326 12.2917 14.8068 12.4659C14.9811 12.6402 15.197 12.7273 15.4545 12.7273ZM14.5455 8.18182H18.4091L16.3636 5.45455H14.5455V8.18182Z" fill="#231F20"/>
</svg>
<p class="product-text">Darmowa dostawa od 500 zł</p>
     
      </div>
            <div class="product-box">
       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.25 3C12.9 3 12.6042 2.87917 12.3625 2.6375C12.1208 2.39583 12 2.1 12 1.75C12 1.4 12.1208 1.10417 12.3625 0.8625C12.6042 0.620833 12.9 0.5 13.25 0.5C13.6 0.5 13.8958 0.620833 14.1375 0.8625C14.3792 1.10417 14.5 1.4 14.5 1.75C14.5 2.1 14.3792 2.39583 14.1375 2.6375C13.8958 2.87917 13.6 3 13.25 3ZM13.25 19.5C12.9 19.5 12.6042 19.3792 12.3625 19.1375C12.1208 18.8958 12 18.6 12 18.25C12 17.9 12.1208 17.6042 12.3625 17.3625C12.6042 17.1208 12.9 17 13.25 17C13.6 17 13.8958 17.1208 14.1375 17.3625C14.3792 17.6042 14.5 17.9 14.5 18.25C14.5 18.6 14.3792 18.8958 14.1375 19.1375C13.8958 19.3792 13.6 19.5 13.25 19.5ZM17.25 6.5C16.9 6.5 16.6042 6.37917 16.3625 6.1375C16.1208 5.89583 16 5.6 16 5.25C16 4.9 16.1208 4.60417 16.3625 4.3625C16.6042 4.12083 16.9 4 17.25 4C17.6 4 17.8958 4.12083 18.1375 4.3625C18.3792 4.60417 18.5 4.9 18.5 5.25C18.5 5.6 18.3792 5.89583 18.1375 6.1375C17.8958 6.37917 17.6 6.5 17.25 6.5ZM17.25 16C16.9 16 16.6042 15.8792 16.3625 15.6375C16.1208 15.3958 16 15.1 16 14.75C16 14.4 16.1208 14.1042 16.3625 13.8625C16.6042 13.6208 16.9 13.5 17.25 13.5C17.6 13.5 17.8958 13.6208 18.1375 13.8625C18.3792 14.1042 18.5 14.4 18.5 14.75C18.5 15.1 18.3792 15.3958 18.1375 15.6375C17.8958 15.8792 17.6 16 17.25 16ZM18.75 11.25C18.4 11.25 18.1042 11.1292 17.8625 10.8875C17.6208 10.6458 17.5 10.35 17.5 10C17.5 9.65 17.6208 9.35417 17.8625 9.1125C18.1042 8.87083 18.4 8.75 18.75 8.75C19.1 8.75 19.3958 8.87083 19.6375 9.1125C19.8792 9.35417 20 9.65 20 10C20 10.35 19.8792 10.6458 19.6375 10.8875C19.3958 11.1292 19.1 11.25 18.75 11.25ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0V2C7.76667 2 5.875 2.775 4.325 4.325C2.775 5.875 2 7.76667 2 10C2 12.2333 2.775 14.125 4.325 15.675C5.875 17.225 7.76667 18 10 18V20ZM10 12C9.45 12 8.97917 11.8042 8.5875 11.4125C8.19583 11.0208 8 10.55 8 10C8 9.91667 8.00417 9.82917 8.0125 9.7375C8.02083 9.64583 8.04167 9.55833 8.075 9.475L6 7.4L7.4 6L9.475 8.075C9.54167 8.05833 9.71667 8.03333 10 8C10.55 8 11.0208 8.19583 11.4125 8.5875C11.8042 8.97917 12 9.45 12 10C12 10.55 11.8042 11.0208 11.4125 11.4125C11.0208 11.8042 10.55 12 10 12Z" fill="#231F20"/>
</svg>

<p class="product-text">Czas realizacji - ok. 5 dni roboczych</p>
     
      </div>
  
     
     
      </div>
  
  ';
}

add_filter('woocommerce_enable_order_notes_field', '__return_false');


/*****************************  FRONTEND  ****************************************/

/**************************

Filter to add a VAT field to:
- My Account - Edit Form -- Billing fields
- Checkout - Edit Form - Billing Fields
This function is also reordering the form fields.
***************************/

function add_woocommerce_billing_fields($billing_fields){

  //reorder woo my billing address form fields
  $billing_fields2['billing_first_name'] = $billing_fields['billing_first_name'];
  $billing_fields2['billing_last_name'] = $billing_fields['billing_last_name'];

  $billing_fields2['billing_vat'] = array(
              'type' => 'text',
              'label' =>  __('NIP',  'keyelp-shop-customization' ),
              'class' => array('form-row-wide'),
              'required' => false,
              'clear' => true
  );
      
  $merged_billing_fields =  $billing_fields2 + $billing_fields;


  return $merged_billing_fields;

}

add_filter('woocommerce_billing_fields' , 'add_woocommerce_billing_fields');


/*********
Filters to add VAT when printing billing address on:
- (1) My account 
- (2) Checkout - Order Received (after checkout completion),
+++ Additional filters to format the printed output.
********/

// (1) Printing the Billing Address on My Account

add_filter( 'woocommerce_my_account_my_address_formatted_address', 'njengah_my_account_my_address_formatted_address', 10, 3 );

function njengah_my_account_my_address_formatted_address( $fields, $customer_id, $type ) {

  if ( $type == 'billing' ) {
              $fields['vat'] = get_user_meta( $customer_id, 'billing_vat', true );
  }
  return $fields;
}


// (2) Checkout -- Order Received (printed after having completed checkout)

add_filter( 'woocommerce_order_formatted_billing_address', 'njengah_add_vat_formatted_billing_address', 10, 2 );
    
function njengah_add_vat_formatted_billing_address( $fields, $order ) {

            $fields['vat'] = get_post_meta($order->get_id(), 'billing_vat', true);

            return $fields;

}


// Creating merger VAT variables for printing formatting

add_filter( 'woocommerce_formatted_address_replacements', 'njengah_formatted_address_replacements', 10, 2 );

function njengah_formatted_address_replacements( $address, $args ) {

  $address['{vat}'] = '';
  $address['{vat_upper}']= '';

  if ( ! empty( $args['vat'] ) ) {
              $address['{vat}'] = $args['vat'];
              $address['{vat_upper}'] = strtoupper($args['vat']);
  }

  return $address;

}


//Defining the Spanish formatting to print the address, including VAT.

add_filter( 'woocommerce_localisation_address_formats', 'njengah_localisation_address_format' );

function njengah_localisation_address_format( $formats ) {

  $formats['ES'] = "{name}\n{company}\n{vat_upper}\n{address_1}\n{address_2}\n{postcode} {city}\n{state}\n{country}";

  return $formats;

}


/*****************************  ADMIN USER PROFILE PAGE  ****************************************/

/***************

Filter to add VAT Customer meta fields (user profile field on the billing address grouping)

*****************/

add_filter( 'woocommerce_customer_meta_fields', 'njengah_customer_meta_fields' );

function njengah_customer_meta_fields( $fields ) {

  $fields['billing']['fields']['billing_vat'] = array(

              'label'       => __( 'NIP', 'njengah' )

  );


  return $fields;

}


/***************************  ADMIN ORDER PAGE  ****************************************/


/********* 

Filter to add VAT to the Edit Form on Order --  Admin page

*********/

add_filter( 'woocommerce_admin_billing_fields', 'njengah_admin_billing_fields' );

function njengah_admin_billing_fields( $fields ) {

  $fields['vat'] = array(
              'label' => __( 'NIP', 'njengah' ),
              'show'  => true
  );

  return $fields;

}

/****************

Filter to copy the VAT field from User meta fields to the Order Admin form (after clicking the dedicated button on the admin page)

******************/


add_filter( 'woocommerce_found_customer_details', 'njengah_found_customer_details' );

function njengah_found_customer_details( $customer_data ) {

  $customer_data['billing_vat'] = get_user_meta( $_POST['user_id'], 'billing_vat', true );

  return $customer_data;

}

