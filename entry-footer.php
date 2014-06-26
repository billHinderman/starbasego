<footer class="entry-footer">
	<div class="tag-links"><?php the_tags('<i class="fa fa-tags"></i> Re: ',', ',''); ?></div>
	<div class="post-end">With <i class="fa fa-heart"></i>, from space.</div>
	<?php if ( comments_open() ) { 
		echo '<span class="meta-sep">|</span> <span class="comments-link"><a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'starbasego' ) ) . '</a></span>';
	} ?>
</footer> 
