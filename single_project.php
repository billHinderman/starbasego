<?php
/*
Template Name Posts: Project
Description: This part is optional, but helpful for describing the Post Template
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( get_post_thumbnail_id() ) : ?>
			<div class="chapter" data-fill="strict" data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>">
		<?php else : ?>
			<div class="chapter" data-fill="strict">
		<?php endif; ?>
			<?php if ( is_singular() ) { echo '<h1 data-lettering class="entry-title">'; } else { echo '<h3 class="entry-title">'; } ?><?php the_title(); ?><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h3>'; } ?> 
		</div>
		<div class="entry">
			<div class="chapter-info">N°<?php the_ID(); ?></div>
			<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

			<footer class="entry-footer">
				<div class="tag-links"><?php the_tags('<i class="fa fa-tags"></i> Re: ',', ',''); ?></div>
				<div class="post-end">With <i class="fa fa-heart"></i>, from space.</div>
			</footer> 
		</div>
	</article>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
