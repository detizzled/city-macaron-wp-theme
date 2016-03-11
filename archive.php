<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package citymacaron
 */

get_header(); ?>
	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-xs-9" style='background-color: red;'>
				<?php
				if ( have_posts() ) : ?>
					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
			<div class="col-xs-3">
				<?php get_sidebar(); ?>			
			</div>
		</div>
	</div>




<?php get_footer(); ?>
