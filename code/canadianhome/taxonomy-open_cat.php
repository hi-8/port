<?php get_header(); ?>
<section id="sec_archive">
    <h2 class="p--contact__head">
        内覧会情報
    </h2>
    <div class="archive__inr">
        <ul class="archive__menu archive__menu--grayBox">
            <li class="archive__menu--cell">
                <a href="/open/">ALL</a>
            </li>
            <li class="archive__menu--cell">
                <a href="/open_cat/open_modern/">モダンな家</a>
            </li>
            <li class="archive__menu--cell">
                <a href="/open_cat/open_nature/">自然の家</a>
            </li>
            <li class="archive__menu--cell">
                <a href="/open_cat/open_american/">アメリカンな家</a>
            </li>
            <li class="archive__menu--cell">
                <a href="/open_cat/open_longtime/">永く愛せる家</a>
            </li>
        </ul>
        <div class="c--open">
            <div class="c--open__inr">
                <?php
                if (have_posts()) :
                ?>
                    <div class="c--open__wrap c--open__wrap--near">
                        <ul class="c--open__nearList">
                            <?php while (have_posts()) : the_post(); ?>
                                <li class="c--open__intro">
                                    <div class="c--open__cell">
                                        <div class="c--open__cell--img" <?php if (get_field('open_thumb')) : ?> style="background-image:url(
                            <?php the_field('open_thumb'); ?>);" <?php endif; ?>>
                                            <?php if (has_term('status_close', 'open_status')) : ?>
                                                <div class="c--open__cell--imgClose">
                                                    <p>この物件の予約の受付は終了しました。</p>
                                                </div>
                                            <?php elseif (has_term('status_open', 'open_status')) : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/post/icon_open.svg" alt="">
                                            <?php endif; ?>
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
                                    <a href="<?php the_permalink(); ?>" class="c--open__link <?php if (has_term('status_close', 'open_status')) : ?>c--open__link--close<?php endif; ?>">
                                        <?php if (has_term('status_close', 'open_status')) : ?>
                                            終了しました
                                        <?php else : ?>
                                            詳細を見る
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php else : ?>
                    <p class="c--nopost">まだ内覧会情報はありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'list',
        'prev_text' => __(''),
        'next_text' => __(''),
    ));
    ?>
    <img class="c--uma__img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/contact_img.png" alt="">
</section>
<?php get_footer(); ?>