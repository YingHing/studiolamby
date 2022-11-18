
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

$(window).ready(function() {
	stickyNav();
	resizeLogo();
});