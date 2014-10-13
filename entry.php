<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
			$header_image_values = get_post_custom_values( 'header_image' );
			$size = sizeof($header_image_values);
			$image = $header_image_values[0];
		?>
	<?php if ( $size > 0 ) : ?>
		<div class="chapter" data-fill="strict" data-fill-size=".666" data-bg-image="<?php echo $image; ?>">
	<?php else : ?>
		<div class="chapter" data-fill="strict" data-fill-size=".666">
	<?php endif; ?>
		<?php if ( is_singular() ) { echo '<h1 data-lettering class="entry-title">'; } else { echo '<h3 class="entry-title">'; } ?><?php the_title(); ?><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h3>'; } ?> 
	</div>
	<div class="entry">
		<div class="entry-chapter">Fig. N°<?php the_ID(); ?>,<?php the_date( 'm/Y' ); ?></div>
		<div class="chapter-author">
			<?php the_author_posts_link(); ?>
			<?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<div class="entry-author-meta">' . get_the_author_meta( 'user_description' ) . '</div>' ); ?>
		</div>
		<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

		<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
	</div>
</article>
