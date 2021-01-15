
<!-- Header  -->
<?php get_header(); ?>

<div class="container">
  <section class="hero">
    <img src="<?php the_field( 'hero_banner' ); ?>" />
    <h1><?php the_field( 'hero_heading' ); ?></h1>
  </section>
</div>

<!-- Footer -->
<?php get_footer();?>