<?php
/*
Template Name: recruit
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>採用情報</h1>
</div>
<section id="sec_slide">
    <ul class="mainv--list">
        <li class="mainv--img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-slide01.jpg">
        </li>
        <li class="mainv--img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-slide02.jpg">
        </li>
        <li class="mainv--img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-slide03.jpg">
        </li>
        <li class="mainv--img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-slide04.jpg">
        </li>
        <li class="mainv--img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-slide05.jpg">
        </li>
    </ul>
    <h2 class="title" data-stt-ignore>MARUICHI KANKO MARUII PERSON</h2>
    <p class="detail">すきなことを仕事にしている人って、素敵だと思います。<br>
        乗り物がすき。運転がすき。旅がすき。この街がすき。<br>
        だからわたしたちはこの仕事をしている。<br>
        仕事をしている時間は、すきなことをしている“いい時間”。<br>
        すなわち、“まるいい時間”なのです。<br>
        たいへんなこと、くやしいこと、失敗することも、当然ある。<br>
        でも、この仕事がすきだから乗り越えようと努力する。<br>
        丸一観光は、すきなことを仕事にするあなたを応援したい。<br>
        まるいい時間をともに過ごす仲間を募集しています。</p>
</section>
<?php
//エントリー
$url_entry = "#sec_entry";
//よくある質問
$url_r_faq = "#sec_r_faq";
?>
<?php require TEMPLATEPATH . "/module/recruit-menu.php"; ?>
<section id="sec_interview-list">
    <h2 class="title"><img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-q_ico.svg">
        <p>
            社員さんたちの「まるいい時間」<br class=" sp">ってなんですか？</p>
    </h2>
    <div class="inr">
        <a href="<?php global $url_interview;
                    echo $url_interview; ?>#int01" class="cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-int-link01.jpg">
            <p class="job">2011年入社 / バスドライバー</p>
            <p class="name">西村 圭介</p>
        </a>
        <a href="<?php global $url_interview;
                    echo $url_interview; ?>#int02" class="cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-int-link02.jpg">
            <p class="job">2013年入社 / バスドライバー</p>
            <p class="name">池田 傑</p>
        </a>
        <a href="<?php global $url_interview;
                    echo $url_interview; ?>#int03" class="cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-int-link03.jpg">
            <p class="job">2018年入社 / 車両管理補助</p>
            <p class="name">西村 裕加里</p>
        </a>
        <a href="<?php global $url_interview;
                    echo $url_interview; ?>#int04" class="cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-int-link04.jpg">
            <p class="job">2019年入社 / 営業</p>
            <p class="name">西花 健</p>
        </a>
    </div>
    <h2 class="title"><img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-q_ico.svg">
        <p>社長の考える「まるいいビジョン」を教えてください。</p>
    </h2>
    <div class="inr">
        <a href="<?php global $url_interview;
                    echo $url_interview; ?>#int05" class="cell solo">
            <img class="switch" src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-int-link05_pc.jpg">
            <p class="job">株式会社 丸一観光　代表取締役社長</p>
            <p class="name">木下 徳泰</p>
        </a>
    </div>
</section>
<section id="sec_system-menu">
    <h2 class="title" data-stt-ignore>MARUII COMPANY SYSTEM</h2>
    <p class="detail">社員全員が、ずっと安心して働けるように。</p>
    <div class="inr">
        <a href="<?php global $url_system;
                    echo $url_system; ?>" class="cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-sys-link01.jpg">
            <p>福利厚生
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_g-min.svg" alt="">
            </p>
        </a>
        <a href="<?php global $url_training;
                    echo $url_training; ?>" class="cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-sys-link02.jpg">
            <p>研修教育制度
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_g-min.svg" alt="">
            </p>
        </a>
    </div>
</section>
<section id="sec_application">
    <h2 class="title">募集要項</h2>

    <div class="job-list">
        <div class="c--heading2">
            <h3>キャリア採用</h3>
        </div>
        <?php if (have_rows('app_join')) : ?>
        <?php while (have_rows('app_join')) : the_row(); ?>
        <div class="main-contents">
            <a class="open-btn">
                <p class="place"><?php the_sub_field('jigyosyo'); ?></p>
                <p class="job-name"><?php the_sub_field('jobs'); ?></p>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <div class="inr">
                    <?php if (get_sub_field('jobs-2')) : ?>
                    <dl class="sign-cell">
                        <dt>募集職種</dt>
                        <dd><?php the_sub_field('jobs-2'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('model')) : ?>
                    <dl class="sign-cell">
                        <dt>雇用形態</dt>
                        <dd><?php the_sub_field('model'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('detail')) : ?>
                    <dl class="sign-cell">
                        <dt>仕事内容</dt>
                        <dd><?php the_sub_field('detail'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('old')) : ?>
                    <dl class="sign-cell">
                        <dt>年齢</dt>
                        <dd><?php the_sub_field('old'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('gakureki')) : ?>
                    <dl class="sign-cell">
                        <dt>学歴</dt>
                        <dd><?php the_sub_field('gakureki'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('licence')) : ?>
                    <dl class="sign-cell">
                        <dt>必要な免許</dt>
                        <dd><?php the_sub_field('licence'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('experience')) : ?>
                    <dl class="sign-cell">
                        <dt>必要な経験等</dt>
                        <dd><?php the_sub_field('experience'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('place')) : ?>
                    <dl class="sign-cell">
                        <dt>勤務地</dt>
                        <dd><?php the_sub_field('place'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('salary')) : ?>
                    <dl class="sign-cell">
                        <dt>給与</dt>
                        <dd><?php the_sub_field('salary'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('bonus')) : ?>
                    <dl class="sign-cell">
                        <dt>賞与</dt>
                        <dd><?php the_sub_field('bonus'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('worktime')) : ?>
                    <dl class="sign-cell">
                        <dt>勤務時間</dt>
                        <dd><?php the_sub_field('worktime'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('holiday')) : ?>
                    <dl class="sign-cell">
                        <dt>休日</dt>
                        <dd><?php the_sub_field('holiday'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('holiday-year')) : ?>
                    <dl class="sign-cell">
                        <dt>年間休日数</dt>
                        <dd><?php the_sub_field('holiday-year'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('taiguu')) : ?>
                    <dl class="sign-cell">
                        <dt>待遇</dt>
                        <dd><?php the_sub_field('taiguu'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('tokki')) : ?>
                    <dl class="sign-cell">
                        <dt>特記事項</dt>
                        <dd><?php the_sub_field('tokki'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_sub_field('process')) : ?>
                    <dl class="sign-cell">
                        <dt>応募手続き</dt>
                        <dd><?php the_sub_field('process'); ?></dd>
                    </dl>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="job-list">
        <div class="c--heading2">
            <h3>新卒採用</h3>
        </div>

        <div class="main-contents" id="newgrad">
            <div class="open-contents">
                <div class="inr">
                    <?php if (get_field('new_jobs')) : ?>
                    <dl class="sign-cell">
                        <dt>募集職種</dt>
                        <dd><?php the_field('new_jobs'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('new_koyou')) : ?>
                    <dl class="sign-cell">
                        <dt>雇用形態</dt>
                        <dd><?php the_field('new_koyou'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('new_detail')) : ?>
                    <dl class="sign-cell">
                        <dt>仕事内容</dt>
                        <dd><?php the_field('new_detail'); ?></dd>
                    </dl>
                    <?php endif; ?>

                    <?php if (get_field('new_conditions')) : ?>
                    <dl class="sign-cell">
                        <dt>応募条件</dt>
                        <dd><?php the_field('new_conditions'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('new_num')) : ?>
                    <dl class="sign-cell">
                        <dt>募集人数</dt>
                        <dd><?php the_field('new_num'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('new_place')) : ?>
                    <dl class="sign-cell">
                        <dt>勤務地</dt>
                        <dd><?php the_field('new_place'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('new_salary')) : ?>
                    <dl class="sign-cell">
                        <dt>給与</dt>
                        <dd><?php the_field('new_salary'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('new_worktime')) : ?>
                    <dl class="sign-cell">
                        <dt>勤務時間</dt>
                        <dd><?php the_field('new_worktime'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('holiday')) : ?>
                    <dl class="sign-cell">
                        <dt>休日休暇</dt>
                        <dd><?php the_field('holiday'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('new_holiday-year')) : ?>
                    <dl class="sign-cell">
                        <dt>年間休日数</dt>
                        <dd><?php the_field('new_holiday-year'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('hoken')) : ?>
                    <dl class="sign-cell">
                        <dt>各種保険</dt>
                        <dd><?php the_field('hoken'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('taiguu')) : ?>
                    <dl class="sign-cell">
                        <dt>待遇</dt>
                        <dd><?php the_field('taiguu'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('new_kensyu')) : ?>
                    <dl class="sign-cell">
                        <dt>教育研修</dt>
                        <dd><?php the_field('new_kensyu'); ?></dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field('new_kensyu-detail')) : ?>
                    <dl class="sign-cell">
                        <dt>教育研修内容</dt>
                        <dd><?php the_field('new_kensyu-detail'); ?></dd>
                    </dl>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sec_entry">
    <h2 class="entry-title">ENTRY</h2>
    <p class="entry-option">丸一観光への就職ご応募に関しての<br class="sp">ご質問やご相談、<br class="sp">エントリー方法のご確認は、<br>
        ご検討される各営業所まで、<br class="sp">先ずはお電話にてご連絡ください。
    </p>
    <div class="inr">
        <div class="inr-content">
            <h3 class="title">七尾営業所(本社)へのご連絡</h3>
            <dl class="sign-cell">
                <dt>電話番号</dt>
                <dd>0767-53-6161（代表）</dd>
            </dl>
            <dl class="sign-cell">
                <dt>FAX番号</dt>
                <dd>0767-52-7456</dd>
            </dl>
            <dl class="sign-cell">
                <dt>所在地</dt>
                <dd>〒926-0014　石川県七尾市矢田町2-1
                    <a class="gicon" href="<?php global $url_nanao;
                                            echo $url_nanao; ?>">GoogleMap
                    </a>
                </dd>
            </dl>
            <dl class="sign-cell">
                <dt>営業時間</dt>
                <dd>月〜金曜：9:00~18:00／土曜9:00~15:00</dd>
            </dl>
            <dl class="sign-cell">
                <dt>休業日</dt>
                <dd>日曜／祝日／お盆／年末年始</dd>
            </dl>
        </div>
        <div class="inr-content">
            <h3 class="title">金沢営業所へのご連絡</h3>
            <dl class="sign-cell">
                <dt>電話番号</dt>
                <dd>076-266-1401（代表）</dd>
            </dl>
            <dl class="sign-cell">
                <dt>FAX番号</dt>
                <dd>076-266-0413</dd>
            </dl>
            <dl class="sign-cell">
                <dt>所在地</dt>
                <dd>〒920-0332　石川県金沢市無量寺町ホ120
                    <a class="gicon" href="<?php global $url_kanazawa;
                                            echo $url_kanazawa; ?>">GoogleMap
                    </a>
                </dd>
            </dl>
            <dl class="sign-cell">
                <dt>営業時間</dt>
                <dd>月〜金曜：9:00~18:00／土曜9:00~15:00</dd>
            </dl>
            <dl class="sign-cell">
                <dt>休業日</dt>
                <dd>日曜／祝日／お盆／年末年始</dd>
            </dl>
        </div>
    </div>
</section>
<section id="sec_r_faq">
    <div class="inr">
        <h3 class="title">
            採用に関するよくある質問
        </h3>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        求人に応募したい場合はどのようにしたらよいでしょうか?
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>まずは、職業安定所を通して履歴書をご送付ください。<br>
                        その後、電話連絡にて面接の日程を打ち合わせさせていただきます。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        応募前に質問がある場合はどうすればよいでしょうか?
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>ご希望の弊社営業所へ直接お電話にてお問い合わせください。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        大型二種免許は応募時に必要でしょうか?
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>大型二種免許取得支援制度があります。<br>
                        詳細に関しましては、面接時に詳しくお伝えいたします。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        支度金制度とはどのような制度でしょうか?
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>弊社においての支度金制度とは、大型二種免許をお持ちで、入社から一定の期間を経過するにあたり支給をする制度です。<br>
                        年齢により支給額が異なります。<br>
                        例）20〜40歳代まで：1年の間に最高30万円まで支給</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        大型二種免許を持っているのですが、未経験者です。応募は可能でしょうか?
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>入社後、運行管理者や先輩ドライバーによる教習を受えられますので、安心してご応募ください。</dd>
                </dl>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>