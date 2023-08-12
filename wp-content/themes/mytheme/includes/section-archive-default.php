<?php    if( have_posts() ): while(have_posts()): the_post();      ?>

<h5 class="card-title"><?php the_title() ?></h5>
<?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');
        }
    ?>
<a href="<?php the_permalink(); ?>">read more</a>

<?php comments_template(); ?>

<?php    endwhile; else: endif;     ?>