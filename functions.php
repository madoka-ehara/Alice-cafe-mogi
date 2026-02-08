<?php
// 投稿画面でアイキャッチ画像を設定できるようにする
function mytheme_setup()
{
    add_theme_support('post-thumbnails'); //アイキャッチ画像有効化
    add_theme_support('title-tag'); //タイトルタグ出力
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_styles()
{
    //reset.CSSの読み込み
    wp_enqueue_style(
        'reset-style',
        get_template_directory_uri() . '/reset.css',
        array(),
        '1.0.0'
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
        array(),
        null
    );

    //style.cssの読み込み
    wp_enqueue_style(
        'my-style',
        get_stylesheet_uri(),
        array('reset-style'), //reset.css読み込み後にstyle.cssを読み込む
        '1.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_enqueue_scripts()
{
    // Swiper
    wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
        array(),
        null,
        true /* trueにするとfooterにコードが出力される*/
    );
    // hamburger.js
    wp_enqueue_script(
        'hamburger',
        get_template_directory_uri() . '/hamburger.js',
        array(),
        '1.0.0',
        true
    );
    // main.js（Swiper初期化など）
    wp_enqueue_script(
        'my-main',
        get_template_directory_uri() . '/main.js',
        array('swiper'), /* swiperを先に読み込む */
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
