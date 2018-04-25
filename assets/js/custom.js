is_mobile_device = isMobile();
sticky_header = (JSParams.sticky_header=='0')?false:true;
fixed_footer = (JSFooterParams.fixed_footer=='0')?false:true;




jQuery(document).ready(function($){
	
	var header_h = jQuery('#header').height();
	win_width = $(window).width();
	
	if(is_mobile_device){
		$('#header').addClass('mobile_non_responsive_option');
		$('#footer').addClass('mobile_non_responsive_option');
	}
	if(sticky_header && !is_mobile_device){
		if(win_width >= 960){	
			jQuery('.content_bgr').css('marginTop', header_h + 'px');
		}
	}
	if(jQuery('#wrapper.full_wrapper').doesExist()) {
		jQuery('body').css('background-image','none');
	}
	
	// Remove left indenting used for animating in sections on mobile
	if(is_mobile_device){
		jQuery('.info_block.animationStart .info_item').css('left',0);		
		jQuery('#portfolio_items.animationStart .portfolio_animator_class').css('left',0);		
		jQuery('.counter_desc').css('left',0);		
		jQuery('.circ_numbers_holder.animationStart .counter').css('left',0);		
		jQuery('.team_block_content.animationStart > .pic').css('left',0);		
	}


	// MENU LOGIC - Customize to keep HTML logic the same
//	$('#desktop-menu .menu-main-menu .sub-menu').not('#desktop-menu .menu-main-menu .sub-menu .sub-menu').before('<span class="nav_arrow"></span>');
	$('#desktop-menu .menu-main-menu > ul > li.expanded > a').append('<span></span>');

	$('#desktop-menu .menu-main-menu > ul > li.expanded ul').addClass('sub-menu');



	$('#desktop-menu .menu-main-menu ul > li.expanded > ul').prev('a').addClass('no_border');
	$('#desktop-menu .menu-main-menu ul > li.expanded > ul').wrap('<div/>');

	$('#desktop-menu .menu-main-menu ul > li.expanded > div > ul').wrap('<div/>');

	$('#desktop-menu .menu-main-menu ul > li.expanded > ul li a').wrapInner('<span/>');
	$('#desktop-menu .menu-main-menu ul > li.expanded > ul > li:last-child > a').addClass('last_submenu_item');
	
	//$('#desktop-menu .menu-main-menu ul > li.expanded > ul > li > div').addClass('subsub_menu');

	$('#desktop-menu .menu-main-menu > ul > li.expanded ul.sub-menu > li.expanded > div').addClass('subsub_menu');

	//$('#desktop-menu .menu-main-menu .children').prev().append('<span></span>');
	//$('#desktop-menu .menu-main-menu .children').wrap('<div/>');
	//$('#desktop-menu .menu-main-menu .children li a').wrapInner('<span/>');

	//update
	$('#desktop-menu .menu-main-menu > ul > li.expanded ul.sub-menu > li > a').wrapInner('<span/>');
	$('#desktop-menu .menu-main-menu > ul > li.expanded ul.sub-menu > li > a > span').wrapInner('<span/>');
	$('#desktop-menu .menu-main-menu .children > li:last-child > a').addClass('last_submenu_item');
	
	//$('#desktop-menu .menu-main-menu .children > li > div').addClass('subsub_menu');
	
	
	$('#desktop-menu .menu-main-menu .subsub_menu > ul > li > div').removeClass('subsub_menu').addClass('subsubsub_menu');
	$('#desktop-menu .menu-main-menu .subsubsub_menu > ul > li > div').addClass('subsubsub_menu');
	
	
	$('#desktop-menu .menu-main-menu .subsub_menu').prev('a').addClass('sub_menu_parent');
		
	// Mobile Menu
	$('#mobile_menu_toggler').click(function(){		
		$('#mobile-menu .menu-main-menu').stop(true,true).slideToggle(500);
	});
	
	$('#mobile-menu .menu-main-menu > ul li.expanded > a').append('<span></span>');

	$('#mobile-menu .menu-main-menu ul li.expanded a > span').addClass('icon').addClass('chevron-down');		
	
	$('#mobile-menu .menu-main-menu ul li a > span').click(function(e){	
		e.preventDefault();
		$(this).parent('a').next('ul').stop(true,true).slideToggle(500);
		if($(this).hasClass('chevron-down')) {
			$(this).removeClass('chevron-down').addClass('chevron-up');	
		}else {
			$(this).removeClass('chevron-up').addClass('chevron-down');	
		}
	});
	
	$(window).resize(function() {
			win_width = $(window).width();
			if(win_width >= 960){
				$('#mobile-menu .menu-main-menu').css('display', 'none');
			}
	});
	// MENU LOGIC :: END
	
	
	// Comment button restyle
	$('#respond #submit').addClass('button tiny_button regular_text');
	
	
	
	// Sidebar Menu 
	$('#sidebar .widget_categories > ul, #sidebar .widget_nav_menu  > div > ul, #sidebar .widget_pages ul:first, #sidebar .widget_meta ul, #sidebar .widget_recent_entries ul, #sidebar ul.product-categories').addClass('side_bar_menu');
	$('#sidebar ul.side_bar_menu a').wrapInner('<span class="link_span"/>').prepend('<span class="hover_span"></span>');
	
	// Sidebar Menu effects
	$('.side_bar_menu a').not(".active").hover(
			function() {
				$(this).children('.hover_span').stop().animate({width:'100%'},500,'easeOutExpo');
			},
			function() {
				$(this).children('.hover_span').stop().animate({width:'0'},200,'easeOutExpo');
			}
	);	
	
	// Sidebar Nav effects	
	$('.side_bar_nav a').not(".active").hover(
		function() {
			$(this).children('.hover_span').stop().animate({width:'100%'},500,'easeOutExpo');
		},
		function() {
			$(this).children('.hover_span').stop().animate({width:'0'},200,'easeOutExpo');
		}
	);	
	
	$('#sidebar .left_title').addClass('title_bgr');
	$('.testimonials').siblings('.left_title').removeClass('title_bgr');
	$('.testimonials').parents('.textwidget').css('paddingBottom',0);
	
	$('.more-link').before('<p></p>');
	$('.more-link').wrap('<p/>');

	
	// Top Comment class
	$('.single_comment:first').addClass('first_comment');
	
	// Footer Navigation pushoff
	$('#footer .menu').addClass('margined_left');
	$('#footer .menu').parent().prev('h3').addClass('margined_left');
	
	
	// Menu Animation
    $('#desktop-menu .menu-main-menu ul li').hover(
        function() {
            $(this).addClass("active");
            $(this).find('div').not('.subsub_menu, .subsubsub_menu').stop(false, true).fadeIn({
            	duration:700,
            	easing:"easeOutExpo"});
        },
        function() {
            $(this).removeClass("active");
            $(this).find('div').not('.subsub_menu, .subsubsub_menu').stop(false, true).fadeOut({
            	duration:200,
            	easing:"easeOutExpo"});
        }
    );

    
	// Sub Menu Animation
    $('#desktop-menu .menu-main-menu ul li li').hover(
        function() {
            $(this).find('.subsub_menu').stop(false, true).fadeIn({
            	duration:300,
            	easing:"easeOutExpo"});
        },
        function() {        
            $(this).find('.subsub_menu').stop(false, true).hide();
        }
    );	
    
    // Subsub Menu Animation
    $('#desktop-menu .menu-main-menu ul li li li').hover(
    		function() {
    			$(this).find('.subsubsub_menu').stop(false, true).fadeIn({
    				duration:300,
    				easing:"easeOutExpo"});
    		},
    		function() {        
    			$(this).find('.subsubsub_menu').stop(false, true).hide();
    		}
    );	
	
	// Gallery items add PrettyPhoto
	$('.gallery-item .gallery-icon a').attr('data-rel','prettyPhoto');
	
	// Sidebar Nav effects	
	$('.side_bar_nav a').not(".active").hover(
		function() {
			$(this).children('.hover_span').stop().animate({width:'100%'},500,'easeOutExpo');
		},
		function() {
			$(this).children('.hover_span').stop().animate({width:'0'},200,'easeOutExpo');
		}
	);
});