$(document).ready(function() {
 	
	$('#landing-gallery').owlCarousel({
		singleItem : true,
		slideSpeed : 1000,
		pagination : false,
		navigation : true,
		navigationText : ["<i class=\"fa fa-caret-left\"></i>","<i class=\"fa fa-caret-right\"></i>"]
	});
	
	$('a.button').click(function(e) {
		e.preventDefault();
		$('a.button').removeClass('active');
		$(this).addClass('active');
		$('.landing-vid').toggleClass('hidden');
	});

	$('.af-textWrap').each(function(){
		var label = $(this).prev('label').text();
		$('input', $(this)).attr('placeholder',label.replace(':',''));
	});


	 $("#smart-lipo").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      pagination : false,
      autoPlay : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      transitionStyle : "fade",
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});