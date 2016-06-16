<?php
function news_init() {
$args = array(
    'label' => 'Новости',
    'singular_name' => 'Новость',
    'add_new' => 'Добавить новость',
    'add_new_item' => 'Добавить новость',
    'edit_item' => 'Редактировать новость',
    'new_item' => 'Новая новость',
    'all_items' => 'Все новости',
    'view_item' => 'Просмотр новости',
    'search_items' => 'Поиск новости',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'news'),
    'query_var' => true,
    'menu_icon' => '',
    'supports' => array(
        'title',
        'editor',
        'thumbnail',)
    );
    register_post_type( 'news', $args );
}
add_action( 'init', 'news_init' );



