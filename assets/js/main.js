"use strict";

jQuery(document).ready(function($) {

    /* remove placeholder */
    var removePlaceholder = function(){
        $('input,textarea').focus(function(){
           $(this).data('placeholder',$(this).attr('placeholder')).attr('placeholder','');
        }).blur(function(){
           $(this).attr('placeholder',$(this).data('placeholder'));
        });
    }

    /* header slideshow */
    var headerSlideshow = function(){
        if ( $('.mainheader__bottom .slideshow').length < 1 ) {
            return false
        }

        $(".mainheader__bottom .slideshow > div:gt(0)").hide();

        setInterval(function() { 
          $('.mainheader__bottom .slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('.mainheader__bottom .slideshow');
        },  3000);
    }

    /* item height fix */
    var itemHeightFix = function(elem){
        if (elem.length < 1) {
            return false
        }
        var maxHeight = 0;
        elem.css('height','auto');
        elem.each(function(){
            var itemHeight = $(this).outerHeight();
            if ( itemHeight > maxHeight ) {
                maxHeight = itemHeight
            }
        });
        elem.css('height', maxHeight+'px');
    }

    var contactsFix = function(){
        $('.contacts__content .item__list').unwrap();
    }

    /* preloader */
    var hidePeloader = function(){
        $('.preloader').fadeOut();
    }

    $(window).load(function(){
        contactsFix();
        removePlaceholder();
        itemHeightFix($('.advantages .item__list .item'));
        if ( $(window).width() >= 460 ) {
             itemHeightFix($('.documents .item article div'));
        } else {
            $('.documents .item article div').css('height','auto');
        }
       
        headerSlideshow();
        hidePeloader();
    });

    $(window).resize(function(){
        itemHeightFix($('.advantages .item__list .item'));
        if ( $(window).width() >= 460 ) {
             itemHeightFix($('.documents .item article div'));
        } else {
            $('.documents .item article div').css('height','auto');
        }
    });
});