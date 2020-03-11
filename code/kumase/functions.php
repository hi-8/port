<?php


// body classにスラッグを追加
add_filter('body_class', 'add_page_slug_class_name');
function add_page_slug_class_name($classes)
{
    if (is_page()) {
        $page = get_post(get_the_ID());
        $classes[] = $page->post_name;
    }
    return $classes;
}



// ショートコード
// テーマurl
function shortcode_templateurl()
{
    return get_bloginfo('template_url');
}
add_shortcode('template_url', 'shortcode_templateurl');
add_filter('widget_text', 'do_shortcode');

// url
function shortcode_url()
{
    return get_bloginfo('url');
}
add_shortcode('url', 'shortcode_url');


// アイキャッチ画像を使用
add_theme_support('post-thumbnails');
//feauture-thumbnail
add_image_size('feauture-thumbnail', 1000, 600, true);
//post-thumbnail
add_image_size('post-thumbnail', 432, 268, true);


// 投稿記事一覧にアイキャッチ画像を表示
function manage_posts_columns($columns)
{
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
function add_column($column_name, $post_id)
{
    if ('thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, array(75,75), 'thumbnail');
    }
    if (isset($thum) && $thum) {
        echo $thum;
    } else {
        echo __('None');
    }
}
add_filter('manage_posts_columns', 'manage_posts_columns');
add_action('manage_posts_custom_column', 'add_column', 10, 2);


// アイキャッチ画像デフォルト
add_action('save_post', 'save_default_thumbnail');
function save_default_thumbnail($post_id)
{
    $post_thumbnail = get_post_meta($post_id, $key = '_thumbnail_id', $single = true);
    if (!wp_is_post_revision($post_id)) {
        if (empty($post_thumbnail)) {
            update_post_meta($post_id, $meta_key = '_thumbnail_id', $meta_value = '23');
        }
    }
}


// 画像の不要な属性を削除
function remove_img_attr($html)
{
    $html = preg_replace('/ (width|height)."\d*"/', '', $html);
    $html = preg_replace('/ class=".+"/', ' class=""', $html);
    return $html;
}
add_filter('get_image_tag', 'remove_img_attr');


// ウィジェット
if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(4)) {
    register_sidebars(
        1,
        array(
        'name'=>'info',
        'before_widget' => '<div class="widget-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        )
    );
}
register_sidebars(
    1,
    array(
    'name'=>'banner',
    'before_widget' => '<li>',
    'after_widget' => '</li>'
    )
);

//不要なデフォルトウィジェットを非表示
function unregister_widgets()
{
    unregister_widget('WP_Widget_Pages');//固定ページ
    unregister_widget('WP_Widget_Links');//リンク集
    //unregister_widget('WP_Widget_Search');//サイト内検索フォーム
    //unregister_widget('WP_Widget_Archives');//月別アーカイブ
    unregister_widget('WP_Widget_Meta');//めた情報(login/outなど)
    unregister_widget('WP_Widget_Calendar');//カレンダー
    //unregister_widget('WP_Widget_Text');//任意のテキストとHTML
    //unregister_widget('WP_Widget_Categories');//カテゴリーリスト
    //unregister_widget('WP_Widget_Recent_Posts');//最近の投稿
    unregister_widget('WP_Widget_Recent_Comments');//最近のコメント
    unregister_widget('WP_Widget_RSS');//RSSフィード
    //unregister_widget('WP_Widget_Tag_Cloud');//タグクラウド
    //unregister_widget('WP_Nav_Menu_Widget');//ナビゲーションメニュー
}
add_action('widgets_init', 'unregister_widgets');


 // メニューを非表示にする
function remove_menus()
{
    if (!current_user_can('level_10')) { //level10以下のユーザーの場合メニューをunsetする
        remove_menu_page('wpcf7'); //Contact Form 7
        global $menu;
        unset($menu[2]); // ダッシュボード
        /* unset($menu[4]); */ // メニューの線1
        /*  unset($menu[5]); */ // 投稿
        /*  unset($menu[10]); */ // メディア
        unset($menu[15]); // リンク
        unset($menu[20]); // ページ
        unset($menu[25]); // コメント
        unset($menu[59]); // メニューの線2
        unset($menu[60]); // テーマ
        unset($menu[65]); // プラグイン
        unset($menu[70]); // プロフィール
        unset($menu[75]); // ツール
        unset($menu[80]); // 設定
        unset($menu[90]); // メニューの線3
    }
}
add_action('admin_menu', 'remove_menus');


// カテゴリ情報を取得する。
function apt_category_info($tax='category')
{
    global $post;
    $cat = get_the_terms($post->ID, $tax);
    $obj = new stdClass;
    if ($cat) {
        $cat = array_shift($cat);
        $obj->name = $cat->name;
        $obj->slug = $cat->slug;
    } else {
        $obj->name = '';
        $obj->slug = '';
    }
    return $obj;
}



// ギャラリーのスタイルシートを消す
add_filter('use_default_gallery_style', '__return_false');





// デバイスの切り分け
//スマホ表示分岐
function is_mobile()
{
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser

    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//不要なmetaを出力しない
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');



//親カテゴリ 自動チェック
function category_parent_linkage_script()
{
    wp_enqueue_script('category-parent-linkage', get_template_directory_uri().'/js/category-parent-linkage.js', array( 'jquery' ));
}

add_action('admin_print_scripts-post.php', 'category_parent_linkage_script');
add_action('admin_print_scripts-post-new.php', 'category_parent_linkage_script');

//親カテゴリーのテンプレートを子カテゴリーに適用
add_filter('category_template', 'my_category_template');

function my_category_template($template)
{
    $category = get_queried_object();
    if ($category->parent != 0 
        && ($template == "" || strpos($template, "category.php") !== false)
    ) {
        $templates = array();
        while ($category->parent) {
            $category = get_category($category->parent);
            if (!isset($category->slug)) {
                break;
            }
            $templates[] = "category-{$category->slug}.php";
            $templates[] = "category-{$category->term_id}.php";
        }
        $templates[] = "category.php";
        $template = locate_template($templates);
    }
    return $template;
}


  //single.phpに集約
function add_post_format_template($single_template)
{
    $new_template = $single_template;

    $post = get_queried_object();
    $post_format = get_post_format($post);

    $single_post_format_template = locate_template("single-{$post_format}.php");
    if (!empty($single_post_format_template)) {
        $new_template = $single_post_format_template;
    }

    return $new_template;
}

add_filter('single_template', 'add_post_format_template');


add_filter('show_admin_bar', '__return_false');