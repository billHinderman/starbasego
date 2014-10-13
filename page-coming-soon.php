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
		<section class="welcome section" data-fill="strict">	
			<div class="logo">
				<img src="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.png"/>
				<h1>very soon.</h1>
			</div>	
		</section>
	</body>
</html>
