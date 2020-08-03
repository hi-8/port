<?php get_header(); ?>
<?php
/*
Template Name: contact
*/
?>

<section id="sec_contact">
    <div class="contact__inr">
        <h2 class="p--contact__head">
            お問い合わせ
        </h2>
        <p class="p--contact__head-sub">カナディアンホームへのご意見・ご相談は、<br class="sp">こちらのフォームよりお問い合わせください。</p>
        <a href="/reserve" class="p--contact__head-square">店頭にて相談をご希望の方はこちら</a>

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
        location = '/comp/';
    }, false);
</script>