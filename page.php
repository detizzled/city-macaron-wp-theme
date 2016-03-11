<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package citymacaron
 */

get_header(); ?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
daskjdkldas
daskjdkldas
daskjdkldas
daskjdkldas
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<?php 

while ( have_posts() ) : the_post();

	get_template_part( 'content', 'page' );

	if ( comments_open() || get_comments_number() ) :
			comments_template();
	endif;


endwhile;

?>


<?php
get_sidebar();
get_footer();