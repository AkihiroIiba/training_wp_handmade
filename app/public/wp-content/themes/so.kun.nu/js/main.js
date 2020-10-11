'use strict';
///////////////////  drawer  ///////////////////////////

jQuery(function(){
	var rwdMenu = jQuery('#globalMenu'),
	slideSpeed = 300,
	fadeSpeed = 300;

	var menuSouce = rwdMenu.html();

	jQuery(window).load(function(){

		function menuSet(){
				if(!(jQuery('#rwdMenuWrap').length)){
					jQuery('body').prepend(
						'<div id="menuOverlay"></div><div id="switchBtnArea"><a href="javascript:void(0);" id="switchBtn"></a></div><div id="rwdMenuWrap"></div>');
					jQuery('#rwdMenuWrap').append(menuSouce);

					var menuOverlay = jQuery('#menuOverlay'),
							switchBtn = jQuery('#switchBtn'),
							btnright = parseInt(switchBtn.css('right')),
							menuWrap = jQuery('#rwdMenuWrap'),
							menuWidth = menuWrap.outerWidth();

					switchBtn.on('click', function(){
						if(jQuery(this).hasClass('btnClose')){
							jQuery(this).removeClass('btnClose').removeAttr('style');
							menuOverlay.stop().animate({opacity:'0'},fadeSpeed,function(){
								menuOverlay.removeAttr('style');
							});
							menuWrap.stop().animate({right:'-' + menuWidth + 'px'},slideSpeed);
							jQuery('body').removeAttr('style');
						} else {
							jQuery(this).addClass('btnClose').css({position:'fixed'}).stop().animate({right:menuWidth + btnright},slideSpeed);
							menuOverlay.css({display:'block',opacity:'0'}).stop().animate({opacity:'1'},fadeSpeed);
							menuWrap.stop().animate({right:'0'},slideSpeed);
							jQuery('body').css({position:'fixed'});
						}
					});
				}
		}

		jQuery(window).on('resize', function(){
			menuSet();
		});

		menuSet();
	});
});


////////////////////////////////////////////////////////
////////////////// swiper 1  //////////////////////
var swiper = new Swiper('.swc1', {
	speed: 500,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  pagination: {
      el: '.swp1',
      type: 'bullets',
      clickable: true,
    },
});
//////////////////////////////////////////////
///////////////  スライド  ///////////////////
jQuery(function(){
  var setFilter = jQuery('#filterBtn'),
	filterBtn = setFilter.find('a'),
	btnAll = jQuery('.allItem'),
	setList = jQuery('#filterList'),
	filterList = setList.find('li'),
	listWidth = filterList.outerWidth();
  
	filterBtn.click(function(){
    if(!(jQuery(this).hasClass('active'))){
      var filterClass = jQuery(this).attr('class');
      
			filterList.each(function(){
        if(jQuery(this).hasClass(filterClass)){
          jQuery(this).css({display:'block'}).stop().animate({width:listWidth},1500);
					jQuery(this).find('*').stop().animate({opacity:'1'},1500);
				} else {
          jQuery(this).find('*').stop().animate({opacity:'0'},1000);
					jQuery(this).stop().animate({width:'0'},1000,function(){
            jQuery(this).css({display:'none'});
					});
				}
			});
			filterBtn.removeClass('active');
			jQuery(this).addClass('active');
		}
	});
  
	btnAll.click(function(){
    filterList.each(function(){
      jQuery(this).css({display:'block'}).stop().animate({width:listWidth},1500);
			jQuery(this).find('*').stop().animate({opacity:'1'},1500);
		});
	});
	btnAll.click();
});

////////////////////////////////////////////////////////////////
/////////////////////////// scroll  ////////////////////////////
jQuery(function(){
  jQuery('a[href^="#"]').click(function(){
    var speed = 500;
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

////////////////////////////////////////////////////////////////
////////////////// swiper shopping geige  //////////////////////
var swiper_shoppingBeige = new Swiper('.swc_shoppingBeige', {
  speed: 500,
  loop: true,
});
 function slideThumbBeige(index) {
	swiper_shoppingBeige.slideTo(index);
}
////////////////// swiper shopping big  ///////////////////////
var swiper_shoppingBig = new Swiper('.swc_shoppingBig', {
  speed: 500,
  loop: true,
});
 function slideThumbBig(index) {
	swiper_shoppingBig.slideTo(index);
}
//////////////////// swiper shopping blue  /////////////////////
var swiper_shoppingBlue = new Swiper('.swc_shoppingBlue', {
  speed: 500,
  loop: true,
});
 function slideThumbBlue(index) {
	swiper_shoppingBlue.slideTo(index);
}
//////////////////// swiper shopping gray  /////////////////////
var swiper_shoppingGray = new Swiper('.swc_shoppingGray', {
  speed: 500,
  loop: true,
});
 function slideThumbGray(index) {
	swiper_shoppingGray.slideTo(index);
}
//////////////////// swiper shopping green  /////////////////////
var swiper_shoppingGreen = new Swiper('.swc_shoppingGreen', {
  speed: 500,
  loop: true,
});
 function slideThumbGreen(index) {
	swiper_shoppingGreen.slideTo(index);
}
//////////////////// swiper shopping pink  /////////////////////
var swiper_shoppingPink = new Swiper('.swc_shoppingPink', {
  speed: 500,
  loop: true,
});
 function slideThumbPink(index) {
	swiper_shoppingPink.slideTo(index);
}
//////////////////// swiper coaster beige  /////////////////////
var swiper_coasterBeige = new Swiper('.swc_coasterBeige', {
  speed: 500,
  loop: true,
});
 function slideThumbCbeige(index) {
	swiper_coasterBeige.slideTo(index);
}
//////////////////// swiper coaster blue  /////////////////////
var swiper_coasterBule = new Swiper('.swc_coasterBlue', {
  speed: 500,
  loop: true,
});
 function slideThumbCblue(index) {
	swiper_coasterBule.slideTo(index);
}
//////////////////// swiper coaster gray  /////////////////////
var swiper_coasterGray = new Swiper('.swc_coasterGray', {
  speed: 500,
  loop: true,
});
 function slideThumbCgray(index) {
	swiper_coasterGray.slideTo(index);
}
//////////////////// swiper coaster yellow  /////////////////////
var swiper_coasterYellow = new Swiper('.swc_coasterYellow', {
  speed: 500,
  loop: true,
});
 function slideThumbCyellow(index) {
	swiper_coasterYellow.slideTo(index);
}
//////////////////// swiper porch beige  /////////////////////
var swiper_porchBeige = new Swiper('.swc_porchBeige', {
  speed: 500,
  loop: true,
});
 function slideThumbPbeige(index) {
	swiper_porchBeige.slideTo(index);
}
//////////////////// swiper porch blue  /////////////////////
var swiper_porchBlue = new Swiper('.swc_porchBlue', {
  speed: 500,
  loop: true,
});
 function slideThumbPblue(index) {
	swiper_porchBlue.slideTo(index);
}
//////////////////// swiper porch double  /////////////////////
var swiper_porchDouble = new Swiper('.swc_porchDouble', {
  speed: 500,
  loop: true,
});
 function slideThumbPdouble(index) {
	swiper_porchDouble.slideTo(index);
}
//////////////////// swiper porch penguin  /////////////////////
var swiper_porchPenguin = new Swiper('.swc_porchPenguin', {
  speed: 500,
  loop: true,
});
 function slideThumbPpenguin(index) {
	swiper_porchPenguin.slideTo(index);
}
//////////////////// swiper porch pink  /////////////////////
var swiper_porchPink = new Swiper('.swc_porchPink', {
  speed: 500,
  loop: true,
});
 function slideThumbPpink(index) {
	swiper_porchPink.slideTo(index);
}
//////////////////// swiper ohter spp  /////////////////////
var swiper_othersSPP = new Swiper('.swc_othersSPP', {
  speed: 500,
  loop: true,
});
 function slideThumbOSPP(index) {
	swiper_othersSPP.slideTo(index);
}
//////////////////// swiper ohter pillow  /////////////////////
var swiper_othersPillow = new Swiper('.swc_othersPillow', {
  speed: 500,
  loop: true,
});
 function slideThumbOPillow(index) {
	swiper_othersPillow.slideTo(index);
}
