$(document).ready(function(){

		$('.tm_links_block1 .title_block').click(function() {
		    $('.tm_links_block1 .list-block1').slideToggle("slow");
		    $('.tm_links_block1 .title_block').toggleClass('active');
		  });

		// tm_vertical menu

		$('.tmvm-contener .block-title').click(function() {
		    $('.tmvm-contener .top-menu').slideToggle("slow");
		    $('.tmvm-contener .block-title').toggleClass('active');
		  });

		// tm_top link

		$('#links_block_top .title_block').click(function() {
		    $('#links_block_top .block_content').slideToggle("slow");
		    $('#links_block_top .title_block').toggleClass('active');
		  });

		// tm_testimonial

		$('#tmtestimonialcmsblock .title_block').click(function() {
		    $('#tmtestimonialcmsblock .block_content').slideToggle("slow");
		    $('#tmtestimonialcmsblock .title_block').toggleClass('active');
		  });

		//breadcrumbs
		$('h1.h1').prependTo('.breadcrumb .container');

		$('#product #productCommentsBlock').appendTo('#product #tab-content #rating');

});

function additionalCarousel(sliderId){
	/*======  curosol For Additional ==== */
	 var tmadditional = $(sliderId);
      tmadditional.owlCarousel({
     	 items : 3, //10 items above 1000px browser width
     	 itemsDesktop : [1199,3], 
     	 itemsDesktopSmall : [991,2], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });
      // Custom Navigation Events
      $(".additional_next").click(function(){
        tmadditional.trigger('owl.next');
      })
      $(".additional_prev").click(function(){
        tmadditional.trigger('owl.prev');
      });
}
//sign in toggle
$(document).ready(function(){
	$('.tm_userinfotitle').click(function(event){
		 $(this).toggleClass('active');
		 event.stopPropagation();
		 $(".user-info").slideToggle("fast");
	   });
	   $(".user-info").on("click", function (event) {
		 event.stopPropagation();
	   });	
	   $('#product #productCommentsBlock').appendTo('#product #tab-content #rating');
	   
});
$(document).ready(function(){
	
	bindGrid();
	additionalCarousel("#main #additional-carousel");

	$('.menu-icon').on('click', function () {
	$('#mobile_top_menu_wrapper').toggleClass('slide');
	$('.menu-icon').toggleClass('active');
	$('body').toggleClass('active');
	$('#page').toggleClass('active');
	
		});
	

	$('.cart_block .block_content').on('click', function (event) {
		event.stopPropagation();
	});
		
});


// Add/Remove acttive class on menu active in responsive  
	$('#menu-icon').on('click', function() {
		$(this).toggleClass('active');
	});

// Loading image before flex slider load
	$(window).load(function() { 
		$(".loadingdiv").removeClass("spinner"); 
	});

// Flex slider load
	$(window).load(function() {
		if($('.flexslider').length > 0){ 
			$('.flexslider').flexslider({		
				slideshowSpeed: $('.flexslider').data('interval'),
				pauseOnHover: $('.flexslider').data('pause'),
				animation: "fade"
			});
		}
	});		

// Scroll page bottom to top
	$(window).scroll(function() {
		if ($(this).scrollTop() > 500) {
			$('.top_button').fadeIn(500);
		} else {
			$('.top_button').fadeOut(500);
		}
	});							
	$('.top_button').click(function(event) {
		event.preventDefault();		
		$('html, body').animate({scrollTop: 0}, 800);
	});



/*======  Carousel Slider For Feature Product ==== */
	
	var tmfeature = $("#feature-carousel");
	tmfeature.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,2] 
	});
	// Custom Navigation Events
	$(".feature_next").click(function(){
		tmfeature.trigger('owl.next');
	})
	$(".feature_prev").click(function(){
		tmfeature.trigger('owl.prev');
	});



/*======  Carousel Slider For New Product ==== */
	
	var tmnewproduct = $("#newproduct-carousel");
	tmnewproduct.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,2] 
	});
	// Custom Navigation Events
	$(".newproduct_next").click(function(){
		tmnewproduct.trigger('owl.next');
	})
	$(".newproduct_prev").click(function(){
		tmnewproduct.trigger('owl.prev');
	});



/*======  Carousel Slider For Bestseller Product ==== */
	
	var tmbestseller = $("#bestseller-carousel");
	tmbestseller.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,2] 
	});
	// Custom Navigation Events
	$(".bestseller_next").click(function(){
		tmbestseller.trigger('owl.next');
	})
	$(".bestseller_prev").click(function(){
		tmbestseller.trigger('owl.prev');
	});



/*======  Carousel Slider For Special Product ==== */
	var tmspecial = $("#special-carousel");
	tmspecial.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,2] 
	});
	// Custom Navigation Events
	$(".special_next").click(function(){
		tmspecial.trigger('owl.next');
	})
	$(".special_prev").click(function(){
		tmspecial.trigger('owl.prev');
	});


/*======  Carousel Slider For Accessories Product ==== */

	var tmaccessories = $("#accessories-carousel");
	tmaccessories.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,2] 
	});
	// Custom Navigation Events
	$(".accessories_next").click(function(){
		tmaccessories.trigger('owl.next');
	})
	$(".accessories_prev").click(function(){
		tmaccessories.trigger('owl.prev');
	});


/*======  Carousel Slider For Category Product ==== */

	var tmproductscategory = $("#productscategory-carousel");
	tmproductscategory.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,2] 
	});
	// Custom Navigation Events
	$(".productscategory_next").click(function(){
		tmproductscategory.trigger('owl.next');
	})
	$(".productscategory_prev").click(function(){
		tmproductscategory.trigger('owl.prev');
	});


/*======  Carousel Slider For Viewed Product ==== */

	var tmviewed = $("#viewed-carousel");
	tmviewed.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,2] 
	});
	// Custom Navigation Events
	$(".viewed_next").click(function(){
		tmviewed.trigger('owl.next');
	})
	$(".viewed_prev").click(function(){
		tmviewed.trigger('owl.prev');
	});

/*======  Carousel Slider For Crosssell Product ==== */

	var tmcrosssell = $("#crosssell-carousel");
	tmcrosssell.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,2] 
	});
	// Custom Navigation Events
	$(".crosssell_next").click(function(){
		tmcrosssell.trigger('owl.next');
	})
	$(".crosssell_prev").click(function(){
		tmcrosssell.trigger('owl.prev');
	});

/*======  curosol For Manufacture ==== */
	 var tmbrand = $("#brand-carousel");
      tmbrand.owlCarousel({
		autoPlay : true,
     	 items : 5, //10 items above 1000px browser width
     	 itemsDesktop : [1199,3], 
     	 itemsDesktopSmall : [991,3],
     	 itemsTablet: [767,2], 
     	 itemsMobile : [480,1] 
      });
      // Custom Navigation Events
      $(".brand_next").click(function(){
        tmbrand.trigger('owl.next');
      })
      $(".brand_prev").click(function(){
        tmbrand.trigger('owl.prev');
      });
	  



/*======  Carousel Slider For For Tesimonial ==== */

	var tmtestimonial = $("#tmlefttestimonial-carousel");
	tmtestimonial.owlCarousel({
		autoPlay: true,
		singleItem:true
	});

/*======  Carousel Slider For blog  ==== */
	
	var tmblog = $("#blog-carousel");
	tmblog.owlCarousel({
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [1199,1], 
		itemsDesktopSmall : [991,1], 
		itemsTablet: [479,1], 
		itemsMobile : [319,1] 
	});

	$(".blog_next").click(function(){
		tmblog.trigger('owl.next');
	})
	$(".blog_prev").click(function(){
		tmblog.trigger('owl.prev');
	});


function bindGrid()
{
	var view = $.totalStorage("display");

	if (view && view != 'grid')
		display(view);
	else
		$('.display').find('li#grid').addClass('selected');

	$(document).on('click', '#grid', function(e){
		e.preventDefault();
		display('grid');
	});

	$(document).on('click', '#list', function(e){
		e.preventDefault();
		display('list');		
	});	
}


function display(view)
{
	if (view == 'list')
	{
		$('#products ul.product_list').removeClass('grid').addClass('list row');
		$('#products .product_list > li').removeClass('col-xs-12 col-sm-6 col-md-4 col-lg-3').addClass('col-xs-12');

		$('#products .product_list > li .thumbnail-container').addClass('col-xs-4 col-xs-5 col-lg-3');
		$('#products .product_list > li .product-description ').addClass('center-block col-xs-4 col-xs-7 col-md-8');


		$('.display').find('li#list').addClass('selected');
		$('.display').find('li#grid').removeAttr('class');
		$.totalStorage('display', 'list');
	}
	else
	{
		$('#products ul.product_list').removeClass('list').addClass('grid row');
		$('#products .product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-6 col-md-4 col-lg-3');
		$('#products .product_list > li .thumbnail-container').removeClass('col-xs-4 col-xs-5 col-lg-3');
		$('#products .product_list > li .product-description').removeClass('center-block col-xs-4 col-xs-7 col-md-8');


		$('.display').find('li#grid').addClass('selected');
		$('.display').find('li#list').removeAttr('class');
		$.totalStorage('display', 'grid');
	}
}


function searchtoggle() {
	if ($(window).width() > 0) {
	
	$('#header .search_button').click(function (event) {
	$(this).toggleClass('active');
	$('#header #search_widget').toggleClass('active');
	event.stopImmediatePropagation();
	$("#header .searchtoggle").slideToggle("fast");
	$('#header .search-widget form input[type="text"]').focus();
	});
	$("#header .searchtoggle").on("click", function (event) {
	event.stopImmediatePropagation();
	});
	}
	else {
	$('#header .search_button,#header .searchtoggle').unbind();
	$('#search_widget').unbind();
	$("#header .searchtoggle").show();
	}
	}
	$(window).resize(function () { searchtoggle(); });
	$(window).ready(function () { searchtoggle(); });


function responsivecolumn(){
	
	if ($(document).width() <= 991){
				
		// ---------------- Fixed header responsive ----------------------
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 0) {
				$('.header-nav').addClass('fixed');
				

			} else {
				$('.header-nav').removeClass('fixed');
				
			}
		});
	}
	
	
	if ($(document).width() <= 991)
	{
		$('.container #columns_inner #left-column').appendTo('.container #columns_inner');
		$('.header-top #search_widget').detach().insertAfter('.header-nav #_mobile_user_info');
		
	}
	else if($(document).width() >= 992)
	{
		$('.container #columns_inner #left-column').prependTo('.container #columns_inner');
		$('.header-nav #search_widget').detach().insertAfter('.header-top #links_block_top');
		
	}
}
$(document).ready(function(){responsivecolumn();});
$(window).resize(function(){responsivecolumn();});


// ---------------- start more menu setting ----------------------
if ($(document).width() >= 992 && $(document).width() <= 1199) {
	var max_elem = 7;
	}
	else {
	var max_elem = 9;
	}
	
	
	var itemsleft = $('.header-top .menu ul#top-menu > li,#left-column .menu ul#top-menu > li');
	
	
	
	if (itemsleft.length > max_elem) {
	
	$('.header-top .menu ul#top-menu, #left-column .menu ul#top-menu').append('<li><div class="more-wrap"><span class="more-view"><i class="material-icons">&#xE145;</i>More</span></div></li>');
	}
	
	$('.header-top .menu ul#top-menu .more-wrap,#left-column .menu ul#top-menu .more-wrap ').click(function () {
	if ($(this).hasClass('active')) {
	itemsleft.each(function (i) {
	if (i >= max_elem) {
	$(this).slideUp(200);
	}
	});
	$(this).removeClass('active');
	//$(this).children('div').css('display', 'block');
	$('.more-wrap').html('<span class="more-view"><i class="material-icons">&#xE145;</i>More</span>');
	} else {
	itemsleft.each(function (i) {
	if (i >= max_elem) {
	$(this).slideDown(200);
	}
	});
	$(this).addClass('active');
	$('.more-wrap').html('<span class="more-view"><i class="material-icons">&#xE15b;</i>Less</span>');
	}
	});
	
	itemsleft.each(function (i) {
	if (i >= max_elem) {
	$(this).css('display', 'none');
	}
	});