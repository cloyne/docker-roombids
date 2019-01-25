<?php
/**
* @package CchadwellPlugin
*/
/*
Plugin Name: cchadwell First Custom Plugin
Plugin URI: google.com
Description: This is a Plugin test
Version: 1.0.0
Author: Casey Chadwell
License: GPLv2 or later
Text Domain: cchadwellPlugin
*/

add_action( 'show_user_profile', 'crf_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'crf_show_extra_profile_fields' );

function crf_show_extra_profile_fields( $user ) {
	$doubles_pref_name = get_the_author_meta( 'doubles_pref_name', $user->ID );
	$doubles_pref_id = get_the_author_meta( 'doubles_pref_id', $user->ID );

	$triple1_pref_name = get_the_author_meta( 'triple1_pref_name', $user->ID );
	$triple1_pref_id = get_the_author_meta( 'triple1_pref_id', $user->ID );
	$triple2_pref_name = get_the_author_meta( 'triple2_pref_name', $user->ID );
	$triple2_pref_id = get_the_author_meta( 'triple2_pref_id', $user->ID );

	$r1_pref = get_the_author_meta( 'r1_pref', $user->ID );
	$r2_pref = get_the_author_meta( 'r2_pref', $user->ID );
	$r3_pref = get_the_author_meta( 'r3_pref', $user->ID );
	$r4_pref = get_the_author_meta( 'r4_pref', $user->ID );
	$r5_pref = get_the_author_meta( 'r5_pref', $user->ID );
	$r6_pref = get_the_author_meta( 'r6_pref', $user->ID );
	$r7_pref = get_the_author_meta( 'r7_pref', $user->ID );
	$r8_pref = get_the_author_meta( 'r8_pref', $user->ID );
	$r9_pref = get_the_author_meta( 'r9_pref', $user->ID );
	$r10_pref = get_the_author_meta( 'r10_pref', $user->ID );

	?>
	<h3><?php esc_html_e( 'Joint Bidding Partners', 'crf' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="doubles_pref_name"><?php esc_html_e( 'Double Partner Name', 'crf' ); ?></label></th>
			<td>
				<input id="doubles_pref_name"
			       name="doubles_pref_name"
			       value="<?php echo esc_attr( $doubles_pref_name ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="doubles_pref_id"><?php esc_html_e( 'Double Partner App ID', 'crf' ); ?></label></th>
			<td>
				<input id="doubles_pref_id"
			       name="doubles_pref_id"
			       value="<?php echo esc_attr( $doubles_pref_id ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="triple1_pref_name"><?php esc_html_e( 'Triple Partner 1 Name', 'crf' ); ?></label></th>
			<td>
				<input id="triple1_pref_name"
				      name="triple1_pref_name"
				      value="<?php echo esc_attr( $triple1_pref_name ); ?>"
				      class="regular-text"
				/>
			</td>
	 </tr>
		<tr>
			<th><label for="triple1_pref_id"><?php esc_html_e( 'Triple Partner 1 App ID', 'crf' ); ?></label></th>
			<td>
				<input id="triple1_pref_id"
			       name="triple1_pref_id"
			       value="<?php echo esc_attr( $triple1_pref_id ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="triple2_pref_name"><?php esc_html_e( 'Triple Partner 2 Name', 'crf' ); ?></label></th>
			<td>
				<input id="triple2_pref_name"
			       name="triple2_pref_name"
			       value="<?php echo esc_attr( $triple2_pref_name ); ?>"
						 class="regular-text"
				/>
			</td>
		</tr>
		<tr>
				<th><label for="triple2_pref_id"><?php esc_html_e( 'Triple Partner 2 App ID', 'crf' ); ?></label></th>
				<td>
					<input id="triple2_pref_id"
					      name="triple2_pref_id"
					      value="<?php echo esc_attr( $triple2_pref_id ); ?>"
					      class="regular-text"
					/>
				</td>
		</tr>
	</table>

	<h3><?php esc_html_e( 'Room Prefererences', 'crf' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="r1_pref"><?php esc_html_e( '#1', 'crf' ); ?></label></th>
			<td>
				<input id="r1_pref"
			       name="r1_pref"
			       value="<?php echo esc_attr( $r1_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="r2_pref"><?php esc_html_e( '#2', 'crf' ); ?></label></th>
			<td>
				<input id="r2_pref"
			       name="r2_pref"
			       value="<?php echo esc_attr( $r2_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="r3_pref"><?php esc_html_e( '#3', 'crf' ); ?></label></th>
			<td>
				<input id="r3_pref"
			       name="r3_pref"
			       value="<?php echo esc_attr( $r3_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="r4_pref"><?php esc_html_e( '#4', 'crf' ); ?></label></th>
			<td>
				<input id="r4_pref"
			       name="r4_pref"
			       value="<?php echo esc_attr( $r4_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="r5_pref"><?php esc_html_e( '#5', 'crf' ); ?></label></th>
			<td>
				<input id="r5_pref"
			       name="r5_pref"
			       value="<?php echo esc_attr( $r5_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="r6_pref"><?php esc_html_e( '#6', 'crf' ); ?></label></th>
			<td>
				<input id="r6_pref"
			       name="r6_pref"
			       value="<?php echo esc_attr( $r6_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="r7_pref"><?php esc_html_e( '#7', 'crf' ); ?></label></th>
			<td>
				<input id="r7_pref"
			       name="r7_pref"
			       value="<?php echo esc_attr( $r7_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="r8_pref"><?php esc_html_e( '#8', 'crf' ); ?></label></th>
			<td>
				<input id="r8_pref"
			       name="r8_pref"
			       value="<?php echo esc_attr( $r8_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="r9_pref"><?php esc_html_e( '#9', 'crf' ); ?></label></th>
			<td>
				<input id="r9_pref"
			       name="r9_pref"
			       value="<?php echo esc_attr( $r9_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
		<tr>
			<th><label for="r10_pref"><?php esc_html_e( '#10', 'crf' ); ?></label></th>
			<td>
				<input id="r10_pref"
			       name="r10_pref"
			       value="<?php echo esc_attr( $r10_pref ); ?>"
			       class="regular-text"
				/>
			</td>
		</tr>
	</table>
	<?php
}


add_action( 'personal_options_update', 'crf_update_profile_fields' );
add_action( 'edit_user_profile_update', 'crf_update_profile_fields' );

function crf_update_profile_fields( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}
	#Roomates
	#Doubles
	if ( ! empty( $_POST['doubles_pref_name'] ) ) {
		update_user_meta( $user_id, 'doubles_pref_name', $_POST['doubles_pref_name'] );
	}
	if ( ! empty( $_POST['doubles_pref_id'] ) ) {
		update_user_meta( $user_id, 'doubles_pref_id', $_POST['doubles_pref_id'] );
	}

	#Triples
	if ( ! empty( $_POST['triple1_pref_name'] ) ) {
		update_user_meta( $user_id, 'triple1_pref_name', $_POST['triple1_pref_name'] );
	}
	if ( ! empty( $_POST['triple1_pref_id'] ) ) {
		update_user_meta( $user_id, 'triple1_pref_id', $_POST['triple1_pref_id'] );
	}
	if ( ! empty( $_POST['triple2_pref_name'] ) ) {
		update_user_meta( $user_id, 'triple2_pref_name', $_POST['triple2_pref_name'] );
	}
	if ( ! empty( $_POST['triple2_pref_id'] ) ) {
		update_user_meta( $user_id, 'triple2_pref_id', $_POST['triple2_pref_id'] );
	}

	#Preferences
	#Rooms
	if ( ! empty( $_POST['r1_pref'] ) ) {
		update_user_meta( $user_id, 'r1_pref', $_POST['r1_pref'] );
	}
	if ( ! empty( $_POST['r2_pref'] ) ) {
		update_user_meta( $user_id, 'r2_pref', $_POST['r2_pref'] );
	}
	if ( ! empty( $_POST['r3_pref'] ) ) {
		update_user_meta( $user_id, 'r3_pref', $_POST['r3_pref'] );
	}
	if ( ! empty( $_POST['r4_pref'] ) ) {
		update_user_meta( $user_id, 'r4_pref', $_POST['r4_pref'] );
	}
	if ( ! empty( $_POST['r5_pref'] ) ) {
		update_user_meta( $user_id, 'r5_pref', $_POST['r5_pref'] );
	}
	if ( ! empty( $_POST['r6_pref'] ) ) {
		update_user_meta( $user_id, 'r6_pref', $_POST['r6_pref'] );
	}
	if ( ! empty( $_POST['r7_pref'] ) ) {
		update_user_meta( $user_id, 'r7_pref', $_POST['r7_pref'] );
	}
	if ( ! empty( $_POST['r8_pref'] ) ) {
		update_user_meta( $user_id, 'r8_pref', $_POST['r8_pref'] );
	}
	if ( ! empty( $_POST['r9_pref'] ) ) {
		update_user_meta( $user_id, 'r9_pref', $_POST['r9_pref'] );
	}
	if ( ! empty( $_POST['r10_pref'] ) ) {
		update_user_meta( $user_id, 'r10_pref', $_POST['r10_pref'] );
	}

}
