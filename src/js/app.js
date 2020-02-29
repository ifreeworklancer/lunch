import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    let menu = $('.header-menu');
    let burgerMenu = $('.burger-menu');
    $(burgerMenu).click(function () {
        $(this).toggleClass('active');
        menu.toggleClass('active');
    });

    $('.header-menu-mask').click(function () {
        burgerMenu.removeClass('active');
        menu.removeClass('active');
    });

    $(window).on('scroll', function () {
        $(this).scrollTop() > 0 ? $('#app-header').addClass('is-scroll') : $('#app-header').removeClass('is-scroll');
        $(this).scrollTop() > 0 ? $('.basket-modal').addClass('is-scroll') : $('.basket-modal').removeClass('is-scroll');
    });

    /**
     * Anchor
     */
    $(".anchor-link").on("click", function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        if (id.length > 1) {
            let top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
        burgerMenu.removeClass('active');
        menu.removeClass('active');
    });

    /**
     * Form-label
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        $(this).val() !== "" ? $(this).parents('.form-group').addClass('in-focus') : $(this).parents('.form-group').removeClass('in-focus');
    });

    /**
     * Question item
     */
    $('.question-item-input').on('click', function () {
        $(this).toggleClass('active');
        $(this).siblings('.question-item-body').slideToggle();
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Basket modal
     */
    let basketModal = $('.basket-modal'),
        headerBasket = $('.header-basket'),
        basketModalWrapper = $('.basket-modal-wrapper');
    $(headerBasket).on('click', function () {
        basketModal.addClass('active');
    });

    $(document).on('click', function (e) {
        if ((!headerBasket.is(e.target) && headerBasket.has(e.target).length === 0) && (!basketModalWrapper.is(e.target) && basketModalWrapper.has(e.target).length === 0)) {
            basketModal.removeClass('active');
        }
    });

    /**
     * Modal
     */
    let contactModal = $('.custom-modal--contact'),
        closeModal = $('.close-modal'),
        modalMask = $('.modal-mask');

    $('.open-contact').on('click', function (e) {
        e.preventDefault();
        $(contactModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(contactModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(contactModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    /**
     * Youtube video
     */
    $('[data-youtube]').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('youtube'),
            padding = $(window).innerWidth() > 768 ? 120 : 30,
            ratio = 9 / 16,
            width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        let container = $('.outer iframe');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
            $(contactModal).removeClass('active');
            $(modalMask).removeClass('active');
        }
    });

    /**
     * Sliders
     */
    $(document).ready(function () {
        if ($('.menu-slider').length) {

            const flkty1 = new Flickity('.menu-slider--1', {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
                cellSelector: '.menu-slider-item',
                on: {
                    change: function (index) {
                        $('.menu-nav-list--1 li').removeClass('active');
                        $($('.menu-nav-list--1 li')[index]).addClass('active');
                    }
                }
            });

            $('.menu-slider--1 .slider-arrow--menu .slider-arrow-item--prev').on('click', function () {
                flkty1.previous(false, false);
            });

            $('.menu-slider--1 .slider-arrow--menu .slider-arrow-item--next').on('click', function () {
                flkty1.next(false, false);
            });

            $('.menu-nav-list--1').on('click', 'li', function () {
                let index = $(this).index();
                $('.menu-nav-list--1 li').removeClass('active');
                $(this).addClass('active');
                flkty1.select(index, true, false);
            });

            let day = new Date().getDay() - 1;

            if (day !== -1) {
                $($('.menu-nav-list--1 li')[day]).addClass('active');
                flkty1.select(day, true, false);
            } else {
                $($('.menu-nav-list--1 li')[6]).addClass('active');
                flkty1.select(6, true, false);
            }

            const flkty2 = new Flickity('.menu-slider--2', {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
                cellSelector: '.menu-slider-item',
                on: {
                    change: function (index) {
                        $('.menu-nav-list--2 li').removeClass('active');
                        $($('.menu-nav-list--2 li')[index]).addClass('active');
                    }
                }
            });

            $('.menu-slider--2 .slider-arrow--menu .slider-arrow-item--prev').on('click', function () {
                flkty2.previous(false, false);
            });

            $('.menu-slider--2 .slider-arrow--menu .slider-arrow-item--next').on('click', function () {
                flkty2.next(false, false);
            });

            $('.menu-nav-list--2').on('click', 'li', function () {
                let index = $(this).index();
                $('.menu-nav-list--2 li').removeClass('active');
                $(this).addClass('active');
                flkty2.select(index, true, false);
            });

            /**
             * Tabs
             */
            $('.custom-tabs-body').each((index, elem) => {
                $(elem).css('height', `${$(elem).find('.custom-tabs-body-item.active').outerHeight()}px`);
            });
            $('.custom-tabs-nav').on('click', 'li:not(.active)', function () {
                $(this)
                    .addClass('active').siblings().removeClass('active')
                    .closest('section').find('.custom-tabs-body').find('.custom-tabs-body-item').removeClass('active').eq($(this).index()).addClass('active');
                $(this).closest('section').find('.custom-tabs-body').css('height', `${$(this).closest('section').find('.custom-tabs-body-item.active').outerHeight()}px`);
            });

            const flkty3 = new Flickity('.extra-slider', {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
            });

            $('.slider-arrow--extra .slider-arrow-item--prev').on('click', function () {
                flkty3.previous(false, false);
            });

            $('.slider-arrow--extra .slider-arrow-item--next').on('click', function () {
                flkty3.next(false, false);
            });

            const flkty4 = new Flickity('.reviews-slider', {
                prevNextButtons: false,
                pageDots: true,
                contain: true,
                draggable: true,
                wrapAround: true,
                cellAlign: 'center',
            });

            $('.slider-arrow--reviews .slider-arrow-item--prev').on('click', function () {
                flkty4.previous(false, false);
            });

            $('.slider-arrow--reviews .slider-arrow-item--next').on('click', function () {
                flkty4.next(false, false);
            });
        }
    });


    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.intro-logo', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.program-card', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 80
    });
    ScrollReveal().reveal('#extra .section-title', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.extra-slider', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('#advantages .section-title', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.advantages-image', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.advantages-item', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.bonus-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.bonus-image', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.question-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 80,
    });
    ScrollReveal().reveal('.offer-item', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
})(jQuery);

document.addEventListener('DOMContentLoaded', function () {
    let inputs = document.getElementsByClassName('quantity');

    function incInputNumber(input, step) {
        let val = +input.value;
        if (isNaN(val)) val = 1;
        val += step;
        input.value = val > 1 ? val < 99 ? val : 99 : 1;
    }

    Array.prototype.forEach.call(inputs, function (el) {
        let input = el.getElementsByTagName('input')[0];

        el.getElementsByClassName('quantity-up')[0].addEventListener('click', function () {
            incInputNumber(input, 1)
        });
        el.getElementsByClassName('quantity-down')[0].addEventListener('click', function () {
            incInputNumber(input, -1)
        })
    })
});