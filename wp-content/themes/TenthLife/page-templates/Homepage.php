<?php
/**
* Template Name: Home
* Description: DELT Homepage
*
* @package WordPress
* @subpackage BootstrapWP
*/
get_header(); ?>

<div class="home_container">
	<div class="home_container_bg"></div>
	<div class="home_hero_block_text br5">
					<h4><?php the_field( 'small_title' ); ?></h4>
					<h1><?php the_field( 'large_title' ); ?></h1>
				</div>
	</div>

<div class="lighter_orange_bg">

    <div class="container2 homepage_intro_orange">
        <div class="row">
            <div class="col-md-4">
                <div class="br8  home_tres" style="background:#ea7114">
                    <div class="ht1 white">
                        <?php the_field( 'box_1' ); ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <a href="/adopt/" class="hideshw">
                    <div class="br8 white_bg home_tres">
                   
                         <img src="<?php the_field( 'box_img_2' ); ?>" class="ht2_img " alt="Tenth Life St. Louis">
					
                    <div class="ht2">
                        <h2 class="orange"><?php the_field( 'box_2' ); ?></h2>
						<h4 class="phoneonly mobileonly">See Our Cats</h4>
                    </div>
                    
                </div>
                </a>
            </div>
            
            <div class="col-md-4">
                <a href="/about-us/">
                    <div class="br8 home_tres">
                    <img src="<?php the_field( 'box_3_img' ); ?>" alt="Adopt cats in St. Louis" class="br8 ht3_img">
                    <div class="ht3">
                        <?php the_field( 'box_3' ); ?>
                    </div>
                </div>
                </a>
            </div>
            
        </div>
    </div>
    
    <div class="contain in2">
		<p>
		<?php the_field( 'intro_p' ); ?>
		</p>
	</div>


</div>

	
<div class="mid_banner_hp">
    <img src="<?php the_field( 'visit_bg' ); ?>" alt="Cat Lounge in St. Louis" class="mid_banner_hp_img">
	<img src="/wp-content/uploads/homepage-mid-banner-cat-mobile.jpg" alt="Cat Lounge St. Louis" class="phoneonly tabletonly">
    <div class="mid_banner_hp_circle center">
       <div class="hp_banner_ciricle_inner">
             <img src="/wp-content/uploads/Gmap-small.jpg" alt="Visit Tenth Life">
        <h2 class="orange"><?php the_field( 'circle_headline' ); ?></h2>
        <a href="/about-us/our-shelter/"><button class="outline">Find Out More</button></a>
        </div>
    </div>
</div>


	


	<div class="contain2">
        <div class="pd"></div>
		<h3 class="big mb0"><?php the_field( 'bottom_headline' ); ?></h3>
	</div>

<div class="divide100"></div>

	<div class="container2 hp_img_bottoms">
		<div class="row row5">
			<div class="col-sm-4">
				<a href="<?php the_field( 'box_link_1' ); ?>">
					<div class="bottom_img_box" style="background: #eb7115">
						<h2 class="h3"><?php the_field( 'box_title_1' ); ?></h2>
						<p><?php the_field( 'box_1_text' ); ?></p>
						<img src="/img/cropped/cat-8.png" alt="Become a cat foster St. Louis">
					</div>
				</a>
			</div>
			<div class="col-sm-4">
				<a href="<?php the_field( 'box_link_2' ); ?>">
					<div class="bottom_img_box" style="background: #eb7115">
						<h2 class="h3"><?php the_field( 'box_title_2' ); ?></h2>
						<p><?php the_field( 'box_2_text' ); ?> </p>

						<img src="/img/about/cat-2.png" class="hp_bottom_img_box_middle" alt="Become a cat foster St. Louis">
					</div>
				</a>
			</div>

			<div class="col-sm-4">
				<a href="<?php the_field( 'box_link_3' ); ?>">
					<div class="bottom_img_box" style="background: #eb7115">
						<h2 class="h3"><?php the_field( 'box_title_3' ); ?></h2>
						<p><?php the_field( 'box_3_text' ); ?></p>
						<img src="/img/about/cat-5.png" alt="Become a cat foster St. Louis">
						<div class="get_involved_box_text_2">

						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	 <div class="pd"></div>



<div class="adopt_random in">
    <div class="rel">
	<h2 class="center">Available for Adoption</h2>
</div>
	<div class="carousel carousel-main" data-flickity='{ "cellAlign": "left", "lazyLoad": 2, "wrapAround": true }'>
		
		<?php  global $wp_query, $paged;


    $wp_query = null;
    $args = array(
		'orderby'        => 'rand',
		'post_type'		=> 'adopt',
        'posts_per_page' => 10,
        'meta_key'		=> 'cat_picture_1',
		'meta_key'		=> 'cat_name',
		'meta_key'		=> 'gender',
		'meta_key'		=> 'size',
		'meta_key'		=> 'age'
    );
    $wp_query = new WP_Query();
    $wp_query->query( $args );

    while ($wp_query->have_posts()) : $wp_query->the_post();
                     ?>
                    
			<div class="carousel-cell">
						<h4><?php the_field( 'cat_name' ); ?></h4>
                        <img src="<?php the_field( 'cat_picture_1' ); ?>" alt="adopt <?php the_field( 'cat_name' ); ?> the cat in St. Louis">
						<div class="adopt_me_fields">
								<div class="adopt_me_age">
									<svg width="100pt" height="100pt" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2">
											<path transform="scale(1.25)" d="m16 63.625h48" />
											<path transform="scale(1.25)" d="m47.844 25.944v10.431h-5.25v-10.431c0-0.6625 0.5375-1.1969 1.1969-1.1969h2.8562c0.6625 0 1.1969 0.53438 1.1969 1.1969z" />
											<path transform="scale(1.25)" d="m47.319 20.094c0 1.1594-0.94062 2.1-2.1 2.1s-2.1-0.94062-2.1-2.1 2.1-3.7188 2.1-3.7188 2.1 2.5594 2.1 3.7188z" />
											<path transform="scale(1.25)" d="m45.219 22.194v2.5531" />
											<path transform="scale(1.25)" d="m37.406 25.944v10.431h-5.25v-10.431c0-0.6625 0.5375-1.1969 1.1969-1.1969h2.8562c0.65938 0 1.1969 0.53438 1.1969 1.1969z" />
											<path transform="scale(1.25)" d="m36.881 20.094c0 1.1594-0.94062 2.1-2.1 2.1s-2.1-0.94062-2.1-2.1 2.1-3.7188 2.1-3.7188 2.1 2.5594 2.1 3.7188z" />
											<path transform="scale(1.25)" d="m34.781 22.194v2.5531" />
											<path transform="scale(1.25)" d="m56.303 47.959h-32.606c-1.8781 0-3.4031 1.5219-3.4031 3.4031v3.7031c0.81562-0.29375 1.6312-0.55312 2.4469-0.55312 1.9188 0 3.8344 1.4156 5.7531 1.4156s3.8344-1.4156 5.7531-1.4156 3.8344 1.4156 5.7531 1.4156 3.8344-1.4156 5.7531-1.4156 3.8344 1.4156 5.7531 1.4156 3.8344-1.4156 5.7531-1.4156c0.81562 0 1.6312 0.25938 2.4469 0.55312v-3.7031c0-1.8812-1.525-3.4031-3.4031-3.4031z" />
											<path transform="scale(1.25)" d="m51.506 55.928c-1.9188 0-3.8344-1.4156-5.7531-1.4156s-3.8344 1.4156-5.7531 1.4156-3.8344-1.4156-5.7531-1.4156-3.8344 1.4156-5.7531 1.4156-3.8344-1.4156-5.7531-1.4156c-0.81562 0-1.6312 0.25938-2.4469 0.55312v8.5625h39.409v-8.5625c-0.81562-0.29375-1.6312-0.55312-2.4469-0.55312-1.9156-0.003125-3.8344 1.4156-5.75 1.4156z" />
											<path transform="scale(1.25)" d="m34.247 40.928c1.9188 0 3.8344 1.4156 5.7531 1.4156s3.8344-1.4156 5.7531-1.4156 3.8344 1.4156 5.7531 1.4156c0.99375 0 1.9875-0.37812 2.9781-0.74688v-1.8219c0-1.8812-1.5188-3.4-3.4-3.4h-22.169c-1.8812 0-3.4 1.5188-3.4 3.4v1.8219c0.99375 0.36562 1.9875 0.74688 2.9781 0.74688 1.9188 0 3.8344-1.4156 5.7531-1.4156z" />
											<path transform="scale(1.25)" d="m54.484 47.956v-6.3562c-0.99375 0.36562-1.9875 0.74688-2.9781 0.74688-1.9188 0-3.8344-1.4156-5.7531-1.4156s-3.8344 1.4156-5.7531 1.4156-3.8344-1.4156-5.7531-1.4156-3.8344 1.4156-5.7531 1.4156c-0.99375 0-1.9875-0.37812-2.9781-0.74688v6.3562z" />
										</g>
									</svg>

									<h4>
										<?php the_field( 'age' ); ?>
									</h4>
								</div>

								<div class="adopt_me_gender">
									<svg width="100pt" height="100pt" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
										<path d="m75 6c-1.1055 0-2 0.89453-2 2s0.89453 2 2 2h12.156l-15.219 15.219c-4.6719-4.4648-10.98-7.2188-17.938-7.2188-3.9297 0-7.6562 0.86719-11 2.4375-3.3438-1.5703-7.0703-2.4375-11-2.4375-14.336 0-26 11.664-26 26 0 13.664 10.594 24.914 24 25.938v9.0625h-9c-1.1055 0-2 0.89453-2 2s0.89453 2 2 2h9v9c0 1.1055 0.89453 2 2 2s2-0.89453 2-2v-9h9c1.1055 0 2-0.89453 2-2s-0.89453-2-2-2h-9v-9.0625c3.1992-0.24219 6.2266-1.0742 9-2.375 3.3438 1.5703 7.0703 2.4375 11 2.4375 14.336 0 26-11.664 26-26 0-5.9453-2.0039-11.43-5.375-15.812l15.375-15.375-0.03125 12.188h0.03125c0 1.1055 0.89453 2 2 2s2-0.89453 2-2h-0.03125l0.03125-17c0-1.1055-0.89453-2-2-2zm-43 16c2.3164 0 4.5586 0.37109 6.6562 1.0312-6.4531 4.7344-10.656 12.371-10.656 20.969s4.2031 16.234 10.656 20.969c-2.0977 0.66016-4.3398 1.0312-6.6562 1.0312-12.176 0-22-9.8242-22-22s9.8242-22 22-22zm22 0c12.176 0 22 9.8242 22 22s-9.8242 22-22 22c-2.3164 0-4.5586-0.37109-6.6562-1.0312 6.4531-4.7344 10.656-12.371 10.656-20.969s-4.2031-16.234-10.656-20.969c2.0977-0.66016 4.3398-1.0312 6.6562-1.0312zm-11 2.9375c6.5781 3.7969 11 10.902 11 19.062s-4.4219 15.266-11 19.062c-6.5781-3.7969-11-10.902-11-19.062s4.4219-15.266 11-19.062z" />
									</svg>

									<h4>
										<?php the_field( 'gender' ); ?>
									</h4>
								</div>

								<div class="adopt_me_size">
									<svg width="100pt" height="100pt" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
										<path d="m100 50.578c0.003906-0.042969 0.003906-0.089844 0-0.13281 0.003906-0.042968 0.003906-0.089843 0-0.13281-0.015625-0.054688-0.03125-0.10938-0.054688-0.16406l-17.188-37.5v-0.046876c-0.050781-0.10547-0.11328-0.20312-0.1875-0.28906l-0.054687-0.070312c-0.089844-0.097657-0.1875-0.18359-0.29688-0.25781-0.10547-0.0625-0.21875-0.11328-0.33594-0.14844h-0.078124c-0.17578-0.074219-0.36328-0.11719-0.55469-0.11719-0.10156-0.011719-0.20312-0.011719-0.30469 0l-24.539 4.9375c-1.3477-2.9844-4.5781-4.6445-7.7891-4.0039-3.2109 0.64453-5.5547 3.418-5.6484 6.6914l-24.523 4.875h-0.19531c-0.10156 0.039062-0.20312 0.085938-0.29688 0.14062h-0.0625c-0.10547 0.070313-0.20312 0.15625-0.28906 0.25l-0.0625 0.078125c-0.070312 0.085938-0.13281 0.17969-0.17969 0.28125v0.046875l-17.188 37.5c-0.023437 0.054687-0.039063 0.10938-0.054687 0.16406-0.003907 0.042968-0.003907 0.089843 0 0.13281-0.003907 0.042969-0.003907 0.089844 0 0.13281-0.050782 0.10547-0.089844 0.21875-0.11719 0.33594 0 2.3438 2.3438 4.3984 6.7422 5.8984 3.8789 1.2539 7.9297 1.8984 12.008 1.9141 4.0781-0.015625 8.1289-0.66016 12.008-1.9141 4.3984-1.5 6.7422-3.5547 6.7422-5.8984 0.003906-0.058594 0.003906-0.12109 0-0.17969 0.003906-0.042968 0.003906-0.089843 0-0.13281-0.011719-0.046875-0.023438-0.089844-0.039062-0.13281-0.015626-0.054688-0.03125-0.10938-0.054688-0.16406l-16.414-35.75 22.602-4.5156c0.37109 0.83594 0.90234 1.5938 1.5625 2.2266l3.2812 13.062v37.305h-15.625c-2.5898 0-4.6875 2.0977-4.6875 4.6875v4.6875h-1.5625c-2.5898 0-4.6875 2.0977-4.6875 4.6875v1.5625h-4.6875c-0.86328 0-1.5625 0.69922-1.5625 1.5625s0.69922 1.5625 1.5625 1.5625h65.625c0.86328 0 1.5625-0.69922 1.5625-1.5625s-0.69922-1.5625-1.5625-1.5625h-4.6875v-1.5625c0-2.5898-2.0977-4.6875-4.6875-4.6875h-1.5625v-4.6875c0-2.5898-2.0977-4.6875-4.6875-4.6875h-15.625v-37.305l3.2656-13.062c1.3594-1.2812 2.1484-3.0469 2.2031-4.9141l21.531-4.3047-15.922 34.719c-0.023437 0.054688-0.039063 0.10938-0.054687 0.16406-0.003907 0.042969-0.003907 0.089844 0 0.13281-0.003907 0.042968-0.003907 0.089843 0 0.13281-0.035157 0.070312-0.0625 0.14453-0.085938 0.21875 0 2.3438 2.3438 4.3984 6.7422 5.8984 7.8008 2.5508 16.215 2.5508 24.016 0 4.3984-1.5 6.7422-3.5547 6.7422-5.8984 0.003906-0.066406 0.003906-0.13672 0-0.20312zm-25 38.484v1.5625h-50v-1.5625c0-0.86328 0.69922-1.5625 1.5625-1.5625h46.875c0.41406 0 0.8125 0.16406 1.1055 0.45703s0.45703 0.69141 0.45703 1.1055zm-6.25-9.375v4.6875h-37.5v-4.6875c0-0.86328 0.69922-1.5625 1.5625-1.5625h34.375c0.41406 0 0.8125 0.16406 1.1055 0.45703s0.45703 0.69141 0.45703 1.1055zm27.25-30.469h-29.5l14.75-32.188zm-46-33.594c1.5781 0 3.0039 0.95312 3.6094 2.4102 0.60547 1.4609 0.26953 3.1406-0.84766 4.2578-1.1172 1.1172-2.7969 1.4531-4.2578 0.84766-1.457-0.60547-2.4102-2.0312-2.4102-3.6094 0-2.1562 1.75-3.9062 3.9062-3.9062zm-31.25 13.906 14.75 32.188h-29.5zm0 38.438c-6.1875 0-11.602-1.625-14.125-3.125h28.25c-2.5234 1.5-7.9375 3.125-14.125 3.125zm31.25-36.914-1.1484-4.5938c0.75781 0.13672 1.5391 0.13672 2.2969 0zm31.25 24.414c-6.1875 0-11.602-1.625-14.125-3.125h28.25c-2.5234 1.5-7.9375 3.125-14.125 3.125z" />
									</svg>

									<h4>
										<?php the_field( 'size' ); ?>
									</h4>
								</div>
							</div>
				<a href="<?php the_permalink(); ?>" class="absoa"></a>
                    </div>
		
		<?php endwhile; ?>
	</div>
	
</div>
<?php wp_reset_query(); ?>

<div class="pd"></div>

<style>
    .clear_menu{display: none}

</style>
<?php get_footer(); ?>

