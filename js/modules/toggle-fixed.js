$(function(){

	if($('.site-top-nav').length > 0){

		$(window).on({
			scroll: function(){

				if($(window).scrollTop() > $('.site-top-nav').height()){
					$('body').addClass('fixed');
				}

				else{
					$('body').removeClass('fixed');
				}
			},

		});
	}
	else{
		$('body').addClass('fixed');
	}
});
