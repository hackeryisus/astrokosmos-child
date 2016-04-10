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

<!-- Awesome fonts -->
<?php add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );

} ?>

<?php
/**
 * Adds a top bar to Storefront, before the header.
 */
function storefront_add_topbar() {
    ?>
    <div id="topbar">
        <div class="col-full center-xs">
            <p>
              Contactanos en: <a href="mailto:contacto@astrokosmos.com.mx?subject=Informacion sobre astrokosmos">contacto@astrokosmos.com.mx</a>
              o al <i class="header-number--green fa fa-whatsapp"></i> <a href="intent://send/5212225160533#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">+521 222 516 0533</a>

            </p>
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
    <?php
      if (is_front_page() || is_home()) {
        echo do_shortcode("[metaslider id=10 percentwidth=100]"); //replace 123 with slider ID
      }
      ?>
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
