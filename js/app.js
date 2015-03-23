(function($) {
$(function() {
        $('.sokol61 input, .sokol61 select').styler();
})
})(jQuery)

$(window).load(function() {
     $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        slideshowSpeed: 3000,
        selector: ".slider-index > .item",
        directionNav: false,
        start: function(){
            $('#slider .flex-viewport').width('634px');
			$('#slider .flex-viewport .item').width('600px');
			$('#slider').css('overflow', 'visible');
        }
    });      
    $('#portfolio-slider').flexslider({
            animation: "slide",
            animationLoop: false,
            slideshow: false,
            directionNav: true,
            controlNav: "thumbnails",
            start: function(){
                $('#portfolio-slider .flex-control-thumbs li').prepend('<span class="overlay"></span>');
            }
    });	
    $('#catalog-slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            directionNav: true,
            sync: "#catalog-carousel"
    });	
    $('#catalog-carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            directionNav: false,
            itemWidth: 83,
            itemMargin: 8,
            maxItems: 7,
            asNavFor: '#catalog-slider'
    });
});

$(document)
    .on('click', '.fancybox-skin .close', function(){
        $.fancybox.close();
        return false;
    })
    .on('click', '.docs-feadback input[type=submit]:not(.active)', function(){
        $('.docs-feadback .list').slideDown({
                duration: 'fast',
                complete: function(){ 
                    $('.docs-feadback input[type=submit]:not(.active)').addClass('active');  					
                },
                start: function(){
					$('.docs-contacts').css('border-color', '#fff');
                }
        });  
        return false;
    })
    .on('submit', '.docs-feadback form', function(){
        $.fancybox.showLoading();
        $(this).ajaxSubmit({
            cache: false,
            url: "/form/feadback_result.php",
            data: $(this).serializeArray(),
            success: function (data) {
                $.fancybox({
                    'content': data,
                    'autoResize': false,
                    'fitToView': false
                });                   
            }
        });
        return false;
    })
    .on('click', '.docs-order input[type=submit]:not(.active)', function(){
        $('.docs-order .list').slideDown({
                duration: 'fast',
                complete: function(){ 
                    $('.docs-order input[type=submit]:not(.active)').addClass('active');        
                },
                start: function(){

                }
        });  
        return false;
    })    
    .on('submit', '.docs-order form', function(){
        $.fancybox.showLoading();
        $(this).ajaxSubmit({
            cache: false,
            url: "/form/order_result.php",
            data: $(this).serializeArray(),
            success: function (data) {
                $.fancybox({
                    'content': data,
                    'autoResize': true,
                    'fitToView': false
                });                   
            }
        });
        return false;
    })
    .on('click', '.docs-header .phone .icon, .docs-footer .phone .icon', function(){
        $.fancybox.showLoading();
        var fancy_wrapp = 'order-phone ';
        if($(this).is('.phone-footer')){
            fancy_wrapp += 'phone-footer';
        }else{
            fancy_wrapp += 'phone-header';
        }
        $(this).ajaxSubmit({
            cache: false,
            url: "/form/order_phone.php",
            data: $(this).serializeArray(),
            success: function (data) {
                $.fancybox({
                    'content': data,
                    'autoResize': false,
                    'fitToView': false,
                    'wrapCSS' : fancy_wrapp,
                    'tpl': {
                        wrap     : '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-position"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div></div>'
                    },
                    'afterShow': function() {                            
                        fancy_order_phone();
                        $( window ).resize(function(){
                            fancy_order_phone();
                        })                                                
                    }
                });                   
            }
        });
        return false;
    })  
    .on('submit', '.order-phone form', function(){
        //$.fancybox.showLoading();
        $(this).ajaxSubmit({
            cache: false,
            url: "/form/order_phone_result.php",
            data: $(this).serializeArray(),
            success: function (data) {
                $('.fancybox-wrap.order-phone .fancybox-inner').html(data);
                fancy_order_phone();
                /*$.fancybox({
                    'content': data,
                    'autoResize': false,
                    'fitToView': false
                });*/                   
            }
        });
        return false;
    });     
    
function fancy_order_phone(){
    var scrollTop = $(window).scrollTop();
    if($('.fancybox-wrap.order-phone').is('.phone-header')){
        var offset = $('.docs-header .phone').offset();
        $('.fancybox-wrap.order-phone .fancybox-position').css({'top': parseInt(offset.top) - parseInt(scrollTop), 'left': offset.left}); 
    }else{
        var offset = $('.docs-footer .phone').offset();
        $('.fancybox-wrap.order-phone .fancybox-position').css({'top': parseInt(offset.top) - parseInt(scrollTop) - (parseInt($('.fancybox-wrap.order-phone .fancybox-position').height() - parseInt($('.docs-footer .phone').height()))), 'left': offset.left}); 
    }                                                                                    
}    
