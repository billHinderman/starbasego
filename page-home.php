<?php get_header(); ?>
<section class="section welcome" data-fill="strict" data-fill-size="1">	
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
<div>
<div data-solari data-solari-options='{"digitMax":"15"}'>aasdfasdf</div>
</div>
<section class="section about" data-fill="strict" data-fill-size=".666">
	<div class="scroll-hint">
		<div class="scroll-spinner">
			<i class="fa fa-rocket sh-1"></i>
			<i class="fa fa-lightbulb-o sh-2"></i>
			<i class="fa fa-heart sh-3"></i>
			<i class="fa fa-bolt sh-4"></i>
		</div>
	</div>
	<div class="about-post">
		<h2>Starbase Go! makes innovative digital products for creative people.</h2>
		<a href="http://www.starbasego.com/is/this" title="Learn More">Learn more.</a>	
	</div>
</section>

<section class="section services">
	<div class="section-content float-clear">
		<div class="service">
			<div class="service-image">
				<a href="http://www.starbasego.com/is/an-interactive-design-studio/" data-bg-image="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.svg"></a>
			</div>
			<a href="http://www.starbasego.com/is/an-interactive-design-studio/">
				<h3>Web <div class="amp">&</div> interaction design.</h3>
			</a>
			<div class="service-excerpt">From gorgeous landing pages to complex interactive frameworks, we'll help you build a beautiful, scalable online presence.</div>
		</div>
		<div class="service">
			<div class="service-image">
				<a href="http://www.starbasego.com/is/a-storytelling-partner" data-bg-image="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.svg"></a>
			</div>
			<a href="http://www.starbasego.com/is/a-storytelling-partner">
				<h3>Branding <div class="amp">&</div> strategy.</h3>
			</a>
			<div class="service-excerpt">The first step to success: Make people remember you. We'll work alongside you to create a memorable brand that suits you perfectly.</div>
		</div>
		<div class="service">
			<div class="service-image">
				<a href="http://www.starbasego.com/is/a-digital-powerhouse" data-bg-image="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.svg"></a>
			</div>
			<a href="http://www.starbasego.com/is/a-digital-powerhouse">
				<h3>Web <div class="amp">&</div> application development.</h3>
			</a>
			<div class="service-excerpt">You want to go from being "the next big thing" to being "the big thing." We want to get you there.</div>
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
		<?php query_posts('category_name=loves&tag=featured&posts_per_page=4'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry-result' ); ?>
			<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>

<section class="section team" data-fill data-fill-size=".666">
	<h2 id="team">Are</h2>
	<div class="section-content">
	</div>
</section>

<section class="section contact">
	<h2 id="contact">Speak</h2>
	<div class="section-content float-clear">
		<ul class="contact-forms-list">
			<li>Interested in working with us?  We are currently <span data-flap>available</span> to begin new projects starting in <span data-flap>January 2015</span>.
			 <a href="/says/lets-get-started">Let's get started</a> planning your project together.</li>
			<li>Not sure where to start? <a href="/says/youre-going-places">Launch a probe</a>. We'll talk through your idea (for up to an hour) free of charge.</li>
			<li>Just looking to <a href="/says/hello">say hello</a>? We're good with that, too.</li>
		</ul>
		<ul class="contact-links-list">
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
