<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <!-- 記事ヘッダー -->
        <div class="page-parts__header">
            <!-- 画像 -->
            <?php the_post_thumbnail('full'); ?>
        </div>

        <!-- 本文 -->
        <article class="page-parts__article">
            <?php the_content(); ?>
        </article>
<?php
    endwhile;
endif;
?>
<?php get_footer(); ?>