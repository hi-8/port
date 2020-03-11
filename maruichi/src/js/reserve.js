$(function() {
  if ($("body").hasClass("page-template-page-reserve")) {
    $("#contact-btn-submit").after(
      $("<img/>").attr({
        src: "/_system/wp-content/themes/wp-voice/img/cmn/ico_arrow_w-min.svg",
        class: "submit-img"
      })
    );
    var windowWidth = $(window).width();
    var windowSm = 460;
    if (windowWidth <= windowSm) {
      //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
      $(function() {
        $(".view-sp").slick({
          autoplay: true,
          speed: 1000,
          dots: true,
          centerMode: true,
          centerPadding: "10%"
        });
        $("input#form--tel").prop("type", "tel");
        $("input#form--mail01 , input#form--mail02").prop("type", "email");
      });
    } else {
      $(function() {
        $(
          ".iziModal_01,.iziModal_02,.iziModal_03,.iziModal_04,.iziModal_05,.iziModal_06,.iziModal_07,.iziModal_08,.iziModal_09"
        ).iziModal({
          width: 780,
          closeButton: true,
          navigateCaption: false,
          onOpened: function() {
            $("body").addClass("hidden");
          },
          onClosed: function() {
            $("body").removeClass("hidden");
          }
        });
      });
    }
  }
});
