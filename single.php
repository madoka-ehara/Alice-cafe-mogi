<?php get_header(); ?>

<!-- 記事詳細ページ -->

<!-- トップ画像 -->
<div class="single-page-parts__fv">
    <img src="<?= get_template_directory_uri(); ?>/img/top7.png" alt="うさぎとパンケーキの画像">
</div>
<!-- トップ画像 -->

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="single-page-parts__desc">
            <!-- 日付 -->
            <div class="single-page-parts__date">
                <?php the_date('Y/m/d'); ?>
            </div>
            <!-- タイトル -->
            <div class="single-page-parts__header-title">
                <h2><?php the_title(); ?></h2>
            </div>
            <!-- カテゴリ -->
            <ul class="single-page-parts__category">
                <li><?php the_category(); ?></li>
            </ul>
            <!-- 画像 -->
            <div class="single-page-parts__img">
                <?php the_post_thumbnail('full'); ?>
            </div>
        </div>

        <!-- 本文 -->
        <article class="single-page-parts__article">
            <?php the_content(); ?>
        </article>
<?php
    endwhile;
endif;
?>
<div class="front-common__btn">
    <a href="お知らせ一覧">お知らせ一覧に戻る</a>
</div>

<?php get_footer(); ?>