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
            <div class="c--open__intro">
                <?php
                $args = array(
                    'post_type' => 'open',
                    'posts_per_page' => -1,
                ); ?>
                <?php $my_query = new WP_Query($args); ?>
                <?php if ($my_query->have_posts()) : ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

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
                    <?php endwhile; ?>
                <?php endif;  ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>