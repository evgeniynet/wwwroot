<?php
/**
 * Template Name: Home
 *
 * For SherpaDesk Home
 *
 * @package sparkling
 */

get_header(); ?>
<style>
.top-section{
	display: none;
}
</style>
  <div id="primary" class="content-area">
    
    <main id="main" class="site-main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>

        <?php echo get_post_field('post_content', $post->ID); ?>

      <?php endwhile; // end of the loop. ?>
    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>