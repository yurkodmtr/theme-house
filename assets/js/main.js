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

    /* contactsFix */
    var contactsFix = function(){
        $('.contacts__content .item__list').unwrap();
    }

    /* preloader */
    var hidePeloader = function(){
        $('.preloader').fadeOut();
    }

    /* navBtn */
    var navBtn = function(){
        $('.nav_btn_open').click(function(){
            if ( $(this).hasClass('open') ) {
                $(this).removeClass('open');
                $('.mainheader__middle .nav_device').slideUp();
            } else {
                $(this).addClass('open');
                $('.mainheader__middle .nav_device').slideDown();
            }
        });
    }

    /* get width of scrollbar */
    var scrollWidth = function(){
        window.scrollWidth = 0;
        var getScrollBarWidth =  function() {
           var inner = document.createElement('p');
           inner.style.width = "100%";
           inner.style.height = "200px";

           var outer = document.createElement('div');
           outer.style.position = "absolute";
           outer.style.top = "0px";
           outer.style.left = "0px";
           outer.style.visibility = "hidden";
           outer.style.width = "200px";
           outer.style.height = "150px";
           outer.style.overflow = "hidden";
           outer.appendChild (inner);

           document.body.appendChild (outer);

           var w1 = inner.offsetWidth;
           outer.style.overflow = 'scroll';
           var w2 = inner.offsetWidth;
           if (w1 == w2) w2 = outer.clientWidth;

           document.body.removeChild (outer);

            window.scrollWidth = (w1 - w2);
       }
       getScrollBarWidth();
       console.log(window.scrollWidth);
    }

    /* hide device menu */
    var deiviceMenuHide = function(){
        if ( $(window).width()+window.scrollWidth >= 1000 ) {
            $('.mainheader__middle .nav_device').hide();
            $('.nav_btn_open').removeClass('open')
        }
    }



    $(window).load(function(){
        contactsFix();
        removePlaceholder();
        itemHeightFix($('.advantages .item__list .item'));
        if ( $(window).width()+window.scrollWidth >= 460 ) {
             itemHeightFix($('.documents .item article div'));
        } else {
            $('.documents .item article div').css('height','auto');
        }
       
        navBtn();
        headerSlideshow();
        hidePeloader();
        scrollWidth();
    });

    $(window).resize(function(){
        itemHeightFix($('.advantages .item__list .item'));
        if ( $(window).width()+window.scrollWidth >= 460 ) {
             itemHeightFix($('.documents .item article div'));
        } else {
            $('.documents .item article div').css('height','auto');
        }

        deiviceMenuHide();
        scrollWidth();
    });
});