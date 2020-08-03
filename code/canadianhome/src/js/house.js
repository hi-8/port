$(function () {
    if ($("body").hasClass("page-template-page-house")) {

        var $replaceHouse = $(".houseimg");
        var replaceBase = "_house.";
        var housePath = location.pathname;

        function houseImg() {
            $replaceHouse.each(function () {
                var $this = $(this);

                if (housePath.indexOf('modern') > -1) {
                    HouseReplaceName = "_modern.";
                } else if (housePath.indexOf('nature') > -1) {
                    HouseReplaceName = "_nature.";
                } else if (housePath.indexOf('american') > -1) {
                    HouseReplaceName = "_american.";
                } else if (housePath.indexOf('longtime') > -1) {
                    HouseReplaceName = "_longtime.";
                }

                $this.attr("src", $this.attr("src").replace(replaceBase, HouseReplaceName));
            });
        }

        houseImg();
        var resizeTimer;
        $(window).on("resize", function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function () {
                houseImg();
            }, 200);
        });
    }
});