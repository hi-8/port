<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>
<aside>
    <ul id="aside_nav" class="aside_nav__list">
        <li class="aside_nav__cell">
            <a href="#sec_mainv"></a>
        </li>
        <li class="aside_nav__cell">
            <a href="#sec_philosophy"></a>
        </li>
        <li class="aside_nav__cell">
            <a href="#sec_interview"></a>
        </li>
        <li class="aside_nav__cell">
            <a href="#sec_consulting"></a>
        </li>
        <li class="aside_nav__cell">
            <a href="#sec_client"></a>
        </li>
        <li class="aside_nav__cell">
            <a href="#sec_information"></a>
        </li>
        <li class="aside_nav__cell">
            <a href="#sec_bottomnav"></a>
        </li>
    </ul>
</aside>
<section id="sec_content">
    <section id="sec_mainv" class="p-section p-section--100vh">
        <a href="/" class="c--top__link">
            <h1>
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_w.svg" alt="株式会社サクセスブレイン">
            </h1>
        </a>
        <div class="p-section__inr c--blurTarget">
            <h2>
                <img class="mainv__catch switch" src="<?php echo get_template_directory_uri(); ?>/img/top/mainv__text_pc.svg" alt="黒字化するマネジメントドクター">
            </h2>
            <p class="mainv__text">すべての企業は、潜在能力を眠らせている。</p>
            <a href="/statement" class="c--moreBtn c--moreBtn--white c--moreBtn--center">STATEMENT</a>
        </div>
        <img class="mainv__scroll" src="<?php echo get_template_directory_uri(); ?>/img/top/mainv__scroll.svg" alt="scroll">
    </section>
    <section id="sec_philosophy" class="p-section p-section--100vh">
        <div class="p-section__inr c--blurTarget">
            <h2>
                <img class="philosophy__catch switch" src="<?php echo get_template_directory_uri(); ?>/img/top/philosophy_text_pc.svg" alt="理念ピラミッドとは？">
            </h2>
            <p class="philosophy__text">道徳なき経済は犯罪。<br class="sp">経済なき道徳は寝言。<br>
                サクセスブレインが独自に提唱する<br>
                「理念ピラミッド®」を<br class="sp">構築することで<br>
                クライアント企業を<br class="sp">黒字化・永続化に導きます。</p>
            <a href="/philosophy" class="c--moreBtn c--moreBtn--white c--moreBtn--center">READ MORE</a>
        </div>
        <img class="philosophy__bg switch webp_switch" src="<?php echo get_template_directory_uri(); ?>/img/top/philosophy_bg_pc.png" alt="">
    </section>
    <section id="sec_interview" class="p-section">
        <div class="p-section__inr c--blurTarget">
            <h2>
                <p class="p-catch--en">EXECUTIVE INTERVIEW</p>
                <img class="interview__catch switch" src="<?php echo get_template_directory_uri(); ?>/img/top/interview_text_pc.svg" alt="">
            </h2>
            <p class="interview__catchText">サクセスブレインのコンセプトに共感いただいた経営者のインタビュー。<br>
                「理念ピラミッド®」の意義やそれぞれの組織論を語っていただいています。</p>
            <ul class="interview__group">
                <li class="interview__card">
                    <a href="/interview/kita">
                        <div class="interview__cardImg">
                            <div class="interview__num">
                                <p>interview <span>01</span></p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/interview_flag.svg" alt="">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/in_icon01.jpg" alt="">
                        </div>
                        <div class="interview__cardBody">
                            <p class="interview__textTitle">「目的」と「組織」と「ルール」をつくる。この３つがなければ事業の成功はありえない。</p>
                            <p class=interview__textDetail>株式会社ビーイングホールディングス<br>
                                代表取締役</p>
                            <p class="interview__textName">喜多甚一 氏</p>
                        </div>
                    </a>
                </li>
                <li class="interview__card">
                    <a href="/interview/mitani">
                        <div class="interview__cardImg">
                            <div class="interview__num">
                                <p>interview <span>02</span></p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/interview_flag.svg" alt="">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/in_icon02.jpg" alt="">
                        </div>
                        <div class="interview__cardBody">
                            <p class="interview__textTitle">売り物は変わった。売り方は変わらない。<br>
                                だから90年以上経った現在も存続を許されている。</p>
                            <p class=interview__textDetail>三谷産業株式会社<br>
                                代表取締役社長</p>
                            <p class="interview__textName">三谷忠照 氏</p>
                        </div>
                    </a>
                </li>
                <li class="interview__card">
                    <a href="/interview/munemori">
                        <div class="interview__cardImg">
                            <div class="interview__num">
                                <p>interview <span>03</span></p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/interview_flag.svg" alt="">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/test/in_icon03.jpg" alt="">
                        </div>
                        <div class="interview__cardBody">
                            <p class="interview__textTitle"> “職人”を“社員”に変えていく。<br>
                                会社の風土をつくるには10年はかかる。</p>
                            <p class=interview__textDetail>株式会社宗重商店<br>
                                代表取締役</p>
                            <p class="interview__textName">宗守重泰 氏</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section id="sec_consulting" class="p-section">
        <div class="p-section__inr c--blurTarget">
            <h2>
                <p class="p-catch--en">CONSULTING MENU</p>
                <img class="consulting__catch switch" src="<?php echo get_template_directory_uri(); ?>/img/top/consulting_text_pc.svg" alt="">
            </h2>
            <p class="consulting__catchText">クライアント企業を<br class="sp">黒字化・永続化に導く<br class="sp">３つのステージ</p>
            <p class="consulting__detail">努力しているのに利益が出ない。<br>
                いい人材が辞めていく。採用もうまくいかない。<br>
                人間の病がさまざまであるように、企業の課題もまた多種多様です。<br>
                ゆえにサクセスブレインは事業範囲を限定していません。<br>
                あえて言えば、クライアントを黒字化・永続化するための<br>
                すべての活動が事業ドメインになります。</p>
            <ul class="consulting__stage">
                <li class="consulting__stageCard">
                    <div class="consulting__stageHead">
                        <p class="consulting__stageTitle--en">STAGE 01</p>
                        <p class="consulting__stageTitle--jp">会社づくり</p>
                    </div>
                    <div class="consulting__stageBody">
                        <p class="consulting__stageTitle">社員のしあわせと<br class="sp">永続発展のために。</p>
                        <ul class="consulting__stageContent">
                            <li>
                                <p>経営理念をつくりたい</p>
                            </li>
                            <li>
                                <p>後継者を育てたい</p>
                            </li>
                            <li>
                                <p>経営者の資質を磨きたい</p>
                            </li>
                            <li>
                                <p>経営参謀がほしい</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="consulting__stageCard">
                    <div class="consulting__stageHead">
                        <p class="consulting__stageTitle--en">STAGE 02</p>
                        <p class="consulting__stageTitle--jp">社風づくり</p>
                    </div>
                    <div class="consulting__stageBody">
                        <p class="consulting__stageTitle">指示待ち組織から、<br class="sp">自ら考える組織へ。</p>
                        <ul class="consulting__stageContent">
                            <li>
                                <p>自ら考えるリーダーを育てたい</p>
                            </li>
                            <li>
                                <p>社員のモチベーションを上げたい</p>
                            </li>
                            <li>
                                <p>採用力向上と離職率低減を実現したい</p>
                            </li>
                            <li>
                                <p>社員満足度・顧客満足度を上げたい</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="consulting__stageCard">
                    <div class="consulting__stageHead">
                        <p class="consulting__stageTitle--en">STAGE 03</p>
                        <p class="consulting__stageTitle--jp">仕組みづくり</p>
                    </div>
                    <div class="consulting__stageBody">
                        <p class="consulting__stageTitle">潰れない会社、<br class="sp">儲かる会社をつくる。</p>
                        <ul class="consulting__stageContent">
                            <li>
                                <p>目標達成意識を高めたい</p>
                            </li>
                            <li>
                                <p>会社の生産性を上げたい</p>
                            </li>
                            <li>
                                <p>働き方改革に対応したい</p>
                            </li>
                            <li>
                                <p>儲かる仕組みをつくりたい</p>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <a href="/philosophy/#sec_phylosophy--management" class="c--moreBtn c--moreBtn--white c--moreBtn--center">ALL CONSULTING MENU</a>
        </div>
    </section>
    <section id="sec_client" class="p-section">
        <div class="p-section__inr c--blurTarget">
            <h2>
                <p class="p-catch--en">CLIENT</p>
                <img class="client__catch switch" src="<?php echo get_template_directory_uri(); ?>/img/top/client_text_pc.svg" alt="">
            </h2>
            <p class="client__catchSub">石川県内の主な企業</p>
            <div class="client__column">
                <ul class="client__list">
                    <li>石川可鍛製鉄株式会社</li>
                    <li>株式会社エー・オー・シー</li>
                    <li>株式会社加賀麩不室屋</li>
                    <li>カジナイロン株式会社</li>
                    <li>株式会社柴舟小出</li>
                    <li>伸晃化学株式会社</li>
                    <li>株式会社ダスキンヘルスケア北陸</li>
                    <li>立野電気工事株式会社</li>
                </ul>
                <ul class="client__list">
                    <li>タマダ株式会社</li>
                    <li>東亜電機工業株式会社</li>
                    <li>株式会社東振精機</li>
                    <li>株式会社中島商店</li>
                    <li>日本海建設株式会社</li>
                    <li>株式会社日本海コンサルタント</li>
                    <li>ネオ工業株式会社</li>
                    <li>株式会社福光屋</li>
                </ul>
                <ul class="client__list">
                    <li>株式会社北都高速運輸倉庫</li>
                    <li>北陸ミサワホーム株式会社</li>
                    <li>株式会社丸八製茶場</li>
                    <li>株式会社丸菱</li>
                    <li>株式会社道洋行</li>
                    <li>株式会社宗重商店</li>
                    <li>吉田司株式会社</li>
                    <li>米沢電気工事株式会社</li>
                </ul>
            </div>
            <p class="client__columnUnder">（五十音順）</p>
        </div>
    </section>
    <section id="sec_information" class="p-section">
        <div class="p-section__inr c--blurTarget">
            <h2 class="information__title">INFORMATION</h2>
            <div class="information__inr">
                <ul class="information__list">
                    <?php query_posts('posts_per_page=5'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li class="information__listCell">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="information__listCell--date"><?php the_date('Y.m.d'); ?></p>
                                    <p class="information__listCell--title">
                                        <?php if (mb_strlen($post->post_title, 'UTF-8') > 24) {
                                            $title = mb_substr($post->post_title, 0, 24, 'UTF-8');
                                            echo $title . '…';
                                        } else {
                                            echo $post->post_title;
                                        }
                                        ?>
                                        <span class="information__listCell--more">more</span>
                                    </p>
                                </a>
                            </li>
                    <?php endwhile;
                    endif; ?>
                </ul>
                <a class="information__link" href="/information">INDEX</a>
            </div>
        </div>
    </section>
    <section id="sec_bottomnav" class="p-section">
        <div class="p-section__inr c--blurTarget">
            <ul class="bottomnav__list">
                <li class="bottomnav__listCard">
                    <a href="/message">トップメッセージ</a>
                </li>
                <li class="bottomnav__listCard">
                    <a href="/profile">会社概要</a>
                </li>
                <li class="bottomnav__listCard">
                    <a href="https://www.success-brain.or.jp/" target="_blank">税理士法人サクセスブレイン</a>
                </li>
                <li class="bottomnav__listCard">
                    <a href="/publication">書籍紹介</a>
                </li>
            </ul>
        </div>
    </section>
</section>

<?php get_footer(); ?>