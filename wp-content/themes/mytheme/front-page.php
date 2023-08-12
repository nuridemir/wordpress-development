<?php get_header() ?>


<!-- <ul>
    <?php
    $args = array(
        'category_name' => 'blog', // Blog kategorisinin slug'ı
        'posts_per_page' => -1, // Tüm yazıları listelemek için -1
        'meta_query' => array(
            array(
                'key' => '_thumbnail_id', // Öne çıkarma özelliği
                'compare' => 'EXISTS' // Öne çıkarma özelliği mevcut olanları listele
            )
        )
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
    }

    wp_reset_postdata();
    ?>
</ul> -->




<div class="container">
    <?php get_template_part('includes/section', 'content') ?>
</div>


<?php get_footer() ?>