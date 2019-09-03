$(function(){
	//gnb event
	var menuOpen = false;
	$('.btn_menu').click(function(){
		if(menuOpen == false){
			$('.inner_header').addClass('on');
			$('.gnb').stop().slideDown();
			$('.mask').stop().fadeIn();
			$('html, body').css({'overflow':'hidden'});
			menuOpen = true;
		}else{
			$('.gnb').stop().slideUp(function(){
				$('.inner_header').removeClass('on');
			});
			$('.mask').stop().fadeOut();
			$('html, body').css({'overflow':'auto'});
			menuOpen = false;
		}
		return false;
	});

	$('.mask').click(function(){
		$('.inner_header').removeClass('on');
		$('.gnb').slideUp();
		$('.mask').fadeOut();
		$('html, body').css({'overflow':'auto'});
		menuOpen = false;
	});

	//one depth select
	$('.one_depth select').change(function(){
		var page = $(this).find('option:selected').val();
		window.location.href = page;
		console.log('test');
	});

	$('.one_depth select option').each(function(){
		var target = $(this).val();
		if(window.location.href.indexOf(target) != -1){
			$(this).attr('selected', 'selected');
		}
		console.log(window.location.href.indexOf(target));
	});

	//scroll event
	$(window).on('scroll resize', function(){
		var headerTopH = $('.header_top').height();
		//메인 또는 관별 메인에서는 scroll event 제거
		if(!$('body').hasClass('main')&&!$('body').hasClass('sub_main')){
			scrollEvent(headerTopH);
		}
	});

	//slider event
	$('.main_slider').slick({
		autoplay: true,
		arrows: false,
		dots: true
	});

	//reserve list
	$('.reserve>li>a').click(function(){
		if($(this).parent('li').hasClass('on')){
			$(this).parent('li').removeClass('on');
			$(this).next('.reserve_box').slideUp();
		}else{
			$(this).parents('.reserve').children('li').removeClass('on');
			$(this).parent('li').addClass('on');
			$(this).parents('.reserve').find('.reserve_box').slideUp();
			$(this).next('.reserve_box').slideDown();
		}
	});
	$('.reserve:not(.end)>li:first-child>a').trigger('click');

	//masonry
	$(window).load(function(){
		$('.grid').masonry({
			itemSelector: '.grid li',
			columnWidth: '.grid li',
			horizontalOrder: true,
			percentPosition: true,
			gutter: 25
		});
	});

	//faq list_type_01
	$('.faq_list>li>a').click(function(){
		if($(this).parent('li').hasClass('on')){
			$(this).parent('li').removeClass('on');
			$(this).next('.answer').slideUp();
		}else{
			$('.faq_list>li').removeClass('on');
			$(this).parent('li').addClass('on');
			$('.faq_list .answer').slideUp();
			$(this).next('.answer').slideDown();
		}
	});
	$('.faq_list>li:first-child>a').trigger('click');


	responsive();
});

function responsive(){
	var res = '',
	param = $('#header'),
	gnbList = $('.inner_gnb>ul>li'),
	gnbLink = gnbList.children('a'),
	gnbDepth2 = gnbList.children('ul');

	if($('.header_top').height() == 0) res = 'mob';
	else res = 'web';
	param.attr('class',res);
	def(param);

	$(window).resize(function(){
		if($('.header_top').height() == 0) res2 = 'mob';
		else res2 = 'web';
		param.attr('class',res2);
		if(res != res2){
			res = res2;
			def(param);
		}
	});

	function def(param){
		if(param.attr('class') == 'web'){
			gnbLink.unbind('click');
			gnbList.removeClass('on');
			gnbDepth2.show();
		}else if(param.attr('class') == 'mob'){
			gnbDepth2.hide();
			gnbLink.on('click',function(e){
				if($(this).next('ul').length > 0){
					if($(this).next('ul').is(':hidden')){
						gnbList.removeClass('on');
						gnbDepth2.stop().slideUp();
						$(this).parent('li').addClass('on');
						$(this).next('ul').stop().slideDown();
					}else{
						$(this).parent('li').removeClass('on');
						$(this).next('ul').stop().slideUp();
					}
					return false
				}
			});
		}
	}
}

function scrollEvent(headerTopH) {
	var innerHeaderH = $('.inner_header').height(),
	locationH = $('.location_wrap').height();
	if($(this).scrollTop() > headerTopH){
		$('.header_top').css({'margin-bottom':innerHeaderH+locationH});
		$('.inner_header').addClass('fixed');
		$('.location_wrap').addClass('fixed');
	}else{
		$('.header_top').css({'margin-bottom':'0'})
		$('.inner_header').removeClass('fixed');
		$('.location_wrap').removeClass('fixed');
	}
}
