<?php
/**
 * @package _s
 */

get_header(); ?>

<div class="container">
  

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

   <?php 
    $args = array( 
      // Sheena set the category ID Here
     'cat' => '2'
    );
    $the_query = new WP_Query( $args );
   ?>

  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <h1><?php the_title() ;?></h1>      
  <?php the_excerpt(); ?>

<?php endwhile; else: ?>

  <p>Sorry, there are no posts to display</p>

<?php endif; ?>

<?php wp_reset_query(); ?>
    </main><!-- #main -->
  </div><!-- #primary -->

  <?php get_sidebar(); ?>

</div><!-- #container -->
<?php get_footer(); ?>
