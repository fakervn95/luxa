
jQuery(document).ready(function(){

				// SCROLL TO DIV
				jQuery(window).scroll(function(){
					if(jQuery(this).scrollTop()>500){
						jQuery('.scrolltop').addClass('go_scrolltop');
					}
					else{
						jQuery('.scrolltop').removeClass('go_scrolltop');
					}
				});
				jQuery('.scrolltop').click(function (){
					jQuery('html, body').animate({
						scrollTop: jQuery("html").offset().top
					}, 1000);
				}); 
			// SLIDE
			$('.slide_arc_product').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:4
					}
				}
			})
		// STICKY NAVBAR
		if(jQuery('.header-search-button').length > 0) {
			var sticky = document.querySelector('.sticky');

			if (sticky.style.position !== 'sticky') {
				var stickyTop = sticky.offsetTop;

				document.addEventListener('scroll', function () {
					window.scrollY >= stickyTop ?
					sticky.classList.add('fixed_menu') :
					sticky.classList.remove('fixed_menu');
				});
			}
		}


		// MENU MOBILE
		jQuery(".icon_mobile_click").click(function(){
			jQuery(this).fadeOut(300);
			jQuery("#page_wrapper").addClass('page_wrapper_active');
			jQuery("#menu_mobile_full").addClass('menu_show').stop().animate({left: "0px"},260);
			jQuery(".close_menu, .bg_opacity").show();
		});
		jQuery(".close_menu").click(function(){
			jQuery(".top_header .icon_mobile_click").fadeIn(300);
			jQuery("#menu_mobile_full").animate({left: "-260px"},260).removeClass('menu_show');
			jQuery("#page_wrapper").removeClass('page_wrapper_active');
			jQuery(this).hide();
			jQuery('.bg_opacity').hide();
			if(jQuery('.middle_header').hasClass('fixed_menu')){
				jQuery('.middle_header.fixed_menu .icon_mobile_click').show();
			}
			
		});
		jQuery('.bg_opacity').click(function(){
			jQuery("#menu_mobile_full").animate({left: "-260px"},260).removeClass('menu_show');
			jQuery("#page_wrapper").removeClass('page_wrapper_active');
			jQuery('.close_menu').hide();
			jQuery(this).hide();
			jQuery('.top_header .icon_mobile_click').fadeIn(300);
			if(jQuery('.middle_header').hasClass('fixed_menu')){
				jQuery('.middle_header.fixed_menu .icon_mobile_click').show();
			}
		});
		jQuery("#menu_mobile_full ul li a").click(function(){
			jQuery(".icon_mobile_click").fadeIn(300);
			jQuery("#page_wrapper").removeClass('page_wrapper_active');
		});

		jQuery('.mobile-menu .menu>li:not(:has(ul.sub-menu)) , .mobile-menu .menu>li ul.sub-menu>li:not(:has(ul.sub-menu))').addClass('not-have-child');

		// menu cap 2
		jQuery('.mobile-menu ul.menu').children().has('ul.sub-menu').click(function(){
			jQuery(this).children('ul').slideToggle();
			jQuery(this).siblings().has('ul.sub-menu').find('ul.sub-menu').slideUp();
			jQuery(this).siblings().find('ul.sub-menu>li').has('ul.sub-menu').removeClass('editBefore_mobile');
		}).children('ul').children().click(function(event){event.stopPropagation();});

		//menu cap 3
		jQuery('.mobile-menu ul.menu>li>ul.sub-menu').children().has('ul.sub-menu').click(function(){
			jQuery(this).children('ul.sub-menu').slideToggle();
		}).children('ul').children().click(function(event){event.stopPropagation();});

			//menu cap 4
			jQuery('.mobile-menu ul.menu>li>ul.sub-menu>li>ul.sub-menu').children().has('ul.sub-menu').click(function(){
				jQuery(this).children('ul.sub-menu').slideToggle();
			}).children('ul').children().click(function(event){event.stopPropagation();});


			jQuery('.mobile-menu ul.menu li').has('ul.sub-menu').click(function(event){
				jQuery(this).toggleClass('editBefore_mobile');
			});
			jQuery('.mobile-menu ul.menu').children().has('ul.sub-menu').addClass('menu-item-has-children');
			jQuery('.mobile-menu ul.menu>li').click(function(){
				$(this).addClass('active').siblings().removeClass('active, editBefore_mobile');
			});

		// list_products_categories
		jQuery('.list_products_categories>ul').children().has('ul.sub_product_category').click(function(){
			jQuery(this).children('ul').slideToggle();
			jQuery('.list_products_categories>ul').children().not(this).has('ul.sub_product_category').find('ul.sub_product_category').slideUp();
		}).children('ul').children().click(function(event){event.stopPropagation()});
		jQuery('.list_products_categories>ul').children().find('ul.sub_product_category').children().has('ul.sub-menu').click(function(){
			jQuery(this).find('ul.sub-menu').slideToggle();
		});
		jQuery('.list_products_categories ul li').has('ul.sub_product_category').click(function(event){
			jQuery(this).toggleClass('editBefore_li_product');
			//event.preventDefault();
		});
		jQuery('.list_products_categories ul').children().has('ul.sub_product_category').addClass('menu-item-has-children');
		jQuery('.list_products_categories ul li').click(function(){
			jQuery(this).addClass('active').siblings().removeClass('active, editBefore_li_product ');
		});

		var width = jQuery(window).width();
		if(width>1100){
			var cart = jQuery('.g_cart');
			addToCart = $('.tg_btn_acts li.add_c a.add_to_cart_button');
			addToCart.on('click', function (evt) {

				var el = $(this),
				item = el.parents('.product_inner'),
				img = item.find('img'),
				cartTopOffset = cart.offset().top - item.offset().top,
				cartLeftOffset = cart.offset().left - item.offset().left;
				var flyingImg = $('<img class="b-flying-img">');
				flyingImg.attr('src', img.attr('src'));
				flyingImg.css('width', '200').css('height', '200');
				flyingImg.animate({
					top: cartTopOffset,
					left: cartLeftOffset,
					width: 50,
					height: 50,
					opacity: 0.1
				}, 800, function () {
					flyingImg.remove();
				});
				el.parents('.product_inner').append(flyingImg);
			});
		} //endif

		jQuery('.single-product .woocommerce-product-gallery ul li').click(function(){
			var link_img_preview =  jQuery(this).html();
			jQuery('.tg_img_product img').replaceWith(link_img_preview);
		});
		

	});

jQuery(window).load(function(){
	jQuery('.preloader-area').fadeOut();
});	


function custom_cursor(event, e) {
	var $mouse = jQuery('#mouse-cursor'),
	$el = $mouse.find('.mc-b');

	if(event == 'move') {
		var scroll_top = jQuery(window).scrollTop(),
		top = e.pageY-scroll_top,
		left = e.pageX;

		$mouse.css({
			'top': top,
			'left': left
		});
	} else if(event == 'show') {
		$mouse.fadeIn();
	} else if(event == 'hide') {
		$mouse.fadeOut();
	} else if(event == 'nav') {
		$el.addClass('nav');
	} else if(event == 'loupe') {
		$el.addClass('svg loupe');
	} else if(event == 'cart') {
		$el.addClass('svg cart');
	} else if(event == 'prev') {
		$el.addClass('svg prev');
	} else if(event == 'next') {
		$el.addClass('svg next');
	} else if(event == 'cancel') {
		$el.addClass('svg cancel');
	} else if(event == 'play') {
		$el.addClass('svg play');
	} else if(event == 'leave') {
		$el.attr('class', '').addClass('mc-b');
	} else if(event == 'link') {
		$el.addClass('link');
	} 
}

jQuery(document).on('load mousemove', function (e) {
	custom_cursor('show', '');
	custom_cursor('move', e);
}).on('mouseenter', 'a, [class*="social-"] a, [class*="button"], .owl-prev, .owl-next, .owl-dot, .nav-butter, .psb-items .psb-col .item', function() {
	custom_cursor('link', '');
}).on('mouseenter', '.navigation a', function() {
	custom_cursor('nav', '');
}).on('mouseenter', '.popup-item a[data-size]:not([data-type]), a.single-popup-item:not([data-type])', function() {
	custom_cursor('loupe');
}).on('mouseenter', '.popup-item a[data-type="video"], a.single-popup-item[data-type="video"]', function() {
	custom_cursor('play');
}).on('mouseleave', 'a, [class*="social-"] a, [class*="button"], .navigation a, .popup-item a[data-size]:not([data-type]), a.single-popup-item:not([data-type]), .popup-item a[data-type="video"], a.single-popup-item[data-type="video"], .owl-prev, .owl-next, .owl-dot, .nav-butter, .psb-items .psb-col .item', function() {
	custom_cursor('leave');
}).on('mouseleave', function() {
	custom_cursor('hide', '');
});

/* Functions */
function leadZero(n) {
	return (n < 10 ? '0' : '') + n;
}

function randomInteger(min, max) {
	var rand = min + Math.random() * (max + 1 - min);
	rand = Math.floor(rand);
	return rand;
}

function equalHeight(group) {
	if (jQuery(window).width() > '768') {
		var tallest = 0;
		jQuery(group).each(function () {
			var thisHeight = jQuery(this).css('height', '').outerHeight();
			if (thisHeight > tallest) {
				tallest = thisHeight;
			}
		});
		jQuery(group).css('height', tallest);
	} else {
		jQuery(group).css('height', '');
	}
}

function equalHeight_m(group) {
	var tallest = 0;
	jQuery(group).each(function () {
		var thisHeight = jQuery(this).css('height', '').outerHeight();
		if (thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	jQuery(group).css('height', tallest);
}

function search_popup(type) {
	if(jQuery('.header-search-button').length > 0) {
		jQuery('.search-popup').each(function() {
			var $this = jQuery(this),
			$sb = jQuery('.site-header .header-search-button i'),
			window_w = jQuery(window).width(),
			window_h = jQuery(window).height(),
			sb_left = $sb.offset().left+7.5,
			sb_top = $sb.offset().top+7.5,
			result_h = sb_left*100/window_w,
			result_v = sb_top*100/window_h,
			size = 0;

			if($this.hasClass('active')) {
				size = 150;
			} else {
				size = 0;
			}

			$this.css({
				'-webkit-clip-path': 'circle('+size+'% at '+result_h+'% '+result_v+'%)',
				'clip-path': 'circle('+size+'% at '+result_h+'% '+result_v+'%)'
			});
		});
	}
}


