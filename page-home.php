<?php get_header(); ?>

<section class="welcome section" data-bg-image="<?php bloginfo(template_url); ?>/assets/images/colony_final/<?php echo str_pad(rand(1, 12), 2, "0", STR_PAD_LEFT); ?>_mod_2.jpg" data-fill>
	<div class="welcome-table">
		<h1 class="welcome-title">sta<br>rba<br>se<br><b>go!</b></h1>
	</div>
</section>

<h2 class="invert" id="about">Is</h2>
<section class="section about" data-fill="strict">
		<?php query_posts('category_name=is&tag=homepage&posts_per_page=1'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			  <!--<div class="about-info">N°<?php the_ID(); ?>,<?php the_date( 'm/Y' ); ?></div>-->
			  <div class="about-post" data-fill>
			  	<?php the_content(); ?>
			  </div>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
</section>

<h2>Do</h2>
<section class="section services" data-fill>
	<div class="effect">
		<?php query_posts('category_name=does&tag=homepage&posts_per_page=3'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		   <h4><?php $blurb_values = get_post_custom_values( 'blurb' );
						 foreach ( $blurb_values as $key => $blurb ) {
						   echo "$blurb"; 
						 } ?></h4>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>

<h2 id="make" class="invert">Make</h2>
<section class="section featured-projects">
	<div class="effect">
		<?php query_posts('category_name=makes&tag=featured&posts_per_page=4'); ?>
		<?php if ( have_posts() ) : ?>
			<ul class="float-clear">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( get_post_thumbnail_id() ) : ?>
		   			<li class="project-post float-left" data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>">
		   		<?php else : ?>
						<li class="project-post float-left">
					<?php endif; ?>
		   			<div class="effect">
					  <div class="post-chapter">
							N°<?php the_ID(); ?>,<?php the_date( 'm/Y' ); ?> 
						</div>
					  <h3 class="post-title"><?php the_title(); ?></h3>
					  <div class="post-excerpt"><?php the_excerpt(); ?></div>
					  <a class="button" href="<?php echo get_permalink(); ?>"><i class="fa fa-rocket"></i> Read the dossier</a>
						</div>
		   		</li>
				<?php endwhile;?>
			</ul>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>

<h2 id="client">Help</h2>
<section class="section featured-client" data-fill>
	<div class="effect">
		<?php query_posts('category_name=loves&tag=featured&posts_per_page=1'); ?>
		<?php if ( have_posts() ) : ?>
			<ul class="float-clear">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( get_post_thumbnail_id() ) : ?>
		   			<li class="client-post float-left" data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>">
		   		<?php else : ?>
						<li class="client-post float-left">
					<?php endif; ?>
		   			<div class="effect">
					  <div class="post-chapter">
							N°<?php the_ID(); ?>,<?php the_date( 'm/Y' ); ?> 
						</div>
					  <h3 class="post-title"><?php the_title(); ?></h3>
					  <div class="post-excerpt"><?php the_excerpt(); ?></div>
					  <a class="button" href="<?php echo get_permalink(); ?>"><i class="fa fa-rocket"></i> Read the dossier</a>
						</div>
		   		</li>
				<?php endwhile;?>
			</ul>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>

<h2 class="invert" id="team">Are</h2>
<section class="section team">
	<div class="effect">
		<?php query_posts('category_name=are&tag=homepage&posts_per_page=2'); ?>
		<?php if ( have_posts() ) : ?>
			<ul class="float-clear">
				<?php while ( have_posts() ) : the_post(); ?>
					<li class="float-clear float-left">
						<?php if ( get_post_thumbnail_id() ) : ?>
		   				<div class="team-photo-container"><div class="team-photo" data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>"></div></div>
		   			<?php else : ?>
							<div class="team-photo-container"><div class="team-photo" data-bg-image="<?php bloginfo(template_url); ?>/assets/images/space/<?php echo str_pad(rand(1, 12), 2, "0", STR_PAD_LEFT); ?>.jpg"></div></div>
						<?php endif; ?>
						<div class="team-info">
						  <h3 class="post-title"><?php the_title(); ?></h3>
						  <h4 class="role"><?php $role_values = get_post_custom_values( 'role' );
							 foreach ( $role_values as $key => $role ) {
							   echo "$role"; 
							 } ?></h4>
							 <h4><i class="fa fa-twitter"></i> <?php $twitter_values = get_post_custom_values( 'twitter' );
							 foreach ( $twitter_values as $key => $twitter ) { ?>
							   <a target="blank" href="http://twitter.com/<?php echo "$twitter";  ?>"><?php echo "$twitter";  ?></a>
							 <?php } ?></h4>
						  <?php the_content(); ?>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		 
		<?php wp_reset_query(); ?>
	</div>
</section>

<h2 id="contact">Speak</h2>
<section class="section contact" data-fill="strict">
	<div class="contact-half">
		<?php query_posts('category_name=says&tag=homepage&posts_per_page=1'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		   <?php the_content(); ?>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</div>
	<div class="contact-half">
		<h3>Say hello</h3>
		<br>
		<dl class="contact-list float-clear">
			<dt>email</dt>
			<dd><a href="mailto:hello@starbasego.com">hello@starbasego.com</a></dd>

			<dt>tel</dt>
			<dd><a href="tel:17083053993">1.708.305.3993</a></dd>

			<dt><i class="fa fa-facebook"></i></dt>
			<dd><a target="blank" href="https://www.facebook.com/starbaseGo">facebook</a></dd>

			<dt><i class="fa fa-twitter"></i></dt>
			<dd><a target="blank" href="https://www.twitter.com/starbaseGo">twitter</a></dd>
		</dl>
	</div>
</section>

<h2 class="invert" id="blogs">Think</h2>
<section class="section featured-blogs">
	<div class="effect">
		<?php query_posts('category_name=thinks&tag=featured&posts_per_page=2'); ?>
		<?php if ( have_posts() ) : ?>
			<ul class="float-clear">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( get_post_thumbnail_id() ) : ?>
		   			<li class="blog-post float-left"  data-bg-image="<?php $thumb_id = get_post_thumbnail_id();$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>">
		   		<?php else : ?>
						<li class="blog-post float-left">
					<?php endif; ?>
						<div class="effect">
					  <div class="post-chapter">
							N°<?php the_ID(); ?>,<?php the_date( 'm/Y' ); ?> 
						</div>
					  <h3 class="post-title"><?php the_title(); ?></h3>
					  
					  <div class="post-excerpt"><?php the_excerpt(); ?></div>
					  <a class="button" href="<?php echo get_permalink(); ?>"><i class="fa fa-lightbulb-o"></i> Read our minds</a>
						</div>
					</li>
				<?php endwhile;?>
			</ul>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>

<?php get_footer(); ?>
