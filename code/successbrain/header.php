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
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Noto+Sans+JP:wght@400;500&family=Noto+Serif+JP:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/main.css?<?php echo date('Ymd-Hi'); ?>">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <?php wp_head(); ?>

</head>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/in-view@0.6.1/dist/in-view.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js?<?php echo date('Ymd-Hi'); ?>"></script>


<body <?php body_class(); ?>>
    <a class="c--contact__btn c--contact__btn--fixed" href="/contact">CONTACT</a>
    <nav class="c--navigation">
        <div class="c--navigation__inr">
            <div class="c--navigation__inr--left">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo.svg" alt="SUCCESS BRAIN">
                </a>
            </div>
            <div class="c--navigation--btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <div class="c--navigation__inr--right">
                <div class="c--navigation__wrap">
                    <ul class="c--navigation__cell">
                        <a class="c--contact__btn" href="/contact">CONTACT</a>
                        <li class="c--navigation__cell--link">
                            <a href="/">
                                <p class="c--navigation__cell--en">TOP</p>
                                <p class="c--navigation__cell--jp">トップページ</p>
                            </a>
                        </li>
                        <li class="c--navigation__cell--link">
                            <a href="/statement">
                                <p class="c--navigation__cell--en">STATEMENT</p>
                                <p class="c--navigation__cell--jp">ステートメント</p>
                            </a>
                        </li>
                        <li class="c--navigation__cell--link">
                            <a href="/philosophy">
                                <p class="c--navigation__cell--en">PHILOSOPHY PYRAMID</p>
                                <p class="c--navigation__cell--jp">理念ピラミッド®とは？</p>
                            </a>
                        </li>
                        <li class="c--navigation__cell--link">
                            <a>
                                <p class="c--navigation__cell--en">EXECUTIVE INTERVIEW</p>
                                <p class="c--navigation__cell--jp">エグゼクティブインタビュー</p>
                            </a>
                            <ul class="c--navigation__link--list">
                                <li class="c--navigation__link--listcell">
                                    <a href="/interview/kita">
                                        株式会社ビーイングホールディングス 代表取締役
                                        <span>喜多甚一 氏</span>
                                    </a>
                                </li>
                                <li class="c--navigation__link--listcell">
                                    <a href="/interview/mitani">
                                        三谷産業株式会社 代表取締役社長
                                        <span>三谷忠照 氏</span>
                                    </a>
                                </li>
                                <li class="c--navigation__link--listcell">
                                    <a href="/interview/munemori">
                                        株式会社宗重商店 代表取締役
                                        <span>宗守重泰 氏</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="c--navigation__cell">
                        <li class="c--navigation__cell--link">
                            <a href="/philosophy#sec_phylosophy--management">
                                <p class="c--navigation__cell--en">SUCCESS CONSULTING MENU</p>
                                <p class="c--navigation__cell--jp">マネジメントドクターの処方箋</p>
                            </a>
                        </li>
                        <li class="c--navigation__cell--link">
                            <a href="/#sec_client">
                                <p class="c--navigation__cell--en">CLIENT</p>
                                <p class="c--navigation__cell--jp">クライアント実績</p>
                            </a>
                        </li>
                        <li class="c--navigation__cell--link">
                            <a href="/information">
                                <p class="c--navigation__cell--en">INFORMATION</p>
                                <p class="c--navigation__cell--jp">インフォメーション</p>
                            </a>
                        </li>
                        <li class="c--navigation__cell--bottom">
                            <div class="c--navigation__cell--bottom--wrap">
                                <a class="c--navigation__cell--bottom--link" href="/message">トップメッセージ</a>
                                <a class="c--navigation__cell--bottom--link" href="https://www.success-brain.or.jp/" target="_blank">税理士法人サクセスブレイン</a>
                                <a class="c--navigation__cell--bottom--link" href="/publication">書籍紹介</a>
                                <a class="c--navigation__cell--bottom--link" href="/profile">会社概要・アクセス</a>
                            </div>
                            <div class="c--navigation__cell--bottom--wrap">
                                <a class="c--navigation__cell--bottom--link" href="/contact">お問い合わせ</a>
                                <a class="c--navigation__cell--bottom--link" href="/privacy">プライバシーポリシー</a>
                                <p class="c--navigation__cell--bottom--text"><span>TEL.076-269-8653</span><br>
                                    受付時間 / 月曜〜金曜 9 : 00 - 17 : 45<br>
                                    土・日・祝　定休日<br>
                                    E-mail. <a href="mailto:info@success.co.jp">info@success.co.jp</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main>