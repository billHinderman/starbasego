<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( get_post_thumbnail_id() ) : ?>
		<div class="chapter" data-fill data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>">
	<?php else : ?>
		<div class="chapter" data-fill  data-bg-image="<?php bloginfo(template_url); ?>/assets/images/colony/<?php echo str_pad(rand(1, 16), 2, "0", STR_PAD_LEFT); ?>.jpg">
	<?php endif; ?>
		<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
		N°<?php the_ID(); ?>,
		 <?php the_date( 'm/Y' ); ?> 
	</div>
	<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
	<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
	<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</article>
