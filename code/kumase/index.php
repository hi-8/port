<?php
/*
Template Name: index
*/
?>
<?php get_header(); ?>
<section class="section-v v-top">
    <div class="textarea">
        <p class="date">2020/04/15</p>
        <p class="open">CLINIC OPEN</p>
        <p class="name name-en">KUMASE EYE CLINIC</p>
        <h1 class="name">くませ眼科</h1>
    </div>
    <div class="ob-scroll">
        <p>scroll</p>
        <i></i>
    </div>
</section>
<section class="section-v v-recruit">
    <div class="textarea fadein">
        <img class="recruit-img" src="<?php echo get_template_directory_uri(); ?>/img/top/top_img01.jpg" alt="">
        <h2 class="title">RECRUIT</h2>
        <p class="title jp">採用情報</p>
        <p class="detail">4月に開業予定のくませ眼科では、<br>
            共に働く仲間を募集しています。<br>
            当クリニックの考えや強み、募集職種など<br>
            詳しい情報をご覧ください。</p>
        <a class="c-btn_more" href="/recruit">
            <p>MORE</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/arrow_w.svg" alt="">
        </a>
    </div>
</section>
<section class="section-access">
    <div class="access-inr">
        <div class="textarea fadein">
            <h2 class="title">ACCESS</h2>
            <p class="title jp">アクセス</p>
            <p class="detail">〒701-1202 <br class="sp">岡山市北区楢津66番1<br>
                <!-- <span>TEL：000-000-0000</span> -->
            </p>
        </div>
        <section id="maps" class="fadein"></section>
        <script>
        var MyLatLng = new google.maps.LatLng(34.683032, 133.893313);
        var Options = {
            zoom: 16, //地図の縮尺値
            center: MyLatLng, //地図の中心座標
            mapTypeId: google.maps.MapTypeId.ROADMAP, //地図の種類
            mapTypeControl: false,
            fullscreenControl: false,
            streetViewControl: false,
            zoomControl: false,
            styles: [
                {
                    featureType: 'all',
                    elementType: 'all',
                    stylers: [{
                            hue: '#006d9a'
                        },
                        {
                            lightness: 10
                        },
                        {
                            saturation: -10
                        },
                    ],
                }
            ]
        };
        var map = new google.maps.Map(document.getElementById("maps"), Options);
        var marker = new google.maps.Marker({
            position: MyLatLng,
            map: map,
            title: "くませ眼科"
        });
</script>
    </div>
</section>
<?php get_footer(); ?>