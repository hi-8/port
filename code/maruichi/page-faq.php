<?php
/*
Template Name: faq
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>高速バス　よくある質問</h1>
</div>
<section id="sec_faq">
    <ul class="top-links">
        <li class="top-links-cell">
            <a href="#sec_faq_howto">
                <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/faq_ico01.svg" alt="">
                <p>サイトの使い方・ご予約</p>
            </a>
        </li>
        <li class="top-links-cell">
            <a href="#sec_faq_payment">
                <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/faq_ico02.svg" alt="">
                <p>お支払い</p>
            </a>
        </li>
        <li class="top-links-cell">
            <a href="#sec_faq_payback">
                <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/faq_ico03.svg" alt="">
                <p>予約の確認・変更・返金</p>
            </a>
        </li>
        <li class="top-links-cell">
            <a href="#sec_faq_flow">
                <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/faq_ico04.svg" alt="">
                <p>ご乗車の流れ・到着後</p>
            </a>
        </li>
        <li class="top-links-cell">
            <a href="#sec_faq_facility">
                <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/faq_ico05.svg" alt="">
                <p>バス設備</p>
            </a>
        </li>
        <li class="top-links-cell">
            <a href="#sec_faq_member">
                <img src="<?php echo get_template_directory_uri(); ?>/img/exreserve/faq_ico06.svg" alt="">
                <p>会員登録・ポイント</p>
            </a>
        </li>
    </ul>
    <div class="inr" id="sec_faq_howto">
        <div class="c--gradient-head">
            <p class="head-name">サイトの使い方・ご予約</p>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        乗車者ではなくても予約できますか?
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>可能です。ご予約時のお客様情報入力画面において、予約者と乗客者の欄がございますので、それぞれにご入力ください。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        割引運賃・サービスはありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>往復割引・学生割引・小人運賃・障害者割引がございます。<br>
                        往復（往路ご利用日から８日以内の復路ご利用）でお申し込みの場合、片道ごとに２５０円割引いたします。合計５００円割引となります。詳しくは「<a
                            href="<?php global $url_fare;
                                                                                                        echo $url_fare; ?>">運賃・割引情報</a>」をご確認ください</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        検索しても該当する便が表示されないのはどうしてですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>ご希望条件の便が①すべて満席の場合、②予約締切時刻が過ぎている場合、③発売前の場合は「お探しの便は見つかりませんでした」と表示されます。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        キャンセル待ちはできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>当社のシステム上、キャンセル待ちは承ることができません。（お電話でお問合せいただいても同様です。）ＨＰ上にはリアルタイムの残席数が表示されますので、キャンセルがあった場合はすぐに反映されます。お手数ですがお客様ご自身でご確認をお願いいたします。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        一緒に予約する人と乗下車地が違います。どのように予約すればよいですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>片道予約の場合と、往復予約の場合で予約方法が違います。<br><br>
                        【片道予約の場合】<br>
                        予約フォームの「乗下車地を入力してください」のページで、「＋別の乗車区間を追加する」ボタンを押していただき、それぞれの乗下車地をお選びいただき、その乗下車パターンでご参加いただく人数をお選びください。<br>
                        ※乗下車地でお選びいただく人数の合計とご利用人数とが一致するようにご入力ください。<br><br>
                        【往復予約の場合】<br>
                        往復予約の場合は、複数の乗車区間を選択することができません。別々のご予約していただいて、ご予約完了後に弊社へ同じグループのお客様である旨をご連絡ください。可能な限り同じグループのお客様としてお近くのお座席をご用意させていただきます。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        友達と別々に予約していますが近くの座席にすることは可能ですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>別々にご予約いただいておりましても、同一行程（出発日・便・シートタイプが同一）の場合は、ご予約完了後に当社（七尾：0767-52-0101、金沢：076-266-4401）へ同じグループのお客様である旨をご連絡ください。可能な限り同じグループのお客様としてお近くのお座席をご用意させていただきます。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        チケットはありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>チケットはございません。予約確認メールをご乗車日当日にご提示下さい。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        予約確認メールが来ないのですが、予約されてますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>通常、予約完了後数分程度でご予約時にご指定いただいたメールアドレス宛に「予約受付確認書」が送信されます。届かない場合は、ご予約がお取り出来ていない可能性もございますので、<a
                            href="https://eexpress.jp/dy/35/common/pc/mypage/menu/"
                            target="_blank">マイページ</a>の「予約情報」からご確認ください。（電話予約の場合はマイページには反映されませんのでお電話にてお問い合わせ下さい。）<br><br>
                        【メールが送信されない原因】<br>
                        予約受付確認書が届かない原因として、迷惑メール防止のためのドメイン指定をしている、迷惑メールフォルダに振り分けられている、メールアドレスの入力間違が考えられます。受信設定を【@maruichi-gp.co.jp】ドメインが受信可能にしていただき、
                        <a href="https://eexpress.jp/dy/35/common/pc/mypage/menu/"
                            target="_blank">マイページ</a>より予約確認書の再送を行ってください。<br>
                        また、携帯・スマートフォンの新しい機種をお使いのお客様においては、上記対応をしても届かない場合があります。（機種の初期設定でセキュリティが強くかかっていることが原因と考えられます。）お客様の携帯・スマホキャリア及び個別の設定によるので、お近くのショップにてご確認をお願いいたします。<br><br>
                        【メール再送方法】
                        <a href="https://eexpress.jp/dy/35/common/pc/mypage/menu/"
                            target="_blank">マイページ</a>にログインしていただき、【会員情報管理】→【メールアドレス管理】からメールアドレスの確認を行い、必要に応じてアドレス変更、または別のアドレスの追加を行います。【予約管理】→【現在の予約一覧】から対象の予約を選んでいただき、「予約確認書再送」をクリックし、メールを送信してください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        表示されている金額は割引後の金額でしょうか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>『シート・プラン選択』での表示価格が割引後の料金になります。
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="inr" id="sec_faq_payment">
        <div class="c--gradient-head">
            <p class="head-name">お支払い</p>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        支払方法はどのようなものがありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>お支払方法は、クレジットカード、コンビニ決済、ゆうちょ銀行、ネットバンクのお支払がございます。詳しくは「<a
                            href="<?php global $url_about_payment;
                                                                                        echo $url_about_payment; ?>">お支払方法</a>」をご確認ください。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        支払の際、手数料はかかりますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>手数料はかかりません。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        支払いは、いつまでに済ませればいいですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>クレジットカードの場合はご予約と同時に決済されます。その他は受付日によって入金期限が異なります。お支払方法の入金期限ルールをご確認ください。詳しくは「<a
                            href="<?php global $url_about_payment;
                                                                                                            echo $url_about_payment; ?>">お支払方法</a>」をご確認ください。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        入金期限までに支払えなかった場合はどうすればよいでしょうか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>入金期限までにご入金いただけない場合は自動的に取消扱いにさせて頂きます。ご利用の場合は、再度ご予約をお願いします。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        どこのクレジットカードが利用できますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>VISA、MASTER、JCB、AMEXがご利用可能です。AMEXをご利用のお客様は、ご入力いただくカード番号が15桁となっておりますので、ご予約フォームには4桁－4桁－4桁－3桁でご入力ください。詳しくは「<a
                            href="<?php global $url_about_payment;
                                                                                                                                            echo $url_about_payment; ?>">お支払方法</a>」をご確認ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        キャンセルしたのにクレジットカードの引き落としがされていましたが？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>クレジットカードで決済されたご旅行代金の返金は、クレジットカードでご返金となります。ご利用のクレジットカードの締切日と、ご予約・取消（キャンセル）した日によってそれぞれ処理が異なりますのでご了承下さい。<br>
                        ①一旦全額のお支払（口座引落）後、キャンセル料が発生する場合は、それを差引いて差額のご返金する場合<br>
                        ②変更/取消（キャンセル）後の代金のみお支払（口座引落）いただく場合<br>
                        信販会社の締切日及び支払日（口座振替日）については当社でお調べできません。どの方法で、返金・請求されたかにつきましては、信販会社からのご利用明細書にてご確認下さい。詳しくは「<a
                            href="<?php global $url_about_refound;
                                                                                                                        echo $url_about_refound; ?>">ご返金方法</a>」をご確認ください。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        コンビニ支払は、どこのコンビニが利用できますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>全国のローソン・ファミリーマート・セイコーマート・ミニストップでお支払いただけます。お支払方法は各コンビニによって異なりますので、コンビニ決済でのお支払を必ずお読み下さい。なお、お支払の際の「お客様控え/領収証」は当日確認させていただくこともございますので、必ず保管いただき、当日ご持参下さい。詳しくは「<a
                            href="<?php global $url_about_payment;
                                                                                                                                                                                            echo $url_about_payment; ?>">お支払方法</a>」をご確認ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        コンビニの支払方法がわかりません。どのようにすればよいでしょうか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>お支払方法は各コンビニによって異なりますので、コンビニ決済でのお支払を必ずお読み下さい。（詳しくは「<a
                            href="<?php global $url_about_payment;
                                                                                    echo $url_about_payment; ?>">お支払方法</a>」をご確認ください。）なお、お支払の際の「お客様控え/領収証」は当日確認させていただくこともございますので、必ず保管いただき、当日ご持参下さい。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        領収書の発行はできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>領収書をご希望のお客様は、マイページより発行が可能です。<br>
                        １．バス到着の3日後（旅行終了の3日後）より発行可能です。<br>
                        ２．クレジットカードでのお支払の場合のみ出力可能です。コンビニ払いの場合は、支払いの際にコンビニで領収書が発行されますので、マイページから出力することはできません。<br>
                        ３．マイページからは1回のみ発行が可能です。発行後は表示が変わり、ボタンが押せなくなります。<br><br>

                        ※注意点<br>
                        ・ポイント利用額は領収書の額面に含まれません。（全額ポイント利用の場合は領収書は発行できません）<br>
                        ・宛名が未入力の場合「予約者」の名前が記載されます。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        全額ポイント利用の場合、領収書は発行できますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>全額ポイント利用の場合は、領収書は発行されません。
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="inr" id="sec_faq_payback">
        <div class="c--gradient-head">
            <p class="head-name">予約の確認・変更・返金</p>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        予約の確認はどうしたらいいですか?
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>オンライン予約の方は、「<a href="https://eexpress.jp/dy/35/common/pc/mypage/menu/"
                            target="_blank">マイページ</a>」へログインしてご確認いただくことができます。
                        また、ご予約いただいた際に送付しております予約受付確認書でも確認することができます。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        出発日の変更はできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>出発日の変更はできません。往復予約で、片道または往復日付変更の場合も同様です。一度ご予約をキャンセルの上、再度予約の取り直しとなります。ご入金済の場合は払戻しになります。キャンセル時に規定の<a
                            href="<?php global $url_userguide;
                                                                                                                                echo $url_userguide; ?>#commission">払戻手数料</a>と、お振込みの場合は銀行振込手数料440円がかかります。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        往復予約を片道のみに変更できますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>お電話にて変更可能です。（マイページからの変更はできません。）ただしキャンセルする便に対して規定の<a
                            href="<?php global $url_userguide;
                                                                                    echo $url_userguide; ?>#commission">払戻手数料</a>と、お振込みの場合は銀行振込手数料440円がかかります。また、往復割引は適用除外となります。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        片道予約を往復に変更できますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>変更できません。往復予約（往復割引適用）にするには予約のキャンセルおよび再予約が必要となります。その際、キャンセル時に規定の<a
                            href="<?php global $url_userguide;
                                                                                                echo $url_userguide; ?>#commission">払戻手数料</a>と、お振込みの場合は銀行振込手数料440円がかかります。</dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        便の変更（例：金沢便⇒富山便）はできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>便の変更はできません。往復予約で、片道または往復便変更の場合も同様です。一度ご予約をキャンセルの上、再度予約の取り直しとなります。ご入金済の場合は払戻しになります。キャンセル時に規定の<a
                            href="<?php global $url_userguide;
                                                                                                                                echo $url_userguide; ?>#commission">払戻手数料</a>と、お振込みの場合は銀行振込手数料440円がかかります。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        シートタイプ（例：４列⇒３列）の変更はできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>シートタイプの変更はできません。往復予約で、片道または往復のシートタイプ変更の場合も同様です。一度ご予約をキャンセルの上、再度予約の取り直しとなります。ご入金済の場合は払戻しになります。キャンセル時に規定の<a
                            href="<?php global $url_userguide;
                                                                                                                                        echo $url_userguide; ?>#commission">払戻手数料</a>と、お振込みの場合は銀行振込手数料440円がかかります。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        乗車地・下車地の変更はできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>乗下車地の変更は、変更によって差額が発生する場合とそうでない場合で手順が違いますのでご注意ください。<br><br>

                        【差額がある場合】<br>
                        ご出発当日の、始発出発７時間半前、及び営業時間内に、お電話（七尾：0767-52-0101、金沢：076-266-4401）でのみ変更可能です。<br><br>

                        【同一金額の場合】<br>
                        ご出発当日の、始発出発７時間半前までに<a href="https://eexpress.jp/dy/35/common/pc/mypage/menu/"
                            target="_blank">マイページ</a>もしくは営業時間内にお電話（七尾：0767-52-0101、金沢：076-266-4401）にて乗下車地変更可能です。また、メールによる変更は一切お受けできません。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        性別を間違えて予約してしまいました。変更はできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>性別の変更はできません。一度ご予約をキャンセルの上、再度予約の取り直しとなります。ご入金済の場合は払戻しになります。キャンセル時に規定の<a
                            href="<?php global $url_userguide;
                                                                                                        echo $url_userguide; ?>#commission">払戻手数料</a>と、お振込みの場合は銀行振込手数料440円がかかります。なお、予約記録と異なる性別の方がお越しになった場合、ご乗車をお断りすることがございます。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        支払方法を変更することはできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>お振込み（コンビニ・ゆうちょ銀行等）からクレジットカード決済への変更は、支払期日内のご予約であれば変更することは可能です。当社（七尾：0767-52-0101、金沢：076-266-4401）へご連絡下さい。なお、クレジットカード決済からお振込み（コンビニ・ゆうちょ銀行等）に変更することはできませんのでご了承ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        キャンセルをするにはどうすればいいですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>キャンセルは、<a href="https://eexpress.jp/dy/35/common/pc/mypage/menu/"
                            target="_blank">マイページ</a>からお客様ご自身でキャンセルしていただくか、営業時間内にお電話（七尾：0767-52-0101、金沢：076-266-4401）にてお受けいたします。
                        営業時間外のお電話でのキャンセルや、メールでのキャンセルはお受けしておりませんので、あらかじめご了承ください。<br>
                        ご出発前のキャンセルについては、規定に基づく<a
                            href="<?php global $url_userguide;
                                                        echo $url_userguide; ?>#commission">払戻手数料</a>が発生致しますので差額をご返金いたします。詳しくは「<a
                            href="<?php global $url_userguide;
                                                                                                                                        echo $url_userguide; ?>#sec_cancel">変更・キャンセル方法について</a>」、ご返金については「<a
                            href="<?php global $url_userguide;
                                                                                                                                                                                                                    echo $url_userguide; ?>#sec_payback">ご返金方法について</a>」をご確認ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        キャンセルをして返金が発生しました。返金方法はどうなりますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>変更・キャンセルされた場合の返金は、ご予約時の決済方法により異なります。詳しくは「<a
                            href="<?php global $url_userguide;
                                                                            echo $url_userguide; ?>#sec_payback">ご返金方法について</a>」をご確認ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        クレジットカード決済した予約を、変更・キャンセルした場合の請求はどうなりますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>クレジットカードで決済されたご旅行代金の返金は、クレジットカードでご返金となります。お客様がお持ちのクレジットカードの締切日と、ご予約・キャンセルをした日によって、それぞれ処理が異なりますので、ご了承ください。<br><br>

                        1.　一旦全額のお支払い（口座引落）後、キャンセル料が発生する場合には、それを差引いて、差額をご返金する場合<br>
                        2.　変更／キャンセル後の代金のみ、お支払い（口座引落）いただく場合<br><br>

                        各カード会社の締切日及び支払日（口座振替日）については、当社でお調べできません。<br>
                        どの方法で、返金・請求がされたかにつきましては、カード会社からのご利用明細書でご確認ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        キャンセル後、返金方法の変更（例：銀行振込⇒ポイント返金）することは可能ですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>申し訳ございません。キャンセル時にご選択いただきましたご返金方法を変えることはできません。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        口座情報を間違えて入力してしまいました。訂正はできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>数営業日以内に振込失敗でエラーとなりますので、再度マイページからご自身で登録していただきます。なお、振込手続きが行えなかった場合、当社より改めてメールにてご案内させていただきます。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        電話で予約したのですが、返金はどのような手続きになりますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>お電話でご予約の場合、マイページにて返金手続きを行えないため、七尾営業所（0767-52-0101）または金沢営業所（076-266-4401）へご連絡ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        手数料はかかりますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>口座返金をご選択いただいた場合、一律440円の手数料がお客様負担となります。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        2件キャンセルをしましたが、返金振込手数料（銀行振込手数料）は2件両方にかかってきますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>はい。返金手数料は「予約番号」1件につき440円かかります。各予約番号毎に手数料がかかりますので予めご了承ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        返金案内メールが届きません。どうしたらよいですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>弊社からのメールが届かない場合、以下の点をご確認下さい。<br><br>

                        ①メールアドレスに誤りがないか、マイページよりご確認下さい。<br>
                        ②ご契約のプロバイダやお客様の設定により、迷惑メールフォルダに振り分けられている場合がございます。「削除フォルダ」「迷惑メールフォルダ」も合わせてご確認下さい。<br>
                        ③ドメイン受信設定をされている場合、｢@maruichi-gp.co.jp｣からのメールを受信するようにご設定下さい。<br>
                        ④受信メールボックスの容量が上限に達している場合も受信できません。不要なメールを削除して下さい。<br>
                        ⑤クレジットカード決済のお客様へは、返金案内メールはお送りしておりません。<br><br>

                        なお、返金のご案内メールは、返金先口座情報をマイページからご登録いただく準備が整ったことをお知らせするためのメールであり、返金手続きを進めるために必要となるものではございません。<br>
                        キャンセル後およそ7営業日程度お待ちいただいてもご案内メールが届かない場合は、直接マイページ内にあります返金対象予約記録の詳細をご確認下さい。メールを受信できていない場合でも、返金先口座情報が登録可能となっている場合はお手続きを進めることが可能です。返金額にお間違いがないかご確認の上、ご希望の返金先口座をご登録下さい。<br><br>

                        7営業日以上お待ちいただいてもメールが届かず、またマイページ内の対象予約記録を確認しても口座情報登録が出来ない場合は、誠にお手数ですが弊社コールセンターまでお問合せ下さい。<br>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="inr" id="sec_faq_flow">
        <div class="c--gradient-head">
            <p class="head-name">ご乗車の流れ・到着後</p>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        当日受付場所ではどうすればよいでしょうか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>集合場所により、受付方法が異なります。<br><br>

                        【受付場所及びスタッフがいる集合場所】<br>
                        お時間になりましたらスタッフが受付を開始いたします。お持ちいただいた確認書等をご提示の上、チェックインをお済ませください。<br><br>

                        【乗務員が受付を行う集合場所】<br>
                        乗務員が受付をさせていただきます。（受付スペースなどは設置しておりません。）他の受付場所同様、お時間になりましたら、お持ちいただいた確認書等を乗務員にご提示の上、チェックインをお済ませください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        予約確認書が出力できない場合はどのように受付すればよいでしょうか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>予約受付確認書に記載されている予約番号をお控えいただき、集合場所係員に予約番号とお名前をお伝えください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        受付時に必要なものは何ですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>ご出発日当日は①予約受付確認書、②コンビニ支払いの方はお支払いの際に受け取られた領収書、③小児運賃・学生割引を適用されているお客様は学生証・身分証明書等をご提示ください。
                        （予約受付確認書は、受け取られたメールをプリントアウトされたもの、ケータイのメールの画面等、または予約受付確認書に記載されている予約番号をお控えいただいたもの、のいずれかをご提示ください。）
                        また、集合場所地図は必ず事前にご確認いただき、必要があればプリントアウトをするなどしてお持ちいただくことをお勧めします。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        乗車券はありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>乗車券の発行は行っておりません。ご予約いただいた際に送付しております予約受付確認書をご提示いただければご乗車いただけます。<br>
                        ※なお当日にコンビニにてお支払された方はお支払いの際に受け取られた領収書もあわせてお持ちください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        学割で予約しましたが、当日学生証を忘れてしまいました。どうすればよいでしょうか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>ご確認ができないお客様につきましては普通運賃との差額を申し受けますのでご了承下さい。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        集合場所の地図を確認したいのですが？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>集合場所地図は、当社ホームページの「<a
                            href="<?php global $url_platform;
                                                    echo $url_platform; ?>">のりば・おりば地図一覧</a>」よりご確認いただくか、ご予約いただいた際に送付させていただいております予約受付確認書にてご案内させていただいている集合場所URLよりご確認いただけます。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        乗車場所近くに専用駐車場はありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>乗車場所に当社指定の駐車場はございません。お車でお越しの方はお近くの有料駐車場をご利用ください。有料駐車場がない場合は、公共交通機関のご利用をお願い致します。ご乗車場所付近の施設、敷地への無断駐車は行わないで下さい。ご乗車されるお客様のお車の駐車に関する盗難、トラブル等に関しては、当社は一切の責任を追いかねます。

                        ※乗降地「<a
                            href="https://www.google.com/maps/d/u/0/viewer?mid=1xmzm_xNyAwB6MNKLT6DB9lhE7Bc&ll=36.66244639999998%2C137.00288060000003&z=15"
                            target="_blank">高岡砺波スマートＩＣ（高岡高速バスターミナル）</a>」には無料駐車場があります。（90台）詳しくは<a
                            href="https://www.city.takaoka.toyama.jp/sangyo/doro/kosoku/index.html"
                            target="_blank">こちら</a>をご確認ください。ご乗車されるお客様のお車の駐車に関する盗難、トラブル等に関しては、当社は一切の責任を追いかねます。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        下車場所はどこになるかわかりますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>下車いただく場所はあらかじめ決まっており、バス運行スケジュールの「下車地」もしくは「のりば・おりば地図一覧」で表示されている場所名・地図の場所となります。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        指定の乗下車地ではなく、途中のSAでの乗車・降車は可能でしょうか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>乗下車地以外の場所での乗下車はできません。あらかじめご了承ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        バス車内にトイレはついてますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>はい。トイレ付き車両になります。<br>
                        バスの走行中は、法律によりシートベルトの着用が義務付けられていますので、必ずシートベルトの着用をお願いいたします。<br>
                        上記理由と車内事故防止のため、走行中は緊急時以外のトイレのご使用をお控え下さいますようお願い致します。<br>
                        またトイレご使用の際は、バス走行中に急ブレーキ、急カーブなどの緊急制動の可能性がありますので、男性のお客様も座ってご使用いただきますようお願い致します。<br>
                        また、2時間ごとにSA・PAなどでトイレ休憩をとらせていただいております。休憩予定場所以外でもサービスエリア等での途中停車は可能ですので、体調が優れない等、お困りの際はお気軽に乗務員にお声をかけてください。<br><br>

                        尚、トイレを設置しておりますが、代替え車両での運行時、車両点検時には、都合によりやむを得ず予告なくトイレ無しの車両にての運行となる場合がございますのでご了承下さい。
                    </dd>
                </dl>
            </div>
        </div>



    </div>
    <div class="inr" id="sec_faq_facility">
        <div class="c--gradient-head">
            <p class="head-name">バス設備</p>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        バス車内にトイレはついてますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>はい。トイレ付き車両になります。<br>
                        バスの走行中は、法律によりシートベルトの着用が義務付けられていますので、必ずシートベルトの着用をお願いいたします。<br>
                        上記理由と車内事故防止のため、走行中は緊急時以外のトイレのご使用をお控え下さいますようお願い致します。<br>
                        またトイレご使用の際は、バス走行中に急ブレーキ、急カーブなどの緊急制動の可能性がありますので、男性のお客様も座ってご使用いただきますようお願い致します。<br>
                        また、2時間ごとにSA・PAなどでトイレ休憩をとらせていただいております。休憩予定場所以外でもサービスエリア等での途中停車は可能ですので、体調が優れない等、お困りの際はお気軽に乗務員にお声をかけてください。<br><br>

                        尚、トイレを設置しておりますが、代替え車両での運行時、車両点検時には、都合によりやむを得ず予告なくトイレ無しの車両にての運行となる場合がございますのでご了承下さい。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        車内の喫煙できますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>車内は禁煙です。電子タバコも、無煙タバコも禁止とさせていただきます。喫煙はトイレ休憩などの際に所定の場所でお願い致します。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        ブランケットやアメニティのサービスはありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>ブランケットの貸出、スリッパ・ウェットタオル・歯ブラシのサービスがございます。ご自由にお使いください。また、エアまくら・アイマスク・耳せんのトラベル３点セットを車内販売しております。ご購入希望の方は、休憩地などバスの停車時に乗務員にお申し出下さい。詳しくは「車内サービス」をご確認ください
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        座席の指定はできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>申し訳ございませんが、ご指定は承っておりません。ご了承下さい。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        事前に座席の場所はわかりますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>申し訳ございませんが、ご乗車受付時にご案内させていただいております。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        女性の予約ですが、隣に男性が座ることはありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>4列シートの場合は、他のお客様とご相席をいただく場合は、隣に座られる方の性別は配慮させていただいておりますのでご安心下さい。尚、独立3列シート、4列シート共に、通路を挟んだ隣が男性のお客様となる場合がございますので、あらかじめご了承ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        男女２名で予約しましたが、バスの座席は隣同士になりますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>２名以上でご予約いただいた場合、可能な限りお隣同士のお座席、お近くのお座席をご用意させていただきます。ただし、他のお客様の集客状況などによりご要望に添えない場合もございますので、あらかじめご了承ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        同伴の幼児を膝の上に乗せても良いでしょうか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>可能です。ただし、乗客にシートベルトの着用が義務付けられておりますので、座席に1人で座れる幼児のお子様は、安全のため、小児運賃をお支払いただきお座席を使用されることをお勧めいたします。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        車内に持ち込める荷物はいくつまで可能ですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>車内に持ち込むことができる手荷物は、お一人につき総重量10キログラム・総容積0.027立法メートル（0.3メートル立法）・長さ1メートル以内のものとなります。大きさは、バス網棚に入るもの、または各自の座席で管理できる程度のものとなります。詳しくは「<a
                            href="<?php global $url_userguide;
                                                                                                                                                                echo $url_userguide; ?>#sec_ride">手荷物・ペットについて</a>」をご確認ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        バストランクに預ける荷物に大きさや個数などの制限はありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>バストランクでお預かり可能なお荷物の数はお一人様2個までとなります。<br>
                        お預かりするお荷物が1個の場合、お荷物のサイズは縦・横・高さの合計155cm以内となります。<br>
                        お預かりするお荷物が2個の場合、お荷物のサイズはお荷物2個の縦・横・高さの合計240cm以内となります。<br>
                        詳しくは「<a href="<?php global $url_userguide;
                                        echo $url_userguide; ?>#sec_ride">手荷物・ペットについて</a>」をご確認ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        ペットは同伴できますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>大変申し訳ございません。ペットの同伴は、車内およびトランクにおいてもお断りしております。詳しくは「<a
                            href="<?php global $url_userguide;
                                                                                    echo $url_userguide; ?>#sec_ride">手荷物・ペットについて</a>」をご確認ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        トイレ休憩はありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>SA/PAにて約2時間おきにトレイ休憩の時間をおとりしております。
                    </dd>
                </dl>
            </div>
        </div>

    </div>
    <div class="inr" id="sec_faq_member">
        <div class="c--gradient-head">
            <p class="head-name">会員登録・ポイント</p>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        グリーンライナー会員とは何ですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>グリーンライナー会員とは、メールアドレスやお名前などをご登録いただくことで、当社商品をより便利に利用いただける無料サービスです。当社のバスをパソコンや携帯でオンライン予約いただくには、この会員登録が必須となります。会員登録をしていただくと、マイページからご予約の確認・変更をしていただける他、ご利用金額に応じたポイントの獲得等のサービスをご利用いただくことができます。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        会員登録はどのようにすればよいですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>商品ご選択後のログイン画面から新規会員登録画面へお進みいただけます。また、<a href="https://eexpress.jp/dy/35/common/pc/mypage/menu/"
                            target="_blank">マイページ</a>からもご登録できます。必要事項をご入力の上、ご登録をお願いいたします。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        一度退会しましたが、再度会員登録はできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>同じID（メールアドレス）でも再度会員登録ができます。ただし、以前ご登録いただいていた情報・ポイントなどは一切引き継ぐことはできませんので、あらかじめご了承下さい。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        会員情報を変更できますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>可能です。会員情報のご変更はログイン後、マイページの「会員情報管理」よりお客様ご自身で変更していただくことができます。
                        また、ログインIDとしてお使いいただいているメールアドレス以外の連絡先のご変更は「連絡先管理」よりご変更ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        グリーンライナーポイントは付きますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>当サイト（パソコン、ケータイ・スマホサイト）で、グリーンライナーをネット予約でご利用いただくと、代金１００円ごとに１ポイントのグリーンライナーポイントが付与されます。ポイントはご旅行終了日の3日後に付与いたします。詳しくは「<a
                            href="<?php global $url_member_point;
                                                                                                                                                    echo $url_member_point; ?>">グリーンライナーポイント</a>」をご確認ください。
                        お電話・ご来店でのご予約、また、楽天トラベル、高速バスドットコム等からのご予約の場合はポイントは付与されませんのでご了承ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        グリーンライナーポイントを利用するにはどうすればよいですか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>ご予約時の決済情報入力画面にて利用するポイント数をご入力してください。ポイントは100～30000ポイントの間でご利用いただくことができます。また、お電話でのご予約ではポイントを利用することはできませんのでご了承ください。詳しくは「<a
                            href="<?php global $url_member_point;
                                                                                                                                                        echo $url_member_point; ?>">グリーンライナーポイント</a>」をご確認ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        複数のログインIDのポイントを１つにまとめることはできますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>できません。予めご了承ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        ポイントを使って予約したものをキャンセルした場合、ポイントはどうなりますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>ポイント利用でご予約いただいた商品をキャンセルされた場合、キャンセルされた即時にポイントはご利用可能ポイントへと戻ります。<br>
                        なお、キャンセル料金が発生する際はポイントを優先してご利用いただいております。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        ポイントを換金できますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>できません。予めご了承ください。
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-contents">
            <a class="open-btn">
                <dl class="open-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_q.svg">
                    </dt>
                    <dd>
                        ポイントに有効期限はありますか？
                    </dd>
                </dl>
                <p class="accordion_icon">
                    <span></span>
                    <span></span>
                </p>
            </a>
            <div class="open-contents">
                <dl class="contents-inr">
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/company/recruit-faq_a.svg">
                    </dt>
                    <dd>ポイントは付与日より3年間となります。 現在お持ちのポイント数およびポイントの履歴、有効期限はマイページの「ポイント管理／ポイント残高・履歴照会表示」 画面よりご確認いただけます。
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>