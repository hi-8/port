<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>お問い合わせ</h1>
</div>
<section id="sec_contact">
    <h2 class="title">七尾営業所(本社)へのご連絡</h2>
    <div class="inr">
        <dl class="sign-cell">
            <dt>電話番号</dt>
            <dd><a class="tel" href="tel:0767-53-6161">0767-53-6161（代表）</a></dd>
        </dl>
        <dl class="sign-cell">
            <dt>FAX番号</dt>
            <dd>0767-52-7456</dd>
        </dl>
        <dl class="sign-cell">
            <dt>所在地</dt>
            <dd>〒926-0014　石川県七尾市矢田町2-1
                <a class="gicon" target="_blank" href="<?php global $url_nanao;
                                                        echo $url_nanao; ?>">Google Map</a>
            </dd>
        </dl>
        <dl class="sign-cell">
            <dt>営業時間</dt>
            <dd>月〜金曜：9:00~18:00／土曜9:00~15:00</dd>
        </dl>
        <dl class="sign-cell">
            <dt>休業日</dt>
            <dd>日曜／祝日／お盆／年末年始</dd>
        </dl>
    </div>
    <h2 class="title">金沢営業所へのご連絡</h2>
    <div class="inr">
        <dl class="sign-cell">
            <dt>電話番号</dt>
            <dd><a class="tel" href="tel:076-266-1401">076-266-1401（代表）</a></dd>
        </dl>
        <dl class="sign-cell">
            <dt>FAX番号</dt>
            <dd>076-266-0413</dd>
        </dl>
        <dl class="sign-cell">
            <dt>所在地</dt>
            <dd>〒920-0332　石川県金沢市無量寺町ホ120
                <a class="gicon" target="_blank" href="<?php global $url_kanazawa;
                                                        echo $url_kanazawa; ?>">Google Map</a>
            </dd>
        </dl>
        <dl class="sign-cell">
            <dt>営業時間</dt>
            <dd>月〜金曜：9:00~18:00／土曜9:00~15:00</dd>
        </dl>
        <dl class="sign-cell">
            <dt>休業日</dt>
            <dd>日曜／祝日／お盆／年末年始</dd>
        </dl>
    </div>
</section>
<?php get_footer(); ?>