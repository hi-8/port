<?php if (!is_page(9)) : ?>
<!-- ww -->
<nav>
    <div class="nav_pc">
        <a class="nav_pc__top" href="/ww">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/project__icon--ww.svg" alt="">
        </a>
        <ul class="nav_pc__link">
            <li class="nav_pc__link__cell">
                <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_store--news">NEWS</a>
            </li>
            <li class="nav_pc__link__cell">
                <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_pairing">PAIRING</a>
                <div class="nav_pc__sub-inr">
                    <?php require TEMPLATEPATH . '/module/pairing_list.php'; ?>
                </div>
            </li>
            <li class="nav_pc__link__cell">
                <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_menu">MENU</a>
                <div class="nav_pc__sub-inr">
                    <?php require TEMPLATEPATH . '/module/menu_list.php'; ?>
                </div>
            </li>
            <li class="nav_pc__link__cell">
                <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_party">PARTY／WEDDING</a>
            </li>
            <!-- <li class="nav_pc__link__cell">
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_photo">PHOTO</a>
                    </li> -->
            <li class="nav_pc__link__cell">
                <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_store--contact">CONTACT</a>
            </li>
        </ul>
        <ul class="nav_pc__sns">
            <li class="nav_pc__sns__cell">
                <a href="https://www.facebook.com/wwbeer2020" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ww/sns_ico_fb.svg" alt="">
                </a>
            </li>
            <li class="nav_pc__sns__cell">
                <a href="https://www.instagram.com/ww_white_beer/" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ww/sns_ico_ins.svg" alt="">
                </a>
            </li>
            <li class="nav_pc__sns__cell">
                <a href="mailto:info@savagecreative.jp" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ww/sns_ico_mail.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
    <div class="nav_sp">
        <div class="nav_sp--top">
            <a href="/ww" class="toplink">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ww/nav_sp-logo.svg" alt="">
            </a>
            <a class="nav-icon">
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="nav_sp--bottom">
            <div class="bottom__inr">
                <dl class="bottom__cell">
                    <dt class="bottom__cell--name">
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_store--news">
                            NEWS
                        </a>
                    </dt>
                </dl>
                <dl class="bottom__cell">
                    <dt class="bottom__cell--name accordion">
                        <p>PAIRING</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/ico_nav_arrow.svg" alt="">
                    </dt>
                    <dd class="bottom__cell--detail">
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_pairing_world">・WORLD</a>
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_pairing_color">・COLOR</a>
                    </dd>
                </dl>
                <dl class="bottom__cell" id="sp_menu-nav">
                    <dt class="bottom__cell--name accordion">
                        <p>MENU</p>
                        <img src=" <?php echo get_template_directory_uri(); ?>/img/ww/ico_nav_arrow.svg" alt="">
                    </dt>
                    <dd class="bottom__cell--detail">
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#unker_menu">・お料理 </a>
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#unker_menu">・世界のビール</a>
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#unker_menu">・アルコール</a>
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#unker_menu">・ノンアルコールドリンク類</a>
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#unker_menu">・飲み放題</a>
                    </dd>
                </dl>
                <dl class="bottom__cell">
                    <dt class="bottom__cell--name">
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_party_party">
                            PARTY
                        </a>
                    </dt>
                </dl>
                <dl class="bottom__cell">
                    <dt class="bottom__cell--name">
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_party_wedding">
                            WEDDING
                        </a>
                    </dt>
                </dl>
                <dl class="bottom__cell">
                    <dt class="bottom__cell--name">
                        <a href="<?php if (is_single()) : ?>/ww<?php endif; ?>#sec_store--contact">
                            CONTACT
                        </a>
                    </dt>
                </dl>
            </div>
        </div>

    </div>
</nav>
<div class="nav_fixedbtn">
    <a class="nav_fixedbtn--tel" href="tel:076-208-7004">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/nav_sp-tel.svg" alt="">
    </a>
    <a class="nav_fixedbtn--mail" href="mailto:info@savagecreative.jp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ww/nav_sp-mail.svg" alt="">
    </a>
</div>
<?php else : ?>
<!-- savage -->
<nav>
    <div class="nav_pc">
        <a class="nav_pc__top" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_logo.svg" alt="">
        </a>
        <ul class="nav_pc__link">
            <li class="nav_pc__link__cell">
                <a href="#sec_project">SAVAGE PROJECT</a>
            </li>
            <li class="nav_pc__link__cell">
                <a href="#sec_pickup">PICK UP</a>
            </li>
            <li class="nav_pc__link__cell">
                <a href="#sec_news">NEWS</a>
            </li>
            <li class="nav_pc__link__cell">
                <a href="#sec_about">ABOUT</a>
            </li>
            <li class="nav_pc__link__cell">
                <a href="#sec_recruit">RECRUIT</a>
            </li>
        </ul>
    </div>
    <div class="nav_sp">
        <div class="nav_sp--top">
            <a href="/" class="toplink">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/img_logo.svg" alt="">
            </a>
            <a class="nav-icon">
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="nav_sp--bottom">
            <div class="bottom__inr">
                <dl class="bottom__cell">
                    <dt class="bottom__cell--name">
                        <a href="#sec_project">
                            SAVAGE PROJECT
                        </a>
                    </dt>
                    <dd>
                        <ul class="nav_store--list">
                            <li class="nav_store--cell">
                                <a href="#top-ww">WW</a>
                            </li>
                            <li class="nav_store--cell">
                                <a href="#top-1945">1945</a>
                            </li>
                            <li class="nav_store--cell">
                                <a href="#top-fullof">FULL OF BEANS</a>
                            </li>
                        </ul>
                    </dd>
                </dl>
                <dl class="bottom__cell">
                    <dt class="bottom__cell--name">
                        <a href="#sec_pickup">PICK UP</a>
                    </dt>
                </dl>
                <dl class="bottom__cell" id="sp_menu-nav">
                    <dt class="bottom__cell--name">
                        <a href="#sec_news">NEWS</a>
                    </dt>
                </dl>
                <dl class="bottom__cell">
                    <dt class="bottom__cell--name">
                        <a href="#sec_about">ABOUT</a>
                    </dt>
                </dl>
                <dl class="bottom__cell">
                    <dt class="bottom__cell--name">
                        <a href="#sec_recruit">RECRUIT</a>
                    </dt>
                </dl>
            </div>
        </div>
    </div>
</nav>
<?php endif; ?>