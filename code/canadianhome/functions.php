<?php


add_theme_support('post-thumbnails');
function get_thumb_img($size = 'full')
{
    $thumb_id = get_post_thumbnail_id();                         // アイキャッチ画像のIDを取得

    $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得

    $thumb_src = $thumb_img[0];    // 画像のurlだけ取得

    $thumb_alt = get_the_title();  //alt属性に入れるもの（記事のタイトルにしています）

    return '<img src="' . $thumb_src . '" alt="' . $thumb_alt . '">';
};


function set_org_query_vars($query_vars)
{
    $query_vars[] = 'prmEstate';
    return $query_vars;
}
add_filter('query_vars', 'set_org_query_vars');



function responsive_pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged)) $paged = 1;

    //ページ情報の取得
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {

        echo '<ul class="c--post__pager" role="menubar" aria-label="Pagination">';
        if ($paged > 1) {
            //1つ戻る
            echo '<li class="post__pager--prev"><a href="' . get_pagenum_link($paged - 1) . '"><img src="' . get_theme_file_uri() . '/img/cmn/post_pager-arrow.svg" alt=""><p>Previous</p></a></li>';
        }

        //番号つきページ送りボタン
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? '<li class="post__pager--cell active"><p>' . $i . '</p></li>' : '<li class="post__pager--cell"><a href="' . get_pagenum_link($i) . '" class="inactive" ><p>' . $i . '</p></a></li>';
            }
        }
        if ($paged < $pages) {
            echo '<li class="post__pager--next"><a href="' . get_pagenum_link($paged + 1) . '"><p>Next</p><img src="' . get_theme_file_uri() . '/img/cmn/post_pager-arrow.svg" alt=""></a></li>';
        }
        //1つ進む

        echo '</ul>';
    }
}




function post_has_archive($args, $post_type)
{

    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


add_filter('previous_post_link', 'add_prev_post_link_class');
function add_prev_post_link_class($output)
{
    return str_replace('<a href=', '<a class="single__link-prev" href=', $output);
}
add_filter('next_post_link', 'add_next_post_link_class');
function add_next_post_link_class($output)
{
    return str_replace('<a href=', '<a class="single__link-next" href=', $output);
}




add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query)
{
    if (!is_admin() && $query->is_main_query() && is_tax()) {
        $query->set('posts_per_page', 10);
    }
}
