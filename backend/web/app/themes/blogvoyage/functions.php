<?php

function blogvoyage_enqueue_scripts()
{
    wp_enqueue_style('blogvoyage', get_template_directory_uri() .'/assets/css/index.css');
    //on charge du CSS et JS
}

add_action('wp_enqueue_scripts', 'blogvoyage_enqueue_scripts');