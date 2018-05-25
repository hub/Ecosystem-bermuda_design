$(document).ready(function(){
    $( function() {
        $( "#datepicker-one" ).datepicker();
        $( "#datepicker-two" ).datepicker();
    });

    $( ".icn-que" ).hover(function() {
        var a = $(this).closest('.input-text').find('.abs-block');
        a.fadeIn();
        var b = $(this).closest('.asd-hint').find('.abs-block');
        b.fadeIn();
    }, function() {
        var a = $(this).closest('.input-text').find('.abs-block');
        a.fadeOut();
        var b = $(this).closest('.asd-hint').find('.abs-block');
        b.fadeOut();
    })



    //step

    $(".form-steps").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "fade",
         onStepChanged: (event, currentIndex, newIndex) =>
            {       


            },
    });

    $('.next').each( (i, item, next) => {
       $(item).click(() => {
            $(".form-steps").steps("next")
        })
    })

    $('.previous').each( (i, item, next) => {
       $(item).click(() => {
            $(".form-steps").steps("previous")
        })
    })


    
    

});