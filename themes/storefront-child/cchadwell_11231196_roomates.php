<?php

get_header();

<h1>Your room preferences have been recorded</h1>
<p>You can resubmit as many times as you would like before the deadline. </p>
function get_current_user_id() {
    if ( ! function_exists( 'wp_get_current_user' ) )
        return 0;
    $user = wp_get_current_user();
    return ( isset( $user->ID ) ? (int) $user->ID : 0 );
}
    $cchadwell_11231996_clone_name = $_POST['cchadwell_11231996_clone_name'];
    update_user_meta( get_current_user_id(), 'cchadwell_11231996_clone_name', $cchadwell_11231996_clone_name );

get_footer();
 ?>
