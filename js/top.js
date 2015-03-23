jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');
		$back_to_top_indicator = $('.cd-top-indicator');
		//setTimeout(function(){
			var offsetBackToTop = $back_to_top_indicator.offset();
			var offsetDivide = parseInt(offsetBackToTop.top + 112) - parseInt($(document).height() - 228);
			if(offsetDivide >= 0){
				$back_to_top.css('bottom', offsetDivide);
				$back_to_top.addClass('cd-is-visible');
			}else{
				$back_to_top.removeAttr('style');
			}
		//}, 1000)
	//hide or show the "back to top" link
	$(window).scroll(function(){
		var offsetBackToTop = $back_to_top_indicator.offset();
		var offsetDivide = parseInt(offsetBackToTop.top + 112) - parseInt($(document).height() - 228);
		if(offsetDivide >= 0){
			$back_to_top.css('bottom', offsetDivide);
		}else{
			$back_to_top.removeAttr('style');
		}		
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});