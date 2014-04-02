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
			<div class="welcome" data-bg-image="<?php bloginfo(template_url); ?>/assets/images/06.jpg" data-fill>
				<h1 class="welcome-title">starbase<br><b>go!</b></h1>
			</div>

			<div class="arrow"></div>

<svg width="100%" height="500" xmlns="http://www.w3.org/2000/svg" >
    <marker id="triangle" viewBox="0 0 10 10" refX="1" refY="5" markerUnits="strokeWidth" markerWidth="4" markerHeight="3" orient="auto">
      <path d="M 0 0 L 10 5 L 0 10 z"/>
    </marker>
	<path d="M200,300 Q400,50 600,300 T1000,300" marker-end="url(#triangle)" stroke="black" stroke-width="10" fill="none"/>
	<path d="M100,400 Q500,30 600,300 T800,300" marker-end="url(#triangle)" stroke="black" stroke-width="10" fill="none"/>
</svg>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
				
					<section class="entry-content">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
						<?php the_content(); ?>
						<div class="entry-links"><?php wp_link_pages(); ?></div>
					</section>
				</article>
			<?php endwhile; endif; ?>

<?php get_footer(); ?>
