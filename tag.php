<?php get_header(); ?>

<h1 class="result-title"><?php _e( '<i class="fa fa-tags"></i> Re: ', 'starbasego' ); ?><?php single_tag_title(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'result' ); ?>
<?php endwhile; endif; ?>

<?php get_template_part( 'nav', 'below' ); ?>

<?php get_footer(); ?>
