var min = document.getElementById('minutes');
var sec = document.getElementById('seconds');
var malus_bar = document.querySelectorAll(".time_small_malus>span")
var now_date = 0;
var new_date = 0;
var count_sec;


// function malus_comming() {
//     $(".blue_window").addClass("blue_window_small");
//     $(".scoreboard").addClass("scoreboard_small");
//     $(".sharegame").addClass("sharegame_small");
//     $(".malus_popup").css('animation-name', 'malus_coming');
//     $(".malus_popup").css('animation-timing-function', 'cubic-bezier(.34,1.19,.95,1)');

// };
// function malus_going() {
//     $(".blue_window").removeClass("blue_window_small");
//     $(".scoreboard").removeClass("scoreboard_small");
//     $(".sharegame").removeClass("sharegame_small");
//     $(".malus_popup").css('animation-name', 'malus_reversecoming');
//     $(".malus_popup").css('animation-timing-function', 'cubic-bezier(.05,0,.66,0)');
// }
// function result_coming(){
//     $(".malus_popup_result").css('animation-name', 'result_coming');
//     $(".malus_popup_result").css('animation-timing-function', 'cubic-bezier(.34,1.19,.95,1)');
// }
// function result_going(){
//     $(".malus_popup_result").css('animation-name', 'result_reversecoming');
//     $(".malus_popup_result").css('animation-timing-function', 'cubic-bezier(.05,0,.66,0)');
// }


$('#button_slide').on('click', function() {
    let idSlideActive = $('.slide.slide_active').index();
    intscore1 = 0;
    intscore2 = 0;
    count_sec = 0;


    if(idSlideActive+1 == $(".slide").length){
        /* $(".container_slide").remove();
        $(".slider_dotte").remove();
        $("#button_slide").remove(); */
        $('#thesection').remove();
        $(".scoregame").removeAttr('style');
        now_date = Date.now();
        new_date = now_date;



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


function updateChrono() {


    // const new_date = new Date()
    new_date+=1000;
    const diff = new_date - now_date;

    const m = Math.floor(diff / 1000 / 60) %60 ;
    const s = Math.floor(diff / 1000) %60 ;

    min.innerHTML = m < 10 ? '0' + m : m;
    sec.innerHTML = s < 10 ? '0' + s : s;

    count_sec++;

    if (count_sec == 40 && (intscore1<10 || intscore2<10)) {
        choose_pledge();
        count_sec = 0;
    }
}
setInterval(updateChrono, 1000);

// function time_bar() {
//     var elem = document.getElementById("bar-value");
//     elem.style.width = '100%';
//     var width = 100;
//     var id = setInterval(frame, 1000);
//     function frame() {
//         if (width <= 0) {
//             clearInterval(id);
//         } else {
//             width = width-10;
//             elem.style.width = width + '%';
//         }
//     }
// };
// function choose_pledge() {
//     malus_comming();
//     time_bar();
//     setTimeout(malus_going, 1000*10);
//     setTimeout(result_coming, 1000*12);
//     setTimeout(result_going, 1000*15);

// }

// // if (!$("#thesection")) {
// //     setInterval(display_malus_bonus, 3000);
// // };
// $('#change').on('click', function() {
//     // setInterval(choose_pledge, 1000)
//     choose_pledge()
// });




