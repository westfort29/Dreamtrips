var main = function()
{
			/*gallery feature*/
			
	$(".img-item").hover(
		function(){
			$(this).children('.img-desc').fadeIn(200);
		},
		function(){
			$('.img-desc').fadeOut(200);
	});
		
			/*Slider*/

			/*slider timing*/
	
	var rotate = setInterval(function() 
	{
	var currentSlide = $('.active-slide');
    var nextSlide = currentSlide.next();
        if (nextSlide.length == 0){
            nextSlide = $('.slide').first();
        }
        currentSlide.fadeOut(0).removeClass('active-slide');
        nextSlide.fadeIn(0).addClass('active-slide');
	}, 13000);
	
			/*scroll down main**/
	
	$('#scroll_down').click(function(){
		var heights = window.innerHeight;
		$("html, body").animate({ scrollTop: $(window).height() }, "slow");
	});
		
			/*scroll up*/
	
	$(function(){
		if ($(window).scrollTop()>=$(window).height()) $("#scroll_up_wrapper").fadeIn("slow")
			$(window).scroll(function(){
				if ($(window).scrollTop()<=$(window).height()) $("#scroll_up_wrapper").fadeOut("slow")
				else $("#scroll_up_wrapper").fadeIn("slow")
			});
		$("#scroll_up_wrapper").click(function(){$("html,body").animate({scrollTop:0},"slow")})
	});
	
			/*COUNTRY MENU FIXED +++ fixed NAVIGATION*/
	
	$(document).scroll(function(){
		if ($('#country_point').hasClass('fixed') && (window.pageYOffset < 210)) {
			$('#country_point').removeClass('fixed');
		} 
		else if (window.pageYOffset > 210) {
			$('#country_point').addClass('fixed');
		}
		if ($('#navigation_content_wrapper').hasClass('nav_fixed') && (window.pageYOffset < 5)) {
			$('#navigation_content_wrapper').removeClass('nav_fixed');
		} 
		else if (window.pageYOffset > 5) {
			$('#navigation_content_wrapper').addClass('nav_fixed');;
		}
	});
};

$(document).ready(main);

function toArray(x) { 
for(var i = 0, a = []; i < x.length; i++) 
a.push(x[i]); 
return a; 
} 

function showMe (box, location) { 
	var vis = (box.checked) ? "inline-block" : "none"; 
	var elements = document.getElementsByClassName(location); 
	var arrElements = toArray(elements); 
	arrElements.forEach(function(item, i, elements) 
	{ 
		item.style.display = vis; 
	}); 
};
 
function valueOption() {
    val = document.getElementById("val").value;
    img = document.getElementById("cost");
    img.value = val;
 }
 function valueOptionNumber() {
    val = document.getElementById("cost").value;
    img = document.getElementById("val");
    img.value = val;
 }
 function upperCase(){
	 val = document.getElementById("country_finder").value;
	 var firstChar = val[0].toUpperCase();
	 var e = document.getElementById("country_finder");
	 e.value = firstChar + val.substr(1); 
 }
 function scrollingDown(){
	 var heights = window.innerHeight;
	 window
 }
/*function minDateBack() {
	date = document.getElementById("date-to").value;
	minDate = document.getElementById("date-back");
	if (minDate.value < date)
	{
		minDate.value = date;
	}
 }*/