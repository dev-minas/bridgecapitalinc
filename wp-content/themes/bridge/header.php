<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title> bridgecapitalinc </title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/BC_Favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js" type="text/javascript"></script>

    <?php wp_head(); ?>
</head>

<body>

<div class="bg_home_t">

    <div class="div_logo">
        <a href="<?=get_option( 'siteurl' )?>">
            <img src="<?php bloginfo('template_url'); ?>/img/LogoBC.svg" alt="" width="250px">
        </a>
    </div>


    <div class="div_mob_menu">
        MENU <img src="<?php bloginfo('template_url'); ?>/img/menu.png" id="mob_img" /></a>
    </div>

    <div class="div_mmenu">
        <div class="menu_close close">
            MENU <img src="<?php bloginfo('template_url'); ?>/img/close.png" id="mob_img" /></a>
        </div>
        <a href="">About Us</a>
        <a href="/#mission" class="close">Mission Statement</a>
        <a href="/#vision" class="close">Our Vision</a>
        <a href="/#loantypes" class="close">Loan Types</a>
        <a href="/#qualification" class="close">Qualification Process</a>
        <a href="/#buyingahome" class="close">Buying a Home</a>
        <a href="/refinance">Refinancing Your Home</a>
        <a href="/team"<?=( $post->post_name == 'team' ? ' class="active"' : '')?>>The TEAM</a>
        <a href="/realtors">For Realtors</a>
        <a href="/careers">Careers</a>
        <a href="/contact">Contact Us</a>
    </div>

</div>

<div class="h_menu">