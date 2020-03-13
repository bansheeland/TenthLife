<?php
/**
* Template Name: All About Cats
* Description: DELT Homepage
*
* @package WordPress
* @subpackage BootstrapWP
*/
get_header(); ?>

<div class="divide100 phone50"></div>
<div class="blog_slider">
		<h2>Cat Resources</h2>
		<div class="carousel carousel-main" data-flickity='{ "cellAlign": "left", "wrapAround": true }'>
			<div class="carousel-cell">
				<a href="https://www.tenthlifecats.org/all-about-cats/cat-behavior">
					<img src="/img/resources/op/blog-hero7.jpg" alt="cat behavior blog articles">
					<h2>Cat Behavior</h2>
				</a>
			</div>
			<div class="carousel-cell">
				<a href="https://www.tenthlifecats.org/all-about-cats/health-and-care">
					<img src="/img/resources/op/blog-hero9.jpg" alt="cat health and care resources">
					<h2>Health & Care</h2>
				</a>
			</div>
			<div class="carousel-cell">
				<a href="https://www.tenthlifecats.org/all-about-cats/feral-friends">
					<img src="/img/resources/op/blog-hero1.jpg" alt="blog about feral cats">
					<h2>Feral Friends</h2>
				</a>
			</div>
			<div class="carousel-cell">
				<a href="http://www.tenthlifecats.org/all-about-cats/lost-cat-tips">
					<img src="/img/resources/op/blog-hero4.jpg" alt="Kitten care blog">
					<h2>Lost Cat Tips</h2>
				</a>
			</div>
			<div class="carousel-cell">
				<a href="http://www.tenthlifecats.org/all-about-cats/kitten-care-101">
					<img src="/img/resources/op/blog-hero8.jpg" alt="lost cat blog tips">
					<h2>Kitten Care 101</h2>
				</a>
			</div>
			<div class="carousel-cell">
				<a href="http://www.tenthlifecats.org/all-about-cats/adopters-corner">
					<img src="/img/resources/op/blog-hero2.jpg" alt="cat adoption blog">
					<h2>Adopters' Corner</h2>
				</a>
			</div>
		</div>
	</div>
    

	<div class="divide100 nophone"></div>
<div class="divide30"></div>


<div class="container">
	<div class="row eq">
			<div class="col-sm-12 col-lg-4">
				<div class="blog_home_cat bhc1">
					<h2 class="h4">Cat Resources</h2>
					<div class="bhc_div"></div>
					
					<div class="row eq">
						<div class="col-sm-12">
							<h4><a href="https://www.tenthlifecats.org/resources/foundcat">What should I do When I Find a Stray Cat</a></h4>
						</div>
						<div class="col-sm-12">
							<h4><a href="https://www.tenthlifecats.org/resources/area-rescues">Local & St. Louis Shelters, Rescues, & Humane Societies</a></h4>
						</div>
						<div class="col-sm-12">
							<h4><a href="https://www.tenthlifecats.org/resources/rehoming">How do I Safely Rehome my Pet?</a></h4>
						</div>
						<div class="col-sm-12">
							<h4><a href="https://www.tenthlifecats.org/resources/finding-kittens">What Do I Do When I Find Baby Cats without a Mom?</a></h4>
						</div>
						<div class="col-sm-12">
							<h4><a href="https://www.tenthlifecats.org/resources/medical-resources">The Most Affordable Medial Care for Cats</a></h4>
						</div>
						<div class="col-sm-12">
							<h4><a href="https://www.tenthlifecats.org/resources/admission">Submiting a Stray Cat to Tenth Life</a></h4>
						</div>
						<div class="col-sm-12">
							<h4><a href="https://www.tenthlifecats.org/resources/transfers">Transferring a Cat from Another Organization to Tenth Life</a></h4>
						</div>
						<div class="col-sm-12">
							<h4><a href="https://www.tenthlifecats.org/resources/spaying-and-neutering">Why You Should Spay or Neuter Your Pet?</a></h4>
						</div>
						<div class="col-sm-12">
							<h4><a href="https://www.tenthlifecats.org/resources/myths-of-spaying-and-neutering">Myths & Facts About Spaying & Neutering Cats</a></h4>
						</div>
					</div>
				</div>

				<div class="blog_home_cat bhc4">
					<h2 class="h4">Feral and outdoor cat friends</h2>
					<div class="bhc_div"></div>
					<?php echo do_shortcode('[display-posts category="feral-friends"]'); ?>
				</div>

				<div class="blog_home_cat bhc6">
					<h2 class="h4">Lost cat tips</h2>
					<div class="bhc_div"></div>
					<?php echo do_shortcode('[display-posts category="lost-cat-tips"]'); ?>
				</div>

			</div>

			<div class="col-sm-12 col-lg-4">
				<div class="blog_home_cat bhc2">
					<h2 class="h4">Cat behavior</h2>
					<div class="bhc_div"></div>
					 <?php echo do_shortcode('[display-posts category="cat-behavior"]'); ?>
				</div>

				<div class="blog_home_cat bhc5">
					<h2 class="h4">Caring for kittens 101</h2>
					<div class="bhc_div"></div>
					<?php echo do_shortcode('[display-posts category="kitten-care-101"]'); ?>
				</div>
			</div>

			<div class="col-sm-12 col-lg-4">
				<div class="blog_home_cat bhc3">
					<h2 class="h4">Cat health and care</h2>
					<div class="bhc_div"></div>
					<?php echo do_shortcode('[display-posts category="health-and-care"]'); ?>
				</div>



				<div class="blog_home_cat bhc1">
					<h2 class="h4">Adopters' corner</h2>
					<div class="bhc_div"></div>
					<?php echo do_shortcode('[display-posts category="adopters-corner"]'); ?>
				</div>
			</div>


		</div>
</div>
	

	
	<div class="pd"></div>

	<div class="contain">
		<h1 class="">Cat Blog Articles and Resources</h1>
		<p>At Tenth Life, our goal is to be a one-stop resource to the community for all things feline-related. Here, you will find information about common behaviors (positive or negative) seen in cats, some simple health information and care tips, and resources for you to explore to learn more about our feline friends. Click on the categories below (or in the sidebar) to get more in-depth information about our furry friends.</p>
	</div>
    
	
	<div class="in"></div>
<?php get_footer(); ?>
