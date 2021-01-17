
<!-- Header  -->
<?php get_header(); ?>

<div class="container">
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
      <div class="featured-container">
        <div class="featured-image">
          <img src="<?php echo get_the_post_thumbnail_url();?>">
          <div class="text">
            <h5><?php echo the_field( 'rating' ); ?></h5>
            <?php $genre = '';
              $value = get_field('genre');
              if ($value) {
                $genre = implode(' <span class="delimiter"> | </span>', $value);
              }
            ?>
            <h3><?php echo $genre; ?></h3>
            <h3><?php echo the_field( 'year' ); ?></h2>
        </div>
        </div> 
        <div class="featured-text">
          <div class="featured-title">
            <h1><?php echo the_title(); ?></h1>
            <div class="rating">
              <?php echo the_field( 'rating' ); ?>
            </div>
          </div>
          <?php echo wp_trim_words( get_the_content(), 130, '...' ) ?>
          <a href="<?php echo get_the_permalink() ?>" class="btn primary">Read More</a>
          <h4><em><?php echo get_the_author() ?></em>
          <span> <?php echo get_the_date(); ?></span></h4>
          <div class="tags">
            <?php echo get_the_tag_list('',', ','')?>
          </div>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    <?php endif; ?>
  </section>
</div>

<!-- Footer -->
<?php get_footer();?>