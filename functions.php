<?php
/**
 * citymacaron functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package citymacaron
 */

if ( ! function_exists( 'citymacaron_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function citymacaron_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on citymacaron, use a find and replace
   * to change 'citymacaron' to the name of your theme in all the template files.
   */
  load_theme_textdomain( 'citymacaron', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'citymacaron' ),
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  /*
   * Enable support for Post Formats.
   * See https://developer.wordpress.org/themes/functionality/post-formats/
   */
  add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
  ) );

  // Set up the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'citymacaron_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
}
endif;
add_action( 'after_setup_theme', 'citymacaron_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function citymacaron_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'citymacaron_content_width', 640 );
}
add_action( 'after_setup_theme', 'citymacaron_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function citymacaron_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'citymacaron' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'citymacaron_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function citymacaron_scripts() {
  wp_enqueue_style( 'citymacaron-style', get_stylesheet_uri() );

  wp_enqueue_script( 'citymacaron-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'citymacaron-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'citymacaron_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Navigation Menus

register_nav_menus(array(
    'primary' => __( 'Main menu'),
));

function citymacaron_customizer_register($wp_customize) {

  //Start Logo image settings
  $wp_customize->add_section('citymacaron_images', array(
    'title' => __('Logo Image', 'citymacaron'),
    'description' => 'Modify the theme images'
  ));

  $wp_customize->add_setting('logo_image', array(
    'default' => 'http://localhost/wp-content/themes/citymacaron/images/masthead_bg.png',
  ));

  $wp_customize->add_control( new WP_Customize_Image_control($wp_customize, 'logo_image', array(
    'label' => __('Logo', 'citymacaron'),
    'section' => 'citymacaron_images',
    'settings' => 'logo_image'
  ) ));

  //Start Masthead image settings
  $wp_customize->add_section('citymacaron_images', array(
    'title' => __('Masthead Image', 'citymacaron'),
    'description' => 'Modify the masthead image'
  ));

  $wp_customize->add_setting('masthead_image', array(
    'default' => 'http://localhost/wp-content/themes/citymacaron/images/masthead_bg.png',
  ));

  $wp_customize->add_control( new WP_Customize_Image_control($wp_customize, 'logo_image', array(
    'label' => __('Masthead Image', 'citymacaron'),
    'section' => 'citymacaron_images',
    'settings' => 'masthead_image'
  ) ));


  //Start Frontpage mid-section image1 settings
  $wp_customize->add_section('citymacaron_frontpage_midsection_image1', array(
    'title' => __('Front-page Image #1', 'citymacaron'),
    'description' => 'Add/Edit Front-page Image #1'
  ));

  $wp_customize->add_setting('frontpage_midsection_image1', array(
    'default' => 'http://localhost/wp-content/themes/citymacaron/images/mid-section-1.jpg', 
  ));

  $wp_customize->add_control( new WP_Customize_Image_control($wp_customize, 'frontpage_midsection_image1' , array(
    'label' => __('Front Page Image #1', 'citymacaron'),
    'section' => 'citymacaron_frontpage_midsection_image1',
    'settings' => 'frontpage_midsection_image1'
  ) ) );

  //Start Frontpage mid-section image2 settings
  $wp_customize->add_section('citymacaron_frontpage_midsection_image2', array(
    'title' => __('Front-page Image #2', 'citymacaron'),
    'description' => 'Add/Edit Front-page Image #2'
  ));

  $wp_customize->add_setting('frontpage_midsection_image2', array(
    'default' => 'http://localhost/wp-content/themes/citymacaron/images/mid-section-2.jpg', 
  ));

  $wp_customize->add_control( new WP_Customize_Image_control($wp_customize, 'frontpage_midsection_image2' , array(
    'label' => __('Front Page Image #2', 'citymacaron'),
    'section' => 'citymacaron_frontpage_midsection_image2',
    'settings' => 'frontpage_midsection_image2'
  ) ) );

  //Start Frontpage mid-section image3 settings
  $wp_customize->add_section('citymacaron_frontpage_midsection_image3', array(
    'title' => __('Front-page Image #3', 'citymacaron'),
    'description' => 'Add/Edit Front-page Image #3'
  ));

  $wp_customize->add_setting('frontpage_midsection_image3', array(
    'default' => 'http://localhost/wp-content/themes/citymacaron/images/mid-section-3.jpg', 
  ));

  $wp_customize->add_control( new WP_Customize_Image_control($wp_customize, 'frontpage_midsection_image3' , array(
    'label' => __('Front Page Image #3', 'citymacaron'),
    'section' => 'citymacaron_frontpage_midsection_image3',
    'settings' => 'frontpage_midsection_image3'
  ) ) );


  //Start Google map image settings
  $wp_customize->add_section('citymacaron_google_map_image', array(
    'title' => __('Footer Google maps Image', 'citymacaron'),
    'description' => 'Add/Edit Footer Google maps Image'
  ));

  $wp_customize->add_setting('google_map_image', array(
    'default' => 'http://localhost/wp-content/themes/citymacaron/images/map.png', 
  ));

  $wp_customize->add_control( new WP_Customize_Image_control($wp_customize, 'frontpage_midsection_image3' , array(
    'label' => __('Google Map Image', 'citymacaron'),
    'section' => 'citymacaron_google_map_image',
    'settings' => 'google_map_image'
  ) ) );


  //Start Footer facebook image settings
  $wp_customize->add_section('citymacaron_footer_facebook_image', array(
    'title' => __('Footer Facebook Image', 'citymacaron'),
    'description' => 'Add/Edit Footer Facebook Image'
  ));

  $wp_customize->add_setting('footer_facebook_image', array(
    'default' => 'http://localhost/wp-content/themes/citymacaron/images/social-facebook.png', 
  ));

  $wp_customize->add_control( new WP_Customize_Image_control($wp_customize, 'footer_facebook_image' , array(
    'label' => __('Footer Facebook Image', 'citymacaron'),
    'section' => 'citymacaron_footer_facebook_image',
    'settings' => 'footer_facebook_image'
  ) ) );

  //Start Footer twitter image settings
  $wp_customize->add_section('citymacaron_footer_twitter_image', array(
    'title' => __('Footer Twitter Image', 'citymacaron'),
    'description' => 'Add/Edit Footer Twitter Image'
  ));

  $wp_customize->add_setting('footer_twitter_image', array(
    'default' => 'http://localhost/wp-content/themes/citymacaron/images/social-twitter.png', 
  ));

  $wp_customize->add_control( new WP_Customize_Image_control($wp_customize, 'footer_twitter_image' , array(
    'label' => __('Footer Twitter Image', 'citymacaron'),
    'section' => 'citymacaron_footer_twitter_image',
    'settings' => 'footer_twitter_image'
  ) ) );


  //Start Footer instagram image settings
  $wp_customize->add_section('citymacaron_footer_instagram_image', array(
    'title' => __('Footer Instagram Image', 'citymacaron'),
    'description' => 'Add/Edit Footer Instagram Image'
  ));

  $wp_customize->add_setting('footer_instagram_image', array(
    'default' => 'http://localhost/wp-content/themes/citymacaron/images/social-instagram.png', 
  ));

  $wp_customize->add_control( new WP_Customize_Image_control($wp_customize, 'footer_instagram_image' , array(
    'label' => __('Footer Instagram Image', 'citymacaron'),
    'section' => 'citymacaron_footer_instagram_image',
    'settings' => 'footer_instagram_image'
  ) ) );

  //Start Front page Image #1 text
  $wp_customize->add_section('citymacaron_frontpage_midsection_image1_text', array(
    'title' => __('Front-page Image #1 text', 'citymacaron'),
    'description' => 'Add/Edit Front-page Image #1 text'
  ));

  $wp_customize->add_setting('frontpage_midsection_image1_text', array(
    'default' => 'Mid-section Image #1 text', 
  ));

  $wp_customize->add_control( 'frontpage_midsection_image1_text' , array(
    'label' => __('Front Page Image #1 text', 'citymacaron'),
    'section' => 'citymacaron_frontpage_midsection_image1_text',
    'settings' => 'frontpage_midsection_image1_text'
  ));

  //Start Front page Image #2 text
  $wp_customize->add_section('citymacaron_frontpage_midsection_image2_text', array(
    'title' => __('Front-page Image #2 text', 'citymacaron'),
    'description' => 'Add/Edit Front-page Image #2 text'
  ));

  $wp_customize->add_setting('frontpage_midsection_image2_text', array(
    'default' => 'Mid-section Image #2 text', 
  ));

  $wp_customize->add_control( 'frontpage_midsection_image2_text' , array(
    'label' => __('Front Page Image #2 text', 'citymacaron'),
    'section' => 'citymacaron_frontpage_midsection_image2_text',
    'settings' => 'frontpage_midsection_image2_text'
  ));

  //Start Front page Image #3 text
  $wp_customize->add_section('citymacaron_frontpage_midsection_image3_text', array(
    'title' => __('Front-page Image #3 text', 'citymacaron'),
    'description' => 'Add/Edit Front-page Image #3 text'
  ));

  $wp_customize->add_setting('frontpage_midsection_image3_text', array(
    'default' => 'Mid-section Image #3 text', 
  ));

  $wp_customize->add_control( 'frontpage_midsection_image3_text' , array(
    'label' => __('Front Page Image #3 text', 'citymacaron'),
    'section' => 'citymacaron_frontpage_midsection_image3_text',
    'settings' => 'frontpage_midsection_image3_text'
  )); 

  //Start Phone Number
  $wp_customize->add_section('citymacaron_phone_number', array(
    'title' => __('Phone Number', 'citymacaron'),
    'description' => 'Add/Edit Phone number'
  ));

  $wp_customize->add_setting('phone_number', array(
    'default' => '(604) 308-8912', 
  ));

  $wp_customize->add_control( 'citymacaron_phone_number' , array(
    'label' => __('Phone number', 'citymacaron'),
    'section' => 'citymacaron_phone_number',
    'settings' => 'phone_number'
  )); 

  //Start Phone Number
  $wp_customize->add_section('citymacaron_city_province', array(
    'title' => __('City and province', 'citymacaron'),
    'description' => 'Add/Edit Phone number'
  ));

  $wp_customize->add_setting('city_province', array(
    'default' => 'Vancouver, British Columbia', 
  ));

  $wp_customize->add_control( 'city_province' , array(
    'label' => __('City, Province', 'citymacaron'),
    'section' => 'citymacaron_city_province',
    'settings' => 'city_province'
  ));

// echo get_theme_mod( 'facebook_url' ); 
  
  //Start Facebook url
  $wp_customize->add_section('citymacaron_facebook_url', array(
    'title' => __('Facebook URL', 'citymacaron'),
    'description' => 'Add/Edit Facebook link'
  ));

  $wp_customize->add_setting('facebook_url', array(
    'default' => 'https://www.facebook.com/City-Macaron-1418249698495147/', 
  ));

  $wp_customize->add_control( 'facebook_url' , array(
    'label' => __('Facebook link URL', 'citymacaron'),
    'section' => 'citymacaron_facebook_url',
    'settings' => 'facebook_url'
  ));

  //Start Twitter url
  $wp_customize->add_section('citymacaron_twitter_url', array(
    'title' => __('Twitter URL', 'citymacaron'),
    'description' => 'Add/Edit Twitter link'
  ));

  $wp_customize->add_setting('twitter_url', array(
    'default' => 'https://www.facebook.com/City-Macaron-1418249698495147/', 
  ));

  $wp_customize->add_control( 'twitter_url' , array(
    'label' => __('Twitter link URL', 'citymacaron'),
    'section' => 'citymacaron_twitter_url',
    'settings' => 'twitter_url'
  ));

  //Start Instagram url
  $wp_customize->add_section('citymacaron_instagram_url', array(
    'title' => __('Instagram URL', 'citymacaron'),
    'description' => 'Add/Edit Instagram link'
  ));

  $wp_customize->add_setting('instagram_url', array(
    'default' => 'https://www.facebook.com/City-Macaron-1418249698495147/', 
  ));

  $wp_customize->add_control( 'instagram_url' , array(
    'label' => __('Instagram link URL', 'citymacaron'),
    'section' => 'citymacaron_instagram_url',
    'settings' => 'instagram_url'
  ));


  //Start Read more url
  $wp_customize->add_section('citymacaron_masthead_readmore_url', array(
    'title' => __('Masthead Read-more URL', 'citymacaron'),
    'description' => 'Add/Edit Masthead Read-more link'
  ));

  $wp_customize->add_setting('readmore_url', array(
    'default' => 'http://www.citymacaron.ca/about/'
  ));

  $wp_customize->add_control( 'readmore_url' , array(
    'label' => __('Masthead Read-more URL', 'citymacaron'),
    'section' => 'citymacaron_masthead_readmore_url',
    'settings' => 'readmore_url'
  )); 

  //Start Google map url
  $wp_customize->add_section('citymacaron_google_map_url', array(
    'title' => __('Google map URL', 'citymacaron'),
    'description' => 'Add/Edit Google map link'
  ));

  $wp_customize->add_setting('google_map_url', array(
    'default' => 'https://www.google.com/maps/place/Denman+St+%26+Comox+St,+Vancouver,+BC+V6G,+Canada/@49.2886941,-123.1418624,17z/data=!3m1!4b1!4m2!3m1!1s0x5486722627cbf4bb:0x156aeee6011a58ee'
  ));

  $wp_customize->add_control( 'google_map_url' , array(
    'label' => __('Google Map URL', 'citymacaron'),
    'section' => 'citymacaron_google_map_url',
    'settings' => 'google_map_url'
  ));   

  //Start Masthead Primary heading text
  $wp_customize->add_section('citymacaron_masthead_primary_heading', array(
    'title' => __('Masthead Primary heading text', 'citymacaron'),
    'description' => 'Add/Edit Masthead Main heading text'
  ));

  $wp_customize->add_setting('masthead_primary_heading_text', array(
    'default' => 'Simply Delicious'
  ));

  $wp_customize->add_control( 'masthead_primary_heading_text' , array(
    'label' => __('Masthead Read-more URL', 'citymacaron'),
    'section' => 'citymacaron_masthead_primary_heading',
    'settings' => 'masthead_primary_heading_text'
  ));

  //Start Masthead Secondary heading text
  $wp_customize->add_section('citymacaron_masthead_secondary_text', array(
    'title' => __('Masthead Secondary text', 'citymacaron'),
    'description' => 'Add/Edit Masthead Secondary text'
  ));

  $wp_customize->add_setting('masthead_secondary_text', array(
    'default' => 'Simply Delicious'
  ));

  $wp_customize->add_control( 'masthead_secondary_text' , array(
    'label' => __('Masthead Secondary text', 'citymacaron'),
    'section' => 'citymacaron_masthead_secondary_text',
    'settings' => 'masthead_secondary_text'
  ));   

  //Start copyright settings
  $wp_customize->add_section('citymacaron_copyright', array(
    'title' => __('Copyright Details', 'citymacaron'),
    'description' => 'Add/Edit copyright information'
  ));

  $wp_customize->add_setting('copyright_details', array(
    'default' => '&copy; ' . date('Y') . ' City Macaron. All rights reserved.', 
  ));

  $wp_customize->add_control( 'copyright_details' , array(
    'label' => __('Copyright Information', 'citymacaron'),
    'section' => 'citymacaron_copyright',
    'settings' => 'copyright_details'
  ));

}

function citymacaron_css_customizer() {
  ?>
  <style type="text/css">
    .logo { 
      background-image: url("<?php echo get_theme_mod( 'logo_image' ); ?>");
      width: 204px;
      height: 44px;
      margin-top: 15px;
    } 

    #front_page {
      background-image: url("<?php echo get_theme_mod( 'masthead_image' ); ?>");
      -webkit-background-size: 100% 100%;
      -moz-background-size: 100% 100%;
      -o-background-size: 100% 100%;
      //background-size: cover;
      background-size: 100% 100%;
      background-image: no-repeat;
      width: 100%;
      height: 579px;
      font-family: 'Montserrat';
      top: 0 !important;
      display: inline-block;
      margin-top: 5px;      
    }

    .mid-section-image-1 {
      background-image: url('<?php echo get_theme_mod( 'frontpage_midsection_image1' ); ?>');
      margin-top: 70px;
      width: 150px;
      height: 150px;
      text-align: center;
      border: #fff 2px;
      z-index: -999;
    }

    .mid-section-image-2 {
      background-image: url('<?php echo get_theme_mod( 'frontpage_midsection_image2' ); ?>');
      margin-top: 70px;
      width: 150px;
      height: 150px;
      text-align: center;
      border: #fff 2px;
      z-index: -999;
    }

    .mid-section-image-3 {
      background-image: url('<?php echo get_theme_mod( 'frontpage_midsection_image3' ); ?>');
      margin-top: 70px;
      width: 150px;
      height: 150px;
      text-align: center;
      border: #fff 2px;
      z-index: -999;
    } 


    .footer-map {
      background-image: url('<?php echo get_theme_mod( 'google_map_image' ); ?>');
      width: 142px;
      height: 132px;
      margin-top: 10px;
      margin-left: 135px;
    } 

    li.footer-social-facebook {
      width: 35px;
      height: 35px;
      background-image: url('<?php echo get_theme_mod( 'footer_facebook_image' ); ?>');
    }

    li.footer-social-twitter {
      width: 35px;
      height: 35px;
      background-image: url('<?php echo get_theme_mod( 'footer_twitter_image' ); ?>');
    }

    li.footer-social-instagram {
      width: 35px;
      height: 35px;
      background-image: url('<?php echo get_theme_mod( 'footer_instagram_image' ); ?>');
    }    

  </style>
  <?php
}

add_action('customize_register', 'citymacaron_customizer_register');
add_action('wp_head', 'citymacaron_css_customizer');


?>
