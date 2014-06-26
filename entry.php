<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( get_post_thumbnail_id() ) : ?>
		<div class="chapter" data-fill="strict" data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>">
	<?php else : ?>
		<div class="chapter" data-fill="strict">
	<?php endif; ?>
		<?php if ( is_singular() ) { echo '<h1 data-lettering class="entry-title">'; } else { echo '<h3 class="entry-title">'; } ?><?php the_title(); ?><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h3>'; } ?> 
	</div>
	<div class="entry">
		<div class="chapter-info">N°<?php the_ID(); ?>,<?php the_date( 'm/Y' ); ?></div>
		<div class="chapter-author"><?php the_author_posts_link(); ?></div>
		<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

		<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
	</div>
</article>
