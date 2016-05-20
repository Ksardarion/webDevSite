$( document ).ready( function() {
  scrollTo();
});

function scrollTo () {
  $('#next-section').click(function(e) {
      e.preventDefault();
     var distanceTopToSection = $( '#' +  $(this).data('target')).offset().top;

     // particlesJS..particles.number.value = 0;
     // console.log(particles.particles.number.value);
     $( 'body, html' ).animate({scrollTop:distanceTopToSection }, 1500);
  });
}