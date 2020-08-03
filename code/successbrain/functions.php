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


function my_delete_local_jquery()
{
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_delete_local_jquery');
