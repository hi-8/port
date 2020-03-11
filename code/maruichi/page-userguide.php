<?php
/*
Template Name: userguide
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>ご利用案内</h1>
</div>
<div class="c--heading-menu">
    <ul class="heading-menu-list">
        <li class="heading-menu-list_cell">
            <a href="#sec_userguide">ご予約方法について</a>
        </li>
        <li class="heading-menu-list_cell">
            <a href="#sec_payment">お支払方法について</a>
        </li>
        <li class="heading-menu-list_cell">
            <a href="#sec_cancel">変更・キャンセルについて</a>
        </li>
        <li class="heading-menu-list_cell">
            <a href="#sec_payback">ご返金方法について</a>
        </li>
        <li class="heading-menu-list_cell">
            <a href="#sec_ride">ご乗車にあたって</a>
        </li>
    </ul>
</div>
<section id="sec_userguide">
    <section id="sec_guide" class="main-contents">
        <div class="c--txt-content">
            <div class="c--gradient-head">
                <p class="head-name">ご予約方法について</p>
            </div>
            <div class="content-area">
                <p><strong>【ご予約前にご確認ください】</strong><br>
                    ※ご予約は、<span>当日ご乗車の路線の始発７時間半前までご予約可能</span>です。<br>
                    ※グリーンライナーにご乗車になるためには、必ず事前にご予約とご入金が必要となります。<br>
                    ※ご予約は、当日ご乗車の路線の始発７時間半前までご予約可能です。<br>
                    【金沢経由】●石川発→東京行 … <span>13：00締切</span>　　　●東京発→石川行 … <span>13：15締切</span><br>
                    【富山経由】●石川発→東京行 … <span>13：10締切</span>　　　●東京発→石川行 … <span>14：45締切</span><br>
                    ※複数名分を同時にご予約いただく場合で、<span>お客様毎に乗下車地の違う往復予約はできません。</span>（片道予約はできます。）<br>
                    その場合は下記方法でご予約をお願いいたします。<br>
                    ①片道ずつご予約（往復割引は適用されません）<br>
                    ②別々に往復でご予約（席が離れる場合がございます／ご予約完了後に当社まで同グループである旨をご連絡ください。）<br>
                    ③お電話にてご予約（ポイントは付与されません）<br>
                    ※ご予約完了後の変更において、変更できない項目や、払戻手数料が発生する項目がございます。（詳細は
                    <a href="<?php global $url_about_refound;
                                echo $url_about_refound; ?>">コチラ</a>）<br>
                    ※ご予約を変更・キャンセルをされる場合、規定に基づいて払戻手数料が発生いたします。（詳細は<a href="<?php global $url_about_cancel;
                                                                            echo $url_about_cancel; ?>">コチラ</a>）<br>
                    ※ご予約の変更・キャンセルによるご返金方法は、ご予約時の決済方法によって異なります。<br>
                    ご返金方法によっては返金手数料がかかる場合もございます。（詳細は<a href="<?php global $url_about_cancel;
                                                                echo $url_about_cancel; ?>">コチラ</a>）
                </p>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        <span class="step">STEP</span>
                        <span class="step-num">1</span>
                        路線の選択、乗車日の入力
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>高速路線バスのサイドメニューから、<br>
                                ①ご希望の便を選択<br>
                                ②「空席確認・予約受付」をクリック</p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s1_01.jpg" alt="">
                        </dd>
                    </dl>
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>路線検索画面から、<br>
                                ③片道・往復の選択、出発日、ご利用人数を入力し検索 </p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s1_02.jpg" alt="">
                        </dd>
                    </dl>
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>④ご希望の便を確認<br>
                                ⑤選択してください。 </p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s1_03.jpg" alt="">
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        <span class="step">STEP</span>
                        <span class="step-num">2</span>
                        乗下車地、利用者人数の入力、シートタイプ選択
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>①乗降車地、<br>
                                ②利用者人数を選択し次へすすみます。<br><br>
                                グループ予約で、乗下車地がそれぞれ違う場合は、<br>
                                <span>★</span>「別の乗車区間を選択する」をクリックし、それぞれ設定してください。（複数名分を同時にご予約いただく場合で、お客様毎に乗下車地の違う往復予約はできません。）
                            </p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s2_01.jpg" alt="">
                        </dd>
                    </dl>
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>③料金を確認の上、<br>
                                ④シートタイプ選択し、</p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s2_02.jpg" alt="">
                        </dd>
                    </dl>
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>⑤内容確認の上<br>
                                ⑥カートに入れていただき、 </p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s2_03.jpg" alt="">
                        </dd>
                    </dl>
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>⑦予約へお進みください。</p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s2_04.jpg" alt="">
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        <span class="step">STEP</span>
                        <span class="step-num">3</span>
                        ログイン、新規会員登録
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>予約には会員登録が必要です。<br><br>
                                すでに会員の方は<br>
                                ①メールアドレス（ログインID）とパスワードを入力しログインしてください。<br><br>
                                まだ会員でない方は<br>
                                ②③新規会員登録をおこなってください。
                            </p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s3_01.jpg" alt="">
                        </dd>
                    </dl>
                    <dl class="contents-cell">
                        <dt class="left"></dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s3_02.jpg" alt="">
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        <span class="step">STEP</span>
                        <span class="step-num">4</span>
                        お客様情報、お支払方法の入力
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>①ご乗車されるお客様の情報（氏名、メールアドレス、同乗者氏名、乗車代表者など）を入力・確認をして次へお進みください。なお、予約者が乗車にならない場合などは、実際にご乗車される方の緊急連絡先をご入力してください。
                            </p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s4_01.jpg" alt="">
                        </dd>
                    </dl>
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>②料金のお支払い方法もお選びいただき、<br>
                                ③次へお進みください。なおご予約後のお支払い方法の変更は出来ませんので、ご注意ください。</p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s4_02.jpg" alt="">
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        <span class="step">STEP</span>
                        <span class="step-num">5</span>
                        ご予約方法、キャンセル料の確認、予約完了
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <dt class="left">
                            <p>ご予約情報、キャンセル料、旅行条件書の確認をご確認の上、「予約を完了する」をクリックしてください。（予約日によって取消料が発生する場合があります。）予約番号はご乗車の際に必要になりますので、出発当日は「予約受付確認書」を印刷したものか、「予約番号」をご持参ください。
                            </p>
                        </dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s5_01.jpg" alt="">
                        </dd>
                    </dl>
                    <dl class="contents-cell">
                        <dt class="left"></dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s5_02.jpg" alt="">
                        </dd>
                    </dl>
                    <dl class="contents-cell">
                        <dt class="left"></dt>
                        <dd class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_s5_03.jpg" alt="">
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <section id="sec_payment" class="main-contents">
        <div class="c--txt-content">
            <div class="c--gradient-head">
                <p class="head-name">お支払方法について</p>
            </div>
            <div class="content-area">
                <p>お支払方法は、コンビニ決済、ゆうちょ銀行、クレジットカード、ネットバンク、ポイント決済がございます。（いずれもお支払手数料無料）<br>
                    なお、ご予約日にあわせてご入金期日があります。<br>
                    期日までにご入金がない場合はご予約を自動キャンセルさせていただきますので、ご了承ください。
                </p>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        コンビニ決済
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <dt class="top">
                            <p>【ご利用可能なコンビニエンスストア】</p>
                        </dt>
                        <dd class="bottom">
                            <div class="img-wrapper">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>コンビニ名</th>
                                            <th>詳細</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_01.jpg">
                                            </td>
                                            <td>
                                                <p>
                                                    ローソンのお店にて、現金でお支払いできます。<br>
                                                    <a target="_blank"
                                                        href="https://www.econtext.jp/support/cvs/lawson.html">お支払方法はコチラ</a>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_02.jpg">
                                            </td>
                                            <td>
                                                <p>ファミリーマートのお店にて、現金でお支払いできます。<br>
                                                    <a target="_blank"
                                                        href="https://www.econtext.jp/support/cvs/familymart.html">お支払方法はコチラ</a>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_03.jpg">
                                            </td>
                                            <td>
                                                <p>セイコーマートの北海道及び関東地区のお店にて、現金でお支払いできます。<br>
                                                    <a target="_blank"
                                                        href="https://www.econtext.jp/support/cvs/seicomart.html">お支払方法はコチラ</a>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_04.jpg">
                                            </td>
                                            <td>
                                                <p>ミニストップのお店にて、現金でお支払いできます。<br>
                                                    <a target="_blank"
                                                        href="https://www.econtext.jp/support/cvs/lawson.html">お支払方法はコチラ</a>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="attention">※予約番号とお支払受付番号は異なりますので、お支払いに際はご注意ください。<br>
                                ※ご出発日当日は、お支払いの際に受け取られた領収書をご提示ください。</p>
                            <div class="img-wrapper">

                            </div>
                        </dd>
                    </dl>
                    <dl class="contents-cell second">
                        <dt class="top">
                            <p>【入金期限ルール】</p>
                        </dt>
                        <dd class="bottom">
                            <div class="img-wrapper">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <p>ご予約日</p>
                                            </th>
                                            <th>
                                                <p>ご出発の8日以上前</p>
                                            </th>
                                            <th>
                                                <p>ご出発の7日前〜3日前</p>
                                            </th>
                                            <th>
                                                <p>ご出発の2日前〜当日</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <p>ご入金期日</p>
                                            </th>
                                            <td>
                                                <p>ご予約日を含めて7日目<br>の23:59まで </p>
                                            </td>
                                            <td>
                                                <p>ご予約日を含めて3日目<br>の23:59まで</p>
                                            </td>
                                            <td>
                                                <p>ご出発まで</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </dd>
                    </dl>
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_05.svg">
                    </div>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        ゆうちょ銀行<br>
                        （ATM、ゆうちょダイレクト）
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <div class="img-wrapper">
                        <table id="yucho">
                            <tbody>
                                <tr>
                                    <td>
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_06.jpg">
                                    </td>
                                    <td>
                                        <p>上記マーク表記のあるゆうちょ銀行／郵便局ATMと、ゆうちょダイレクト（インターネットサービス）にてお支払いできます。
                                            <a target="_blank"
                                                href="https://www.econtext.jp/support/atm/index.html">お支払方法はコチラ</a>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <dl class="contents-cell second">
                        <dt class="top">
                            <p>【入金期限ルール】</p>
                        </dt>
                        <dd class="bottom">
                            <div class="img-wrapper">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <p>ご予約日</p>
                                            </th>
                                            <th>
                                                <p>ご出発の8日以上前</p>
                                            </th>
                                            <th>
                                                <p>ご出発の7日前〜3日前</p>
                                            </th>
                                            <th>
                                                <p>ご出発の2日前〜当日</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <p>ご入金期日</p>
                                            </th>
                                            <td>
                                                <p>ご予約日を含めて7日目<br>の23:59まで </p>
                                            </td>
                                            <td>
                                                <p>ご予約日を含めて3日目<br>の23:59まで</p>
                                            </td>
                                            <td>
                                                <p>ご出発まで</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </dd>
                    </dl>
                    <div class="img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_05.svg">
                    </div>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        クレジットカード
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <dt class="top">
                            <p>【ご利用可能なクレジットカード】</p>
                        </dt>
                        <dd class="bottom">
                            <div class="img-wrapper">
                                <table id="credit">
                                    <tbody>
                                        <tr>
                                            <th>クレジットカード名</th>
                                            <th>詳細</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_07.jpg">
                                            </td>
                                            <td rowspan="4">
                                                <p>
                                                    利用可能なクレジットカードは、VISA・マスター・JCB・AMEXとなります。<br>
                                                    会員登録（無料）時にお客様のクレジットカード情報を最大5件ご登録いただけます。（任意）<br>
                                                    ご登録いただくと、次回以降のご利用時に自動反映されますので、その都度クレジットカード情報の入力が不要となります。<br>
                                                    （自動反映されたカード情報は、下4桁のみ表示します。）<br><br>
                                                    ※AMEXをご利用のお客様は、ご入力いただくカード番号が15桁となっておりますので、ご予約フォームには4桁－4桁－4桁－3桁でご入力ください。
                                                    　
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_08.jpg">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_09.jpg">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_10.jpg">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        ネットバンク
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <dd class="bottom">
                            <div class="img-wrapper">
                                <table id="netbank">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_11.jpg">
                                            </td>
                                            <td rowspan="2">
                                                <p>
                                                    ネットバンクでお支払いを希望される場合は各ネットバンクの口座が必要になります。　
                                                    <a target="_blank"
                                                        href="https://www.econtext.jp/support/netbank/index.html">お支払方法はコチラ</a>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_12.jpg">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        ポイント決済
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            獲得されたグリーンライナーポイントは、当サイト（パソコン、ケータイ・スマホサイト）でのオンライン予約のお支払いにご利用いただけます。ポイントは、1ポイントを1円とし、一度の決済で最低100ポイントから最大30,000ポイントまでご利用いただけます。<a
                                href="<?php global $url_member_point;
                                                                                                                                                                    echo $url_member_point; ?>">（グリーンライナーポイントについて）</a><br><br>
                            ※ 全額ポイントにて決済をされる場合は、お手数ですが決済情報入力画面でご利用ポイントをご入力の上、「コンビニエンスストア・ゆうちょ銀行・インターネットバンク 」をご選択ください。
                        </p>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <section id="sec_receipt" class="main-contents">
        <div class="c--txt-content">
            <div class="c--gradient-head">
                <p class="head-name">領収書発行について</p>
            </div>

            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        領収書発行に関する注意事項
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            ・マイページより発行が可能です。<br>
                            ・バス到着の3日後（旅行終了の3日後）より発行可能です。<br>
                            ・クレジットカードでのお支払の場合のみ出力可能です。<br>
                            ※「コンビニ決済」をご利用の場合には、コンビニで発行されるものが領収書となります。<br>
                            ・マイページからは1回のみ発行が可能です。発行後は表示が変わり、ボタンが押せなくなります。<br>
                            ・ポイント利用額は領収書の額面に含まれません。<br>
                            ・宛名が未入力の場合「予約者」の名前が記載されます。
                        </p>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        領収書発行の流れ
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            ・ログイン後マイページから「過去の予約一覧」に進み、領収書を発行したいご予約の予約内容確認をクリックしてください。<br>
                            ・予約内容詳細画面より、領収書の宛名を入力の上、領収書出力ボタンをクリックしてください。<br>
                            　※宛名が未入力の場合「予約者」の名前が記載されます。<br>
                            　※マイページからは1回のみ発行が可能です。発行後は表示が変わり、ボタンが押せなくなります。<br>
                            ・確認画面が表示されますので、領収書の宛名を確認の上、「出力」をクリックしてください。<br>
                            ・領収書が表示されますので、印刷してご利用ください。<br>
                            　※「コンビニ決済」をご利用の場合には、コンビニで発行されるものが領収書となります。
                        </p>
                    </dl>
                </div>

            </div>
        </div>
    </section>
    <section id="sec_cancel" class="main-contents">
        <div class="c--txt-content">
            <div class="c--gradient-head">
                <p class="head-name">変更・キャンセル方法について</p>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        確認・変更・キャンセルは「マイページ」から可能です。
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            ・当サイト、またはケータイ・スマホサイトの「<a
                                href="<?php global $url_mypage;
                                                            echo $url_mypage; ?>">マイページ</a>」からオンラインで直接ご予約内容の確認・変更・キャンセルができます。ご予約変更・キャンセルは規定に応じて払戻手数料が発生します。<br>
                            また変更については、変更できない項目もございます。その場合は一度キャンセルし、新たに新規ご予約が必要となり、キャンセルを行う日によって払戻手数料が発生します。詳しくは「<a
                                href="#exchange">変更可能な項目・払戻手数料が発生する項目</a>」をご確認ください。<br>
                            ・マイページのご利用はログインが必要です。<br>
                            ・ご出発当日の、始発出発７時間半前までは、マイページにて乗下車地変更・人数増減・キャンセルが可能です。<br>
                            ・ご出発当日の、始発出発７時間半前から出発時間までは、マイページにてキャンセルのみ可能です。<br>
                            ・お電話でご予約いただいた内容の変更・キャンセルは、マイページから操作いただけません。お電話でのお手続きをお願いします。
                        </p>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        電話での予約変更・キャンセルも受け付けております。
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            営業時間内でのお電話によるご予約確認・変更・キャンセルも承っております。ご予約変更・キャンセルは規定に応じて払戻手数料が発生します。営業時間外でのお電話は、翌営業日扱いの受付となりますのでご了承ください。<br>
                            また、メール・FAXでのご予約・変更・キャンセル依頼は一切お受けしておりません。
                        </p>
                        <div class="telbox">
                            <div class="box-inr">
                                <a class="tel" href="tel:0767-52-0101">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_tel-k.svg">
                                </a>
                                <a class="tel" href="tel:076-266-4401">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_tel-n.svg">
                                </a>
                            </div>
                            <p>[営業時間] 月曜〜金曜 9~18時／土曜9~15時／日曜・祝日 休</p>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="open-area" id="exchange">
                <a class="open-btn">
                    <p class="name">
                        変更可能な項目・払戻手数料が発生する項目
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            ・当サイト、またはケータイ・スマホサイトの「<a
                                href="<?php global $url_mypage;
                                                            echo $url_mypage; ?>">マイページ</a>」からオンラインで直接ご予約内容の確認・変更・キャンセルができます。ご予約変更・キャンセルは規定に応じて払戻手数料が発生します。<br>
                            また変更については、変更できない項目もございます。その場合は一度キャンセルし、新たに新規ご予約が必要となり、キャンセルを行う日によって払戻手数料が発生します。詳しくは「変更可能な項目・払戻手数料が発生する項目」をご確認ください。<br>
                            ・マイページのご利用はログインが必要です。<br>
                            ・ご出発当日の、始発出発７時間半前までは、マイページにて乗下車地変更・人数増減・キャンセルが可能です。<br>
                            ・ご出発当日の、始発出発７時間半前から出発時間までは、マイページにてキャンセルのみ可能です。<br>
                            ・お電話でご予約いただいた内容の変更・キャンセルは、マイページから操作いただけません。お電話でのお手続きをお願いします。
                        </p>
                    </dl>
                    <dl class="contents-cell second">
                        <dt class="top">
                            <p>【マイページにて変更可能な項目一覧】</p>
                        </dt>
                        <dd class="bottom">
                            <div class="img-wrapper">
                                <table class="exchange-contents">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <p>項目</p>
                                            </th>
                                            <th>
                                                <p>変更<br>
                                                    可否</p>
                                            </th>
                                            <th>
                                                <p>払戻手数料</p>
                                            </th>
                                            <th>
                                                <p>補足</p>
                                            </th>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>出発日</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>予約のキャンセルおよび再予約が必要となります。<br>
                                                    （往復予約で、片道または往復日付変更の場合も同様）<br>
                                                    ※キャンセル時に規定の払戻手数料がかかります。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>便</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>予約のキャンセルおよび再予約が必要となります。<br>
                                                    ※キャンセル時に規定の払戻手数料がかかります。<br>
                                                    例）金沢便から富山便の変更</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>シートタイプ</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>予約のキャンセルおよび再予約が必要となります。<br>
                                                    ※キャンセル時に規定の払戻手数料がかかります。<br>
                                                    例）４列シート⇒３列シートの変更</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗下車地（同一金額）</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>非対象</p>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗下車地（差額あり）</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>差額の追加入金若しくは返金あり<br>
                                                    <span>変更はお電話にて承ります。</span><br>
                                                    例）乗車地「金沢」を「七尾」に変更</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>片道 ⇒ 往復</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>予約のキャンセルおよび再予約が必要となります。<br>
                                                    ※キャンセル時に規定の払戻手数料がかかります。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>往復 ⇒ 片道</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p><span>変更はお電話にて承ります。</span><br>
                                                    キャンセルする便に対して払戻し手数料がかかります。<br>
                                                    また、往復割引適用外となります。<br>
                                                    ※手数料については<a href="#commission">コチラ</a>をご確認ください。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>人数増</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>-</p>
                                            </td>
                                            <td>
                                                <p>同じ便の予約人数を追加する場合は、マイページの<br>
                                                    「予約変更」より「乗車区間・乗車人数の変更」を<br>
                                                    選択することで追加いただけます。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>人数減</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>同じ便の予約人数を追加する場合は、マイページの<br>
                                                    「予約変更」より「乗車区間・乗車人数の変更」を<br>
                                                    選択することで追加いただけます。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗客の氏名</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>非対象</p>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗客の性別</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>非対象</p>
                                            </td>
                                            <td>
                                                <p><span>変更はお電話にて承ります。</span>
                                                    座席割の関係上、変更できない場合がございます。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗客区分</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>非対象</p>
                                            </td>
                                            <td>
                                                <p><span>変更はお電話にて承ります。</span>
                                                    例）大人⇒学生、小人⇒大人などの変更</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </dd>
                    </dl>
                    <dl class="contents-cell second">
                        <dt class="top">
                            <p>【お電話にて変更可能な項目一覧】</p>
                        </dt>
                        <dd class="bottom">
                            <div class="img-wrapper">
                                <table class="exchange-contents">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <p>項目</p>
                                            </th>
                                            <th>
                                                <p>変更<br>
                                                    可否</p>
                                            </th>
                                            <th>
                                                <p>払戻手数料</p>
                                            </th>
                                            <th>
                                                <p>補足</p>
                                            </th>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>出発日</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>予約のキャンセルおよび再予約が必要となります。<br>
                                                    （往復予約で、片道または往復日付変更の場合も同様）<br>
                                                    ※キャンセル時に規定の払戻手数料がかかります。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>便</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>予約のキャンセルおよび再予約が必要となります。<br>
                                                    ※キャンセル時に規定の払戻手数料がかかります。<br>
                                                    例）金沢便から富山便の変更</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>シートタイプ</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>予約のキャンセルおよび再予約が必要となります。<br>
                                                    ※キャンセル時に規定の払戻手数料がかかります。<br>
                                                    例）４列シート⇒３列シートの変更</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗下車地（同一金額）</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>非対象</p>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗下車地（差額あり）</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>非対象</p>
                                            </td>
                                            <td>
                                                <p>差額の追加入金若しくは返金あり<br>
                                                    例）乗車地「金沢」を「七尾」に変更</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>片道 ⇒ 往復</p>
                                            </th>
                                            <td>
                                                <p>×</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>予約のキャンセルおよび再予約が必要となります。<br>
                                                    ※キャンセル時に規定の払戻手数料がかかります。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>往復 ⇒ 片道</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p><span>変更はお電話にて承ります。</span><br>
                                                    キャンセルする便に対して払戻し手数料がかかります。<br>
                                                    また、往復割引適用外となります。<br>
                                                    ※手数料については<a href="#commission">コチラ</a>をご確認ください。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>人数増</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>-</p>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>人数減</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>対象</p>
                                            </td>
                                            <td>
                                                <p>変更時に、減員人数に対して規定の払戻手数料が<br>
                                                    かかります。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗客の氏名</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>非対象</p>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗客の性別</p>
                                            </th>
                                            <td>
                                                <p>△</p>
                                            </td>
                                            <td>
                                                <p>非対象</p>
                                            </td>
                                            <td>
                                                <p>
                                                    座席割の関係上、変更できない場合がございます。</p>
                                            </td>
                                        </tr>
                                        <tr class="item">
                                            <th>
                                                <p>乗客区分</p>
                                            </th>
                                            <td>
                                                <p>◯</p>
                                            </td>
                                            <td>
                                                <p>非対象</p>
                                            </td>
                                            <td>
                                                <p>
                                                    例）大人⇒学生、小人⇒大人などの変更</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="attention">
                                新規予約として追加人数分をご予約の場合で、お近くのお座席をご希望の場合は、ご予約完了後に当社まで同グループである旨をご連絡ください。可能な限り同グループのお客様としてお近くのお座席をご用意いたします。
                            </p>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        キャンセル
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            ・ご予約をキャンセルされる場合、規定の払戻手数料が発生します。<br>
                            ・出発日・便・シートタイプの変更もキャンセルの対象となります。<br>
                            ・詳しい払戻手数料は「<a href="#commission">払戻手数料について</a>」をご確認ください。<br>
                            ・未入金状態でも、予約変更・キャンセルが可能です。<br>
                            ・キャンセルが完了すると予約取消確認書が届きます。必ずご確認お願い致します。（取消された内容はマイページからもご確認いただけます。）
                        </p>
                    </dl>
                </div>
            </div>
            <div class="open-area" id="commission">
                <a class="open-btn">
                    <p class="name">
                        払戻手数料について
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            ご予約をキャンセルされる場合、規定に基づいて払戻手数料が発生します。なお、ご予約の変更を行う場合も払戻手数料が発生する場合がございますので、「<a
                                href="#exchange">変更可能な項目・払戻手数料が発生する項目</a>」をご確認ください。
                        </p>
                        <dl class="contents-cell">
                            <dt class="top">
                                <p>【払戻手数料表】</p>
                            </dt>
                            <dd class="bottom">
                                <div class="img-wrapper">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>予約変更／キャンセルの連絡日<br>
                                                    （乗車日の前日から起算してさかのぼって）</th>
                                                <th>払戻手数料</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>11日目まで</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        無料
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>10日目から8日目まで</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        運賃・料金の20％
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>7日目から1日目まで</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        運賃・料金の30％
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>当日（発車前まで）</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        運賃・料金の30％
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>出発後</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        運賃・料金の100％
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="attention">※予約番号とお支払受付番号は異なりますので、お支払いに際はご注意ください。<br>
                                    ※ご出発日当日は、お支払いの際に受け取られた領収書をご提示ください。</p>
                                <div class="img-wrapper">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_13.svg">
                                </div>
                            </dd>
                        </dl>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        往復割引適用のキャンセルについて
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            お支払い金額に払戻手数料率をかけた金額が払戻手数料になります。<br>
                            例：往路５０００円、復路６０００円、往復割引５００円、往路払戻手数料率３０％、復路払戻手数料２０％の場合<br>
                            　　お支払金額が　１０５００円<br>
                            　　往復割引は往路・復路それぞれ－２５０円ずつ引いて計算するので<br>
                            　　往路払戻手数料は　（５０００円－往復割引２５０円）×３０％＝１４２５円<br>
                            　　復路払戻手数料は　（６０００円－往復割引２５０円）×２０％＝１１５０円<br>
                            　　ご返金は　　　１０５００円－（１４２５円＋１１５０円）＝７９２５円<br><br>
                            払戻手数料は、キャンセルする便に対して往復割引250円を差し引いた金額に払戻手数料率をかけます。<br>
                            払戻手数料率は、キャンセルする便の日にちに対して計算されます。<br>
                            例：往路５０００円、復路６０００円、往復割引５００円、往路キャンセルで払戻手数料率３０％の場合<br>
                            　　払戻手数料は　（５０００円－２５０円）×３０％円＝１４２５円<br>
                            　　復路予約分は　復路支払い分（６０００円－２５０円）＋往復予約適用除外分２５０円＝６０００円<br>
                            　　お支払金額が　１０５００円なので<br>
                            　　ご返金は　　　１０５００円－（復路６０００円＋手数料１４２５円）＝３０７５円<br><br>

                            例：往路５０００円、復路６０００円、往復割引５００円、復路キャンセルで払戻手数料率０％の場合<br>
                            　　払戻手数料は　（６０００円－２５０円）×０％＝０円<br>
                            　　往路予約分は　往路支払い分（５０００円－２５０円）＋往復予約適用除外分２５０円＝５０００円<br>
                            　　お支払金額が　１０５００円なので<br>
                            　　ご返金は　　　１０５００円－（往路５０００円＋手数料０円）＝５５００円
                        </p>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <section id="sec_payback" class="main-contents">
        <div class="c--txt-content">
            <div class="c--gradient-head">
                <p class="head-name">ご返金方法について</p>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        クレジットカードで決済を行われた方
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            クレジットカードで決済された運賃・料金の返金は、<span>クレジットカードでご返金（返金手数料無料）</span>となります。<br>
                            お客様がお持ちのクレジットカードの締切日と、ご予約・取消（キャンセル/人員減）をした日によって、それぞれ処理が異なりますので、ご了承ください。<br><br>
                            ① 請求確定前にご返金が生じた場合<br>
                            変更・キャンセル後の代金との差額を、クレジットご利用の口座にご返金いたします。<br>
                            ※請求確定前にご返金が生じた場合でも、クレジットカード会社の締め日により、ご旅行代金が一旦お引き落とされた後にご返金される場合もございます。<br>
                            ② 請求確定後にご返金が生じた場合<br>
                            ご請求額が一旦全額引き落としされた後、後日変更・キャンセル後の運賃・料金との差額を、クレジットご利用の口座にご返金いたします。<br>
                            ※クレジットカードの締日によっては、ご返金までに１～2ヵ月ほどお時間がかかる場合がございますので、ご了承ください。各カード会社の締切日及び支払日（口座振替日）については、当社でお調べできません。どの方法で、返金・請求がされたかにつきましては、カード会社からのご利用明細書でご確認ください。
                        </p>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        コンビニ・ゆうちょ銀行・口座振替・ネットバンクで決済を行われた方
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            コンビニ・ゆうちょ銀行・口座振替・ネットバンクで決済による返金は、銀行口座振込（返金手数料440円）またはグリーンライナーポイントでご返金（返金手数料無料）となります。<br><br>

                            ①銀行口座に返金（返金手数料有料）の場合<br>
                            キャンセル時に「ご返金方法」選択欄で、「銀行振込で返金」をお選びください。変更またはキャンセル完了後、返金手続きについてのご案内メールをお送りいたします。ご案内メールの内容に従い口座登録などの手続きを行ってください。
                        </p>
                        <img class="switch payback-img"
                            src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guiode_payback_pc.svg"
                            alt="">
                        <p class="txt">※マイページの「過去の予約一覧」＞「予約内容詳細」の「返金一覧」より返金口座のご登録を行っていただけます。<br>
                            ※口座登録のご案内メールに返信されても、ご返金はできません。<br>
                            ※事前に【金融機関名】【支店名】【支店番号】【口座種別】【口座番号】【名義人（カタカナ）】をご確認ください。<br>
                            ※<span>返金手数料（予約1件に付き一律440円）</span>を差し引きましてご返金させて頂きます。あらかじめご了承ください。<br>
                            ※ゆうちょ銀行でのご返金のお客様で、振込用の店名・預金種目・口座番号がわからないお客様は<a
                                href="https://www.jp-bank.japanpost.jp/kojin/sokin/furikomi/kouza/kj_sk_fm_kz_1.html">記号番号から振込用の店名・預金種目・口座番号を調べる（他サイト：ゆうちょ銀行ＨＰ）</a>でご確認いただき、ご登録ください。<br>
                            ※電話予約のお客様につきましては、マイページから口座情報登録ができませんので、直接お電話にて口座情報をご連絡ください。<br>
                            ② グリーンライナーポイントによる返金<span>（返金手数料無料）</span>の場合<br>
                            キャンセル時に「ご返金方法」選択欄で、「ポイントで返金する」をお選びください。<br>
                            ※クレジットカードでのお支払のお客様、電話予約のお客様へのポイント返金はお受けできません。<br>
                            ※グリーンライナーポイントの有効期限は3年間となります。<br>
                            ※次回、お支払い時にご利用いただけるポイントは、最低100ポイントから最大30,000ポイントまでとなります。</p>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        ポイントで決済を行われた方
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            コンキャンセル操作と同時に、キャンセル料を差し引いた残りのポイントが自動で返還されます。
                        </p>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        ポイントとクレジット（またはコンビ二）を組み合わせて決済を行われた方
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            支払方法に応じ、それぞれ返金いたします。キャンセル料が発生する場合は支払ったポイントから優先して差し引かれます。<br>
                            ※楽天トラベル、ホワイトベアーなど、当サイト以外からご予約をされたお客様につきましては、お手数ではございますが、直接ご予約いただいたサイトへお問い合わせください。
                        </p>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <section id="sec_ride" class="main-contents">
        <div class="c--txt-content">
            <div class="c--gradient-head">
                <p class="head-name">ご乗車にあたって</p>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        定刻出発実施へのご理解・ご協力をお願いいたします
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            <span>バスは定刻（出発時間）に出発を致します。<br>
                                公共機関の遅れの場合においても定刻出発となります。</span><br><br>

                            乗車場所や出発時刻は必ず事前によくご確認の上、お時間に余裕を持ってお越しください。<br>
                            乗車場所の確認などでバス乗務員連絡先にお電話いただいても、出発前後は受付・運行業務により電話にでられない場合がございます。なお、お客様の個人情報保護の観点より、乗務員から電話連絡をさせていただく事は差し控えさせていただいております。あらかじめご了承下さい。<br>
                            定刻に出発することが安全運行に繋がると考えております。
                            お客様の快適な移動のために、またこれからもお客様に安心してグリーンライナーをご利用いただくために、定時出発へのご理解・ご協力をお願いいたします。
                        </p>
                    </dl>
                </div>
            </div>
            <div class="open-area pet">
                <a class="open-btn">
                    <p class="name">
                        ご乗車にあたって　～ご協力お願いいたします～
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents">
                    <dl class="contents-cell">
                        <p class="txt">
                            <strong>【駐車場について】</strong><br>
                            丸一観光が運営するグリーンライナーご利用者専用駐車場は２か所（丸一観光七尾営業所、和倉温泉駅）ございます。ただし<span>完全事前予約制</span>です。ご予約の際に、お電話にて駐車場をご予約ください。（台数に限りがございます。詳しくは<a
                                href="<?php global $url_parking;
                                                                                                                                                                echo $url_parking; ?>">コチラ</a>）<br>
                            その他に
                            <span>乗車場所に当社指定の駐車場はございません。</span>お車でお越しの方はお近くの有料駐車場をご利用ください。有料駐車場がない場合は、公共交通機関のご利用をお願い致します。ご乗車場所付近の施設、敷地への無断駐車は行わないで下さい。ご乗車されるお客様のお車の駐車に関する盗難、トラブル等に関しては、当社は一切の責任を追いかねます。<br><br>

                            <strong>【出発時間について】</strong><br>
                            <span>バスは定刻に出発しますので、余裕を持ってお越し下さい。</span>公共交通機関のため定時出発となります。<br>
                            出発時刻までにお見えにならなかったお客様に、当方から連絡は致しません。また、それに伴う代金の払い戻しはできませんので予めご了承ください。事前にご連絡をいただいた場合でもお待ちすることはできません。<br>
                            緊急連絡先は急なキャンセル等の受付連絡先です。道案内などはできかねます。必ず事前に乗車場所または集合場所をご確認の上、時間に余裕を持ってお越しください。<br><br>

                            <strong>【座席について】</strong><br>
                            <span>座席は全席指定となっております。</span>座席は当日乗務員がご案内いたしますので、決められた場所にお座りください。<br>
                            また、<span>ご予約時に座席位置の指定はできません。</span>（システムによって自動席割となりますのでご了承ください）<br>
                            グループのお客様は、<span>ご予約時に残席数が少ない場合は、お席が離れる場合がございます</span>のでご了承ください。<br>
                            女性がご予約された場合、隣接する席には必ず女性にお座りいただくよう配慮しているおりますが、通路を挟んでの座席には男性にお座りいただく場合がございます。あらかじめご了承下さい。<br><br>

                            <strong>【喫煙について】</strong><br>
                            <span>車内は禁煙となっております。</span>電子タバコ、無煙タバコも禁止とさせていただきます。喫煙は、所定の喫煙所でお願い致します。<br><br>

                            <strong>【バス車内でのご注意・ご協力について】</strong><br>
                            ・法令によりシートベルトの着用が義務付けられています。また安全のためにもご乗車中はシートベルトの着用をお願いいたします。<br>
                            ・携帯電話はマナーモードに設定の上、通話はご遠慮ください。また、ヘッドホン等の音漏れにもご注意をお願いいたします。<br>
                            ・消灯後、ゲーム機など明かりの出る機器のご使用の際は、周りのお客様へのご配慮をお願い致します。<br>
                            ・シートのリクライニング操作には、後ろの方へのご配慮をお願い致します。また、休憩などで席を離れる場合は、シートを元の位置にお戻し下さい。<br>
                            ・休憩場所での忘れ物や落し物にご注意ください。<br>
                            ・車内温度は乗務員が設定しておりますが、お座席によって多少の温度差がございます。ブランケットや衣類等で適宜ご調整をお願いいたします。<br>
                            ・貴重品、お荷物の管理はお客様自身でお願致します。万が一盗難や紛失が発生しましても、当社では責任を負いかねますのでご了承ください。<br>
                            ・忘れ物が大変多くなっております。降車の際は今一度身の回り品のご確認をお願いいたします。<br><br>

                            <strong>【休憩について】</strong><br>
                            途中約2時間おきに15～20分の休憩を予定しております。休憩予定場所以外でも、ご気分が悪いなど、お困りの方はご遠慮なく乗務員までお申し出ください。
                        </p>
                    </dl>
                </div>
            </div>
            <div class="open-area">
                <a class="open-btn">
                    <p class="name">
                        お荷物・ペットについて
                    </p>
                    <p class="accordion_icon">
                        <span></span>
                        <span></span>
                    </p>
                </a>
                <div class="open-contents pet">
                    <dl class="contents-cell">
                        <img class="icon-pet"
                            src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_ok.svg" alt="">
                        <p class="txt">
                            <strong>バス車内へ持ち込める手荷物</strong><br><br>
                            ●車内に持ち込むことができる手荷物は、<span>総重量10キログラム・総容積0.027立法メートル（0.3メートル立法）・長さ1メートル以内</span>のもの。<br>
                            ●大きさは、<span>バス網棚に入るもの</span>、または<span>各自の座席で管理できる程度</span>のもの。<br>
                            （※座席足元は暖房設備により高温になる場所もありますのでご注意ください。）<br>
                            ●バス網棚に入る平均的サイズは<span>24cm×30cm</span>です。<br>
                            ●貴重品やお荷物の管理はお客様ご自身にてお願いいたします。<br>
                            万が一盗難や紛失が発生しましても、当社では責任を負いかねますのでご了承ください。<br>
                            ●お忘れ物が大変多くなっております。降車の際は今一度身の回り品のご確認をお願いいたします。
                        </p>
                    </dl>
                    <dl class="contents-cell pet">
                        <img class="icon-pet"
                            src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_ng.svg" alt="">
                        <p class="txt">
                            <strong>バス車内へ持ち込める手荷物</strong><br><br>
                            ●<span class="blu">刃物類・危険物</span>（武器類、火薬、ガソリン、灯油、軽油、爆発性物質）、<span
                                class="blu">ペット</span>は<span class="blu">バス車内・トランク内ともに</span>お持込みいただけません。
                            あらかじめご了承ください。
                        </p>
                    </dl>
                    <dl class="contents-cell pet">
                        <p class="txt">
                            <strong>バストランクでお預かりするお荷物について</strong><br><br>
                            ・スーツケースなど<span>バス車内で利用しないお荷物</span>はバストランクにお預けください。<br>
                            ・取り間違いのないよう、お客様ご自身で目印やネームタグなどをお付けになることをお勧め致します。<br>
                            ・バストランクでお預かり可能なお荷物の数は<span>お一人様2個まで</span>となります。<br>
                            ・お預かりするお荷物が1個の場合、お荷物のサイズは<span>縦・横・高さの合計155cm以内</span>となります。<br>
                            ・お預かりするお荷物が2個の場合、お荷物のサイズは<span>お荷物2個の縦・横・高さの合計240cm以内</span>となります。（ただし1個のサイズは縦・横・高さの合計155cm以内）<br>
                            ・18インチケースに入る折りたたみ式自転車は、上記サイズの規定内となっております。<br>
                            ・現金・貴重品・壊れ物はお手元にお持ちくださいますようお願い致します。<span>破損・紛失・盗難の損害が生じても当社はその責任を負いません。</span>
                        </p>
                        <img class="last-img"
                            src="<?php echo get_template_directory_uri(); ?>/img/exreserve/guide_p1_14.png" alt="">
                    </dl>
                </div>
            </div>
        </div>
    </section>
</section>
<?php get_footer(); ?>