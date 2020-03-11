<?php
/*
Template Name: map-on
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>高速バス 乗り降りば</h1>
</div>
<?php require TEMPLATEPATH . "/module/maps-link.php"; ?>
<section id="sec_maps">
    <h2 class="title">乗りば地図</h2>
    <dl class="maps-cell">
        <dt>東京都 乗りば</dt>
        <dd>
            <a target="_blank" href="https://www.google.com/maps/d/viewer?mid=1WW1LzAGYNtg7ypzQaAkxiO2PPjE&usp=sharing">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                東京駅八重洲口 鍛冶橋駐車場
            </a>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.534407708189!2d139.6989291738098!3d35.68846466741187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQxJzE5LjciTiAxMznCsDQyJzAyLjUiRQ!5e0!3m2!1sja!2sus!4v1456276716587">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                バスタ新宿４Ｆ（新宿高速バスターミナル・新宿南口側）
            </a>
            <div class="attention">
                <p>発車番線は「Ａ１」を予定しておりますが、当日変更になる可能性があります。電光掲示板にてご確認ください。</p>
            </div>
        </dd>
    </dl>
    <dl class="maps-cell">
        <dt>千葉県 乗りば</dt>
        <dd>
            <a target="_blank" href="https://www.google.com/maps/d/viewer?mid=1EbyD4gLVDVytFqGyJg7K9QNDZFY&usp=sharing">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                東京ディズニーランド・バスターミナル・ウエスト
            </a>
            <div class="attention">
                <p>２２番線</p>
            </div>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=1b087_kndNyiKZ1qqlWi0QChdtTM&ll=35.62580700000003%2C139.89023999999995&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                東京ディズニーランド・バスターミナル・サウス
            </a>
            <div class="attention">
                <p>１１番線</p>
            </div>
        </dd>
    </dl>
    <dl class="maps-cell">
        <dt>石川県 乗りば</dt>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/viewer?mid=1tGPVk3jQFkqmFq86xUZGtVeXOzg&hl=ja&usp=sharing">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                金沢駅西口 バス乗りば２番
            </a>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=1RdyN7m1K_uiB6cfbdVKo75SpDcY&ll=36.657919%2C136.72957999999994&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                津幡駅前
            </a>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=1UduECG6YTJ1oFurhwwcRp_4MYXQ&ll=36.72238999999999%2C136.70290799999998&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                宇野気駅
            </a>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=16CZCKIKwWNvW7lUxo4DXR--8NmA&ll=36.896329999999985%2C136.78284800000006&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                羽咋駅
            </a>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=1zIToj9XAkAC9zBHB8DG5ho7WZws&ll=37.075249%2C136.92598699999996&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                和倉温泉駅
            </a>
            <div class="attention">
                <p>完全事前予約制のグリーンライナーご利用者専用駐車場完備しております。<span>※詳しくは<a href="<?php global $url_parking;
                                                                            echo $url_parking; ?>">コチラ</a></span></p>
            </div>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=1iTM0Rdz2AFRL7vZnTVPA6vbshTI&ll=37.043579000000015%2C136.96460000000002&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                七尾駅 ミナ．クル前
            </a>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=19kUWEXtLFwlNg_H-RttR8iAKgl4&ll=37.04485499999998%2C136.98201300000005&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                丸一観光七尾営業所
            </a>
            <div class="attention">
                <p>完全事前予約制のグリーンライナーご利用者専用駐車場完備しております。<span>※詳しくは<a href="<?php global $url_parking;
                                                                            echo $url_parking; ?>">コチラ</a></span></p>
            </div>
        </dd>
    </dl>
    <dl class="maps-cell">
        <dt>富山県 乗りば</dt>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=1sDzMKtTL9imIO04oK3Lzzy8kTHs&ll=36.702122%2C137.21386600000005&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                富山駅北口<br>
            </a>
            <div class="attention">
                <p>２番乗りば<br><span>※ロータリー内での送迎車の進入・停車はお控えいただくようお願いいたします。送迎は隣りの駐車場をご利用ください。</span><br>
                    ※富山駅周辺整備の工事に伴い2020年1月31日よりバス停が移設（西側に100m）されますのでご注意ください。1月30日までは「富山駅北口バスのりば」、1月31日以降は「富山駅北口仮広場」です。番線はどちらも２番です。
                </p>
            </div>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=18qPONsIWsPT38xDyxKhs1QrpknI&ll=36.720642%2C137.09170500000005&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                小杉駅駅南口
            </a>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=1xmzm_xNyAwB6MNKLT6DB9lhE7Bc&ll=36.66244639999998%2C137.00288060000003&z=15">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                高岡砺波スマートＩＣ（高岡高速バスターミナル）
            </a>
            <div class="attention">
                <p>２番乗りば<br><span>※高岡砺波スマートIC（高岡高速バスターミナル）は市営無料駐車場を完備しております。</span>
                </p>
            </div>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=15UxQy7mV3W3J6tvrPBCuXbmN-FI&ll=36.73967500000002%2C137.01565299999993&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                高岡駅南口
            </a>
        </dd>
        <dd>
            <a target="_blank"
                href="https://www.google.com/maps/d/u/0/viewer?mid=1Q82T20kBLoZwr1jkJRb-6JcTSog&ll=36.86316099999998%2C136.97542499999997&z=17">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                氷見
            </a>
            <div class="attention">
                <p>ご乗車場所付近の施設、敷地への無断駐車は行わないで下さい。</p>
            </div>
        </dd>
    </dl>
</section>

<?php get_footer(); ?>