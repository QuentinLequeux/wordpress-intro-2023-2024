<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <title><?= wp_title(''); ?></title>
    <link rel="stylesheet" href="<?= dw_asset('theme.css'); ?>">
    <script src="<?= dw_asset('script.js') ?>"></script>
</head>
<body>
<h1><?= get_bloginfo('name'); ?></h1><?php
