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
    </head>

