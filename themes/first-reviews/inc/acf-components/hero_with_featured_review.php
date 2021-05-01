<?php 
/**
* Hero with Featured Review Component
*/
$featured_post = get_sub_field( 'featured_post');
?>

<?php

if( $featured_post ): ?>

  <section class="hero-with-featured-review">
    <?php foreach( $featured_post as $post ): ?> 
      <div class="featured-container row">
        <div class="featured-image col-12">
          <img src="<?php echo get_the_post_thumbnail_url();?>">
          <div class="black-block"></div>
          <div class="text">
            <h3><?php echo the_sub_field( 'movie_title' ); ?>
            <h5><?php echo the_sub_field( 'rating' ); ?></h5>
          </div>
        </div> 
        <div class="featured-text col-6">
          <div class="featured-title">
            <h1><?php echo the_title(); ?></h1>
            <div class="rating">
              <?php echo the_sub_field( 'rating' ); ?>
            </div>
          </div>
          <p>
          <?php echo wp_trim_words( get_the_content(), 90, '...' ) ?>
          <span> <a href="<?php echo get_the_permalink() ?>" class="trunc-link">Read More</a></span>
          </p>
          <div class="featured-post-info">
            <h4><em><?php the_author_link() ?></em>
            <span> <?php echo get_the_date(); ?></span></h4>
          </div>
        </div>
      </div>
      <?php endforeach; ; ?>
    <?php endif; ?>
  </section>