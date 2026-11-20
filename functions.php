<?php
/**
 * WhiskerMat theme bootstrap.
 *
 * @package WhiskerMat
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme supports.
 */
function whiskermat_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array( 'height' => 96, 'width' => 96, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'post-thumbnails' );

	// WooCommerce.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary navigation', 'whiskermat' ),
			'footer'  => __( 'Footer navigation', 'whiskermat' ),
		)
	);
}
add_action( 'after_setup_theme', 'whiskermat_setup' );

/**
 * Front-end assets.
 */
function whiskermat_assets() {
	/*
	 * No remote webfonts: the palette works with the system serif/sans stack,
	 * and WordPress.org does not allow themes to phone home for assets.
	 * Site owners can install any font plugin, or drop woff2 files into
	 * assets/fonts/ and declare @font-face in their own child theme.
	 */
	wp_enqueue_style(
		'whiskermat-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	$extra = get_theme_file_path( 'assets/css/wm-extra.css' );
	if ( file_exists( $extra ) ) {
		wp_enqueue_style(
			'whiskermat-extra',
			get_theme_file_uri( 'assets/css/wm-extra.css' ),
			array( 'whiskermat-style' ),
			(string) filemtime( $extra )
		);
	}

	$rail_js = get_theme_file_path( 'assets/js/wm-rail.js' );
	if ( file_exists( $rail_js ) ) {
		wp_enqueue_script(
			'whiskermat-rail',
			get_theme_file_uri( 'assets/js/wm-rail.js' ),
			array(),
			(string) filemtime( $rail_js ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'whiskermat_assets' );

/**
 * Pattern category so the WhiskerMat patterns sit together in the inserter.
 */
function whiskermat_register_pattern_category() {
	register_block_pattern_category(
		'whiskermat',
		array( 'label' => __( 'WhiskerMat', 'whiskermat' ) )
	);
}
add_action( 'init', 'whiskermat_register_pattern_category' );

/**
 * Keep the shop page and product archives on the theme's wide layout.
 */
function whiskermat_woo_wrapper_open() {
	echo '<div class="wm-wrap wm-shop-wrap">';
}
function whiskermat_woo_wrapper_close() {
	echo '</div>';
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_before_main_content', 'whiskermat_woo_wrapper_open', 10 );
add_action( 'woocommerce_after_main_content', 'whiskermat_woo_wrapper_close', 10 );

/**
 * Slightly larger related-product grid and 3-up shop columns.
 */
add_filter(
	'loop_shop_columns',
	function () {
		return 3;
	}
);
add_filter( 'woocommerce_output_related_products_args', function ( $args ) {
	$args['posts_per_page'] = 3;
	$args['columns']        = 3;
	return $args;
} );

/**
 * Cart item count helper, shared by the rail and the cart fragments filter.
 */
function whiskermat_cart_count() {
	if ( function_exists( 'WC' ) && WC()->cart ) {
		return (int) WC()->cart->get_cart_contents_count();
	}
	return 0;
}

/**
 * Cart link markup used by the floating rail.
 * Plain theme markup: themes must not register shortcodes.
 */
function whiskermat_cart_link() {
	$count = whiskermat_cart_count();
	$url   = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' );

	$svg = '<svg class="wm-cart-icon__svg" viewBox="0 0 1024 1024" aria-hidden="true" focusable="false" fill="currentColor" xmlns="http://www.w3.org/2000/svg">'
		. '<path d="M937.7 240.4c-18.3-22.8-46-36.2-75.5-36.2h-381c-17.4 0-31.7 14.3-31.7 31.7s14.3 31.7 31.7 31.7h381.1c9.8 0 19.2 4.5 25.5 12.5 6.3 8 8.5 18.3 5.8 29.9l-50.9 314c-3.1 15.2-16.5 25.5-31.7 25.5H404.8c-15.2 0-28.6-10.7-31.7-24.6l-75-429.7c-9.4-44.2-49.1-76.4-94.3-76.4H97c-17.4 0-31.7 14.7-31.7 32.2s14.3 31.7 31.7 31.7h106.8c15.2 0 28.6 10.7 31.7 24.6l75 429.7c9.4 44.2 49.1 76.4 94.3 76.4h406.1c45.1 0 84-30.8 94.7-77.3l50.9-314c6.2-29-0.5-58.5-18.8-81.7z"/>'
		. '<circle cx="791.6" cy="841.2" r="63.9"/>'
		. '<circle cx="429.3" cy="841.2" r="63.9"/>'
		. '</svg>';

	return '<button type="button" class="wm-cart-icon wm-rail__cart" data-cart-url="' . esc_url( $url ) . '" aria-label="' . esc_attr__( 'Open cart', 'whiskermat' ) . '">'
		. $svg
		. '<span class="wm-cart-count">' . esc_html( (string) $count ) . '</span>'
		. '</button>';
}

/**
 * Refresh the rail badge whenever WooCommerce refreshes its cart fragments.
 */
function whiskermat_cart_fragments( $fragments ) {
	$fragments['.wm-cart-count'] = '<span class="wm-cart-count">' . esc_html( (string) whiskermat_cart_count() ) . '</span>';
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'whiskermat_cart_fragments' );

/**
 * Floating side rail: cart (reuses the header cart logic) + back to top.
 * Rendered globally via wp_footer so every template gets it.
 * Behaviour lives in assets/js/wm-rail.js.
 */
function whiskermat_render_rail() {
	if ( is_admin() ) {
		return;
	}
	?>
	<div class="wm-rail" aria-label="<?php esc_attr_e( 'Quick actions', 'whiskermat' ); ?>">
		<div class="wm-rail__slot"><?php echo whiskermat_cart_link(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- markup is built with esc_url()/esc_html() above; KSES would strip the inline SVG. ?></div>
		<button class="wm-rail__top" type="button" aria-label="<?php esc_attr_e( 'Back to top', 'whiskermat' ); ?>">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 19V5"/><path d="m5 12 7-7 7 7"/></svg>
		</button>
	</div>
	<?php
}
add_action( 'wp_footer', 'whiskermat_render_rail', 5 );