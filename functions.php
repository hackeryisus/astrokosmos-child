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
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );

}

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
