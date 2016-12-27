<?php
/*
Template Name: 3 Column Gallery
*/
?>

<?php get_header(); ?>

  <section id="commisssions-category">
    <section class="top-sec">
      <section class="commission-desk border">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   		  	<?php the_content(); ?>
		 <?php endwhile; else : ?>Not Found<?php endif; ?>
      </section>
      
      <?php get_template_part( 'links' ); ?>
    </section>
    
	<?php $social_options = get_option( 'sandbox_theme_social_options' ); ?> 
    <?php if(!empty($social_options['theribbon'])) { ?>
        <section id="the_ribbon">
        	<?php if(!empty($social_options['theribbonlink'])) { ?>
            	<a href="<?php echo $social_options['theribbonlink'] ?>">
                	<?php echo $social_options['theribbon'] ?>
                </a>
			<?php } else { ?>
            	<?php echo $social_options['theribbon'] ?>
            <?php } ?>
        </section>
    <?php } ?>
    
    <section class="thumbnail">
    <div id="columngallery">
      <ul class="gallery col1 bord">
			<?php
                $my_meta = get_post_meta($post->ID,'_category_gallery_meta',TRUE);
                foreach ($my_meta['category_gallery_col1'] as $prod)
                {
            ?>
                    <li><a href="<?php echo $prod['link-col1']; ?>"><img src="<?php echo $prod['imgurl-col1']; ?>" alt="<?php echo $prod['title-col1']; ?>" /><figcaption><?php echo $prod['title-col1']; ?></figcaption></a></li>
            <?php } ?>
      </ul>
      <ul class="gallery col2">
        <li class="first"><em>click on an image to see product details</em></li>
			<?php
                foreach ($my_meta['category_gallery_col2'] as $prod)
                {
            ?>
                    <li><a href="<?php echo $prod['link-col2']; ?>"><img src="<?php echo $prod['imgurl-col2']; ?>" alt="<?php echo $prod['title-col2']; ?>" /><figcaption><?php echo $prod['title-col2']; ?></figcaption></a></li>
            <?php } ?>
      </ul>
      <ul class="gallery col3">
			<?php
                foreach ($my_meta['category_gallery_col3'] as $prod)
                {
            ?>
                    <li><a href="<?php echo $prod['link-col3']; ?>"><img src="<?php echo $prod['imgurl-col3']; ?>" alt="<?php echo $prod['title-col3']; ?>" /><figcaption><?php echo $prod['title-col3']; ?></figcaption></a></li>
            <?php } ?>
      </ul>
      </div>
    </section>
  </section>

<?php get_footer(); ?>
