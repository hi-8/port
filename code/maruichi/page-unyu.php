<?php
/*
Template Name: unyu
*/
?>
<?php get_header('unyu'); ?>

<div class="topimg">
    <span><img src="<?php echo get_template_directory_uri(); ?>/unyu/img/top_text.svg" width="395" height="27"
            alt="まるを運ぶ会社。"></span>
    <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/top_img.jpg" class="pc" width="1282" height="599"
        alt="">
    <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/top_img_sp.jpg" class="sp" width="750" height="1046"
        alt="">
</div>
<div class="news_area">
    <div class="wrap">
        <p><span>NEWS</span><span>ニュース</span></p>
        <div class="news">
            <?php
            $cat_posts = get_posts(array(
                'post_type' => 'post',
                'category_name' => 'news_unyu',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            global $post;
            if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>
            <a
                href="<?php the_permalink() ?>"><span><?php echo get_the_date('Y.m.d'); ?></span><span><?php
                                                                                                                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                                                                                                                    $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                                                                                                                    echo $title . '……';
                                                                                                                } else {
                                                                                                                    echo $post->post_title;
                                                                                                                }
                                                                                                                ?></span></a>
            <?php endforeach;
            endif;
            wp_reset_postdata(); ?>
        </div>
        <a href="<?php global $url_news;
                    echo $url_news; ?>" class="sp_more">MORE</a>
    </div>
</div>
<div class="container">
    <div id="about" class="strong_area">
        <h2>MARUICHI STRONG POINT</h2>
        <p class="subtext">丸一運輸の「まるい」強み</p>
        <p class="text">
            丸一運輸は創業の1972年以来、お客様の様々なご要望にお応えして<br>最適な物流サービスをご提案して参りました。<br>丸一運輸の「丸」は、すべてのものは繋がっているという「円」に由来します。<br>時代が変化し、さまざまなサービスが求められる中でも<br>多彩な事業や取り組みで地域を繋げ、<br>信頼性、安全性、多様性のある「まるい」サービスで<br>地域の企業活動を応援します。
        </p>
        <div class="point">
            <div class="block">
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/strongpoint01.svg" width="194"
                    height="194" alt="MARU POINT 001 安全第一 - Safety -">
                <p>丸一運輸は、社員の安全・荷物の安全・車両の安全を何よりも大切に考えており、「安全第一」をモットーに取り組んでいます。そのために、日々の安全輸送にとって大事な『自動車整備事業』を有し、荷主企業様の運送サービスを清潔で安全・快適にサポート致します。
                </p>
                <div class="box">
                    <img class="img01" src="<?php echo get_template_directory_uri(); ?>/unyu/img/strongpoint_img01.jpg"
                        width="80" height="89" alt="安全認定　安全性優良事業所">
                    <p class="ls006">丸一運輸は「社団法人 全日本トラック協会」が交通安全対策など一定の基準を達成した事業所を評価・認定する「Ｇマーク」の認定を受けました。</p>
                </div>
            </div>
            <div class="block">
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/strongpoint02.svg" width="194"
                    height="194" alt="MARU POINT 002 環境保全 - Ecology -">
                <p>物流事業の提供から生じる環境への種々の影響を低減するため、社員の一人一人と社内組織の連携によって、「環境にやさしい丸一運輸」の実現をめざして日々取り組んでおります。</p>
                <div class="box">
                    <img class="img02" src="<?php echo get_template_directory_uri(); ?>/unyu/img/strongpoint_img02.jpg"
                        width="85" height="85" alt="グリーン経営 認証">
                    <p>丸一運輸は<a href="#" target="_blank" rel="noopener">「グリーン経営認証」</a>を取得しております。</p>
                </div>
            </div>
            <div class="block">
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/strongpoint03.svg" width="194"
                    height="194" alt="MARU POINT 003 車両台数 - Variation -">
                <p>現在では９５台の多彩な車両を取り揃え、長距離輸送を中心とする 一般貨物輸送 、県内の専属ルート配送 、また一時保管・定期保管が可能な 倉庫業や、自動車整備部門としてオートセンター
                    の4つの事業を柱とし、荷主様の輸送サービス、ひいては企業活動を全面的に支援して参ります。</p>
                <div class="box">
                    <p class="w100">取り扱い車両：セミトレーラー／ウイング車／ユニック車／ゲート車／平車／箱車</p>
                </div>
            </div>
        </div>
    </div>
    <div id="service" class="service_area">
        <h2>MARUICHI SERVICE</h2>
        <p class="subtext">丸一運輸の事業内容</p>
        <div class="circleimgwraap">
            <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/circle00.svg" class="circle_img"
                usemap="#circle" width="505" height="505" alt="MARUICHI TRANSPORT 自動車整備業 一般貨物輸送 倉庫保管業 専属ルート配送">
            <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/circle00.svg" class="circle_img_back"
                width="505" height="505" alt="">
        </div>
        <map name="circle">
            <area shape="rect" coords="0,0,252,252" data-target="circle_link01" class="circle01over">
            <area shape="rect" coords="252,0,505,252" data-target="circle_link02" class="circle02over">
            <area shape="rect" coords="0,252,252,505" data-target="circle_link03" class="circle03over">
            <area shape="rect" coords="252,252,505,505" data-target="circle_link04" class="circle04over">
        </map>
        <div class="service_sp">
            <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/circle00.svg" class="circle_img_sp"
                usemap="#circlesp" width="300" height="300" alt="MARUICHI TRANSPORT 自動車整備業 一般貨物輸送 倉庫保管業 専属ルート配送">
            <map name="circlesp">
                <area shape="rect" coords="0,0,150,150" href="#circle_link01sp">
                <area shape="rect" coords="150,0,300,150" href="#circle_link02sp">
                <area shape="rect" coords="0,150,150,300" href="#circle_link03sp">
                <area shape="rect" coords="150,150,300,300" href="#circle_link04sp">
            </map>
            <div id="circle_link02sp" class="circle_link_sp">
                <img class="topimg" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01icon2.svg"
                    width="63" height="67" alt="">
                <p class="title">一般貨物輸送</p>
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img01sp1.jpg"
                    width="300" height="223" alt="">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img01sp2.jpg"
                    width="300" height="223" alt="">
                <p class="text">一般貨物輸送では、石川県を基盤とする地場配送から、関東・中京・関西方面まで、多彩・多様な車両ラインアップで、お客様のニーズに的確・丁寧、且つ安心・安全にお応えします。</p>
                <p class="title2">車両紹介</p>
                <div class="wrap_carlist">
                    <div>
                        <p>セミトレーラー</p>
                        <p>9台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_1.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>15トン平車</p>
                        <p>6台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_2.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>15トンウイング車</p>
                        <p>7台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_3.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>7トンユニック</p>
                        <p>1台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_4.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>5トンユニック</p>
                        <p>1台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_5.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>4トンウイング</p>
                        <p>3台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_6.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>2トン 平車</p>
                        <p>2台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_8.jpg" width="300"
                            height="175" alt="">
                    </div>
                </div>
                <p class="title2">主要お取引先</p>
                <table>
                    <tr>
                        <td>林ベニヤ産業(株)</td>
                        <td>(株)フジムラ</td>
                    </tr>
                    <tr>
                        <td>森定興商(株)</td>
                        <td>大島産業(株)</td>
                    </tr>
                    <tr>
                        <td>七尾外材(株)</td>
                        <td>朝日工業(株)</td>
                    </tr>
                    <tr>
                        <td>明鋼材(株)</td>
                        <td>(有)丸谷建材</td>
                    </tr>
                    <tr>
                        <td>シブヤマシナリー(株)</td>
                        <td>アサガミ(株)</td>
                    </tr>
                    <tr>
                        <td>信正鋼材(株)</td>
                        <td>ブリヂストン物流(株)</td>
                    </tr>
                    <tr>
                        <td>阪和興業グループ</td>
                        <td>王子製鉄(株)</td>
                    </tr>
                    <tr>
                        <td>橋本商事</td>
                        <td>(株)下保商店</td>
                    </tr>
                    <tr>
                        <td>林友ハウス工業(株)</td>
                        <td>双日建材(株)</td>
                    </tr>
                    <tr>
                        <td>(株)新三興鋼管</td>
                        <td>(株)吉川喜商店</td>
                    </tr>
                    <tr>
                        <td>西垣林業(株)</td>
                        <td>西村鋼業(株)</td>
                    </tr>
                    <tr>
                        <td>丸果七尾青果(株)</td>
                        <td>都築木材(株)</td>
                    </tr>
                    <tr>
                        <td>三東産業(株)</td>
                        <td></td>
                    </tr>
                </table>
                <p class="cap">※順不同敬称略。その他 荷主１６０社・協力会社６２社 ＜平成２８年４月更新＞</p>
            </div>
            <div id="circle_link04sp" class="circle_link_sp">
                <img class="topimg" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02icon2.svg"
                    width="63" height="67" alt="">
                <p class="title">専属ルート配送</p>
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img01sp1.jpg"
                    width="300" height="222" alt="">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img01sp2.jpg"
                    width="300" height="222" alt="">
                <p class="text">専属配送では、石川県内を中心に食料品・青果・飲料・雑貨・
                    アルミ製品などの配送を行っております。車両は２トンから４トン車、ウイング車やゲート車、平ボディ・バンボディなど各種車両を取り揃えております。</p>
                <p class="title2">車両紹介</p>
                <div class="wrap_carlist">
                    <div>
                        <p>4トン保冷車</p>
                        <p>20台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_1.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>4トン低温車</p>
                        <p>2台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_2.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>3トン保冷車</p>
                        <p>6台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_3.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>3トン保冷車</p>
                        <p>3台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_4.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>2トン箱車</p>
                        <p>4台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_5.jpg" width="300"
                            height="175" alt="">
                    </div>
                    <div>
                        <p>2トン保冷車</p>
                        <p>8台</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_6.jpg" width="300"
                            height="175" alt="">
                    </div>
                </div>
            </div>
            <div id="circle_link01sp" class="circle_link_sp">
                <img class="topimg" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal03icon2.svg"
                    width="63" height="63" alt="">
                <p class="title">自動車整備業</p>
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal03img01sp1.jpg"
                    width="300" height="223" alt="">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal03img01sp2.jpg"
                    width="300" height="223" alt="">
                <p class="text">オートセンターは丸一運輸の自動車整備部門として充実した設備を備え、腕に自信を持った4名の” 熟練整備士 ”が運送サービスの安心・安全な運行を強力にサポートしております。
                    自社整備はもちろんの事、軽自動車から乗用車、ディーゼル車・ガソリン車まで、各種車両の点検・整備、および民間車検も行き届いたサービスと共にご提供致します。</p>
                <img class="img mgt" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal03img02.jpg"
                    width="300" height="161" alt="">
            </div>
            <div id="circle_link03sp" class="circle_link_sp">
                <img class="topimg" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal04icon2.svg"
                    width="90" height="70" alt="">
                <p class="title">倉庫保管業</p>
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal04img01sp1.jpg"
                    width="300" height="223" alt="">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal04img01sp2.jpg"
                    width="300" height="223" alt="">
                <p class="text">
                    丸一運輸では1,702㎡の広大な倉庫にて、製品の出入庫、保管管理、仕分け分類等の流通加工まで行います。一般貨物の一時的な保管場所としてや、定期貨物の調整保管としてなど、荷主企業様のご要望に応じたサービスをご提案致します。
                </p>
                <img class="img mgt" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal04img02.jpg"
                    width="300" height="161" alt="">
            </div>
        </div>
    </div>
    <div id="company" class="company_area">
        <h2>COMPANY</h2>
        <p class="subtext">企業情報</p>
        <div class="link_wrap">
            <a href="#info">
                <p>INFOMATION</p>
                <p>会社概要</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/company_arrow.svg" width="43" height="20"
                    alt="">
                <span class="texture"></span>
            </a>
            <a href="#acc">
                <p>ACCESS</p>
                <p>所在地</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/company_arrow.svg" width="43" height="20"
                    alt="">
                <span class="texture"></span>
            </a>
            <a href="#rec">
                <p>RECRUIT</p>
                <p>求人情報</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/company_arrow.svg" width="43" height="20"
                    alt="">
                <span class="texture"></span>
            </a>
        </div>
    </div>
    <h3 id="info">INFOMATION</h3>
    <p class="sub2">会社概要</p>
    <table>
        <tr>
            <td>社名</td>
            <td>丸一運輸 株式会社 (MARUICHI UNYU Co., Ltd.)</td>
        </tr>
        <tr>
            <td>所在地</td>
            <td>〒９２６－００１４　石川県七尾市矢田町２－１</td>
        </tr>
        <tr>
            <td>電話番号</td>
            <td>０７６７－５３－０２５２（代表）</td>
        </tr>
        <tr>
            <td>ＦＡＸ番号</td>
            <td>０７６７－５２－６１６１</td>
        </tr>
        <tr>
            <td>設立年月</td>
            <td>昭和４７年３月　丸一運輸 株式会社設立</td>
        </tr>
        <tr>
            <td>資本金</td>
            <td>１，５００万円</td>
        </tr>
        <tr>
            <td>役員</td>
            <td><span>代表取締役社長</span>　木下 義隆<br>
                <span>常務取締役</span>　吉田 忠勝<br>
                <span>取締役</span>　三野 広宣<br>
                <span>取締役</span>　山元 宏幸</td>
        </tr>
        <tr>
            <td>従業員数</td>
            <td>９４名（令和元年５月１日現在）</td>
        </tr>
        <tr>
            <td>車両台数</td>
            <td>合計８２台（令和元年５月１日現在）</td>
        </tr>
        <tr>
            <td>事業内容</td>
            <td>一般貨物自動車運送事業<br>自動車整備業</td>
        </tr>
        <tr>
            <td>取引金融機関</td>
            <td>北國銀行<br>のと共栄信用金庫</td>
        </tr>
        <tr>
            <td>グループ会社</td>
            <td><a href="/" target="_blank" rel="noopener" style="text-decoration: underline">株式会社丸一観光</a><br>
                株式会社丸一観光北陸<br>
                <a href="/marinetaxi/" target="_blank" rel="noopener"
                    style="text-decoration: underline">丸一タクシー株式会社</a><br></td>
        </tr>
        <tr>
            <td>主要取引先</td>
            <td>カナカン株式会社<br>林ベニヤ産業株式会社<br>七尾ヤクルト販売株式会社</td>
        </tr>
    </table>
    <h3 id="acc">ACCESS</h3>
    <p class="sub2">所在地</p>
    <div class="accessblock mgt">
        <div class="left">
            <a href="https://goo.gl/maps/JtWPUahyQuj7a6b4A" target="_blank" rel="noopener" class="spgoogle"><span>Google
                    Map</span></a>
            <p>本社</p>
            <p>〒926-0014 石川県七尾市矢田町2-1<br>TEL: 0767-53-0252<br>FAX: 0767-52-6161</p>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.600779745291!2d136.97949746412294!3d37.04487214649471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1369a76b498cf9a1!2z5Li45LiA6YGL6Ly4!5e0!3m2!1sja!2sjp!4v1576847264395!5m2!1sja!2sjp"
            width="450" height="220" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div class="accessblock">
        <div class="left">
            <a href="https://goo.gl/maps/bH6BXAYogZf3xCnx5" target="_blank" rel="noopener" class="spgoogle"><span>Google
                    Map</span></a>
            <p>配車センター</p>
            <p>〒926-0011　石川県七尾市佐味町ハ-13<br>TEL: 0767-54-0252<br>FAX: 0767-53-2221</p>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3184.340014462674!2d136.9932861216808!3d37.0493797839021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfdd4f18536df7e60!2z5Li45LiA6YGL6Ly477yI5qCq77yJIOmFjei7iuOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1576421000370!5m2!1sja!2sjp"
            width="450" height="220" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div class="accessblock">
        <div class="left">
            <a href="https://goo.gl/maps/pGLYrSAcphQzXoGr9" target="_blank" rel="noopener" class="spgoogle"><span>Google
                    Map</span></a>
            <p>オートセンター</p>
            <p>〒926-0011 石川県七尾市佐味町ハ-11<br>TEL: 0767-52-0252<br>FAX: 0767-52-0254</p>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3184.3455903502736!2d136.9935077216809!3d37.049246883924575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe893289a197bcb2e!2z5Li45LiAIOOCquODvOODiOOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1576421050828!5m2!1sja!2sjp"
            width="450" height="220" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>
<div id="recruit" class="recruit_area">
    <h3 id="rec" class="white">RECRUIT</h3>
    <p class="sub2white">求人情報</p>
    <p class="text">求人に関するお問い合わせは、<br class="sp_block960">下記の該当する求人番号をクリック！</p>
    <div class="wrap">
        <div class="tablewrap_sp00">
            <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/icon_right.svg" class="iconright_sp"
                width="20" height="20" alt="">
            <div class="tablewrap_sp">
                <table>
                    <tr>
                        <td>求人番号</td>
                        <td>職種</td>
                        <td>必要免許</td>
                    </tr>
                    <tr>
                        <td>17030-01771991</td>
                        <td>長距離運転手（トレーラー）</td>
                        <td>大型免許：けん引免許</td>
                    </tr>
                    <tr>
                        <td>17030-01769191</td>
                        <td>長距離運転手（大型）</td>
                        <td>大型免許</td>
                    </tr>
                    <tr>
                        <td>17030-01766891</td>
                        <td>大型運転手（北陸三県／大型）</td>
                        <td>大型免許</td>
                    </tr>
                    <tr>
                        <td>17030-01953091</td>
                        <td>事務員</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17030-01954391</td>
                        <td>構内作業員（パートタイム）</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <p class="text">平成１９年６月２日以前に普通乗用車免許取得の方は、下記の乗務が出来ます。<br>上記日付以降の方は、中型又は準中型免許の必要があります。</p>
        <div class="tablewrap_sp00">
            <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/icon_right.svg" class="iconright_sp"
                width="20" height="20" alt="">
            <div class="tablewrap_sp">
                <table>
                    <tr>
                        <td>求人番号</td>
                        <td>職種</td>
                        <td>必要免許</td>
                    </tr>
                    <tr>
                        <td>17030-01768591</td>
                        <td>4t車運転手/日勤</td>
                        <td>中型免許（8t限定可）</td>
                    </tr>
                    <tr>
                        <td>17030-01767291</td>
                        <td>4t車運転手/夜勤</td>
                        <td>中型免許（8t限定可）</td>
                    </tr>
                    <tr>
                        <td>17030-01770691</td>
                        <td>４ｔトラック運転手（北陸3県）</td>
                        <td>中型免許（8t限定可）</td>
                    </tr>
                    <tr>
                        <td>17030-01952191</td>
                        <td>2tトラック運転手</td>
                        <td>準中型（5ｔ限定可）</td>
                    </tr>
                    <tr>
                        <td>17030-01955691</td>
                        <td>ルート配送（パートタイム）</td>
                        <td>中型免許（8t限定可）</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="contact" class="contact_area">
    <h3>CONTACT</h3>
    <p class="sub2">お問い合わせ</p>
    <div class="flexwrap">
        <a href="mailto:center@maruichi-gp.co.jp" class="sp_mail">
            <p>メールでのお問い合わせ</p>
        </a>
        <div>
            <p>お電話でのお問い合わせ</p>
            <div>
                <p class="text01">本社(代表) ：</p>
                <p class="text02">0767-<span>53</span>-0252</p>
            </div>
            <div>
                <p class="text01">配車センター ：</p>
                <p class="text02">0767-<span>54</span>-0252</p>
            </div>
            <div>
                <p class="text01">オートセンター ：</p>
                <p class="text02">0767-<span>52</span>-0252</p>
            </div>
            <p class="text03">営業時間 : 平日 8時-18時、土曜 8時-16時、日曜・祝日 休み</p>
        </div>
        <div>
            <a href="mailto:center@maruichi-gp.co.jp" class="righttop">
                <p>メールでのお問い合わせ</p>
            </a>
            <div class="rightbottom">
                <p>FAXでのお問い合わせ</p>
                <p class="text"><span>本社(代表) ：</span>0767-52-6161</p>
                <p class="text"><span>配車センター ：</span>0767-53-2221</p>
                <p class="text"><span>オートセンター ：</span>0767-52-0254</p>
            </div>
        </div>
    </div>
</div>
<a href="#" class="totop"><img src="<?php echo get_template_directory_uri(); ?>/unyu/img/totop.svg" width="50"
        height="50" alt=""></a>
<p class="copyright">Copyright © Maruichi Unyu Co., Ltd. <br class="sp_block960">All Rights Reserved.</p>
<div class="modal_box">
    <div id="circle_link01" class="modal_wrap">
        <img class="topimg" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal03icon.svg" width="63"
            height="63" alt="">
        <p class="title">自動車整備業</p>
        <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal03img01.jpg" width="659"
            height="297" alt="">
        <p class="text">オートセンターは丸一運輸の自動車整備部門として充実した設備を備え、腕に自信を持った4名の” 熟練整備士 ”が運送サービスの安心・安全な運行を強力にサポートしております。
            自社整備はもちろんの事、軽自動車から乗用車、ディーゼル車・ガソリン車まで、各種車両の点検・整備、および民間車検も行き届いたサービスと共にご提供致します。</p>
        <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal03img02.jpg" width="659"
            height="354" alt="">
        <img class="closebtn" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal_closebtn.svg" width="56"
            height="76" alt="">
    </div>
    <div id="circle_link02" class="modal_wrap">
        <img class="topimg" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01icon.svg" width="63"
            height="67" alt="">
        <p class="title">一般貨物輸送</p>
        <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img01.jpg" width="660"
            height="297" alt="">
        <p class="text">一般貨物輸送では、石川県を基盤とする地場配送から、関東・中京・関西方面まで、多彩・多様な車両ラインアップで、お客様のニーズに的確・丁寧、且つ安心・安全にお応えします。</p>
        <p class="title2">車両紹介</p>
        <div class="wrap_carlist">
            <div>
                <p>セミトレーラー</p>
                <p>9台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_1.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>15トン平車</p>
                <p>6台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_2.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>15トンウイング車</p>
                <p>7台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_3.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>7トンユニック</p>
                <p>1台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_4.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>5トンユニック</p>
                <p>1台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_5.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>4トンウイング</p>
                <p>3台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_6.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>2トン 平車</p>
                <p>2台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal01img02_8.jpg" width="206"
                    height="121" alt="">
            </div>
        </div>
        <p class="title2">主要お取引先</p>
        <table>
            <tr>
                <td>林ベニヤ産業(株)</td>
                <td>(株)フジムラ</td>
                <td>森定興商(株)</td>
                <td>大島産業(株)</td>
            </tr>
            <tr>
                <td>七尾外材(株)</td>
                <td>朝日工業(株)</td>
                <td>明鋼材(株)</td>
                <td>(有)丸谷建材</td>
            </tr>
            <tr>
                <td>シブヤマシナリー(株)</td>
                <td>アサガミ(株)</td>
                <td>信正鋼材(株)</td>
                <td>ブリヂストン物流(株)</td>
            </tr>
            <tr>
                <td>阪和興業グループ</td>
                <td>王子製鉄(株)</td>
                <td>橋本商事</td>
                <td>(株)下保商店</td>
            </tr>
            <tr>
                <td>林友ハウス工業(株)</td>
                <td>双日建材(株)</td>
                <td>(株)新三興鋼管</td>
                <td></td>
            </tr>
            <tr>
                <td>(株)吉川喜商店</td>
                <td>西垣林業(株)</td>
                <td>西村鋼業(株)</td>
                <td></td>
            </tr>
            <tr>
                <td>丸果七尾青果(株)</td>
                <td>都築木材(株)</td>
                <td>三東産業(株)</td>
                <td></td>
            </tr>
        </table>
        <p class="cap">※順不同敬称略。その他 荷主１６０社・協力会社６２社 ＜平成２８年４月更新＞</p>
        <img class="closebtn" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal_closebtn.svg" width="56"
            height="76" alt="">
    </div>
    <div id="circle_link03" class="modal_wrap">
        <img class="topimg" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal04icon.svg" width="90"
            height="70" alt="">
        <p class="title">倉庫保管業</p>
        <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal04img01.jpg" width="659"
            height="297" alt="">
        <p class="text">
            丸一運輸では1,702㎡の広大な倉庫にて、製品の出入庫、保管管理、仕分け分類等の流通加工まで行います。一般貨物の一時的な保管場所としてや、定期貨物の調整保管としてなど、荷主企業様のご要望に応じたサービスをご提案致します。
        </p>
        <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal04img02.jpg" width="659"
            height="354" alt="">
        <img class="closebtn" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal_closebtn.svg" width="56"
            height="76" alt="">
    </div>
    <div id="circle_link04" class="modal_wrap">
        <img class="topimg" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02icon.svg" width="63"
            height="67" alt="">
        <p class="title">専属ルート配送</p>
        <img class="img" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img01.jpg" width="660"
            height="247" alt="">
        <p class="text">専属配送では、石川県内を中心に食料品・青果・飲料・雑貨・
            アルミ製品などの配送を行っております。車両は２トンから４トン車、ウイング車やゲート車、平ボディ・バンボディなど各種車両を取り揃えております。</p>
        <p class="title2">車両紹介</p>
        <div class="wrap_carlist">
            <div>
                <p>4トン保冷車</p>
                <p>20台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_1.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>4トン低温車</p>
                <p>2台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_2.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>3トン保冷車</p>
                <p>6台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_3.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>3トン低温車</p>
                <p>3台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_4.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>2トン箱車</p>
                <p>4台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_5.jpg" width="206"
                    height="121" alt="">
            </div>
            <div>
                <p>2トン保冷車</p>
                <p>8台</p>
                <img src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal02img02_6.jpg" width="206"
                    height="121" alt="">
            </div>
        </div>
        <img class="closebtn" src="<?php echo get_template_directory_uri(); ?>/unyu/img/modal_closebtn.svg" width="56"
            height="76" alt="">
    </div>
</div>
<?php get_footer('unyu'); ?>
</body>

</html>