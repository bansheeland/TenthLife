<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;




// DEQUEUE CF7 JS
function load_contactform7_on_specific_page(){
	if(! is_page(100) )
	{
		wp_dequeue_script('contact-form-7');
		wp_dequeue_style('contact-form-7');
	}
}
/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/* Add Featured Image to blog post pages
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
}


/*-----------------------------------------------------------------------------------*/
/* CHANGE WOOCOMMERCE BUTTON TEXT
/*-----------------------------------------------------------------------------------*/
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Complete Donation', 'woocommerce' ); 
}

/*-----------------------------------------------------------------------------------*/
/* Remove emoji script from head
/*-----------------------------------------------------------------------------------*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// DISABLE YOAST SCHEMA
function bybe_remove_yoast_json($data){
    $data = array();
    return $data;
  }
  add_filter('wpseo_json_ld_output', 'bybe_remove_yoast_json', 10, 1);

/*-----------------------------------------------------------------------------------*/
/* Remove disabling span tags
/*-----------------------------------------------------------------------------------*/
function override_mce_options($initArray) {
$opts = '*[*]';
$initArray['valid_elements'] = $opts;
$initArray['extended_valid_elements'] = $opts;
return $initArray;} add_filter('tiny_mce_before_init', 'override_mce_options'); 
/*-----------------------------------------------------------------------------------*/
/* Remove wlwmanifest_link from head
/*-----------------------------------------------------------------------------------*/
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
/*-----------------------------------------------------------------------------------*/
/* Remove rest API from head
/*-----------------------------------------------------------------------------------*/
function remove_api () {
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
}

add_action( 'after_setup_theme', 'remove_api' );
/*-----------------------------------------------------------------------------------*/
/* Remove RSS feed from head
/*-----------------------------------------------------------------------------------*/
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
/*-----------------------------------------------------------------------------------*/
/* Adds custom Header image to Head section
/*-----------------------------------------------------------------------------------*/
remove_action( 'wp_head', 'wp_resource_hints', 2 );
/*-----------------------------------------------------------------------------------*/
/* Adds custom Header image to Head section
/*-----------------------------------------------------------------------------------*/

add_theme_support( 'custom-header' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'naked' ), // Register the Primary menu
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);


/*Excerpt*/

function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }


/*-----------------------------------------------------------------------------------*/
/* Remove Pasting Classes from Tiny MCE
/*-----------------------------------------------------------------------------------*/

add_filter('tiny_mce_before_init','configure_tinymce');

/**
 * Customize TinyMCE's configuration
 *
 * @param   array
 * @return  array
 */
function configure_tinymce($in) {
    $in['paste_preprocess'] = "function(plugin, args){
    // Strip all HTML tags except those we have whitelisted
    var whitelist = 'p,span,b,strong,i,em,h3,h4,h5,h6,ul,li,ol';
    var stripped = jQuery('<div>' + args.content + '</div>');
    var els = stripped.find('*').not(whitelist);
    for (var i = els.length - 1; i >= 0; i--) {
      var e = els[i];
      jQuery(e).replaceWith(e.innerHTML);
    }
    // Strip all class and id attributes
    stripped.find('*').removeAttr('id').removeAttr('class');
    // Return the clean HTML
    args.content = stripped.html();
  }";
    return $in;
}
/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );



/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()  { 

  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_script('vendor', get_stylesheet_directory_uri() . '/js/vendor.js', '','3.1', true);
	wp_enqueue_script('popup', get_stylesheet_directory_uri() . '/js/popup.js', '','3.1', true);
    wp_enqueue_script('components', get_stylesheet_directory_uri() . '/js/scripts.js', '','3.1', true);
  
}
add_action( 'wp_enqueue_scripts', 'naked_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header



/**
 * @snippet       Redirect to Checkout Upon Add to Cart - WooCommerce
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=21607
 * @author        Rodolfo Melogli
 * @compatible    Woo 3.5.3
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
function bbloomer_redirect_checkout_add_cart( $url ) {
   $url = get_permalink( get_option( 'woocommerce_checkout_page_id' ) ); 
   return $url;
}
 
add_filter( 'woocommerce_add_to_cart_redirect', 'bbloomer_redirect_checkout_add_cart' );



//ADD WOOCOMMERCE SUPPORT
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}

//ADD WOOCOMMERCE CART ICON



//UPDATE WOOCOMMERCE CART COUNT

add_shortcode ('woo_cart_but', 'woo_cart_but' );
function woo_cart_but() {
	ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set Cart URL
  
        ?>
        <li><a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="My Basket">
	    <?php
        if ( $cart_count > 0 ) {
       ?>
            <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php
        }
        ?>
        </a></li>
        <?php
	        
    return ob_get_clean();
 
}




//CREATE FILTER DROPDOWN

/**
 * Get tools, filtered by the taxonomy term, if one was selected.
 *
 * @return WP_Query Tools in the taxonomy term if one was selected, else all.
 */
function km_get_tools_in_taxonomy_term() {
	return new WP_Query( array(
			'post_type'      => 'adopt', // Change this to the slug of your post type.
			'posts_per_page' => 500, // Display a maximum of 500 options in the dropdown.
			'tax_query'      => km_get_tools_in_taxonomy_term_tax_query(),
	) );
}

/**
 * Get the taxonomy query to be used by km_get_tools_in_taxonomy_term().
 *
 * @return array The taxonomy query if a term was selected, else an empty array.
 */
function km_get_tools_in_taxonomy_term_tax_query() {
	$selected_term = km_get_selected_taxonomy_dropdown_term();
	// If a term has been selected, use that in the taxonomy query.
	if ( $selected_term ) {
		return array(
			array(
				'taxonomy' => 'adopt', // Change this to the slug of your taxonomy.
				'field'    => 'term_id',
				'terms'    => $selected_term,
			),
		);
	}
	// Otherwise, don't filter based on a taxonomy term and just get all the results.
	return array();
}