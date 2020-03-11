<?php
/*
Template Name: parking
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>高速バス 乗り降りば</h1>
</div>
<?php require TEMPLATEPATH . "/module/maps-link.php"; ?>
<section id="sec_maps">
    <h2 class="title">駐車場をご利用の方</h2>
    <dl class="maps-cell">
        <dt>乗りば・駐車場地図</dt>
        <dd>
            <div class="inr">
                <div class="left">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?z=18&mid=1zA502F8UzhBJlfZTZ30206XSzfk&ll=37.075689351256706%2C136.92432810000003">
                        <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                        <p>和倉温泉駅 … 駐車台数／3台　<span>※乗りばまで350m</span></p>
                    </a>
                    <div class="attention">
                        <p>完全事前予約制　<span>(運営：丸一観光）</span><br>
                            高速バス「グリーンライナー」往復ご利用の方専用の駐車場です。片道のみのご利用の方、グリーンライナー以外のお客様の駐車はできません。<br>
                            <span>駐車場ご利用の際は、高速バスのご予約と同時に下記にて駐車場のご予約を行ってください。その際に車種、ナンバーをお知らせください。満車の場合はご利用頂けません。無断利用の場合は、放置車両として取扱い、車両を撤去する等の対応を致します。騒音やゴミのポイ捨て等、他人の迷惑となる行為はおやめ下さい。駐車場内での事故、災害、盗難等については一切責任を負いかねます。</span>
                        </p>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/map_img01.png" alt="">
                </div>
            </div>
        </dd>
        <dd>
            <div class="inr">
                <div class="left">
                    <a target="_blank"
                        href="https://www.google.com/maps/d/u/0/viewer?z=19&mid=1ABhWpEuUVWrp6n08gFiX6XOsg6E&ll=37.04469895016851%2C136.98174014999995">
                        <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                        <p>丸一観光七尾営業所 … 駐車台数／2台</p>
                    </a>
                    <div class="attention">
                        <p>完全事前予約制　<span>(運営：丸一観光）</span><br>
                            高速バス「グリーンライナー」往復ご利用の方専用の駐車場です。片道のみのご利用の方、グリーンライナー以外のお客様の駐車はできません。<br>
                            <span>駐車場ご利用の際は、高速バスのご予約と同時に下記にて駐車場のご予約を行ってください。その際に車種、ナンバーをお知らせください。満車の場合はご利用頂けません。無断利用の場合は、放置車両として取扱い、車両を撤去する等の対応を致します。騒音やゴミのポイ捨て等、他人の迷惑となる行為はおやめ下さい。駐車場内での事故、災害、盗難等については一切責任を負いかねます。</span>
                        </p>
                    </div>
                </div>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/map_img02.png" alt="">
                </div>
            </div>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?z=18&mid=198J-F2XMeWGtikAxaLjw6VuFg-s&ll=36.65990745001207%2C137.00254799999993">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                高岡砺波スマートIC（高岡高速BT）… 駐車台数／90台
            </a>
            <div class="attention">
                <p><span>運営：高岡市（詳しくは<a target="_blank"
                            href="https://www.city.takaoka.toyama.jp/sangyo/doro/kosoku/index.html">コチラ</a>)</span></p>
            </div>
        </dd>
    </dl>
    <a class="tell-cell" href="tel:0767-52-0101">
        <p class="top">
            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/map_img03.svg" alt="">
            駐車場のご予約はコチラまで
            <span>0767-52-0101</span>
        </p>
        <p class="bottom">株式会社丸一観光 七尾本社　[営業時間] 月曜〜金曜 9~18時土曜9~15時／日曜・祝日 休</p>
    </a>
</section>

<?php get_footer(); ?>