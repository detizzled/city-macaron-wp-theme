<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel='stylesheet' href='style.css' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

</head>
<body>
  <header id="front_page">
    <div class="navigation">
      <div class="container">
        <div class="row">
          <div class="col-xs-3">
            <a href="<?php get_site_url(); ?>">
              <div class="logo"></div>
            </a>
          </div>
          <div class="col-xs-9">
            <nav>
              <?php 
                $args = array(
                    'theme_location' => 'primary'
                )
              ?>

              <?php wp_nav_menu( $args ); ?>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="container masthead-text text-center">
      <h1 class="text-left">Simply Delicious</h1>
      <p class="text-left">Coming soon!</p>
      <button class='btn btn-rounded'> Read more </button>
    </div>
  </header>

  <div id="mid-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-4 mid-section-item">
          <img class="mid-section-image-1" /><br />
          <p>Lorem Ipsum is simply Korem<br />
          lorem ipsum lorem ipsum</p>
        </div>
        <div class="col-xs-4 mid-section-item">
          <img class="mid-section-image-2" /><br />
          <p>Lorem Ipsum is simply Korem<br />
          lorem ipsum lorem ipsum</p>
        </div>
        <div class="col-xs-4 mid-section-item">
          <img class="mid-section-image-3" /><br />
          <p>Lorem Ipsum is simply Korem<br />
          lorem ipsum lorem ipsum</p>
        </div>
      </div>
    </div>
  </div>


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

</body>
</html>  