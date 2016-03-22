<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package citymacaron
 */

?>

	</div><!-- #content -->


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="logo"></div>
          <span class="footer-phone"><?php echo get_theme_mod( 'phone_number' ); ?></span>
          <span class="footer-city"><?php echo get_theme_mod( 'city_province' ); ?></span>
          <hr /><br />
          <span class="footer-copyright"><?php echo get_theme_mod( 'copyright_details' ); ?></span>
        </div>
        <div class="col-xs-12 col-md-4 footer-map-heading hidden-xs hidden-sm">
          <p>Located at:</p>
          <a href="<?php echo get_theme_mod( 'google_map_url' ); ?>"><div class="footer-map"></div></a>
        </div>
        <div class="col-xs-12 col-md-4 footer-social hidden-xs hidden-sm">
          <p>We're on social media! Follow us!</p>
          <ul>
            <a href="<?php echo get_theme_mod( 'facebook_url' ); ?>"><li class="footer-social-facebook"></li></a>
            <a href="<?php echo get_theme_mod( 'twitter_url' ); ?>"><li class="footer-social-twitter"></li></a>
            <a href="<?php echo get_theme_mod( 'instagram_url' ); ?>"><li class="footer-social-instagram"></li></a>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.navbar-toggle').on('click', function() {
        $('#expanded-responsive-nav-menu').slideToggle();
      });
    });
  </script>
</body>
</html>