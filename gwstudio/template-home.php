<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<?php $social_options = get_option( 'sandbox_theme_social_options' ); ?> 

      <section class="clearfix">
        <div id="home-banner"> 
        <div class="left-arrow"><a href="#" class="arrow-left"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-left.gif" alt="" /></a></div> 
        <div class="right-arrow"><a href="#" class="arrow-right"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-right.gif" alt="" /></a></div>
          
           <div id="home-carousal">
           <ul>
			<?php
                 $my_meta = get_post_meta($post->ID,'_home_meta',TRUE);
                foreach ($my_meta['docs'] as $docs)
                {
            ?>
                    <li><img src="<?php echo $docs['imgurl']; ?>" alt="<?php echo $docs['title']; ?>"/></li>
            <?php } ?>
            </ul>
        <a href="#" class="arrow-left"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-left.gif" alt="" /></a> 
        <a href="#" class="arrow-right"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-right.gif" alt="" /></a>
    </div>
        </div>
      </section>
      
      <section id="content" class="clearfix">
        <div class="col-left">
        	<!-- red ribbon -->
        	<?php $social_options = get_option( 'sandbox_theme_social_options' ); ?> 
            <?php if(!empty($social_options['theribbon'])) { ?>
                <section id="the_ribbon" class="home_ribbon">
                    <?php if(!empty($social_options['theribbonlink'])) { ?>
                        <a href="<?php echo $social_options['theribbonlink'] ?>">
                            <?php echo $social_options['theribbon'] ?>
                        </a>
                    <?php } else { ?>
                        <?php echo $social_options['theribbon'] ?>
                    <?php } ?>
                </section>
            <?php } ?>
            
           <!-- welcome text -->
          <div class="pad">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   		  	<?php the_content(); ?>
		  <?php endwhile; else : ?>Not Found<?php endif; ?>
          </div>
          
         
        </div>
        
        <aside>
          <ul id="icons" class="clearfix">
                       <li><a href="<?php echo $social_options['facebook'] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="Facebook" /></a></li>
            <li><a href="<?php echo $social_options['twitter'] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter" /></a></li>
            <li><a href="<?php echo $social_options['linkedin'] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin" /></a></li>
            <li><a class="addthis_button" href="http://www.addthis.com/bookmark.php"><img src="http://cache.addthiscdn.com/icons/v1/thumbs/32x32/addthis.png" width="32" height="32" border="0" alt="Share" /></a></li>
          </ul>
          <div class="right-group">
              <div class="border visit-block">
                <?php
                    $my_meta = get_post_meta($post->ID,'_home_meta',TRUE);
                    echo $my_meta['side-content'];
                ?>
              </div>
             
          </div>
        </aside>
      </section>

<?php get_footer(); ?>
