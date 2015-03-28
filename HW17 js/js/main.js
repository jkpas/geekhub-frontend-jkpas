jQuery(function ($) {








    $( "#button1" ).click(function() {
        $( "#menu1" ).slideToggle();
    });

    $( "#button2" ).hover(function() {
            $( "#menu2" ).slideToggle();
        });

    $("#modal-window-button").click(function(e) {
        e.preventDefault();
        $("#modal-bg").fadeIn(600, function() {
                $("#modal-window").fadeIn(500);
            });
    });

    $("#modal-bg, .close-window").click(function(e) {
        e.preventDefault();
        $("#modal-bg").fadeOut(500);
        $("#modal-window").fadeOut(500);
    });

    $("")



});
