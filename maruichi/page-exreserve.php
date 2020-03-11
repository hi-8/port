<?php get_header(); ?>
<?php
/*
Template Name: exreserve
*/
?>
<div class="c--heading1">
    <h1>高速バス</h1>
</div>
<section id="sec_greenliner">
    <div class="inr">
        <div class="inr-left">
            <img class="inr-left_logo"
                src="<?php echo get_template_directory_uri(); ?>/img/exreserve/index_greenliner_img01.svg" alt="">
            <p class="inr-left_section">石川・富山 ↔︎ 東京・東京ディズニーリゾート</p>
            <div class="inr-left_img">
                <img class="img-left switch"
                    src="<?php echo get_template_directory_uri(); ?>/img/top/greenliner_img02_pc.png" alt="">
                <img class="img-right"
                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/index_greenliner_img02.svg" alt="">
            </div>
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
<section id="sec_route-list">
    <h2 class="title">ROUTE LIST</h2>
    <p class="title-sub">路線一覧</p>
    <div class="route-list">
        <a class="route-list-cell" href="<?php global $url_route01;
                                            echo $url_route01; ?>">
            <h3 class="name">
                <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/index_route-list_ico.svg" alt="">
                金沢経由</h3>
            <div class="inr">
                <p>七尾・和倉・羽咋・宇野気・津幡・金沢・高岡砺波スマートIC<br>↔︎<br>新宿・東京ディズニーランド</p>
            </div>
        </a>
        <a class="route-list-cell" href="<?php global $url_route03;
                                            echo $url_route03; ?>">
            <h3 class="name">
                <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/index_route-list_ico.svg" alt="">
                富山経由</h3>
            <div class="inr">
                <p>3/31まで<br>七尾・和倉・氷見・高岡・小杉・富山<br>↔︎<br>東京・東京ディズニーシー</p>
                <p style="margin-top:20px;">4/1以降<br>七尾・金沢・高岡・富山<br>↔︎<br>東京・東京ディズニーシー</p>
            </div>
        </a>
    </div>
</section>
<section id="sec_guide">
    <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/img/exreserve/index_guide.jpg" alt="">
    <div class="form-tell">
        <img class="ico" src="<?php echo get_template_directory_uri(); ?>/img/reserve/form-ico.svg" alt="">
        <p class="desc">お電話からもお問い合わせいただけます。<br class=" sp">お気軽にご相談ください。</p>
        <div class="form-office">
            <div class="inr">
                <div class="kanazawa">
                    <div class="tell-flame">
                        <div class="tell">
                            <dl class="num">
                                <dt>Tel.</dt>
                                <dd>
                                    <a href="tel:0767-52-0101">0767-52-0101</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hours">
                <p>[営業時間] <br class="sp">月曜〜金曜 9~18時土曜9~15時／日曜・祝日 休</p>
            </div>
        </div>
    </div>
    <div class="inr">
        <h2 class="title">ご利用案内</h2>
        <ul class="link-list">
            <li class="link-list_cell">
                <a href="<?php global $url_about_reserve;
                            echo $url_about_reserve; ?>">ご予約方法について</a>
            </li>
            <li class="link-list_cell">
                <a href="<?php global $url_about_payment;
                            echo $url_about_payment; ?>">お支払方法について</a>
            </li>
            <li class="link-list_cell">
                <a href="<?php global $url_about_cancel;
                            echo $url_about_cancel; ?>">変更・キャンセルについて</a>
            </li>
            <li class="link-list_cell">
                <a href="<?php global $url_about_refound;
                            echo $url_about_refound; ?>">ご返金方法について</a>
            </li>
            <li class="link-list_cell">
                <a href="<?php global $url_about_boarding;
                            echo $url_about_boarding; ?>">ご乗車にあたって</a>
            </li>
        </ul>
        <a href="<?php global $url_faq;
                    echo $url_faq; ?>" class="btn-radi">
            <p class="main-txt">よくあるQ&A</p>
            <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_w-min.svg">
        </a>
    </div>
</section>
<?php get_footer(); ?>