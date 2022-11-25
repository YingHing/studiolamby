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
}

function cursorWeb() {
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
}

let points = [];
let position = {x: 0, y: 0};

function setup(){
	if ($('.drawing').length > 0) {
		createCanvas(windowWidth, windowHeight)
	}
}

function draw(){
	if ($('.drawing').length > 0) {
		noStroke();
		fill(255,143,163);

		let dx = mouseX - pmouseX;
		let dy = mouseY - pmouseY;

		if (dx || dy){
		position = {x: mouseX, y: mouseY};

		if (points.length >= 50){
			points.splice(0, 1);
		}

		points.push(position);
		}

		points.forEach(point => {
		ellipse(point.x, point.y, 75,75)
		});
	}
}

$(window).ready(function() {
	// stickyNav();
	resizeLogo();
	activeNav();
	cursorWeb();
});