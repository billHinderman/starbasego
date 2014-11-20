		</div>
		<footer class="footer float-clear" role="contentinfo">
			<div class="footer-section">
				<a class="link-no-style" href="/"><img src="http://www.starbasego.com/wp-content/themes/starbasego/assets/images/go.svg" height="120" width="120"/></a>
			</div>
			<div class="footer-section">
				<span class="footer-head">Contact</span>
				<div class="footer-link"><i class="fa fa-bullhorn"></i> <a href="/says/hello" >Let's Talk</a></div>
				<div class="footer-link"><i class="fa fa-envelope-o"></i> <a href="mailto:hello@starbasego.com">hello@starbasego.com</a></div>
				<form class="mailing-list float-clear sml_subscribe" method="post">
					<p class="prepend">Receive infrequent transmissions (from space).</p>
					<input class="sml_hiddenfield" name="sml_subscribe" type="hidden" value="1">
					<label class="sml_emaillabel" for="sml_email"></label>
					<input class="sml_emailinput" name="sml_email" placeholder="beacon@starbasego.com" type="email" value="">
					<button name="submit" class="btn sml_submitbtn" type="submit"><i class="fa fa-rocket"></i></button>
				</form>
			</div>
			
			<ul class="footer-section footer-list">
				<li><span class="footer-head">Studio</span></li>
				<li class="footer-link"><i class="fa fa-cogs"></i> <a class="plan-button" href="/says/lets-get-started" >Plan</a></li>
				<li class="footer-link"><i class="fa fa-users"></i> <a href="/is/this" >About</a></li>
				<li class="footer-link"><i class="fa fa-eye"></i> <a href="/privacy" >Privacy</a></li>
			</ul>
			<ul class="footer-section footer-list">
				<li><span class="footer-head">Social</span></li>
				<li class="footer-link"><i class="fa fa-facebook-square"></i> <a target="_blank" href="https://www.facebook.com/starbaseGo">Facebook</a></li>
				<li class="footer-link"><i class="fa fa-twitter-square"></i> <a target="_blank" href="https://www.twitter.com/starbaseGo">Twitter</a></li>
				<li class="footer-link"><i class="fa fa-instagram"></i> <a target="_blank" href="https://www.twitter.com/starbaseGo">Instagram</a></li>
			</ul>
			<div class="colophon">
				<?php echo sprintf( __( '%1$s%2$s <a href="/">%3$s</a> | Built in <a href="/chicago">Chicago</a>.', 'starbasego' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
				<a href="#" data-scroll="top" title="Top" id="topLink"><i class="fa fa-caret-square-o-up"></i></a>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
