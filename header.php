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

		<script type="text/javascript" src="//use.typekit.net/cqy4fmu.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header" role="banner">
			<a class="nav-toggle" data-menu><span class="nav-text">Menu</span><i class="nav-icon fa fa-bars"></i></a>
		</header>
		<nav class="header-nav" role="navigation">
				<a class="link nav-home" href="/">Home</a>

				<?php get_search_form(); ?>

				<?php query_posts('category_name=makes&posts_per_page=2'); ?>
					<?php if ( have_posts() ) : ?>
						<ul class="nav-menu float-clear">
							<li class="float-clear">
								<h3 class="float-left">Projects</h3>
								<a class="link float-right all-link" href="http://www.starbasego.com/makes/">All</a>
							</li>

							<?php while ( have_posts() ) : the_post(); ?>
								<?php if ( get_post_thumbnail_id() ) : ?>
								<li data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>" class="header-link">
								<?php else : ?>
									<li class="header-link">
								<?php endif; ?>
									<a  href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile;?>
						</ul>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				<?php query_posts('category_name=thinks&tag=featured&posts_per_page=2'); ?>
					<?php if ( have_posts() ) : ?>
						<ul class="nav-menu float-clear">
							<li class="float-clear">
								<h3 class="float-left">Thoughts</h3>
								<a class="link float-right all-link" href="http://www.starbasego.com/thinks/">All</a>
							</li>
							<?php while ( have_posts() ) : the_post(); ?>
								<li>
								  <a class="posts-link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endwhile;?>
						</ul>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
		</nav>
		<div class="content" id="main" role="main">
