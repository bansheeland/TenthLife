<?php
/*-----------------------------------------------------------------------------------*/
/* This template will be called by all other template files to begin
/* rendering the page and display the header/nav
/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#01ff2b"/>
<meta name="msapplication-navbutton-color" content="#01ff2b">
<meta name="apple-mobile-web-app-status-bar-style" content="#01ff2b">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="DELT">
<link rel="shortcut icon" href="" alt="DELT Icon">
<title><?php wp_title();?></title>


<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<div class="menu menu_whites">
		<div class="container">
			<a href="/" title="Homepage"><img src="/img/logo.png" class="brand" alt="Tenth Life Cats St. Louis"></a>
			
			<div class="donate_menu">
				<a href="/donate">Make a donation</a>
			</div>
			
			<div class="login_cart">
				<?php echo do_shortcode('[xoo_el_action type="login" change_to="myaccount"]'); ?> <span class="login_cart_divider">|</span> <?php echo do_shortcode("[woo_cart_but]"); ?>
				
			</div>
		</div>
	</div>

<div class="nav ">
	<div class="nav__content">
		<div class="slide_in_nav_text">
			<div class="row eq">
				<div class="col-md-7 slide_in_nav_text_first">
					<li><a href="/adopt">Adopt A Cat</a></li>
				<li><a href="/foster/">Foster A Cat</a></li>
					<li><a href="/in-the-community/">Get Invovled</a></li>
					<li><a href="/all-about-cats/">Resources</a></li>
					<li><a href="/about-us/">About Us</a></li>
					<li><a href="/contact-us/">Visit Us</a></li>
					<li><a href="/donate/" class="black">Make A Donation</a></li>
					<li><a href="/donate/litter-mates/" class="black">Donate Monthly</a></li>
				</div>
				
				<div class="col-md-5 slide_in_nav_text_second">
					<li><a href="/resources/foundcat">Lost & Found Cats</a></li>
					<li class="nophone"><a href="/donate/litter-mates/">Litter Mates</a></li>
					<li class="nophone"><a href="/in-the-community/upcoming-events">Events</a></li>
					<li class="nophone"><a href="/about-us/board-of-directors">Our Board</a></li>
					<li class="nophone"><a href="/about-us/leadership/">Leadership</a></li>
					<li class="nophone"><a href="/about-us/transparency/">Transparency</a></li>
					<li><a href="/volunteer/">Volunteer</a></li>
					<li><a href="/contact-us/">Contact</a></li>
					<div class="divide40"></div>
					<li><a>My Account</a></li>
					<li>View Cart</li>
				</div>
			</div>
		</div>

	</div>
</div>
	
	<div class="menu-icon menu_whites gowhitetho">
	<span class="menu-icon__line menu-icon__line-left"></span>
	<span class="menu-icon__line"></span>
	<span class="menu-icon__line menu-icon__line-right"></span>
		<div class="menu_icon_text">Menu</div>
</div>
