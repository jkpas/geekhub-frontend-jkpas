jQuery(function ($) {


    //region ===== Carousel init =====
    $("#owl-order-now").owlCarousel({
        autoPlay: 5000,
        slideSpeed: 1000,
        singleItem: true,
        stopOnHover: true,
        navigation: true,
        pagination: true
    });
    //endregion

    //region ===== Carousel init our-clients =====
    $("#owl-our-clients").owlCarousel({
        autoPlay: 5000,
        slideSpeed: 1000,
        stopOnHover: true,
        navigation: true,
        pagination: true,
        responsiveBaseWidth: window,
        itemsDesktop: [1199,8],
        itemsTablet: [768,4],
        itemsMobile: [479,2]
    });
    //endregion

    //region ===== Class active =====
    var selector = '.header-nav li';

    $(selector).on('click', function(){
        $(selector).removeClass('active');
        $(this).addClass('active');
    });
    //endregion

    //region ===== Class active2 =====
    var selector2 = '.desings-menu li';

    $(selector2).on('click', function(){
        $(selector2).removeClass('active2');
        $(this).addClass('active2');
    });
   //endregion

    //region ===== Masonry init =====
    var $container = $('#masonry-container');

    $container.masonry({
        columnWidth: 10 ,
        itemSelector: '.item'
    });
    //endregion

});
