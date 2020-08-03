<?php get_header(); ?>
<section id="sec_archive">
    <h2 class="p--contact__head">
        お知らせ
    </h2>
    <div class="archive__inr">
        <?php
        if (have_posts()) :
        ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="archive__content">
                    <div class="archive__top">
                        <div class="archive__top--date">
                            <time class="archive__top--time" datetime="<?php the_time('Y.m.d'); ?>">
                                <span><?php the_time('d'); ?></span>
                                <?php the_time('Y.m'); ?>
                            </time>
                        </div>
                        <div class="archive__top--main">
                            <p class="archive__top--cat">
                                <?php
                                $categories = get_the_category();
                                if ($categories) {
                                    echo $categories[0]->name;
                                }
                                ?>
                            </p>
                            <p class="archive__top--title"><?php the_title(); ?></p>
                        </div>
                    </div>
                    <div class="archive__bottom">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="single__numbers">
        <?php if (get_previous_post()) : ?>
            <?php previous_post_link('%link', '<img class="single__prev" src="' . get_template_directory_uri() . '/img/post/pagenate_arrow.svg" alt="前のページ" width="7"/><p>前のページ</p>'); ?>
        <?php endif; ?>
        <a href="/news" class="single__back">
            <p>一覧へ</p>
        </a>
        <?php if (get_next_post()) : ?>
            <?php next_post_link('%link', '<p>次のページ</p><img class="single__next" src="' . get_template_directory_uri() . '/img/post/pagenate_arrow.svg" alt="次のページ" width="7"/>'); ?>
        <?php endif; ?>
    </div>

    <img class="c--uma__img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/contact_img.png" alt="">
</section>
<?php get_footer(); ?>