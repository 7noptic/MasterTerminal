<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="google-site-verification" content="NpKCbMiu0upFXTnAfpu0eh1rS9dJQT4_QOfq8QjV5QA"/>
    <meta name="yandex-verification" content="cae7c9b98dd89a45"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="cae7c9b98dd89a45"/>
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico">
<!--    <link rel="stylesheet" type="text/css"-->
<!--          href="--><?php //echo esc_url( get_template_directory_uri() ); ?><!--/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css">
<!--    <link rel="stylesheet"-->
<!--          href="--><?php //echo esc_url( get_template_directory_uri() ); ?><!--/css/block-css/style.css?version=1">-->
<!--    <link rel="stylesheet" href="--><?php //echo esc_url( get_template_directory_uri() ); ?><!--/css/common.css?version=1">-->


    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css?version=1">
    <meta name="yandex-verification" content="99641e02a9ee332e"/>
    <meta name="yandex-verification" content="42a43e8424489a54"/>
    <meta name="yandex-verification" content="7266af2c0b8b2275"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/block-css/rs-product-view.css?version=1">

    <!-- NEW -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/vendors~main.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css">


    <style>
        .strong-rating span.star:before {
            background: #FF5500 !important;
            border-color: #FF5500 !important;
        }
        .strong-rating label:before {
            color: #FF5500 !important;
            background: #FF5500 !important;
        }
    </style>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <script>
        WebFontConfig = {
            google: {families: ['Open+Sans:300,400,600,700,800&amp;subset=cyrillic']}
        };
        (function () {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <script src="https://unpkg.com/vue-w3c-valid/dist/simple.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr-2.6.1.min.js"></script>
    <script>
        paceOptions = {
            ajax: false,
            document: false,
            eventLag: false,
            restartOnRequestAfter: false,
            restartOnPushState: false,
            elements: false
        };
    </script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/pace.min.js"></script>
	<?php wp_head(); ?>
    <!-- Yandex.Metrika counter -->

    <!-- /Yandex.Metrika counter -->
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TTL53TF');</script> <!-- End Google Tag Manager -->
    <script src="//code-ya.jivosite.com/widget/fYgze0qym4" async></script>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTL53TF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript> <!-- End Google Tag Manager (noscript) -->

<header class="wrapper header">
	<?php get_template_part( 'template-parts/rs-top-header' ); ?>
	<?php get_template_part( 'template-parts/rs-menu-form' ); ?>


    <div class="header-search__wrapper">
        <form role="search" method="get" class="searchform" id="headerSearchForm" style="" action="<?php echo home_url( '/' ) ?>">
            <input type="text" value="Полоса" name="s" id="s" style="background: rgb(255, 255, 255);">
            <input type="submit" id="searchsubmit" class="searchsubmit" value="найти">
        </form>
    </div>

</header>
<!-- main -->
<div class="main">
