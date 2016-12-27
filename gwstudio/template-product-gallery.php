<?php
/*
Template Name: Product Gallery
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
    
    <section class="thumbnail productgallery">
    	<ul class="big-img">
			<?php
                $my_meta = get_post_meta($post->ID,'_product_gallery_meta',TRUE);
                foreach ($my_meta['product_gallery'] as $prod)
                {
            ?>
        	<li>
                <figure class="big-img"> 
                	<img src="<?php echo $prod['imgurl-large']; ?>" alt="<?php echo $prod['title']; ?>" /> 
                	<figcaption><?php echo nl2br($prod['prod-desc']); ?></figcaption> 
                </figure>
      		</li>
            <?php } ?>
        </ul>


      <ul class="small-thumb">
			<?php
                $my_meta = get_post_meta($post->ID,'_product_gallery_meta',TRUE);
                foreach ($my_meta['product_gallery'] as $prod)
                {
            ?>
                    <li><a href="#"><img src="<?php echo $prod['imgurl-thumb']; ?>" alt="<?php echo $prod['title']; ?>" /></a></li>
            <?php } ?>
      </ul>
    </section>
    
    <!--<section class="thumbnail 3columngallery">
      <ul class="gallery bord">
			<?php
                $my_meta = get_post_meta($post->ID,'_category_gallery_meta',TRUE);
                foreach ($my_meta['category_gallery_col1'] as $prod)
                {
            ?>
                    <li><a href="<?php echo $prod['link-col1']; ?>"><img src="<?php echo $prod['imgurl-col1']; ?>" alt="<?php echo $prod['title-col1']; ?>" /><figcaption><?php echo $prod['title-col1']; ?></figcaption></a></li>
            <?php } ?>
      </ul>
    </section>-->
  </section>

<?php get_footer(); ?>
