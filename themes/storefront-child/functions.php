<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

add_action( 'get_header', 'remove_storefront_sidebar' );

function remove_storefront_sidebar() {
	if ( !is_shop() and !is_product_category() ) {
		remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
	}
}

add_filter( 'woocommerce_get_checkout_url', 'my_change_checkout_url', 30 );

function my_change_checkout_url( $url ) {
   $url = "http://localhost/RoomBids/preferences";
   return $url;
}

function woocommerce_button_proceed_to_checkout() {
 $checkout_url = WC()->cart->get_checkout_url(); ?>
 <a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="checkout-button button alt wc-forward">
 <?php esc_html_e( 'Proceed to Preference Forms', 'woocommerce' ); ?>
 </a>
 <?php
}

/**
*  @param $user
*  @author Webkul
*/

add_action( 'admin_post_nopriv_cchadwell_11231996_roomsform', 'cchadwell_custom_user_profile_fields');
add_action( 'admin_post_cchadwell_11231996_roomsform', 'cchadwell_custom_user_profile_fields');

function cchadwell_custom_user_profile_fields( $user )
{
  #Roomates
  #Doubles
  $cchadwell_11231996_droomate_name = $_POST['cchadwell_11231996_droomate_name'];
  $cchadwell_11231996_droomate_id = $_POST['cchadwell_11231996_droomate_id'];
  #Triples
  $cchadwell_11231996_troomate1_name = $_POST['cchadwell_11231996_troomate1_name'];
  $cchadwell_11231996_troomate1_id = $_POST['cchadwell_11231996_troomate1_id'];
  $cchadwell_11231996_troomate2_name = $_POST['cchadwell_11231996_troomate2_name'];
  $cchadwell_11231996_troomate2_id = $_POST['cchadwell_11231996_troomate2_id'];

  #Preferences
  #Rooms
  $cchadwell_11231996_r1 = $_POST['cchadwell_11231996_r1'];
  $cchadwell_11231996_r2 = $_POST['cchadwell_11231996_r2'];
  $cchadwell_11231996_r3 = $_POST['cchadwell_11231996_r3'];
  $cchadwell_11231996_r4 = $_POST['cchadwell_11231996_r4'];
  $cchadwell_11231996_r5 = $_POST['cchadwell_11231996_r5'];
  $cchadwell_11231996_r6 = $_POST['cchadwell_11231996_r6'];
  $cchadwell_11231996_r7 = $_POST['cchadwell_11231996_r7'];
  $cchadwell_11231996_r8 = $_POST['cchadwell_11231996_r8'];
  $cchadwell_11231996_r9 = $_POST['cchadwell_11231996_r9'];
  $cchadwell_11231996_r10 = $_POST['cchadwell_11231996_r10'];

  #Roomates
  #Doubles
  update_user_meta( get_current_user_id(), 'doubles_pref_name', $cchadwell_11231996_droomate_name );
  update_user_meta( get_current_user_id(), 'doubles_pref_id', $cchadwell_11231996_droomate_id );
  #Triples
  update_user_meta( get_current_user_id(), 'triple1_pref_name', $cchadwell_11231996_troomate1_name );
  update_user_meta( get_current_user_id(), 'triple1_pref_id', $cchadwell_11231996_troomate1_id );
  update_user_meta( get_current_user_id(), 'triple2_pref_name', $cchadwell_11231996_troomate2_name );
  update_user_meta( get_current_user_id(), 'triple2_pref_id', $cchadwell_11231996_troomate2_id );

  #Preferences
  #Rooms
  update_user_meta( get_current_user_id(), 'r1_pref', $cchadwell_11231996_r1 );
  update_user_meta( get_current_user_id(), 'r2_pref', $cchadwell_11231996_r2 );
  update_user_meta( get_current_user_id(), 'r3_pref', $cchadwell_11231996_r3 );
  update_user_meta( get_current_user_id(), 'r4_pref', $cchadwell_11231996_r4 );
  update_user_meta( get_current_user_id(), 'r5_pref', $cchadwell_11231996_r5 );
  update_user_meta( get_current_user_id(), 'r6_pref', $cchadwell_11231996_r6 );
  update_user_meta( get_current_user_id(), 'r7_pref', $cchadwell_11231996_r7 );
  update_user_meta( get_current_user_id(), 'r8_pref', $cchadwell_11231996_r8 );
  update_user_meta( get_current_user_id(), 'r9_pref', $cchadwell_11231996_r9 );
  update_user_meta( get_current_user_id(), 'r10_pref', $cchadwell_11231996_r10 );


  echo esc_url(get_home_url());
}

#add_action( 'edit_user_profile', 'cchadwell_custom_user_profile_fields' );
#add_action( 'show_user_profile', 'cchadwell_custom_user_profile_fields' );

?>
