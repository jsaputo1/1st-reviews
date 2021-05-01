<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package first_reviews
*/

get_header();
?>

<div class="main-split">

    <main id="primary" class="site-main col-10-lg">

    <?php
    // ID of the current item in the WordPress Loop
    $id = get_the_ID();

    // check if the flexible content field has rows of data
    if ( have_rows( 'components', $id ) ) :

        ?>

        <?php

        // loop through the selected ACF layouts and display the matching partial
        while ( have_rows( 'components', $id ) ) : the_row();

            get_template_part( 'inc/acf-components/' . get_row_layout() );

        endwhile;

    elseif ( get_the_content() ) :

        ?>


        <h1>no layouts found</h1>

        <?php
    endif;
    ?>

    </main><!-- #main -->

    <section class="sidebar col-lg-2">
        <?php
        get_sidebar();
        ?>
    </section>

</div>

<?php

get_footer();

