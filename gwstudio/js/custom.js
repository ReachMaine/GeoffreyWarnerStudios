// Plugin for Equal Height Columns
$.fn.equalHeights = function(px) {
	$(this).each(function(){
		var currentTallest = 0;
		$(this).children().each(function(i){
			if ($(this).height() > currentTallest) { currentTallest = $(this).height(); }
		});
		//if (!px || !Number.prototype.pxToEm) currentTallest = currentTallest.pxToEm(); //use ems unless px is specified
		// for ie6, set height since min-height isn't supported
		if ($.browser.msie && $.browser.version == 6.0) { $(this).children().css({'height': currentTallest}); }
		$(this).children().css({'min-height': currentTallest}); 
	});
	return this;
};

$(function() {
	
	$('a.lightbox, a.preview_link').fancybox();
	
	$("#home-carousal ul").carouFredSel({
		width: 807,
		height: 558,
		items: {
			visible: 1,
			width: 807,
			height: 558
		},
		auto: true,
		auto: 4000,
		prev: ".arrow-left",
		next: ".arrow-right"
	});
	
	/*$(".wpcart_gallery").carouFredSel({
		auto: false,
		prev: ".arrow-left",
		next: ".arrow-right"	
	});*/
	
	$("#workshop-slider ul").carouFredSel({
		width: 807,
		height: 558,
		items: {
			visible: 1,
			width: 807,
			height: 558
		},
		auto: true,
		auto: 4000,
		prev: ".arrow-left",
		next: ".arrow-right"	
	});
	
	$('.productgallery .big-img li:not(:first)').hide();
	$('.productgallery .small-thumb li').click(function() {
		$('.productgallery .big-img li').hide();
		$('.productgallery .big-img li').eq($(this).index()).show('slow');
		//alert($(this).index());
	});
	
	$('.productgallery .big-img-2 li:not(:first)').hide();
	$('.productgallery .small-thumb-2 li').click(function() {
		$('.productgallery .big-img-2 li').hide();
		$('.productgallery .big-img-2 li').eq($(this).attr('class')).show('slow');
		//alert($(this).index());
		var colHeight = Math.max($('.left-area').height(), $('.right-area').height());
		$('.left-area, .right-area, .thumbnail-2').height(colHeight);
	});
	
	
	$('.productgallery .big-img-3 li:not(:first)').hide();
	$('.prod-desc li:not(:first)').hide();
	$('.productgallery .small-thumb-3 li').click(function() {
		$('.productgallery .big-img-3 li').hide();
		$('.productgallery .big-img-3 li').eq($(this).attr('class')).show('slow');
		$('.prod-desc li').hide();
		$('.prod-desc li').eq($(this).attr('class')).show('slow');
	});
	
	//change captions of images in product pages
	$('.wpcart_gallery img').each(function() { $(this).attr('title', $(this).attr('alt')) });
	$('.imagecol a.preview_link, .imagecol a.preview_link img').attr('title', $('.wpcart_gallery img:first').attr('alt'));
	$('.imagecol a.preview_link img').attr('title', $('.wpcart_gallery img:first').attr('alt'));
	
	if ($('.wpcart_gallery img').length > 0) {
		$("<p class='prod-title'>" + $('.wpcart_gallery img:first').attr('alt') + "</p>").insertAfter('.imagecol a.preview_link');
	} else {
		$("<p class='prod-title'>" + $('.product_image:first').attr('alt') + "</p>").insertAfter('.imagecol a.preview_link');
	}
	
	$('.wpcart_gallery img').click(function() {
		$('.imagecol a.preview_link, .imagecol a.preview_link img').attr('title', $(this).attr('alt'));
		$('.imagecol a.preview_link img').attr('title', $(this).attr('alt'));
		$('.prod-title').html($(this).attr('alt'));
	});
	
	// equal height images
	var imgHeight = 0;
	var rowItems = 4;
	var heights = [];
	var currentItem = 0;
	$('.small-thumb-3 li').each(function() {
		if (currentItem < rowItems) {
			if (imgHeight < $(this).find('img').height()) {
				imgHeight = $(this).find('img').height();
			}
			currentItem++;
		} else {
			currentItem = 1;
			heights.push(imgHeight);
			imgHeight = $(this).find('img').height();    
		}
	});
	heights.push(imgHeight);
	var currentItem = 0;
	var arrayPointer = 0;
	$('.small-thumb-3 li').each(function() {
		if (currentItem < rowItems) {
			$(this).height(heights[arrayPointer]);
			currentItem++;
		} else {
			currentItem = 1;
			arrayPointer++;
			$(this).height(heights[arrayPointer]);
		}
	});
	
	$('.wpcart_gallery img').click(function() {
		matchHights();
	});
	
});

$(window).ready(function() {
	matchHights();
});

function matchHights() {
	var colHeight = Math.max($('.right-group').height(), $('.home-post').height());
	$('.right-group').height(colHeight);
	$('.home-post').height(colHeight);
	
	var colHeight = Math.max($('.imagecol').height(), $('.productcol').height());
	$('.imagecol, .productcol').height(colHeight);
	
	var colHeight = Math.max($('.left-area').height(), $('.right-area').height());
	$('.left-area, .right-area, .thumbnail-2').height(colHeight);
}