<?php

get_header(); ?>
<style>
		.category_page_posts li:after, .li_div {
			background: var(<?php the_field( 'cat_color' ); ?>);
			opacity: .3
		}
		.bhc_div {
			background: var(<?php the_field( 'cat_color' ); ?>)
		}
		.post_page a, .side_gray li a {
			color: var(<?php the_field( 'cat_color' ); ?>);
		}
		
	</style>
<div class="container in post_page">
		<div class="row rnp">
			<div class="col-lg-7 col-md-8 actuallydoaddpaddingleft">
				<div class="the_post">
					<h4 class="last_udpate">Last Updated: <?php the_date(); ?></h4>
					<?php the_field( 'content' ); ?>

					

					<div class="divide60"></div>
					<h2>Related blog posts</h2>
					<div class="bhc_div"></div>
					<div class="category_page_posts">
						
					<?php the_field( 'related_category' ); ?>
				
					</div>
				</div>

			</div>
			<div class="col-lg-2"></div>
			<div class="col-lg-3 col-sm-4 post_sidebar">
				<div class="gray_bg side_gray br5 norm_pad">
					<h4>Blog Categories</h4>
					<li><a href="http://www.tenthlifecats.org/all-about-cats/cat-behavior">Cat behavior</a></li>
					<li><a href="http://www.tenthlifecats.org/all-about-cats/health-and-care">Health and care</a></li>
					<li><a href="http://www.tenthlifecats.org/all-about-cats/feral-friends">Feral cats</a></li>
					<li><a href="http://www.tenthlifecats.org/all-about-cats/kitten-care-101">Kitten care 101</a></li>
					<li><a href="http://www.tenthlifecats.org/all-about-cats/lost-cat-tips">Lost cat tips</a></li>
					<li><a href="http://www.tenthlifecats.org/all-about-cats/adopters-corner">Adoption resources</a></li>
				</div>

				<div class="divide50"></div>

				<div class="category_page_questions">
					<p>If you have questions that are not answered by the following articles, please feel free to contact our trained Behavior Counselors at 314-808-2454 or <a href="mailto:behavior@tenthlifecats.org">behavior@tenthlifecats.org</a>.</p>
				</div>
				
				<div class="share_side">
					<h4>Share this Page</h4>
				<?php echo do_shortcode('[scriptless]'); ?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>