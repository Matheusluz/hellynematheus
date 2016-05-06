jQuery(document).ready(function() {
	
    // Script Wow Animation
    new WOW().init();
	
    // Galeria
    var $grid = $('#gallery .grid').imagesLoaded( function() {
        // Inicia Masonry depois que todas as imagens estiverem carregadas.
        $grid.masonry({
            itemSelector: '.grid-item', 
            columnWidth: '.grid-sizer',
            percentPosition: true
        });
    });
    
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    });
});