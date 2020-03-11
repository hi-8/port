<?php
/*
Template Name: index
*/
?>
<?php get_header(); ?>
<div class="slider__wrapper">
    <?php if (is_mobile()) : ?>
    <div class="top__slider top__slider--sp">
        <div class="slider__item item01"></div>
        <a class="slider__item item02" href="/ww" target="_blank">
            <img class="slider__item--txt" src="<?php echo get_template_directory_uri(); ?>/img/top/slider_txt--b.svg"
                alt="">
        </a>
        <a class="slider__item item03" href="https://delicious1945.jp/" target="_blank">
            <img class="slider__item--txt" src="<?php echo get_template_directory_uri(); ?>/img/top/slider_txt--w.svg"
                alt="">
        </a>
        <a class="slider__item item04" href="https://www.fullofbeans.jp/" target="_blank">
            <img class="slider__item--txt" src="<?php echo get_template_directory_uri(); ?>/img/top/slider_txt--w.svg"
                alt="">
        </a>
    </div>
    <?php else : ?>
    <div class="top__slider top__slider--pc">
        <div class="slider__item item01"></div>
        <a class="slider__item item02" href="/ww" target="_blank">
            <img class="slider__item--txt" src="<?php echo get_template_directory_uri(); ?>/img/top/slider_txt--b.svg"
                alt="">
        </a>
        <a class="slider__item item03" href="https://delicious1945.jp/" target="_blank">
            <img class="slider__item--txt" src="<?php echo get_template_directory_uri(); ?>/img/top/slider_txt--w.svg"
                alt="">
        </a>
        <a class="slider__item item04" href="https://www.fullofbeans.jp/" target="_blank">
            <img class="slider__item--txt" src="<?php echo get_template_directory_uri(); ?>/img/top/slider_txt--w.svg"
                alt="">
        </a>
    </div>
    <?php endif; ?>
    <img class="slider__scroll" src="<?php echo get_template_directory_uri(); ?>/img/top/slide_scroll.svg" alt="">
</div>
<section id="sec_catch">
    <div class="catch__inr">
        <img class="catch__img switch" src="<?php echo get_template_directory_uri(); ?>/img/top/catch_pc.svg" alt="">
        <p class="catch__text">飲食ビジネスはクリエイティブな仕事です。<br>
            わたしたちの考える飲食店は「同じもの」をご提供しません。<br>
            同一のものを量産する工場的なお店ではなく、<br>
            お客様ひとりひとりに「違うもの」をご提供するお店でありたい。<br>
            たとえ同じメニューを作るとしても、同じコースをサーブするとしても、<br>
            人が人のためにおこなうものは、違いがあって自然ですし、違いがあることに価値がある。<br>
            違いをつくりだすのは、人のクリエイティビティです。<br>
            お客様ひとりひとりの楽しい時間をクリエイトする。それがわたしたちの仕事です。<br>
            それがわたしたちのモチベーションです。</p>
    </div>
</section>
<section id="sec_project">
    <div class="project__inr">
        <h2 class="c-top__heading">SAVAGE PROJECT</h2>
        <div class="project__cell" id="top-ww">
            <img class="switch project__cell__img"
                src="<?php echo get_template_directory_uri(); ?>/img/top/project--ww_pc.jpg" alt="">
            <a class="project__cell__detail" href="/ww">
                <div class="project__cell__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/project__icon--ww.svg" alt="">
                </div>
                <div class="project__cell__text">
                    <p class="text__title">WW（ダブリューダブリュー）</p>
                    <p class="text__detail">世界のビールと各国の料理のペアリングを愉しんでいただく。<br>
                        WW（ダブリューダブリュー）のコンセプトは“ビアペアリングレストラン”です。ビール好きな人はもちろん、ふだんはあまりビールを口にしない人にも、喜んでいただける食事をご用意しております。</p>
                </div>
                <div class="c-arrow-wrap">
                    <div class="c-arrow"></div>
                </div>
            </a>
        </div>
        <div class="project__cell" id="top-1945">
            <img class="switch project__cell__img"
                src="<?php echo get_template_directory_uri(); ?>/img/top/project--1945_pc.jpg" alt="">
            <a class="project__cell__detail" href="https://delicious1945.jp/" target="_blank">
                <div class="project__cell__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/project__icon--1945.svg" alt="">
                </div>
                <div class="project__cell__text">
                    <p class="text__title">BRASSERIE 1945</p>
                    <p class="text__detail">フルオブビーンズの姉妹店として石川県小松市にオープンしたダイニング＆バー。<br>
                        1945年に建てられた町家をリノベーションして、世界各国のヴィンテージインテリアを散りばめた、こだわりの空間です。旬の野菜やお魚、お肉を楽しんでいただけます。</p>
                </div>
                <div class="c-arrow-wrap">
                    <div class="c-arrow"></div>
                </div>
            </a>
        </div>
        <div class="project__cell" id="top-fullof">
            <img class="switch project__cell__img"
                src="<?php echo get_template_directory_uri(); ?>/img/top/project--fullof_pc.jpg" alt="">
            <a class="project__cell__detail" href="https://www.fullofbeans.jp/" target="_blank">
                <div class="project__cell__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/project__icon--fullof.svg" alt="">
                </div>
                <div class="project__cell__text">
                    <p class="text__title">FULL OF BEANS</p>
                    <p class="text__detail">築100年を超える金沢の町家を改装したカフェ＆ダイニング。<br>
                        サヴェージクリエイティブにとって１店舗目の経営となる飲食店です。坪庭・縁側があり、畳敷きの部屋に欧州のアンティークインテリアを配した独特の空間をつくりました。</p>
                </div>
                <div class="c-arrow-wrap">
                    <div class="c-arrow"></div>
                </div>
            </a>
        </div>
    </div>

</section>
<section id="sec_pickup">
    <div class="pickup__inr">
        <h2 class="c-top__heading">PICK UP</h2>
        <ul class="c-news__list">
            <?php query_posts('posts_per_page=6&category_name=pickup');
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="c-news__list__cell">
                <a href="<?php the_permalink(); ?>">
                    <div class="c-news__list__cell__image" <?php if (has_post_thumbnail()) : ?>
                        style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>;)"
                        <?php endif; ?>>
                        <?php if (in_category('1945')) : ?>
                        <img class="c-news__list__cell__image--logo"
                            src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_1945_white.svg" alt="">
                        <?php elseif (in_category('fullof')) : ?>
                        <img class="c-news__list__cell__image--logo"
                            src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_fullof_white.svg" alt="">
                        <?php elseif (in_category('ww')) : ?>
                        <img class="c-news__list__cell__image--logo"
                            src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_ww_white.svg" alt="">
                        <?php else : ?>
                        <?php endif; ?>

                    </div>
                    <div class="c-news__list__cell__text">
                        <div class="c-arrow-wrap">
                            <div class="c-arrow"></div>
                        </div>
                        <p class="c-news__list__cell__text--pos">
                            <span><?php
                                            $categories = get_the_category();
                                            if ($categories) {
                                                echo $categories[0]->name;
                                            }
                                            ?> /</span>
                            <time class="c-news__list__cell__text--date"
                                datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                        <p class="c-news__list__cell__text--title">
                            <?php
                                    if (mb_strlen($post->post_title) > 32) {
                                        $title = mb_substr($post->post_title, 0, 32);
                                        echo $title . '...';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?></p>
                    </div>
                </a>
            </li>
            <?php endwhile; ?>
            <?php else : ?>
            <p class="c-nocontent">まだ記事はありません。</p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </ul>
    </div>
</section>
<section id="sec_news">
    <div class="news__inr">
        <h2 class="c-top__heading">NEWS</h2>
        <ul class="c-news__list">
            <?php query_posts('posts_per_page=6');
            if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li class="c-news__list__cell">
                <a href="<?php the_permalink(); ?>">
                    <div class="c-news__list__cell__image" <?php if (has_post_thumbnail()) : ?>
                        style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>;)"
                        <?php endif; ?>>
                        <?php if (in_category('1945')) : ?>
                        <img class="c-news__list__cell__image--logo"
                            src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_1945_white.svg" alt="">
                        <?php elseif (in_category('fullof')) : ?>
                        <img class="c-news__list__cell__image--logo"
                            src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_fullof_white.svg" alt="">
                        <?php elseif (in_category('ww')) : ?>
                        <img class="c-news__list__cell__image--logo"
                            src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_ww_white.svg" alt="">
                        <?php else : ?>
                        <?php endif; ?>

                    </div>
                    <div class="c-news__list__cell__text">
                        <div class="c-arrow-wrap">
                            <div class="c-arrow"></div>
                        </div>
                        <p class="c-news__list__cell__text--pos">
                            <span><?php
                                            $categories = get_the_category();
                                            if ($categories) {
                                                echo $categories[0]->name;
                                            }
                                            ?> /</span>
                            <time class="c-news__list__cell__text--date"
                                datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                        <p class="c-news__list__cell__text--title">
                            <?php
                                    if (mb_strlen($post->post_title) > 32) {
                                        $title = mb_substr($post->post_title, 0, 32);
                                        echo $title . '...';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?></p>
                    </div>
                </a>
            </li>
            <?php endwhile; ?>
            <?php else : ?>
            <p class="c-nocontent">まだ記事はありません。</p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </ul>
    </div>
</section>
<section id="sec_about">
    <div class="about_inr">
        <h2 class="c-top__heading">ABOUT</h2>
        <p class="c-top__heading--detail">サヴェージクリエイティブは食を通して、お客様の楽しい時間をクリエイトする。<br>
            そんな愛される温かい店づくりを、クリエイティブな仲間たちと作り上げています。</p>
        <div class="member-list">
            <?php if (have_rows('member_intro')) : ?>
            <?php while (have_rows('member_intro')) : the_row(); ?>
            <div class="member-list__cell">
                <div class="member-list__cell--image"
                    style="background-image: url(<?php the_sub_field('member-pic'); ?>);">
                </div>
                <div class="member-list__cell--text">
                    <p class="text-name">
                        <?php the_sub_field('member-name'); ?><span><?php the_sub_field('member-pos'); ?></span></p>
                    <p class="text-catch"><?php the_sub_field('member-copy'); ?></p>
                    <p class="text-detail"><?php the_sub_field('member-detail'); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <p>入力がありません</p>
            <?php endif; ?>

        </div>
    </div>
</section>
<section id="sec_recruit">
    <h2 class="c-top__heading">RECRUIT</h2>
    <p class="c-top__heading--detail">サヴェージクリエイティブが運営するフルオブビーンズ、1945、WWでは現在、<br>
        お客様をもてなす飲食業の楽しさを共につくりだす仲間を募集しています！<br>
        ご興味のある方は、以下の詳細を確認のうえぜひご応募ください。</p>
    <div class="sec_recruit__cell">
        <h3 class="sec_recruit__heading">中途採用</h3>
        <ul class="sec_recruit__list">
            <?php if (have_rows('regular')) : ?>
            <?php while (have_rows('regular')) : the_row(); ?>
            <li class="sec_recruit__list__cell">
                <div class="sec_recruit__list__cell--top">
                    <p class="job-name"><?php the_sub_field('job_name'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                </div>
                <div class="sec_recruit__list__cell--bottom">
                    <?php if (get_sub_field('job_cert')) : ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>応募資格</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_cert'); ?></p>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('job_area')) : ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>就業エリア</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_area'); ?></p>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('job_area')) : ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>給与</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_salary'); ?></p>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>保険</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_insurance'); ?></p>
                        </dd>
                    </dl>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>休日</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_holiday'); ?></p>
                        </dd>
                    </dl>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>休暇</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_vacation'); ?></p>
                        </dd>
                    </dl>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>応募方法</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_application'); ?></p>
                        </dd>
                    </dl>
                </div>
            </li>
            <?php endwhile; ?>
            <?php else : ?>
            <p class="nocontents">現在募集はありません。</p>
            <?php endif; ?>
        </ul>
    </div>

    <div class="sec_recruit__cell">
        <h3 class="sec_recruit__heading">新卒採用</h3>
        <ul class="sec_recruit__list">
            <?php if (have_rows('newgrad')) : ?>
            <?php while (have_rows('newgrad')) : the_row(); ?>
            <li class="sec_recruit__list__cell">
                <div class="sec_recruit__list__cell--top">
                    <p class="job-name"><?php the_sub_field('job_name'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                </div>
                <div class="sec_recruit__list__cell--bottom">
                    <?php if (get_sub_field('job_cert')) : ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>応募資格</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_cert'); ?></p>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('job_area')) : ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>就業エリア</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_area'); ?></p>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('job_area')) : ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>給与</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_salary'); ?></p>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>保険</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_insurance'); ?></p>
                        </dd>
                    </dl>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>休日</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_holiday'); ?></p>
                        </dd>
                    </dl>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>休暇</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_vacation'); ?></p>
                        </dd>
                    </dl>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>応募方法</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_application'); ?></p>
                        </dd>
                    </dl>
                </div>
            </li>
            <?php endwhile; ?>
            <?php else : ?>
            <p class="nocontents">現在募集はありません。</p>
            <?php endif; ?>
        </ul>
    </div>

    <div class="sec_recruit__cell">
        <h3 class="sec_recruit__heading">パート／アルバイト</h3>
        <ul class="sec_recruit__list">
            <?php if (have_rows('parttime')) : ?>
            <?php while (have_rows('parttime')) : the_row(); ?>
            <li class="sec_recruit__list__cell">
                <div class="sec_recruit__list__cell--top">
                    <p class="job-name"><?php the_sub_field('job_name'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                </div>
                <div class="sec_recruit__list__cell--bottom">
                    <?php if (get_sub_field('job_cert')) : ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>応募資格</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_cert'); ?></p>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('job_area')) : ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>就業エリア</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_area'); ?></p>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('job_area')) : ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>給与</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_salary'); ?></p>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>勤務時間</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_worktime'); ?></p>
                        </dd>
                    </dl>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>待遇</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_treatment'); ?></p>
                        </dd>
                    </dl>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>勤務スタイル</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_style'); ?></p>
                        </dd>
                    </dl>
                    <dl class="bottom__cell">
                        <dt class="bottom__cell--name">
                            <p>応募方法</p>
                        </dt>
                        <dd class="bottom__cell--detail">
                            <p><?php the_sub_field('job_application'); ?></p>
                        </dd>
                    </dl>
                </div>
            </li>
            <?php endwhile; ?>
            <?php else : ?>
            <p class="nocontents">現在募集はありません。</p>
            <?php endif; ?>
        </ul>
    </div>
    <ul class="store-place__list">
        <li class="store-place__list__cell">
            <img class="store-place__list__cell--icon"
                src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_ww.svg" alt="">
            <div class="store-place__list__cell--text">
                <p class="store-place__list__cell--name">WW（ダブリューダブリュー）</p>
                <p class="store-place__list__cell--detail">石川県金沢市片町1-3-21<br>
                    片町プレーゴ内<br>
                    tel＆fax 076-208-7004</p>
            </div>

        </li>
        <li class="store-place__list__cell">
            <img class="store-place__list__cell--icon"
                src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_1945.svg" alt="">
            <div class="store-place__list__cell--text">
                <p class="store-place__list__cell--name">ブラッスリー1945</p>
                <p class="store-place__list__cell--detail">石川県小松市土居原町386-3<br>
                    tel＆fax 0761-24-1945</p>
            </div>

        </li>
        <li class="store-place__list__cell">
            <img class="store-place__list__cell--icon"
                src="<?php echo get_template_directory_uri(); ?>/img/top/recruit_fullof.svg" alt="">
            <div class="store-place__list__cell--text">
                <p class="store-place__list__cell--name">フルオブビーンズ</p>
                <p class="store-place__list__cell--detail">石川県金沢市里見町41-1<br>
                    tel＆fax 076-222-3315</p>
            </div>

        </li>
    </ul>
    <a class="store-application" href="mailto:info@savagecreative.jp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_mail.svg" alt="">
        <p>メールで応募</p>
    </a>
</section>
<?php get_footer();