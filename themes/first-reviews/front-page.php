
<!-- Header  -->
<?php get_header(); ?>

  <section class="featured">
    <?php
    $featured_review = get_field('featured_review');
    if( $featured_review ): ?>
      <?php
      $args = array( 
          'p' => get_field('featured_review')->ID
          );
      $product_posts = get_posts( $args ); 
      ?>
      <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>  
      <div class="featured-container row">
        <div class="featured-image col"       
          style="background-image: linear-gradient(180deg,rgba(16,16,16,0) 0,#101010),
        url(<?php echo get_the_post_thumbnail_url();?>)"        
        >
          <div class="black-block"></div>
          <div class="text">
            <h3><?php echo the_field( 'movie_title' ); ?>
            <h5><?php echo the_field( 'rating' ); ?></h5>
        </div>
        </div> 
        <div class="featured-text col-6">
          <div class="featured-title">
            <h1><?php echo the_title(); ?></h1>
            <div class="rating">
              <?php echo the_field( 'rating' ); ?>
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
      <?php endforeach; wp_reset_postdata(); ?>
    <?php endif; ?>
  </section>
  <div class="container">
    <div class="main-split">
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
      <section class="sidebar">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>

<!-- Footer -->
<?php get_footer();?>