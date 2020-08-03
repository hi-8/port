<?php get_header(); ?>
<section id="sec_const">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="single-const__inr">
                <h2 class="p--contact__head--mid">
                    施工事例・入居者の声
                </h2>
                <p class="single-const__title"><?php the_title(); ?></p>
                <p class="single-const__option">
                    <?php if (get_field('const_people')) : ?>
                        <?php the_field('const_people'); ?>
                        &nbsp;／&nbsp;
                    <?php endif; ?>
                    <?php if (get_field('const_date')) : ?>
                        施工日&nbsp;<?php the_field('const_date'); ?>
                    <?php endif; ?>
                </p>
                <img class="single-cost__subv" src="<?php echo get_template_directory_uri(); ?>/img/post/const_subv.jpg" alt="">
                <?php if (get_field('const_mainv')) : ?>
                    <img class="single-cost__mainv" src="<?php the_field('const_mainv'); ?>" alt="">
                <?php endif; ?>
                <div class="single-const__content">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
            $previous_post = get_previous_post();
            $next_post = get_next_post();
            $prev_terms = get_the_terms($previous_post->ID, 'const_cat', $single = true);
            $next_terms = get_the_terms($next_post->ID, 'const_cat', $single = true);
            $prev_people = get_post_meta($previous_post->ID, 'const_people', $single = true);
            $next_people = get_post_meta($next_post->ID, 'const_people', $single = true);
            $prev_date = get_post_meta($previous_post->ID, 'const_date', $single = true);
            $next_date = get_post_meta($next_post->ID, 'const_date', $single = true);
            ?>
    <?php endwhile;
    endif; ?>
    <ul class="single-const__nav">
        <li class="single-const__nav-cell">
            <?php if (get_previous_post()) : ?>
                <?php previous_post_link('%link', '<img class="single__prev" src="' . get_template_directory_uri() . '/img/post/pagenate_arrow.svg" alt="前のページ" width="7"/><p>前のページ</p>'); ?>
            <?php endif; ?>
            <?php
            $prevThumbnail = get_the_post_thumbnail($previous_post->ID, array(340, 230)); //サムネイル取得
            echo $prevthumbnail;
            previous_post_link('%link', $prevThumbnail . '%title'); //出力
            ?>
            <p class="single-const__linktext">
                <?php echo $prev_terms[0]->name; ?>&emsp;
                <?php echo $prev_people; ?>&emsp;
                <?php echo $prev_date; ?>
            </p>
        </li>
        <li class="single-const__nav-cell">
            <?php if (get_next_post()) : ?>
                <?php next_post_link('%link', '<p>次のページ</p><img class="single__next" src="' . get_template_directory_uri() . '/img/post/pagenate_arrow.svg" alt="次のページ" width="7"/>'); ?>
            <?php endif; ?>
            <?php
            $nextThumbnail = get_the_post_thumbnail($next_post->ID, array(340, 230)); //サムネイル取得
            echo $nextthumbnail;
            next_post_link('%link', $nextThumbnail . '%title'); //出力
            ?>
            <p class="single-const__linktext">
                <?php echo $next_terms[0]->name; ?>&emsp;
                <?php echo $next_people; ?>&emsp;
                <?php echo $next_date; ?>
            </p>
        </li>
    </ul>
    <a href="/construction" class="single-const__back">一覧にもどる</a>
    <img class="c--uma__img" src="<?php echo get_template_directory_uri(); ?>/img/cmn/contact_img.png" alt="">
</section>
<?php get_footer(); ?>