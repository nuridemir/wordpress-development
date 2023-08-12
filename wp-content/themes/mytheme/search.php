<?php get_header() ?>


<div class="container">
    <h1 class="py-5">Arama sonuçları '<?= get_search_query() ?>'</h1>


    <?php get_template_part('includes/section', 'search-content') ?>



</div>


<?php get_footer() ?>