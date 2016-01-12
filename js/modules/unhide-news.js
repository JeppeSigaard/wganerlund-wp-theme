$(function(){
    
    $('a.news-more').click(function(e){
        e.preventDefault();
        $(this).remove();
        $('.news-hidden').addClass('unhide');
        
    });
    
});