<?php
/**
 * Template Name: Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <h1><?php bloginfo('description');  ?></h1>

      <?php while ( have_posts() ) : the_post();
  				get_template_part( 'template-parts/content', get_post_format() );
      endwhile; ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
