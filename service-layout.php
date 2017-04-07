<?php
/*
Template Name: Service Layout
*/
get_header(); ?>

<div id="container">
  <?php while ( have_posts() ) : the_post(); ?>
	<div id="content" role="main">
  		<div><?php the_content(); ?></div>
	</div><!-- #content -->

  <div class="bottom">
    <div class="left">
      <?php the_field('half_content_block_left'); ?>
    </div>
    <div class="right">
      <?php the_field('half_content_block_right'); ?>
    </div>
  </div>
  <?php endwhile; // end of the loop. ?>
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
