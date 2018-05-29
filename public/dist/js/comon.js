$(document).ready(function(){

    //datepicker

    $( function() {
        $( "#datepicker-one" ).datepicker();
        $( "#datepicker-two" ).datepicker();
    });


    //hover-el
    
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
    });



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


    // select

    $('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }
  
    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
  
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });


});


    
    

});