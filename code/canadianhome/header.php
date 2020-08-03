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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal-default-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/main.css?<?php echo date('Ymd-Hi'); ?>">
    <link rel="stylesheet" href="https://use.typekit.net/ujo7htn.css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <?php wp_head(); ?>

</head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/jquery.inview.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>


<body <?php body_class(); ?>>

    <nav class="c--navigation">
        <div class="c--navigation__inr">
            <div class="c--navigation__inr--left">
                <a href="/">
                    <h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/head-logo.svg" alt="カナディアンホーム">
                    </h1>
                </a>
            </div>
            <div class="c--navigation__inr--btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <div class="c--navigation__inr--right">
                <ul class="sub-nav-list">
                    <li class="sub-nav-list-cell">
                        <a href="/iecow">家を買うまで</a>
                    </li>
                    <li class="sub-nav-list-cell">
                        <a href="/open">内覧会情報</a>
                    </li>
                    <li class="sub-nav-list-cell">
                        <a href="/news">お知らせ</a>
                    </li>
                    <!-- <li class="sub-nav-list-cell">
                        <a href="/owner">入居者の声</a>
                    </li> -->
                    <li class="sub-nav-list-cell">
                        <a href="/#sec_house">カナディアンホームの家</a>
                    </li>
                    <li class="sub-nav-list-cell contact">
                        <a href="/contact">お問い合わせ</a>
                    </li>
                </ul>
                <ul class="sub-nav-address">
                    <li class="sub-nav-address__cell">
                        <p>
                            <span>本部</span><br>
                            <a target="_blank" href="https://goo.gl/maps/XFoGCWwbSsfANYaa6">石川県金沢市二口町ハ15-8 2F</a><br>
                            TEL.076-259-5782
                        </p>
                    </li>
                    <li class="sub-nav-address__cell">
                        <p>
                            <span>石川店</span><br>
                            <a target=_blank"" href="https://goo.gl/maps/XFoGCWwbSsfANYaa6">石川県金沢市二口町ハ15-8</a><br>
                            TEL.076-208-3896
                        </p>
                    </li>
                    <li class="sub-nav-address__cell">
                        <p>
                            <span>富山店</span><br>
                            <a target="_blank" href="https://goo.gl/maps/oAjYeJcWXCiTgEoUA">富山県富山市萩原235-1</a><br>
                            TEL.076-464-3203
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>