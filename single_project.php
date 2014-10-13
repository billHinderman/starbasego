<?php
/*
Template Name Posts: Project
Description: Project page template
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
			<div class="entry-chapter">Fig. N°<?php the_ID(); ?></div>
			<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

			<footer class="entry-footer">
				<div class="tag-links"><?php the_tags('<i class="fa fa-tags"></i> Re: ',', ',''); ?></div	>
				<div class="post-end">With <i class="fa fa-heart"></i> from space.</div>
			</footer> 
		</div>
	</article>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
