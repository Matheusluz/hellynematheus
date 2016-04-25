jQuery(function ($) {

    'use strict';
	
// =============================================
// BEGIN THEME SCRIPTS
// =============================================


// Script Wow Animation
new WOW().init();

//Parallax	
jQuery(window).bind('load', function () {
	parallaxInit();						  
});
function parallaxInit() {
    jQuery('.parallax').each(function(){
        jQuery(this).parallax("center bottom", 0.1);
    });
}


// =============================================
// END THEME SCRIPTS
// =============================================
	
});