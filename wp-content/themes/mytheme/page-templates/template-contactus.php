<?php

    /*
        Template Name: Contact
    */

?>
<!-- burası page.php yi eziyor -->
<?php get_header() ?>


<div class="container">
    <h1><?= the_title() ?></h1>
    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }
    ?>

    <?php get_template_part('includes/section', 'content') ?>

    <h6>burası template conact us</h6>


</div>




<?php get_footer() ?>