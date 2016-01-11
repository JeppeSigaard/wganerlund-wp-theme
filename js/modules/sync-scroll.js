$(function(){if($('.site-nav').length){

    var lastScrollTop = 0,
        fancyScroll = $('.site-nav');
    
    $(window).on('scroll', function () {

        if($('.site-footer').offset().top < $(window).scrollTop() + $(window).height()){
            fancyScroll.addClass('bottom');
        }
        
        else{
            
            fancyScroll.removeClass('bottom');
        }

        var st = $(this).scrollTop(),
            diff = st - lastScrollTop,
            scrollStop = $(window).innerHeight() + $(window).scrollTop(),
            fancyHeight = fancyScroll.offset().top + fancyScroll.innerHeight(),
            fancyScrollAmount = fancyScroll.scrollTop() + diff;

        if(fancyScroll.hasClass('bottom')){
        }
        
		else if(!fancyScroll.hasClass('bottom')){

			fancyScroll.scrollTop(fancyScrollAmount);


		}

		else{
			fancyScroll.scrollTop(0);
		}

		lastScrollTop = st;
    });
    
    $(window).load(function(){
        
        if($('.site-content').innerHeight() < $('.site-nav').innerHeight()){
        
            $('.site-content').css({
                height: $('.site-nav').innerHeight(),
            });

        }
        
    });
    
    var bounceDown = function(){
        if($(window).width() > 960){
            $('.site-nav').removeAttr('style');
            $('.main-menu>ul').removeAttr('style',$top);
        }
        
        else{
            var $margin = $('.main-menu').innerHeight();
            if($('body').hasClass('fixed')){$margin += 60}
            $('.site-nav').css('padding-top',$margin);
            
            var $top = $(window).scrollTop();
            if($top < 0) {$top = 0;}
            else if ($top > $('.main-menu').innerHeight()){$top = $('.main-menu').innerHeight();}
            $('.main-menu>ul').css({
                top: - $top,
                position: 'relative'
            });
        }

    }
    
    
    bounceDown();
    $(window).resize(function(e){
        bounceDown();    
    });
    
    $(window).scroll(function(){
        bounceDown();
        
    });

}});