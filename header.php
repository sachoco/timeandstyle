<!doctype html>
<!--


DEVELOPED BY
 ___   _   ___ _  _  ___   ___ ___  
/ __| /_\ / __| || |/ _ \ / __/ _ \ 
\__ \/ _ \ (__| __ | (_) | (_| (_) |
|___/_/ \_\___|_||_|\___/ \___\___/ 



-->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php wp_title(''); ?></title>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<script src="https://use.fontawesome.com/17d67b11a1.js"></script>
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto:100,300,400" rel="stylesheet">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#home" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="logo">
                </a></h1>
<?php if( is_home() || is_front_page() || is_page(array( 'home', 'furniture') )): ?>

<?php endif; ?> 
                <ul>

<?php if( is_page(array( 'our-shop') )): ?>

                    <li class="our-shop shop-amsterdam active" data-slideid="0">Amsterdam</li>
                    <li class="our-shop shop-tokyo" data-slideid="1">Tokyo</li>
<?php endif; ?>
                    <li class="clockBtn"><a href="/" id="clockBtn"><img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt=""></a></li>

                    <li class="fb"><a href="https://www.facebook.com/pg/timeandstyle.jp/posts/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>

                    <li class="instagram"><a href="https://www.instagram.com/timeandstyle_amsterdam/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                </ul>
            </div><!-- .site-branding -->
            <div class="burger-nav circular-anim" tabindex="2" role="menu">
                MENU
                <div id="hamburger" class="hamburglar">
                    <div class="bar top"></div>
                    <div class="bar middle"></div>
                    <div class="bar bottom"></div>
                </div>
            </div>            
            <nav id="site-navigation" class="main-navigation" role="navigation">

            <?php wp_nav_menu(); ?>
            </nav>
        </header>
        