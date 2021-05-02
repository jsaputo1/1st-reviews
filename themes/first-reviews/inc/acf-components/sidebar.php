<?php 
/**
* Sidebar Component
*/
?> 
 
<aside class="sidebar col-2">
  <h2 class="title">Genre</h1>
  <?php
    $args = array( 
        'post_type' => 'post', 
        'order' => 'ASC',
        'cat' => '7'
        );
    $review_posts = get_posts( $args ); 
  ?>
  <ul>
    <?php foreach ( $review_posts as $post ) : setup_postdata( $post ); ?> 
      <?php $value = get_field('genre');
      // $genreLink = strtolower($value) 
        foreach ( $value as $genreName ) : 
        ?>
          <li><a href="<?php echo get_home_url(); ?>/tag/<?php echo strtolower( $genreName ); ?>">
          <?php echo $genreName; ?></li></a>
        <?php endforeach; ?>
    <?php endforeach; wp_reset_postdata(); ?>
  </ul>
</aside>
