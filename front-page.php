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
    <div class="nav navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <div class="row">
            <div class="col-xs-3">
              <a href="<?php get_site_url(); ?>">
                <div class="logo"></div>
              </a>
            </div>
            <div class="col-xs-9">
              <div class="navbar-collapse collapse hidden-xs hidden-sm">
                <nav>
                  <?php 
                    $args = array(
                        'theme_location' => 'primary',
                    )
                  ?>

                  <?php wp_nav_menu( $args ); ?>
                </nav>              
              </div>              
            </div>

            <div id="expanded-responsive-nav-menu" class="hidden-sm hidden-md hidden-lg hidde-xl" style="display: none">
              <?php $res_args = array('theme_location' => 'primary', 'menu_class' => 'expanded-responsive-nav-menu') ?>
              <?php wp_nav_menu( $res_args ); ?>
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
      <div class="row" style="clear: both">
        <div class="col-xs-12 col-md-4 mid-section-item">
          <img class="mid-section-image-1" /><br />
          <p>Lorem Ipsum is simply Korem<br />
          lorem ipsum lorem ipsum</p>
        </div>
        <div class="col-xs-12 col-md-4 mid-section-item">
          <img class="mid-section-image-2" /><br />
          <p>Lorem Ipsum is simply Korem<br />
          lorem ipsum lorem ipsum</p>
        </div>
        <div class="col-xs-12 col-md-4 mid-section-item">
          <img class="mid-section-image-3" /><br />
          <p>Lorem Ipsum is simply Korem<br />
          lorem ipsum lorem ipsum</p>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>


<?php wp_footer(); ?>  
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>  