<?php
// 投稿画面でアイキャッチ画像を設定できるようにする
function mytheme_setup()
{
    add_theme_support('post-thumbnails');//アイキャッチ画像有効化
    add_theme_support('title-tag');//タイトルタグ出力
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_styles(){
    //reset.CSSの読み込み
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/reset.css', array(), '1.0.0');
    //style.cssの読み込み
    wp_enqueue_style(
        'my-style',
        get_stylesheet_uri(),
        array('reset-style'),//reset.css読み込み後にstyle.cssを読み込む
        '1.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

