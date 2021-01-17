
<!-- Header  -->
<?php get_header(); ?>

<div class="container">
  <section class="featured">
    <?php
    $featured_review = get_field('featured_review');
    if( $featured_review ): ?>
      <h3><?php echo esc_html( $featured_review->post_title ); ?></h3>
      <h3><?php echo ( $featured_review->post_content ); ?></h3>
      <h3><?php echo ( $featured_review->rating ); ?></h3>
    <?php endif; ?>
  </section>
</div>

<!-- Footer -->
<?php get_footer();?>