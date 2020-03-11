<?php
/*
Template Name: fare
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>運賃案内</h1>
</div>
<div class="c--heading-menu">
    <ul class="heading-menu-list">
        <li class="heading-menu-list_cell">
            <a href="#sec_fare">運賃・料金</a>
        </li>
        <li class="heading-menu-list_cell">
            <a href="#sec_round">往復割引</a>
        </li>
        <li class="heading-menu-list_cell">
            <a href="#sec_child">小児・幼児運賃</a>
        </li>
        <li class="heading-menu-list_cell">
            <a href="#sec_student">学生割引</a>
        </li>
        <li class="heading-menu-list_cell">
            <a href="#sec_handicapped">障害者割引</a>
        </li>
        <li class="heading-menu-list_cell">
            <a href="#sec_combination">割引の併用について</a>
        </li>
    </ul>
</div>
<section id="sec_fare" class="main-contents">
    <div class="c--txt-content">
        <div class="c--gradient-head">
            <p class="head-name">運賃・料金</p>
        </div>
        <div class="content-area">
            <p>
                ・運賃は、<strong>曜日・祝祭日により異なります。</strong>詳しくは「<a
                    href="<?php global $url_exreserve;
                                                                    echo $url_exreserve; ?>">空席検索</a>」からご利用日運賃・料金をご確認下さい。<br>
                ・<strong>乗降地が七尾営業所・七尾駅・和倉温泉駅・羽咋駅の場合、運賃に1000円加算されます。</strong><br>（乗降地選択した際に自動的に加算されて表示）<br>
                ・<strong>デラックス３列シートのシート料金は1,500円です。</strong>（シート選択した際に自動的に運賃に加算されて表示されます）
            </p>
        </div>
    </div>
</section>
<section id="sec_round" class="main-contents">
    <div class="c--txt-content">
        <div class="c--gradient-head">
            <p class="head-name">往復割引</p>
        </div>
        <div class="content-area">
            <p>
                ・往復割引乗車券の有効期間は、<strong>往路乗車日を含めて８日間です。</strong><br>
                ・往復割引は、<strong>往復合計運賃・料金から５００円引きとなります。</strong>（往復割引適用の場合は、往路・復路の運賃・料金からそれぞれ250円引いた金額が自動的に表示されます）<br>
                ・<strong>「金沢便」と「富山便」の往復においても、往復割引が適用されます。</strong><br>
                ・<strong>往路３列シート、復路４列シートなど、異なるシートの往復においても往復割引が適用されます。</strong><br>
                ・往復予約をする場合は必ず、路線検索画面の「旅程」を<strong>「往復予約」にチェックしてください。</strong>「片道」＋「片道」でご予約されても往復割引の対象になりません。<br>
                ・往復割引は乗車券を事前にご購入いただいた場合に限り適用されます。ご乗車当日の乗場および車内発売では適用されませんのでご注意ください。<br>
                ・他の提携先高速バス販売サイトなどからのご予約では、ご利用頂けません。<br>
                ・往復割引適用の予約で片道のみのキャンセルの場合、規定に基づいた手数料が発生します。その際、本サービスは適用から除外されます。詳しくは<a
                    href="<?php global $url_about_cancel;
                                                                                            echo $url_about_cancel; ?>">変更・キャンセル</a>についてをご覧ください。<strong>（なお、往復→片道の変更は、マイページからはできません。お電話にて変更してください。）</strong>
            </p>
        </div>
    </div>
</section>
<section id="sec_child" class="main-contents">
    <div class="c--txt-content">
        <div class="c--gradient-head">
            <p class="head-name">小児・幼児運賃</p>
        </div>
        <div class="content-area">
            <p>
                ・<strong>小学生には小児運賃（大人運賃の半額）が適用されます。</strong>（小人を選択した際に自動的に計算されて表示されます）<br>
                ・<strong>小学生未満の幼児は無料ですが、幼児が座席を占有する場合は小児運賃が必要です。</strong>なお、座席を利用しない場合（ひざの上）は付添人の責任にて安全確保のうえご利用ください。ただしその場合は大人１名に対して乳幼児１名までとなります。<br>
                ・<strong>安全運行のため、幼児の方でも小児運賃をお支払い頂き、座席を別に確保されることをおすすめします。</strong>
            </p>
            <p class="graph-attention">※左右にスクロールできます。</p>
            <div class="table-flame">
                <table class="fare-table">
                    <tbody>
                        <tr>
                            <th>
                                <p>大人運賃</p>
                            </th>
                            <td>
                                <p>中学生以上</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>小児運賃</p>
                            </th>
                            <td>
                                <p>小学生（大人運賃の半額／10円未満切上）</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>幼児・乳児運賃</p>
                            </th>
                            <td>
                                <p>小学生未満（無料）</p>
                                <p>※ただし、次の場合は小児として取り扱います。<br>
                                    ・大人１名につき２名以上の乳幼児をお連れの場合、２人目以降の乳幼児<br>
                                    ・座席を占有する場合</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section id="sec_student" class="main-contents">
    <div class="c--txt-content">
        <div class="c--gradient-head">
            <p class="head-name">学生割引</p>
        </div>
        <div class="content-area">
            <p>
                ・学校教育法第１条に規定する中学校・高等学校・大学・専門学校、又は当社が指定した学校に通学する学生が、その学校に通学する者である事を証明した場合に適用されます。<br>
                ・乗車区分選択の際に必ず<strong>「学生」を選択してください。</strong>（ご予約後に乗車区分の変更はできません。一度ご予約をキャンセルの上、再度予約の取り直しとなります。ご入金済の場合は払戻しになります。キャンセル時に規定の払戻手数料と、お振込みの場合は銀行振込手数料がかかります。）<br>
                ・学生割引は、<strong>大人運賃から100～500円の割引</strong>がされます。割引額は利用日によって異なります。詳しくはサイドメニュー上の「空席検索」からご利用日運賃・料金をご確認下さい。（学生割引された金額が自動的に表示されます）<br>
                ・上記割引を適用される場合は、<strong>必ず乗車時に学生証をご提示ください。</strong>ご確認ができないお客様につきましては大人運賃との差額を申し受けますのでご了承下さい。<br>
                ・他の提携先高速バス販売サイトなどからのご予約では、ご利用頂けません。
            </p>
        </div>
    </div>
</section>
<section id="sec_handicapped" class="main-contents">
    <div class="c--txt-content">
        <div class="c--gradient-head">
            <p class="head-name">障害者割引</p>
        </div>
        <div class="content-area">
            <p>
                各自治体で発行する<strong>「身体障害者手帳」または「療育手帳」の交付を受けている方が対象です。</strong><br>
                ・<strong>電話または窓口にて</strong>ご予約ください。<br>
                ・障害者運賃は大人運賃の半額が適用されます。（「小児・幼児」運賃と同じ計算式となります。）<br>
                ・乗車時に「身体障害者手帳」または「療育手帳」をご持参ください。ご提示が必要となることがあります。<br>
                ・<strong>往復割引など、割引の併用はできません。</strong>
                ・<strong>精神障害者の方は割引対象外</strong>となります。
            </p>
        </div>
    </div>
</section>
<section id="sec_combination" class="main-contents">
    <div class="c--txt-content">
        <div class="c--gradient-head">
            <p class="head-name">割引の併用について</p>
        </div>
        <div class="content-area">
            <p>
                ・運賃の割引で２つ以上の割引条件に該当する場合は、重複して運賃の割引を適用いたしません。ただし、「ポイント割引」「往復割引」「学生割引」の併用については以下の通りです。
            </p>
            <p class="graph-attention">※左右にスクロールできます。</p>
            <div class="table-flame">
                <table class="combi-table">
                    <tbody>
                        <thead>
                            <th></th>
                            <th>
                                <p>ポイント割引</p>
                            </th>
                            <th>
                                <p>往復割引</p>
                            </th>
                            <th>
                                <p>学生割引</p>
                            </th>
                        </thead>
                        <tr>
                            <th>
                                <p>ポイント割引</p>
                            </th>
                            <td>
                                <p>−</p>
                            </td>
                            <td>
                                <p>併用可</p>
                            </td>
                            <td>
                                <p>併用可</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>往復割引</p>
                            </th>
                            <td>
                                <p>併用可</p>
                            </td>
                            <td>
                                <p>−</p>
                            </td>
                            <td>
                                <p>併用可</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>学生割引</p>
                            </th>
                            <td>
                                <p>併用可</p>
                            </td>
                            <td>
                                <p>併用可</p>
                            </td>
                            <td>
                                <p>−</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>