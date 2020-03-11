<?php
$post = $wp_query->post;
if (in_category(array('news_unyu'))) {
    include(STYLESHEETPATH . '/single-unyu.php');
} else {
    include(STYLESHEETPATH . '/single-default.php');
}
?>