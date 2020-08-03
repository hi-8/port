$(function () {
    if ($("body").hasClass("page-template-page-iecow")) {

        var windowWidth = $(window).width();
        var windowSm = 812;
        if (windowWidth <= windowSm) {

        } else {
            $(window).on('load', function () {
                const mainv = anime.timeline();
                mainv
                    .add({
                        targets: '.iecow_mainv-right-img01',
                        opacity: 1,
                        translateY: -10,
                        duration: 300,
                        easing: 'linear'
                    })
                    .add({
                        targets: '.iecow_mainv-right-img02',
                        opacity: 1,
                        translateX: 10,
                        duration: 300,
                        easing: 'linear'
                    })
                    .add({
                        targets: '.iecow_mainv-left',
                        opacity: 1,
                        translateY: -10,
                        duration: 400,
                        delay: 600,
                        easing: 'linear'
                    })
            });
        }
        $('#iecow_sec01').on('inview', function (event, isInView) {
            if (isInView) {
                anime({
                    targets: "#iecow_sec01.is-Animation .iecow_sec-mainimg",
                    translateY: [20, 0],
                    opacity: 1,
                    duration: 1000,
                    easing: 'linear',
                    delay: 700,
                })
            } else {
                $(this).removeClass('is-Animation');
            }
        });
        $('#iecow_sec02').on('inview', function (event, isInView) {

            if (isInView) {
                const secAnime = anime.timeline({});
                secAnime
                    .add({
                        targets: '#iecow_sec02.is-Animation .iecow_sec-title--hari',
                        opacity: 1,
                        translateX: [-10, 0],
                        rotate: '1turn',
                        delay: 600,
                    })
                    .add({
                        targets: '#iecow_sec02.is-Animation .iecow_sec-title--text',
                        opacity: 1,
                        scale: [.6, 1],
                        easing: 'linear',
                        duration: 100,
                    })
                    .add({
                        targets: '#iecow_sec02.is-Animation .iecow_sec-mainimg',
                        opacity: 1,
                        delay: 400,
                        scale: [.8, 1]
                    })
                    .add({
                        targets: '#iecow_sec02.is-Animation .iecow_sec-detail',
                        opacity: 1,
                        translateY: [10, 0],
                    })
                event.preventDefault;
            } else {
                $(this).removeClass('is-Animation');
            }
        });
        $('#iecow_sec03').on('inview', function (event, isInView) {

            if (isInView) {
                const secAnime = anime.timeline({});
                secAnime
                    .add({
                        targets: '#iecow_sec03.is-Animation .iecow_sec-title--hari',
                        opacity: 1,
                        translateX: [-10, 0],
                        rotate: '1turn',
                        delay: 600,
                    })
                    .add({
                        targets: '#iecow_sec03.is-Animation .iecow_sec-title--text',
                        opacity: 1,
                        scale: [.6, 1],
                        easing: 'linear',
                        duration: 100,
                    })
                    .add({
                        targets: '#iecow_sec03.is-Animation .iecow_sec-mainimg',
                        opacity: 1,
                        translateX: [-100, 0],
                        delay: 400,
                    })
                    .add({
                        targets: '#iecow_sec03.is-Animation .iecow_sec-detail',
                        opacity: 1,
                        translateY: [10, 0],
                    })

            } else {
                $(this).removeClass('is-Animation');
            }
        });
        $('#iecow_sec04').on('inview', function (event, isInView) {

            if (isInView) {
                const secAnime = anime.timeline({});
                secAnime
                    .add({
                        targets: '#iecow_sec04.is-Animation .iecow_sec-title--hari',
                        opacity: 1,
                        translateX: [-10, 0],
                        rotate: '1turn',
                        delay: 600,
                    })
                    .add({
                        targets: '#iecow_sec04.is-Animation .iecow_sec-title--text',
                        opacity: 1,
                        scale: [.6, 1],
                        easing: 'linear',
                        duration: 100,
                    })
                    .add({
                        targets: '#iecow_sec04.is-Animation .iecow_sec-mainimg',
                        opacity: 1,
                        translateX: [-50, 0],
                        delay: 400,
                    })
                    .add({
                        targets: '#iecow_sec04.is-Animation .iecow_sec-detail',
                        opacity: 1,
                        translateY: [10, 0],
                    })

            } else {
                $(this).removeClass('is-Animation');
            }
        });
        $('#iecow_sec05').on('inview', function (event, isInView) {

            if (isInView) {
                const secAnime = anime.timeline({});
                secAnime
                    .add({
                        targets: '#iecow_sec05.is-Animation .iecow_sec-title--hari',
                        opacity: 1,
                        translateX: [-10, 0],
                        rotate: '1turn',
                        delay: 600,
                    })
                    .add({
                        targets: '#iecow_sec05.is-Animation .iecow_sec-title--text',
                        opacity: 1,
                        scale: [.6, 1],
                        easing: 'linear',
                        duration: 100,
                    })
                    .add({
                        targets: '#iecow_sec05.is-Animation .iecow_sec-mainimg',
                        opacity: 1,
                        translateX: [10, 0],
                        delay: 400,
                    })
                    .add({
                        targets: '#iecow_sec05.is-Animation .iecow_sec-detail',
                        opacity: 1,
                        translateY: [10, 0],
                    })
                event.preventDefault;
            } else {
                $(this).removeClass('is-Animation');
            }
        });
        $('#iecow_sec06').on('inview', function (event, isInView) {

            if (isInView) {
                const secAnime = anime.timeline({});
                secAnime
                    .add({
                        targets: '#iecow_sec06.is-Animation .iecow_sec-title--hari',
                        opacity: 1,
                        translateX: [-10, 0],
                        rotate: '1turn',
                        delay: 600,
                    })
                    .add({
                        targets: '#iecow_sec06.is-Animation .iecow_sec-title--text',
                        opacity: 1,
                        scale: [.6, 1],
                        easing: 'linear',
                        duration: 100,
                    })
                    .add({
                        targets: '#iecow_sec06.is-Animation .iecow_sec-mainimg',
                        opacity: 1,
                        scale: [.5, 1],
                        delay: 400,
                    })
                    .add({
                        targets: '#iecow_sec06.is-Animation .iecow_sec-detail',
                        opacity: 1,
                        translateY: [10, 0],
                    })
                event.preventDefault;
            } else {
                $(this).removeClass('is-Animation');
            }
        });
        $('#sec_contact').on('inview', function (event, isInView) {

            if (isInView) {
                const secAnime = anime.timeline({});
                secAnime
                    .add({
                        targets: '#sec_contact.is-Animation .contact_inr-img1',
                        opacity: 1,
                        translateX: [-10, 0],
                        delay: 400,
                    })
                    .add({
                        targets: '#sec_contact.is-Animation .contact_inr-img2',
                        opacity: 1,
                        scale: [.8, 1],
                        delay: 400,
                    })
                event.preventDefault;
            } else {
                $(this).removeClass('is-Animation');
            }
        });
    }
});