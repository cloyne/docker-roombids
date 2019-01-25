<?php
/* Template Name: Preferences */
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header();

// define variables and set to empty values
$cchadwell_11231996_nameErr = "";
$cchadwell_11231996_idErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["cchadwell_11231996_clone_name"])) {
		$cchadwell_11231996_nameErr = "Name is required";
	} else {
		$cchadwell_11231996_clone_name = test_input($_POST["name"]);
	}

	if (empty($_POST["cchadwell_11231996_clone_id"])) {
		$cchadwell_11231996_idErr = "Application ID is required";
	} else {
		$cchadwell_11231996_clone_id = test_input($_POST["email"]);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<?php
/*class RoomBidsCustomFormV1() {
	function __construct(str $arg) {
		$category = $arg
	}*/

function cchadwell_11231996_products_in_cat($catToCheck) {
		if ( WC()->cart->get_cart_contents_count() == 0 ) {
			$args = array(
					'posts_per_page' => -1,
					'post_type'      => 'product',
					'hide_empty'     => 1,
					'product_cat'    => $catToCheck,
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) {
					$temparray = array();
					while ( $query->have_posts() ) : $query->the_post();
							global $product;
							if ( $product->is_in_stock() ) {
									array_push($temparray, $product->get_title());
								}
							endwhile;

						}
				}

		else {
			$temparray = array();
			foreach ( WC()->cart->get_cart() as $cart_item ) {
   			$item_name = $cart_item['data']->get_title();
				array_push($temparray, $item_name);
			}
		}
		return ($temparray);
}

$cchadwell_11231996_rooms_in_stock = cchadwell_11231996_products_in_cat('Rooms');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1>Preferences</h1>
			<p>Please make your selections on this page. If you are bidding for double and/or triple rooms, please enter the name and application ID of your roomates (their points will be added to yours during the room allocation process).  </p>
			<p><i>***Please note that automated roombids is still in beta testing. All room matching done online will be carefully reviewed before any final decisions are released.</i></p>
			<h2>Rooms (required)</h2>
			<p><span class="error">* required field</span></p>
			<p>Fill out the form below and then hit submit. <b>Six rooms are required</b> but you may select up to 10.</p>
			<?php cchadwell_11231996_products_in_cat('Rooms');?>
			<style>
			* {
			  box-sizing: border-box;
			}

			/* Create two equal columns that floats next to each other */
			.first-column {
			  float: left;
			  width: 33%;
			  padding: 10px;
			}

			.second-column {
			  float: right;
			  width: 67%;
			  padding: 10px;
			}

			/* Clear floats after the columns */
			.row:after {
			  content: "";
			  display: table;
			  clear: both;
			}
			</style>
</head>
<body>
<div class="row">
  <div class="first-column">
		<form method="post" action=<?php echo esc_url(admin_url('admin-post.php')); ?>>
			<input type="hidden" name="action" value="cchadwell_11231996_roomsform">
			<h4>Your Info</h4>
				<p><label>Name:<br></label><input name="cchadwell_11231996_clone_name" id="cchadwell_11231996_clone_name" value="Cloyne Cooper" style='margin: 8px 0px'><span class="error">*</span></input><br>
					<label>Application ID:<br></label><input name="cchadwell_11231996_clone_id" id="cchadwell_11231996_clone_id" value="1234"><span class="error">*</span></input></p>
			<h4>Double Roomate</h4>
				<p><label>Roomate Name:<br></label><input name="cchadwell_11231996_droomate_name" id="cchadwell_11231996_droomate_name" value="Cloyne Cooper" style='margin: 8px 0px'></input><br>
					<label>Roomate Application ID:<br></label><input name="cchadwell_11231996_droomate_id" id="cchadwell_11231996_droomate_id" value="1234"></input></p>
			<h4>Triple Roomates</h4>
				<p><label>First Roomate Name:<br></label><input name="cchadwell_11231996_troomate1_name" id="cchadwell_11231996_troomate1_name" value="Cloyne Cooper"></input><br>
					<label>First Roomate Application ID:<br></label><input name="cchadwell_11231996_troomate1_id" id="cchadwell_11231996_troomate1_id" value="1234"></input></p><br>
				<p><label>Second Roomate Name:<br></label><input name="cchadwell_11231996_troomate2_name" id="cchadwell_11231996_troomate2_name" value="Cloyne Cooper"></input><br>
					<label>Second Roomate Application ID:<br></label><input name="cchadwell_11231996_troomate2_id" id="cchadwell_11231996_troomate2_id" value="1234"></input></p>

  </div>
  <div class="second-column">
		<h4>#1
		<select name="cchadwell_11231996_r1" id="cchadwell_11231996_r1" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;" required>
		<option>---</option>
		<?php
		foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
		echo '<option value="r'.$key.'">'.$value.'</option>';
		}

		?>
	</select></h4>
	<h4>#2
	<select name="cchadwell_11231996_r2" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;" required>
	<option>---</option>
	<?php
	foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
	echo '<option value="r'.$key.'">'.$value.'</option>';
	}

	?>
</select></h4>
<h4>#3
<select name="cchadwell_11231996_r3" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;" required>
<option>---</option>
<?php
foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
echo '<option value="r'.$key.'">'.$value.'</option>';
}

?>
</select></h4>
<h4>#4
<select name="cchadwell_11231996_r4" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;" required>
<option>---</option>
<?php
foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
echo '<option value="r'.$key.'">'.$value.'</option>';
}

?>
</select></h4>
<h4>#5
<select name="cchadwell_11231996_r5" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;" required>
<option>---</option>
<?php
foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
echo '<option value="r'.$key.'">'.$value.'</option>';
}

?>
<span class="error">* <?php echo $cchadwell_11231196_r5Err;?></span></select></h4>
<h4>#6
<select name="cchadwell_11231996_r6" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;" required>
<option>---</option>
<?php
foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
echo '<option value="r'.$key.'">'.$value.'</option>';
}

?>
</select></h4>
<h4>#7
<select name="cchadwell_11231996_r7" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;">
<option>---</option>
<?php
foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
echo '<option value="r'.$key.'">'.$value.'</option>';
}

?>
</select></h4>
<h4>#8
<select name="cchadwell_11231996_r8" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;">
<option>---</option>
<?php
foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
echo '<option value="r'.$key.'">'.$value.'</option>';
}

?>
</select></h4>
<h4>#9
<select name="cchadwell_11231996_r9" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;">
<option>---</option>
<?php
foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
echo '<option value="r'.$key.'">'.$value.'</option>';
}

?>
</select></h4>
<h4>#10
<select name="cchadwell_11231996_r10" style="width: 90%;padding: 6px 16px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 3px;box-sizing: border-box;">
<option>---</option>
<?php
foreach ($cchadwell_11231996_rooms_in_stock as $key => $value) {
echo '<option value="r'.$key.'">'.$value.'</option>';
}

?>
</select></h4>
<input type="submit" value="Submit" style="width: 100%;background-color: red;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;">
</form>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>

</body>
</html>




<?php
get_footer();
