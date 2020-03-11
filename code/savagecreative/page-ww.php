<?php
/*
Template Name: store-ww
*/
?>
<?php get_header(); ?>
<section class="store--mainv">
    <h1><img class="switch" src="<?php echo get_template_directory_uri(); ?>/img/ww/mainv_pc.jpg" alt=""></h1>
</section>
<section id="sec_store--catch">
    <p class="main-text">世界のBEERと料理の<br class="sp">美味的関係。<br>
        ビアペアリングレストランで<br class="sp">探してください。</p>
    <p class="sub-text">世界のビールと各国の料理のペアリングを愉しんでいただく。<br>
        WW（ダブリューダブリュー）のコンセプトは“ビアペアリングレストラン”です。<br>
        ビールが好きな人はもちろん、ふだんはあまりビールを口にしない人にも、<br>
        愉しんでいただける多彩なお食事とドリンクを揃えました。<br>
        クリエイターといっしょにハンドメイドした空間の<br>
        デザインコンセプトは「World is the White.」。<br>
        何もかもが真っ白な空間で、十人十色の楽しいひとときをお過ごしください。<br>
        大きなパーティーや小規模の宴会はもちろん、結婚式２次会の舞台としても、<br>
        これまで体感したことのなかった時間をお愉しみいただけるはずです。</p>
    <div class="sec_store__detail">
        <img class="sec_store__detail--logo" src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_ww.svg"
            alt="">
        <ul class="sec_store__detail--list">
            <li class="sec_store__detail--list__cell">
                <dl>
                    <dt>DINNER</dt>
                    <dd>17:30-26:00（LO.25:30）</dd>
                </dl>
            </li>
            <li class="sec_store__detail--list__cell">
                <dl>
                    <dt>LUNCH</dt>
                    <dd>12:00-15:00（LO.14:30）*Saturday.Sunday and holidays only*</dd>
                </dl>
            </li>
            <li class="sec_store__detail--list__cell">
                <dl>
                    <dt>席　数</dt>
                    <dd>100席<br>
                        記念日や歓送迎会などの宴会・パーティー、<br class="pc">
                        結婚式の二次会などもご利用いただけますのでお気軽にご相談ください。</dd>
                </dl>
            </li>
            <li class="sec_store__detail--list__cell">
                <dl>
                    <dt>貸　切</dt>
                    <dd>最大120名まで（立食の場合）</dd>
                </dl>
            </li>
            <li class="sec_store__detail--list__cell">
                <dl>
                    <dt>駐車場</dt>
                    <dd>近隣の「まちP」マークの駐車場をご利用ください。<br>
                        ¥4,000以上ご飲食いただいた方に、200円分の駐車チケットをお渡ししています。</dd>
                </dl>
            </li>
        </ul>
    </div>
</section>
<section id="sec_store--pickup">
    <h2 class="store__heading">PICK UP</h2>
    <ul class="pickup__list">
        <?php query_posts('posts_per_page=-1&category_name=pickup');
        if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li class="pickup__list__cell">
            <a href="<?php the_permalink(); ?>">
                <div class=" pickup__list__cell--image" <?php if (has_post_thumbnail()) : ?>
                    style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>;)"
                    <?php endif; ?>></div>
                <time class="pickup__list__cell--date"
                    datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <p class="pickup__list__cell--title">
                    <?php
                            if (mb_strlen($post->post_title) > 32) {
                                $title = mb_substr($post->post_title, 0, 32);
                                echo $title . '...';
                            } else {
                                echo $post->post_title;
                            }
                            ?></p>

            </a>
        </li>
        <?php endwhile; ?>
        <?php else : ?>
        <p class="c-nocontent">まだ記事はありません。</p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </ul>

</section>
<section id="sec_store--news">
    <h2 class="store__heading">NEWS</h2>

    <ul class="news__list">
        <?php query_posts('posts_per_page=-1&category_name=ww');
        if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li class="news__list__cell">
            <a href="<?php the_permalink(); ?>">
                <div class=" news__list__cell--image" <?php if (has_post_thumbnail()) : ?>
                    style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>;)"
                    <?php endif; ?>></div>
                <time class="news__list__cell--date"
                    datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <p class="news__list__cell--title"> <?php
                                                            if (mb_strlen($post->post_title) > 32) {
                                                                $title = mb_substr($post->post_title, 0, 32);
                                                                echo $title . '...';
                                                            } else {
                                                                echo $post->post_title;
                                                            }
                                                            ?></p>
            </a>
        </li>
        <?php endwhile; ?>
        <?php else : ?>
        <p class="c-nocontent">まだ記事はありません。</p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </ul>
</section>

<section id="sec_pairing">
    <h2 class="p-heading__view">
        <div class="p-heading__inr">
            <img class="p-heading__inr--img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_ww_white.svg"
                alt="">
            <p class="p-heading__inr--title">PAIRING</p>
            <p class="p-heading__inr--detail">WWが厳選したペアリングをご紹介しています。<br>
                同じ風土で生まれたビールと料理、<br>
                味の特徴を表すビールの色と<br class="sp">同じ色の料理で合わせたペアリング。<br>
                ぜひご参考にお愉しみください。</p>
        </div>
    </h2>
    <?php require TEMPLATEPATH . '/module/pairing_list.php'; ?>
    <div class="p-pairing__module">
        <h3 class="p-pairing__heading" id="sec_pairing_world">- WORLD -</h3>
        <div class="p-pairing__list">
            <div class="p-pairing__list__cell">
                <h4 class="p-pairing__list__title">
                    <p>WORLD</p>
                    <img class="separate" src="<?php echo get_template_directory_uri(); ?>/img/ww/img_separate.svg"
                        alt="">
                    <img class="p-ico_world" src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_ico-ame.svg"
                        alt="">
                    <p>AMERICA</p>
                </h4>
                <p class="p-pairing__list__opt">アメリカのビールと料理で愉しむ</p>
                <div class="p-pairing__list__flex">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_img-ame01.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">ブルックリンラガー</p>
                            <p class="price">¥850</p>
                        </div>
                    </div>
                    <img class="p-pairing__list__center"
                        src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_center.svg" alt="">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_img-ame02.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">ウッドプランクステーキ</p>
                            <p class="price">¥1,800~</p>
                        </div>
                        <ul class="p-pairing__list__comp__list">
                            <li>
                                <p class="name">・ビール酵母のフライドチキン</p>
                                <p class="price">¥600~</p>
                            </li>
                            <li>
                                <p class="name">・ロメインレタスのシーザーサラダ</p>
                                <p class="price">¥900</p>
                            </li>
                            <li>
                                <p class="name">・ガーリックシュリンプ</p>
                                <p class="price">¥800</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-pairing__list__cell">
                <h4 class="p-pairing__list__title">
                    <p>WORLD</p>
                    <img class="separate" src="<?php echo get_template_directory_uri(); ?>/img/ww/img_separate.svg"
                        alt="">
                    <img class="p-ico_world" src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_ico-eng.svg"
                        alt="">
                    <p>ENGLAND</p>
                </h4>
                <p class="p-pairing__list__opt">イギリスのビールと料理で愉しむ</p>
                <div class="p-pairing__list__flex">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_img-eng01.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">ダブルホップモンスターIPA</p>
                            <p class="price">¥1,200</p>
                        </div>
                    </div>
                    <img class="p-pairing__list__center"
                        src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_center.svg" alt="">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_img-eng02.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">フィッシュ&チップス</p>
                            <p class="price">¥1,000</p>
                        </div>
                        <ul class="p-pairing__list__comp__list">
                            <li>
                                <p class="name">・まるごとカマンベールチーズフライ</p>
                                <p class="price">¥1,000</p>
                            </li>
                            <li>
                                <p class="name">・自家製ハムとほうれん草のポパイサラダ</p>
                                <p class="price">¥800</p>
                            </li>
                            <li>
                                <p class="name">・ウッドプランクステーキ</p>
                                <p class="price">¥1,800~</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-pairing__list__cell">
                <h4 class="p-pairing__list__title">
                    <p>WORLD</p>
                    <img class="separate" src="<?php echo get_template_directory_uri(); ?>/img/ww/img_separate.svg"
                        alt="">
                    <img class="p-ico_world" src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_ico-bel.svg"
                        alt="">
                    <p>BELGIUM</p>
                </h4>
                <p class="p-pairing__list__opt">ベルギーのビールと料理で愉しむ</p>
                <div class="p-pairing__list__flex">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_img-bel01.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">ヒューガルデン</p>
                            <p class="price">¥800</p>
                        </div>
                    </div>
                    <img class="p-pairing__list__center"
                        src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_center.svg" alt="">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_img-bel02.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">能登豚のシュニッツェル</p>
                            <p class="price">¥1,200</p>
                        </div>
                        <ul class="p-pairing__list__comp__list">
                            <li>
                                <p class="name">・ムール貝のビール蒸し</p>
                                <p class="price">¥1,000</p>
                            </li>
                            <li>
                                <p class="name">・ビール酵母のポムフリッツ</p>
                                <p class="price">¥550</p>
                            </li>
                            <li>
                                <p class="name">・茹で上げアスパラガスアリオリソース添え</p>
                                <p class="price">¥850</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="country_txt">その他の国のビールも数多く揃えています。<br class="sp">ぜひご堪能ください。</p>
        <ul class="country_list">
            <li class="country_list__cell">
                <img class="country_list__cell--icon"
                    src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_ico-spa.svg" alt="">
                <p class="country_list__cell--name">SPAIN</p>
            </li>
            <li class="country_list__cell">
                <img class="country_list__cell--icon"
                    src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_ico-cze.svg" alt="">
                <p class="country_list__cell--name">CZECH <br class="sp">REPUBLIC</p>
            </li>
            <li class="country_list__cell">
                <img class="country_list__cell--icon"
                    src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_ico-fra.svg" alt="">
                <p class="country_list__cell--name">FRANCE</p>
            </li>
            <li class="country_list__cell">
                <img class="country_list__cell--icon"
                    src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_ico-mex.svg" alt="">
                <p class="country_list__cell--name">MEXICO</p>
            </li>
            <li class="country_list__cell">
                <img class="country_list__cell--icon"
                    src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_ico-ita.svg" alt="">
                <p class="country_list__cell--name">ITALY</p>
            </li>
            <li class="country_list__cell">
                <img class="country_list__cell--icon"
                    src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_w_ico-aus.svg" alt="">
                <p class="country_list__cell--name">AUSTRIA</p>
            </li>
        </ul>
    </div>
    <div class="p-pairing__module">
        <h3 class="p-pairing__heading" id="sec_pairing_color">- COLOR -</h3>
        <div class="p-pairing__list">
            <div class="p-pairing__list__cell">
                <h4 class="p-pairing__list__title">
                    <p>COLOR</p>
                    <img class="separate" src="<?php echo get_template_directory_uri(); ?>/img/ww/img_separate.svg"
                        alt="">
                    <img class="p-ico_world" src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_ico-whi.svg"
                        alt="">
                    <p>WHITE</p>
                </h4>
                <p class="p-pairing__list__opt">白色のビールで愉しむ</p>
                <div class="p-pairing__list__flex">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_img-whi01.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">クローネンブルグ1664ブラン</p>
                            <p class="price">¥800</p>
                        </div>
                    </div>
                    <img class="p-pairing__list__center"
                        src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_center.svg" alt="">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_img-whi02.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">フィッシュ&チップス</p>
                            <p class="price">¥1,000</p>
                        </div>
                        <ul class="p-pairing__list__comp__list">
                            <li>
                                <p class="name">・まるごとカマンベールチーズフライ</p>
                                <p class="price">¥1,000</p>
                            </li>
                            <li>
                                <p class="name">・塩鱈のポテトサラダ</p>
                                <p class="price">¥500</p>
                            </li>
                            <li>
                                <p class="name">・塩鱈のピルピル</p>
                                <p class="price">¥900</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-pairing__list__cell">
                <h4 class="p-pairing__list__title">
                    <p>COLOR</p>
                    <img class="separate" src="<?php echo get_template_directory_uri(); ?>/img/ww/img_separate.svg"
                        alt="">
                    <img class="p-ico_world" src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_ico-amb.svg"
                        alt="">
                    <p>AMBER</p>
                </h4>
                <p class="p-pairing__list__opt">琥珀色のビールで愉しむ</p>
                <div class="p-pairing__list__flex">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_img-amb01.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">ブルックリンラガー</p>
                            <p class="price">¥850</p>
                        </div>
                    </div>
                    <img class="p-pairing__list__center"
                        src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_center.svg" alt="">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_img-amb02.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">洋風串焼きブロシェット</p>
                            <p class="price">¥1,200~</p>
                        </div>
                        <ul class="p-pairing__list__comp__list">
                            <li>
                                <p class="name">・ガーリックシュリンプ</p>
                                <p class="price">¥800</p>
                            </li>
                            <li>
                                <p class="name">・ビール酵母のポムフリッツ</p>
                                <p class="price">¥550</p>
                            </li>
                            <li>
                                <p class="name">・ビール酵母のフライドチキン</p>
                                <p class="price">¥600</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-pairing__list__cell">
                <h4 class="p-pairing__list__title">
                    <p>COLOR</p>
                    <img class="separate" src="<?php echo get_template_directory_uri(); ?>/img/ww/img_separate.svg"
                        alt="">
                    <img class="p-ico_world" src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_ico-bla.svg"
                        alt="">
                    <p>BLACK</p>
                </h4>
                <p class="p-pairing__list__opt">黒ビールで愉しむ</p>
                <div class="p-pairing__list__flex">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_img-bla01.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">チョコレートスタウト</p>
                            <p class="price">¥1,200</p>
                        </div>
                    </div>
                    <img class="p-pairing__list__center"
                        src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_center.svg" alt="">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_img-bla02.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">ガトーショコラ</p>
                            <p class="price">¥500</p>
                        </div>
                        <ul class="p-pairing__list__comp__list">
                            <li>
                                <p class="name">・本日の黒ビール煮込み</p>
                                <p class="price">¥1,200~</p>
                            </li>
                            <li>
                                <p class="name">・チョコレート</p>
                                <p class="price">¥500</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="p-pairing__list__cell">
                <h4 class="p-pairing__list__title">
                    <p>COLOR</p>
                    <img class="separate" src="<?php echo get_template_directory_uri(); ?>/img/ww/img_separate.svg"
                        alt="">
                    <img class="p-ico_world" src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_ico-gol.svg"
                        alt="">
                    <p>GOLD</p>
                </h4>
                <p class="p-pairing__list__opt">金色のビールで愉しむ</p>
                <div class="p-pairing__list__flex">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_img-gol01.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">ブルームーン</p>
                            <p class="price">¥800</p>
                        </div>
                    </div>
                    <img class="p-pairing__list__center"
                        src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_center.svg" alt="">
                    <div class="p-pairing__list__comp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/pair_c_img-gol02.jpg" alt="">
                        <div class="p-pairing__list__comp__name">
                            <p class="name">まるごとカマンベールチーズフライ</p>
                            <p class="price">¥1,000</p>
                        </div>
                        <ul class="p-pairing__list__comp__list">
                            <li>
                                <p class="name">・フィッシュ&チップス</p>
                                <p class="price">¥1,000</p>
                            </li>
                            <li>
                                <p class="name">・日替わりフリッタータ</p>
                                <p class="price">¥750</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sec_menu">
    <h2 class="p-heading__view">
        <div class="p-heading__inr">
            <img class="p-heading__inr--img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_ww_white.svg"
                alt="">
            <p class="p-heading__inr--title">MENU</p>
            <p class="p-heading__inr--detail">季節の旬野菜を中心に世界各国のビールに合う<br class="sp">アラカルトをご提案しています。<br
                    class="sp">ぜひご期待ください。</p>
        </div>
    </h2>
    <?php require TEMPLATEPATH . '/module/menu_list.php'; ?>
    <div id="unker_menu"></div>
    <div class="menu-content">
        <!-- お料理 -->
        <div class="menu-content__module menu-show">
            <h3 class="p-pairing__heading">- お料理 -</h3>
            <div class="menu-content__module__wrap">
                <?php if (have_rows('menu_cuisine')) : ?>
                <?php while (have_rows('menu_cuisine')) : the_row(); ?>
                <?php if (get_row_layout() == 'menu_cuisine_cell') : ?>
                <div
                    class="menu-content__cell<?php if (get_sub_field('menu_column') == 1) : ?> menu-content__cell__double<?php endif; ?>">
                    <?php if (get_sub_field('menu_title')) : ?>
                    <h4 class="menu-content__title menu-content__title">
                        <p><?php the_sub_field('menu_title'); ?></p>
                    </h4>
                    <?php endif; ?>
                    <ul class="menu-content__inr">
                        <?php if (have_rows('menu_detail')) : ?>
                        <?php while (have_rows('menu_detail')) : the_row(); ?>
                        <li class="menu-content__inr__cell">
                            <?php if (get_sub_field('menu_name')) : ?>
                            <p class="menu-content__name">
                                ・<?php the_sub_field('menu_name'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_sub_field('menu_price')) : ?>
                            <p class="menu-content__price">
                                ¥<?php the_sub_field('menu_price'); ?>
                            </p>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php else : ?>
                <p>none</p>
                <?php endif; ?>
            </div>
        </div>
        <!-- ビール -->
        <div class="menu-content__module">
            <h3 class="p-pairing__heading">- 世界のビール -</h3>
            <div class="menu-content__module__wrap">
                <?php if (have_rows('menu_beer')) : ?>
                <?php while (have_rows('menu_beer')) : the_row(); ?>
                <?php if (get_row_layout() == 'menu_beer_cell') : ?>
                <div
                    class="menu-content__cell<?php if (get_sub_field('menu_column') == 1) : ?> menu-content__cell__double<?php endif; ?>">
                    <?php if (get_sub_field('menu_title')) : ?>
                    <h4 class="menu-content__title menu-content__title--wbeer">
                        <?php if (get_sub_field('menu_icon')) :  ?>
                        <div class="menu-content__icon"
                            style="background-image:url(<?php the_sub_field('menu_icon'); ?>);">
                        </div>
                        <?php endif; ?>
                        <p class="menu-content__title--en"><?php the_sub_field('menu_title-en'); ?></p>
                        <p><?php the_sub_field('menu_title'); ?></p>
                    </h4>
                    <?php endif; ?>
                    <ul class="menu-content__inr">
                        <?php if (have_rows('menu_detail')) : ?>
                        <?php while (have_rows('menu_detail')) : the_row(); ?>
                        <li class="menu-content__inr__cell ">
                            <?php if (get_sub_field('menu_name')) : ?>
                            <p class="menu-content__name">
                                ・<?php the_sub_field('menu_name'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_sub_field('menu_price')) : ?>
                            <p class="menu-content__price">
                                ¥<?php the_sub_field('menu_price'); ?>
                            </p>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php else : ?>
                <p>none</p>
                <?php endif; ?>
            </div>
        </div>
        <!-- アルコール -->
        <div class="menu-content__module">
            <h3 class="p-pairing__heading">- アルコール -</h3>
            <div class="menu-content__module__wrap">
                <?php if (have_rows('menu_alcohol')) : ?>
                <?php while (have_rows('menu_alcohol')) : the_row(); ?>
                <?php if (get_row_layout() == 'menu_alcohol_cell') : ?>
                <div
                    class="menu-content__cell<?php if (get_sub_field('menu_column') == 1) : ?> menu-content__cell__double<?php endif; ?>">
                    <?php if (get_sub_field('menu_title')) : ?>
                    <h4 class="menu-content__title menu-content__title">
                        <p><?php the_sub_field('menu_title'); ?></p>
                    </h4>
                    <?php endif; ?>
                    <ul class="menu-content__inr">
                        <?php if (have_rows('menu_detail')) : ?>
                        <?php while (have_rows('menu_detail')) : the_row(); ?>
                        <li class="menu-content__inr__cell">
                            <?php if (get_sub_field('menu_name')) : ?>
                            <p class="menu-content__name">
                                ・<?php the_sub_field('menu_name'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_sub_field('menu_price')) : ?>
                            <p class="menu-content__price">
                                ¥<?php the_sub_field('menu_price'); ?>
                            </p>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php else : ?>
                <p>none</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="menu-content__module">
            <!-- ノンアルコール -->
            <h3 class="p-pairing__heading">- ノンアルコールドリンク類 -</h3>
            <div class="menu-content__module__wrap">
                <?php if (have_rows('menu_nonalcohol')) : ?>
                <?php while (have_rows('menu_nonalcohol')) : the_row(); ?>
                <?php if (get_row_layout() == 'menu_nonalcohol_cell') : ?>
                <div
                    class="menu-content__cell<?php if (get_sub_field('menu_column') == 1) : ?> menu-content__cell__double<?php endif; ?>">
                    <?php if (get_sub_field('menu_title')) : ?>
                    <h4 class="menu-content__title menu-content__title">
                        <p><?php the_sub_field('menu_title'); ?></p>
                    </h4>
                    <?php endif; ?>
                    <ul class="menu-content__inr">
                        <?php if (have_rows('menu_detail')) : ?>
                        <?php while (have_rows('menu_detail')) : the_row(); ?>
                        <li class="menu-content__inr__cell">
                            <?php if (get_sub_field('menu_name')) : ?>
                            <p class="menu-content__name">
                                ・<?php the_sub_field('menu_name'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_sub_field('menu_price')) : ?>
                            <p class="menu-content__price">
                                ¥<?php the_sub_field('menu_price'); ?>
                            </p>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php else : ?>
                <p>none</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- 飲み放題 -->
        <div class="menu-content__module">
            <h3 class="p-pairing__heading">- 飲み放題 -</h3>
            <div class="menu-content__module__wrap">
                <?php if (have_rows('menu_free')) : ?>
                <?php while (have_rows('menu_free')) : the_row(); ?>
                <?php if (get_row_layout() == 'menu_free_cell') : ?>
                <div
                    class="menu-content__cell<?php if (get_sub_field('menu_column') == 1) : ?> menu-content__cell__double<?php endif; ?>">
                    <?php if (get_sub_field('menu_title')) : ?>
                    <h4 class="menu-content__title menu-content__title">
                        <p><?php the_sub_field('menu_title'); ?></p>
                    </h4>
                    <?php endif; ?>
                    <ul class="menu-content__inr">
                        <?php if (have_rows('menu_detail')) : ?>
                        <?php while (have_rows('menu_detail')) : the_row(); ?>
                        <li class="menu-content__inr__cell">
                            <?php if (get_sub_field('menu_name')) : ?>
                            <p class="menu-content__name">
                                ・<?php the_sub_field('menu_name'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if (get_sub_field('menu_price')) : ?>
                            <p class="menu-content__price">
                                ¥<?php the_sub_field('menu_price'); ?>
                            </p>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php else : ?>
                <p>none</p>
                <?php endif; ?>
            </div>
        </div>
</section>
<section id="sec_party">
    <h2 class="p-heading__view">
        <div class="p-heading__inr">
            <img class="p-heading__inr--img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_ww_white.svg"
                alt="">
            <p class="p-heading__inr--title">PARTY／WEDDING</p>
            <p class="p-heading__inr--detail">WWオリジナルのコース料理で特別な時間を<br class="sp">お過ごしください。</p>
        </div>
    </h2>
    <ul class="p-unker__link">
        <li class="p-unker__link__cell">
            <a href="#sec_party_party">PARTY</a>
        </li>
        <li class="p-unker__link__cell">
            <a href="#sec_party_wedding">WEDDING</a>
        </li>
    </ul>
    <div class="party-content__module" id="sec_party_party">
        <h3 class="p-pairing__heading">- PARTY -</h3>
        <p class="p-pairing__heading--sub">WWでは大人数での宴会・パーティーでの利用も歓迎しています。<br>
            着席で最大100席、立食の場合最大120名まで可能です。<br>
            お友だち同士の飲み会や歓送迎会など、さまざまなシーンでご活用いただけます。<br>
            メッセージプレートも承っておりますのでお気軽にご連絡ください。</p>
        <div class="party-content__inr">
            <div class="party-content--party__top">
                <div class="party-content--party__top--image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ww/party_img01.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ww/party_img02.jpg" alt="">
                </div>
                <div class="party-content--party__top--text">
                    <p class="course--name">5,000円コース</p>
                    <p class="course--title">旬のお野菜とお魚・お肉が組み合わさってバランス良し！<br>
                        大満足のWWオリジナルコース料理です。</p>
                    <div class="course--menu">
                        <dl class="course--menu--cell">
                            <dt class="title">◎ 前菜の盛り合わせ</dt>
                            <dd class="detail">（例：低温調理のボイルハム／生ハムハモンセラーノ／魚介のスモーク／オリジナルビールで漬けたピクルス／トマトとブッラータチーズのカプレーゼ）
                            </dd>
                        </dl>
                        <dl class="course--menu--cell">
                            <dt class="title">◎ カルパッチョ</dt>
                            <dd class="detail">（例：鮮魚とアボカドのカルパッチョ）</dd>
                        </dl>
                        <dl class="course--menu--cell">
                            <dt class="title">◎ 温かい前菜</dt>
                            <dd class="detail">（例：フィッシュ&チップス 塩鱈ピルピルのソースで／ガーリックシュリンプアメリケーヌソースで／ビール衣のフライドチキン）</dd>
                        </dl>
                        <dl class="course--menu--cell">
                            <dt class="title">◎ 肉料理</dt>
                            <dd class="detail">（例：アンガスビーフのサーロイン／ウッドプランクステーキ）</dd>
                        </dl>
                        <dl class="course--menu--cell">
                            <dt class="title">◎ 食事</dt>
                            <dd class="detail">（例：海の幸のパエリヤ）</dd>
                        </dl>
                    </div>
                    <p class="course--name">6,000円コース<br><span>／</span>
                        4,500円コース</p>
                    <p class="course--title">上記コースもご用意しております。お好みなどございましたら、お気軽にスタッフまでご相談ください。</p>
                    <p class="course--menu--attention">
                        ※ご予約は前日までにお願い致します。<br>
                        ※各コース120分飲み放題付。(LO100分)<br>
                        ※デザート付きは+300円。<br>
                        ※旬の食材を楽しんで頂くため、コース内容は変更になる場合がございます。</p>
                </div>
            </div>
            <p class="party-content--party__attention">※ 予約人数の変更やキャンセルをご希望の場合は、前営業日までにお電話にて必ずご連絡ください。<br>
                ※ 当日の予約人数変更やキャンセルにつきましては、お料理代金(コース代金 -1,000円)のご請求をさせていただきます。<br>
                ※ 無断キャンセルや、当日ご来店いだだけなかった場合は、追ってご連絡のうえ、コース料金のご請求をさせていただきます。</p>
        </div>
        <?php require TEMPLATEPATH . '/module/contact_area.php'; ?>

    </div>
    <div class="party-content__module" id="sec_party_wedding">
        <h3 class="p-pairing__heading">- WEDDING -</h3>
        <p class="p-pairing__heading--sub">WWでは結婚式二次会・宴会での利用も可能です。<br>
            ウエディングケーキも承っておりますのでお気軽にご連絡ください。</p>

    </div>
</section>
<section id="sec_store--contact">
    <h2 class="p-heading__view">
        <div class="p-heading__inr">
            <img class="p-heading__inr--img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_ww_white.svg"
                alt="">
            <p class="p-heading__inr--title">CONTACT</p>
            <p class="p-heading__inr--detail">お電話またはメールにてご予約ください。</p>
        </div>
    </h2>
    <div class="store--contact__inr">
        <p class="p-pairing__heading--sub">ご予約をキャンセルする場合は、前日までにメールまたはお電話にてお知らせください。<br>
            （定休日にお電話される場合、留守電には残さずメールにてお知らせいただきますようお願いいたします。）</p>
        <?php require TEMPLATEPATH . '/module/contact_area.php'; ?>
    </div>
</section>
<section id="sec_store--group">
    <p class="group--title">- GROUP RESTAURANT -</p>
    <ul class="group--list">
        <li class="group--list__cell">
            <a href="https://www.fullofbeans.jp/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/store__logo--fullof.svg" alt="">
            </a>
        </li>
        <li class="group--list__cell">
            <a href="https://delicious1945.jp/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/store__logo--1945.svg" alt="">
            </a>
        </li>
    </ul>
</section>

<?php get_footer('store');