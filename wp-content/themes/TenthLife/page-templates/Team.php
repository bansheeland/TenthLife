<?php
/**
* Template Name: Team
* Description: DELT Homepage
*
* @package WordPress
* @subpackage BootstrapWP
*/
get_header(); ?>

<div class="container in topin">
	<div class="row">
		<div class="col-md-9">
			<div class="team_page">
				<h1 class=""><?php the_field( 'title' ); ?></h1>

			<p class="intro"><?php the_field( 'Intro' ); ?> </p>
				
				<div class="divide50"></div>

			<?php if( get_field('name_1') ): ?>
			<div class="team_box team_box_1">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php the_field( 'pic_1' ); ?>" alt="<?php the_field( 'name_1' ); ?>">
					</div>
					<div class="col-sm-8">
						<h2><?php the_field( 'name_1' ); ?></h2>
						<?php the_field( 'bio_1' ); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if( get_field('name_2') ): ?>
			<div class="team_box team_box_2">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php the_field( 'pic_2' ); ?>" alt="<?php the_field( 'name_2' ); ?>">
					</div>
					<div class="col-sm-8">
						<h2><?php the_field( 'name_2' ); ?></h2>
						<?php the_field( 'bio_2' ); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if( get_field('pic_3') ): ?>
			<div class="team_box team_box_1">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php the_field( 'pic_3' ); ?>" alt="<?php the_field( 'name_3' ); ?>">
					</div>
					<div class="col-sm-8">
						<h2><?php the_field( 'name_3' ); ?></h2>
						<?php the_field( 'bio_3' ); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if( get_field('pic_4') ): ?>
			<div class="team_box team_box_2">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php the_field( 'pic_4' ); ?>" alt="<?php the_field( 'name_4' ); ?>">
					</div>
					<div class="col-sm-8">
						<h2><?php the_field( 'name_4' ); ?></h2>
						<?php the_field( 'bio_4' ); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if( get_field('pic_5') ): ?>
			<div class="team_box team_box_1">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php the_field( 'pic_5' ); ?>" alt="<?php the_field( 'name_5' ); ?>">
					</div>
					<div class="col-sm-8">
						<h2><?php the_field( 'name_5' ); ?></h2>
						<?php the_field( 'bio_5' ); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if( get_field('pic_6') ): ?>
			<div class="team_box team_box_2">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php the_field( 'pic_6' ); ?>" alt="<?php the_field( 'name_6' ); ?>">
					</div>
					<div class="col-sm-8">
						<h2><?php the_field( 'name_6' ); ?></h2>
						<?php the_field( 'bio_6' ); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if( get_field('pic_7') ): ?>
			<div class="team_box team_box_1">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php the_field( 'pic_7' ); ?>" alt="<?php the_field( 'name_7' ); ?>">
					</div>
					<div class="col-sm-8">
						<h2><?php the_field( 'name_7' ); ?></h2>
						<?php the_field( 'bio_7' ); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if( get_field('pic_8') ): ?>
			<div class="team_box team_box_2">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?php the_field( 'pic_8' ); ?>" alt="<?php the_field( 'name_8' ); ?>">
					</div>
					<div class="col-sm-8">
						<h2><?php the_field( 'name_8' ); ?></h2>
						<?php the_field( 'bio_8' ); ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			</div>
		</div>
		<div class="col-md-3">
			<div class="gray_bg side_gray br5 norm_pad">
				<h4>Related pages</h4>
				<li><a href="/about-us/leadership/">Leadership</a></li>
				<li><a href="/about-us/board-of-directors/">Board of directors</a></li>
				<li><a href="/about-us/our-shelter/">Visit Tenth Life</a></li>
				<li><a href="/contact-us/">Contact Us</a></li>
				<li><a href="/in-the-community/">Get Involved</a></li>
			</div>
			<div class="share_side">
				<h4>Share this Page</h4>
				<?php echo do_shortcode('[scriptless]'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
