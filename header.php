<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title>
			<?php bloginfo('name'); ?> | 
			<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
		</title>
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		<!--<link rel="stylesheet" href="css/main.css"> -->
		<?php wp_head(); ?>
	</head>
	<body >
		<header id="header">
			<!-- <div id="logo" class="visible-lg">
					<a href="#"><img src="images/watermark1 copy.png" alt=""></a>
			</div> -->
			<nav id="navbar-main" class="navbar navbar-inverse navbar-custom" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand visible-md visible-lg" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/images/watermark1.png" alt=""></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav"> -->
							 <?php
					            wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'container'         => 'div',
					                'container_class'   => 'collapse navbar-collapse',
					        'container_id'      => 'bs-example-navbar-collapse-1',
					                'menu_class'        => 'nav navbar-nav',
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
					        ?>
						<!-- </ul> -->
						<!-- <ul class="nav navbar-nav navbar-right">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
						</ul> -->
					</div>
				</div>
				<!-- /.container -->
			</nav>
		</header><!-- /header -->