<?php    if( have_posts() ): while(have_posts()): the_post();      ?>


<div class="card mb-5">
    <h5 class="card-title"><?php the_title() ?></h5>
    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');
        }
    ?>
    <p class="card-text"><?php   the_excerpt();     ?></p>
    <a href="<?= the_permalink() ?>" class="btn btn-outline-primary">read more</a>
</div>

<?php comments_template(); ?>

<?php    endwhile; else: endif;     ?>