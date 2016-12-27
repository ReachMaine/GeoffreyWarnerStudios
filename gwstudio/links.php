<?php $social_options = get_option( 'sandbox_theme_social_options' ); ?> 
<section class="social-icon">
  <ul id="icons" class="clearfix">
    <li><a href="<?php echo $social_options['shoppingcart'] ?>" class="cart">Shopping<br/>Cart</a></li>
  </ul>
  <ul class="social-icon">
    <li><a href="<?php echo $social_options['facebook'] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="" /></a></li>
    <li><a href="<?php echo $social_options['twitter'] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="" /></a></li>
    <li><a href="<?php echo $social_options['linkedin'] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="" /></a></li>
    <li><a class="addthis_button" href="http://www.addthis.com/bookmark.php"><img src="http://cache.addthiscdn.com/icons/v1/thumbs/32x32/addthis.png" width="32" height="32" border="0" alt="Share" /></a></li>
  </ul>
</section>
