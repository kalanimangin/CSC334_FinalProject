$(document).ready(function (){
    $(this).mouseenter(function(evt) {
        $(".dropdown").show(300);

        evt.preventDefault();
    });

    $(this).mouseleave(function(evt) {
        $(".dropdown").hide(300);
        evt.preventDefault();
    });
});

