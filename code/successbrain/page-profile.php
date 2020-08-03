<?php
/*
Template Name: profile
*/
?>
<?php get_header(); ?>
<section class="c--mainv">
    <a href="/" class="c--top__link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_w.svg" alt="株式会社サクセスブレイン">
    </a>
    <h1 class="c--mainvText">
        <p class="c--mainvText--en">PROFILE</p>
        <p class="c--mainvText--jp">会社概要・アクセス</p>
    </h1>
</section>
<section id="sec_profile">
    <div class="profile__inr">
        <div class="profile__cell">
            <div class="c--headingIcon"></div>
            <p class="profile__title">会社概要</p>
            <div class="profile__content">
                <dl class="profile__text profile__text--Flex">
                    <dt>会社名</dt>
                    <dd>株式会社サクセスブレイン</dd>
                </dl>
                <dl class="profile__text profile__text--Flex">
                    <dt>所在地</dt>
                    <dd>〒920-0364　<br class="sp">金沢市松島2-191 COMビル 3F<br>
                        TEL.076-269-8653　FAX.076-269-8654<br>
                        E-MAIL.info@success.co.jp</dd>
                </dl>
                <dl class="profile__text profile__text--Flex">
                    <dt>代表者</dt>
                    <dd>岩木 弘勝<br>
                        代表取締役社長・税理士<br>
                        ＩＣＧ国際経営コンサルタント</dd>
                </dl>
                <dl class="profile__text profile__text--Flex">
                    <dt>業務内容</dt>
                    <dd>会社づくり支援<br>
                        社風づくり支援<br>
                        仕組みづくり支援</dd>
                </dl>
                <dl class="profile__text profile__text--Flex">
                    <dt>設立年月</dt>
                    <dd>平成5年12月<br class="sp">（社名変更／平成22年10月）</dd>
                </dl>
                <dl class="profile__text profile__text--Flex">
                    <dt>グループ会社</dt>
                    <dd>税理士法人サクセスブレイン</dd>
                </dl>
            </div>
        </div>
        <div class="profile__cell">
            <div class="c--headingIcon"></div>
            <p class="profile__title">アクセス</p>
            <iframe class="profile__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3204.539269766273!2d136.6024542151523!3d36.565220488591336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff834c7aaa5207d%3A0x1b44460e92d81fb6!2z44CSOTIwLTAzNjQg55-z5bed55yM6YeR5rKi5biC5p2-5bO277yS5LiB55uu77yR77yZ77yR!5e0!3m2!1sja!2sjp!4v1595292133663!5m2!1sja!2sjp" width="100%" height="430" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="profile__content">
                <dl class="profile__text profile__text--Block">
                    <dt>お車でお越しの場合</dt>
                    <dd>野田専光寺線を国道8号線に向かって松島北交差点手前、ガソリンスタンド跡地を左折して250ｍ先。ガラス張り５階建てビルの3階。専用駐車場あり（ビルに向かって左側の駐車場です）</dd>
                </dl>
                <dl class="profile__text profile__text--Block">
                    <dt>バスでお越しの場合</dt>
                    <dd>金沢駅10番のりばより、「上安原行バス」で松島バス停下車（約30分）、徒歩約10分。</dd>
                </dl>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>