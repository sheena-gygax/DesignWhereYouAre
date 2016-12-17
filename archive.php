<?php
/*
Template Name: Project Group
*/
get_header(); ?>

<div id="container">
	<div id="content" role="main">

		<?php
			if ( is_page( 'residential' ) ) {    
				query_posts('cat=5');
			} elseif ( is_page( 'commercial' ) ) {   
			    query_posts('cat=6');
			} elseif ( is_page( 'hand-renderings' ) ) { 
			    query_posts('cat=7');
			} 
		?>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php if ( has_post_thumbnail() ) : ?>
	    			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	        		<?php the_post_thumbnail('category-thumb'); ?>
	    			</a>
					<?php endif; ?>
				</div>
				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
					<div class="corner-bottom-left"></div></h2>
			</div>

		<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>