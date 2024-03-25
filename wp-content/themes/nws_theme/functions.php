<?php

function loadStyles(){
    // Appel de la fonction native de WP pour l'ajout du style.
    wp_enqueue_style(
        // Correspond à l'id.
        'main',
        // URL/lien d'accès au fichier css de manière dynamique grâce à la fonction native WP.
        get_template_directory_uri() . '/css/main.min.css'
    );
}

add_action('wp_enqueue_scripts', 'loadStyles');


function loadScripts(){
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/js/script.js'
    );
}

add_action('wp_enqueue_scripts', 'loadScripts');

// Supprimer les styles par défaut de WordPress
function remove_default_styles() {
    // Supprimer le style admin-bar
    wp_deregister_style('admin-bar');

    // Supprimer les styles inline pour la barre d'administration
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('wp_enqueue_scripts', 'remove_default_styles', 20);
// add_action('admin_enqueue_scripts', 'remove_default_styles', 20);

function createCustomPosttype() {
    register_post_type(
        'event',
        array (
            'label' => 'Evènements',
            'public' => true
        )
    );

    register_post_type(
        'picture',
        array (
            'label' => 'Photos',
            'public' => true
        )
    );
}

add_action('init', 'createCustomPosttype');

function createTaxonomyProjects(){
    register_taxonomy(
        'tax_picture_type',
        'picture',
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Types',
                'singular_name' => 'Type'
            )
        )
    );
}

add_action('init', 'createTaxonomyProjects');