$('.carouselNew-carousel').owlCarousel({
 margin: 0,
	center: true,
	loop: true,
	nav: false,
	dots: false,
	responsive: {
	0: {
	   items: 1
	},
	768: {
	   items: 2,
	margin: 15,
	},
	1000: {
	   items: 2,
	}
    }
});

$('.SliderProduct').owlCarousel({
    margin: 0,
       center: true,
       loop: true,
       nav: true,
       dots: false,
       responsive: {
       0: {
          items: 1
       },
       768: {
          items: 4,

       },
       1000: {
          items: 4,
       }
       }
   });

$(window).on("load", function(e) {
	var tlOnLoad = gsap.timeline({delay: 1});
	var onLoadTextCount = $(".anim-text-banner>.anim-text").length;
	console.log(onLoadTextCount);

	for( var i= 1 ; i <= onLoadTextCount ; i++ ){
		var onLoadTextWidth = ".anim-text-banner>.anim-text:nth-of-type("+i+")";
		tlOnLoad.to(onLoadTextWidth, {clip: "rect(0px, "+$(onLoadTextWidth).width()+"px, 300px, 0px)", ease: "expo.out", duration: 1}, "-=0.2");
	}
	tlOnLoad.to(".anim-text-parent>.v-bar", {width: 100, ease: "expo.out", duration: 1}, "-=0.2");

	// ------------

	var tlMainAnim = gsap.timeline({repeat: -1});
	var animTextCount = $(".anim-text-parent>.anim-text").length;

	for( var i= 1 ; i <= animTextCount ; i++ ){
		var animTextWidth = ".anim-text-parent>.anim-text:nth-of-type("+i+")";
		tlMainAnim.to(animTextWidth, {opacity: 1, duration: 0.1});
		tlMainAnim.to(animTextWidth, {clip: "rect(0px, "+$(animTextWidth).width()+"px, 300px, 0px)", ease: "expo.out", duration: 1});
		tlMainAnim.to(animTextWidth, {clip: "rect(0px, 0px, 300px, 0px)", ease: "expo.out", duration: 1}, "+=0.75");
		tlMainAnim.to(animTextWidth, {opacity: 0, duration: 0.1});
	}

	tlOnLoad.add(tlMainAnim, "-=0.5");
});
var spanText = function spanText(text) {
  var string = text.innerText;
  var spaned = '';
  for (var i = 0; i < string.length; i++) {
    if(string.substring(i, i + 1) === ' ') spaned += string.substring(i, i + 1);
    else spaned += '<span>' + string.substring(i, i + 1) + '</span>';
  }
  text.innerHTML = spaned;
}

var headline = document.querySelector("h1");

spanText(headline);

let animations = document.querySelectorAll('.animation-1');

animations.forEach(animation => {
  let letters = animation.querySelectorAll('span');
  letters.forEach((letter, i) => {
    letter.style.animationDelay = (i * 0.1) + 's';
  })
})


//  $(".SliderProduct").owlCarousel({
//     // you can use jQuery selector
//     navText: [$('.am-next'),$('.am-prev')]

// });
// owl.on('mousewheel', '.owl-stage', function (e) {
//     if (e.deltaY>0) {
//         owl.trigger('next.owl');
//     } else {
//         owl.trigger('prev.owl');
//     }
//     e.preventDefault();
// });
$(document).ready(function(){
  setTimeout(function(){
    $('.loaderMain').fadeOut();
  }, 4000);


});



