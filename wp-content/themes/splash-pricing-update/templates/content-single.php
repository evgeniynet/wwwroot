<div class="col-sm-10 col-sm-offset-1">
  <span class="singlePagePost"></span>
  <div class="newPostButton backToBlog"><i id="newPost" class="fa fa-chevron-left"><span>Blog</span></i></div>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="postPageTitle entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <div class="entry-byline">
    	<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), 80 ); }?>
    	<div id="author-info">
            <h3>About <?php the_author(); ?></h3>
            <p><?php the_author_meta('description'); ?></p>
        </div>
    </div>
    
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
</div>