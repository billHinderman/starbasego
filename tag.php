<?php get_header(); ?>
<div class="result-title">
	<h1 data-fill="strict" data-fill-size=".666"><?php _e( '', 'starbasego' ); ?><?php single_tag_title(); ?></h1>
</div>

<div class="results-container">
	<div class="entry-results-list">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry-result' ); ?>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>
