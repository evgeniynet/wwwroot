<?php get_header(); ?>
<div class="container">
    <div class="col-md-12">			
        
        <?php if (!have_posts()) : ?>
          <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
          </div>
          <?php get_search_form(); ?>
        <?php endif; ?>
        
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/content', get_post_format()); ?>
        <?php endwhile; ?> 
       

    </div>
</div>
<?php if ($wp_query->max_num_pages > 1) : ?>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">	            
			<ul class="pager">
			  <li class="previous"><?php next_posts_link(__(' Older posts', 'roots')); ?></li>
			  <li class="next"><?php previous_posts_link(__('Newer posts ', 'roots')); ?></li>
			</ul>
		</div>
	</div>
<?php endif; ?>

 <?php get_footer(); ?>