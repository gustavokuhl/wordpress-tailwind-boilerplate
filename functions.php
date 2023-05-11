<?php

function adicionar_estilo_personalizado() {
    wp_enqueue_style('tailwindcss', get_theme_file_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'adicionar_estilo_personalizado');
