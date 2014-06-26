<?php if ( get_post_thumbnail_id() ) : ?>
	<a id="result-<?php the_ID(); ?>" class="result" data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>" href="<?php echo get_permalink(); ?>">
<?php else : ?>
	<a id="result-<?php the_ID(); ?>" class="result" href="<?php echo get_permalink(); ?>">
<?php endif; ?>
		<div class="result-container">
			<div class="result-info">
				<h3 class="entry-title"><?php the_title(); ?></h3>
			</div>
		</div>
	</a>
