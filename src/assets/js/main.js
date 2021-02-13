'use script';
import $ from 'jquery';
import Swiper, {Navigation, Pagination} from 'swiper';
import Readmore from "readmore-js";
import GLightbox from 'glightbox';

Swiper.use([Navigation, Pagination]);
window.addEventListener('DOMContentLoaded', () => {
        const lightbox = GLightbox({});
        $('.select').each(function () {
            // Variables
            var $this = $(this),
                selectOption = $this.find('option'),
                selectOptionLength = selectOption.length,
                selectedOption = selectOption.filter(':selected'),
                dur = 500;

            $this.hide();
            // Wrap all in select box
            $this.wrap('<div class="select"></div>');
            // Style box
            $('<div>', {
                class: 'select__gap js-required',
                text: 'Не выбрано'
            }).insertAfter($this);

            var selectGap = $this.next('.select__gap.js-required'),
                caret = selectGap.find('.caret');
            // Add ul list
            $('<ul>', {
                class: 'select__list'
            }).insertAfter(selectGap);

            var selectList = selectGap.next('.select__list');
            // Add li - option items
            for (var i = 0; i < selectOptionLength; i++) {
                $('<li>', {
                    class: 'select__item',
                    html: $('<span>', {
                        text: selectOption.eq(i).text()
                    })
                })
                    .attr('data-value', selectOption.eq(i).val())
                    .appendTo(selectList);
            }
            // Find all items
            var selectItem = selectList.find('li');

            selectList.slideUp(0);
            selectGap.on('click', function () {
                if (!$(this).hasClass('on')) {
                    $(this).addClass('on');
                    selectList.slideDown(dur);

                    selectItem.on('click', function () {
                        var chooseItem = $(this).data('value');

                        $('select').val(chooseItem).attr('selected', 'selected');
                        selectGap.text($(this).find('span').text());

                        selectList.slideUp(dur);
                        selectGap.removeClass('on');
                    });

                } else {
                    $(this).removeClass('on');
                    selectList.slideUp(dur);
                }
            });

        });
        $('[type="tel"]').mask("+7 (999) 999-99-99");
        /* BURGER-MENU */
        let headerMenu = document.querySelector('.header__nav'),
            header = document.querySelector('.header'),
            html = document.querySelector('html'),
            body = document.querySelector('body'),
            headerBurger = document.querySelector('.header__burger');

        header.addEventListener('click', e => {

            let target = e.target;
            if (target && target.classList.contains('js-burger')) {
                e.preventDefault();

                headerMenu.classList.toggle('active');
                headerBurger.classList.toggle('active');

                html.classList.toggle('lock');
                body.classList.toggle('lock');
            }
        })

        /* RATING */
        let ratingParent = document.querySelector('.js-rating'),
            ratingInput = document.querySelector('#js-rating'),
            ratingStar = document.querySelectorAll('.js-rating > li');

        if (ratingParent) {
            ratingParent.addEventListener('click', (event) => {

                const target = event.target;
                if (target && target.tagName == 'LI') {
                    event.preventDefault();
                    ratingStar.forEach((item, i) => {
                        item.classList.remove('active');
                    });
                    for (let i = 0; i => ratingStar.length; i++) {
                        if (ratingStar[i] == target) {
                            ratingStar[i].classList.add('active');
                            ratingInput.value = ++i;
                            return
                        } else {
                            ratingStar[i].classList.add('active');
                        }
                    }
                }

            });
        }
        /* MODAL */
        let modalBlock = document.querySelector('.js-sidebars'),
            allModal = document.querySelectorAll('.js-sidebars > section'),
            modalCall = document.querySelector('.modal-call'),
            modalRegion = document.querySelector('.modal-region');

        document.addEventListener('click', e => {

            let target = e.target;

            if (target && (target.classList.contains('js-call') || target.classList.contains('modal-call__exit'))) {
                openCloseModal(modalCall);
            }
            if (target && (target.classList.contains('js-region') || target.classList.contains('modal-region__exit'))) {
                openCloseModal(modalRegion);
            }


            /* ЗАКРЫТИЕ ПО КЛИКУ НА САЙДБАР */
            if (target && target.classList.contains('sidebar-bg')) {
                html.classList.toggle('lock');
                body.classList.toggle('lock');
                modalBlock.classList.toggle('sidebar-bg');
                allModal.forEach(item => {
                    if (item.classList.toggle('active')) {
                        item.classList.remove('active');
                    }
                });
            }
            /* search */
            let searchForm = document.querySelector('.header-search__wrapper');
            if (target && (target.classList.contains('js-search'))) {
                searchForm.classList.toggle('active');
            }

        });

        function openCloseModal(modal) {
            html.classList.toggle('lock');
            body.classList.toggle('lock');
            modalBlock.classList.toggle('sidebar-bg');
            modal.classList.toggle('active');
        }


        /*BUTTON READMORE */
        new Readmore('.catalog-type', {
            speed: 75,
            collapsedHeight: 400,
            moreLink: '<a href="#" class="catalog-type__more">Показать еще</a>',
            lessLink: '<a href="#" class="catalog-type__more top">Скрыть</a>',
        });
        new Readmore('.reviews__more', {
            speed: 75,
            collapsedHeight: 500,
            moreLink: '<a href="#" class="tags__link reviews__link">ПОКАЗАТЬ ЕЩЕ</a>',
            lessLink: '<a href="#" class="tags__link reviews__link">Скрыть</a>',
        });
        new Readmore('.card__readmore', {
            speed: 75,
            collapsedHeight: 225,
            moreLink: '<a href="#" class="catalog-type__more card__more">Показать еще</a>',
            lessLink: '<a href="#" class="catalog-type__more card__more top">Скрыть</a>',
        });

        /* CUSTOM READMORE */
        let materialsReadMore = document.querySelector('.js-material-readmore'),
            tagsReadMore = document.querySelector('.js-tags-link');


        if (materialsReadMore) {
            materialsReadMore.addEventListener('click', (event) => {
                event.preventDefault();
                let materialsItem = document.querySelectorAll('.js-material-more');
                materialsItem.forEach(item => {
                    if (item.classList.toggle('active')) {
                        item.classList.add('active');
                        materialsReadMore.innerHTML = 'СКРЫТЬ';
                    } else {
                        item.classList.remove('active');
                        materialsReadMore.innerHTML = 'ПОКАЗАТЬ ЕЩЕ';
                    }
                })
            });
        }

        if (tagsReadMore) {
            tagsReadMore.addEventListener('click', (event) => {
                event.preventDefault();
                let tagsItem = document.querySelectorAll('.js-tags-more');
                tagsItem.forEach(item => {
                    if (item.classList.toggle('active')) {
                        item.classList.add('active');
                        tagsReadMore.innerHTML = 'СКРЫТЬ';
                    } else {
                        item.classList.remove('active');
                        tagsReadMore.innerHTML = 'ПОКАЗАТЬ ЕЩЕ';
                    }
                })
            });
        }


        /* SLIDERS */
        let swiperPartners = new Swiper('.swiper-container-partners', {
            slidesPerView: 6,
            spaceBetween: 40,
            //Инициализация в табах
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: '.partners-next',
                prevEl: '.partners-prev',
            },
            // Responsive breakpoints
            breakpoints: {

                // when window width is <= 320px
                0: {
                    slidesPerView: 1,
                },
                575: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
                1080: {
                    slidesPerView: 5,
                },
                1280: {
                    slidesPerView: 6,
                    spaceBetween: 40
                },


            }

        });
        let swiperMore = new Swiper('.swiper-container-more', {
            slidesPerView: 5,
            spaceBetween: 40,
            //Инициализация в табах
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: '.more-next',
                prevEl: '.more-prev',
            },
            // Responsive breakpoints
            breakpoints: {

                // when window width is <= 320px
                0: {
                    slidesPerView: 1,
                },
                575: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
                1080: {
                    slidesPerView: 4.5,
                },



            }

        });
        let swiperBanner = new Swiper('.swiper-container-banner', {
            slidesPerView: 1,
            spaceBetween: 0,
            //Инициализация в табах
            observer: true,
            observeParents: true,
            navigation: {
                nextEl: '.banner-next',
                prevEl: '.banner-prev',
            },
            // Responsive breakpoints
            breakpoints: {





            }

        });
        
        let swiperCard = new Swiper('.swiper-container-card', {
            direction: 'vertical',
            slidesPerView: 4,
            spaceBetween: 20,
            //Инициализация в табах
            navigation: {
                nextEl: '.card__next',
                prevEl: '.card__prev',
            },
            // Responsive breakpoints

            0: {

                slidesPerView: 1,
            },
            575: {
                direction: 'vertical',

                slidesPerView: 2,
            },
            767: {
                slidesPerView: 3,
            },

        });

        let galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            controller: {
                inverse: true,
              },
        });
        
        let galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            thumbs: {
              swiper: galleryThumbs,
              slideThumbActiveClass: 'swiper-slide-thumb-active',
            },
            controller: {
                inverse: true,
              },
        });
        /* CATALOG MEDIA LIST */
        const catalogParent = document.querySelector('.catalog__sidebar');

        if (catalogParent) {
            let catalogLink = document.querySelectorAll('.catalog__subtitle'),
                catalogList = document.querySelectorAll('.js-catalog-block');

            catalogParent.addEventListener('click', (event) => {
                const target = event.target;
                if (target && target.classList.contains('catalog__subtitle')) {
                    event.preventDefault();
                    catalogLink.forEach((item, i) => {
                        if (item == target) {
                            target.classList.toggle('active');
                            catalogList[i].classList.toggle('active');
                        }
                    });
                }

            }, {passive: false});
        }
        /* CATALOG MEDIA LIST */
        const jobParent = document.querySelector('.job');

        if (jobParent) {
            let jobLink = document.querySelectorAll('.job__link'),
                jobList = document.querySelectorAll('.job__descr');

            jobParent.addEventListener('click', (event) => {
                const target = event.target;
                if (target && target.classList.contains('job__link')) {
                    event.preventDefault();
                    jobLink.forEach((item, i) => {
                        if (item == target) {
                            target.classList.toggle('active');
                            jobList[i].classList.toggle('active');
                        }
                    });
                }

            }, {passive: false});
        }

        /* СПИСКИ В ФУТЕРЕ */
        const footerMenuParent = document.querySelector('.footer'),
            footerLink = document.querySelectorAll('.js-footer-title'),
            footerList = document.querySelectorAll('.footer__menu');
        if (footerMenuParent) {
            footerMenuParent.addEventListener('click', (event) => {
                const target = event.target;
                if (target && target.classList.contains('js-footer-title')) {
                    event.preventDefault();
                    footerLink.forEach((item, i) => {
                        if (item == target) {
                            target.classList.toggle('active');
                            footerList[i].classList.toggle('active');
                        }
                    });
                }

            }, {passive: false});
        }

        /* АНИМАЦИЯ ЧИСЕЛ ПРИ СКРОЛЛЕ */
        let numbers = document.querySelector('.numbers');

        if (numbers) {
            let number = document.querySelectorAll('.numbers__num > span'),
                numberTop = numbers.getBoundingClientRect().top;
            window.addEventListener('scroll', function onScroll() {

                if (window.pageYOffset > numberTop - window.innerHeight / 2) {
                    this.removeEventListener('scroll', onScroll);
                    let interval = setInterval(function () {
                        number[0].innerHTML = +number[0].innerHTML + 1;
                        if (+number[0].innerHTML == +number[0].dataset.max) {
                            clearInterval(interval);
                        }
                    }, 20);
                    let interval1 = setInterval(function () {
                        number[1].innerHTML = +number[1].innerHTML + 10;
                        if (+number[1].innerHTML == +number[1].dataset.max) {
                            clearInterval(interval1);
                        }
                    }, 1);
                    let interval2 = setInterval(function () {
                        number[2].innerHTML = +number[2].innerHTML + 20;
                        if (+number[2].innerHTML == +number[2].dataset.max) {
                            clearInterval(interval2);
                        }
                    }, 0.1);
                    let interval3 = setInterval(function () {
                        number[3].innerHTML = +number[3].innerHTML + 10;
                        if (+number[3].innerHTML == +number[3].dataset.max) {
                            clearInterval(interval3);
                        }
                    }, 1);
                }
            }), {passive: true};

        }

        /* FIX TEXT SLIDER */
        let disable_triple_click = true,
            down = new Date().getTime(),
            old_down = down;
        document.querySelector('html').addEventListener('mousedown', (e) => {
            let time = new Date().getTime();

            if ((time - down) < 500 &&
                (disable_triple_click || (down - old_down) > 500)) {
                old_down = down;
                down = time;


                return false;
            }

            old_down = down;
            down = time;
        }, {passive: true})

    },
    
    {
        passive: true
    }
)
;
$(document).ready(function() {
    let galleryThumbs = new Swiper('.swiper-container.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        controller: {
          },
    });
    
    let galleryTop = new Swiper('.swiper-container.gallery-top', {
        spaceBetween: 10,
        thumbs: {
          swiper: galleryThumbs,
          slideThumbActiveClass: 'swiper-slide-thumb-active',
        },
        
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
    });