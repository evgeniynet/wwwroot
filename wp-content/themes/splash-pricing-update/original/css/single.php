<?php get_header(); ?>
    <!-- Main.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.color.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/Chart.js"></script>

        <!-- Fonts & Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/sherpaFace.png">



    <h1 class="pageH1">The Sherpa Blog</h1>

<div class="container">
	<?php get_template_part('templates/content', 'single'); ?>
</div>
<?php get_footer(); ?>