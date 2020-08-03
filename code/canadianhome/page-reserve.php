<?php get_header(); ?>
<?php
/*
Template Name: reserve
*/
?>

<section id="sec_reserve">
    <div class="contact__inr">
        <h2 class="p--contact__head">
            ご来場予約フォーム
        </h2>
        <p class="p--contact__head-sub">カナディアンホームへのご意見・ご相談は、<br class="sp">こちらのフォームよりお問い合わせください。</p>
        <p class="p--contact__head-min">※ ご来場希望日の前日17：00までに<br class="sp">ご予約をお願いいたします。</p>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <img class="c--uma__img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/contact_img.png" alt="">

    </div>

</section>

<?php get_footer(); ?>
<script>
    document.addEventListener('wpcf7mailsent', function(event) {
        location = '/comp-reserve/';
    }, false);
</script>