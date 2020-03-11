<?php
/*
Template Name: taxi-detail
*/
?>
<?php get_header('taxi'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/taxi/css/detail.css" />
<div class="coursetop">
    <div>
        <p>マリンタクシーで行く能登・輪島旅</p>
        <p>Noto & Wajima trip with Marine taxi</p>
    </div>
</div>
<div class="container">
    <div class="goodtime_area">
        <p class="text">
            ここでご紹介する「観光モデルコース」は、各エリアを巡る参考コースとなります。<br>お客様のご希望により、コース内容をアレンジする事もできますので、お気軽にご相談下さい。<br>料金に関するお問合わせや、その他ご相談はお電話・メール・ＦＡＸにてお問い合わせ下さい。
        </p>
    </div>
</div>
<div class="container02">
    <p class="coursetitle sp_none960">NOTO & WAJIMA MODEL COURSE</p>
    <p class="coursetitle sp_block960">NOTO & WAJIMA<br>MODEL COURSE</p>
    <div class="course_list">
        <a href="#noto">
            <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_img01.jpg" width="232" height="143"
                alt="">
            <p class="course"><img src="<?php echo get_template_directory_uri(); ?>/taxi/img/A.svg" width="24"
                    height="24" alt="A"><span>輪島・能登金剛コース</span></p>
        </a>
        <a href="#chirihama">
            <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_img02.jpg" width="232" height="143"
                alt="">
            <p class="course"><img src="<?php echo get_template_directory_uri(); ?>/taxi/img/B.svg" width="24"
                    height="24" alt="B"><span>輪島・千里浜コース</span></p>
        </a>
        <a href="#uchiura">
            <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_img03.jpg" width="232" height="143"
                alt="">
            <p class="course"><img src="<?php echo get_template_directory_uri(); ?>/taxi/img/C.svg" width="24"
                    height="24" alt="C"><span>内浦・輪島コース</span></p>
        </a>
        <a href="#air">
            <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_img04.jpg" width="232" height="143"
                alt="">
            <p class="course"><img src="<?php echo get_template_directory_uri(); ?>/taxi/img/D.svg" width="24"
                    height="24" alt="D"><span>能登空港コース</span></p>
        </a>
        <a href="#ofuku">
            <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_img05.jpg" width="232" height="143"
                alt="">
            <p class="course"><img src="<?php echo get_template_directory_uri(); ?>/taxi/img/E.svg" width="24"
                    height="24" alt="E"><span>能登金剛 往復コース</span></p>
        </a>
        <a href="#notojima">
            <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_img06.jpg" width="232" height="143"
                alt="">
            <p class="course"><img src="<?php echo get_template_directory_uri(); ?>/taxi/img/F.svg" width="24"
                    height="24" alt="F"><span>能登島コース</span></p>
        </a>
    </div>
</div>
<div class="container">
    <div id="noto" class="course_wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/A2.svg" class="no" width="44" height="44"
            alt="A">
        <p class="course">輪島・能登金剛コース</p>
        <p class="hour">所要時間 … 5時間</p>
        <ul id="slider">
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_noto01.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_noto02.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_noto03.jpg" width="450"
                    height="302" alt=""></li>
        </ul>
        <div class="route_wrap">
            <p class="title">コースルート</p>
            <div class="flex_wrap">
                <table>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td rowspan="2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">輪島</td>
                        <td rowspan="2">能登代表の名所「輪島の朝市」や、伝統工芸の粋を凝らした「輪島塗」が見どころ。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">門前</td>
                        <td rowspan="2">荘厳なたたずまいの「大本山總持寺祖院」。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">能登金剛</td>
                        <td rowspan="2">能登半島の定番スポット「巌門」。見晴らしの良い眺望が見どころ。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td></td>
                    </tr>
                </table>
                <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_route_noto.svg" width="292"
                    height="384" alt="">
            </div>
        </div>
    </div>
    <div id="chirihama" class="course_wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/B2.svg" class="no" width="44" height="44"
            alt="B">
        <p class="course">輪島・千里浜コース</p>
        <p class="hour">所要時間 … 8時間</p>
        <ul id="slider2">
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_chirihama01.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_chirihama02.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_chirihama03.jpg" width="450"
                    height="302" alt=""></li>
        </ul>
        <div class="route_wrap">
            <p class="title">コースルート</p>
            <div class="flex_wrap">
                <table>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td rowspan="2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">輪島</td>
                        <td rowspan="2">能登代表の名所「輪島の朝市」や、伝統工芸の粋を凝らした「輪島塗」が見どころ。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">門前</td>
                        <td rowspan="2">荘厳なたたずまいの「大本山總持寺祖院」。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">能登金剛</td>
                        <td rowspan="2">能登半島の定番スポット「巌門」。見晴らしの良い眺望が見どころ。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">千里浜</td>
                        <td rowspan="2">約８kmの波打ち際を一直線に走る、砂浜でできたドライブコース。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td></td>
                    </tr>
                </table>
                <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_route_chirihama.svg" width="292"
                    height="384" alt="">
            </div>
        </div>
    </div>
    <div id="uchiura" class="course_wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/C2.svg" class="no" width="44" height="44"
            alt="C">
        <p class="course">内浦・輪島コース</p>
        <p class="hour">所要時間 … 7時間</p>
        <ul id="slider3">
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_uchiura01.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_uchiura02.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_uchiura03.jpg" width="450"
                    height="302" alt=""></li>
        </ul>
        <div class="route_wrap">
            <p class="title">コースルート</p>
            <div class="flex_wrap">
                <table>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td rowspan="2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">内浦</td>
                        <td rowspan="2">きれいな入り江が続く「九十九湾」や、「恋路海岸」「見附島」などの絶景ポイントが続く。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">禄剛埼</td>
                        <td rowspan="2">能登半島の最北端「禄剛埼灯台」から日本海を望む。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">曽々木</td>
                        <td rowspan="2">冬の波の花が有名な「垂水の滝」、シンボル「窓岩」や書院造の「時國家」見どころが満載。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">輪島</td>
                        <td rowspan="2">能登代表の名所「輪島の朝市」や、伝統工芸の粋を凝らした「輪島塗」が見どころ。</td>
                    </tr>
                    <tr>
                        <td class="noline"></td>
                        <td></td>
                    </tr>
                </table>
                <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_route_uchiura.svg" width="292"
                    height="384" alt="">
            </div>
        </div>
    </div>
    <div id="air" class="course_wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/D2.svg" class="no" width="44" height="44"
            alt="D">
        <p class="course">能登空港コース</p>
        <p class="hour">所要時間 … 6時間</p>
        <ul id="slider4">
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_air01.jpg" width="450" height="302"
                    alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_air02.jpg" width="450" height="302"
                    alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_air03.jpg" width="450" height="302"
                    alt=""></li>
        </ul>
        <div class="route_wrap">
            <p class="title">コースルート</p>
            <div class="flex_wrap">
                <table>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td rowspan="2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">輪島</td>
                        <td rowspan="2">能登代表の名所「輪島の朝市」や、伝統工芸の粋を凝らした「輪島塗」が見どころ。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">曽々木</td>
                        <td rowspan="2">冬の波の花が有名な「垂水の滝」、シンボル「窓岩」や書院造の「時國家」見どころが満載。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">能登空港</td>
                        <td rowspan="2">飛行機の離発着は地元でも観光スポットに。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td></td>
                    </tr>
                </table>
                <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_route_air.svg" width="292"
                    height="384" alt="">
            </div>
        </div>
    </div>
    <div id="ofuku" class="course_wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/E2.svg" class="no" width="44" height="44"
            alt="E">
        <p class="course">能登金剛 往復コース</p>
        <p class="hour">所要時間 … 2時間30分</p>
        <ul id="slider5">
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_oufuku01.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_oufuku02.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_oufuku03.jpg" width="450"
                    height="302" alt=""></li>
        </ul>
        <div class="route_wrap">
            <p class="title">コースルート</p>
            <div class="flex_wrap">
                <table>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td rowspan="2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">能登金剛</td>
                        <td rowspan="2">能登半島の定番スポット「巌門」や、別名”夫婦岩”と呼ばれる「機具岩(はたごいわ)」。日本最古の木造灯台「旧福浦灯台」など能登金剛を重点的に巡るコース。</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td></td>
                    </tr>
                </table>
                <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_route_oufuku.svg" width="292"
                    height="384" alt="">
            </div>
        </div>
    </div>
    <div id="notojima" class="course_wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/F2.svg" class="no" width="44" height="44"
            alt="F">
        <p class="course">能登島コース</p>
        <p class="hour">所要時間 … 3時間</p>
        <ul id="slider6">
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_notojima01.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_notojima02.jpg" width="450"
                    height="302" alt=""></li>
            <li class="slide-item"><img class="slide"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_notojima03.jpg" width="450"
                    height="302" alt=""></li>
        </ul>
        <div class="route_wrap">
            <p class="title">コースルート</p>
            <div class="flex_wrap">
                <table>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td rowspan="2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">能登島</td>
                        <td rowspan="2">
                            「須曽蝦夷穴古墳」や、世界のガラス美術品が並ぶ「能登島ガラス美術館」、ジンベイザメも加わった「のとじま水族館」、全長620mの「ツインブリッジ」など能登島を周遊する観光コース。
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">和倉</td>
                        <td></td>
                    </tr>
                </table>
                <img src="<?php echo get_template_directory_uri(); ?>/taxi/img/course_route_notojima.svg" width="292"
                    height="384" alt="">
            </div>
        </div>
    </div>
</div>

<?php get_footer('taxi'); ?>
<script type="text/javascript">
//スライド
$(function() {
    $(slider).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: "<img class='prevarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_prev.svg' width='22' height='103'>",
        nextArrow: "<img class='nextarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_next.svg' width='22' height='103'>",
        dots: true,
    });
    $(slider2).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: "<img class='prevarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_prev.svg' width='22' height='103'>",
        nextArrow: "<img class='nextarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_next.svg' width='22' height='103'>",
        dots: true,
    });
    $(slider3).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: "<img class='prevarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_prev.svg' width='22' height='103'>",
        nextArrow: "<img class='nextarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_next.svg' width='22' height='103'>",
        dots: true,
    });
    $(slider4).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: "<img class='prevarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_prev.svg' width='22' height='103'>",
        nextArrow: "<img class='nextarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_next.svg' width='22' height='103'>",
        dots: true,
    });
    $(slider5).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: "<img class='prevarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_prev.svg' width='22' height='103'>",
        nextArrow: "<img class='nextarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_next.svg' width='22' height='103'>",
        dots: true,
    });
    $(slider6).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: "<img class='prevarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_prev.svg' width='22' height='103'>",
        nextArrow: "<img class='nextarrow' src='/_system/wp-content/themes/wp-voice/taxi/img/slider_arrow_next.svg' width='22' height='103'>",
        dots: true,
    });
});
</script>
</body>

</html>