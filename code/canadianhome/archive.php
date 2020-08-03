<?php
/*
Template Name: news
*/
?><?php get_header(); ?>
<section id="sec_archive">
    <h2 class="p--contact__head">
        お知らせ
    </h2>
    <div class="archive__inr">
        <ul class="archive__menu archive__news">
            <li class="archive__menu--cell">
                <a href="/news/">ALL</a>
            </li>
            <li class="archive__menu--cell">
                <a href="/category/cat_news/">NEWS</a>
            </li>
            <li class="archive__menu--cell">
                <a href="/category/cat_iecow/">イエカウボーイのブログ</a>
            </li>
        </ul>

        <?php
        $category_slug = get_query_var('category_name');
        query_posts("&posts_per_page=2&paged=$paged&category_name=$category_slug");
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
    <?php wp_reset_postdata(); ?>
    <?php
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'list',
        'prev_text' => __(''),
        'next_text' => __(''),
    ));
    ?>
    <img class="c--uma__img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/contact_img.png" alt="">
</section>
<?php get_footer(); ?>