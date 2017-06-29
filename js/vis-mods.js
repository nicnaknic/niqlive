
//Visual Ripple effect on Button clicks
$(function(){
	var ink, d, x, y;
	$(".ripplelink").click(function(e){
    if($(this).find(".ink").length === 0){
        $(this).prepend("<span class='ink'></span>");
    }
         
    ink = $(this).find(".ink");
    ink.removeClass("animate");
     
    if(!ink.height() && !ink.width()){
        d = Math.max($(this).outerWidth(), $(this).outerHeight());
        ink.css({height: d, width: d});
    }
     
    x = e.pageX - $(this).offset().left - ink.width()/2;
    y = e.pageY - $(this).offset().top - ink.height()/2;
     
    ink.css({top: y+'px', left: x+'px'}).addClass("animate");
});
});

//ripple effect on gallery containers
$(function(){
	var ink, d, x, y;
	$(".img-ripple").hover(function(e){
    if($(this).find(".ink").length === 0){
        $(this).prepend("<span class='ink'></span>");
    }
         
    ink = $(this).find(".ink");
    ink.removeClass("animate");
     
    if(!ink.height() && !ink.width()){
        d = Math.max($(this).outerWidth(), $(this).outerHeight());
        ink.css({height: d, width: d});
    }
     
    x = e.pageX - $(this).offset().left - ink.width()/2;
    y = e.pageY - $(this).offset().top - ink.height()/2;
     
    ink.css({top: y+'px', left: x+'px'}).addClass("animate");
});
});


//Modified Affix data offset
var $attribute = $('[data-smart-affix]');
$attribute.each(function(){
  $(this).affix({
    offset: {
      top: $(this).offset().top,
    }
  });
});
$(window).on("resize", function(){
  $attribute.each(function(){
      if(this.height < 100 + "vh") {
        $(this).data('bs.affix').options.offset = $(this).offset().top
      }
    
  });
});




//Smooth Scrolling on NON topNav Items
$("#nav ul li a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 600, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});

//Smooth Scrolling on Main 'topnav' Items
$(document).ready(function(){
        // Add scrollspy to <body>
        $('body').scrollspy({target: "#topNav", offset: 100});    
        // Add smooth scrolling on all links inside the navbar
        $("#myNavbar a").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 600, function(){
   
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            }  // End if
        });
      });


//modal popup for gallery Items
$(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
});
      

