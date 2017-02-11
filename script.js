/*
	Smooth Scrolling and parallax effect are initialized here
*/


$( document ).ready(function() {
    $('.menu-item a').click(function() {
	  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	    if (target.length) {
	      $('html, body').animate({
	        scrollTop: target.offset().top
	      }, 500);
	      return false;
	    }
	  }
	});

    // console.log(WPURLS.templateurl);
    // TODO: load different divider images
	$('#first-divider').parallax({imageSrc: WPURLS.templateurl + '/img/green.jpg'});

	$('#second-divider').parallax({imageSrc: WPURLS.templateurl + '/img/sepia.jpg'});
});

