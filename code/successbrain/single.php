<?php get_header(); ?>
<section class="c--mainv">
    <a href="/" class="c--top__link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_w.svg" alt="株式会社サクセスブレイン">
    </a>
    <h1 class="c--mainvText">
        <p class="c--mainvText--en">INFORMATION</p>
        <p class="c--mainvText--jp">インフォメーション</p>
    </h1>
</section>
<section id="sec_archive" class="p-sec__post">
    <div class="c--headingIcon"></div>
    <p class="p-post__title">記事</p>
    <div class="p-post__wrap">
        <div class="p-post__main">
            <div class="p-post__box">
                <div class="p-post__label">
                    <div class="p-post__labelText">
                        <p>INDEX</p>
                    </div>
                </div>
                <div class="p-post__link">
                    <div class="p-post__postWrap">
                        <?php
                        if (have_posts()) :
                        ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <p class="p-post__postDate"><?php the_time('Y.m.d'); ?></p>
                                <p class="p-post__postCat">
                                    <?php
                                    $categories = get_the_category();
                                    if ($categories) {
                                        echo $categories[0]->name;
                                    }
                                    ?></p>
                                <p class="p-post__postTitle"><?php the_title(); ?></p>
                                <div class="p-post__postContent">
                                    <?php the_content(); ?>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
            $prev_post = get_previous_post_link();
            $next_post = get_next_post_link();
            if (isset($prev_post) || isset($next_post)) :
            ?>
                <div class="p-post__pager">
                    <?php if (isset($prev_post)) : ?>
                        <div class="p-post__pagerArrow p-post__pagerArrow--prev">
                            <?php previous_post_link('%link', 'PREV'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($next_post)) : ?>
                        <div class="p-post__pagerArrow p-post__pagerArrow--next">
                            <?php next_post_link('%link', 'NEXT'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <a href="/information" class="c--moreBtn c--moreBtn--blue c--moreBtn--center">INDEX</a>
            <?php wp_reset_postdata(); ?>

        </div>
        <div class="p-post__aside">
            <div class="p-post__asideList p-post__asideList--cat">
                <p class="p-post__asideTitle">CATEGORY</p>
                <ul class="p-post__asideLink">
                    <?php
                    // 親カテゴリーのものだけを一覧で取得
                    $args = array(
                        'parent' => 0,
                        'orderby' => 'term_order',
                        'order' => 'ASC'
                    );
                    $categories = get_categories($args);
                    ?>

                    <?php foreach ($categories as $category) : ?>
                        <li class="p-post__asideCard">
                            <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="p-post__asideList p-post__asideList--date">
                <p class="p-post__asideTitle">ARCHIVES
                </p>
                <ul class="p-post__asideLink">
                    <?php // 年別アーカイブリストを表示
                    $year = NULL; // 年の初期化
                    $args = array( // クエリの作成
                        'post_type' => 'post', // 投稿タイプの指定
                        'orderby' => 'date', // 日付順で表示
                        'posts_per_page' => -1, // すべての投稿を表示
                        'post_status' => 'publish'
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) { // 投稿があれば表示
                        while ($the_query->have_posts()) : $the_query->the_post(); // ループの開始
                            if ($year != get_the_date('Y')) { // 同じ年でなければ表示
                                $year = get_the_date('Y'); // 年の取得
                                echo '<li class="p-post__asideCard"><a href="' . '/postdate/' . $year . '">' . $year . '年</a></li>'; // 年別アーカイブリストの表示
                            }
                        endwhile; // ループの終了
                        echo '</ul>';
                        wp_reset_postdata(); // クエリのリセット
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>