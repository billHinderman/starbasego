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
			<section class="welcome" data-bg-image="<?php bloginfo(template_url); ?>/assets/images/colony/02.jpg" data-fill>
				<div class="effect">
					<h1 class="welcome-title">starbase<br><b>go!</b></h1>
				</div>
			</section>

			<section class="section about" data-fill>
				<div class="effect">
					<h2>We Are</h2>
					<?php query_posts('category_name=is&tag=homepage&posts_per_page=1'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   <?php the_content(); ?>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>

			<section class="section featured-projects">
				<div class="effect">
					<h2>Our Projects</h2>
					<?php query_posts('category_name=makes&tag=featured&posts_per_page=4'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   <?php the_content(); ?>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>

			<section class="section featured-client">
				<div class="effect">
					<h2>Our Clients</h2>
					<?php query_posts('category_name=loves&tag=featured&posts_per_page=4'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   <?php the_content(); ?>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>

			<section class="section team" data-fill>
				<div class="effect">
					<h2>Our Team</h2>
				</div>
			</section>

			<section class="section contact" data-fill>
				<div class="effect">
					<h2>Let's Talk</h2>
					<?php query_posts('category_name=says&tag=homepage&posts_per_page=1'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					   <?php the_content(); ?>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>

			<section class="section featured-blog">
				<div class="effect">
					<h2>Our Thoughts</h2>
					<?php query_posts('category_name=thinks&tag=featured&posts_per_page=2'); ?>
					<?php if ( have_posts() ) : ?>
						<ul class="float-clear">
							<?php while ( have_posts() ) : the_post(); ?>
								<li class="blog-post float-left"  data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>">
									<div class="effect">
								  <div class="post-chapter">
										N°<?php the_ID(); ?>,<?php the_date( 'm/Y' ); ?> 
									</div>
								  <h3 class="post-title"><?php the_title(); ?></h3>
								  <div class="post-excerpt"><?php the_excerpt(); ?></div>
								  <a class="button" href="<?php echo get_permalink(); ?>"><i class="fa fa-lightbulb-o"></i> Read our minds</a>
									</div>
								</li>
							<?php endwhile;?>
						</ul>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>

<?php get_footer(); ?>
