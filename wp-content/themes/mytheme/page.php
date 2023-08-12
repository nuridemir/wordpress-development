<?php get_header() ?>

<div class="container">

    <h1 class="py-5"><?php the_title() ?></h1>
    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('large');
        }
    ?>
    <?php get_template_part('includes/section', 'content') ?>

</div>

<?php get_footer() ?>