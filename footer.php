<?php get_template_part( 'template-parts/rs-footer' ); ?>
</div>


<!-- MODAL -->
<aside class="js-sidebars">
    <div class="modal-call">
        <div class="modal-call__wrapper">

			<?php echo do_shortcode( '[contact-form-7 id="4825" title="ЗАКАЗАТЬ ЗВОНОК в Шапке сайта"]' ); ?>

            <div class="modal-call__exit">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                          fill="black"/>
                    <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                          fill="black"/>
                    <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="modal-logistic">
        <div class="logistic-form__wrapper">

			<?php get_template_part( 'template-parts/rs-logistic-form' ); ?>

        </div>
        <div class="modal-logistic__exit">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                      fill="black"/>
                <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                      fill="black"/>
                <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
            </svg>
        </div>
    </div>

    <div class="rs-17">
        <div class="rs-modal">
            <div class="modal fade" tabindex="-1" id="video-block-full">
                <div class="modal-dialog">
                    <div class="modal-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rs-modal -->
    <!--noindex-->

    <div class="modal-call-noarea">
        <div class="modal-call-noarea__wrapper">

            <form action="post" class="form modal-form">
                <input type="text" class="input banner__input banner__input-first modal-form__input form-input"
                       placeholder="Имя">
                <input type="tel" class="input banner__input-last banner__input form-input modal-form__input"
                       placeholder="+7  (       )       -        -">

                <button type="submit" class="btn modal-form__btn modal-call-noarea__btn">заказать звонок</button>
                <div class="agreement modal-form__agreement">
                    Отправляя данную форму, я соглашаюсь с политикой обработки персональных данных
                </div>

            </form>

            <div class="modal-call-noarea__exit">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                          fill="black"/>
                    <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                          fill="black"/>
                    <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="modal-email">
        <div class="modal-email__wrapper">

            <form action="post" class="form modal-form">
                <input type="text" class="input banner__input banner__input-first modal-form__input form-input"
                       placeholder="Имя">
                <input type="email" class="input banner__input modal-form__input form-input" placeholder="Email">
                <textarea name="textarea" cols="30" rows="10"
                          class="textarea banner__textarea form-input modal-form__area"
                          placeholder="Ваш вопрос"></textarea>
                <button type="submit" class="btn modal-form__btn modal-email__btn">заказать звонок</button>
                <div class="agreement modal-form__agreement">
                    Отправляя данную форму, я соглашаюсь с политикой обработки персональных данных
                </div>

            </form>
            <div class="modal-email__exit">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                          fill="black"/>
                    <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                          fill="black"/>
                    <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="modal-email-num">
        <div class="modal-email-num__wrapper">

            <form action="post" class="form modal-form">
                <input type="text" class="input banner__input banner__input-first modal-form__input form-input"
                       placeholder="Имя">
                <input type="email" class="input banner__input modal-form__input form-input" placeholder="Email">
                <input type="tel" class="input banner__input form-input modal-form__input"
                       placeholder="+7  (       )       -        -">
                <textarea name="textarea" cols="30" rows="10"
                          class="textarea banner__textarea form-input modal-form__area"
                          placeholder="Ваш вопрос"></textarea>
                <button type="submit" class="btn modal-form__btn modal-email-num__btn">заказать звонок</button>
                <div class="agreement modal-form__agreement">
                    Отправляя данную форму, я соглашаюсь с политикой обработки персональных данных
                </div>

            </form>
            <div class="modal-email-num__exit">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                          fill="black"/>
                    <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                          fill="black"/>
                    <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>


    <div class="modal-serviceReviews">
        <div class="modal-serviceReviews__wrapper">
            <!--Отзывы-->

			<?php $currentService = $_SERVER['REQUEST_URI']; ?>

			<?php if ( $currentService == '/uslugi/peretarka/' ) : ?>

				<?php echo do_shortcode( '[testimonial_view id="7"]' ); ?>

			<?php elseif ( $currentService == '/uslugi/arenda-kholodnogo-sklada/' ) : ?>

				<?php echo do_shortcode( '[testimonial_view id="4"]' ); ?>

			<?php elseif ( $currentService == '/uslugi/dostavka-gruza/' ) : ?>

				<?php echo do_shortcode( '[testimonial_view id="5"]' ); ?>

			<?php elseif ( $currentService == '/uslugi/kross-doking/' ) : ?>

				<?php echo do_shortcode( '[testimonial_view id="3"]' ); ?>

			<?php elseif ( $currentService == '/uslugi/perevalka-gruza-v-sankt-peterburge/' ) : ?>

				<?php echo do_shortcode( '[testimonial_view id="6"]' ); ?>

			<?php elseif ( $currentService == '/uslugi/skladskoe-khranenie/' ) : ?>

				<?php echo do_shortcode( '[testimonial_view id="8"]' ); ?>

			<?php elseif ( $currentService == '/uslugi/uslugi-pogruzki-i-razgruzki-vagonov/' ) : ?>

				<?php echo do_shortcode( '[testimonial_view id="9"]' ); ?>

			<?php endif ?>

            <!--Отзывы-->
        </div>
        <div class="modal-serviceReviews__exit">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                      fill="black"/>
                <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                      fill="black"/>
                <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
            </svg>
        </div>
    </div>

    <div class="modal-region">
        <div class="modal-region__wrapper">
            <div class="modal-region__row">
                <p class="modal-region__city">
                    <span class="js-select-city">Санкт-Петербург</span>?
                </p>
                <a href="#" class="btn modal-region__btn js-region-close">
                    да
                </a>
            </div>
            <div class="modal-region__row d-none">
                <form action="post" method="post" class="form-search modal-region__form">
                    <input type="search" class="form-search__search modal-region__search" placeholder="Найди здесь">
                </form>
                <a href="#" class="btn modal-region__btn">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="9.5" cy="9" r="8" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"/>
                        <path d="M19.5 19L15.15 14.65" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                </a>
            </div>

			<?php if ( have_rows( 'spisok_gorodov', 'option' ) ): ?>

                <ul class="modal-region__list">

					<?php while ( have_rows( 'spisok_gorodov', 'option' ) ): the_row();

						// переменные
						$gorod = get_sub_field( 'gorod' );

						?>

                        <li class="slide">
                            <a href="#" class="modal-region__link"><?php echo $gorod; ?></a>
                        </li>

					<?php endwhile; ?>

                </ul>

			<?php endif; ?>

            <div class="modal-region__exit">

                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                          fill="black"/>
                    <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                          fill="black"/>
                    <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
                </svg>
            </div>
        </div>
    </div>


    <div class="modal-checkoutProduct">
        <div class="modal-checkoutProduct__wrapper">

			<?php echo do_shortcode( '[contact-form-7 id="4847" title="Оформление заказа"]' ) ?>

        </div>
        <div class="modal-checkoutProduct__exit">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                      fill="black"/>
                <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                      fill="black"/>
                <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
            </svg>
        </div>
    </div>


    <div class="modal-refinePrice">
        <div class="modal-refinePrice__wrapper">

			<?php echo do_shortcode( '[contact-form-7 id="4849" title="УТОЧНИТЬ ЦЕНУ"]' ) ?>

        </div>
        <div class="modal-refinePrice__exit">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.9336 6.00793L8.93359 10.0099L12.9336 14.0119L14.0683 12.8766L11.2031 10.0099L14.0683 7.14328L12.9336 6.00793Z"
                      fill="black"/>
                <path d="M7.13277 6.00793L11.1328 10.0099L7.13277 14.0119L5.99807 12.8766L8.86333 10.0099L5.99807 7.14328L7.13277 6.00793Z"
                      fill="black"/>
                <rect x="1" y="1.005" width="18" height="18.0099" rx="3" stroke="black" stroke-width="2"/>
            </svg>
        </div>
    </div>
</aside>
<!-- !MODAL -->


<!-- /.rs-modal -->


<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.min.css">
<link rel="stylesheet"
      href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.mCustomScrollbar.min.css">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mousewheel.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.appear.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.counterup.min.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.min.css">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/select2.min.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/nekoAnim.css">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/select2.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.validate.min.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick.css">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick.min.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fancybox.min.css">
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.zoom.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.touchspin.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/home.js?version=1"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/common.js?version=1"></script>


<!-- NEW -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendors~main.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>

<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        }
    });
</script>

<script>
    var reCaptchaCounter = 1

    $(function () {
        $(
            '#contactsFormBtn,' +
            '#footerContactsBtn,' +
            '#footerContactsBtn2,' +
            '#formMainBtn,' +
            '#subscribeFormBtn,' +
            '#contactFormMainBanner,' +
            '#contactFormMainBanner2,' +
            '#contactFormMainBanner3,' +
            '#contactFormMainBanner4,' +
            '.buyProductOneClick,' +
            '#contactFormBtn,' +
            '#formTopBlockBtn,' +
            '#fastOrdeer button[type="submit"],' +
            '#orderFormBtn' +
            ''
        ).each(function () {
            //$(this).addClass('g-recaptcha')
            //if(!$(this).attr('id')) $(this).attr('id','captcha'+reCaptchaCounter)
            //reCaptchaCounter++
            $(this).on('click', function () {
                $(this).trigger('gvalidate');
                return false;
            })
        })
    })

    function onloadCallback() {
        $(".g-recaptcha").each(function () {
            var object = $(this);
            grecaptcha.render(object.attr("id"), {
                "sitekey": "6LdZP1oUAAAAAFLC-DJ75oaHVKnMNPeKFYrFjWZt",
                "callback": function (token) {
                    console.log('callback')
                    object.parents('form').find(".g-recaptcha-response").val(token);
                    object.trigger('gvalidate')
                    object.on('click', function () {
                        $(this).trigger('gvalidate')
                    })
                }
            });
        });

        $('.search-form .g-recaptcha').each(function () {
            var e = $(this)
            e.prev().insertAfter(e)
        })

        $('.agreement-check').change()
    }
</script>


<script>
    /* Узнать стоимость */
    $(document.body).each(function () {
        $('.product-custom-ask').on('click', function () {
            let title = $(this).parents('.catalog__item').find('.catalog__name').text();
            let productTitle = $('.productTitle');

            $(productTitle).text(title);
            $('input[name="productTitle"]').val(title);

            console.log(title);
        })
    });


    /* Заказать */
    $(document.body).each(function () {

        // $("input[type='radio'][name='type-q']").prop('disabled', false).on('mouseover', function (){
        //     $(this).prop("disabled", false);
        // });

        $('.catalog__item .product-custom-buy').on('click', function () {
            let title = $(this).parents('.catalog__item').find('.catalog__name').text(),
                productTitle = $('.productTitle'),
                qtyCustom = $('.qty-custom').val(),
                productPrice = $('.productPrice').text(),
                typeQ = $("input[type='radio'][name='type-q']:checked").val(),
                totalPrice = qtyCustom * productPrice;


            $(productTitle).text(title);
            $('.product-card__quantity .quantity').text(qtyCustom);
            $('.product-card__quantity .checkedType').text(typeQ);
            $('.totalPrice').text(totalPrice);


            $('input[name="productTitle"]').val(title);
            $('input[name="productQuantity"]').val(qtyCustom + typeQ);
            $('input[name="productTotalPrice"]').val(totalPrice);
        })

        $('.product  .product-custom-buy').on('click', function () {
            let
                title = $('.card__title').text(),
                productTitle = $('.productTitle'),
                qtyCustom = '1',
                productPrice = $('.price').text();
                // typeQ = $("input[type='radio'][name='type-q']:checked").val(),
                // totalPrice = qtyCustom * productPrice;

            $('.productTitle').text(title);
            $('.product-card__quantity .quantity').text('1');
            // $('.product-card__quantity .checkedType').text(typeQ);
            $('.totalPrice').text(productPrice);

            $('input[name="productTitle"]').val(title);
            // $('input[name="productQuantity"]').val(qtyCustom + typeQ);
            $('input[name="productQuantity"]').val(qtyCustom);
            $('input[name="productTotalPrice"]').val(productPrice);
        })
    });


    /* Узнать стоимость */
    $(document.body).each(function () {
        $('.catalog__item .product-custom-ask').on('click', function () {
            let title = $(this).parents('.catalog__item').find('.catalog__name').text();
            let productTitle = $('.productTitle');

            $(productTitle).text(title);
            $('input[name="productTitle"]').val(title);

            console.log(title);
        })


        $('.product .product-custom-ask').on('click', function () {
            let title = $('.card__title').text();

            $('.productTitle').text(title);
            $('input[name="productTitle"]').val(title);

            console.log(title);
        })
    });


    /* Калькулятор */
    $(document.body).each(function () {
        $('.calc__getResult').on('click', function () {
            let calcProducts = $('#typeSelect').val(),
                calcSort = $('#qualitySelect').val(),
                calcSquare = $('#square').val(),
                calcDimension = $('select[name="dimension"]').val(),
                calcAmount = $('#quantity').text(),
                volume = $('#volume').text(),
                thin = $('#thin').val(),
                width = $('#width').val(),
                length = $('#length').val(),
                qualitySelectPrice = $('#qualitySelect').find(':selected').attr('data-price'),

                calcPrice = volume * qualitySelectPrice,

                calcSize = $('#calcSize').text();

            // calcPrice = volume * calcSort


            console.log('typeSelect :' + calcProducts);
            console.log('calcSort :' + calcSort);
            console.log('calcSquare :' + calcSquare);
            console.log('calcDimension :' + calcDimension);
            console.log('calcAmount :' + calcAmount);
            console.log('calcSize :' + calcSize);
            console.log('calcPrice :' + calcPrice);

            console.log(volume);

            console.log('thin :' + thin);
            console.log('width :' + width);
            console.log('length :' + length);


            console.log(calcDimension);

            if (calcDimension === 'Введите площадь в м²') {
                calcDimension = 'м²';
            } else {
                calcDimension = 'шт.';
            }


            $('input[name="calcProducts"]').val(calcProducts);
            $('input[name="calcSorts"]').val(calcSort);
            $('input[name="calcSquare"]').val(calcSquare + 'м²');

            $('input[name="calcDimensions"]').val(calcSize);
            $('input[name="calcAmount"]').val(calcAmount);
            $('input[name="calcSize"]').val(volume);
            $('input[name="calcPrice"]').val(calcPrice);


            $('#calcPrice').text(calcPrice);
        })
    });


    // Make all the columns of the same height
    (function () {
        function setEqualHeight(columns) {
            var tallestcolumn = 0;

            columns.each(function () {
                let currentHeight = jQuery(this).height();
                if (currentHeight > tallestcolumn) {
                    tallestcolumn = currentHeight;
                }
            });

            columns.height(tallestcolumn);
        }

        setEqualHeight(jQuery(".more__slider .more__name"));

    })();

</script>


<script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit'></script>
<?php wp_footer(); ?>

</body>
</html>
