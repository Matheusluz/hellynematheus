jQuery(document).ready(function() {
    // Máscaras
    $(".phone").mask("(99) 9999-9999?9");
    	
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
    // Inicia o visualizador fancybox 
    $(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	
    // Inicia tooltip	
	$('[data-toggle="tooltip"]').tooltip();
});