'use script';
import Swiper, {Navigation, Pagination} from 'swiper';
import Readmore from "readmore-js";
import GLightbox from 'glightbox';

Swiper.use([Navigation, Pagination]);
window.addEventListener('DOMContentLoaded', () => {
        /* BURGER-MENU */
        let headerMenu = document.querySelector('.header__nav'),
            header = document.querySelector('.header'),
            html = document.querySelector('html'),
            body = document.querySelector('body'),
            headerBurger = document.querySelector('.header__burger');

        header.addEventListener('click', e => {
            e.preventDefault();
            let target = e.target;
            if (target && target.classList.contains('js-burger')) {


                headerMenu.classList.toggle('active');
                headerBurger.classList.toggle('active');

                html.classList.toggle('lock');
                body.classList.toggle('lock');
            }
        })


        /* MODAL */
        let modalBlock = document.querySelector('.js-sidebars'),
            allModal = document.querySelectorAll('.js-sidebars > section'),
            modalCall = document.querySelector('.modal-call'),
            modalRegion = document.querySelector('.modal-region');

        document.addEventListener('click', e => {
            e.preventDefault();
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

        });

        function openCloseModal(modal) {
            html.classList.toggle('lock');
            body.classList.toggle('lock');
            modalBlock.classList.toggle('sidebar-bg');
            modal.classList.toggle('active');
        }





        /*BUTTON READMORE */
        new Readmore('.tags__content', {
            speed: 75,
            collapsedHeight: 70,
            moreLink: '<a href="#" class="tags__link">ПОКАЗАТЬ ЕЩЕ</a>',
            lessLink: '<a href="#" class="tags__link">Скрыть</a>',
        });

        /* CUSTOM READMORE */
        let materialsReadMore = document.querySelector('.js-material-readmore');

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

        /* SLIDERS */
        let swiperPartners = new Swiper('.swiper-container-partners', {
            slidesPerView: 6,
            loop: true,
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
                    console.log('worj');
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