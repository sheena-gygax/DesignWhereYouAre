<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

    </div><!-- .site-content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
      <?php get_template_part('social-nav') ?>
      <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <div class='copy-right'>All Rights Reserved © <?php echo date("Y"); ?> | Design Where You Are | Bend, Oregon | (509) 341-4797 </div>
        <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'menu_class'     => 'primary-menu',
             ) );
          ?>
        </nav><!-- .main-navigation -->
      <?php endif; ?>

      <?php if ( has_nav_menu( 'social' ) ) : ?>
        <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'social',
              'menu_class'     => 'social-links-menu',
              'depth'          => 1,
              'link_before'    => '<span class="screen-reader-text">',
              'link_after'     => '</span>',
            ) );
          ?>
        </nav><!-- .social-navigation -->
      <?php endif; ?>
    </footer><!-- .site-footer -->
  </div><!-- .site-inner -->
</div><!-- .site -->
<?php wp_footer(); ?>
</body>
</html>
