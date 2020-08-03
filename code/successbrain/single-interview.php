<?php get_header(); ?>
<div class="interview__title">
    <p>EXECUTIVE INTERVIEW</p>
</div>
<section id="sec_contents">
    <?php
    if (have_posts()) :
    ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="interview__contentsInr">
                <div class="p-post__label">
                    <div class="p-post__labelText">
                        <p>INTERVIEW <span><?php the_field('interview_num'); ?></span>
                        </p>
                    </div>
                </div>
                <div class="interview__contentsBody">
                    <div class="interview__contentsBody">
                        <div class="interview__contentsMainv">
                            <img src="<?php the_field('interview_mainv'); ?>" alt="">

                            <div class="interview__contentsProf">
                                <div class="interview__contentsProf--left">
                                    <p class="interview__contentsProf--catch"><?php the_field('interview_catch'); ?></p>
                                </div>
                                <div class="interview__contentsProf--right">
                                    <p class="interview__contentsProf--pos"><?php the_field('interview_pos'); ?></p>
                                    <p class="interview__contentsProf--name"><?php the_field('interview_name'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="interview__contentsDetail">
                            <?php if (have_rows('interview_detail')) : ?>
                                <?php while (have_rows('interview_detail')) : the_row(); ?>
                                    <div class="interview__contentsCard">
                                        <?php if (get_sub_field("interview_detailImg")) : ?>
                                            <img class="interview__contentsCard--img" src="<?php the_sub_field('interview_detailImg'); ?>" alt="">
                                        <?php endif; ?>
                                        <?php if (get_sub_field("interview_detailTitle")) : ?>
                                            <div class="interview__contentsCard--title">
                                                <p class=""><?php the_sub_field('interview_detailTitle'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field("interview_detailText")) : ?>
                                            <p class="interview__contentsCard--text"><?php the_sub_field('interview_detailText'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php
    $prev_post = get_previous_post_link();
    $next_post = get_next_post_link();
    if (isset($prev_post) || isset($next_post)) :
    ?>
        <div class="p-post__pager">
            <?php if (isset($prev_post)) : ?>
                <div class="p-post__pagerArrow p-post__pagerArrow--prev">
                    <?php previous_post_link('%link', 'PREV'); ?>
                </div>
            <?php endif; ?>
            <a href="/" class="c--moreBtn c--moreBtn--blue c--moreBtn--center">TOP</a>
            <?php if (isset($next_post)) : ?>
                <div class="p-post__pagerArrow p-post__pagerArrow--next">
                    <?php next_post_link('%link', 'NEXT'); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>