
// function stickyNav() {
// 	$(window).scroll(function() {
// 		if ($(this).scrollTop() > 1){
// 			$('.page-title').addClass("sticky-top")
// 		}
// 		else{
// 			$('.page-title').removeClass("sticky-top")
// 		}
// 	});
// }

function resizeLogo() {
	if (window.location.pathname != "/"){
		$(window).scroll(function() {
				if ($(this).scrollTop() > 0.5 && window.matchMedia("(min-width: 992px)").matches) {  
					$('.size-title-big').addClass('size-title-small')
				}

				else {
					$('.size-title-big').removeClass('size-title-small')
				}
		});
	}
}

function activeNav() {
	var path = window.location.href;
     $('ul a').each(function() {
      if (this.href === path) {
       $(this).addClass('active');
      }
     });
	console.log('clicked');
}

$(window).ready(function() {
	// stickyNav();
	resizeLogo();
	activeNav();

	const cursor = curDot({
		zIndex: 2,
		diameter: 20,
		easing: 8,
		background: '#fff'
	});

	cursor.over(".hover", {
		scale: 5,
	  });

	  cursor.over(".hoverpink", {
		scale: 5,
		background: "#ff8fa3"
	  });
});