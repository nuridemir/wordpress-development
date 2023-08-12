<?php

    /*
        Template Name: About
    */

?>
<!-- burası page.php yi eziyor -->
<?php get_header() ?>


<div class="container">
    <h1><?= the_title() ?></h1>
    <!-- <?php if ( has_post_thumbnail() ): ?> -->
    <!-- <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>"> -->
    <!-- <?php endif; ?> -->

    <?php
    if ( has_post_thumbnail() ) {
        the_post_thumbnail('large');
        }
    ?>

    <?php get_template_part('includes/section', 'content') ?>

    <h6>burası template about us (desc degil)</h6>


</div>




<?php get_footer() ?>