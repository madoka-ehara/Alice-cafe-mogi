<?php get_header(); ?>
<!-- 404トップ画像 -->
<div class="single-page-parts__fv">
    <img src="<?= get_template_directory_uri(); ?>/img/top7.png" alt="うさぎのぬいぐるみと看板の画像">
</div>
<!-- 404トップ画像 -->

<div class="er-page-header">
    <h2>お探しのページは見つかりませんでした。</h2>
</div>
<div class="er-page-text-wrap">
    <p>お探しのページは存在しないか、現在非公開になっております。</p>
</div>
<div class="front-common__btn">
    <a href="<?= home_url(); ?>">トップに戻る</a>
</div>
<?php get_footer(); ?>