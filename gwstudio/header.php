<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
        <meta name="google-site-verification" content="5RL887wP0dMWAxJRec2vPCLqFclEu7HF1smdtYCruDw" />
        <meta name="msvalidate.01" content="EC8348B213ED09DC202B0FD8521AC811" />

	<meta charset="<?php bloginfo('charset'); ?>">
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.5.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquerycssmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.css" media="screen" />

	<!--[if lte IE 7]>
    <style type="text/css">
    html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
    </style>
    <![endif]-->

	<!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/libs/jquery-1.7.1.min.js"></script>-->
    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
    
    <?php wp_head(); ?>
	</head>

	<body>
	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
    <?php $social_options = get_option( 'sandbox_theme_social_options' ); ?> 
    <div id="wrapper">
      <header class="clearfix"> 
      	<a id="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="" /></a>
      	<?php 
			$my_meta = get_post_meta($post->ID,'_common_meta',TRUE); 
			//$product_meta = get_product_meta( $post->ID, '_wpsc_product_metadata', true );
			//$product_meta = get_post_custom_values('Header Image');

while ( wpsc_have_products() ) : wpsc_the_product();
if (wpsc_have_custom_meta()) :
    while ( wpsc_have_custom_meta() ) : wpsc_the_custom_meta();
        $product_meta = wpsc_custom_meta_value();
    endwhile;
endif;
endwhile;

			//$product_meta = get_product_meta($post->ID, 'product_metadata', TRUE);
			$imageurl = '';
			$bannerurl = '';
			if ($my_meta['imgurl']) {
				$imageurl = $my_meta['imgurl'];
				$bannerurl = $my_meta['bannerurl'];
			} elseif ($product_meta) {
				$imageurl = $product_meta;
			} else {
				$imageurl = $social_options['defaultimage'];
			}
		?>
        
        <?php if($bannerurl != '') { echo '<a href="' .$bannerurl. '">'; } ?><img src="<?php echo $imageurl; ?>" id="header-img" alt="" /><?php if($bannerurl != '') { echo '</a>'; } ?>
      </header>
        <?php wp_nav_menu( array( 'theme_location' => 'topnav', 'container' => 'nav', 'container_class' => 'jquerycssmenu clearfix', 'container_id' => 'myjquerymenu' ) ); ?>
