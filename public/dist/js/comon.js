$(document).ready(function(){
    $( function() {
        $( "#datepicker-one" ).datepicker();
        $( "#datepicker-two" ).datepicker();
    });



    // $( ".icn-que" ).each( (i, item, next)=> {
    //     $(item).hover(
    //         function() {
    //           $( '.abs-block' ).fadeIn();
    //         }, function() {
    //           $( '.abs-block' ).fadeOut();
    //         }
    //     );
    // });


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
    

});