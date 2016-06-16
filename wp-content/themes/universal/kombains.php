<?php
function kombain_init() {
$args = array(
    'label' => 'Комбайны',
    'singular_name' => 'Комбайн',
    'add_new' => 'Добавить новый комбайн',
    'add_new_item' => 'Добавить новый комбайн',
    'edit_item' => 'Редактировать комбайн',
    'new_item' => 'Новый комбайн',
    'all_items' => 'Все комбайны',
    'view_item' => 'Просмотр комбайнов',
    'search_items' => 'Поиск комбанов',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'kombain'),
    'query_var' => true,
    'menu_icon' => '',
    'supports' => array(
        'title',
        'editor',
        'thumbnail',)
    );
    register_post_type( 'kombain', $args );
}
add_action( 'init', 'kombain_init' );



