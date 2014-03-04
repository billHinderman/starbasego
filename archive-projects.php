<?php get_header(); ?>


<h1 class="entry-title"><?php 
	if ( is_day() ) { printf( __( 'Daily Archives: %s', 'starbasego' ), get_the_time( get_option( 'date_format' ) ) ); }
	elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'starbasego' ), get_the_time( 'F Y' ) ); }
	elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'starbasego' ), get_the_time( 'Y' ) ); }
	else { _e( 'Archives', 'starbasego' ); }
	?>
</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
