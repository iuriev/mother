<?php
function stoik_init() {
    $args = array(
        'label' => 'Стойки', 
        'singular_name' => 'Стойка',
        'add_new' => 'Добавить новую стойку',
        'add_new_item' => 'Добавить новую стойку',
        'edit_item' => 'Редактировать стойку',
        'new_item' => 'Новая стойка',
        'all_items' => 'Все стойки',
        'view_item' => 'Просмотр стойки',
        'search_items' => 'Поиск стоек',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'stoik'),
        'query_var' => true,
        'menu_icon' => '',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',)
        );
    register_post_type( 'stoik', $args );
}

add_action( 'init', 'stoik_init' );



