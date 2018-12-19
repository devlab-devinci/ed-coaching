<?php
/**
 * Additional features to edit woocommerce config
 *
 * @package WordPress
 * @since 1.0
 */

function edcoaching_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'edcoaching_add_woocommerce_support' );
