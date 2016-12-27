<?php

include_once WP_CONTENT_DIR . '/wpalchemy/MetaBox.php';
include_once WP_CONTENT_DIR . '/wpalchemy/MediaAccess.php';
 
// include css to help style our custom meta boxes
add_action( 'init', 'my_metabox_styles' );
 
function my_metabox_styles()
{
    if ( is_admin() )
    {
        wp_enqueue_style( 'wpalchemy-metabox', get_stylesheet_directory_uri() . '/metaboxes/meta.css' );
    }
}

// important: note the priority of 99, the js needs to be placed after tinymce loads
add_action('admin_print_footer_scripts','my_admin_print_footer_scripts',99);
function my_admin_print_footer_scripts()
{
	?><script type="text/javascript">/* <![CDATA[ */
		jQuery(function($)
		{
			var i=1;
			$('.customEditor textarea').each(function(e)
			{
				var id = $(this).attr('id');
 
				if (!id)
				{
					id = 'customEditor-' + i++;
					$(this).attr('id',id);
				}
 
				tinyMCE.execCommand('mceAddControl', false, id);

				$('a.toggleVisual').click(
					function() {
						tinyMCE.execCommand('mceAddControl', false, id);
					}
				);
				
				$('a.toggleHTML').click(
					function() {
						tinyMCE.execCommand('mceRemoveControl', false, id);
					}
				);
 
			});
		});
	/* ]]> */</script><?php
}
 
$wpalchemy_media_access = new WPAlchemy_MediaAccess();

?>