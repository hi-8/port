<?php get_header('unyu'); ?>
<div class="c--heading1" style="background-color: #B50023;padding: 40px 0;margin-top: 75px;">
    <h1 style="font-size: 2.3rem;color: #fff;text-align: center;font-weight: normal;">ニュース</h1>
</div>
<section id="sec_single-unyu">
    <div class="main">
<?php if ( wp_is_mobile() ) : ?>
        <div class="inr" style="border: none;">
<?php else: ?>
        <div class="inr">
<?php endif; ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <h2 class="title"><?php the_title(); ?></h2>
            <div class="content">
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile;
            endif; ?>
        </div>
        <ul class="under-nav">
            <li class="prev">
                <?php if (get_previous_post()) : ?>
                <?php previous_post_link('%link', '前の記事へ', TRUE, ''); ?>
                <?php endif; ?>
            </li>
            <li class="next">
                <?php if (get_next_post()) : ?>
                <?php next_post_link('%link', '次の記事へ', TRUE, ''); ?>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</section>

<p class="copyright" style="margin: 0 auto;">Copyright © Maruichi Unyu Co., Ltd. <br class="sp_block960">All Rights Reserved.</p>
<?php get_footer('unyu'); ?>
</body>

</html>