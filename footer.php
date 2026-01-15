<footer>
    <div class="footer-bg">
        <div class="footer-inner">
            <div class="footer-nav_list">
                <table class="footer_store-list">
                    <tr>
                        <td><a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/img/logo2.png" alt="ロゴ画像"></a></td>
                        <td><span>Alice</span><br>pancake&cafe</td>
                    </tr>
                    <tr>
                        <td>営業時間</td>
                        <td>10:00 ～ 18:00</td>
                    </tr>
                    <tr>
                        <td>定休日</td>
                        <td>毎週火曜日</td>
                    </tr>
                    <tr>
                        <td>住所</td>
                        <td>鳥取県米子市彦名新田</td>
                    </tr>
                    <tr>
                        <td>TEL</td>
                        <td>0859-30-111X</td>
                    </tr>
                </table>
                <ul class="footer_menu-pc">
                    <li><a href="<?= home_url(); ?>/#front-news">お知らせ</a></li>
                    <li><a href="<?= home_url(); ?>/#front-menu">メニュー</a></li>
                    <li><a href="<?= home_url(); ?>/#front-about">Aliceについて</a></li>
                    <li><a href="<?= home_url(); ?>/#store-info">店舗情報</a></li>
                    <li><a href="<?= home_url(); ?>/#calender">営業日カレンダー</a></li>
                    <li><a href="お問い合わせ">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="icon-wrapper">
                <p>Follow Us</p>
                <div class="icon_img">
                    <a href="https://www.instagram.com/techis.jp/"><img src="<?= get_template_directory_uri(); ?>/img/icons8-インスタグラム-96.png" alt="instagramのアイコン"></a>
                    <a href="https://x.com/TECH_I_S_"><img src="<?= get_template_directory_uri(); ?>/img/icons8-ツイッターx-100.png" alt="Xのアイコン"></a>
                </div>
            </div>
            <p class="caution-text">当サイトの画像はすべてAIによる画像生成を使用しております</p>
        </div>
    </div>
    <p class="footer-text"><small>© Alice PANCAKE & CAFE 2025 All rights reserved.</small></p>
</footer>
<?php wp_footer(); ?>

<!-- ハンバーガーメニュー -->
<script src="<?= get_template_directory_uri(); ?>/hamburger.js"></script>

<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
    // フロントビューswiper
    const swiper = new Swiper('.swiper-fv', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        speed: 1000,

        // If we need pagination
        pagination: {
            el: '.swiper-fv .swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-fv .swiper-button-next',
            prevEl: '.swiper-fv .swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-fv .swiper-scrollbar',
            hide: true,
        },
    });
    // フロントビューswiper

    // 店舗情報swiper
    const swiper_store = new Swiper('.swiper-store', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        speed:1000,
        
        // If we need pagination
        pagination: {
            el: '.swiper-store .swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-store .swiper-button-next',
            prevEl: '.swiper-store .swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-store .swiper-scrollbar',
        },
    });
    // 店舗情報swiper
</script>
</body>

</html>