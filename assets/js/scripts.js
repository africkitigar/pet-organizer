(function ($, root, undefined) {
	
	$(function () {
		
		$(document).ready(function(){
			/*------------------------------------*\
   				 MOBILE MENU
			\*------------------------------------*/			
			$('.mob-menu-bar').click(function() {
				$(this).toggleClass('change');
				$('.header nav').toggleClass('open');
			});


			 //mob submenus
			 $('.side-nav .menu-item-has-children').click(function(e){
				$(this).toggleClass('menu-open');
				$(this).find('.sub-menu').slideToggle('slow', 'swing');					  
			});
			/*------------------------------------*\
   				 END OF MOBILE MENU
			\*------------------------------------*/


			 //bottom to top
			$(window).scroll(function() {
				if ($(this).scrollTop() >= 400) {        
					$('#return-to-top').fadeIn(200);    
				} else {
					$('#return-to-top').fadeOut(200);   
				}
			});
			$('#return-to-top').click(function() {      
				$('body,html').animate({
					scrollTop : 0                      
				}, 500);
			});
			
			
			//create sticky nav
			$(window).scroll(function() {

				if ($(this).scrollTop() > 50){  
					$('.header').addClass("sticky");
				}
				else{
					$('.header').removeClass("sticky");
				}
			});
			
			
			// DIV IN VIEWPORT
			$.fn.isInViewport = function() {
			    var elementTop = $(this).offset().top;
			    var elementBottom = elementTop + $(this).outerHeight();

			    var viewportTop = $(window).scrollTop();
			    var viewportBottom = viewportTop + $(window).height();

			    return elementBottom > viewportTop && elementTop < viewportBottom;
			};

			$.fn.isInViewport2 = function() {
			    var elementTop = $(this).offset().top + 600;
			    var elementBottom = elementTop + $(this).outerHeight();

			    var viewportTop = $(window).scrollTop();
			    var viewportBottom = viewportTop + $(window).height();

			    return elementBottom > viewportTop && elementTop < viewportBottom;
			};
		
			

			// SCROLL SPEED
			$.fn.moveIt = function(){
			  var $window = $(window);
			  var instances = [];

			  $(this).each(function(){
			    instances.push(new moveItItem($(this)));
			  });

			  window.onscroll = function(){
			    var scrollTop = $window.scrollTop();
			    instances.forEach(function(inst){
			      inst.update(scrollTop);
			    });
			  }
			}

			var moveItItem = function(el){
			  this.el = $(el);
			  this.speed = parseInt(this.el.attr('data-scroll-speed'));
			};

			moveItItem.prototype.update = function(scrollTop){
				this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
			};

			// Initialization
			$(function(){
			  $('[data-scroll-speed]').moveIt();
			});




			
			
		});//ready
		
		
		
		
	});
	
})(jQuery, this);
