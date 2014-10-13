<?php get_header(); ?>
<div class="result-title">
	<h1 data-fill="strict" data-fill-size=".666" class="author">
		<?php the_author_link(); ?>
		<?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . get_the_author_meta( 'user_description' ) . '</div>' ); ?>
	</h1>
</div>
<?php rewind_posts(); ?>

<div class="results-container">
	<div class="entry-results-list">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry-result' ); ?>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>
