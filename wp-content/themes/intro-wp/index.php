<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= dw_asset('theme.css'); ?>">
    <script src="<?= dw_asset('script.js') ?>"></script>
</head>
<body>
<h1><?= get_bloginfo('name'); ?></h1>
<main class="page">
    <div class="page__content">
        <?php if (have_posts()): while (have_posts()): the_post(); //Ouverture ?>
            <h1>
                <?= get_the_title(); ?>
            </h1>
            <?php the_content(); // <?= get_the_content(); > ?>
        <?php endwhile; endif; // Fermeture ?>
        <p>Mon texte...</p>
    </div>
</main>
</body>
</html>

<?php get_footer(); ?>
