<section class="latest-reviews">
  <h1 class="main-title">Latest</h1>
  <?php
      $args = array( 
          'post_type' => 'post', 
          'order' => 'ASC',
          'cat' => '7'
          );
      $review_posts = get_posts( $args ); 
  ?>
  <?php foreach ( $review_posts as $post ) : setup_postdata( $post ); ?> 
    <div class="post-container">
      <div class="thumbnail">
        <img src="<?php echo get_the_post_thumbnail_url();?>">
      </div>
      <div class="post-text">
        <h1><?php echo the_title(); ?></h1>
        <h5><?php echo the_field( 'rating' ); ?></h5>
        <p>
        <?php echo wp_trim_words( get_the_content(), 30, '...' ) ?>
        <span> <a href="<?php echo get_the_permalink() ?>">Read More</a></span>
        </p>
        <h4><strong>By <?php echo get_the_author() ?></strong>
        <span> <?php echo get_the_date(); ?></span></h4>
      </div>
    </div>
    <hr>

  <?php endforeach; wp_reset_postdata(); ?>
</section>