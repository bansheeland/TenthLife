<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/templates/xoo-el-wc-form-login.php.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php echo do_shortcode( apply_filters( 'xoo_el_myaccount_shortcode', '[xoo_el_inline_form active="login"]' ) ); ?>
		
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
