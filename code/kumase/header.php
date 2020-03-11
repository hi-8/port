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
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <!--css-->

    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/dist/main.css?<?php echo date("Ymd-Hi"); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBMuQ7ReFhI2vfnqQI4DX1FtUFKKnuDSz8&language=ja"></script>

    <main>
        <div id="loading">
            <div class="progress"></div>
        </div>
        <?php get_sidebar(); ?>
        <article>
            <nav id="nav-body">
                <div class="nav-body-inr">
                    <img class="logo-nav" src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_foot.svg"
                        alt="">
                    <ul class="nav-list">
                        <li>
                            <a href="/"><span>TOP</span>
                                <p>トップページ</p>
                            </a>
                        </li>
                        <li>
                            <a href="/recruit/"><span>RECRUIT</span>
                                <p>採用情報</p>
                            </a>
                        </li>
                        <li>
                            <a href="/entry/"><span>ENTRY</span>
                                <p>募集要項・エントリーフォーム</p>
                            </a>
                        </li>
                        </li>
                        <li>
                            <a href="/privacy/"><span>PRIVACY POLICY</span>
                                <p>個人情報保護方針</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>