<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Aliceのホームページ">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <!-- ナビゲーションメニュー -->
        <h1 class="logo">
            <a href="<?= home_url(); ?>">
                <img src="<?= get_template_directory_uri(); ?>/img/logo2.png" alt="ロゴ画像">
            </a>
        </h1>
        <ul class="menu-pc">
            <li><a href="<?= home_url(); ?>/#front-news">お知らせ</a></li>
            <li><a href="<?= home_url(); ?>/#front-menu">メニュー</a></li>
            <li><a href="<?= home_url(); ?>/#front-about">Aliceについて</a></li>
            <li><a href="<?= home_url(); ?>/#store-info">店舗情報</a></li>
            <li><a href="<?= home_url(); ?>/#calender">営業日カレンダー</a></li>
            <li><a href="お問い合わせ">お問い合わせ</a></li>
        </ul>
        <!-- ナビゲーションメニュー -->
        
        <!-- ハンバーガーボタン -->
        <div id="btn" class="hamburger__btn">
            <span class="hamburger__line"></span>
            <span class="hamburger__line"></span>
            <span class="hamburger__line"></span>
        </div>
        <!-- ハンバーガーボタン -->
        
        <!-- ハンバーガーメニュー -->
        <ul id="menu" class="hamburger-menu-sp">
            <li class="hamburger-menu-sp__item"><a class="sp-link" href="<?= home_url(); ?>/#front-news">お知らせ</a></li>
            <li class="hamburger-menu-sp__item"><a class="sp-link" href="<?= home_url(); ?>/#front-menu">メニュー</a></li>
            <li class="hamburger-menu-sp__item"><a class="sp-link" href="<?= home_url(); ?>/#front-about">Aliceについて</a></li>
            <li class="hamburger-menu-sp__item"><a class="sp-link" href="<?= home_url(); ?>/#store-info">店舗情報</a></li>
            <li class="hamburger-menu-sp__item"><a class="sp-link" href="<?= home_url(); ?>/#calender">営業日カレンダー</a></li>
            <li class="hamburger-menu-sp__item"><a class="sp-link" href="お問い合わせ">お問い合わせ</a></li>
        </ul>
        <!-- ハンバーガーメニュー -->
    </header>