<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<link rel="icon" type="image/png" href="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/favicon.png">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="author" content="<?php bloginfo( 'name' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/script/modernizr.js"></script>
		<script type="text/javascript" src="//use.typekit.net/cqy4fmu.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header" role="banner">
			<a class="nav-toggle" data-menu>
				<span></span>
				<span></span>
				<span></span>
			</a>
		</header>
		<nav class="header-nav" role="navigation">
			<ul class="header-list">
				<li><a class="nav-home" href="/"><i class="header-icon fa fa-home"></i>Home<i class="fa fa-angle-right"></i></a></li>
				<li><a href="/is/this"><i class="header-icon fa fa-users"></i>About<i class="fa fa-angle-right"></i></a></li>
				<li><a href="/says/hello"><i class="header-icon fa fa-envelope-o"></i>Contact Us<i class="fa fa-angle-right"></i></a></li>
				<li><a class="separate" href="/says/lets-get-started"><i class="header-icon fa fa-cogs"></i>Plan a Project<i class="fa fa-angle-right"></i></a></li>
				<li><a href="/does"><i class="header-icon fa fa-bolt"></i>Services<i class="fa fa-angle-right"></i></a></li>
				<li><a href="/makes"><i class="header-icon fa fa-rocket"></i>Projects<i class="fa fa-angle-right"></i></a></li>
				<li><a href="/thinks"><i class="header-icon fa fa-lightbulb-o"></i>Thoughts<i class="fa fa-angle-right"></i></a></li>
			</ul>
		</nav>
		<div class="content" id="main" role="main">
