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
      <?php /**bloginfo('description'); */ ?> 

      <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

      <?php
        $args = array(
         'cat' => '4'
        );
        $the_query = new WP_Query( $args );
      ?>

      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


      <section>
        <h2><?php the_title() ;?></h2>
        <div><?php the_content(); ?></div>
      </section>

      <?php endwhile; else: ?>

        <p>Sorry, there are no posts to display</p>

      <?php endif; ?>

      <?php wp_reset_query(); ?>




    </main><!-- .site-main -->

<!--   <section class="contact">
    <button class="ripple">Contact</button>
  </section> -->
  </div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
