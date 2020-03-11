<?php
/*
Template Name: news
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>ニュース</h1>
</div>
<section id="sec_page-news">
    <div class="inr">
        <ul class="news-list">
            <?php
            $args = array(
                'post_type' => 'post',
                'category__not_in' => array(4),
                'posts_per_page' => 10,
                'paged' => $paged,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="news-list-cell">
                <a href="<?php the_permalink() ?>">
                    <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                    <p class="detail"><?php
                                                if (mb_strlen($post->post_title, 'UTF-8') > 40) {
                                                    $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
                                                    echo $title . '…';
                                                } else {
                                                    echo $post->post_title;
                                                }
                                                ?></p>
                </a>
            </li>
            <?php endwhile;
            endif; ?>

        </ul>
        <div class="news-pager">
            <?php
            if ($the_query->max_num_pages > 1) {
                echo paginate_links(
                    array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%/',
                        'current' => max(1, $paged),
                        'total' => $the_query->max_num_pages,
                        'prev_next' => true,
                        'prev_text' => '前のページへ',
                        'next_text' => '次のページへ',
                    )
                );
            }

            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>