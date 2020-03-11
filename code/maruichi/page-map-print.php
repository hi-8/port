<?php
/*
Template Name: map-print
*/
?>
<?php get_header(); ?>
<div class="c--heading1">
    <h1>高速バス 乗り降りば</h1>
</div>
<?php require TEMPLATEPATH . "/module/maps-link.php"; ?>
<section id="sec_maps">
    <h2 class="title">乗りば地図印刷用</h2>
    <dl class="maps-cell">
        <dt>石川発東京行</dt>
        <dd>
            <a target="_blank" href="/pdf/GL01map.pdf">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                石川発東京行（金沢経由）
            </a>
        </dd>
        <dd>
            <a target="_blank" href="/pdf/map-ntt7.pdf">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                石川発東京行（富山経由） 3/31まで
            </a>
            <a target="_blank" href="/pdf/GL02map.pdf" style="margin-top:10px;">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                石川発東京行（富山経由） 4/1以降
            </a>
            <p class="txt-attention">※2020年4月1日出発便より時間及び経由地が変更になっています。</p>
        </dd>
    </dl>
    <dl class="maps-cell">
        <dt>東京発石川行</dt>
        <dd>
            <a target="_blank" href="/pdf/GL03map.pdf">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                東京発石川行（金沢経由）
            </a>
        </dd>
        <dd>
            <a target="_blank" href="/pdf/map-ttn4.pdf">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                東京発石川行（富山経由） 3/31まで
            </a>
            <a target="_blank" href="/pdf/GL04map.pdf" style="margin-top:10px;">
                <img class="btn-ico" src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_arrow.svg">
                東京発石川行（富山経由） 4/1以降
            </a>
            <p class="txt-attention">※2020年4月1日出発便より時間及び経由地が変更になっています。</p>
        </dd>
    </dl>
</section>

<?php get_footer(); ?>