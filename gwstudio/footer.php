<?php $social_options = get_option( 'sandbox_theme_social_options' ); ?> 
      <footer>
        <div class="clearfix formrow"> <a href="<?php echo $social_options['storiespage'] ?>" class="btn-stories"><img src="<?php bloginfo('template_directory'); ?>/images/btn-read-stories.gif" alt="" /></a>
          <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post">
            <fieldset>
              <input type="hidden" name="llr" value="wueyj4dab">
              <input type="hidden" name="m" value="1103783269014">
              <input type="hidden" name="p" value="oi">
              <label for="emailid">SIGN UP FOR OUR NEWSLETTER<a href="<?php echo $social_options['privacypolicy'] ?>"> (privacy policy)</a></label>
              <input class="txt" type="email" name="ea" placeholder="your email address" />
              <input class="img" name="submit" type="image" value="submit" src="<?php bloginfo('template_directory'); ?>/images/btn-signup.gif" alt="Signup">
            </fieldset>
          </form>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'footer_nav', 'container' => 'nav' ) ); ?>
        <p>Geoffrey Warner Studio <img src="<?php bloginfo('template_directory'); ?>/images/dot.gif" alt="" /> 43 N Main St. (RT 15) <img src="<?php bloginfo('template_directory'); ?>/images/dot.gif" alt="" /> Stonington, ME 04681 <img src="<?php bloginfo('template_directory'); ?>/images/dot.gif" alt="" /> 207.367.6555 <a href="mailto:<?php echo antispambot($social_options['emailaddress']); ?>">email Geoff</a></p>
        <p class="copyright">Copyright &copy; 2012 Geoffrey Warner Studio Designed by Iana CraneWing and built by <a href="http://www.xhtml-lab.com" rel="external">XHTML Lab</a></p>
      </footer>
    </div>
    
    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquerycssmenu.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.carouFredSel-5.4.1-packed.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
</body>
</html>
