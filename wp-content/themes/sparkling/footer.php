<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package sparkling

 */

?>

			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->

		</div><!-- close .row -->

	</div><!-- close .container -->

</div><!-- close .site-content -->





<?php if( is_front_page() ) : ?>

<div class="mobile-home">

	<div class="container">

		<div class="row">

			<div class="col-sm-12">

				<h1 style="text-align: center;">Stay in Touch with Customers 24/7</h1>

			</div>

		</div>

		<div class="row">

		<div class="col-sm-6">

			<p>SherpaDesk Tote allows you and your team to stay connected to your customers whether you are in the field, on the road, or simply do not feel like firing up your computer. Our mobile app lets you manage support tickets, track time, and send invoices from the palm of your hand.</p>

		<div class="row">

			<div class="col-sm-12">

				<ul class="list-unstyled list-inline">

					<li>

						<a target="_blank" href="https://itunes.apple.com/us/app/sherpadesk-tote/id766614805?mt=8">

						<img src="<?php echo get_template_directory_uri(); ?>/images/apple.png" /></a>

					</li>

					<li>

						<a target="_blank" href="https://play.google.com/store/apps/details?id=com.sherpadesk.mobile&amp;hl=en">

						<img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.png" /></a>

					</li>

				</ul>

			</div>

		</div>

		</div>

		<div class="col-sm-6">

			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/mobile.png" />

		</div>

		</div>

		

	</div>

</div>

<div class="get-started-home">

	<div class="container">

		<div class="col-sm-5 col-sm-offset-5">

			<h1>Start The Climb</h1>

			<p>

				<a href="http://sherpadesk.com/start-your-climb/" class="btn btn-block btn-success btn-lg">Set Up Your HelpDesk</a>

			</p>

		</div>

	</div>

</div>

<?php endif;?>



<?php if( is_page( 'Pricing' )  ) : ?>

<div class="bottom-trust">

    <div class="container">

        <h1>

            Join Over <strong>300+ Organizations</strong> who trust our solutions<br>

            to track customer issues and log hourly time

        </h1>

    </div>

</div>

<?php endif;?>

	<div id="footer-area">

		<div class="container footer-inner">

			<div class="row">

				<?php get_sidebar( 'footer' ); ?>

			</div>

		</div>



		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info container">

				<div class="row">

					<?php sparkling_social(); ?>

					<nav role="navigation" class="col-md-6">

						<?php sparkling_footer_links(); ?>

					</nav>

					<div class="copyright col-md-6">

						SherpaDesk &copy; <?php echo date("Y") ?>

					</div>

				</div>

			</div><!-- .site-info -->

			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->

		</footer><!-- #colophon -->

	</div>

</div><!-- #page -->



<?php wp_footer(); ?>



<script>

	jQuery('.menu-item a[title="contact"]').on('click', function(e){

		e.preventDefault();

		SD_Widget('https://support.sherpadesk.com', 2948);

	});

</script>



</body>

</html>