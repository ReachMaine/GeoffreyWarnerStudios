<?php

function sandbox_example_theme_menu() {

	add_theme_page(
		'Theme Options', 			// The title to be displayed in the browser window for this page.
		'Theme Options',			// The text to be displayed for this menu item
		'administrator',			// Which type of users can see this menu item
		'sandbox_theme_options',	// The unique ID - that is, the slug - for this menu item
		'sandbox_theme_display'		// The name of the function to call when rendering this menu's page
	);

} // end sandbox_example_theme_menu
add_action( 'admin_menu', 'sandbox_example_theme_menu' );

/**
 * Renders a simple page to display for the theme menu defined above.
 */
function sandbox_theme_display() {
?>
	<!-- Create a header in the default WordPress 'wrap' container -->
	<div class="wrap">

		<div id="icon-themes" class="icon32"></div>
		<h2>GW Studio Theme Options</h2>
		<?php settings_errors(); ?>

		<form method="post" action="options.php">
			<?php //settings_fields( 'sandbox_theme_display_options' ); ?>
			<?php //do_settings_sections( 'sandbox_theme_display_options' ); ?>
			<?php settings_fields( 'sandbox_theme_social_options' ); ?>
            <?php do_settings_sections( 'sandbox_theme_social_options' ); ?>
			<?php submit_button(); ?>
		</form>

	</div><!-- /.wrap -->
<?php
} // end sandbox_theme_display

/**
 * Initializes the theme's social options by registering the Sections,
 * Fields, and Settings.
 *
 * This function is registered with the 'admin_init' hook.
 */
function sandbox_theme_intialize_social_options() {

	// If the social options don't exist, create them.
	if( false == get_option( 'sandbox_theme_social_options' ) ) {
		add_option( 'sandbox_theme_social_options' );
	} // end if
	
	add_settings_section(
		'social_settings_section',			// ID used to identify this section and with which to register options
		'Various Links',					// Title to be displayed on the administration page
		'sandbox_social_options_callback',	// Callback used to render the description of the section
		'sandbox_theme_social_options'		// Page on which to add this section of options
	);
	
	add_settings_field(
		'twitter',
		'Twitter',
		'sandbox_twitter_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);
	
	add_settings_field(
		'facebook',
		'Facebook',
		'sandbox_facebook_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);
	
	add_settings_field(
		'linkedin',
		'Linkedin',
		'sandbox_linkedin_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);
	
	add_settings_field(
		'emailaddress',
		'Email Address',
		'sandbox_emailaddress_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);

	add_settings_field(
		'shoppingcart',
		'Shopping Cart',
		'sandbox_shoppingcart_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);
	
	add_settings_field(
		'privacypolicy',
		'Privacy Policy',
		'sandbox_privacypolicy_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);
	
	add_settings_field(
		'storiespage',
		'Stories & Testimonials',
		'sandbox_storiespage_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);
	
	add_settings_field(
		'defaultimage',
		'Default Header Image',
		'sandbox_defaultimage_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);
	
	add_settings_field(
		'theribbon',
		'The Ribbon Content',
		'sandbox_theribbon_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);
	
	add_settings_field(
		'theribbonlink',
		'The Ribbon Link',
		'sandbox_theribbonlink_callback',
		'sandbox_theme_social_options',
		'social_settings_section'
	);
	
	register_setting(
		'sandbox_theme_social_options',
		'sandbox_theme_social_options',
		'sandbox_theme_sanitize_social_options'
	);

} // end sandbox_theme_intialize_social_options
add_action( 'admin_init', 'sandbox_theme_intialize_social_options' );

function sandbox_social_options_callback() {
	echo '<p>Provide the URL to the social networks and various pages etc., which are not controlled from Menus section.</p>';
} // end sandbox_general_options_callback

function sandbox_twitter_callback() {

	// First, we read the social options collection
	$options = get_option( 'sandbox_theme_social_options' );

	// Next, we need to make sure the element is defined in the options. If not, we'll set an empty string.
	$url = '';
	if( isset( $options['twitter'] ) ) {
		$url = $options['twitter'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="twitter" name="sandbox_theme_social_options[twitter]" value="' . $options['twitter'] . '" />';

} // end sandbox_twitter_callback

function sandbox_facebook_callback() {

	$options = get_option( 'sandbox_theme_social_options' );

	$url = '';
	if( isset( $options['facebook'] ) ) {
		$url = $options['facebook'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="facebook" name="sandbox_theme_social_options[facebook]" value="' . $options['facebook'] . '" />';

} // end sandbox_facebook_callback

function sandbox_linkedin_callback() {

	$options = get_option( 'sandbox_theme_social_options' );

	$url = '';
	if( isset( $options['linkedin'] ) ) {
		$url = $options['linkedin'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="linkedin" name="sandbox_theme_social_options[linkedin]" value="' . $options['linkedin'] . '" />';

} // end sandbox_linkedin_callback

function sandbox_emailaddress_callback() {

	$options = get_option( 'sandbox_theme_social_options' );

	$url = '';
	if( isset( $options['emailaddress'] ) ) {
		$url = $options['emailaddress'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="emailaddress" name="sandbox_theme_social_options[emailaddress]" value="' . $options['emailaddress'] . '" />';

} // end sandbox_emailaddress_callback

function sandbox_shoppingcart_callback() {

	$options = get_option( 'sandbox_theme_social_options' );

	$url = '';
	if( isset( $options['shoppingcart'] ) ) {
		$url = $options['shoppingcart'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="shoppingcart" name="sandbox_theme_social_options[shoppingcart]" value="' . $options['shoppingcart'] . '" />';

} // end sandbox_shoppingcart_callback

function sandbox_privacypolicy_callback() {

	$options = get_option( 'sandbox_theme_social_options' );

	$url = '';
	if( isset( $options['privacypolicy'] ) ) {
		$url = $options['privacypolicy'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="privacypolicy" name="sandbox_theme_social_options[privacypolicy]" value="' . $options['privacypolicy'] . '" />';

} // end sandbox_privacypolicy_callback

function sandbox_storiespage_callback() {

	$options = get_option( 'sandbox_theme_social_options' );

	$url = '';
	if( isset( $options['storiespage'] ) ) {
		$url = $options['storiespage'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="storiespage" name="sandbox_theme_social_options[storiespage]" value="' . $options['storiespage'] . '" />';

} // end sandbox_storiespage_callback

function sandbox_defaultimage_callback() {

	$options = get_option( 'sandbox_theme_social_options' );

	$url = '';
	if( isset( $options['defaultimage'] ) ) {
		$url = $options['defaultimage'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="defaultimage" name="sandbox_theme_social_options[defaultimage]" value="' . $options['defaultimage'] . '" />';

} // end sandbox_defaultimage_callback

function sandbox_theribbon_callback() {

	$options = get_option( 'sandbox_theme_social_options' );

	$url = '';
	if( isset( $options['theribbon'] ) ) {
		$url = $options['theribbon'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="theribbon" name="sandbox_theme_social_options[theribbon]" value="' . $options['theribbon'] . '" />';

} // end sandbox_theribbon_callback

function sandbox_theribbonlink_callback() {

	$options = get_option( 'sandbox_theme_social_options' );

	$url = '';
	if( isset( $options['theribbonlink'] ) ) {
		$url = $options['theribbonlink'];
	} // end if

	// Render the output
	echo '<input type="text" class="theme_option_text" id="theribbonlink" name="sandbox_theme_social_options[theribbonlink]" value="' . $options['theribbonlink'] . '" />';

} // end sandbox_theribbon_callback

function sandbox_theme_sanitize_social_options( $input ) {

	// Define the array for the updated options
	$output = array();

	// Loop through each of the options sanitizing the data
	foreach( $input as $key => $val ) {

		if( isset ( $input[$key] ) ) {
			$output[$key] =  strip_tags( stripslashes( $input[$key] ) ) ;
		} // end if	

	} // end foreach

	// Return the new collection
	return apply_filters( 'sandbox_theme_sanitize_social_options', $output, $input );

} // end sandbox_theme_sanitize_social_options


?>
