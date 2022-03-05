<?php
/************ CUSTOM CPT AND TAXONOMIES ***********/
function create_post_type_portfolio()
{
    register_post_type('portfolio', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Portfolio', 'interfrigo'), // Rename these to suit
            'singular_name' => __('Portfolio', 'interfrigo'),
            'add_new' => __('Dodaj nov', 'interfrigo'),
            'add_new_item' => __('Dodaj novi Portfolio', 'interfrigo'),
            'edit' => __('Uredi', 'interfrigo'),
            'edit_item' => __('Uredi Portfolio', 'interfrigo'),
            'new_item' => __('Novi Portfolio', 'interfrigo'),
            'view' => __('Vidi Portfolio', 'interfrigo'),
            'view_item' => __('Vidi Portfolio', 'interfrigo'),
            'search_items' => __('Pretraži Portfolio', 'interfrigo'),
            'not_found' => __('Nije pronađen nijedan Portfolio', 'interfrigo'),
            'not_found_in_trash' => __('Nije pronađen nijedan Portfolio', 'interfrigo')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'publicly_queryable'  => false,
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
    ));
}
add_action('init', 'create_post_type_portfolio');

add_action( 'init', 'custom_taxonomy_portfolio' );
function custom_taxonomy_portfolio()  {
$labels = array(
    'name'                       => 'Portfolio kategorije',
    'singular_name'              => 'Portfolio kategorija',
    'menu_name'                  => 'Portfolio kategorije',
    'all_items'                  => 'Portfolio kategorije',
    'parent_item'                => 'Portfolio kategorija',
    'parent_item_colon'          => 'Portfolio kategorija:',
    'new_item_name'              => 'Nova Portfolio kategorija',
    'add_new_item'               => 'Dodaj novu Portfolio kategoriju',
    'edit_item'                  => 'Uredi Portfolio kategoriju',
    'update_item'                => 'Azuriraj Portfolio kategoriju',
    'separate_items_with_commas' => 'ODvoji Portfolio kategorije zarezima',
    'search_items'               => 'Pretrazi Portfolio kategorije',
    'add_or_remove_items'        => 'Dodaj ili ukloni Portfolio kategorije',
    'choose_from_most_used'      => 'Izaberi od najkoriscenijih Portfolio kategorije',
);
$args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => false,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'show_in_rest' => true,
    'query_var' => true,
   // 'rewrite' => array( 'slug' => 'brendovi')
);
register_taxonomy( 'portfolio_kategorija', 'portfolio', $args );
register_taxonomy_for_object_type( 'portfolio_kategorija', 'portfolio' );
}
