<?php
/*
Template Name: Commission & Inquiry Form
*/
?>


<?php get_header(); ?>

	<section id="page-content" class="clearfix">
    
	<ul class="thumb-img">
		<?php
            $my_meta = get_post_meta($post->ID,'_formpage_meta',TRUE);
            foreach ($my_meta['form_page'] as $img)
            {
        ?>
                <li><a href="<?php echo $img['imgurl-large']; ?>" class="lightbox"><img src="<?php echo $img['imgurl-thumb']; ?>" alt="<?php echo $img['title']; ?>" /></a></li>
        <?php } ?>
    </ul>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
    
    </section>

<?php get_footer(); ?>
