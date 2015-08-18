$( document ).ready(function() {

//$('.grid-block-container').masonry({
//  // options...
//  itemSelector: 'li'
//  //columnWidth: 200
//});
//	
//	
	
	
	
	var $container = $('.grid-block-container').imagesLoaded(function() {
        $container.masonry({
		  // options...
		  itemSelector: 'li'
		  //columnWidth: 200
		});
    });
	

// -------------------------------------------------------------------------------------
// SCROLLS TOP/BOTTOM
// -------------------------------------------------------------------------------------
	
	$('.up-header-btn').fadeOut();
	$(window).scroll(function(){  
        if ($(this).scrollTop() > 350) {
            $('.up-header-btn').fadeIn();
        }
        else {
            $('.up-header-btn').fadeOut();
        } 
    });
	
    // scroll body to 0px on click
    $('#back-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
	
	$('.up-header-btn').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

	
}); // END DOC READY
