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


<div class="donate_half in" id="modal-ready">
	<div class="container">
		<div id="MC-donation-form"></div> <script src="https://downloads.mightycause.com/widgets/v1/embed.js"></script><script> window.onload = function() { window.MCForms.createEmbedForm({ elementID: "MC-donation-form",url: "https://www.mightycause.com/forms/Tenthlife?embed=embeddable_form"});};</script>
		<div class="row">

			<div class="col-md-7">
				<div class="donate_page_right">
					<div class="donate_page_right_form_brd btrr btlr"></div>
					<div class="donate_page_right_form br8">
						<h1>Make a One Time Donation</h1>
						<p class="smallp">First of all, we want to THANK YOU you for caring enough to have made it to this page. We appreciate you and the cats do too! We're honored to be a part of your legacy of kindness. If you have any questions about becoming more involved which aren't answered here, please don't hesitate to reach out to us (contact information is at the bottom of the page). Thank you!</p>

						<ul class="inline_ul">
							<li>Option to have your name shared on our Facebook Page</li>
							<li>Option to have your name listed on our <a href="/donate/our-donors/">Donors & Sponsors page</a></li>
							<li>Receive a free shirt when you donate $100 or more</li>
						</ul>
						
						<h4 class="orange">Save a life today by donating to Tenth Life!</h4>

						<div class="donate_page_right_inputs">
							<?php echo do_shortcode('[give_form id="182"]'); ?>
						</div>
					</div>
					<div class="donate_page_right_form_brd bbrr bblr"></div>
				</div>
			</div>

			<div class="col-md-5">
				<div class="donate_page_left">





					<div class="more_ways">
						<h2 class="h4">Other Ways to Support Tenth Life</h2>

						<a href="/donate/litter-mates/" class="blue">
						<div class="more_ways_list mw_first br5">
							<p class=""><b>Become a monthly Litter Mates donor</b><br>
								<span>Make a greater impact by joining our monthly giving program, The Litter Mates Club! </span>
							</p>
						</div>
						</a>
						<a href="https://www.paypal.com/us/fundraiser/charity/1251415"  target="_blank">
						<div class="more_ways_list mw_second">
							<p><b>Donate using the PayPal Giving Fund</b><br>
								<span>Using the PayPal Giving Fund to donate incurs zero fees to you or us!</span>
							</p>
						</div>
						</a>
						<a href="https://www.facebook.com/pg/tenthlifecats/fundraisers/"  target="_blank">
						<div class="more_ways_list mw_third">
							<p><b>Donate using Facebook Donations</b><br>
								<span>Using Facebook to make a donation to Tenth Life incurs zero fees to you or us!</span>
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
</div>



<!--
<div class="container in">
	<?php echo do_shortcode('[fullstripe_manage_subscriptions]'); ?>
</div>
-->
<?php get_footer(); ?>
