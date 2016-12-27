<?php
/*
Template Name: Links page
*/
?>

<?php get_header(); ?>

	<section id="page-content" class="clearfix">
    	<div id="linkspage">
			<?php wp_list_bookmarks_updated('title_li=&category_before=&category_after='); ?>
        </div>
    </section>


<?php get_footer(); ?>