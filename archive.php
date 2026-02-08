<?php get_header(); ?>

<!-- パンくずリスト -->
<nav class="breadcrumb">
    <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?= home_url(); ?>">
                <span itemprop="name">ホーム</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?= home_url('お知らせ一覧'); ?>">
                <span itemprop="name">お知らせ一覧</span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
    </ol>
</nav>
<!-- パンくずリスト -->

<!-- タイトル -->
<div class="category-page-parts__fv">
    <h2>カテゴリー別投稿一覧</h2>
    <p><?php echo category_description(); ?></p>
</div>
<!-- カテゴリ -->
<ul class="category-page-parts__category">
    <li><?php the_category(); ?></li>
</ul>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="category-page-parts__desc-wrapper">
            <!-- 画像 -->
            <div class="category-page-parts__img">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="category-page-parts__content-wrapper">
                <!-- タイトル -->
                <div class="category-page-parts__title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <!-- 説明文 -->
                <div class="post_body">
                    <?php echo mb_substr(strip_tags($post->post_content), 0, 100) . '...'; ?>
                </div>
            </div>
        </div>

<?php
    endwhile;
endif;
?>
<div class="front-common__btn">
    <a href="<?= home_url(); ?>">トップに戻る</a>
</div>
<?php get_footer(); ?>