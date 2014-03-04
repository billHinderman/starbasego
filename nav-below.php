<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
	<nav class="nav-below" role="navigation">
		<div class="nav-previous"><?php next_posts_link(sprintf( __( '%s older', 'starbasego' ), '<span class="meta-nav">&larr;</span>' ) ) ?></div>
		<div class="nav-next"><?php previous_posts_link(sprintf( __( 'newer %s', 'starbasego' ), '<span class="meta-nav">&rarr;</span>' ) ) ?></div>
	</nav>
<?php } ?>
