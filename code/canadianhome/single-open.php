<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <section id="sec_open">
        <?php while (have_posts()) : the_post(); ?>
            <div class="single-open__inr">
                <h2 class="p--contact__head">
                    内覧会情報
                </h2>
                <?php if (get_field('open_date')) : ?>
                    <p class="single-open__date">
                        <?php the_field('open_date'); ?>
                    </p>
                <?php endif; ?>
                <p class="single-open__title"><?php the_title(); ?></p>
                <p class="single-open__cat">
                    <?php
                    $terms = get_the_terms($post->ID, 'open_cat');
                    if ($terms) {
                        echo $terms[0]->name;
                    }
                    ?>
                </p>
                <?php if (get_field('open_mainimg')) : ?>
                    <img class="single-open__mainimg" src="<?php the_field('open_mainimg'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>

                <div class="single-open__content">
                    <?php the_content(); ?>
                </div>
                <div class="single-open__information">
                    <p class="single-open__information--title">内覧会情報</p>
                    <ul class="single-open__information--list">
                        <li class="single-open__information--cell">
                            <dl>
                                <dt>
                                    <p>場所</p>
                                </dt>
                                <dd>
                                    <p class="single-open__information--mid single-open__information--place">
                                        <?php if (get_field('open_name')) : ?>
                                            <?php the_field('open_name'); ?>
                                        <?php endif; ?>
                                        <?php if (get_field('open_map')) : ?>
                                            <a href="<?php the_field('open_map') ?>" target="_blank">Google map</a>
                                        <?php endif; ?>
                                    </p>
                                    <p class="single-open__information--min">
                                        <?php if (get_field('open_postalcode')) : ?>
                                            <?php the_field('open_postalcode'); ?>
                                            <?php endif; ?>&emsp;<br class="sp">
                                            <?php if (get_field('open_postal')) : ?>
                                                <?php the_field('open_postal'); ?>
                                            <?php endif; ?>
                                    </p>
                                </dd>
                            </dl>
                        </li>
                        <li class="single-open__information--cell">
                            <dl>
                                <dt>
                                    <p>開催日</p>
                                </dt>
                                <dd>
                                    <p class="single-open__information--mid">
                                        <?php if (get_field('open_date')) : ?>
                                            <?php the_field('open_date'); ?>
                                        <?php endif; ?>
                                    </p>
                                </dd>
                            </dl>
                        </li>
                        <li class="single-open__information--cell">
                            <dl>
                                <dt>
                                    <p>時間</p>
                                </dt>
                                <dd>
                                    <p class="single-open__information--min">
                                        下のご予約フォームよりご希望の時間帯をご選択ください。
                                    </p>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="single-open__map--full">
                <?php if (get_field('open_map2')) : ?>
                    <?php the_field('open_map2'); ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </section>
    <?php $cat = get_field('open_form');
    if ($cat == 'on') : ?>
        <section id="sec_form">
            <h2 class="p--contact__head p--contact__head--white">
                内覧会情報
            </h2>
            <p class="p--contact__head-sub p--contact__head-sub--white">こちらの物件の内見をご希望の方は、お電話もしくはご予約フォームよりお問い合わせください。</p>
            <?php require('module/contact-tel.php') ?>
            <div class="sec_form__wrap">
                <h4 class="c--contact-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/icon_contact.svg" alt="">
                    WEBでのご予約
                </h4>
                <?php echo do_shortcode('[contact-form-7 id="29" title="内覧会予約"]') ?>
            </div>
            <img class="c--uma__img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/contact_img.png" alt="">
        </section>
    <?php elseif ($cat == 'off') : ?>
    <?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
<script>
    document.addEventListener('wpcf7mailsent', function(event) {
        location = '/comp-open/';
    }, false);
</script>