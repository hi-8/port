<?php
$slug = explode('/', $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
$navi = ($slug[1] == '') ? 'home' : $slug[1];
?>
<!doctype html>
<html lang="ja">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="author" content="//www.brandvoice.jp/">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <!--css-->
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/dist/main.css?<?php echo date('Ymd-Hi'); ?>">
    <link rel="stylesheet" href="https://use.typekit.net/ujo7htn.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M98MX98');
    </script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
    <script src="https://d.shutto-translation.com/trans.js?id=895"></script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M98MX98');
    </script>
    <!-- End Google Tag Manager -->
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>


<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M98MX98" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav>
        <section id="nav_pc" class="c--nav_pc">
            <div class="nav-unfixed">
                <div class="inr">
                    <div class="inr-left">
                        <a href="<?php global $url_top;
                                    echo $url_top; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/head-logo__unfixed.svg">
                        </a>
                    </div>
                    <ul class="inr-right">
                        <li class="inr-right-cell">
                            <a class="links" href="<?php global $url_exreserve;
                                                    echo $url_exreserve; ?>">
                                <img class="icon"
                                    src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                                <p class="txt">高速バス予約</p>
                            </a>
                        </li>
                        <li class="inr-right-cell">
                            <a class="links" href="<?php global $url_reserve;
                                                    echo $url_reserve; ?>">
                                <img class="icon"
                                    src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                                <p class="txt">貸切バス</p>
                            </a>
                        </li>
                        <li class="inr-right-cell">
                            <a class="links" href="<?php global $url_greentours;
                                                    echo $url_greentours; ?>" target="_blank">
                                <img class="icon"
                                    src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                                <p class="txt">金沢発日帰りツアー</p>
                            </a>
                        </li>
                        <li class="inr-right-cell">
                            <a class="links" href="<?php global $url_contact;
                                                    echo $url_contact; ?>">
                                <img class="icon"
                                    src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_nav-question.svg">
                                <p class="txt">お問い合わせ</p>
                            </a>
                        </li>
                        <li id="pc-lang" class="c--lang_form" name="sort_form">
                            <a class="sort_form--top">
                                <img class="c--lang_form-ico1"
                                    src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_earth.svg" alt="">
                                <p class="select">Language</p>
                                <img class="c--lang_form-arrow"
                                    src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_nav.svg" alt="">
                            </a>
                            <ul class="sort_form--bottom">
                                <li>
                                    <a value="#" data-stt-changelang="ja" data-stt-ignore>Japanese</a>
                                </li>
                                <li>
                                    <a value="#" data-stt-changelang="en" data-stt-ignore>English</a>
                                </li>
                                <li>
                                    <a value="#" data-stt-changelang="zh-TW" data-stt-ignore>繁体字</a>
                                </li>
                                <li>
                                    <a value="#" data-stt-changelang="zh-CN" data-stt-ignore>簡体字</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul class="area-nav_news">
                    <?php
                    $cat_posts = get_posts(array(
                        'post_type' => 'post',
                        'category_name' => 'news',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));
                    global $post;
                    if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
                    <li class="area-nav_news-cell">
                        <a href="<?php the_permalink() ?>">
                            <p><?php
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
            </div>
            <div class="nav-fixed scroll-fade">
                <div class="inr">
                    <a href="<?php global $url_top;
                                echo $url_top; ?>" class="left">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/head-logo__fixed.svg">
                    </a>
                    <ul class="fixed-link-list">
                        <li class="fixed-link-list-cell">
                            <a id="unker-exreserve" href="<?php global $url_exreserve;
                                                            echo $url_exreserve; ?>">
                                <p>高速バス</p>
                            </a>
                            <div class="sub-inr">
                                <div class="sub-inr-flame">
                                    <div class="sub-nav-logo">GREEN LINER</div>
                                    <ul class="sub-nav-list">
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_platform;
                                                                                echo $url_platform; ?>">乗り降りば</a></li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_car_detail;
                                                                                echo $url_car_detail; ?>">車内紹介</a></li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_fare;
                                                                                echo $url_fare; ?>">運賃案内</a></li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_member;
                                                                                echo $url_member; ?>">会員</a></li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_cart;
                                                                                echo $url_cart; ?>">カート</a>
                                        </li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_parking;
                                                                                echo $url_parking; ?>">駐車場</a></li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_faq;
                                                                                echo $url_faq; ?>">Q&A</a></li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li class="fixed-link-list-cell">
                            <a href="<?php global $url_reserve;
                                        echo $url_reserve; ?>">
                                <p>貸切バス</p>
                            </a>
                            <div class="sub-inr">
                                <div class="sub-inr-flame">
                                    <div class="sub-nav-logo">COMPANY</div>
                                    <ul class="sub-nav-list">
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_introduce;
                                                                                echo $url_introduce; ?>">車両紹介</a></li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_spot;
                                                                                echo $url_spot; ?>">おすすめスポット</a></li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_estimate;
                                                                                echo $url_estimate; ?>">お見積もりフォーム</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="fixed-link-list-cell">
                            <a href="<?php global $url_concept;
                                        echo $url_concept; ?>">
                                <p>丸一観光について</p>
                            </a>
                            <div class="sub-inr">
                                <div class="sub-inr-flame">
                                    <div class="sub-nav-logo">COMPANY</div>
                                    <ul class="sub-nav-list">
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_concept;
                                                                                echo $url_concept; ?>">わたしたちの想い</a>
                                        </li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_safety;
                                                                                echo $url_safety; ?>">安全性について</a></li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_compliance;
                                                                                echo $url_compliance; ?>">標識約款他</a>
                                        </li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_information;
                                                                                echo $url_information; ?>">会社案内</a>
                                        </li>
                                        <li class="sub-nav-list-cell"><a href="<?php global $url_recruit;
                                                                                echo $url_recruit; ?>">採用情報</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="fixed-link-list-cell">
                            <a href="<?php global $url_faq;
                                        echo $url_faq; ?>">
                                <p>よくある質問</p>
                            </a>
                        </li>
                        <li class="fixed-link-list-cell">
                            <a href="<?php global $url_news;
                                        echo $url_news; ?>">
                                <p>お知らせ</p>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
        <section id="nav_sp" class="c--nav_sp">
            <div class="sp-nav_top">
                <a href="<?php global $url_top;
                            echo $url_top; ?>" class="nav_top-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/head-logo__unfixed.svg">
                </a>
                <div class="nav_top-right">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
            </div>
            <div class="sp-nav_news">
                <ul class="area-nav_news">
                    <?php
                    $cat_posts = get_posts(array(
                        'post_type' => 'post',
                        'category_name' => 'news',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));
                    global $post;
                    if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
                    <li class="area-nav_news-cell">
                        <a href="<?php the_permalink() ?>">
                            <p><?php
                                        if (mb_strlen($post->post_title, 'UTF-8') > 20) {
                                            $title = mb_substr($post->post_title, 0, 20, 'UTF-8');
                                            echo $title . '…';
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
            </div>
            <div class="sp-nav_bottom">
                <ul class="nav_bottom-list">
                    <li class="nav_bottom-btn addinr">
                        <div class="img-cover">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/sp-nav_ico-bus.svg">
                        </div>
                        <p>高速バス</p>
                        <p class="accordion_icon">
                            <span></span>
                            <span></span>
                        </p>
                    </li>
                    <li class="nav_bottom-inr">
                        <ul>
                            <li>
                                <a href="<?php global $url_exreserve;
                                            echo $url_exreserve; ?>">高速バスのご予約</a>
                            </li>
                            <li>
                                <a href="<?php global $url_route;
                                            echo $url_route; ?>">路線一覧</a>
                            </li>
                            <li>
                                <a href="<?php global $url_platform;
                                            echo $url_platform; ?>">乗り降りば</a>
                            </li>
                            <li>
                                <a href="<?php global $url_car_detail;
                                            echo $url_car_detail; ?>">車内紹介</a>
                            </li>
                            <li>
                                <a href="<?php global $url_fare;
                                            echo $url_fare; ?>">運賃案内</a>
                            </li>
                            <li>
                                <a href="<?php global $url_member;
                                            echo $url_member; ?>">グリーンライナー会員</a>
                            </li>
                            <li>
                                <a href="<?php global $url_cart;
                                            echo $url_cart; ?>">カート</a>
                            </li>
                            <li>
                                <a href="<?php global $url_others;
                                            echo $url_others; ?>">その他サービス</a>
                            </li>
                            <li>
                                <a href="<?php global $url_parking;
                                            echo $url_parking; ?>">駐車場をご利用の方</a>
                            </li>
                            <li>
                                <a href="<?php global $url_faq;
                                            echo $url_faq; ?>">よくある質問</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav_bottom-btn addinr">
                        <div class="img-cover">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/sp-nav_ico-reserved.svg">
                        </div>
                        <p>貸切バス</p>
                        <p class="accordion_icon">
                            <span></span>
                            <span></span>
                        </p>
                    </li>
                    <li class="nav_bottom-inr">
                        <ul>
                            <li>
                                <a href="<?php global $url_reserve;
                                            echo $url_reserve; ?>">貸切バスについて</a>
                            </li>
                            <li>
                                <a href="<?php global $url_introduce;
                                            echo $url_introduce; ?>">車両紹介</a>
                            </li>
                            <li>
                                <a href="<?php global $url_spot;
                                            echo $url_spot; ?>">おすすめスポット</a>
                            </li>
                            <li>
                                <a href="<?php global $url_estimate;
                                            echo $url_estimate; ?>">お見積もりフォーム</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav_bottom-btn">
                        <a href="<?php global $url_faq;
                                    echo $url_faq; ?>"></a>
                        <div class="img-cover">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/sp-nav_ico-question.svg">
                        </div>
                        <p>Q&A</p>
                    </li>
                    <li class="nav_bottom-btn">
                        <a target="_blank" href="<?php global $url_greentours;
                                                    echo $url_greentours; ?>"></a>
                        <div class="img-cover">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/sp-nav_ico-tours.svg">
                        </div>
                        <p>金沢発日帰りツアー</p>
                    </li>
                    <li class="nav_bottom-btn addinr">
                        <div class="img-cover">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/sp-nav_ico-about.svg">
                        </div>
                        <p>丸一観光について</p>
                        <p class="accordion_icon">
                            <span></span>
                            <span></span>
                        </p>
                    </li>
                    <li class="nav_bottom-inr">
                        <ul>
                            <li>
                                <a href="<?php global $url_concept;
                                            echo $url_concept; ?>">わたしたちの想い</a>
                            </li>
                            <li>
                                <a href="<?php global $url_safety;
                                            echo $url_safety; ?>">安全性について</a>
                            </li>
                            <li>
                                <a href="<?php global $url_compliance;
                                            echo $url_compliance; ?>">標識約款他</a>
                            </li>
                            <li>
                                <a href="<?php global $url_information;
                                            echo $url_information; ?>">会社案内</a>
                            </li>
                            <li>
                                <a href="<?php global $url_recruit;
                                            echo $url_recruit; ?>">採用情報</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="nav_bottom-inr2">
                    <a href="<?php global $url_news;
                                echo $url_news; ?>">お知らせ</a>
                    <a href="<?php global $url_contact;
                                echo $url_contact; ?>">お問い合わせ</a>
                </div>
                <div class="nav_bottom-lang">
                    <div id="sp-lang" class="c--lang_form" name="sort_form">
                        <a class="sort_form--top">
                            <img class="c--lang_form-ico1"
                                src="<?php echo get_template_directory_uri(); ?>/img/cmn/sp-nav_ico-lang.svg" alt="">
                            <p class="select">Language</p>
                            <img class="c--lang_form-arrow"
                                src="<?php echo get_template_directory_uri(); ?>/img/cmn/sp-nav_ico-arrow.svg" alt="">
                        </a>
                        <ul class="sort_form--bottom">
                            <li>
                                <a value="#" data-stt-changelang="ja" data-stt-ignore>Japanese</a>
                            </li>
                            <li>
                                <a value="#" data-stt-changelang="en" data-stt-ignore>English</a>
                            </li>
                            <li>
                                <a value="#" data-stt-changelang="zh-TW" data-stt-ignore>繁体字</a>
                            </li>
                            <li>
                                <a value="#" data-stt-changelang="zh-CN" data-stt-ignore>簡体字</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="sp-nav_bg"></div>
        </section>
    </nav>
    <?php
    $cat_posts = get_posts(array(
        'post_type' => 'post',
        'category_name' => 'emergency',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    ));
    ?>
    <?php if ($cat_posts) : ?>
    <div class="c--sec_emergency">

        <a class="btn_emergency">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_ emergency.svg" alt="">
        </a>

        <div class="area-content_emergency">
            <div class="inr">
                <p class="name">緊急連絡</p>
                <ul class="content-list">

                    <?php

                        global $post;
                        if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>

                    <li class="content-list-cell">
                        <a href="<?php the_permalink() ?>">
                            <p><span>●</span>
                                <?php if (wp_is_mobile()) :
                                                $txtcount = '15';
                                                $title = mb_substr($post->post_title, 0, $txtcount, 'UTF-8');
                                            else :
                                                $txtcount = '55';
                                                $title = mb_substr($post->post_title, 0, $txtcount, 'UTF-8');
                                            endif; ?>

                                <?php
                                            if (mb_strlen($post->post_title, 'UTF-8') > $txtcount) {
                                                echo $title . '…';
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
            </div>
        </div>
    </div>
    <?php endif; ?>
    <main>