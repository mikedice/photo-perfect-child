<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Photo_Perfect
 */
?>

<article class="article-list-entry" id="post-<?php the_ID(); ?>">
        <header class="entry-header">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <?php 
                $post_image_id = get_post_thumbnail_id(get_the_ID());

		        if ($post_image_id) {
			         $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
                }
			     if ($thumbnail) {
                     (string)$thumbnailurl = $thumbnail[0];
		        }
              ?>
              <a href="<?php the_permalink(); ?>">
                <img src='<?php echo $thumbnailurl; ?>' />
              </a> 
        </header>
</article><!-- #post-## -->
