<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="author" content="<?php bloginfo( 'name' ); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

		<script type="text/javascript" src="//use.typekit.net/cqy4fmu.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header header-welcome" role="banner">
			<a class="nav-toggle" data-menu><span class="nav-text">Menu</span><i class="nav-icon"></i></a>
		</header>
		<nav class="header-nav" role="navigation">
			<a class="nav-toggle" data-menu><i class="nav-icon"></i></a>
			<?php wp_nav_menu( array( 'container' => false,
																'menu_class' => 'nav-menu', 
																'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<div class="content" role="main">
			<section class="welcome" data-bg-image="<?php bloginfo(template_url); ?>/assets/images/06.jpg" data-fill>
				<h1 class="welcome-title">starbase<b>go!</b></h1>
			</section>

			<div class="arrow"></div>

			<section class="about" data-fill>
				<div class="effect">
				</div>
			</section>

			<section class="featured-projects" data-fill>
				<div class="effect">
				</div>
			</section>

			<section class="featured-client" data-fill>
				<div class="effect">
				</div>
			</section>

			<section class="team" data-fill>
				<div class="effect">
				</div>
			</section>

			<section class="contact" data-fill>
				<div class="effect">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</section>

<?php get_footer(); ?>
