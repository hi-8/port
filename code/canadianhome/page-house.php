<?php
/*
Template Name: house
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="house__mainv">
            <div class="house__mainv--inr">
                <div class="house__mainv--text">
                    <p class="house__mainv--num">canadian home's house</p>
                    <h2 class="house__mainv--title"><?php the_title(); ?></h2>
                    <?php if (get_field('house_detail')) : ?>
                        <p class="house__mainv--detail">
                            <?php the_field('house_detail'); ?>
                        </p>
                    <?php endif; ?>
                    <p class="house__mainv--price">
                        <?php if (get_field('house_space')) : ?>
                            <?php the_field('house_space'); ?>
                        <?php endif; ?>
                        <span>
                            <?php if (get_field('house_price')) : ?>
                                <?php the_field('house_price'); ?>
                            <?php endif; ?>
                        </span>
                        万円〜
                    </p>
                </div>
                <img class="house__mainv--img houseimg" src="<?php echo get_template_directory_uri(); ?>/img/house/mainv_house.jpg" alt="<?php the_title(); ?>">
            </div>
        </section>
        <section class="house__article">
            <?php
            $count = 1;
            ?>
            <?php if (get_field('house_cell')) : ?>
                <?php while (the_repeater_field('house_cell')) : ?>
                    <section class="house__article--cell">
                        <div class="house__article--heading">
                            <p class="house__article--point">POINT</p>
                            <div class="house__article--num">
                                <p>
                                    <?php
                                    $countNum = sprintf('%02d', $count);
                                    echo $countNum; ?>
                                </p>
                            </div>
                        </div>
                        <h3 class="house__article--title">
                            <?php the_sub_field('house_cell_title'); ?>
                        </h3>
                        <div class="house__article--detail">
                            <img class="house__article--detailImg" src="
                        <?php if (get_sub_field('house_cell_img')) : ?>
                                <?php the_sub_field('house_cell_img'); ?>
                            <?php else : ?>
                                <?php echo get_template_directory_uri(); ?>/img/cmn/image_blank.svg
                            <?php endif; ?>
                        " alt="<?php the_sub_field('house_cell_title'); ?>">
                            <p class="house__article--detailText">
                                <?php the_sub_field('house_cell_text'); ?>
                            </p>
                        </div>
                    </section>
                    <?php $count++; ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </section>
    <?php endwhile; ?>
<?php endif; ?>
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
            <ul class="c-open__introList">
                <?php
                $args = array(
                    'post_type' => 'open',
                    'posts_per_page' => -1,
                ); ?>
                <?php $my_query = new WP_Query($args); ?>
                <?php if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="c--open__intro">
                            <div class="c--open__cell">
                                <div class="c--open__cell--img" <?php if (get_field('open_thumb')) : ?> style="background-image:url(
                            <?php the_field('open_thumb'); ?>);" <?php endif; ?>>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/open_icon.svg" alt="">
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

                                        <p class="c--open__cell--catch"><?php the_field('open_toptext'); ?></p>
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
                <?php endif;  ?>
                <?php wp_reset_postdata(); ?>
            </ul>
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
            <ul class="c-open__introList">
                <?php
                $args = array(
                    'post_type' => 'open',
                    'posts_per_page' => 1,
                ); ?>
                <?php $my_query = new WP_Query($args); ?>
                <?php if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="c--open__intro">
                            <div class="c--open__cell">
                                <div class="c--open__cell--img" <?php if (get_field('open_thumb')) : ?> style="background-image:url(
                            <?php the_field('open_thumb'); ?>);" <?php endif; ?>>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/open_icon.svg" alt="">
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

                                        <p class="c--open__cell--catch"><?php the_field('open_toptext'); ?></p>
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
                <?php endif;  ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</section>
<section class="house__others">
    <div class="house__others--inr">
        <h2 class="house__others--title">canadian home's <br class="sp">house</h2>
        <p class="house__others--sub">カナディアンホームの４つの家</p>
        <ul class="house__others--list">
            <li class="house__others--cell">
                <a href="/house/modern">
                    <img class="house__others--icon" src="<?php echo get_template_directory_uri(); ?>/img/post/house_others-modern.jpg" alt="">
                    <p class="house__others--text">
                        モダンな家
                    </p>
                </a>
            </li>
            <li class="house__others--cell">
                <a href="/house/nature">
                    <img class="house__others--icon" src="<?php echo get_template_directory_uri(); ?>/img/post/house_others-nature.jpg" alt="">
                    <p class="house__others--text">
                        自然の家
                    </p>
                </a>
            </li>
            <li class="house__others--cell">
                <a href="/house/american">
                    <img class="house__others--icon" src="<?php echo get_template_directory_uri(); ?>/img/post/house_others-american.jpg" alt="">
                    <p class="house__others--text">
                        アメリカンな家
                    </p>
                </a>
            </li>
            <li class="house__others--cell">
                <a href="/house/longtime">
                    <img class="house__others--icon" src="<?php echo get_template_directory_uri(); ?>/img/post/house_others-longtime.jpg" alt="">
                    <p class="house__others--text">
                        永く愛せる家
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <?php require('module/contactarea.php') ?>
</section>
<?php get_footer(); ?>