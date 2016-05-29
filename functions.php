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
  
    /**
   * Category navigation
   *
   * @since  Photo Perfect 1.0
   
   TODO: Mikedice - customize the category menu then turn it back on.
   */
  function photo_perfect_add_category_navigation(){

	$show_category_dropdown = photo_perfect_get_option( 'show_category_dropdown' );
    if ( true !== $show_category_dropdown ) {
      return;
    }
	$header_category_text   = photo_perfect_get_option( 'header_category_text' );
    ?>
    <div id="category-menu" class="clear-fix header-navigation">
      <div class="container">
        <button class="nav-list-btn"><i class="fa fa-list"></i><span><?php echo esc_html( $header_category_text ); ?></span></button>
        <div class="category-list-wrapper">
          <ul>
          <?php wp_list_categories( 'title_li=&depth=1' ); ?>
          </ul>
        </div><!-- .category-list-wrapper -->
      </div><!-- .container -->
    </div><!-- #category-menu -->
    <?php
  }
?>