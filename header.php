<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#9848a8">
		<meta name="theme-color" content="#ffffff">

        <link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome.min.css" rel="stylesheet">

		<script src="<?php echo get_template_directory_uri(); ?>/jquery-3.1.1.min.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/lib/parallax.min.js" type="text/javascript"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">



		<?php

			wp_register_script( 'myscript', get_bloginfo("template_url") + "/script.js", $deps = array(), $ver = null );
			wp_localize_script('myscript', 'WPURLS', array( 'siteurl' => get_option('siteurl'), 'templateurl' => get_bloginfo("template_url") ));
			wp_enqueue_script( 'myscript' );?>


	<script type="text/javascript">
			//var templateUrl = '<?= get_bloginfo("template_url"); ?>';
		</script>

		<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper2">
			<a href="" id="home" class="nav-anchor visuallyhidden">Home</a>

			<!-- header -->
			<header class="header clear container" role="banner">

					<!-- logo
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<!--<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav navbar-default navbar-fixed-top" role="navigation">
						<div class="container header-container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#"><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></a>
				        	</div>
							<?php html5blank_nav(); ?>
							<?php html5blank_secondarynav(); ?>
							<h3 class="subtitle"><?php bloginfo('description'); ?></h3>
						</div>
					</nav>
					<!-- /nav -->



			</header>
			<!-- /header -->
