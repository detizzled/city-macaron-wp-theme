<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package citymacaron
 */

get_header(); ?>

  <div id="mid-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-4 mid-section-item">
          <img src="images/mid-section-1.jpg" class="mid-section-image-1" /><br />
          <p>Lorem Ipsum is simply Korem<br />
          lorem ipsum lorem ipsum</p>
        </div>
        <div class="col-xs-4 mid-section-item">
          <img src="images/mid-section-2.jpg" class="mid-section-image-2" /><br />
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
