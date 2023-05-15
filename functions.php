<?php
// JSファイルの読み込み// 

function st_enqueue_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1' , false);
  wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'st_enqueue_scripts');
add_theme_support('post-thumbnails');

// カスタムメニュー機能を使用可能にする//
add_theme_support('menus');

