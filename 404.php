<?php get_header(); ?>

<article class="post not-found">
	<header class="header">
		<h1 class="entry-title"><?php _e( 'Not Found', 'starbasego' ); ?></h1>
	</header>
	<section class="entry-content">
		<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'starbasego' ); ?></p>
		<?php get_search_form(); ?>
	</section>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
