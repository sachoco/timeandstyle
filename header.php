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

<!-- <script type="text/javascript">
    (function() {
        var path = '//easy.myfonts.net/v2/js?sid=10140(font-family=Univers+65+Bold)&sid=211226(font-family=Univers+Pro+65+Bold)&sid=218105(font-family=Univers+Pro+45+Light)&sid=218106(font-family=Univers+Pro+55+Roman)&key=IjSizbeh5L',
            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
            trial = document.createElement('script');
        trial.type = 'text/javascript';
        trial.async = true;
        trial.src = protocol + path;
        var head = document.getElementsByTagName("head")[0];
        head.appendChild(trial);
    })();
</script> -->
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <header>
            <div class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/home/" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="logo">
                </a></h1>
<?php if( is_home() || is_front_page() || is_page(array( 'home', 'furniture') )): ?>

<!-- <div class="collapsed-button-container ">
    <div id="slick-prev" class="collapsed-button slide-nav" role="button">
        <div class="circle">
            <div class="icon">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="31.131px" height="31.644px" viewBox="0 -6.924 31.131 31.644" enable-background="new 0 -6.924 31.131 31.644"
     xml:space="preserve">
<polyline id="line-1" fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" points="23.147,-5.93 8.281,8.936 23.147,23.803 
    "/>
</svg>
            </div>
            <div class="bg circular-anim"></div>  
        </div>                         
    </div>

    <div id="slick-next" class="collapsed-button slide-nav" role="button">
        <div class="circle">
            <div class="icon">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="31.131px" height="31.644px" viewBox="0 -6.924 31.131 31.644" enable-background="new 0 -6.924 31.131 31.644"
     xml:space="preserve">
<polyline id="line-1" fill="none" stroke="#000000" stroke-width="1" stroke-miterlimit="10" points="8.281,23.803 23.147,8.937 8.281,-5.93 "/>
</svg>
            </div>
            <div class="bg circular-anim"></div>  
        </div>                         
    </div>


</div> -->
<?php endif; ?> 
                <ul>
<?php if( is_home() || is_front_page() || is_page(array( 'home', 'furniture') )): ?>

                    <li><i class="fa fa-th" aria-hidden="true"></i></li>
<?php endif; ?>
<?php if( is_page(array( 'our-shop') )): ?>

                    <li class="our-shop active">Amsterdam</li>
                    <li class="our-shop">Tokyo</li>
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
        