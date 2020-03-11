<?php
$url_top = "/";


// 高速バス
$url_exreserve = "/exreserve";
//路線一覧
$url_route = "/exreserve#route";
// 乗り場
$url_platform = "/exreserve/map-on";
// 乗り場印刷
$url_platform_print = "/exreserve/map-print";
// 降り場
$url_platform_off = "/exreserve/map-off";
// お車をご利用の方・駐車場
$url_parking = "/exreserve/parking";
// 車内紹介
$url_car_detail = "/exreserve/interior";
//金沢経由石川→東京
$url_route01 = "/exreserve/route-01";
//金沢経由東京→石川
$url_route02 = "/exreserve/route-02";
//富山経由石川→東京
$url_route03 = "/exreserve/route-03";
//富山経由東京→石川
$url_route04 = "/exreserve/route-04";
//会員
$url_member = "/exreserve/member";
//ポイント
$url_member_point = "/exreserve/member#sec_point_about";
//グリーンライナーポイント規約
$url_member_regulation = "/exreserve/member/regulation";
//グリーンライナーポイント退会
$url_member_withdraw = "/exreserve/member/regulation#sec_withdraw";
//その他のサービス
$url_others = "/exreserve/others";
// 運賃案内
$url_fare = "/exreserve/fare";
//ご利用案内
$url_userguide = "/exreserve/userguide";
//予約方法について
$url_about_reserve = "/exreserve/userguide#sec_reserve";
//支払い方法について
$url_about_payment = "/exreserve/userguide#sec_payment";
//キャンセルについて
$url_about_cancel = "/exreserve/userguide#sec_cancel";
//返金について
$url_about_refound = "/exreserve/userguide#sec_payback";
//乗車にあたって
$url_about_boarding = "/exreserve/userguide#sec_ride";
//よくある質問
$url_faq = "/exreserve/faq";
//トラベル3点セット
$url_trabelset = "/exreserve/interior/#sec_trabelset";
// まいぺーじ
$url_mypage = "https://eexpress.jp/dy/35/common/pc/mypage/menu/";
// まいぺーじ
$url_mypage_sp = "https://eexpress.jp/dy/35/common/mb/mypage/menu/";
// カート
$url_cart = "http://eexpress.jp/dy/35/bus/pc/cart/";
//お知らせ
$url_news = "/#sec_news";
$url_page_news = "/news";



// 貸切バス
$url_reserve = "/reserve";
// 貸切バス詳細or車両紹介
$url_introduce = "/reserve/introduce";
// 大型
$url_bus_l = "/reserve/introduce#sec_bus-l";
// 中型
$url_bus_m = "/reserve/introduce#sec_bus-m";
// 小型
$url_bus_s = "/reserve/introduce#sec_bus-s";
//おすすめスポット
$url_spot = "/reserve#sec_spot";
//お見積もりフォーム
$url_estimate = "/reserve#sec_estimate";


// わたしたちの想い
$url_concept = "/company/concept";
//会社案内
$url_information = "/company/information";
//安全性について
$url_safety = "/company/safety";
//規定（プライバシーポリシー他）
$url_regulation = "/company/regulation";
// プライバシーポリシー
$url_privacy = "/company/regulation#sec_privacy";
// 旅行業遵守への取り組み・標識約款他
$url_compliance = "/company/regulation/#sec_compliance";
//採用情報
$url_recruit = "/company/recruit";
//募集要項
$url_application = "/company/recruit#sec_application";
//エントリー
$url_entry = "/company/recruit#sec_entry";
//よくある質問
$url_r_faq = "/company/recruit#sec_r_faq";
//インタビュー
$url_interview = "/company/recruit/interview";
//福利厚生
$url_system = "/company/recruit/system#sec_system01";
// 研修教育制度について
$url_training = "/company/recruit/system#sec_system02";
//お問い合わせ
$url_contact = "/contact";
// 七尾営業所
$url_nanao = "https://www.google.com/maps?ll=37.044967,136.982081&z=14&t=m&hl=ja&gl=JP&mapclient=embed&cid=8337852510366104581";
// 金沢営業所
$url_kanazawa = "https://www.google.com/maps?ll=36.603641,136.612365&z=16&t=m&hl=ja&gl=JP&mapclient=embed&cid=4331692910038921074";
// グリーンツアー
$url_greentours = "https://greentours.maruichi-gp.co.jp";
// マリン交通(タクシー)
$url_marine = "/marinetaxi";
// 丸一運輸
$url_unyu = "/unyu";
// リーフレット
$url_leaflet = "/pdf/maruichi-leaflet.pdf";
// 比較検索
$url_hikaku = "http://maruichi.tabi-kura.com/dom/s/";
// 100円レンタカー
$url_100yen = "https://100yen-rentacar.jp/store/545.html";
//vipラウンジ新宿
$url_vip = "https://viplounge.jp/shinjuku/lounge/";






// youtube
$url_yt = "https://www.youtube.com/channel/UCmGdMgLjG_RbRmoEnhQw9ZA";
//facebook
$url_fb = "https://www.facebook.com/MaruichKanko";
// instagram
$url_ins = "";

// 空席確認
$url_res_route01 = "http://eexpress.jp/st/35/ja/pc/bus/searchform/index.php?ro=1034001&sk=17&tk=13&skp=16";
$url_res_route02 = "http://eexpress.jp/st/35/ja/pc/bus/searchform/index.php?ro=2034001&sk=13&tk=17&tkp=16";
$url_res_route03 = "http://eexpress.jp/st/35/ja/pc/bus/searchform/index.php?ro=1034001&sk=17&tk=13&skp=16";
$url_res_route04 = "http://eexpress.jp/st/35/ja/pc/bus/searchform/index.php?ro=2034001&sk=13&tk=17&tkp=16";

add_theme_support('post-thumbnails');
function get_thumb_img($size = 'full')
{
    $thumb_id = get_post_thumbnail_id();                         // アイキャッチ画像のIDを取得

    $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得

    $thumb_src = $thumb_img[0];    // 画像のurlだけ取得

    $thumb_alt = get_the_title();  //alt属性に入れるもの（記事のタイトルにしています）

    return '<img src="' . $thumb_src . '" alt="' . $thumb_alt . '">';
}

function wpcf7_main_validation_filter($result, $tag)
{
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim(strtr((string) $_POST[$name], "\n", " "));
    if ('email' == $type || 'email*' == $type) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)) {
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate($tag, "確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'][$name] = '確認用のメールアドレスが一致していません';
                }
            }
        }
    }
    return $result;
}

add_filter('wpcf7_validate_email', 'wpcf7_main_validation_filter', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_main_validation_filter', 11, 2);


function getUserAgent()
{

    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

    return $userAgent;
}

function isSmartPhone()
{


    $ua = getuserAgent();

    if (
        stripos($ua, 'iphone') !== false || // iphone
        stripos($ua, 'ipod') !== false || // ipod
        (stripos($ua, 'android') !== false && stripos($ua, 'mobile') !== false) || // android
        (stripos($ua, 'windows') !== false && stripos($ua, 'mobile') !== false) || // windows phone
        (stripos($ua, 'firefox') !== false && stripos($ua, 'mobile') !== false) || // firefox phone
        (stripos($ua, 'bb10') !== false && stripos($ua, 'mobile') !== false) || // blackberry 10
        (stripos($ua, 'blackberry') !== false) // blackberry
    ) {
        $isSmartPhone = true;
    } else {
        $isSmartPhone = false;
    }

    return $isSmartPhone;
}

if (isSmartPhone()) {
    //スマホの場合の処理

    $url_res_route01 = "http://eexpress.jp/dy/35/bus/mb/searchParts/";
    $url_res_route02 = "http://eexpress.jp/dy/35/bus/mb/searchParts/";
    $url_res_route03 = "http://eexpress.jp/dy/35/bus/mb/searchParts/";
    $url_res_route04 = "http://eexpress.jp/dy/35/bus/mb/searchParts/";
} else {
    //それ以外の場合の処理
}