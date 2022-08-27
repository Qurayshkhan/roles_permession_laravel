(function($){
    'use strict';

    //menu top fixed start for mobile menu & desktop menu
    var fixed_top = $(".check-box");
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 590) {
            fixed_top.addClass("box-fixed");
            $('body').addClass("body-padding");
        } else {
            fixed_top.removeClass("box-fixed");
            $('body').removeClass("body-padding");
        }
    });

    // menu icon-related
    $(".list-item>li>.m-submenu").parent("li").children("a").addClass("icon-down");

    //mobile drodown menu display
	$('.menu-list ul.list-item li a').on('click', function(e) {
        var element = $(this).parent('li');
        if (element.hasClass('open')) {
            element.removeClass('open');
            element.find('li').removeClass('open');
            element.find('ul').slideUp(500,"swing");
        }
        else {
            element.addClass('open');
            element.children('ul').slideDown(500,"swing");
            element.siblings('li').children('ul').slideUp(500,"swing");
            element.siblings('li').removeClass('open');
            element.siblings('li').find('li').removeClass('open');
            element.siblings('li').find('ul').slideUp(500,"swing");
        }
	}); 


    // drop down menu width overflow problem fix
    $('ul').parent().on('hover', function() {
        var menu = $(this).find("ul");
        var menupos = $(menu).offset();
        if (menupos.left + menu.width() > $(window).width()) {
            var newpos = -$(menu).width();
            menu.css({ left: newpos });    
        }
	});

    //image loaded hear//
	$('.container').imagesLoaded( function() {
		$('.portfolio-menu').on( 'click', '.button', function() {
		  	var filterValue = $(this).attr('data-filter');
		  	$grid.isotope({ filter: filterValue });
		});
		// change is-checked class on buttons
		$('.button-group').each(function (i, buttonGroup) {
			var $buttonGroup = $(buttonGroup);
			$buttonGroup.on('click', '.button', function () {
				$buttonGroup.find('.is-checked').removeClass('is-checked');
				$(this).addClass('is-checked');
			});
		});
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				columnWidth: 1, 
			}
		})
	});

    //menu side bar
    $('.menu-bar').on('click', function(){
        $('body,header,.menu-bar,.menu-items,.overlay').addClass('active');
    });

    $('.crose-bar').on('click', function(){
        $('body,header,.menu-bar,.menu-items,.overlay').removeClass('active');
    });

    $('.overlay').on('click', function(){
        $('body,header,.menu-bar,.menu-items,.overlay').removeClass('active');
    })

    // banner slider activation 
    var swiper = new Swiper('.banner-slide', {
        spaceBetween: 30,
        effect: 'fade',
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
    });

    // plan slider activation
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 3,
        loop: false,
        freeMode: false,
        loopedSlides: 3, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            575: {
                slidesPerView: 1,
            }
        }
      });
      var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        loop:true,
        loopedSlides: 1, //looped slides should be the same
        thumbs: {
          swiper: galleryThumbs,
        },
      });

    // testimonial slider activation
    var swiper = new Swiper('.testimonial-container', {
        slidesPerView: 2,
        spaceBetween: 10,
        freeMode: true,
        autoplay: true,
        navigation: {
            nextEl: '.test-button-next',
            prevEl: '.test-button-prev',
        },
        breakpoints: {
            575:  {
                slidesPerView: 1,
            }
        }
    });


    // car thumbls slide activation 
    var galleryThumbs = new Swiper('.car-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        loop: true,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
      var galleryTop = new Swiper('.car-top', {
        spaceBetween: 10,
        loop:true,
        loopedSlides: 5, //looped slides should be the same
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        thumbs: {
          swiper: galleryThumbs,
        },
      });

    //sponser slider activation
	var swiper = new Swiper('.sponsor-container', {
		slidesPerView: 6,
		speed:1000,
		autoplay:1000,
		autoplay:true,
		loop: true,
		freeMode: true,
		breakpoints: {
			1024: {
				slidesPerView: 5,
			},
			768: {
				slidesPerView: 4,
			},
			576: {
				slidesPerView: 3,
			},
			425: {
				slidesPerView: 2,
			}
		}
    });

    // read more text view
	$(document).ready(function() {
		$(".read").click(function() {
			$(this).prev().toggle();
			$(this).siblings('.dots').
			toggle();
			if($(this).text()=='read less'){
				$(this).text('read more');
			}
			else {
				$(this).text('read less'); 
			}
    });
    
    });


    // scroll up start here
    $(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 300) {
                $('.scrollToTop').css({'bottom':'2%', 'opacity':'1','transition':'all .5s ease'});
            } else {
                $('.scrollToTop').css({'bottom':'-30%', 'opacity':'0','transition':'all .5s ease'})
            }
        });
        //Click event to scroll to top
        $('.scrollToTop').on('click', function(){
            $('html, body').animate({scrollTop : 0},500);
            return false;
        });
    });

    // lightcase 
    $('a[data-rel^=lightcase]').lightcase();
    


})(jQuery)