(function ($) {

    //Flickity settings
    $('.carousel').flickity({
        cellAlign: 'left',
        contain: true,
        percentPosition: true,
        imagesLoaded: false,
        autoPlay: 4000, 
        prevNextButtons: false,
        wrapAround: true,
    });

})(jQuery);