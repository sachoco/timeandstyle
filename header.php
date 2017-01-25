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

<!-- 		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff"> -->

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

                    <li class="our-shop active">Amsterdam</li>
                    <li class="our-shop">Tokyo</li>
<?php else: ?>
                    <li class="clockBtn"><a href="/" id="clockBtn"><img src="<?php echo get_template_directory_uri(); ?>/images/clock.svg" alt=""></a></li>
<?php endif; ?>
                    <li class="fb"><a href="https://www.facebook.com/pg/timeandstyle.jp/posts/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
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
        