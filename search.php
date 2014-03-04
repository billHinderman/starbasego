<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	
	<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'starbasego' ), get_search_query() ); ?></h1>
	
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
	<?php endwhile; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
	<article id="post-0" class="post no-results not-found">
		
		<h2 class="entry-title"><?php _e( 'Nothing Found', 'starbasego' ); ?></h2>
		
		<section class="entry-content">
			<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'starbasego' ); ?></p>
			<?php get_search_form(); ?>
		</section>
	</article>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
