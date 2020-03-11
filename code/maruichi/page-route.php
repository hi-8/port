<?php
/*
Template Name: route
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>高速バス</h1>
</div>
<div class="c--tab-list maps">
    <ul class="tab-list-inr">
        <li class="tab-list-cell">
            <a href="<?php global $url_route01;
                        echo $url_route01; ?>">【金沢経由】<br class="sp">
                <span class="pc">石川発 東京行</span>
                <span class="sp">石川▶︎東京</span></a>
        </li>
        <li class="tab-list-cell">
            <a href="<?php global $url_route02;
                        echo $url_route02; ?>">【金沢経由】<br class="sp">
                <span class="pc">東京発 石川行</span>
                <span class="sp">東京▶︎石川</span></a>
        </li>
        <li class="tab-list-cell">
            <a href="<?php global $url_route03;
                        echo $url_route03; ?>">【富山経由】<br class="sp">
                <span class="pc">石川発 東京行</span>
                <span class="sp">石川▶︎東京</span></a>
        </li>
        <li class="tab-list-cell">
            <a href="<?php global $url_route04;
                        echo $url_route04; ?>">【富山経由】<br class="sp">
                <span class="pc">東京発 石川行</span>
                <span class="sp">東京▶︎石川</span></a>
        </li>
    </ul>
</div>
<div class="route-detail">
    <div class="inr">
        <div class="left">
            <div class="route-top">
                <?php if (strpos($_SERVER["REQUEST_URI"], 'route-01') !== false) : ?>
                <p class="via">金沢経由</p>
                <p class="num">GL01</p>
                <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-02') !== false) : ?>
                <p class="via">金沢経由</p>
                <p class="num">GL03</p>
                <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-03') !== false) : ?>
                <p class="via">富山経由</p>
                <p class="num">GL02</p>
                <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-04') !== false) : ?>
                <p class="via">富山経由</p>
                <p class="num">GL04</p>
                <?php endif; ?>
            </div>
            <p class="from-to">
                <?php if (strpos($_SERVER["REQUEST_URI"], 'route-01') !== false) : ?>
                石川発➡︎東京<span>行</span>
                <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-02') !== false) : ?>
                東京発➡︎石川<span>行</span>
                <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-03') !== false) : ?>
                石川発➡︎東京<span>行</span>
                <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-04') !== false) : ?>
                東京発➡︎石川<span>行</span>
                <?php endif; ?>
            </p>
            <img class="inr-map" src="<?php echo get_template_directory_uri(); ?>/img/route/route_c01.svg">
        </div>
        <div class="right">
            <div class="txtarea">
                <p class="txt">【注意事項】<br>
                    ※金沢経由および富山経由の２路線が表示されますのでご注意ください。<br>
                    ※運賃・料金も上記「空席確認・予約受付」より確認できます。<br>
                    （運賃は運行日によって異なります。）</p>
                <img class="cut" src="<?php echo get_template_directory_uri(); ?>/img/route/route_c02.svg">
                <p class="txt">・往復割引の有効期間は、往路乗車日を含めて8日間です。<br>
                    ・往路3列、復路4列など。異なるシートの往復にも適用されます。<br>
                    ・金沢経由便と富山経由便の往復にも適用されます。</p>
                <a class="btn-radi" target="_blank" href="
                <?php if (strpos($_SERVER["REQUEST_URI"], 'route-01') !== false) : ?>
                    <?php global $url_res_route01;
                    echo $url_res_route01; ?>
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-02') !== false) : ?>
                    <?php global $url_res_route02;
                    echo $url_res_route02; ?>
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-03') !== false) : ?>
                    <?php global $url_res_route03;
                    echo $url_res_route03; ?>
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-04') !== false) : ?>
                    <?php global $url_res_route04;
                    echo $url_res_route04; ?>
                    <?php endif; ?>
                    ">
                    <p class="main-txt">予約フォームへ</p>
                    <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_w-min.svg">
                </a>
            </div>
            <img class="bus-img" src="<?php echo get_template_directory_uri(); ?>/img/route/route_c03.png">
        </div>
    </div>
</div>
<?php if (strpos($_SERVER["REQUEST_URI"], 'route-03') !== false) : ?>
<h2 class="change--title">【富山経由】石川発 東京行<span>（〜2020年3月31日）</span></h2>
<?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-04') !== false) : ?>
<h2 class="change--title">【富山経由】東京発 石川行<span>（〜2020年3月31日）</span></h2>
<?php endif; ?>
<section class="sec_timetable">
    <h2 class="title">乗り降りば・時刻表</h2>
    <div class="inr">
        <div class="left">
            <?php if (have_rows('route_cell')) : ?>
            <?php while (have_rows('route_cell')) : the_row(); ?>
            <div class="route-cell">
                <p class="route_time">
                    <?php the_sub_field('route_time'); ?>
                </p>
                <div class="ico-round <?php $routebw = get_sub_field('route_bw') ?>
                                    <?php if ($routebw == 1) : ?>
                    white
                    <?php else : ?>
                    black
                    <?php endif; ?>">
                </div>
                <div class="route_place">
                    <a target="_blank" href="<?php the_sub_field('route_url'); ?>">
                        <?php the_sub_field('route_place'); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="route-liner"></div>
        </div>
        <div class="right">
            <p class="attention">【注意事項】<br>
                ・<span>バスは定刻に出発します。</span>集合場所や出発時刻は必ず事前によくご確認の上、余裕を持ってお越し下さい。<br>
                ・<span>乗車場所に当社指定の駐車場はございません。</span>お車でお越しの方はお近くの有料駐車場をご利用ください。有料駐車場がない場合は、公共交通機関のご利用をお願い致します。ご乗車場所付近の施設、敷地への無断駐車は行わないで下さい。ご乗車されるお客様のお車の駐車に関する盗難、トラブル等に関しては、当社は一切の責任を追いかねます。<br>
                ・道路状況、気象条件等によりスケジュール通り運行ができない場合があります。<br>
                ・都合により4列スタンダード車両に変更になる場合がございます。</p>
            <?php if (strpos($_SERVER["REQUEST_URI"], 'route-01') !== false) : ?>
            <p class="attention">
                ・<a href="https://www.city.takaoka.toyama.jp/sangyo/doro/kosoku/index.html"
                    target="_blank">高岡砺波スマートＩＣ（高岡高速バスターミナル）</a>は、市営無料駐車場を完備しております。（90台）
            </p>
            <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-02') !== false) : ?>
            <p class="attention">
                ・<a href="https://www.city.takaoka.toyama.jp/sangyo/doro/kosoku/index.html"
                    target="_blank">高岡砺波スマートＩＣ（高岡高速バスターミナル）</a>は、市営無料駐車場を完備しております。（90台）
            </p>
            <?php else : ?>
            <p class="attention red">・<span>※富山駅北口ロータリー内での送迎車の進入・停車はお控えいただくようお願いいたします。送迎は隣りの駐車場をご利用ください。</span><br>
                ・<span>※鍛冶橋駐車場内は、現在すべて禁煙となっております。</span></p>
            <?php endif; ?>
        </div>
    </div>
    <a class="against" href="
                    <?php if (strpos($_SERVER["REQUEST_URI"], 'route-01') !== false) : ?>
                    <?php global $url_route02;
                        echo $url_route02; ?>
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-02') !== false) : ?>
                    <?php global $url_route01;
                        echo $url_route01; ?>
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-03') !== false) : ?>
                    <?php global $url_route04;
                        echo $url_route04; ?>
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-04') !== false) : ?>
                    <?php global $url_route03;
                        echo $url_route03; ?>
                    <?php endif; ?>
    ">逆区間を見る
        <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_g-min.svg">
    </a>
    <a class="btn-radi" target="_blank" href="
                <?php if (strpos($_SERVER["REQUEST_URI"], 'route-01') !== false) : ?>
                    /pdf/GL01map.pdf
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-02') !== false) : ?>
                    /pdf/GL03map.pdf
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-03') !== false) : ?>
                    /pdf/map-ntt7.pdf
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-04') !== false) : ?>
                    /pdf/map-ttn4.pdf
                    <?php endif; ?>
                    ">
        <p class="main-txt">乗りばMAP</p>
        <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_w-min.svg">
    </a>
</section>
<section class="sec_route-info">
    <h2 class="title">運行情報</h2>
    <?php if (strpos($_SERVER["REQUEST_URI"], 'route-01') !== false) : ?>
    <table class="info-table">
        <tbody>
            <tr>
                <th>運行形態</th>
                <td>高速乗合バス（路線バス）</td>
            </tr>
            <tr>
                <th>運行会社</th>
                <td>株式会社丸一観光</td>
            </tr>
            <tr>
                <th>実車距離</th>
                <td>3/31まで : 約592.7km<br>
                    4/1以降 : 約590.6km
                </td>
            </tr>
            <tr>
                <th>所用時間</th>
                <td>約11時間</td>
            </tr>
            <tr>
                <th>運転士</th>
                <td>2名</td>
            </tr>
            <tr>
                <th>任意保険</th>
                <td>対人・対物無制限</td>
            </tr>
        </tbody>
    </table>
    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-02') !== false) : ?>
    <table class="info-table">
        <tbody>
            <tr>
                <th>運行形態</th>
                <td>高速乗合バス（路線バス）</td>
            </tr>
            <tr>
                <th>運行会社</th>
                <td>株式会社丸一観光</td>
            </tr>
            <tr>
                <th>実車距離</th>
                <td>3/31まで : 約590km<br>
                    4/1以降 : 約591.9km
                </td>
            </tr>
            <tr>
                <th>所用時間</th>
                <td>約11.2時間</td>
            </tr>
            <tr>
                <th>運転士</th>
                <td>2名</td>
            </tr>
            <tr>
                <th>任意保険</th>
                <td>対人・対物無制限</td>
            </tr>
        </tbody>
    </table>
    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-03') !== false) : ?>

    <table class="info-table">
        <tbody>
            <tr>
                <th>運行形態</th>
                <td>高速乗合バス（路線バス）</td>
            </tr>
            <tr>
                <th>運行会社</th>
                <td>株式会社丸一観光</td>
            </tr>
            <tr>
                <th>実車距離</th>
                <td>約532.4km</td>
            </tr>
            <tr>
                <th>所用時間</th>
                <td>約10.3時間</td>
            </tr>
            <tr>
                <th>運転士</th>
                <td>2名</td>
            </tr>
            <tr>
                <th>任意保険</th>
                <td>対人・対物無制限</td>
            </tr>
        </tbody>
    </table>
    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-04') !== false) : ?>

    <table class="info-table">
        <tbody>
            <tr>
                <th>運行形態</th>
                <td>高速乗合バス（路線バス）</td>
            </tr>
            <tr>
                <th>運行会社</th>
                <td>株式会社丸一観光</td>
            </tr>
            <tr>
                <th>実車距離</th>
                <td>約532.5km</td>
            </tr>
            <tr>
                <th>所用時間</th>
                <td>約10.25時間</td>
            </tr>
            <tr>
                <th>運転士</th>
                <td>2名</td>
            </tr>
            <tr>
                <th>任意保険</th>
                <td>対人・対物無制限</td>
            </tr>
        </tbody>
    </table>
    <?php endif; ?>
    <a class="btn-radi" target="_blank" href="
                <?php if (strpos($_SERVER["REQUEST_URI"], 'route-01') !== false) : ?>
                    <?php global $url_res_route01;
                    echo $url_res_route01; ?>
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-02') !== false) : ?>
                    <?php global $url_res_route02;
                    echo $url_res_route02; ?>
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-03') !== false) : ?>
                    <?php global $url_res_route03;
                    echo $url_res_route03; ?>
                    <?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-04') !== false) : ?>
                    <?php global $url_res_route04;
                    echo $url_res_route04; ?>
                    <?php endif; ?>
                    ">
        <p class="main-txt">予約フォームへ</p>
        <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_w-min.svg">
    </a>
</section>

<?php if (strpos($_SERVER["REQUEST_URI"], 'route-03') !== false) : ?>
<h2 class="change--title">【富山経由】石川発 東京行<span>（2020年4月1日〜）</span></h2>
<section class="sec_timetable">
    <h2 class="title">乗り降りば・時刻表</h2>
    <div class="inr">
        <div class="left">
            <div class="route-cell">
                <p class="route_time">
                    20:00発 </p>
                <div class="ico-round                                                         black
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=19kUWEXtLFwlNg_H-RttR8iAKgl4&amp;ll=37.04485499999998%2C136.98201300000005&amp;z=17">
                        丸一観光七尾営業所</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    20:10発 </p>
                <div class="ico-round                                                         black
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1iTM0Rdz2AFRL7vZnTVPA6vbshTI&amp;ll=37.043579000000015%2C136.96460000000002&amp;z=17">
                        七尾駅 ミナ.クル前</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    21:35発 </p>
                <div class="ico-round                                                         black
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1tGPVk3jQFkqmFq86xUZGtVeXOzg&amp;hl=ja&amp;ll=36.578436999999994%2C136.64608199999998&amp;z=17">
                        金沢駅西口 バスのりば<br>
                        １番または２番</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    22:35発 </p>
                <div class="ico-round                                                         black
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=15UxQy7mV3W3J6tvrPBCuXbmN-FI&amp;ll=36.73967500000002%2C137.01565299999993&amp;z=17">
                        高岡駅南口</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    23:25発<br>
                    (23:15集合) </p>
                <div class="ico-round                                                         black
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1sDzMKtTL9imIO04oK3Lzzy8kTHs&amp;ll=36.702122%2C137.21386600000005&amp;z=17">
                        富山駅北口</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    06:30着 </p>
                <div class="ico-round                                                         white
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1WW1LzAGYNtg7ypzQaAkxiO2PPjE&amp;ll=35.676747000000006%2C139.76623399999994&amp;z=17">
                        東京駅八重洲口 鍛冶橋駐車場</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    07:10着 </p>
                <div class="ico-round                                                         white
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1b087_kndNyiKZ1qqlWi0QChdtTM&amp;ll=35.62580700000003%2C139.89023999999995&amp;z=17">
                        東京ディズニーシー<br>
                        バス・ターミナル・サウス</a>
                </div>
            </div>
            <div class="route-liner"></div>
        </div>
        <div class="right">
            <p class="attention">【注意事項】<br>
                ・<span>バスは定刻に出発します。</span>集合場所や出発時刻は必ず事前によくご確認の上、余裕を持ってお越し下さい。<br>
                ・<span>乗車場所に当社指定の駐車場はございません。</span>お車でお越しの方はお近くの有料駐車場をご利用ください。有料駐車場がない場合は、公共交通機関のご利用をお願い致します。ご乗車場所付近の施設、敷地への無断駐車は行わないで下さい。ご乗車されるお客様のお車の駐車に関する盗難、トラブル等に関しては、当社は一切の責任を追いかねます。<br>
                ・道路状況、気象条件等によりスケジュール通り運行ができない場合があります。<br>
                ・都合により4列スタンダード車両に変更になる場合がございます。</p>
            <p class="attention red">・<span>※富山駅北口ロータリー内での送迎車の進入・停車はお控えいただくようお願いいたします。送迎は隣りの駐車場をご利用ください。</span><br>
                ・<span>※鍛冶橋駐車場内は、現在すべて禁煙となっております。</span></p>
        </div>
    </div>
    <a class="against" href="
                                        /exreserve/route-04                        ">逆区間を見る
        <img class="btn-ico" src="/_system/wp-content/themes/wp-voice/img/cmn/ico_arrow_g-min.svg">
    </a>
    <a class="btn-radi" target="_blank" href="
                                    /pdf/GL02map.pdf
                                        ">
        <p class="main-txt">乗りばMAP</p>
        <img class="btn-ico" src="/_system/wp-content/themes/wp-voice/img/cmn/ico_arrow_w-min.svg">
    </a>
</section>
<section class="sec_route-info">
    <h2 class="title">運行情報</h2>

    <table class="info-table">
        <tbody>
            <tr>
                <th>運行形態</th>
                <td>高速乗合バス（路線バス）</td>
            </tr>
            <tr>
                <th>運行会社</th>
                <td>株式会社丸一観光</td>
            </tr>
            <tr>
                <th>実車距離</th>
                <td>約596.2km</td>
            </tr>
            <tr>
                <th>所用時間</th>
                <td>約11.2時間</td>
            </tr>
            <tr>
                <th>運転士</th>
                <td>2名</td>
            </tr>
            <tr>
                <th>任意保険</th>
                <td>対人・対物無制限</td>
            </tr>
        </tbody>
    </table>
    <a class="btn-radi" target="_blank"
        href="
                                    http://eexpress.jp/st/35/ja/pc/bus/searchform/index.php?ro=1034001&amp;sk=17&amp;tk=13&amp;skp=16                                        ">
        <p class="main-txt">予約フォームへ</p>
        <img class="btn-ico" src="/_system/wp-content/themes/wp-voice/img/cmn/ico_arrow_w-min.svg">
    </a>
</section>
<?php elseif (strpos($_SERVER["REQUEST_URI"], 'route-04') !== false) : ?>
<h2 class="change--title">【富山経由】東京発 石川行<span>（2020年4月1日〜）</span></h2>
<section class="sec_timetable">
    <h2 class="title">乗り降りば・時刻表</h2>
    <div class="inr">
        <div class="left">
            <div class="route-cell">
                <p class="route_time">
                    21:20発<br>
                    (21:10集合) </p>
                <div class="ico-round                                                         black
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1b087_kndNyiKZ1qqlWi0QChdtTM&amp;ll=35.62580700000003%2C139.89023999999995&amp;z=17">
                        東京ディズニーシー<br>
                        バス・ターミナル・サウス１１番線</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    22:30発 </p>
                <div class="ico-round                                                         black
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1WW1LzAGYNtg7ypzQaAkxiO2PPjE&amp;ll=35.676747000000006%2C139.76623399999994&amp;z=17">
                        東京駅八重洲口 鍛冶橋駐車場</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    05:40着 </p>
                <div class="ico-round                                                         white
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1sDzMKtTL9imIO04oK3Lzzy8kTHs&amp;ll=36.702122%2C137.21386600000005&amp;z=17">
                        富山駅北口</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    06:30着 </p>
                <div class="ico-round                                                         white
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=15UxQy7mV3W3J6tvrPBCuXbmN-FI&amp;ll=36.73967500000002%2C137.01565299999993&amp;z=17">
                        高岡駅南口</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    07:20着 </p>
                <div class="ico-round                                                         white
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1tGPVk3jQFkqmFq86xUZGtVeXOzg&amp;hl=ja&amp;ll=36.578436999999994%2C136.64608199999998&amp;z=17">
                        金沢駅西口 バスのりば<br>
                        １番または２番</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    08:35着 </p>
                <div class="ico-round                                                         white
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=1iTM0Rdz2AFRL7vZnTVPA6vbshTI&amp;ll=37.043579000000015%2C136.96460000000002&amp;z=17">
                        七尾駅</a>
                </div>
            </div>
            <div class="route-cell">
                <p class="route_time">
                    08:45着 </p>
                <div class="ico-round                                                         white
                    ">
                </div>
                <div class="route_place">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?mid=19kUWEXtLFwlNg_H-RttR8iAKgl4&amp;ll=37.04485499999998%2C136.98201300000005&amp;z=17">
                        丸一観光七尾営業所</a>
                </div>
            </div>
            <div class="route-liner"></div>
        </div>
        <div class="right">
            <p class="attention">【注意事項】<br>
                ・<span>バスは定刻に出発します。</span>集合場所や出発時刻は必ず事前によくご確認の上、余裕を持ってお越し下さい。<br>
                ・<span>乗車場所に当社指定の駐車場はございません。</span>お車でお越しの方はお近くの有料駐車場をご利用ください。有料駐車場がない場合は、公共交通機関のご利用をお願い致します。ご乗車場所付近の施設、敷地への無断駐車は行わないで下さい。ご乗車されるお客様のお車の駐車に関する盗難、トラブル等に関しては、当社は一切の責任を追いかねます。<br>
                ・道路状況、気象条件等によりスケジュール通り運行ができない場合があります。<br>
                ・都合により4列スタンダード車両に変更になる場合がございます。</p>
            <p class="attention red">・<span>※富山駅北口ロータリー内での送迎車の進入・停車はお控えいただくようお願いいたします。送迎は隣りの駐車場をご利用ください。</span><br>
                ・<span>※鍛冶橋駐車場内は、現在すべて禁煙となっております。</span></p>
        </div>
    </div>
    <a class="against" href="
                                        /exreserve/route-03                        ">逆区間を見る
        <img class="btn-ico" src="/_system/wp-content/themes/wp-voice/img/cmn/ico_arrow_g-min.svg">
    </a>
    <a class="btn-radi" target="_blank" href="
                                    /pdf/GL04map.pdf
                                        ">
        <p class="main-txt">乗りばMAP</p>
        <img class="btn-ico" src="/_system/wp-content/themes/wp-voice/img/cmn/ico_arrow_w-min.svg">
    </a>
</section>
<section class="sec_route-info">
    <h2 class="title">運行情報</h2>

    <table class="info-table">
        <tbody>
            <tr>
                <th>運行形態</th>
                <td>高速乗合バス（路線バス）</td>
            </tr>
            <tr>
                <th>運行会社</th>
                <td>株式会社丸一観光</td>
            </tr>
            <tr>
                <th>実車距離</th>
                <td>約594.0km</td>
            </tr>
            <tr>
                <th>所用時間</th>
                <td>約11.3時間</td>
            </tr>
            <tr>
                <th>運転士</th>
                <td>2名</td>
            </tr>
            <tr>
                <th>任意保険</th>
                <td>対人・対物無制限</td>
            </tr>
        </tbody>
    </table>
    <a class="btn-radi" target="_blank"
        href="
                                    http://eexpress.jp/st/35/ja/pc/bus/searchform/index.php?ro=2034001&amp;sk=13&amp;tk=17&amp;tkp=16                                        ">
        <p class="main-txt">予約フォームへ</p>
        <img class="btn-ico" src="/_system/wp-content/themes/wp-voice/img/cmn/ico_arrow_w-min.svg">
    </a>
</section>
<?php endif; ?>

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
                <a href="<?php global $url_faq;
                            echo $url_faq; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg" alt="">
                    <p>Q&A</p>
                </a>
            </li>
        </ul>
    </div>
</section>
<section id="sec_guide">
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