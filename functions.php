<?php
  function theme_enqueue_styles() {

      $parent_style = 'parent-style';

      wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
      wp_enqueue_style( 'child-style',
          get_stylesheet_directory_uri() . '/style.css',
          array( $parent_style )
      );
  }
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

  add_action( 'get_header', 'remove_storefront_sidebar' );
    if ( is_product() ) {
      remove_action( 'storefront_sidebar', 'storefront_get_sidebar',			10 );
    }


?>

<?php
/**
 * Adds a top bar to Storefront, before the header.
 */
function storefront_add_topbar() {
    global $current_user;
    get_currentuserinfo();
    if ( ! empty( $current_user->user_firstname ) ) {
        $user = $current_user->user_firstname;
    } else {
        $user = __( 'guest', 'storefront-child' );
    }
    ?>
    <div id="topbar">
        <div class="col-full">
            <p>Welcome <?php echo $user ?>!</p>
        </div>
    </div>
    <?php
}
add_action( 'storefront_before_header', 'storefront_add_topbar' );

/**Meta slider**/
add_action( 'init', 'child_theme_init' );
function child_theme_init() {
	add_action( 'storefront_before_content', 'woa_add_full_slider', 5 );
}

function woa_add_full_slider() { ?>
	<div id="slider">
		<?php echo do_shortcode("[metaslider id=388 percentwidth=100]"); ?>
	</div>
<?php
}


/**Remove credits**/
add_action( 'init', 'custom_remove_footer_credit', 10 );

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
}

function custom_storefront_credit() {
	?>
	<div class="site-info">
		&copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
	</div><!-- .site-info -->
	<?php
}
