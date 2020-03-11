<?php get_header(); ?>
<div class="c--heading1">
    <h1>ニュース</h1>
</div>
<section id="sec_single">
    <div class="inr">
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
            <?php if (get_previous_post( true, '' )) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_g-min.svg" alt="">
            <?php previous_post_link('%link', '前の記事へ', TRUE, ''); ?>
            <?php endif; ?>
        </li>
        <li class="next">
            <?php if (get_next_post( true, '' )) : ?>
            <?php next_post_link('%link', '次の記事へ', TRUE, ''); ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow_g-min.svg" alt="">
            <?php endif; ?>
        </li>
    </ul>


</section>
<?php get_footer(); ?>