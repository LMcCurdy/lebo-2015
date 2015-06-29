/*!
 * hoverIntent v1.8.0 // 2014.06.29 // jQuery v1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 *
 * You may use hoverIntent under the terms of the MIT license. Basically that
 * means you are free to use hoverIntent as long as this header is left intact.
 * Copyright 2007, 2014 Brian Cherne
 */
(function($){$.fn.hoverIntent=function(handlerIn,handlerOut,selector){var cfg={interval:100,sensitivity:6,timeout:0};if(typeof handlerIn==="object"){cfg=$.extend(cfg,handlerIn)}else{if($.isFunction(handlerOut)){cfg=$.extend(cfg,{over:handlerIn,out:handlerOut,selector:selector})}else{cfg=$.extend(cfg,{over:handlerIn,out:handlerIn,selector:handlerOut})}}var cX,cY,pX,pY;var track=function(ev){cX=ev.pageX;cY=ev.pageY};var compare=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);if(Math.sqrt((pX-cX)*(pX-cX)+(pY-cY)*(pY-cY))<cfg.sensitivity){$(ob).off("mousemove.hoverIntent",track);ob.hoverIntent_s=true;return cfg.over.apply(ob,[ev])}else{pX=cX;pY=cY;ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}};var delay=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);ob.hoverIntent_s=false;return cfg.out.apply(ob,[ev])};var handleHover=function(e){var ev=$.extend({},e);var ob=this;if(ob.hoverIntent_t){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t)}if(e.type==="mouseenter"){pX=ev.pageX;pY=ev.pageY;$(ob).on("mousemove.hoverIntent",track);if(!ob.hoverIntent_s){ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}}else{$(ob).off("mousemove.hoverIntent",track);if(ob.hoverIntent_s){ob.hoverIntent_t=setTimeout(function(){delay(ev,ob)},cfg.timeout)}}};return this.on({"mouseenter.hoverIntent":handleHover,"mouseleave.hoverIntent":handleHover},cfg.selector)}})(jQuery);

/*!
 * jQuery lockfixed plugin
 * http://www.directlyrics.com/code/lockfixed/
 *
 * Copyright 2012 Yvo Schaap
 * Released under the MIT license
 * http://www.directlyrics.com/code/lockfixed/license.txt
 *
 * Date: Sun March 4 2014 12:00:01 GMT
 */
(function($, undefined){
	$.extend({
		/**
		 * Lockfixed initiated
		 * @param {Element} el - a jquery element, DOM node or selector string
		 * @param {Object} config - offset - forcemargin
		 */
		"lockfixed": function(el, config){
			if (config && config.offset) {
				config.offset.bottom = parseInt(config.offset.bottom,10);
				config.offset.top = parseInt(config.offset.top,10);
			}else{
				config.offset = {bottom: 100, top: 0};
			}
			var el = $(el);
			if(el && el.offset()){
				var el_position = el.css("position"),
					el_margin_top = parseInt(el.css("marginTop"),10),
					el_position_top = el.css("top"),
					el_top = el.offset().top,
					pos_not_fixed = false;

				/*
				 * We prefer feature testing, too much hassle for the upside
				 * while prettier to use position: fixed (less jitter when scrolling)
				 * iOS 5+ + Android has fixed support, but issue with toggeling between fixed and not and zoomed view
				 */
				if (config.forcemargin === true || navigator.userAgent.match(/\bMSIE (4|5|6)\./) || navigator.userAgent.match(/\bOS ([0-9])_/) || navigator.userAgent.match(/\bAndroid ([0-9])\./i)){
					pos_not_fixed = true;
				}

				/*
				// adds throttle to scroll call
				$(window).bind('scroll',el,function(e){

					window.setTimeout(function(){
						$(document).trigger('lockfixed:pageupdate');
					},25);
				});
				*/

				$(window).bind('DOMContentLoaded load scroll resize orientationchange lockfixed:pageupdate',el,function(e){
					// if we have a input focus don't change this (for smaller screens)
					if(pos_not_fixed && document.activeElement && document.activeElement.nodeName === "INPUT" || window.innerWidth <= 1024 ){
						return;
					}

					var top = 0,
						el_height = el.outerHeight(),
						el_width = el.outerWidth(),
						max_height = $(document).height() - config.offset.bottom,
						scroll_top = $(window).scrollTop();

					// if element is not currently fixed position, reset measurements ( this handles DOM changes in dynamic pages )
					if (el.css("position") !== "fixed" && !pos_not_fixed) {
						el_top = el.offset().top;
						el_position_top = el.css("top");
					}

					if (scroll_top >= (el_top-(el_margin_top ? el_margin_top : 0)-config.offset.top)){

						if(max_height < (scroll_top + el_height + el_margin_top + config.offset.top)){
							top = (scroll_top + el_height + el_margin_top + config.offset.top) - max_height;
						}else{
							top = 0;
						}

						if (pos_not_fixed){
							el.css({'marginTop': (parseInt(scroll_top - el_top - top,10) + (2 * config.offset.top))+'px'});
						}else{
							el.css({'position': 'fixed','top':(config.offset.top-top)+'px','width':el_width +"px"});
						}
					}else{
						el.css({'position': el_position,'top': el_position_top, 'width':el_width +"px", 'marginTop': (el_margin_top && !pos_not_fixed ? el_margin_top : 0)+"px"});
					}
				});
			}
		}
	});
})(jQuery);


// detect useragent + platform // only when absolutely necessary
var b = document.documentElement;
	b.className = b.className.replace('no-js', 'js');
	b.setAttribute("data-useragent", navigator.userAgent.toLowerCase());
	b.setAttribute("data-platform", navigator.platform.toLowerCase());

var $html = $('html');
var ua = ( $html.data('useragent') ),
	pf = ( $html.data('platform') );

function is(string){
	return ua.indexOf(string) > -1
}

var browser = {
	isFirefox : is('firefox'),
	isSafari  : is('applewebkit'),
	isIE 	  : is('msie') || is('trident/7.0'),
	isIE7 	  : is('msie 7.0'),
	isIE8 	  : is('msie 8.0'),
	isIE9 	  : is('msie 9.0'),
	isIE11    : is('rv:11') || is('trident/7.0'),
	isChrome  : is('chrome'),
	isWin7    : is('windows nt 6.1'),
	isWin8    : is('windows nt 6.2'),
	isWindows : pf.indexOf('win32') > -1,
	isIpad    : is('ipad'),
	isAndroid : is('android')
}

for ( var title in browser ){
	var helperClass = title.slice(2).toLowerCase();
	if ( browser[title] ) { $html.addClass(helperClass); }
}
// end user agent detection

// convert rgba to hexadecimal
function hexc(colorval) {
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    delete(parts[0]);
    for (var i = 1; i <= 3; ++i) {
        parts[i] = parseInt(parts[i]).toString(16);
        if (parts[i].length == 1) parts[i] = '0' + parts[i];
    }
    color = '#' + parts.join('');
    return color;
}

/*
 __   ___       __      
|__) |__   /\  |  \ \ / 
|  \ |___ /~~\ |__/  |  

*/

$(document).ready(function() {
 	
 	// FastClick
	FastClick.attach(document.body);

	// init mmenu
	$("#mmenu").mmenu({
		// options
	}, {
		// configuration
	});

		// setup some vars for reused jquery selections
		var $sideTab = $('#freeconsultation');
		var $sideTabTitle = $sideTab.find('h4');
		var closeDD = function(){
			if (!$('.dd.open').length){return};
			$('.dd.open').velocity({
				opacity : 0
			}, {
				duration : 125,
				display  : 'none',
				complete : function(){ 
					$('.dd.open .parents a').css('opacity',0);
					$(this).prev('a').removeClass('active'); 
				}
			});
		}
		var closeTab = function(){
			if (!$sideTab.hasClass('open')) {return};

			$sideTab.removeClass('open').velocity('reverse').find('input:first').blur();
			$sideTabTitle.velocity('fadeIn');
		}

		// lockfixed
		$.lockfixed($sideTab,{ offset: { top: 170, bottom: 250 }}); 

		// must rotate tab then fade in so we can animate later
		$sideTabTitle.velocity({'rotateZ': '-90deg'},{
			complete : function(){
				$sideTabTitle.velocity({'opacity': 1});
			}
		});

		// tab slideout
		$sideTabTitle.on('click',function(e){
			if (!$sideTab.hasClass('open')){

				$(this).velocity('fadeOut',{
					duration : 150,
					display  : 'none',
					complete : function(){
						$sideTab.addClass('open').velocity({ right : 0 },[200,35]);
						$sideTab.find('input:first').focus();
					}
				});
				// $sideTabTitle.velocity('stop').velocity({
				// 	'translateZ' : 0,
				// 	'z-index'     : 1
				// });

			} else {

				closeTab();

			}
		});


		// main site dropdowns // men & women
		$('nav.main a.has-dd').on('click',function(e){
			e.preventDefault();

			if ( $(this).hasClass('active') ) {return;};
			$(this).addClass('active');

			// close others
			closeDD();

			// close tab if it is open
			closeTab();

			var $dd = $(this).next('.dd');
			$dd.addClass('open').velocity('transition.flipYIn', { 
				duration : 275,
				complete : function(){
					$dd.find('ul.parents li a').velocity('transition.flipYIn',{ duration: 325, stagger : 150, drag : true, display: 'block' });
				} 
			});
		});


		// inner dd parent page click
		$('.dd .parents a').on('click',function(){
			var $el = $(this);
			var i = $el.parent().index()+1;
			if ($el.hasClass('active')){ return };
			$('.dd .parents a.active').removeClass('active');
			$('.dd children a').css('opacity',0);
			$('ul.children:visible').velocity('fadeOut',125);
			$el.addClass('active').closest('.dd').find('ul').eq(i).css({'display':'block','opacity':1}).find('a').velocity('transition.slideLeftIn', { duration: 200, stagger : 150, drag : true });
		});

		$('section.main main').on('click',function(e){
			
			var target = $(e.target);
			closeDD();

			if (!target.is('h4')) {
				closeTab();
			};

		});


		// home functions ===============================================================================
		if ($('body').hasClass('home')){

			// home carousel
			// owl documentation : 
			// http://www.owlgraphic.com/owlcarousel/

			$("#featured").owlCarousel({

				navigation      : false,
				autoPlay        : true,
				stopOnHover     : true,
				slideSpeed      : 300,
				paginationSpeed : 400,
				singleItem      : true,
				addClassActive  : true,
				// transitionStyle : 'slide',
				afterInit      : function(){
					// assign link to #invisibutton
					var link = $('#featured .owl-wrapper .owl-item').eq(0).find('a').attr('href');
					$('#invisibutton').attr('href',link);
				},
				beforeMove      : function(){},
				afterMove       : function(){
					// update #invisibutton link
					var link = $('#featured .owl-wrapper .owl-item.active a').attr('href');
					$('#invisibutton').attr('href',link);
				}
				
			});






			// patient journeys carousel
			$("#journeys").owlCarousel({

			  items           : 3,
			  itemsDesktop    : [1024,3],
			  itemsDesktopSmall : [979,3],
			  itemsTablet       : [768,3],
			  itemsMobile       : [560,1],
			  navigation      : true,
			  navigationText  : false,
			  rewindNav  : false,
			  pagination      : false,
			  slideSpeed      : 300,
			  paginationSpeed : 400,
			  // transitionStyle : 'slide',
				afterInit      : function(){
					$(window).on('load',function(){
						$('body').find('.circ.owl-carousel').height($('body').find('.circ.owl-carousel').height());
					});
				},
				beforeMove      : function(){},
				afterMove       : function(){}
				
			});

			// random people img in consultation block

				// var str = $('.consultations > div').data('imgarray');
				// var arr = str.split(',');
				// var len = arr.length;
				// var rNum = Math.floor(Math.random()*len);
				// var src = 'assets/images/'+arr[rNum];
				// console.log(arr+ '' + rNum);
				// $('#altimg').attr('src',src);

			var $altimg = $('#altimg img'),
				$altcap = $('#altimg + section p'),
				len     = $altimg.length,
				rNum    = Math.floor(Math.random()*len),
				n       = rNum;
			$altimg.eq(rNum).velocity('fadeIn');
			$altcap.eq(rNum).velocity('fadeIn');

			var swapFadeImg = function(){

				$altimg.filter(':visible:first').velocity('stop').velocity('fadeOut');
				$altcap.filter(':visible:first').velocity('stop').velocity('fadeOut',{
					complete: function(){
						
						var rNum = Math.floor(Math.random()*len);
						if (rNum === n){
							var rNum = Math.floor(Math.random()*len);
						}
						n = rNum;
						$altimg.eq(rNum).velocity('fadeIn');
						$altcap.eq(rNum).velocity('fadeIn');
					}
				});

			}

			setInterval(swapFadeImg,7000);

		}; // end home functions

		$('p:empty').remove();
		$('li:empty').remove();


 
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
 
  sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: true,
    pagination:false,
    navigationText : ["<i class=\"fa fa-caret-left\"></i>","<i class=\"fa fa-caret-right\"></i>"],
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
  });
 
  sync2.owlCarousel({
    items : 5,
    itemsDesktop      : [1199,10],
    itemsDesktopSmall     : [979,10],
    itemsTablet       : [768,8],
    itemsMobile       : [479,4],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });
 
  function syncPosition(el){
    var current = this.currentItem;
    $("#sync2")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if($("#sync2").data("owlCarousel") !== undefined){
      center(current)
    }
  }
 
  $("#sync2").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });
 
  function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }
 
    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      sync2.trigger("owl.goTo", num-1)
    }
    
  }


 
});