<?php

$uri = get_theme_file_uri();

function inl_enqueue(){

    wp_register_style('inl_bootstrap', $uri . '/css/bootstrap.css');
    wp_register_style('inl_jquery', $uri . '/js/jquery.js');  
    wp_register_style('inl_style', $uri . '/css/style.css');
    //gör likadant med resterande
    wp_enqueue_style('inl_bootstrap');
    wp_enqueue_style('inl_jquery');
    wp_enqueue_style('inl_style');


}

// Enqueue som kopplar till function.php för att få alla komponenter att synka och fungera, tex css, js, bootstrap. 

?>