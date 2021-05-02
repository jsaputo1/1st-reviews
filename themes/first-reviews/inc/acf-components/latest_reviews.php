<?php 
/**
* Latest Reviews Component
*/
?> 
 
 <section class="latest-reviews col-lg-10">
    <h2 class="title">Latest Reviews</h2>
    <?php
        $args = array( 
            'post_type' => 'post', 
            'order' => 'ASC',
            'cat' => '7'
            );
        $review_posts = get_posts( $args ); 
    ?>
    <?php foreach ( $review_posts as $post ) : setup_postdata( $post ); ?> 
      <div class="row post-wrapper">
        <div class="col-lg-4 thumbnail">
          <img src="<?php echo get_the_post_thumbnail_url();?>">
        </div>
        <div class="text col-lg-8">
          <h2><a href="<?php echo get_the_permalink() ?>"><?php echo the_title(); ?></a></h2>
          <div class="subtitle">
            <span><?php echo the_field( 'rating' ); ?></span>
            <div>
              <?php
              $genres = get_field('genre');
              foreach ( $genres as $genre ) : 
              ?>
                <span><a href="<?php echo get_home_url(); ?>/tag/<?php echo strtolower( $genre ); ?>"><?php echo $genre; ?></a></span>
              <?php endforeach; ?>
              </div>
          </div>
          <p>
          <?php echo wp_trim_words( get_the_content(), 65, '...' ) ?>
          <span> <a href="<?php echo get_the_permalink() ?>">Read More</a></span>
          </p>
          <h4><strong>By <?php echo get_the_author() ?></strong>
          <span> <?php echo get_the_date(); ?></span></h4>
        </div>
      </div>
      <hr>

    <?php endforeach; wp_reset_postdata(); ?>
  </section>
