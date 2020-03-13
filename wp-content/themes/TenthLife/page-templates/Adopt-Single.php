<?php
/*
 * Template Name: Adopt Single
 * Template Post Type: post, adopt, Adopt
 */
  
 get_header();  ?>

<div class="adopt_cat_top_bg"></div>
<div class="adopt_top">
	<div class="contain2 center">
		<h1 class="white">
			<?php the_field( 'cat_name' ); ?>
		</h1>
		<h4 class="white">
			<?php the_field( 'gender' ); ?> <span>|</span>
			<?php the_field( 'age' ); ?>
		</h4>

		<div class="adopt_slider">
                    <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1, "wrapAround": true }'>
			
			<?php if( get_field('cat_picture_1') ): ?>
				<img data-flickity-lazyload="<?php the_field( 'cat_picture_1' ); ?>" class="masonry-img" alt="Cat for adoptin in St. Louis">
				<?php endif; ?>
			
			
			
			<?php if( get_field('cat_picture_2') ): ?>
				<img data-flickity-lazyload="<?php the_field( 'cat_picture_2' ); ?>" class="masonry-img" alt="Cat for adoptin in St. Louis">
				<?php endif; ?>
			
			
			
			<?php if( get_field('cat_picture_3') ): ?>
				<img data-flickity-lazyload="<?php the_field( 'cat_picture_3' ); ?>" class="masonry-img" alt="Cat for adoptin in St. Louis">
				<?php endif; ?>
			
			
			
			<?php if( get_field('cat_picture_4') ): ?>
				<img data-flickity-lazyload="<?php the_field( 'cat_picture_4' ); ?>" class="masonry-img" alt="Cat for adoptin in St. Louis">
				<?php endif; ?>
			
			
			<?php if( get_field('cat_picture_5') ): ?>
				<img data-flickity-lazyload="<?php the_field( 'cat_picture_5' ); ?>" class="masonry-img" alt="Cat for adoptin in St. Louis">
				<?php endif; ?>
			
			<?php if( get_field('cat_picture_6') ): ?>
				<img data-flickity-lazyload="<?php the_field( 'cat_picture_6' ); ?>" class="masonry-img" alt="Cat for adoptin in St. Louis">
				<?php endif; ?>
			<?php if( get_field('cat_picture_7') ): ?>
				<img data-flickity-lazyload="<?php the_field( 'cat_picture_7' ); ?>" class="masonry-img" alt="Cat for adoptin in St. Louis">
				<?php endif; ?>
			
			</div>
			
		</div>

		


		<!--		<img src="" alt="adopt cats in St. Louis" class="catpic">-->
	</div>
</div>


<div class="divide80"></div>
<div class="contain2 tal">
	<div class="row">
		<div class="col-sm-7 col-lg-7 col-md-7">
			<div class="row rnp eq">
				<div class="col-md-6 col-sm-12 adopt_cat_info aci1 btlr btrr">
					<p>Hair Type<br>
						<span>
							<?php the_field( 'hair_type' ); ?></span>
					</p>
				</div>
				<div class="col-md-6 col-sm-12 adopt_cat_info btrr br0">
					<p>Color<br>
						<span>
							<?php the_field( 'breed' ); ?></span>
					</p>
				</div>
				<div class="col-md-6 col-sm-12 adopt_cat_info bblr br0">
					<p>Size<br>
						<span>
							<?php the_field( 'size' ); ?></span>
					</p>
				</div>

				<?php if( get_field('good_with') ): ?>
				<div class="col-md-6 col-sm-12 adopt_cat_info bbrr bblr">


					<p>Good at Homes<br>
						<span>
							<?php the_field( 'good_with' ); ?></span>
					</p>
				</div>
				<?php endif; ?>

			</div>

			<div class="divide60"></div>

			<h2>About
				<?php the_field( 'cat_name' ); ?>
			</h2>

			<div class="cat_bio">
				<?php the_field( 'cat_bio' ); ?>
			</div>
		</div>
		<div class="col-lg-1"></div>
		<div class="col-sm-5 col-md-5 col-lg-4">
			<div class="cat_page_form">

				<h4>Ask About <?php the_field( 'cat_name' ); ?></h4>
					<?php echo do_shortcode('[contact-form-7 id="330" title="Adopt a Cat"]'); ?>
				
<!--
				<button class="ask_about orange_bg">Inquire About
					<?php the_field( 'cat_name' ); ?></button>



				<div class="form_hide">
					<h4>Ask About <?php the_field( 'cat_name' ); ?></h4>
					<?php echo do_shortcode('[contact-form-7 id="330" title="Adopt a Cat"]'); ?>
				</div>

				<button class="share_about orange_ol_bg">Share this Kitty</button>

				<div class="share_hide">
					<h4>Share this Page</h4>
					<?php echo do_shortcode('[scriptless]'); ?>
				</div>
-->
			</div>
			
			<div class="divide40"></div>
			
			<h4>Share this Page</h4>
					<?php echo do_shortcode('[scriptless]'); ?>


		</div>
	</div>
</div>


<div class="divide100"></div>

<div class="contain2 center greenish_bg">
	
	<div class="row next_cats_bar rnp">
		<div class="col-lg-4 col-sm-6">
			<div class="prev-posts pull-left">
				<?php
				$prev_post = get_previous_post();
				if($prev_post) {
				   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
				   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" ">Previous: <strong>'. $prev_title . '</strong></a>' . "\n";
								}
				?>
    		</div>
		</div>
		
		<div class="col-md-4 col-sm-4">
			<div class="center_cats_adopt_button">
				<a class="backtocats" href="/adopt/">See All Cats</a>
			</div>
		</div>
		
		<div class="col-lg-4 col-sm-6">
    		<div class="next-posts pull-right">
				<?
				$next_post = get_next_post();
				if($next_post) {
				   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
				   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" ">Next: <strong>'. $next_title . ' </strong></a>' . "\n";
								}
				?>
			</div>
		</div>
	</div>
	

	
	
</div>
<div class="pd"></div>
<style>
    .donate_menu a {
        color: white
    }
</style>
<?php get_footer(); ?>
