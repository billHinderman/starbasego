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
				<h1 class="welcome-title">starbase<br><b>go!</b></h1>
			</section>

			<div class="arrow"></div>

			<svg width="100%" height="500" xmlns="http://www.w3.org/2000/svg" >
			    <marker id="triangle" viewBox="0 0 10 10" refX="1" refY="5" markerUnits="strokeWidth" markerWidth="4" markerHeight="3" orient="auto">
			      <path d="M 0 0 L 10 5 L 0 10 z"/>
			    </marker>
				<path d="M200,300 Q400,50 600,300 T1000,300" marker-end="url(#triangle)" stroke="black" stroke-width="10" fill="none"/>
				<path d="M100,400 Q500,30 600,300 T800,300" marker-end="url(#triangle)" stroke="black" stroke-width="10" fill="none"/>
			</svg>


			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" xml:space="preserve">
				<path d="M938.7,0L938.7 512 938.7 1024 853.3 1024 853.3 512 853.3 0 768 0 768 512 768 1024 682.7 1024 682.7 512 682.7 0 597.3 0 597.3 512 597.3 1024 426.7 1024 426.7 512 426.7 0 341.3 0 341.3 512 341.3 1024 256 1024 256 512 256 0 170.7 0 170.7 512 170.7 1024 85.3 1024 85.3 512 85.3 0 0 85.3 512 85.3 1024 85.3 1024 170.7 512 170.7 0 170.7 0 256 512 256 1024 256 1024 341.3 512 341.3 0 341.3 0 426.7 512 426.7 1024 426.7 1024 597.3 512 597.3 0 597.3 0 682.7 512 682.7 1024 682.7 1024 768 512 768 0 768 0 853.3 512 853.3 1024 853.3 1024 938.7 512 938.7 0 938.7 z" stroke="black" stroke-width="10" fill="none"/>
			</svg>

			<section class="about" data-fill>
				blah
			</section>

			<section class="featured-projects" data-fill>
				blah
			</section>

			<section class="featured-client" data-fill>
				blah
			</section>

			<section class="team" data-fill>
				blah
			</section>

			<section class="contact" data-fill>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</section>
			
<?php get_footer(); ?>
