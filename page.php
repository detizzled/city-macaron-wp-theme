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
  <div class="container" style='margin-top: 50px'>
  	<div class="row">
  		<div class="col-xs-12 col-md-9">
        <div class="well">
  		    <div id="primary" class="content-area">
  		      <main id="main" class="site-main" role="main">
  		        <?php
  		        if ( is_page( 'About' ) ) :
  		            while ( have_posts() ) : the_post();

  		              get_template_part( 'template-parts/content', 'page' );

  		              // If comments are open or we have at least one comment, load up the comment template.
  		              if ( comments_open() || get_comments_number() ) :
  		                comments_template();
  		              endif;

  		            endwhile; // End of the loop.     

  		        elseif ( is_page( 'Blog' ) ):
  		            query_posts('posts_per_page=5&post_type=post');
  		            while ( have_posts() ) : the_post();

  		              get_template_part( 'template-parts/content', 'page' );

  		              // If comments are open or we have at least one comment, load up the comment template.
  		              if ( comments_open() || get_comments_number() ) :
  		                comments_template();
  		              endif;

  		            endwhile; // End of the loop.          
  		        endif;
  		        ?>        		     
  		      </main><!-- #main -->
  		    </div><!-- #primary -->
        </div>
    	</div>

    	<div class="col-xs-12 col-md-3">
        <div class="well">
    		  <?php get_sidebar(); ?>
        </div>
    	</div>
    </div>
  </div>

<?php 
get_footer();
