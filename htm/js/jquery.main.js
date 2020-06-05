$(document).ready(function(){
	hljs.initHighlightingOnLoad();
	initAnchors();
	initStars();
})
// initialize smooth anchor links
function initAnchors() {
	new SmoothScroll({
		anchorLinks: '.nav > li > a',
		extraOffset: function() {
			var totalHeight = 0;
			jQuery('.navbar-fixed-top').each(function(){
				totalHeight += jQuery(this).outerHeight();
			});
			return totalHeight;
		},
		activeClasses: 'link'
	});
}

// initialize stars
function initStars() {

	$('#example-rand').jstars({
		image_path: 'images',
		style: 'rand'
	});

	$('#custom').jstars({
	image_path: 'images',
    image: '111.png',
		style: 'white',
    width: 32,
    height: 32,
    delay: 700,
    frequency: 15 //кол-во на экране за раз
	});  
  
  $('#custom2').jstars({
	image_path: 'images',
    image: 'jstar-map.png',
    style: 'rand',
    width: 27,
    height: 27,
    style_map: {
      white: 0,
      blue: -27,
      green: -54,
      red: -81,
      yellow: -108
    },
    delay: 300
	});  
}
