<?php get_header(); ?>
<section id="mainv">
    <div id="bodymovin-wrapper"></div>
    <ul class="mainv--list">
        <li class="mainv--img img01"></li>
        <li class="mainv--img img02"></li>
        <li class="mainv--img img03"></li>
        <li class="mainv--img img04"></li>
        <li class="mainv--img img05"></li>
    </ul>
</section>
<section id="sec_link-mainv">
    <ul class="top-links">
        <li class="top-links-cell">
            <a href="<?php global $url_exreserve;
                        echo $url_exreserve; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_bus.svg" alt="">
                <p>高速バス</p>
            </a>
        </li>
        <li class="top-links-cell">
            <a href="<?php global $url_reserve;
                        echo $url_reserve; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_reserved.svg" alt="">
                <p>貸切バス</p>
            </a>
        </li>
        <li class="top-links-cell">
            <a href="<?php global $url_greentours;
                        echo $url_greentours; ?>" target="_blank" rel="noopener">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_tours.svg" alt="">
                <p>金沢発<br class="sp">日帰りツアー</p>
            </a>
        </li>
        <li class="top-links-cell">
            <a href="<?php global $url_safety;
                        echo $url_safety; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_safety.svg" alt="">
                <p>安全性</p>
            </a>
        </li>
        <li class="top-links-cell">
            <a href="<?php global $url_faq;
                        echo $url_faq; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_question.svg" alt="">
                <p>Q&A</p>
            </a>
        </li>
    </ul>
</section>
<section id="sec_greenliner">
    <div class="inr">
        <div class="inr-left">
            <img class="inr-left_logo" src="<?php echo get_template_directory_uri(); ?>/img/top/greenliner_img01.svg"
                alt="">
            <p class="inr-left_section">石川・富山 ↔︎ 東京・東京ディズニーリゾート</p>
            <div class="inr-left_img">
                <img class="img-left switch"
                    src="<?php echo get_template_directory_uri(); ?>/img/top/greenliner_img02_pc.png" alt="">
                <img class="img-right" src="<?php echo get_template_directory_uri(); ?>/img/top/greenliner_img03.svg"
                    alt="">
            </div>
            <a class="inr-left_link" href="<?php global $url_exreserve;
                                            echo $url_exreserve; ?>">
                <p>詳しくはこちら</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_w-min.svg" alt="">
            </a>
        </div>
        <div class="inr-right">
            <div class="inr-right-top">
                <p class="">高速バス 空席・料金確認</p>
            </div>
            <div class="inr-right-bottom">
                <a class="bottom-bnr-up" target="_blank" href="<?php global $url_res_route02;
                                                                echo $url_res_route02; ?>">
                    <p class="from">東京発</p>
                    <p class="to">石川<span>行</span></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_g-min-out.svg" alt="">
                </a>
                <a class="bottom-bnr-up" target="_blank" href="<?php global $url_res_route01;
                                                                echo $url_res_route01; ?>">
                    <p class="from">石川発</p>
                    <p class="to">東京<span>行</span></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_g-min-out.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<section id="sec_greenliner-link">
    <h2 class="title">Green liner SERVICE</h2>
    <div class="inr">
        <ul class="service-list">
            <li class="service-list-cell">
                <a href="<?php global $url_platform;
                            echo $url_platform; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>乗り降りば</p>
                </a>
            </li>
            <li class="service-list-cell">
                <a href="<?php global $url_car_detail;
                            echo $url_car_detail; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>車内紹介</p>
                </a>
            </li>
            <li class="service-list-cell">
                <a href="<?php global $url_fare;
                            echo $url_fare; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>運賃案内</p>
                </a>
            </li>
            <li class="service-list-cell">
                <a href="<?php global $url_member;
                            echo $url_member; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>会員</p>
                </a>
            </li>
            <li class="service-list-cell">
                <a href="<?php global $url_cart;
                            echo $url_cart; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>カート</p>
                </a>
            </li>
            <li class="service-list-cell">
                <a href="<?php global $url_others;
                            echo $url_others; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>その他サービス</p>
                </a>
            </li>
            <li class="service-list-cell">
                <a href="<?php global $url_parking;
                            echo $url_parking; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>駐車場をご利用の方</p>
                </a>
            </li>
            <li class="service-list-cell">
                <?php if (wp_is_mobile()) : ?>
                <a href="<?php global $url_mypage_sp;
                                echo $url_mypage_sp; ?>" target="_blank" rel="noopener">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>マイページ</p>
                </a>
                <?php else : ?>
                <a href="<?php global $url_mypage;
                                echo $url_mypage; ?>" target="_blank" rel="noopener">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>マイページ</p>
                </a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</section>
<section id="sec_large-link">
    <div class="inr">
        <div class="large-link-cell">
            <img class="dir" src="<?php echo get_template_directory_uri(); ?>/img/top/large-link_ico.svg">
            <img class="left" src="<?php echo get_template_directory_uri(); ?>/img/top/large-link01.jpg">
            <a class="right" href="<?php global $url_reserve;
                                    echo $url_reserve; ?>">
                <div class="txt-inr">
                    <p class="title">貸切バス</p>
                    <p class="detail">様々な用途でご利用いただける<br>丸一観光の貸切バス</p>
                </div>
            </a>
        </div>
        <div class="large-link-cell">
            <img class="dir" src="<?php echo get_template_directory_uri(); ?>/img/top/large-link_ico.svg">
            <img class="left" src="<?php echo get_template_directory_uri(); ?>/img/top/large-link02.jpg">
            <a class="right" target="_blank" href="<?php global $url_greentours;
                                                    echo $url_greentours; ?>">
                <div class="txt-inr">
                    <p class="title">金沢発<br class="sp">日帰りツアー</p>
                    <p class="detail">外国人旅行者向け<br>金沢駅発着のバスツアー</p>
                </div>
            </a>
        </div>
    </div>
</section>
<section id="sec_news">
    <div class="inr">
        <div class="title-box">
            <p class="title-en">NEWS</p>
            <p class="title">ニュース</p>
        </div>
        <ul class="news-list">


            <?php
            $cat_posts = get_posts(array(
                'post_type' => 'post',
                'category_name' => 'news',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            global $post;
            if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
            <li class="news-list-cell">
                <a href="<?php the_permalink() ?>">
                    <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                    <p class="detail"><?php
                                                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                                                    $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                                                    echo $title . '……';
                                                } else {
                                                    echo $post->post_title;
                                                }
                                                ?></p>
                </a>
            </li>
            <?php endforeach;
            endif;
            wp_reset_postdata(); ?>

        </ul>
        <a href="<?php global $url_page_news;
                    echo $url_page_news; ?>" class="btn_more">
            <img class="btn_more-img" src="<?php echo get_template_directory_uri(); ?>/img/top/news-ico.svg">
            <p>MORE</p>
        </a>
    </div>
</section>
<?php require TEMPLATEPATH . "/module/about-link.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"></script>
<?php get_footer(); ?>