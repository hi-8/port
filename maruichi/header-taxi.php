<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>能登・輪島旅行はマリンタクシー</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/taxi/css/common.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/taxi/drawer/drawer.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <?php wp_head(); ?>
</head>

<body class="drawer drawer--left">
    <header>
        <div class="wrap">
            <h1><a href="/marinetaxi/"><img class="logoimg" src="<?php echo get_template_directory_uri(); ?>/taxi/img/logo_img.jpg" width="58"
                    height="58" alt=""><img class="logo"
                    src="<?php echo get_template_directory_uri(); ?>/taxi/img/logo.svg" width="211" height="49"
                    alt="能登・輪島旅行はマリンタクシー MARIN TAXI"></a></h1>
            <p class="hour">お電話でのお問い合わせ<br>[ 営業時間 7時-26時 ]</p>
            <p class="tel">0120-58-8018</p>
            <a href="#contact"><img src="<?php echo get_template_directory_uri(); ?>/taxi/img/icon_q.svg" width="27"
                    height="27" alt=""><span>お問い合わせ</span></a>
        </div>
    </header>
    <header class="fixed">
        <h1><a href="/marinetaxi/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/taxi/img/logo2.svg" width="211"
                height="25" alt="石川・能登を中心とした運送会社。 MARUICHI TRANSPORT"></a></h1>
<?php if ( is_page( 'taxi' ) ): ?>
        <a href="#kankotaxi">観光・送迎タクシー</a>
        <a href="#kaigotaxi">介護タクシー</a>
        <a href="/marintaxi/detail/">観光モデルコース</a>
        <a href="#company">会社案内</a>
        <a href="#contact"><span>お問い合わせ</span></a>
<?php else: ?>
        <a href="#kankotaxi">観光・送迎タクシー</a>
        <a href="#kaigotaxi">介護タクシー</a>
        <a href="/marintaxi/detail/">観光モデルコース</a>
        <a href="#company">会社案内</a>
        <a href="#contact"><span>お問い合わせ</span></a>
<?php endif; ?>
    </header>
    <header class="sp">
        <div class="wrap">
            <h1><a href="/marinetaxi/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/taxi/img/logo.svg" width="175"
                    height="40" alt="石川・能登を中心とした運送会社。 MARUICHI TRANSPORT"></a></h1>
        </div>
        <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
        </button>
        <div style="overflow-y: scroll">
            <nav class="drawer-nav">
                <div>
                    <div class="menu_wrap">
                        <div class="menu01 submenu_btn">
                            <span>TOP</span>
                        </div>
<?php if ( is_page( 'taxi' ) ): ?>
                        <div class="submenu01" style="display: none;">
                            <a href="#goodtime">GOOD TIME with MARIN TAXI</a>
                            <a href="#kankotaxi">観光タクシー</a>
                            <a href="#kaigotaxi">介護タクシー</a>
                            <a href="#company">会社概要</a>
                            <a href="#history">沿革</a>
                            <a href="#place">所在地</a>
                            <a href="#contact">お問い合わせ</a>
                        </div>
                        <div class="menu02 submenu_btn02">
                            <span>おすすめ観光コース</span>
                        </div>
                        <div class="submenu02">
                            <a href="/taxi/detail/#noto">輪島・能登金剛コース</a>
                            <a href="/taxi/detail/#chirihama">輪島・千里浜コース</a>
                            <a href="/taxi/detail/#uchiura">内浦・輪島コース</a>
                            <a href="/taxi/detail/#air">能登空港コース</a>
                            <a href="/taxi/detail/#ofuku">能登金剛 往復コース</a>
                            <a href="/taxi/detail/#notojima">能登島コース</a>
                        </div>
<?php else: ?>
                        <div class="submenu01" style="display: none;">
                            <a href="/taxi/#goodtime">GOOD TIME with MARIN TAXI</a>
                            <a href="/taxi/#kankotaxi">観光タクシー</a>
                            <a href="/taxi/#kaigotaxi">介護タクシー</a>
                            <a href="/taxi/#company">会社概要</a>
                            <a href="/taxi/#history">沿革</a>
                            <a href="/taxi/#place">所在地</a>
                            <a href="#contact">お問い合わせ</a>
                        </div>
                        <div class="menu02 submenu_btn02">
                            <span>おすすめ観光コース</span>
                        </div>
                        <div class="submenu02">
                            <a href="/taxi/detail/#noto">輪島・能登金剛コース</a>
                            <a href="/taxi/detail/#chirihama">輪島・千里浜コース</a>
                            <a href="/taxi/detail/#uchiura">内浦・輪島コース</a>
                            <a href="/taxi/detail/#air">能登空港コース</a>
                            <a href="/taxi/detail/#ofuku">能登金剛 往復コース</a>
                            <a href="/taxi/detail/#notojima">能登島コース</a>
                        </div>
<?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>