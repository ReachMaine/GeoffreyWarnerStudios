<?php
/*
Template Name: Detailed Gallery
*/
?>

<?php get_header(); ?>

  <section id="commisssions-category">
    <section class="top-sec clearfix">
      <article class="commission-desk border"> 
			<?php
				$my_meta = get_post_meta($post->ID,'_detailed_gallery_meta',TRUE);
				echo $my_meta['top-content'];
			?>
      </article>
     <?php get_template_part( 'links' ); ?>
    </section>
    
    <section  class="single_product_display clearfix">
    	<article class="left-area-2 clearfix">
  <div class="slider slider-pad slider_new">
    <div class="thumbnail-3 productgallery">
    	<ul class="big-img-3">
			<?php
                $my_meta = get_post_meta($post->ID,'_detailed_gallery_meta',TRUE);
                foreach ($my_meta['product-imgs'] as $prod)
                {
            ?>
        	<li>
                <figure class="big-img-3"> 
                	<a href="<?php echo $prod['imgurl-popup']; ?>" class="lightbox" title="<?php echo $prod['title']; ?>"><img src="<?php echo $prod['imgurl-large']; ?>" alt="<?php echo $prod['title']; ?>" /></a>
                	<figcaption><?php echo nl2br($prod['title']); ?></figcaption> 
                </figure>
      		</li>
            <?php } ?>
        </ul>


      <ul class="small-thumb-3">
			<?php
                $my_meta = get_post_meta($post->ID,'_detailed_gallery_meta',TRUE);
				$count = 0;
                foreach ($my_meta['product-imgs'] as $prod)
                {
            ?>
                    <li class="<?php echo $count; ?>"><a href="#"><img src="<?php echo $prod['imgurl-thumb']; ?>" alt="<?php echo $prod['title']; ?>" <?php echo imageDimentions($prod['imgurl-thumb']); ?> /></a></li>
            <?php $count++; } ?>
      </ul>
    </div>
  </div>
</article>

<aside class="right-area-3">

    <div class="text-area">
      <ul class="prod-desc">
			<?php
                $my_meta = get_post_meta($post->ID,'_detailed_gallery_meta',TRUE);
				$count = 0;
                foreach ($my_meta['product-imgs'] as $prod)
                {
            ?>
                    <li class="<?php echo $count; ?>"><?php echo nl2br($prod['prod-desc']); ?></li>
            <?php $count++; } ?>
      </ul>
    </div>

</aside>
    </section>
    
   
  </section>

<?php get_footer(); ?>
