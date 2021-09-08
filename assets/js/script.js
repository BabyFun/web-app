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




