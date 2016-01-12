$(function(){
  
    $(window).scroll(function(){
        
        if($(window).scrollTop() > $(window).height()){
            $('.scroll-to-top').addClass('show');
            
        }
        
        else{
           $('.scroll-to-top').removeClass('show'); 
            
        }
    });
    
    $('.scroll-to-top').click(function(e){
        e.preventDefault();
        
        $('html,body').animate({scrollTop: $(window).scrollTop() / 5});
        
        
    });
    
});