<div id="result-<?php the_ID(); ?>" class="result-entry">
	<?php if ( get_post_thumbnail_id() ) : ?>
		<div class="result-image">
			<a href="<?php echo get_permalink(); ?>" data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>"></a>
			<div class="result-entry-chapter">Fig. N°<?php the_ID(); ?></div>
		</div>
	<?php else : ?>
		<div class="result-image">
			<a href="<?php echo get_permalink(); ?>" data-bg-image="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.svg"></a>
			<div class="result-entry-chapter">Fig. N°<?php the_ID(); ?></div>
		</div>
	<?php endif; ?>
	<div class="result-entry-content">
		<a href="<?php echo get_permalink(); ?>">
			<h3 class="result-entry-title"><?php the_title(); ?></h3>
		</a>

		<div class="result-entry-excerpt"><?php the_excerpt(); ?></div>
		<?php if ( in_category( 'makes' )) : ?>
			<a class="button result-entry-button" href="<?php echo get_permalink(); ?>"><i class="fa fa-rocket"></i> Read the dossier</a>
		<?php else : ?>
			<a class="button result-entry-button" href="<?php echo get_permalink(); ?>"><i class="fa fa-lightbulb-o"></i> Read our minds</a>
		<?php endif; ?>
	</div>
</div>
