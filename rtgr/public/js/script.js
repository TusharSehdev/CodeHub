

    $(document).ready(function(){
        $(".slide:gt(0)").hide();
        setInterval(function() {$(".slide:first-child").fadeOut(500).next(".slide").fadeIn(500).end().appendTo("#show_case")}, 4000);
    });