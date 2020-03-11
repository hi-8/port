<?php
/*
Template Name: reserve
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<div class="c--heading1">
    <h1>貸切バス</h1>
</div>
<section id="sec_concept">
    <div class="inr">
        <p class="concept-title">お客様のご利用スタイルに合わせて<br>
            安全・安心・快適な旅をお約束いたします。</p>
        <img class="concept-img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/foot-img_safety.png">
        <p class="concept-detail">丸一観光は、貸切バス事業者安全性評価認定制度<br>
            三ツ星の認定を受けました。<br>
            このマークは、貸切バスをご利用されるお客様が<br>
            安心してバス会社を選択できるよう、安全に対する<br>
            取組状況が優良なバス会社であることを示す<br class="sp">シンボルマークです。<br>
            「SAFETY BUS」（セーフティバス）は、<br>
            安全に対して弛まぬ努力をし続けるバスを意味します。</p>
        <a class="concept-btn" href="<?php global $url_safety;
                                        echo $url_safety; ?>">
            <p>安全性について</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_g-min.svg" alt="">
        </a>
    </div>

</section>
<section id="sec_lineup">
    <h2 class="title">バス車両一覧</h2>
    <div class="inr">
        <ul class="lineup-list">
            <li class="lineup-list-cell">
                <a href="<?php global $url_bus_l;
                            echo $url_bus_l; ?>">
                    <div class="cell-top">
                        <img class="dir" src="<?php echo get_template_directory_uri(); ?>/img/top/large-link_ico.svg">
                        <img class="cell-img"
                            src="<?php echo get_template_directory_uri(); ?>/img/reserve/lineup-la.jpg" alt="">
                    </div>
                    <div class="cell-bottom">
                        <p class="name">
                            大型<span>バス</span>
                        </p>
                        <p class="detail">新型車両を中心としたラインアップ。最新の安全性能と寛げる座席。</p>
                    </div>
                </a>
            </li>
            <li class="lineup-list-cell">
                <a href="<?php global $url_bus_m;
                            echo $url_bus_m; ?>">
                    <div class="cell-top">
                        <img class="dir" src="<?php echo get_template_directory_uri(); ?>/img/top/large-link_ico.svg">
                        <img class="cell-img"
                            src="<?php echo get_template_directory_uri(); ?>/img/reserve/lineup-mid.jpg" alt="">
                    </div>
                    <div class="cell-bottom">
                        <p class="name">
                            中型<span>バス</span>
                        </p>
                        <p class="detail">20名様ほどでもゆったりとした空間、「サロン付き車両」をご希望の方へ。</p>
                    </div>
                </a>
            </li>
            <li class="lineup-list-cell">
                <a href="<?php global $url_bus_s;
                            echo $url_bus_s; ?>">
                    <div class="cell-top">
                        <img class="dir" src="<?php echo get_template_directory_uri(); ?>/img/top/large-link_ico.svg">
                        <img class="cell-img"
                            src="<?php echo get_template_directory_uri(); ?>/img/reserve/lineup-small.jpg" alt="">
                    </div>
                    <div class="cell-bottom">
                        <p class="name">
                            小型<span>バス</span>
                        </p>
                        <p class="detail">少人数での旅行や送迎に適したバス。装備も充実。座席間隔が広い車両も。</p>
                    </div>
                </a>
            </li>
        </ul>

    </div>
</section>
<section id="sec_spot">
    <h2 class="title" data-stt-ignore>MARUII SPOT IN ISHIKAWA<span>丸一観光の石川県おすすめスポット</span></h2>
    <?php
    $stitle_01 = "千里浜なぎさドライブウェイ";
    $sdetail_01 = "延長約8kmの観光道路。日本で唯一、一般の自動車やバスでも砂浜の波打ち際を走ることができる数少ない道路として広く知られています。";
    $stitle_02 = "能登島大橋";
    $sdetail_02 = "和倉地区と能登島地区を結ぶ全長1,050mの石川県で最も長い橋です。現在は、償還完了により無料開放されています。";
    $stitle_03 = "和倉温泉";
    $sdetail_03 = "開湯1200年。七尾湾に面して旅館が並ぶ全国有数の高級温泉街として知られています。";
    $stitle_04 = "兼六園";
    $sdetail_04 = "国の特別名勝指定。六つの優れた景観｢六勝｣を兼ね備えていることからその名が付けられました。岡山の後楽園、水戸の偕楽園並んで日本三名園の一つに数えられています。";
    $stitle_05 = "ひがし茶屋街";
    $sdetail_05 = "金沢三大茶屋街の一つ。国の重要伝統的建造物群保存地区選定。卯辰山山麓を流れる浅野川の川岸には、キムスコ(木虫籠)という出格子がある古い街並みが残っています。";
    $stitle_06 = "主計町茶屋街";
    $sdetail_06 = "金沢三大茶屋街の一つ。国の重要伝統的建造物群保存地区選定。北国街道が浅野川を渡る地点に架かる浅野川大橋の近く、全国初旧町名が復活した地区に位置しています。";
    $stitle_07 = "近江町市場";
    $sdetail_07 = "金沢市民の台所。むさし交差点(武蔵ヶ辻)の南東側一帯に位置し、飲食店や生鮮食品を取り扱う店など142店舗が所狭しと立ち並んでいます。";
    $stitle_08 = "山中温泉";
    $sdetail_08 = "加賀温泉郷の一つ。伝統芸能にふれることができる｢山中座｣をはじめとした観光スポットや、大聖寺川の渓谷沿いなどに温泉旅館が立ち並んでいます。";
    $stitle_09 = "山代温泉";
    $sdetail_09 = "加賀温泉郷の一つ。北陸三県で最大級の温泉街として知られています。";

    ?>
    <div class="view-pc">
        <ul class="modal-thumb-list">
            <li class="modal-thumb-cell" data-izimodal-open=".iziModal_01">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_thumb01.jpg" alt="">
                <div class="modal-thumb-txt">
                    <p>
                        <?php echo $stitle_01; ?>
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico.svg" alt="">
                </div>
            </li>
            <li class="modal-thumb-cell" data-izimodal-open=".iziModal_02">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_thumb02.jpg" alt="">
                <div class="modal-thumb-txt">
                    <p> <?php echo $stitle_02; ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico.svg" alt="">
                </div>
            </li>
            <li class="modal-thumb-cell" data-izimodal-open=".iziModal_03">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_thumb03.jpg" alt="">
                <div class="modal-thumb-txt">
                    <p> <?php echo $stitle_03; ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico.svg" alt="">
                </div>
            </li>
            <li class="modal-thumb-cell" data-izimodal-open=".iziModal_04">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_thumb04.jpg" alt="">
                <div class="modal-thumb-txt">
                    <p> <?php echo $stitle_04; ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico.svg" alt="">
                </div>
            </li>
            <li class="modal-thumb-cell" data-izimodal-open=".iziModal_05">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_thumb05.jpg" alt="">
                <div class="modal-thumb-txt">
                    <p> <?php echo $stitle_05; ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico.svg" alt="">
                </div>
            </li>
            <li class="modal-thumb-cell" data-izimodal-open=".iziModal_06">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_thumb06.jpg" alt="">
                <div class="modal-thumb-txt">
                    <p> <?php echo $stitle_06; ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico.svg" alt="">
                </div>
            </li>
            <li class="modal-thumb-cell" data-izimodal-open=".iziModal_07">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_thumb07.jpg" alt="">
                <div class="modal-thumb-txt">
                    <p> <?php echo $stitle_07; ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico.svg" alt="">
                </div>
            </li>
            <li class="modal-thumb-cell" data-izimodal-open=".iziModal_08">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_thumb08.jpg" alt="">
                <div class="modal-thumb-txt">
                    <p> <?php echo $stitle_08; ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico.svg" alt="">
                </div>
            </li>
            <li class="modal-thumb-cell" data-izimodal-open=".iziModal_09">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_thumb09.jpg" alt="">
                <div class="modal-thumb-txt">
                    <p> <?php echo $stitle_09; ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico.svg" alt="">
                </div>
            </li>
        </ul>
        <!-- モーダル中身 -->
        <div class="iziModal_01 modal-v" data-izimodal-group="spot-group">
            <a data-izimodal-close="" class="close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico_close.svg" alt="">
            </a>
            <p class="modal-v_cmn" data-stt-ignore>MARUII SPOT IN ISHIKAWA</p>
            <img class="modal-v_img" src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v01.jpg" alt="">
            <div class="modal-v_txt">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-check.svg" alt="">
                <div class="inr">
                    <p class="title"> <?php echo $stitle_01; ?></p>
                    <p class="detail"> <?php echo $sdetail_01; ?></p>
                </div>
            </div>
        </div>
        <div class="iziModal_02 modal-v" data-izimodal-group="spot-group">
            <a data-izimodal-close="" class="close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico_close.svg" alt="">
            </a>
            <p class="modal-v_cmn" data-stt-ignore>MARUII SPOT IN ISHIKAWA</p>
            <img class="modal-v_img" src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v02.jpg" alt="">
            <div class="modal-v_txt">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-check.svg" alt="">
                <div class="inr">
                    <p class="title"> <?php echo $stitle_02; ?></p>
                    <p class="detail"> <?php echo $sdetail_02; ?></p>
                </div>
            </div>
        </div>
        <div class="iziModal_03 modal-v" data-izimodal-group="spot-group">
            <a data-izimodal-close="" class="close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico_close.svg" alt="">
            </a>
            <p class="modal-v_cmn" data-stt-ignore>MARUII SPOT IN ISHIKAWA</p>
            <img class="modal-v_img" src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v03.jpg" alt="">
            <div class="modal-v_txt">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-check.svg" alt="">
                <div class="inr">
                    <p class="title"> <?php echo $stitle_03; ?></p>
                    <p class="detail"> <?php echo $sdetail_03; ?></p>
                </div>
            </div>
        </div>
        <div class="iziModal_04 modal-v" data-izimodal-group="spot-group">
            <a data-izimodal-close="" class="close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico_close.svg" alt="">
            </a>
            <p class="modal-v_cmn" data-stt-ignore>MARUII SPOT IN ISHIKAWA</p>
            <img class="modal-v_img" src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v04.jpg" alt="">
            <div class="modal-v_txt">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-check.svg" alt="">
                <div class="inr">
                    <p class="title"> <?php echo $stitle_04; ?></p>
                    <p class="detail"> <?php echo $sdetail_04; ?></p>
                </div>
            </div>
        </div>
        <div class="iziModal_05 modal-v" data-izimodal-group="spot-group">
            <a data-izimodal-close="" class="close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico_close.svg" alt="">
            </a>
            <p class="modal-v_cmn" data-stt-ignore>MARUII SPOT IN ISHIKAWA</p>
            <img class="modal-v_img" src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v05.jpg" alt="">
            <div class="modal-v_txt">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-check.svg" alt="">
                <div class="inr">
                    <p class="title"> <?php echo $stitle_05; ?></p>
                    <p class="detail"> <?php echo $sdetail_05; ?></p>
                </div>
            </div>
        </div>
        <div class="iziModal_06 modal-v" data-izimodal-group="spot-group">
            <a data-izimodal-close="" class="close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico_close.svg" alt="">
            </a>
            <p class="modal-v_cmn" data-stt-ignore>MARUII SPOT IN ISHIKAWA</p>
            <img class="modal-v_img" src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v06.jpg" alt="">
            <div class="modal-v_txt">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-check.svg" alt="">
                <div class="inr">
                    <p class="title"> <?php echo $stitle_06; ?></p>
                    <p class="detail"> <?php echo $sdetail_06; ?></p>
                </div>
            </div>
        </div>
        <div class="iziModal_07 modal-v" data-izimodal-group="spot-group">
            <a data-izimodal-close="" class="close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico_close.svg" alt="">
            </a>
            <p class="modal-v_cmn" data-stt-ignore>MARUII SPOT IN ISHIKAWA</p>
            <img class="modal-v_img" src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v07.jpg" alt="">
            <div class="modal-v_txt">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-check.svg" alt="">
                <div class="inr">
                    <p class="title"> <?php echo $stitle_07; ?></p>
                    <p class="detail"> <?php echo $sdetail_07; ?></p>
                </div>
            </div>
        </div>
        <div class="iziModal_08 modal-v" data-izimodal-group="spot-group">
            <a data-izimodal-close="" class="close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico_close.svg" alt="">
            </a>
            <p class="modal-v_cmn" data-stt-ignore>MARUII SPOT IN ISHIKAWA</p>
            <img class="modal-v_img" src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v08.jpg" alt="">
            <div class="modal-v_txt">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-check.svg" alt="">
                <div class="inr">
                    <p class="title"> <?php echo $stitle_08; ?></p>
                    <p class="detail"> <?php echo $sdetail_08; ?></p>
                </div>
            </div>
        </div>
        <div class="iziModal_09 modal-v" data-izimodal-group="spot-group">
            <a data-izimodal-close="" class="close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-ico_close.svg" alt="">
            </a>
            <p class="modal-v_cmn" data-stt-ignore>MARUII SPOT IN ISHIKAWA</p>
            <img class="modal-v_img" src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v09.jpg" alt="">
            <div class="modal-v_txt">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot-check.svg" alt="">
                <div class="inr">
                    <p class="title"> <?php echo $stitle_09; ?></p>
                    <p class="detail"> <?php echo $sdetail_09; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="view-sp">
        <div class="view-sp-cell">
            <div class="view-sp-cell-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v-sp01.jpg" alt="">
                <p class="name">
                    <?php echo $stitle_01; ?>
                </p>
                <p class="detail">
                    <?php echo $sdetail_01; ?>
                </p>
            </div>
        </div>
        <div class="view-sp-cell">
            <div class="view-sp-cell-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v-sp02.jpg" alt="">
                <p class="name">
                    <?php echo $stitle_02; ?>
                </p>
                <p class="detail">
                    <?php echo $sdetail_02; ?>
                </p>
            </div>
        </div>
        <div class="view-sp-cell">
            <div class="view-sp-cell-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v-sp03.jpg" alt="">
                <p class="name">
                    <?php echo $stitle_03; ?>
                </p>
                <p class="detail">
                    <?php echo $sdetail_03; ?>
                </p>
            </div>
        </div>
        <div class="view-sp-cell">
            <div class="view-sp-cell-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v-sp04.jpg" alt="">
                <p class="name">
                    <?php echo $stitle_04; ?>
                </p>
                <p class="detail">
                    <?php echo $sdetail_04; ?>
                </p>
            </div>
        </div>
        <div class="view-sp-cell">
            <div class="view-sp-cell-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v-sp05.jpg" alt="">
                <p class="name">
                    <?php echo $stitle_05; ?>
                </p>
                <p class="detail">
                    <?php echo $sdetail_05; ?>
                </p>
            </div>
        </div>
        <div class="view-sp-cell">
            <div class="view-sp-cell-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v-sp06.jpg" alt="">
                <p class="name">
                    <?php echo $stitle_06; ?>
                </p>
                <p class="detail">
                    <?php echo $sdetail_06; ?>
                </p>
            </div>
        </div>
        <div class="view-sp-cell">
            <div class="view-sp-cell-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v-sp07.jpg" alt="">
                <p class="name">
                    <?php echo $stitle_07; ?>
                </p>
                <p class="detail">
                    <?php echo $sdetail_07; ?>
                </p>
            </div>
        </div>
        <div class="view-sp-cell">
            <div class="view-sp-cell-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v-sp08.jpg" alt="">
                <p class="name">
                    <?php echo $stitle_08; ?>
                </p>
                <p class="detail">
                    <?php echo $sdetail_08; ?>
                </p>
            </div>
        </div>
        <div class="view-sp-cell">
            <div class="view-sp-cell-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_v-sp09.jpg" alt="">
                <p class="name">
                    <?php echo $stitle_09; ?>
                </p>
                <p class="detail">
                    <?php echo $sdetail_09; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="sec_howto">
    <h2 class="title" data-stt-ignore>HOW TO USE MARUICHI CHARTER BUS<span>丸一貸切バスの使い方一例</span></h2>
    <ul class="howto-list">
        <li class="howto-cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_howto01.jpg" alt="">
            <div class="howto-txt">
                <p>日帰り・宿泊・観光</p>
            </div>
        </li>
        <li class="howto-cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_howto02.jpg" alt="">
            <div class="howto-txt">
                <p>園・学校・病院・会社従業員の送迎</p>
            </div>
        </li>
        <li class="howto-cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_howto03.jpg" alt="">
            <div class="howto-txt">
                <p>部活やクラブの試合・合宿</p>
            </div>
        </li>
        <li class="howto-cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_howto04.jpg" alt="">
            <div class="howto-txt">
                <p>視察・研修旅行・社員旅行</p>
            </div>
        </li>
        <li class="howto-cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_howto05.jpg" alt="">
            <div class="howto-txt">
                <p>冠婚総裁・パーティー・宴会の送迎</p>
            </div>
        </li>
        <li class="howto-cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_howto06.jpg" alt="">
            <div class="howto-txt">
                <p>遠足・修学旅行や子供行事</p>
            </div>
        </li>
        <li class="howto-cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_howto07.jpg" alt="">
            <div class="howto-txt">
                <p>サークル活動やイベント</p>
            </div>
        </li>
        <li class="howto-cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_howto08.jpg" alt="">
            <div class="howto-txt">
                <p>ゴルフ・スキーの送迎</p>
            </div>
        </li>
        <li class="howto-cell">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reserve/spot_howto09.jpg" alt="">
            <div class="howto-txt">
                <p>駅や空港の送迎</p>
            </div>
        </li>
    </ul>
    <div class="howto-attention">
        <p class="title">【注意事項】</p>
        <p class="detail">営業区域は石川県全域および富山県氷見市・小矢部市・南砺市です。<br>
            バス発着地、または発着のいずれかが営業区域内でなければご利用いただけません。</p>
    </div>
</section>
<section id="sec_estimate">
    <div class="form-desc">
        <div class="inr">
            <h2 class="title">貸切バスお見積もりフォーム</h2>
            <p class="detail">
                貸切バスのお見積もりは、下記注意事項をご確認の上、フォームに必要事項をご入力ください。ご依頼いただきました内容についてバス空状況の確認、バス運賃・料金の概算お見積りの結果をメールまたはお電話にてご回答いたします。３営業日以内のご回答いたしますが、返信が来ない場合は恐れ入りますがお電話にてご確認くださいますよう、お願いいたします。(0767-53-6161)
            </p>
        </div>
    </div>
    <div class="form-tell">
        <img class="ico" src="<?php echo get_template_directory_uri(); ?>/img/reserve/form-ico.svg" alt="">
        <p class="desc">お電話からもお問い合わせいただけます。<br class=" sp">お気軽にご相談ください。</p>
        <div class="form-office">
            <div class="inr">
                <div class="kanazawa">
                    <div class="tell-flame">
                        <div class="name">
                            <p>金沢営業所<span>（予約センター）</span></p>
                        </div>
                        <div class="tell">
                            <dl class="num">
                                <dt>Tel.</dt>
                                <dd>
                                    <a href="tel:076-255-0001">076-255-0001</a>
                                </dd>
                            </dl>
                            <dl class="num">
                                <dt>Fax.</dt>
                                <dd>
                                    076-266-0413
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="nanao">
                    <div class="tell-flame">
                        <div class="name">
                            <p>七尾営業所</p>
                        </div>
                        <div class="tell">
                            <dl class="num">
                                <dt>Tel.</dt>
                                <dd>
                                    <a href="tel:0767-53-6161">0767-53-6161
                                    </a>
                                </dd>
                            </dl>
                            <dl class="num">
                                <dt>Fax.</dt>
                                <dd>
                                    0767-52-7456
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
    <div class="form-estimate">
        <div class="inr">
            <div class="attention">
                <p class="title">【注意事項】</p>
                <p class="detail">・バス料金は、北陸信越運輸局公示の公示運賃表に基づいております。<br>
                    ・繁忙時期、曜日等によりバス料金単価が変動致します。<br>
                    ・バス料金の他に、下記金額は別途実費負担となります。ご了承ください。<br>
                    <span>消費税、ガイド料、有料道路利用料、航送料、駐車料、乗務員食事料、乗務員宿泊料、その他特別な負担が必要な金額</span></p>
            </div>
            <div id="form-inr">
                <?php echo do_shortcode('[contact-form-7 id="12" title="お見積もり依頼"]'); ?>
            </div>
        </div>

    </div>
</section>
<?php get_footer(); ?>