<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1">
        <meta name="p:domain_verify" content="5760a8d8c4193e9b6d5ec7c596e0107f"/>
        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- taken from sage - need to find out if needed -->
        <!-- <link rel="alternate" type="application/rss+xml" title="<?= get_bloginfo('name'); ?> Feed" href="<?= esc_url(get_feed_link()); ?>"> -->

        <link rel='shortcut icon' type='image/vnd.microsoft.icon' href='<?php echo get_template_directory_uri(); ?>/static/images/fav//favicon.ico'>
        <link href="<?php echo get_template_directory_uri(); ?>/static/images/fav/60x60.png" rel="apple-touch-icon" />
        <link href="<?php echo get_template_directory_uri(); ?>/static/images/fav/76x76.png" rel="apple-touch-icon" sizes="76x76" />
        <link href="<?php echo get_template_directory_uri(); ?>/static/images/fav/120x120.png" rel="apple-touch-icon" sizes="120x120" />
        <link href="<?php echo get_template_directory_uri(); ?>/static/images/fav/152x152.png" rel="apple-touch-icon" sizes="152x152" />

        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/static/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        <!-- Facebook Pixel Code -->
        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '939251349543792', {
        em: 'insert_email_variable,'
        });
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=939251349543792&ev=PageView&noscript=1"
        /></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->
    </head>
