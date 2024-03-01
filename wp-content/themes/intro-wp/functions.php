<?php

//Désactiver gutenberg
add_filter('use_block_editor_for_post', '__return_false');

function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/public/' . $file;
}
