<?php 
/**
* Hero with Featured Review Component
*/
$featured_post = get_sub_field( 'featured_post');
?>

<?php

if( $featured_post ): ?>


  <section class="hero-with-featured-review row">
    <?php foreach( $featured_post as $post ): ?>
        <div class="featured-image col-lg-7">
          <img src="<?php echo get_the_post_thumbnail_url();?>">
          <div class="text">
            <h3><?php echo get_field( 'movie_title', $post->ID ); ?></h3>
            <span><?php echo get_field( 'rating', $post->ID ); ?></span>
          </div>
        </div> 
        <div class="featured-text col-lg-5">
            <h2><?php echo get_the_title(); ?></h2>
            <span class="rating"><?php echo get_field( 'rating', $post->ID ); ?></span>
          <p><?php echo wp_trim_words( get_the_content(), 90, '...' ) ?><span><a href="<?php echo get_the_permalink() ?>" class="trunc-link">Read More</a></span></p>
          <div class="footer">
            <h4><em><?php the_author_link() ?></em>
            <span> <?php echo get_the_date(); ?></span></h4>
          </div>
        </div>
      <?php endforeach; ; ?>
    <?php endif; ?>
  </section>