<?php
/*
Template Name: Archive（お知らせ一覧）
*/
?>

<?php get_header() ?>


<!-- 画像 -->
<div class="single-page-parts__fv">
    <?php the_post_thumbnail('full'); ?>
</div>

<!-- タイトル -->
<h2 class="front-common__title"><?php the_title(); ?></h2>

<?php
//$argsの引数にパラメータを指定
$args = array(
    'post_type' => 'post', //投稿ページ
    'posts_per_page' => 10, //表示する記事数
);

//クエリの定義
$the_query = new WP_Query($args);
?>

<div class="post-archive-news">
    <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <article class="post-archive-news__wrap">
                <a href="<?php the_permalink(); ?>">
                    <time><?= get_the_date('Y/m/d'); ?></time>
                    <h3><?php the_title() ?></h3>
                </a>
            </article>
        <?php endwhile ?>
    <?php endif ?>

    <?php wp_reset_postdata(); ?>
</div>

<div class="front-common__btn">
    <a href="<?= home_url(); ?>">トップに戻る</a>
</div>

<?php get_footer() ?>