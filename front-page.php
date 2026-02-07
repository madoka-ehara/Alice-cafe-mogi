<?php get_header() ?>
<main>
    <!-- fv -->
    <section class="front-fv">
        <!-- swiper -->
        <!-- Slider main container -->
        <div class="swiper swiper-fv">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/img/top.png" alt="くまさんとパンケーキの画像">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/img/top3.png" alt="うさぎとパンケーキの画像">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/img/top4.png" alt="サンドイッチとエッグベネディクトの画像">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/img/top5.png" alt="アフタヌーンティーセットとうさぎの画像">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/img/top6.png" alt="うさみみサンドイッチの画像">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/img/event4.png" alt="クリスマス衣装を着たうさぎのぬいぐるみの画像">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <!-- swiper -->
    </section>
    <!-- fv -->

    <!-- お知らせ -->
    <section id="front-news" class="front-news">
        <h2 class="front-common__title">お知らせ</h2>
        <!-- お知らせ一覧 -->
        <?php if (have_posts()):
            while (have_posts()) : the_post(); ?>
                <article class="front-news__wrap">
                    <a href="<?php the_permalink(); ?>">
                        <time><?= get_the_date('Y/m/d'); ?></time>
                        <h3><?php the_title() ?></h3>
                    </a>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- お知らせ一覧 -->
        <div class="front-common__btn">
            <a href="<?php echo esc_html(home_url('/お知らせ一覧/')); ?>">お知らせ一覧はこちら</a>
        </div>
    </section>
    <!-- お知らせ -->

    <!-- メニュー -->
    <section id="front-menu" class="front-menu">
        <div class="front-menu__inner">
            <h2 class="front-common__title__white">メニュー</h2>
            <div class="front-menu__wrapper">
                <ul class="front-menu__list">
                    <li class="front-menu__list-item">
                        <img src="<?= get_template_directory_uri(); ?>/img/menu1.png" alt="パンケーキの画像">
                        <div class="front-menu__list__text">
                            <h3>パンケーキ各種</h3>
                            <p>奇跡のふわふわ！特製スフレパンケーキ<br>注文が入ってから焼き上げます。<br>
                                丁寧に泡立てたメレンゲを使い、絶妙な火加減で焼き上げたパンケーキは、口に入れた瞬間にとろけるような「ふわしゅわ」食感。</p>
                        </div>
                    </li>
                    <li class="front-menu__list-item">
                        <img src="<?= get_template_directory_uri(); ?>/img/drink1.png" alt="紅茶の画像">
                        <div class="front-menu__list__text">
                            <h3>ドリンク各種</h3>
                            <p>うさぎのラテアートや彩り豊かなミックスジュースなど、思わず写真に収めたくなる一杯が揃っています。
                                「ぬい撮り」を楽しみながら、心安らぐ特別なカフェタイムをぜひお過ごしください。</p>
                        </div>
                    </li>
                    <li class="front-menu__list-item">
                        <img src="<?= get_template_directory_uri(); ?>/img/menu12.png" alt="アフタヌーンティーセットの画像">
                        <div class="front-menu__list__text">
                            <h3>アリスのティータイムセット</h3>
                            <p>不思議の国のアリスの世界をイメージしたいろいろな種類を楽しめる贅沢セットです。<br>
                                日頃のご褒美に、贅沢なひとときをお楽しみください。</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="front-common__btn__right">
                <a href="<?php echo esc_html(home_url('/メニュー/')); ?>">メニュー一覧はこちら</a>
            </div>
        </div>
    </section>
    <!-- メニュー -->

    <!-- Aliceについて -->
    <section id="front-about" class="front-about">
        <div class="front-about__img">
            <h2 class="front-common__title">Aliceについて</h2>
            <div class="front-about__text__wrapper">
                <p>当店はぬい活応援カフェです</p>
                <p>ぬいぐるみを愛するすべての方へ<br>
                    Aliceは、あなたの「ぬい活」を心から応援する<br>
                    特別な空間をご提供します</p>
                <p>周りの目を気にせず</p>
                <p>お気に入りのぬいぐるみとの<br>
                    素敵な時間をゆったりとお楽しみいただけます</p>
                <p>「推しとの思い出を形に残したい」、「他のファンと交流したい」<br>
                    そんなあなたの願いを叶える場所です</p>
            </div>
        </div>
        <ul class="front-about__list">
            <li class="front-about__list__item">
                <h3>撮影スペース</h3>
                <img src="<?= get_template_directory_uri(); ?>/img/nuidori2.png" alt="ぬい撮り撮影スペースの画像">
                <p>可愛らしいミニチュア家具や小物を揃えた、撮影スペースをご用意。
                    あなたの「推し」が主役の素敵な一枚を撮影できます。</p>
            </li>
            <li class="front-about__list__item">
                <h3>特別メニュー</h3>
                <img src="<?= get_template_directory_uri(); ?>/img/nuidori3.png" alt="アフタヌーンティーセットとぬい撮りの画像">
                <p>写真映え抜群の特製パンケーキや、お一人様でも楽しめるアフタヌーンティーセットなど、多数ご用意。
                    あなたの「推し」とのティータイムを彩ります。</p>
            </li>
            <li class="front-about__list__item">
                <h3>ワークショップ</h3>
                <img src="<?= get_template_directory_uri(); ?>/img/workshop.png" alt="アフタヌーンティーセットの画像">
                <p>ぬいぐるみの衣装作りワーショップや、交流会も不定期で開催しています。</p>
            </li>
        </ul>
    </section>
    <!-- Aliceについて -->

    <!-- 店舗情報 -->
    <section id="store-info" class="store-info">
        <div class="store-info__inner">
            <h2 class="front-common__title__white">店舗情報</h2>
            <div class="store-img">
                <img src="<?= get_template_directory_uri(); ?>/img/gaikan.png" alt="店舗外観画像">
            </div>
            <div class="store-info__desc">
                <table class="front_store-list">
                    <tr>
                        <td>店名</td>
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
                <div class="store-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13001.42651867459!2d133.2837579107233!3d35.445964430058886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3556f903941d1f9b%3A0x76f68a6cdc3aa493!2z44CSNjgzLTA4NTUg6bOl5Y-W55yM57Gz5a2Q5biC5b2m5ZCN5paw55Sw77yW77yW77yV!5e0!3m2!1sja!2sjp!4v1765689995264!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- 内観画像 -->
            <!-- swiper -->
            <!-- Slider main container -->
            <div class="swiper swiper-store">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/img/cafe1.png" alt="ボックス席とテーブル席の画像">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/img/cafe2.png" alt="ソファ席とテーブル席の画像">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/img/cafe4.png" alt="カウンター席の画像">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/img/cafe3.png" alt="ソファ席と大きなくまさんのぬいぐるみの画像">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/img/nuidori1.png" alt="ぬいぐるみとティータイムを楽しむ女性の画像">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/img/cafe5.png" alt="会話を楽しむ女性達の画像">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/img/event1.png" alt="ハロウィンイベントの画像">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= get_template_directory_uri(); ?>/img/doll2.png" alt="ハロウィン衣装のうさぎのぬいぐるみの画像">
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
            <!-- swiper -->
            <!-- 内観画像 -->
        </div>
    </section>
    <!-- 店舗情報 -->

    <!-- 営業日カレンダー -->
    <section id="calender" class="calender">
        <h2 class="front-common__title">営業日カレンダー</h2>
        <div class="front-calender__wrapper">
            <div class="front-calender">
                <iframe src="https://calendar.google.com/calendar/embed?height=300&wkst=1&ctz=Asia%2FTokyo&showPrint=0&title=Alice%20pancake%26cafe&src=ZWQ3YmQwOGU3N2JhMzMxMWFhNTg1MGMyZDMzYTZjYWY2MmNkMTMwMWM0MzAyYjkwMThlZTc5OTgxM2Y1OWUzOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23a79b8e&color=%23e67c73" style="border:solid 1px #777" width="500" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="store-mng__info">
                <div class="store-mng__name">
                    <p>ぬいぐるみ店長</p>
                    <p>アリス</p>
                </div>
                <img src="<?= get_template_directory_uri(); ?>/img/doll1.png" alt="ぬいぐるみ店長アリスの画像">
                <p>ご来店お待ちしております☆</p>
            </div>
        </div>
    </section>
    <!-- 営業日カレンダー -->

    <!-- お問い合わせ -->
    <section class="contact-info">
        <div class="front-common__btn">
            <a href="<?php echo esc_html(home_url('/お問い合わせ/')); ?>">お問い合わせはこちら</a>
        </div>
    </section>
    <!-- お問い合わせ -->
</main>
<?php get_footer() ?>