$( document ).ready( function() {

	// ===================== Для анімації виділення пункта меню
	var menuPointer = $('#menu-pointer');
	var currentPage = $('#current-page');

	menuPointer.css('width', currentPage.outerWidth());
	menuPointer.css('left', currentPage.offset().left);

	$(window).on('resize', function() {
		menuPointer.css('width', currentPage.outerWidth());
		menuPointer.css('left', currentPage.offset().left);
	});

	var menuElements = $('nav a');
	menuElements.click(function(e) {
		e.preventDefault();

		currentPage.removeAttr('id');
		currentPage = $(this);
		currentPage.attr('id', 'current-page');

		menuPointer.animate({
			left: currentPage.offset().left,
			width: currentPage.outerWidth()
		}, 500);
	});


	// ===================== Ф-ція для плавного скролу до потрібного елемента
	scrollTo();
});

function scrollTo () {
	var menuHeight = $('nav').height();

  $('.scrollTo').click(function(e) {
      e.preventDefault();
     var distanceTopToSection = $( '#' +  $(this).data('target')).offset().top - menuHeight;

     // particlesJS..particles.number.value = 0;
     // console.log(particles.particles.number.value);
     $( 'body, html' ).animate({scrollTop:distanceTopToSection }, 1500);
  });
}
