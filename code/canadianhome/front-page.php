<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>
<a href="/contact" class="c--fixed__contact">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/fixed-contact.svg" alt=""></a>
<ul class="home__unfixed-news">
    <?php
    $args = array(
        'post_type' => 'open',
        'posts_per_page' => 1,
    ); ?>
    <?php $my_query = new WP_Query($args); ?>
    <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <li class="home__unfixed-news-cell">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/icon-house.svg" alt="">
                <p>open house</p>
                <a href="<?php the_permalink(); ?>">
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 23) {
                        $title = mb_substr($post->post_title, 0, 23, 'UTF-8');
                        echo $title . '…';
                    } else {
                        echo $post->post_title;
                    }
                    ?>
                    <?php
                    $days = 1;
                    $now = date_i18n('U');
                    $entry = get_the_time('U');
                    $term = date('U', ($now - $entry)) / 86400;
                    if ($days > $term) {
                        echo '<span>new!</span>';
                    }
                    ?>
                </a>
            </li>
        <?php endwhile; ?>
    <?php endif;  ?>
    <?php wp_reset_postdata(); ?>
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
    ); ?>
    <?php $my_query = new WP_Query($args); ?>
    <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <li class="home__unfixed-news-cell">
                <p>information</p>
                <a href="<?php the_permalink(); ?>">
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 23) {
                        $title = mb_substr($post->post_title, 0, 23, 'UTF-8');
                        echo $title . '…';
                    } else {
                        echo $post->post_title;
                    }
                    ?>
                    <?php
                    $days = 1;
                    $now = date_i18n('U');
                    $entry = get_the_time('U');
                    $term = date('U', ($now - $entry)) / 86400;
                    if ($days > $term) {
                        echo '<span>new!</span>';
                    }
                    ?>
                </a>
            </li>
        <?php endwhile; ?>
    <?php endif;  ?>
    <?php wp_reset_postdata(); ?>
</ul>
<div class="p--slide">
    <a href="/iecow" class="p--slide__cell">
        <img class="switch" src="<?php echo get_template_directory_uri(); ?>/img/top/slide01_pc.jpg" alt="">
    </a>
    <?php
    $args = array(
        'post_type' => 'open',
        'posts_per_page' => 1,
    ); ?>
    <?php $my_query = new WP_Query($args); ?>
    <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <a class="p--slide__cell" href="<?php the_permalink(); ?>">
                <img class="switch" src="<?php echo get_template_directory_uri(); ?>/img/top/slide02_pc.jpg" alt="">
            </a>
        <?php endwhile; ?>
    <?php endif;  ?>
    <?php wp_reset_postdata(); ?>
    <a class="p--slide__cell">
        <img class="switch" src="<?php echo get_template_directory_uri(); ?>/img/top/slide03_pc.jpg" alt="">
    </a>
</div>
<section id="sec_catch">
    <div class="catch__inr">
        <div class="catch__images-list">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/catch_img01.jpg" alt="" class="catch__images catch__images01">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/catch_img02.jpg" alt="" class="catch__images catch__images02">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/catch_img03.jpg" alt="" class="catch__images catch__images03">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/catch_img04.jpg" alt="" class="catch__images catch__images04">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/catch_img05.jpg" alt="" class="catch__images catch__images05">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/catch_img06.jpg" alt="" class="catch__images catch__images06">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/catch_img07.jpg" alt="" class="catch__images catch__images07">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/catch_img08.jpg" alt="" class="catch__images catch__images08">
        </div>
        <div class="catch__text">
            <p class="catch__text-detail">
                家を建てることがゴールじゃない。<br>
                その先にある人生を考えると、<br class="sp">家にお金をかけすぎたくはない。<br>
                庭だって、家具だって、<br class="sp">住まいと同じくらい手をかけたい。<br>
                だからカナディアンホームは<br>
                無駄をカットしたリーズナブルな価格で<br>
                質の高い商品を追求しました。
            </p>
            <a href="/iecow" class="catch__text-link">
                <p class="catch__text-link--en">special contents</p>
                <p class="catch__text-link--jp">「イエカウボーイ、家を買う」の巻</p>
            </a>
        </div>
    </div>
</section>
<section id="sec_open" class="c--open">
    <h2 class="c--open__heading">
        <span>open house</span><br>
        内覧会情報はこちら！
    </h2>
    <div class="c--open__inr">
        <img class="c--open__sideImg c--open__sideImg01" src="<?php echo get_template_directory_uri(); ?>/img/top/open_img01.png" alt="">
        <img class="c--open__sideImg c--open__sideImg02" src="<?php echo get_template_directory_uri(); ?>/img/top/open_img02.png" alt="">
        <div class="c--open__wrap">
            <h3 class="c--open__introHeading">現在開催中の内覧会</h3>
            <?php
            $args = array(
                'post_type' => 'open',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'open_status',
                        'field'    => 'slug',
                        'terms'    => 'status_open',
                    ),
                ),
                'posts_per_page' => 1,
            ); ?>
            <?php $my_query = new WP_Query($args); ?>
            <?php if ($my_query->have_posts()) : ?>
                <ul class="c--open__introList">
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="c--open__intro">
                            <div class="c--open__cell">
                                <div class="c--open__cell--img" <?php if (get_field('open_thumb')) : ?> style="background-image:url(
                            <?php the_field('open_thumb'); ?>);" <?php endif; ?>>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/post/icon_open.svg" alt="">
                                </div>
                                <div class="c--open__cell--text">
                                    <div class="c--open__cell--top">
                                        <p class="c--open__cell--title">
                                            <span>
                                                <?php
                                                $terms = get_the_terms($post->ID, 'open_cat');
                                                if ($terms) {
                                                    echo $terms[0]->name;
                                                }
                                                ?>
                                            </span>
                                            <?php
                                            if (mb_strlen($post->post_title, 'UTF-8') > 23) {
                                                $title = mb_substr($post->post_title, 0, 23, 'UTF-8');
                                                echo $title . '…';
                                            } else {
                                                echo $post->post_title;
                                            }
                                            ?>
                                        </p>
                                        <?php if (get_field('open_price')) : ?>
                                            <p class="c--open__cell--price"><?php the_field('open_price'); ?>
                                                <span>万円</span>
                                            </p>
                                        <?php endif; ?>
                                        <?php if (get_field('open_toptext')) : ?>
                                            <p class="c--open__cell--catch"><?php the_field('open_toptext'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="c--open__cell--date">
                                        <p><strong>
                                                予約制内覧会開催！</strong><br>
                                            <?php the_field('open_date'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="c--open__link">詳細を見る</a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p class="c--nopost">現在開催中の内覧会はありません。</p>
            <?php endif;  ?>
        </div>
        <?php
        $args = array(
            'post_type' => 'open',
            'tax_query' => array(
                array(
                    'taxonomy' => 'open_status',
                    'field'    => 'slug',
                    'terms'    => 'status_held',
                ),
            ),
            'posts_per_page' => -1,
        ); ?>
        <?php $my_query = new WP_Query($args); ?>
        <?php if ($my_query->have_posts()) : ?>
            <div class="c--open__wrap c--open__wrap--near">
                <h3 class="c--open__introHeading">近日開催予定の内覧会</h3>
                <ul class="c--open__nearList">
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <!-- <li class="c--open__nearCard">
                            <div class="c--open__nearImg" <?php if (get_field('open_thumb')) : ?> style="background-image:url(
                            <?php the_field('open_thumb'); ?>);" <?php endif; ?>>
                            </div>
                        </li> -->
                        <li class="c--open__intro">
                            <div class="c--open__cell">
                                <div class="c--open__cell--img" <?php if (get_field('open_thumb')) : ?> style="background-image:url(
                            <?php the_field('open_thumb'); ?>);" <?php endif; ?>>
                                </div>
                                <div class="c--open__cell--text">
                                    <div class="c--open__cell--top">
                                        <p class="c--open__cell--title">
                                            <span>
                                                <?php
                                                $terms = get_the_terms($post->ID, 'open_cat');
                                                if ($terms) {
                                                    echo $terms[0]->name;
                                                }
                                                ?>
                                            </span>
                                            <?php
                                            if (mb_strlen($post->post_title, 'UTF-8') > 23) {
                                                $title = mb_substr($post->post_title, 0, 23, 'UTF-8');
                                                echo $title . '…';
                                            } else {
                                                echo $post->post_title;
                                            }
                                            ?>
                                        </p>
                                        <?php if (get_field('open_price')) : ?>
                                            <p class="c--open__cell--price"><?php the_field('open_price'); ?>
                                                <span>万円</span>
                                            </p>
                                        <?php endif; ?>
                                        <?php if (get_field('open_toptext')) : ?>
                                            <p class="c--open__cell--catch"><?php the_field('open_toptext'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="c--open__link">詳細を見る</a>
                        </li>
                    <?php endwhile; ?>
                    <?php if ($my_query->found_posts == 1) : ?>
                        <li class="c--open__nearCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/top/house_blank.png" alt="">
                        </li>

                    <?php endif;  ?>
                </ul>
            </div>
        <?php endif;  ?>
        <?php wp_reset_postdata(); ?>
        <a href="/open" class="c--open__bottomLink">内覧会情報をもっとみる</a>
    </div>
</section>

<section id="sec_house">
    <h2 class="house__heading">
        <span>canadian home's house</span><br>
        カナディアンホームの４つの家
    </h2>
    <div class="house__list">
        <div class="house__list-cell">
            <a href="/house/modern" class="house__list-top">
                <div class="house__list-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/house_modern.png" alt="モダンな家">
                </div>
                <p class="house__list-link">
                    モダンな家
                </p>
                <p class="house__list-catch">装飾をできるだけ少なくした、<br class="sp">シンプルでスタイリッシュな家。</p>
                <p class="house__list-price">34坪
                    <span>1,394</span>
                    万円〜
                </p>
            </a>
            <!-- <a class="house__list-baloon" href="">
                <div class="house__list-comment">
                    <img class="house__list-commentImg" src="<?php echo get_template_directory_uri(); ?>/img/top/house_comment.jpg" alt="">
                    <div class="house__list-commentText">
                        <p class="comment-top">施工例・入居者インタビュー </p>
                        <p class="comment-bottom">見学に行った時点で「ここにしよう」と思いました。</p>
                    </div>
                </div>
            </a> -->
        </div>
        <div class="house__list-cell">
            <a href="/house/nature" class="house__list-top">
                <div class="house__list-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/house_nature.png" alt="自然の家">
                </div>
                <p class="house__list-link">
                    自然の家
                </p>
                <p class="house__list-catch">木を基調とした、<br class="sp">気持ちのいいナチュラルな家。</p>
                <p class="house__list-price">28坪
                    <span>1,344</span>
                    万円〜
                </p>
            </a>
            <!-- <a class="house__list-baloon" href="">
                <div class="house__list-comment">
                    <img class="house__list-commentImg" src="<?php echo get_template_directory_uri(); ?>/img/top/house_comment.jpg" alt="">
                    <div class="house__list-commentText">
                        <p class="comment-top">施工例・入居者インタビュー </p>
                        <p class="comment-bottom">見学に行った時点で「ここにしよう」と思いました。</p>
                    </div>
                </div>
            </a> -->
        </div>
        <div class="house__list-cell">
            <a href="/house/american" class="house__list-top">
                <div class="house__list-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/house_american.png" alt="アメリカンな家">
                </div>
                <p class="house__list-link">
                    アメリカンな家
                </p>
                <p class="house__list-catch">ガレージのあるレトロな<br class="sp">80年代欧米テイストの家。</p>
                <p class="house__list-price">34坪
                    <span>1,292</span>
                    万円〜
                </p>
            </a>
            <!-- <a class="house__list-baloon" href="">
                <div class="house__list-comment">
                    <img class="house__list-commentImg" src="<?php echo get_template_directory_uri(); ?>/img/top/house_comment.jpg" alt="">
                    <div class="house__list-commentText">
                        <p class="comment-top">施工例・入居者インタビュー </p>
                        <p class="comment-bottom">見学に行った時点で「ここにしよう」と思いました。</p>
                    </div>
                </div>
            </a> -->
        </div>
        <div class="house__list-cell">
            <a href="/house/longtime" class="house__list-top">
                <div class="house__list-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/house_longtime.png" alt="永く愛せる家">
                </div>
                <p class="house__list-link">
                    永く愛せる家
                </p>
                <p class="house__list-catch">シンプルでオーソドックスな、<br class="sp">長年住んでも飽きない家。</p>
                <p class="house__list-price">34坪
                    <span>1,258</span>
                    万円〜
                </p>
            </a>
            <!-- <a class="house__list-baloon" href="">
                <div class="house__list-comment">
                    <img class="house__list-commentImg" src="<?php echo get_template_directory_uri(); ?>/img/top/house_comment.jpg" alt="">
                    <div class="house__list-commentText">
                        <p class="comment-top">施工例・入居者インタビュー </p>
                        <p class="comment-bottom">見学に行った時点で「ここにしよう」と思いました。</p>
                    </div>
                </div>
            </a> -->
        </div>
    </div>
</section>
<section id="sec_information">
    <img class="c--uma__img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/contact_img.png" alt="">
    <div class="information__inr">
        <div class="information__news">
            <h2 class="information__news-title">information</h2>
            <ul class="information__news-list">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ); ?>
                <?php $my_query = new WP_Query($args); ?>
                <?php if (have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="information__news-cell">
                            <a href="<?php the_permalink(); ?>" class="information__news-link">
                                <time class="information__news-date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                <p class="information__news-name">
                                    <?php
                                    if (mb_strlen($post->post_title, 'UTF-8') > 23) {
                                        $title = mb_substr($post->post_title, 0, 23, 'UTF-8');
                                        echo $title . '…';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?>
                                </p>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif;  ?>
            </ul>
            <a href="/news" class="information__news-bottomLink">すべて見る</a>
        </div>
        <?php require('module/contactarea.php') ?>
        <?php require('module/contact-tel.php') ?>
        <a href="https://083083.jp/" target="_blank" class="information__mocal">
            <img class="switch" src="<?php echo get_template_directory_uri(); ?>/img/top/mocal_bnr_pc.jpg" alt="MOCAL">
        </a>
    </div>

</section>
<?php get_footer(); ?>