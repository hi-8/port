<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<section class="c--mainv">
    <a href="/" class="c--top__link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_w.svg" alt="株式会社サクセスブレイン">
    </a>
    <h1 class="c--mainvText">
        <p class="c--mainvText--en">CONTACT</p>
        <p class="c--mainvText--jp">お問い合わせ</p>
    </h1>
</section>
<section class="contact__catch">
    <div class="p-contact__inr">
        <div class="c--headingIcon"></div>
        <p class="contact__catchText">
            お問い合わせは、下記フォームに必要事項をご記入の上“送信”ボタンを押してください。<br>
            ２日（営業日）経っても返事が届かない場合は、<br>
            お手数ですが再度お送りいただくか、<a href="mailto:info@success.co.jp" target="_blank">こちら</a>からメールをお送りください。
        </p>
    </div>
</section>
<section class="contact__form">
    <div class="p-contact__inr">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>