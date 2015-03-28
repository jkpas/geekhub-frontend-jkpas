jQuery(function ($) {

    //region ===== .css =====

    var flag1 = true;
    $("#btn-css").on("click", function () {
        if (flag1) {
            $(this).css("width", "500px");
            flag1 = false;
        } else {
            $(this).css("width", "100px");
            flag1 = true;
        }
    });

    //endregion

    //region ===== .fadeIn/.fadeOut =====

    var flag2 = true;
    $("#btn-fade").on("click", function () {
        if (flag2) {
            $("#fade").fadeIn(2000);
            flag2 = false;
        } else {
            $("#fade").fadeOut(2000);
            flag2 = true;
        }
    });

    //endregion

    //region ===== .fadeIn/.fadeOut =====

    $("#btn-ajax").click(function () {
        $.ajax({
            type: "GET",
            url: "/echo/json/",
            dataType: 'json',
            success: function () {
                alert("success");
            },
            error: function () {
                alert("error");
            }
        });
    });

    //endregion

    //region ===== .attr =====

    var imgClickCounter = 1;
    $(".img-wrap > img").on("click", function () {
            imgClickCounter++;
            if (imgClickCounter == 7) {imgClickCounter = 1}
            $(this).attr("src", "img/" + imgClickCounter + ".png")
    });


    //$(".img-wrap > img").on("click", function () {
    //    switch ($(this).attr('src')) {
    //        case "img/1.png":
    //            $(this).attr("src", "img/2.png");
    //            break;
    //        case "img/2.png":
    //            $(this).attr("src", "img/3.png");
    //            break;
    //        case "img/3.png":
    //            $(this).attr("src", "img/4.png");
    //            break;
    //        case "img/4.png":
    //            $(this).attr("src", "img/5.png");
    //            break;
    //        case "img/5.png":
    //            $(this).attr("src", "img/6.png");
    //            break;
    //        case "img/6.png":
    //            $(this).attr("src", "img/1.png");
    //            break;
    //    }
    //});

    //endregion

    $("button").on("click", function() {
        var ololo = $(this).attr("type")
    });


    $.ajax({
        url: "google.com",
        complete: function () {
            alert("nkjfgjerg")
        }
    });

    $("buton").on("click", function() {
        $(".popup").fadeOut();
        setTimeOut(function () {
            $(".popup").fadeIn()}, 2000);
    });

    $("button3").click(function (){
        var ddd = $(this).closest(".ololo").clone();
        $("button5").html(ddd)
    });

    $.ajax({
        url:"111.txt",
        success: function (){
            $(".popup").fadeIn(500)
    },
       error: function () {
            alert("bad"  
        }
    });

});
