<?php
/**
* Template Name: Donate
* Description: DELT Homepage
*
* @package WordPress
* @subpackage BootstrapWP
*/
get_header(); ?>
<style>
	.clear_menu {
		display: none
	}
	footer {
		padding-top: 80px
	}
</style>

<div class="contain2 child_page child_page_hero_img in" style="padding-bottom:90px">
		<h1 class="h4">Donate to Tenth Life</h1>
		<h2 class="big mobile_small_big">Help Tenth Life by making a donation</h2>
		
	</div>

<div class="container">
	<div class="row">
		<div class="col-md-7">
	<div id="MC-donation-form"></div> <script src="https://downloads.mightycause.com/widgets/v1/embed.js"></script><script> window.onload = function() { window.MCForms.createEmbedForm({ elementID: "MC-donation-form",url: "https://www.mightycause.com/forms/Tenthlife?embed=embeddable_form"});};</script>
	</div>
	<div class="col-md-5">
				<div class="donate_page_left">
					<div class="more_ways">
						<h2 class="h4">Other Ways to Support Tenth Life</h2>

						<a href="/donate/litter-mates/" class="blue">
						<div class="more_ways_list mw_first br5" style="background:#e71;color:#fff">
							<p class=""><b>Become a monthly Litter Mates donor</b><br>
								<span>Make a greater impact by joining our monthly giving program, The Litter Mates Club! </span>
							</p>
						</div>
						</a>
						
						<a href="http://a.co/3Zpwb0j" target="_blank">
						<div class="more_ways_list mw_fifth">
							<p><b>Purchase items on our Amazon Wish List</b><br>
								<span>Contact us to ask about our employer matching funds or consider donating items off of our Amazon Wish List</span>
							</p>
						</div>
						</a>

						<div class="divide20"></div>
						<p class="smallp ddisclaimer">PLEASE NOTE: Gifts given via Facebook or via Paypal Giving Fund are processed via their respective foundations and affiliates; therefore your receipt will come directly from those organizations and not from Tenth Life Cat Rescue. Please reach out to us if you have any questions.</p>
						<div class="divide40"></div>

						<h4>Share this Page</h4>
						<?php echo do_shortcode('[scriptless]'); ?>
						
					</div>
				</div>
			</div>
	</div>
</div>





<!--
<div class="container in">
	<?php echo do_shortcode('[fullstripe_manage_subscriptions]'); ?>
</div>
-->
<?php get_footer(); ?>
