$(function(){
    
    var smamo_front_slider = $('.front-slider');
    if(smamo_front_slider.length){
        smamo_front_slider.flickity({
            setGallerySize: false,
            resize: false,
            cellSelector: '.slide',
            wrapAround: true,
            autoPlay: 11000,
            prevNextButtons: false,
            pageDots: false
        });

        smamo_front_slider.on('click',function(e){
            var t = $(e.target);
            if(t.is('.next *')){smamo_front_slider.flickity('next');}
            if(t.is('.prev *')){smamo_front_slider.flickity('previous');}
        });
    }
});