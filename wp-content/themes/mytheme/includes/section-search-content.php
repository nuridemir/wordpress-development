<?php    if( have_posts() ): while(have_posts()): the_post();      ?>
<div class="card p-3 mb-3">
    <h5 class="card-title"><?php the_title() ?></h5>
    <?php   the_excerpt();     ?>
    <a href="<?= the_permalink() ?>" class="btn btn-outline-primary">read more</a>
</div>
<?php    endwhile; else: endif;     ?>