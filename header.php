<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="author" content="<?php bloginfo( 'name' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header" role="banner">
			<?php if ( get_theme_mod( 'mondrian_logo' ) ) : ?>
				<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'mondrian_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'mondrian' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h1>
			<?php endif; ?>
			<nav class="nav" role="navigation">
				<div class="search"><?php get_search_form(); ?></div>
				<?php wp_nav_menu( array( 'container' => false,
																	'menu_class' => 'nav-menu', 
																	'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</header>
		<div class="content" role="main">
