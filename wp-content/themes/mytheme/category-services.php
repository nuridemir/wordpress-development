<?php get_header() ?>

<div class="container">

    <h1 class="py-5 text-center"><?php single_cat_title() ?> dynamic</h1>

    <?php get_template_part('includes/section', 'archive-services') ?>

    <?php the_posts_pagination(); ?>


</div>

<?php get_footer() ?>