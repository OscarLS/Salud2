$(document).ready(function() {

    $('.botonDespUp').click(function(){
        $('body,html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function(){
        if($(this).scrollTop() > 0){
            $('.botonDespUp').slideDown(300);
        }else{
            $('.botonDespUp').slideUp(300);
        }
    });

});