//Scrips de jquery para que el menu cambie cuando se hace el scroll
$(document).ready(function(){
	var altura = $('.menu').offset().top;
	var abajo = $(document).height();
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('headermenu');
		} else {
			$('.menu').removeClass('headermenu');
		}
	});
/*$(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() == abajo) {
            $('.menu').removeClass('headermenu');
      }
                
});*/
});






// scrip para que el menu sea adaptable a dispositivos moviles
