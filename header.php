<!DOCTYPE HTML>
<html lang="ja-JP">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- from here is TDK -->
    <title>kt-portfolio</title>
    <meta name="description" content="">
    <!-- to here is TDK -->
    <!-- from here is OGP -->
    <meta property="og:type" content="">
    <meta property="og:description" content="">
    <meta property="og:title" content="kt-portfolio">
    <meta property="og:url" content="https://www.kt-portfolio.jp">
    <meta property="og:image" content="./src/img/ogp/ogp.jpg">
    <meta property="og:site_name" content="kt-portfolio">
    <meta name="twitter:card" content="summary">
    <!-- to here is OGP -->
    <meta name="theme-color" content="#EFEFEF">

    <!-- 検索除け -->
    <meta name="robots" content="noindex, nofollow">

    <!-- from here is favicon -->
    <!-- <link rel="shortcut icon" href="./src/img/favicon/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="icon" href="./src/img/favicon/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="apple-touch-icon" sizes="180x180" href="./src/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="./src/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./src/img/favicon/favicon-16x16.png" sizes="16x16"> -->
    <!-- to here is favicon -->
    <link rel="canonical" href="https://www.kt-portfolio.jp">
    <!-- from here is css -->
    <!-- <link rel="stylesheet" href="ress.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ress.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/loader.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- to here is css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>

    <div class="loader-bg">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <!-- /.spinner -->
    </div>
    <!-- /.loader-bg -->

    <header class="header">

        <div class="header__inner">
            <div class="header__body">
                <h1 class="header__ttl">
                    <a href="<?php echo esc_url(home_url()); ?>" class="logo">
                        KT PORTFOLIO
                    </a>
                </h1>
                <button id="openbtn" class="openbtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <!-- /.header__body -->

            <div id="overlay" class="header__overlay overlay">
                <nav class="overlayMenu__nav">
                    <ul class="overlayMenu__list">
                        <li class="overlayMenu__item">
                            <a href="<?php echo esc_url(home_url()); ?>" class="overlayMenu__link">
                                Top
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="<?php echo esc_url(home_url()); ?>#making" class="overlayMenu__link">
                                MAKING
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="<?php echo esc_url(home_url()); ?>#blog" class="overlayMenu__link">
                                BLOG
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="<?php echo esc_url(home_url()); ?>#works" class="overlayMenu__link">
                                WORKS
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="<?php echo esc_url(home_url()); ?>#about" class="overlayMenu__link">
                                ABOUT
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="<?php echo esc_url(home_url()); ?>#faq" class="overlayMenu__link">
                                FAQ
                            </a>
                        </li>
                        <li class="overlayMenu__item">
                            <a href="<?php echo esc_url(home_url()); ?>#contact" class="overlayMenu__link">
                                CONTACT
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /#overlay.overlay -->
        </div>
        <!-- /.header__inner -->

    </header>