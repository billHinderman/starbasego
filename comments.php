<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<section class="comments">
	<?php 
		if ( have_comments() ) : 
		global $comments_by_type;
		$comments_by_type = &separate_comments( $comments );
			if ( ! empty( $comments_by_type['comment'] ) ) : 
			?>
				<section class="comments-list">
				<h3 class="comments-title"><?php comments_number(); ?></h3>

				<ul>
					<?php wp_list_comments(); ?>
				</ul>
				
				<?php if ( get_comment_pages_count() > 1 ) : ?>
					<nav class="comments-navigation" role="navigation">
						<?php paginate_comments_links(); ?>
					</nav>
				<?php endif; ?>
			</section>
			<?php 
			endif; 
		endif;
		if ( comments_open() ) comment_form();
	?>
</section>
