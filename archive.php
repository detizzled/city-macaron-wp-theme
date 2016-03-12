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
			<div class="col-xs-9">
				<div class="well">
					<?php
					if ( have_posts() ) : ?>
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>

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
			</div>
			<div class="col-xs-3">
				<div class="well">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>




<?php get_footer(); ?>
