<?php get_header(); ?>

<!--<div class="pageTitleCover">
	<h1><?php echo get_the_title($ID); ?></h1>
</div>-->
<div class="container">
 <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="entry">
   <?php the_content(); ?>
 </div>



<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else: ?>


 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>


 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
</div>
 <?php get_footer(); ?>