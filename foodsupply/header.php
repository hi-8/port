<?php
$slug = explode('/', $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
$navi = ($slug[1] == '') ? 'home' : $slug[1];
?>
<!doctype html>
<html lang="ja">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="author" content="//www.brandvoice.jp/">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <!--css-->
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/dist/main.css?<?php echo date('Ymd-Hi'); ?>">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if (strpos($_SERVER["REQUEST_URI"], '/dws/') !== false) : ?>
    <?php require TEMPLATEPATH . "/module/nav_dws.php"; ?>
    <?php else : ?>
    <?php require TEMPLATEPATH . "/module/nav_default.php"; ?>
    <?php endif; ?>