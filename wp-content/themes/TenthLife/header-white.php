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

<div class="nav">
        <div class="nav__content">
            <div class="slide_in_nav_text">
                <div class="row eq">
                    <div class="col-md-4 col-sm-12 slide_in_nav_text_first">
                        <li><a href="/adopt">Adopt</a></li>
                        <li><a href="/donate/">Donate</a></li>
                        <li><a href="/foster/">Foster</a></li>
                        <li><a href="/about-us/our-shelter/">Visit</a></li>

                    </div>

                    <div class="col-md-8 col-sm-12">

                        <div class="row">
							<div class="col-md-4 col-sm-12 slide_in_nav_text_second">
                            <div class="menu_click">
                                <h4>In The Community</h4>
                                <li><a href="/in-the-community/">Get Involved</a></li>
                                <li><a href="/foster/">Foster A Cat</a></li>
                                <li><a href="/volunteer/">Volunteer</a></li>
								<li><a href="/Yoga/">Cats N' Mats Yoga</a></li>
                                <li><a href="/in-the-community/upcoming-events/">Events</a></li>
                                <li><a href="/about-us/our-shelter/">Adoption Lounge</a></li>
                            </div>

                            <div class="divide40"></div>

                            <div class="menu_click">
                                <h4>Donate/Shop</h4>
                                <li><a href="/store/">Donate</a></li>
								<li><a href="/donate/litter-mates/">Litter Mates</a></li>
								<li><a href="/store/">Online Store (Soon)</a></li>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-12 slide_in_nav_text_second">
                            <div class="menu_click">
                                <h4>About Us</h4>
                                <li><a href="/about-us/">About Tenth Life</a></li>
                                <li ><a href="/about-us/board-of-directors">Our Board</a></li>
                                <li ><a href="/about-us/leadership/">Leadership</a></li>
                                <li ><a href="/about-us/transparency/">Transparency</a></li>
                            </div>

                            <div class="divide40"></div>

                            <div class="menu_click">
                                <h4>Resources</h4>
                                <li><a href="/resources/admission/">Admissions Request</a></li>
                                <li><a href="/resources/foundcat/">Lost & Found Cats</a></li>
                                <li><a href="/resources/medical-resources/">Medical Resources</a></li>
                                <li><a href="/all-about-cats/">Cat Blog</a></li>
                            </div>
                        </div>


                        <div class="col-md-4 col-sm-12 slide_in_nav_text_second">



                            <div class="menu_click">
                                <h4>Contact/Visit</h4>
                                <li><a href="/contact-us/">Contact Us</a></li>
                                <li ><a href="/about-us/our-shelter/">Visit Tenth Life</a></li>
                            </div>

                            <div class="divide40 showmobiles"></div>

                            <h4 class="orange">Visiting hours</h4>
						<li>Sat-Sun 12-5pm<br>or by appointment* </li>

                            <div class="divide20"></div>

                            <h4 class="orange">Adoption Lounge</h4>
                            <li>3202 Cherokee St.<br> St. Louis, MO 63118</li>

                            <div class="menu_pads"></div>
                        </div>
						</div>




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
