<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>Revenant</title>
	<meta name="description" content="">

	<link rel="shortcut icon" href="http://theme-t/wp-content/themes/theme-test/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="http://theme-t/wp-content/themes/theme-test/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://theme-t/wp-content/themes/theme-test/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://theme-t/wp-content/themes/theme-test/img/favicon/apple-touch-icon-114x114.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<link rel="stylesheet" href="http://theme-t/wp-content/themes/theme-test/libs/slick/slick.css">
	<link rel="stylesheet" href="http://theme-t/wp-content/themes/theme-test/libs/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="http://theme-t/wp-content/themes/theme-test/css/fonts.css">
	<link rel="stylesheet" href="http://theme-t/wp-content/themes/theme-test/css/main.css">
	<link rel="stylesheet" href="http://theme-t/wp-content/themes/theme-test/css/media.css">

	<script src="http://theme-t/wp-content/themes/theme-test/libs/modernizr/modernizr.js"></script>

<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="upper-header">
			<div class="up-header-wrap">
				<div class="log-reg">
					<button class="separator">Latest News</button>
					<button class="separator show-button">Login/logout</button>
					<button class="separator">Register</button>
					<button>About Us</button>
				</div>
				<div class="login-form">
					<?php 
						if (! is_user_logged_in())
						{
							wp_login_form(); 
						}
						else
						{
					?>
						<a href="<?php echo wp_logout_url( home_url() ); ?>">LOG OUT</a>
					<?php
						}
					?>
				</div>
				
				<div class="contacts">
					<p class="phone-number">+565 975 658</p>
					<p class="email">info@premiumcoding.com</p>
					<p class="work-hours">Monday - Friday, 8.00 - 20.00</p>
				</div>
			</div>
		</div>
		<div class="header-logo">
			<a href="http://theme-t"><h1>REVE<span>NANT</span></h1></a>
		</div>
		<div class="devise">
			<h3>CREATIVE BUSINESS THEME FOR CORPORATIONS</h3>
		</div>
		<div class="registration-form">
					<?php wp_create_user( $username, $password, $email ); ?> 		
		</div>
	</header>
	<nav>
		<?php
			if ( function_exists( 'wp_nav_menu' ) )
			    wp_nav_menu( 
		      array( 
		      'theme_location' => 'custom-menu',
		      'fallback_cb'=> 'custom_menu',
		      'container' => 'ul',
		      'menu_id' => 'nav',
	        'menu_class' => 'nav') 
					);
	  else custom_menu();
		?>
	</nav>

