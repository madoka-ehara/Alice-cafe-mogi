<?php
/*
Template Name: menu(メニューページ)
*/
?>

<?php get_header() ?>

<!-- トップ画像 -->
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <!-- 記事ヘッダー -->
        <div class="page-parts__header__menu-page">
            <!-- 画像 -->
            <?php the_post_thumbnail('full'); ?>
        </div>

<?php
    endwhile;
endif;
?>
<!-- トップ画像 -->

<!-- メニューページタイトル -->
<h2 class="front-common__title"><?php the_title(); ?></h2>
<!-- menu-page__fv -->
<section class="menu-page__fv">
    <ul class="menu-link__btn">
        <li>
            <a href="#pancake-menu">パンケーキ</a>
        </li>
        <li>
            <a href="#light-meal-menu">軽食</a>
        </li>
        <li>
            <a href="#afternoon-menu">アフタヌーンティー</a>
        </li>
        <li>
            <a href="#drink-menu">ドリンク</a>
        </li>
        <li>
            <a href="#nuidori-content">ぬい撮り</a>
        </li>
    </ul>
</section>
<!-- menu-page__fv -->

<!-- パンケーキ -->
<section id="pancake-menu" class="common-menu__desc">
    <div class="common-menu__desc__inner">
        <h3 class="common-menu-desc__title">パンケーキ</h3>
        <p class="common-menu-desc__title__text">当店の主役！<br>注文を受けてから丁寧に焼き上げる、とろけるようなスフレパンケーキです。</p>
        <ul class="common-menu-desc__wrapper">
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu1.png" alt="パンケーキの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">はちみつバター</p>
                    <p class="common-menu-price">税込 650円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu2.png" alt="ミックスベリーパンケーキの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">ミックスベリー</p>
                    <p class="common-menu-price">税込 800円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu3.png" alt="ティラミス風パンケーキの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">ティラミスパンケーキ</p>
                    <p class="common-menu-price">税込 800円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu4.png" alt="キャラメルりんごパンケーキの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">キャラメルりんご</p>
                    <p class="common-menu-price">税込 700円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu5.png" alt="抹茶のパンケーキの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">抹茶のパンケーキ</p>
                    <p class="common-menu-price">税込 850円</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- パンケーキ -->

<!-- 軽食メニュー -->
<section id="light-meal-menu" class="common-menu__desc">
    <div class="common-menu__desc__inner">
        <h3 class="common-menu-desc__title">軽食</h3>
        <p class="common-menu-desc__title__text">愛らしいサンドイッチとカントリー風エッグベネディクト</p>
        <ul class="common-menu-desc__wrapper">
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu6.png" alt="たまごサンドの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">たまごサンド</p>
                    <p class="common-menu-price">税込 350円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu7.png" alt="ハムサンドの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">ハムサンド</p>
                    <p class="common-menu-price">税込 340円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu8.png" alt="カツサンドの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">カツサンド</p>
                    <p class="common-menu-price">税込 400円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu9.png" alt="ベーコンレタストマトの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">ベーコンレタストマト</p>
                    <p class="common-menu-price">税込 400円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu10.png" alt="サンドイッチセットの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">サンドイッチセット</p>
                    <p class="common-menu-price">税込 600円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu11.png" alt="エッグベネディクトの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">エッグベネディクト</p>
                    <p class="common-menu-price">税込 500円</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- 軽食メニュー -->

<!-- アリスのティータイム・アフタヌーンティーセット -->
<section id="afternoon-menu" class="common-menu__desc">
    <div class="common-menu__desc__inner">
        <h3 class="common-menu-desc__title">アリスのティータイム・アフタヌーンティーセット</h3>
        <p class="common-menu-desc__title__text">アリスの物語から飛び出してきたような、贅沢なアフタヌーンティーセットです。</p>
        <ul class="common-menu-desc__wrapper">
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu12.png" alt="アフタヌーンティーセットの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">通常サイズ</p>
                    <p class="common-menu-price">税込 2000円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/menu13.png" alt="ミニサイズアフタヌーンティーセットの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">ミニサイズ</p>
                    <p class="common-menu-price">税込 1200円</p>
                </div>
            </li>
        </ul>
        <div class="common-content-text">
            <p>< セット内容></p>
            <p>上段：季節のスイーツ</p>
            <p>中段：自家製スコーン2種<br>（クロテッドクリーム・ジャム付）</p>
            <p>下段：特製サンドイッチ3種</p>
            <p>ドリンク: お好きなドリンクをお選びいただけます。</p>
            <p>※ミニサイズは半量</p>
        </div>
    </div>
</section>
<!-- アリスのティータイム・アフタヌーンティーセット -->

<!-- ドリンク -->
<section id="drink-menu" class="common-menu__desc">
    <div class="common-menu__desc__inner">
        <h3 class="common-menu-desc__title">ドリンク</h3>
        <p class="common-menu-desc__title__text">お食事と一緒にどうぞ！ドリンクセットでお得なティータイムを。</p>
        <ul class="common-menu-desc__wrapper">
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/drink1.png" alt="紅茶(ホット/アイス)の画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">紅茶(レモン/ミルク)</p>
                    <p class="common-menu-price">税込 300円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/drink2.png" alt="カモミールティーの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">カモミールティー</p>
                    <p class="common-menu-price">税込 350円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/drink3.png" alt="ローズヒップティーの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">ローズヒップティー</p>
                    <p class="common-menu-price">税込 350円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/drink4.png" alt="コーヒー(ホット/アイス)の画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">コーヒー</p>
                    <p class="common-menu-price">税込 300円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/drink5.png" alt="カフェオレの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">カフェオレ</p>
                    <p class="common-menu-price">税込 350円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/drink6.png" alt="うさぎラテの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">うさぎラテ</p>
                    <p class="common-menu-price">税込 380円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/drink7.png" alt="抹茶ラテの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">抹茶ラテ</p>
                    <p class="common-menu-price">税込 380円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/drink8.png" alt="ココアの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">ココア</p>
                    <p class="common-menu-price">税込 380円</p>
                </div>
            </li>
            <li class="common-menu-desc__list">
                <div class="common-menu-desc__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/drink9.png" alt="ミックスジュースの画像">
                </div>
                <div class="common-menu-desc__text">
                    <p class="common-menu-name">ミックスジュース</p>
                    <p class="common-menu-price">税込 380円</p>
                </div>
            </li>
        </ul>
        <p class="common-content-text">
            お食事メニューと一緒にご注文で100円引きにいたします☆
        </p>
    </div>
</section>
<!-- ドリンク -->

<!-- ぬい撮り -->
<section id="nuidori-content" class="nuidori-content__desc">
    <h2 class="front-common__title">ぬい撮り</h2>
    <div class="nuidori-content__desc__wrapper">
        <div class="nuidori-content__text">
            <h4 class="nuidori-content__text__title">貸出コスチューム</h4>
            <p>手のひらサイズのぬいぐるみ用コスチュームをご用意しております。
                <br>ご自由にご利用ください。
            </p>
        </div>
        <div class="nuidori-content__img">
            <img src="<?= get_template_directory_uri(); ?>/img/costume.png" alt="コスチュームを身につけたぬいぐるみの画像">
        </div>
    </div>
    <div class="nuidori-content__desc__wrapper">
        <div class="nuidori-content__img">
            <img src="<?= get_template_directory_uri(); ?>/img/nuidori2.png" alt="コスチュームを身につけたぬいぐるみの画像">
        </div>
        <div class="nuidori-content__text">
            <h4 class="nuidori-content__text__title">撮影用小物貸出</h4>
            <p>撮影用のミニチュア食器、小物などもご用意しております。</p>
        </div>
    </div>
    <div class="nuidori-content__desc__wrapper">
        <div class="nuidori-content__text">
            <h4 class="nuidori-content__text__title">ぬいぐるみさん専用お席</h4>
            <p>お連れのぬいぐるみさん専用のお席をご用意いたします。</p>
        </div>
        <div class="nuidori-content__img">
            <img src="<?= get_template_directory_uri(); ?>/img/doll3.png" alt="クリスマス衣装のうさぎのぬいぐるみの画像">
        </div>
    </div>
    <div class="nuidori-content__attention__wrapper">
        <h4>撮影時の注意点</h4>
        <ul class="nuidori-content__attention__list">
            <li>店内は撮影自由です。</li>
            <li>撮影機材をご使用の際は、周囲のお客様へのご配慮をお願いいたします。</li>
            <li>周囲のお客様や従業員が映り込まないよう、十分にご配慮ください。</li>
        </ul>
        <p>皆様が楽しくぬい撮りできますようご協力をお願いいたします。</p>
    </div>
</section>
<!-- ぬい撮り -->

<!-- お問い合わせ -->
<section class="contact-info">
    <div class="front-common__btn">
        <a href="お問い合わせ">お問い合わせはこちら</a>
    </div>
</section>
<!-- お問い合わせ -->


<?php get_footer() ?>