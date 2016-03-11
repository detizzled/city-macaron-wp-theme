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


<?php get_footer(); ?>


<?php wp_footer(); ?>

</body>
</html>  