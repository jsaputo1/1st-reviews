<?php 
/**
* Sidebar Component
*/
?> 
 
<aside class="sidebar">
  <h2 class="main-title">Genre</h1>
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
          <li><a href="<?php echo get_home_url(); ?>/tag/<?php echo strtolower( $genreName ); ?>"></a>
          <?php echo $genreName; ?></li>
        <?php endforeach; ?>
    <?php endforeach; wp_reset_postdata(); ?>
  </ul>
</aside>
