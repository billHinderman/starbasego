<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<div class="result-title">
		<h1 data-fill="strict" data-fill-size=".666"><?php printf( __( '%s', 'starbasego' ), get_search_query() ); ?></h1>
	</div>

<div class="results-container">
	<div class="entry-results-list">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry-result' ); ?>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php else : ?>
	<div class="result-title">
		<h1 data-fill="strict"><?php printf( __( 'Sorry, nothing found for <i class="f-serif italic">%s</i>', 'starbasego' ), get_search_query() ); ?></h1>
	</div>
<?php endif; ?>
<?php get_footer(); ?>
