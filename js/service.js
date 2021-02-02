$(document).ready(function() {
    $(".section2-about__typo a").hover(function() {
        $(".section2-about__typo a img").addClass("icon-read-more");
    }, function() {
        $(".section2-about__typo a img").removeClass("icon-read-more");
    });

    $(window).resize(function() {

        // Responsive background spin game
        var width = $(window).width();
        console.log(width);
        if (width < 768) {
            $(".text-service-introduce").addClass("mb-7");
            $(".col-first").removeClass("order-first");
            $(".sub").addClass("justify-content-center");
            $(".sub2").addClass("justify-content-center");
        }
        if (width >= 768) {
            $(".text-service-introduce").removeClass("mb-7");
            $(".col-first").addClass("order-first");
            $(".sub").removeClass("justify-content-center");
            $(".sub2").removeClass("justify-content-center");
        }
    });
});