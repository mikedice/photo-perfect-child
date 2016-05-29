<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

  /**
   * Returns archive layout options.
   *
   * @since Photo Perfect 1.0
   */
  function photo_perfect_get_archive_layout_options(){

    $choices = array(
      'masonry' => __( 'Masonry', 'photo-perfect' ),
      'excerpt' => __( 'Post Excerpt', 'photo-perfect' ),
      'hailey' =>  __( 'Hailey', 'photo-perfect')
    );
    $output = apply_filters( 'photo_perfect_filter_archive_layout_options', $choices );
    if ( ! empty( $output ) ) {
      ksort( $output );
    }
    return $output;

  }
  
?>
