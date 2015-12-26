

<section class="above-footer">
		<div class="above-footer-wrap">
			<div class="slogan">
				<h3>Get to know us better now!</h3>
				<p>Share your Products over the Social Networks</p>
			</div>
			<div class="soc-buttons">
				<a href="#"><img src="http://theme-t/wp-content/themes/theme-test/img/rss.png" alt=""></a>
				<a href="#"><img src="http://theme-t/wp-content/themes/theme-test/img/pinterest.png" alt=""></a>
				<a href="#"><img src="http://theme-t/wp-content/themes/theme-test/img/facebook.png" alt=""></a>
				<a href="#"><img src="http://theme-t/wp-content/themes/theme-test/img/twitter.png" alt=""></a>
				<a href="#"><img src="http://theme-t/wp-content/themes/theme-test/img/dribble.png" alt=""></a>
			</div>	
			<div class="slogan">
				<h3>Search!</h3>
				<p>Search across our website</p>
			</div>
			<?php
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : endif; 
			?>
		</div>
	</section>
	<footer>
		<div class="footer-wrap">
			<div class="footer-logo">
				<h2>REVE<span>NANT</span></h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt maxime commodi aperiam nulla iure dicta quam saepe
				</p>
			</div>
			
			<?php
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : endif; 
			?>
			<div class="sign-newsletter">
				<h3>
					Sign to Newsletter
				</h3>
				<div class="subscribe-form">
					<form>
						<input type="text" name="name" value="" placeholder="Name">
						<br>
						<input type="email" name="email" value="" placeholder="Email">
						<br>
						<input type="submit" value="SUBSCRIBE">
					</form>
				</div>
			</div>
		</div>
	</footer>


	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<script src="http://theme-t/wp-content/themes/theme-test/libs/jquery/jquery-1.11.2.min.js"></script>	
	<script src="http://theme-t/wp-content/themes/theme-test/libs/slick/slick.min.js"></script>
	<script src="http://theme-t/wp-content/themes/theme-test/libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="http://theme-t/wp-content/themes/theme-test/js/common.js"></script>
	<?php wp_footer(); ?>
</body>
</html>