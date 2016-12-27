<?php

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}


add_action( 'after_setup_theme', 'theme_custom_setup' );
if ( ! function_exists( 'theme_custom_setup' ) ):
	function theme_custom_setup() {
		register_nav_menus( array(
			'topnav' => __( 'Top Navigation',  __('Top Navigation') )
		));
	
		register_nav_menus( array(
			'footer_nav' => __( 'Footer Navigation',  __('Footer Navigation') )
		));
		
		add_theme_support( 'post-thumbnails' );
	}
endif;  
 
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Widgets',
		'id'   => 'sidebar-widgets',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
	
	register_sidebar(array(
		'name' => 'Home Events',
		'id'   => 'home-events',
		'description'   => 'Add Events Widget on Hompage',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}

function new_wp_trim_excerpt($text) {
	$raw_excerpt = $text;
	if ( '' == $text ) {
		$text = get_the_content('');

		$text = strip_shortcodes( $text );

		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text, '<a>');
		$excerpt_length = apply_filters('excerpt_length', 55);

		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$words = preg_split('/(<a.*?a>)|\n|\r|\t|\s/', $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );
		if ( count($words) > $excerpt_length ) {
			array_pop($words);
			$text = implode(' ', $words);
			$text = $text . $excerpt_more;
		} else {
			$text = implode(' ', $words);
		}
	}
	return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);

}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_wp_trim_excerpt');

function new_excerpt_more($more) {
    global $post;
	return '<a class="more-link" href="'. get_permalink($post->ID) . '">Read more ...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function wp_list_bookmarks_updated($args = '') {
	$defaults = array(
		'orderby' => 'name', 'order' => 'ASC',
		'limit' => -1, 'category' => '', 'exclude_category' => '',
		'category_name' => '', 'hide_invisible' => 1,
		'show_updated' => 0, 'echo' => 1,
		'categorize' => 1, 'title_li' => __('Bookmarks'),
		'title_before' => '<h2>', 'title_after' => '</h2>',
		'category_orderby' => 'name', 'category_order' => 'ASC',
		'class' => 'linkcat', 'category_before' => '<li id="%id" class="%class">',
		'category_after' => '</li>'
	);

	$r = wp_parse_args( $args, $defaults );
	extract( $r, EXTR_SKIP );

	$output = '';

	if ( $categorize ) {
		//Split the bookmarks into ul's for each category
		$cats = get_terms('link_category', array('name__like' => $category_name, 'include' => $category, 'exclude' => $exclude_category, 'orderby' => $category_orderby, 'order' => $category_order, 'hierarchical' => 0));

		foreach ( (array) $cats as $cat ) {
			$params = array_merge($r, array('category'=>$cat->term_id));
			$bookmarks = get_bookmarks($params);
			if ( empty($bookmarks) )
				continue;
			$output .= str_replace(array('%id', '%class'), array("linkcat-$cat->term_id", $class), $category_before);
			$catname = apply_filters( "link_category", $cat->name );
			$catdescr = apply_filters("link_category", $cat->description);
			$output .= "$title_before$catname$title_after\n\t<ul class='xoxo blogroll'>\n";
			$output .= "<p>$catdescr</p>\n";
			$output .= _walk_bookmarks($bookmarks, $r);
			$output .= "\n\t</ul>\n$category_after\n";
		}
	} else {
		//output one single list using title_li for the title
		$bookmarks = get_bookmarks($r);

		if ( !empty($bookmarks) ) {
			if ( !empty( $title_li ) ){
				$output .= str_replace(array('%id', '%class'), array("linkcat-$category", $class), $category_before);
				$output .= "$title_before$title_li$title_after\n\t<ul class='xoxo blogroll'>\n";
				$output .= _walk_bookmarks($bookmarks, $r);
				$output .= "\n\t</ul>\n$category_after\n";
			} else {
				$output .= _walk_bookmarks($bookmarks, $r);
			}
		}
	}

	$output = apply_filters( 'wp_list_bookmarks', $output );

	if ( !$echo )
		return $output;
	echo $output;
}

include_once 'inc/theme-options.php';
include_once 'metaboxes/setup.php';
include_once 'metaboxes/specs.php';


// Shortcodes

// [block class="none"]
function block_func( $atts, $content = null  ) {
	extract( shortcode_atts( array(
		'class' => ''
	), $atts ) );

	 return '<div class="' . esc_attr($class) . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'block', 'block_func' );

// Resize images proportionally
function imageResize($image, $target) {
	$mysock = getimagesize($image);
	$width = $mysock[0];
	$height = $mysock[1];
	
	//takes the larger size of the width and height and applies the formula accordingly...this is so this script will work dynamically with any size image
	if ($width > $height) {
		$percentage = ($target / $width);
	} else {
		$percentage = ($target / $height);
	}
	//gets the new value and applies the percentage, then rounds the value
	$width = round($width * $percentage);
	$height = round($height * $percentage);
	//returns the new sizes in html image tag format...this is so you can plug this function inside an image tag and just get the
	return "width=\"$width\" height=\"$height\"";
}

function imageDimentions($image) {
	$size = getimagesize($image);
	return $size[3];
}


//Apply Custom CSS to Admin Area
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .theme_option_text {
		width:100%;	
	}
  </style>';
}

?>