(function ($) {
    "use strict";


    // preloader script
    //___________________________
    $(document).ready(function () {

        setTimeout(function () {
            $('#ctn-preloader').addClass('loaded');
            // Una vez haya terminado el preloader aparezca el scroll
            $('body').removeClass('no-scroll-y');

            if ($('#ctn-preloader').hasClass('loaded')) {
                // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
                $('#preloader').delay(1000).queue(function () {
                    $(this).remove();
                });
            }
        }, 1000);

    });

    // zoom script
    //___________________________
    $(document).ready(function () {
        $('.zoom').magnify();
    });

    // jquery flipper script
    //___________________________
    jQuery(function ($) {
        $('#myFlipper').flipper('init');
    });


    // Subscribe model script
    //___________________________
    $(document).ready(function () {
        $("#subscribe-modal").modal('show');
    });



    // Back to top script
    //___________________________
    // Scroll Event
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();

        if (scrolled > 600) $('.back-to-top').addClass('active');
        if (scrolled < 600) $('.back-to-top').removeClass('active');
    });
    // Click Event
    $('.back-to-top').on('click', function () {
        $("html, body").animate({
            scrollTop: "0"
        }, 100);
    });


    // Fixed Header script
    //___________________________
    var headerDesktop = $('.container-menu-desktop');
    var wrapMenu = $('.wrap-menu-desktop');

    if ($('.top-bar').length > 0) {
        var posWrapHeader = $('.top-bar').height();
    } else {
        var posWrapHeader = 0;
    }


    if ($(window).scrollTop() > posWrapHeader) {
        $(headerDesktop).addClass('fix-menu-desktop');
        $(wrapMenu).css('top', 0);
    } else {
        $(headerDesktop).removeClass('fix-menu-desktop');
        $(wrapMenu).css('top', posWrapHeader - $(this).scrollTop());
    }

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > posWrapHeader) {
            $(headerDesktop).addClass('fix-menu-desktop');
            $(wrapMenu).css('top', 0);
        } else {
            $(headerDesktop).removeClass('fix-menu-desktop');
            $(wrapMenu).css('top', posWrapHeader - $(this).scrollTop());
        }
    });


    // Menu mobile script
    //___________________________

    $('.btn-show-menu-mobile').on('click', function () {
        $(this).toggleClass('is-active');
        $('.menu-mobile').slideToggle();
    });

    var arrowMainMenu = $('.arrow-main-menu-m');

    for (var i = 0; i < arrowMainMenu.length; i++) {
        $(arrowMainMenu[i]).on('click', function () {
            $(this).parent().find('.sub-menu-m').slideToggle();
            $(this).toggleClass('turn-arrow-main-menu-m');
        })
    }

    $(window).resize(function () {
        if ($(window).width() >= 992) {
            if ($('.menu-mobile').css('display') == 'block') {
                $('.menu-mobile').css('display', 'none');
                $('.btn-show-menu-mobile').toggleClass('is-active');
            }

            $('.sub-menu-m').each(function () {
                if ($(this).css('display') == 'block') {
                    console.log('hello');
                    $(this).css('display', 'none');
                    $(arrowMainMenu).removeClass('turn-arrow-main-menu-m');
                }
            });

        }
    });


    // Filter / Search product script
    //___________________________

    $('.js-show-filter').on('click', function () {
        $(this).toggleClass('show-filter');
        $('.panel-filter').slideToggle(400);

        if ($('.js-show-search').hasClass('show-search')) {
            $('.js-show-search').removeClass('show-search');
            $('.panel-search').slideUp(400);
        }
    });

    $('.js-show-search').on('click', function () {
        $(this).toggleClass('show-search');
        $('.panel-search').slideToggle(400);

        if ($('.js-show-filter').hasClass('show-filter')) {
            $('.js-show-filter').removeClass('show-filter');
            $('.panel-filter').slideUp(400);
        }
    });

    // Cart script
    //___________________________

    $('.js-show-cart').on('click', function () {
        $('.js-panel-cart').addClass('show-header-cart');
    });

    $('.js-hide-cart').on('click', function () {
        $('.js-panel-cart').removeClass('show-header-cart');
    });


    // wishlist script
    //___________________________

    $('.js-show-wishlist').on('click', function () {
        $('.js-panel-wishlist').addClass('show-header-wishlist');
    });

    $('.js-hide-wishlist').on('click', function () {
        $('.js-panel-wishlist').removeClass('show-header-wishlist');
    });

    // sidebar product script
    //___________________________

    $('.js-show-sidebar').on('click', function () {
        $('.js-sidebar').addClass('show-sidebar');
    });

    $('.js-hide-sidebar').on('click', function () {
        $('.js-sidebar').removeClass('show-sidebar');
    });

    // +/- num product script
    //___________________________

    $('.btn-num-product-down').on('click', function () {
        var numProduct = Number($(this).next().val());
        if (numProduct > 0) $(this).next().val(numProduct - 1);
    });

    $('.btn-num-product-up').on('click', function () {
        var numProduct = Number($(this).prev().val());
        $(this).prev().val(numProduct + 1);
    });



    // Cart modal script
    //___________________________

    $('.js-cart-show-modal').on('click', function (e) {
        e.preventDefault();
        $('.cart-js-modal').addClass('cart-show-modal');
    });

    $('.cart-js-hide-modal').on('click', function () {
        $('.cart-js-modal').removeClass('cart-show-modal');
    });

    $('.js-addwish-b2').on('click', function (e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function () {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });


    // sweetalert script
    //___________________________

    $(".submit").click(function () {
        swal("Subscribe Successfully!", "Done!", "success");
    });

    $(".formSubmit").click(function () {
        swal("Subscribe Successfully!", "Done!", "success");
    });


    $('.js-addcart-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.js-addwish-b2').on('click', function (e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function () {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    $('.js-addcart-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });


    // MagnificPopup script
    //___________________________

    $('.gallery-img,.gallery-lb,.cart-gallery').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-fade'
        });
    });

    // Swiper (cart) script
    //___________________________
    var swiper = new Swiper(".slider__thumbs .swiper-container", {
        direction: 'vertical',
        slidesPerView: 3,
        spaceBetween: 24,
        // loop: true,
        freeMode: true,
        // watchSlidesProgress: true,
        navigation: {
            nextEl: ".slider__next",
            prevEl: ".slider__prev"
        },
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            576: {
                slidesPerView: 3,
                spaceBetween: 5
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 5
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 5
            }
        }
    });
    var swiper2 = new Swiper(".slider__images .swiper-container", {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 32,
        mousewheel: false,
        navigation: {
            nextEl: ".slider__next",
            prevEl: ".slider__prev"
        },
        thumbs: {
            swiper: swiper
        },
        breakpoints: {
            320: {
                allowTouchMove: false,
            },
            575: {
                allowTouchMove: false,
            },
        }

    });

    // Swiper (cart) script
    //___________________________
    var swiper = new Swiper(".slider__thumbs .swiper-product-slider", {
        direction: 'vertical',
        slidesPerView: 3,
        spaceBetween: 24,
        loop: true,
        freeMode: true,
        // watchSlidesProgress: true,
        navigation: {
            nextEl: ".slider__next",
            prevEl: ".slider__prev"
        },
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            576: {
                slidesPerView: 3,
                spaceBetween: 5
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 5
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 5
            }
        }
    });
    var swiper2 = new Swiper(".slider__images .swiper-product-slider", {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 32,
        mousewheel: false,
        navigation: {
            nextEl: ".slider__next",
            prevEl: ".slider__prev"
        },
        thumbs: {
            swiper: swiper
        },
        breakpoints: {
            320: {
                allowTouchMove: false,
            },
            575: {
                allowTouchMove: false,
            },
        }

    });



    // Swiper (Home Slider) script
    //___________________________
    var swiper = new Swiper('.product-slider', {
        spaceBetween: 30,
        effect: 'fade',
        // initialSlide: 2,
        loop: true,
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.next',
            prevEl: '.prev'
        },
        // mousewheel: {
        //     // invert: false
        // },
        on: {
            init: function () {
                var index = this.activeIndex;

                var target = $('.product-slider__item').eq(index).data('target');

                console.log(target);

                $('.product-img__item').removeClass('active');
                $('.product-img__item#' + target).addClass('active');
            }
        }

    });

    swiper.on('slideChange', function () {
        var index = this.activeIndex;

        var target = $('.product-slider__item').eq(index).data('target');

        console.log(target);

        $('.product-img__item').removeClass('active');
        $('.product-img__item#' + target).addClass('active');

        if (swiper.isEnd) {
            $('.prev').removeClass('disabled');
            $('.next').addClass('disabled');
        } else {
            $('.next').removeClass('disabled');
        }

        if (swiper.isBeginning) {
            $('.prev').addClass('disabled');
        } else {
            $('.prev').removeClass('disabled');
        }
    });

    $(".js-fav").on("click", function () {
        $(this).find('.heart').toggleClass("is-active");
    });



    // Swiper (Tesimonial) script
    //___________________________
    var mySwiper = new Swiper('#testimonial .swiper-container', {
        loop: true,
        spaceBetween: 0,
        speed: 1000,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })
    // Swiper (Gallery) script
    //___________________________

    var swiper = new Swiper('.carousel-gallery .swiper-container', {
        effect: 'slide',
        speed: 900,
        slidesPerView: 5,
        loop: true,
        simulateTouch: true,
        navigation: {
            nextEl: ".slider__next",
            prevEl: ".slider__prev"
        },
        autoplay: {
          delay: 5000,
          stopOnLastSlide: false,
          disableOnInteraction: false
        },
        pagination: {
            el: '.carousel-gallery .swiper-pagination',
            clickable: true
        },
        breakpoints: {
            // when window width is <= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 5
            },
            // when window width is <= 480px
            425: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is <= 640px
            768: {
                slidesPerView: 3,
            }
        }
    });


    // scrollTo click event model script
    //___________________________

    // on click event on all anchors with a class of scrollTo
    $('button.scrollTo').on('click', function () {

        // data-scrollTo = section scrolling to name
        var scrollTo = $(this).attr('data-scrollTo');


        // animate and scroll to the sectin 
        $('body, html').animate({

            // the magic - scroll to section
            "scrollTop": $('#' + scrollTo).offset().top
        }, 1000);
        return false;

    })

    // select2 script
    //___________________________
    $(".js-select2").each(function () {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })

    // review progress bar script
    //___________________________
    const progressDone = document.querySelectorAll(".progress-done");

    progressDone.forEach((progress) => {
        progress.style.width = progress.getAttribute("data-done") + "%";
    });



















})(jQuery);