<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php wp_head(); ?>
</head>

<body data-bs-theme="dark">

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php 
                     wp_nav_menu( 
                        array( 
                            'theme_location' => 'primary', 
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                            'container_class'=> 'collapse navbar-collapse', 
                            'container_id'=> 'navbarSupportedContent'
                        ) 
                    ); 
                     ?>


                <form class="d-flex" action="<?= site_url() ?>" method="get">
                    <input value="<?php the_search_query(); ?>" name="s" class="form-control me-2" type="search"
                        placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>


    </header>


    <main class="py-5 mb-5">