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
          <span class="footer-phone">(604) 308-8912</span>
          <span class="footer-city">Vancouver, British Columbia</span>
          <hr /><br />
          <span class="footer-copyright">&copy; 2016 City Macaron. All rights reserved.</span>
        </div>
        <div class="col-xs-12 col-md-4 footer-map-heading hidden-xs hidden-sm">
          <p>Located at:</p>
          <a href="https://www.google.com/maps/place/Denman+St+%26+Comox+St,+Vancouver,+BC+V6G,+Canada/@49.2886941,-123.1418624,17z/data=!3m1!4b1!4m2!3m1!1s0x5486722627cbf4bb:0x156aeee6011a58ee"><div class="footer-map"></div></a>
        </div>
        <div class="col-xs-12 col-md-4 footer-social hidden-xs hidden-sm">
          <p>We're on social media! Follow us!</p>
          <ul>
            <a href="#"><li class="footer-social-facebook"></li></a>
            <a href="#"><li class="footer-social-twitter"></li></a>
            <a href="#"><li class="footer-social-instagram"></li></a>
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