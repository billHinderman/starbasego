		</div>
		<footer class="footer float-clear" role="contentinfo">
			<div class="footer-info">
				<?php echo sprintf( __( '%1$s%2$s <a href="/">%3$s</a> | Built in <a href="/chicago">Chicago</a>.', 'starbasego' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
					<form class="mailing-list float-clear sml_subscribe" method="post">
						<p class="prepend">Sign up for infrequent transmissions from space.</p>
						<input class="sml_hiddenfield" name="sml_subscribe" type="hidden" value="1">
						<label class="sml_emaillabel" for="sml_email"></label>
						<input class="sml_emailinput" name="sml_email" placeholder="beacon@starbasego.com" type="email" value="">
						<button name="submit" class="btn sml_submitbtn" type="submit"><i class="fa fa-rocket"></i></button>
					</form>
			</div>
			<div class="footer-links-section">
				<ul class="footer-links">
					<li><a class="plan-button" href="/says/lets-get-started" >Plan</a></li>
					<li><a href="/is/this" >About</a></li>
					<li><a href="/privacy" >Privacy</a></li>
				</ul>
				<ul class="footer-links">
					<li><a target="_blank" href="https://www.facebook.com/starbaseGo">Facebook</a></li>
					<li><a target="_blank" href="https://www.twitter.com/starbaseGo">Twitter</a></li>
					<li><a target="_blank" href="https://www.twitter.com/starbaseGo">Instagram</a></li>
				</ul>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
