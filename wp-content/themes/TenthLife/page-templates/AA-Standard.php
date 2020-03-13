<?php
/**
* Template Name: AA-Standard
* Description: DELT Homepage
*
* @package WordPress
* @subpackage BootstrapWP
*/
get_header(); ?>

<div class="container in">
	<div class="row">
		<div class="col-sm-8">
			<?php the_content(); ?>
			
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-3">
			<div class="gray_bg side_gray br10">
				<h4>Related pages</h4>
				<li><a href="/about-us/">About Us</a></li>
				<li><a href="/volunteer/">Volunteer</a></li>
				<li><a href="/donate/">Donate</a></li>
				<li><a href="/all-about-cats/">Resources</a></li>
				<li><a href="/contact-us/">Contact Us</a></li>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
