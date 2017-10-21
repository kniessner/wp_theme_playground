jQuery(document).ready(function($) {
	$('#menu-primary-items .dropdown > a').on("click", function(e) {
		e.preventDefault();
		if($(this).parent('li').hasClass("open")) {
			$(this).parent('li').removeClass("open");
		} else {
			$('#menu-primary-items .dropdown').removeClass('open');
			$(this).parent('li').addClass("open");
		}
	});
});

jQuery(document).ready(function($) {
	//add logical tab index
	$('a, input, select, button, textarea').each(function(i) {
		$(this).attr('tabindex',i+1);
	});
});

jQuery(document).ready(function($) {


	winHeight = $(window).height();
	
	documentHeight = $(document).height();
	$('.imgs > img').height(winHeight-125);

	
	
	
	
	$('.gridItem > a ').click(function(event){
				$('.active').removeClass('active');
				$(this).addClass("active");
			//    alert("Button Clicked"+this.id+" ");
		  		  document.getElementById('slide').src = this.getAttribute('srcLarge');

		    
		    		});

//	$('.modalFullscreen > img').height(winHeight);



document.getElementById('fImage1').onclick=function(){
	toggleFullScreen();
	$('#fullScreenBtn').toggle();
	$('#menu-primary-items').toggle();
}; 



document.getElementById('fImage').onclick=function(){
	toggleFullScreen();

	$('#fullScreenBtn').toggle();
	$('#menu-primary-items').toggle();
}; 







});


function toggleFullScreen() {
  if (!document.fullscreenElement &&    // alternative standard method
      !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.msRequestFullscreen) {
      document.documentElement.msRequestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}



/*
function galSwitch(e,y){

		y.setAttribute('class', 'active');
		//var Items = jQuery('.gridItem');
		//alert(jQuery('.gridItem').length);
	//	alert(y.id);
		document.getElementById('slide').src = e;
}



*/