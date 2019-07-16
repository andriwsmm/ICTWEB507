  
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>About Food</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    </head>
    <body>
        <h1>Food News</h1>
        <ul class="row">
            <? while (have_posts()) : the_post(); ?>
                <li class="column">
                    <div class="card">
                        <h2 class="card-title"><? the_title() ?></h2>
                        <div class="card-image"><? the_post_thumbnail(); ?></div>
                        <div class="card-content"><? the_excerpt() ?></div>
                    </div>
                </li>
            <? endwhile ?>
        </ul>
    </body>
</html>