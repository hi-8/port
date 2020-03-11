<?php get_header(); ?>
<section id="sec_single-contents">
    <div class="sidebar">
        <p class="single-cattitle">NEWS</p>
    </div>
    <div class="main-contents">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <time class="post__date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <p class="post__title">
            <?php the_title(); ?>
        </p>
        <div class="post__content">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <ul class="under-nav">
            <li class="prev">
                <?php if (get_previous_post(true, '')) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ww/slidebtn.svg" alt="">
                <?php previous_post_link('%link', '%title', TRUE, ''); ?>
                <?php endif; ?>
            </li>
            <li class="next">
                <?php if (get_next_post(true, '')) : ?>
                <?php next_post_link('%link', '%title', TRUE, ''); ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ww/slidebtn.svg" alt="">
                <?php endif; ?>
            </li>
        </ul>
    </div>
</section>
<section id="sec_store--group">
    <p class="group--title">- GROUP RESTAURANT -</p>
    <ul class="group--list">
        <li class="group--list__cell">
            <a href="https://www.fullofbeans.jp/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/store__logo--fullof.svg" alt="">
            </a>
        </li>
        <li class="group--list__cell">
            <a href="https://delicious1945.jp/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/store__logo--1945.svg" alt="">
            </a>
        </li>
    </ul>
</section>
<?php get_footer('store');