<?php
function krep_init() {
$args = array(
    'label' => 'Крепи', 
    'singular_name' => 'Крепь',
    'add_new' => 'Добавить новую крепь',
    'add_new_item' => 'Добавить новую крепь',
    'edit_item' => 'Редактировать крепь',
    'new_item' => 'Новая крепь',
    'all_items' => 'Все крепи',
    'view_item' => 'Просмотр крепи',
    'search_items' => 'Поиск крепи',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'krep'),
    'query_var' => true,
    'menu_icon' => '',
    'supports' => array(
        'title',
    'editor',
    'thumbnail',)
    );
    register_post_type( 'krep', $args );
}
add_action( 'init', 'krep_init' );



