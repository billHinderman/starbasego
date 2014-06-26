<?php get_header(); ?>

<?php the_post(); ?>
<h1 class="result-title author"><?php the_author_link(); ?></h1>
<?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . get_the_author_meta( 'user_description' ) . '</div>' ); ?>
<?php rewind_posts(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'result' ); ?>
<?php endwhile; endif; ?>

<?php get_template_part( 'nav', 'below' ); ?>

<?php get_footer(); ?>
