<?php
/*
Template Name: Workshop
*/
?>

<?php get_header(); ?>

  <section id="commisssions-category">
    <section class="top-sec clearfix">
      <article class="commission-desk border"> 
			<?php
				$my_meta = get_post_meta($post->ID,'_workshop_meta',TRUE);
				echo $my_meta['top-content'];
			?>
      </article>
     <?php get_template_part( 'links' ); ?>
    </section>
    
    <section class="clearfix">
    
    <div id="workshop-slider">
    	<ul>
			<?php
                $my_meta = get_post_meta($post->ID,'_workshop_meta',TRUE);
                foreach ($my_meta['workshop-imgs'] as $pics)
                {
            ?>
                    <li><img src="<?php echo $pics['imgurl']; ?>" alt="<?php echo $pics['title']; ?>"/></li>
            <?php } ?>
        </ul>
        <a href="#" class="arrow-left"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-left.gif" alt="" /></a> 
        <a href="#" class="arrow-right"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-right.gif" alt="" /></a>
    </div>

    <article id="workshop-content" class="clearfix">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   		  	<?php the_content(); ?>
		  <?php endwhile; else : ?>Not Found<?php endif; ?>
    </article>

    </section>
  </section>

<?php get_footer(); ?>
