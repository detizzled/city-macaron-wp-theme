<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package citymacaron
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>City Macaron</title>
  <link rel='stylesheet' href='<?php get_bloginfo('template_directory');  ?>/style.css' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
</head>
<body <?php body_class(); ?>>
  <header>
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
  </header>

<?php wp_head(); ?>
<div id="page" class="site">
  <div id="content" class="site-content">