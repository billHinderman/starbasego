<?php get_header(); ?>

<!-- <section class="welcome section" data-bg-image="<?php bloginfo(template_url); ?>/assets/images/colony_final/<?php echo str_pad(rand(1, 12), 2, "0", STR_PAD_LEFT); ?>_mod_2.jpg" data-fill> 
<section class="welcome section" data-bg-image="<?php bloginfo(template_url); ?>/assets/images/colony_final/white.jpg" data-fill="strict"> -->
<section class="welcome section" data-fill="strict" data-fill-size="1">	
	<div class="logo">
		<img src="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.svg"/>
		<h1>Fig. N°1<br>"Starbase Go!"</h1>
	</div>
	<div class="scroll-hint">
		<div class="scroll-spinner">
			<i class="fa fa-rocket sh-1"></i>
			<i class="fa fa-lightbulb-o sh-2"></i>
			<i class="fa fa-heart sh-3"></i>
			<i class="fa fa-bolt sh-4"></i>
		</div>
	</div>
</section>


<section class="section about" data-fill="strict" data-fill-size=".666">
	<div class="scroll-hint">
		<div class="scroll-spinner">
			<i class="fa fa-rocket sh-1"></i>
			<i class="fa fa-lightbulb-o sh-2"></i>
			<i class="fa fa-heart sh-3"></i>
			<i class="fa fa-bolt sh-4"></i>
		</div>
	</div>
		<?php query_posts('category_name=is&tag=homepage&posts_per_page=1'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			  <div class="about-post">
			  	<?php the_content(); ?>
			  </div>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
</section>

<section class="section services">
	<div class="section-content float-clear">
		<div class="service">
			<div class="service-image">
				<a href="http://www.starbasego.com/is/an-interactive-design-studio/" data-bg-image="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.svg"></a>
			</div>
			<a href="http://www.starbasego.com/is/an-interactive-design-studio/">
				<h3>Web <div class="amp">&</div> interaction design</h3>
			</a>
			<div class="service-excerpt">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="service">
			<div class="service-image">
				<a href="http://www.starbasego.com/is/a-storytelling-partner" data-bg-image="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.svg"></a>
			</div>
			<a href="http://www.starbasego.com/is/a-storytelling-partner">
				<h3>Branding <div class="amp">&</div> strategy</h3>
			</a>
			<div class="service-excerpt">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
		</div>
		<div class="service">
			<div class="service-image">
				<a href="http://www.starbasego.com/is/a-digital-powerhouse" data-bg-image="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.svg"></a>
			</div>
			<a href="http://www.starbasego.com/is/a-digital-powerhouse">
				<h3>Web <div class="amp">&</div> application development</h3>
			</a>
			<div class="service-excerpt">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
		</div>
	</div>
</section>


<section class="section projects" data-fill data-fill-size=".666">
	<h2 id="make">Make</h2>
	<div class="section-content">
		<?php query_posts('category_name=makes&tag=featured&posts_per_page=4'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry-result' ); ?>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>

<section class="section featured-client" data-fill data-fill-size=".666">
	<h2 id="client">Help</h2>
	<div class="section-content">
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

<section class="section team">
	<h2 id="team">Are</h2>
	<div class="section-content">
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

<section class="section contact" data-fill="strict" data-fill-size=".666">
	<h2 id="contact">Speak</h2>
	<div class="section-content float-clear">
		<ul class="contact-list">
			<li><a href="/says/hello">Say hello</a></li>
			<li><a href="/says/lets-get-started">Let's get started together</a></li>
		</ul>
		<ul class="contact-list">
			<li>
				<h3>General</h3>
				<a href="mailto:hello@starbasego.com"><i class="fa"></i> hello@starbasego.com</a>
			</li>

			<li>
				<h3>Business</h3>
				<a href="mailto:bill@starbasego.com"><i class="fa"></i> bill@starbasego.com</a>
			</li>

			<li>
				<h3>News</h3>
				<a target="blank" href="https://www.twitter.com/starbaseGo"><i class="fa fa-twitter"></i> @starbaseGo</a>
			</li>

			<li>
				<h3>Noise</h3>
				<a target="blank" href="https://www.facebook.com/starbaseGo"><i class="fa fa-facebook"></i> /starbaseGo</a>
			</li>
		</ul>
	</div>
		
</section>

<section class="section blogs">
	<h2 id="blogs">Think</h2>
	<div class="section-content">
		<?php query_posts('category_name=thinks&posts_per_page=2'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry-result' ); ?>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>

<?php get_footer(); ?>
