$("#change").click(function () {
    if (!$(".blue_window_small")[0] && !$(".scoreboard_small")[0] && !$(".sharegame_small")[0]){
        $(".blue_window").addClass("blue_window_small");
        $(".scoreboard").addClass("scoreboard_small");
        $(".sharegame").addClass("sharegame_small");
        $(".malus_popup").css('animation-name', 'malus_coming');
        $(".malus_popup").css('animation-timing-function', 'cubic-bezier(.34,1.19,.95,1)');
    } else {
        $(".blue_window").removeClass("blue_window_small");
        $(".scoreboard").removeClass("scoreboard_small");
        $(".sharegame").removeClass("sharegame_small");
        $(".malus_popup").css('animation-name', 'malus_reversecoming');
        $(".malus_popup").css('animation-timing-function', 'cubic-bezier(.05,0,.66,0)');
    }
});


$('#button_slide').on('click', function() {
    let idSlideActive = $('.slide.slide_active').index();

    if(idSlideActive+1 == $(".slide").length){
        /* $(".container_slide").remove();
        $(".slider_dotte").remove();
        $("#button_slide").remove(); */
        $('#thesection').remove();
        $(".scoregame").removeAttr('style');
        $(".foot").remove();

    } else {

        $(".slide.slide_active").removeClass('slide_active');


        $(".slide")[idSlideActive+1].classList.add('slide_active');

        
        $(".dotted.dotted_active").removeClass('dotted_active');
        $(".dotted")[idSlideActive+1].classList.add('dotted_active');

        if(idSlideActive == $(".slide").length-2){
            $('#button_slide').html("Terminer");
        }
    }
});