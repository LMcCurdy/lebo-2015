var carouselCount = 0;
    $(".ba-gallery").each(function () {
        $(this).attr("id", "owl-carousel" + carouselCount);
        $('#owl-carousel' + carouselCount).owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: true,
    pagination:false,
    navigationText : ["<i class=\"fa fa-caret-left\"></i>","<i class=\"fa fa-caret-right\"></i>"],
        });
        carouselCount++;
    });