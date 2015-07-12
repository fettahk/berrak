//==============================================
    //Front Slider Init Callback
//==============================================

 function mycarousel_initCallback(carousel)  {
      // Pause autoscrolling if the user moves with the cursor over the clip.
      jQuery('#mycarousel .description').mouseenter(function() {
          carousel.stopAuto();
      });
      jQuery('#mycarousel .description').mouseleave(function() {
          carousel.startAuto();
      });
  }; 

//==============================================
    // DOCUMENT READY
//==============================================
jQuery(document).ready(function() {
    
//==============================================
    //Main Menu
//==============================================
    jQuery('header .top-nav  ul  li').mouseenter(function(){
        if(jQuery(this).find('ul').length) { 
           jQuery(this).find('ul').first().stop(true, true).fadeIn();
           jQuery(this).siblings().find('ul').css('display','none');
        }
    });
    jQuery('header .top-nav  ul  li').mouseleave(function(){
        if(jQuery(this).find('ul').length) {
           jQuery(this).find('ul').first().stop(true, true).delay(500).fadeOut('fast');
        }
    });
//==============================================
    //Lava Menu
//==============================================
		  var style = 'easeOutElastic';
		  // Main Menu hover and current functionality
		  if(jQuery('.main-menu li.current-cat').length){
        currentCheck = 1; //check if there is current 1== yes 0 == no
			  default_left = Math.round(jQuery('.main-menu li.current-cat').offset().left - jQuery('.main-menu').offset().left - 5);
			  default_top = Math.round(jQuery('.main-menu li.current-cat').offset().top - jQuery('.main-menu').offset().top);
			  default_width = jQuery('.main-menu li.current-cat').width();
			  default_height = jQuery('.main-menu li.current-cat').height();
		  } else {
        currentCheck = 0; //check if there is current
			  default_left = 0;
			  default_top = 0;
			  default_width = 0;
			  default_height = 47;
        jQuery('.main-menu #lava-elm').css('opacity','0');
		  }
		  
		  jQuery('.main-menu #lava-elm').stop(false, true).animate({top: default_top, left: default_left, width: default_width, height: default_height},{duration:10});
		  
		  jQuery('.main-menu ul > li').not('ul ul li').mouseenter(function (){
			if (!jQuery(this).is('#lava-elm')) {
			  elemTop = Math.round(jQuery(this).offset().top - jQuery('.main-menu').offset().top);
			  elemLeft = Math.round(jQuery(this).offset().left - jQuery('.main-menu').offset().left - 5);
			  width = jQuery(this).width();
			  height = jQuery(this).height();
			  
			  jQuery('#lava-elm').stop(false, false).animate({top: elemTop, left: elemLeft, width:width, height:height},{duration:700,easing: style});
        if (currentCheck == 0) {
            jQuery('.main-menu #lava-elm').css('opacity','100');
        }
        //SUB MENU
        if(jQuery(this).find('ul').length) { 
           jQuery('ul',this).stop(true, true).slideDown(500);
        }
        jQuery(this).siblings().find('ul').css('display','none');
      }
		  });
		  
		   jQuery('.main-menu').mouseleave(function () {
			  //Set the floating bar position, width and transition
			  if (currentCheck == 0) {
            jQuery('.main-menu #lava-elm').css('opacity','0');
        }
        
        jQuery('.main-menu ul li ul').stop(true, true).delay(500).css('display','none');
        jQuery('.main-menu #lava-elm').stop(false, true).animate({top: default_top, left: default_left, width: default_width,height: default_height},{duration:100});       
		  });
       

    if(jQuery('body').is('.home')){
//==============================================
    //Meals Carousel Starter
//==============================================
		jQuery('#mycarousel').jcarousel({
			scroll: 1,
			auto: 3,
			wrap: 'both',
			initCallback: mycarousel_initCallback
		});
	
//==============================================
    //Meals Carousel Starter
//==============================================


		jQuery('#meals-of-the-day ul').jcarousel({
			wrap : 'both'
			,itemFallbackDimension : 400
		});

		jQuery('.featured-meals ul').jcarousel({
			wrap : 'both'
			,scroll : 1
			,itemFallbackDimension : 215
		});
	}
//////////////////////		
});//===End Doc Ready
  

//==============================================
    //Payment Method
//==============================================
jQuery('#payment-methods ul li').click(function () {
    jQuery('#payment-methods ul li .form-controls.checked').removeClass('checked');
    jQuery('#payment-methods ul li input').attr('checked',false);
    jQuery('.form-controls',this).addClass('checked');
    jQuery('input', this).attr('checked',true);    
});

  
