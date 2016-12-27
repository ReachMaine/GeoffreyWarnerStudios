<?php
/*
Template Name: Product Page
*/
?>

<?php get_header(); ?>

  <section id="commisssions-category">
    <section class="top-sec clearfix">
      <article class="commission-desk border"> 
			<?php
				$my_meta = get_post_meta($post->ID,'_product_meta',TRUE);
				echo $my_meta['top-content'];
			?>
      </article>
     <?php get_template_part( 'links' ); ?>
    </section>
    
    <section  class="single_product_display clearfix">
    	<article class="left-area">
  <div class="slider slider-pad">
    <div class="thumbnail-2 productgallery">
    	<ul class="big-img-2">
			<?php
                $my_meta = get_post_meta($post->ID,'_product_meta',TRUE);
                foreach ($my_meta['product-imgs'] as $prod)
                {
            ?>
        	<li>
                <figure class="big-img-2"> 
                	<a href="<?php echo $prod['imgurl-popup']; ?>" class="lightbox" title="<?php echo $prod['title']; ?>"><img src="<?php echo $prod['imgurl-large']; ?>" alt="<?php echo $prod['title']; ?>" /></a>
                	<figcaption><?php echo nl2br($prod['title']); ?></figcaption> 
                </figure>
      		</li>
            <?php } ?>
        </ul>


      <ul class="small-thumb-2">
			<?php
                $my_meta = get_post_meta($post->ID,'_product_meta',TRUE);
				$count = 0;
                foreach ($my_meta['product-imgs'] as $prod)
                {
            ?>
                    <li class="<?php echo $count; ?>"><a href="#"><img src="<?php echo $prod['imgurl-thumb']; ?>" alt="<?php echo $prod['title']; ?>" /></a></li>
            <?php $count++; } ?>
      </ul>
    </div>
  </div>
</article>

<aside class="right-area">

    <div class="text-area">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   		  	<?php the_content(); ?>
		  <?php endwhile; else : ?>Not Found<?php endif; ?>
    </div>

</aside>
    </section>
    
    <!--<section id="video-img" class="clearfix">
    <article class="left-area">
      <div class="video-sec-2">
        <div class="video-main"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/video-placeholder.gif" alt=""></a></div>
    	<p>Watch a video of how the Owl was developed and built.</p>
</div>
</article>

	<section class="right-area-2">
	  <section class="fun-sec"> <img src="<?php bloginfo('template_directory'); ?>/images/fun-img.jpg" alt="">
	    <h2>Great Family Fun!</h2>
</section>
</section>

    </section>-->
    
  </section>

<?php get_footer(); ?>
