<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!--MetaTags-->
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Wallace S. Msagusa, Aspire Creative Agency" />

    <!--SEO-->
    <meta name="description" content="St. Thomas Institute of Management & Technology, STIMAT" />
    <meta name="keywords" content="STIMAT, St. Thomas Institute of Management & Technology, Chuo cha Mtakatifu Thomas, St. Thomas" />
    <meta name="copyright" content="Exclusive property of STIMAT made by Aspire Creative" />
    
    <!--Title-->
    <title>
        <?php if (is_search(  )){
            echo 'STIMAT - Search Results';
        }
        else {
            echo bloginfo('name') .' - ';
            if (is_front_page( )) {
                bloginfo( 'description' );
            } 
            else {
                wp_title('');
            }
        }?>
    </title>

    <?php wp_head(  )?>
</head>

<body>

    <!--Header-->
    <header class="header"> <!--Used to have fixed-top class-->

    <div class="logo-overlay d-none d-sm-none d-md-block my-2">
        <a href="<?php echo home_url( ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/web-logo.png"/></a>
    </div>

        <div class="container-fluid px-lg-5 px-md-3 px-sm-1 bg-theme pt-2 pb-0">
            <div class="row pt-sm-2 pb-sm-1 pl-md-5 ml-md-5">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <p class="text-white text-md-left text-center sm-body-font">
                        <span class="text-primary"><i class="fa fa-phone"></i></span> &nbsp;
                        Simu: <!--Edit Telephone Details Here-->
                        <a class="text-primary" href="tel:+255-767-778069">+255 767 778069</a> / 
                        <a class="text-primary" href="tel:+255-622-818818">+255 622 818818</a>
                    </p>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                    <p class="text-white text-md-left text-center sm-body-font">
                        <span class="text-primary"><i class="fa fa-envelope"></i></span> &nbsp;
                        Barua pepe: <!--Edit Email Details Here-->
                        <a class="text-primary" href="mailto:chagua@stimat.ac.tz">chagua@stimat.ac.tz</a> /
                        <a class="text-primary" href="mailto:principal@stimat.ac.tz">principal@stimat.ac.tz</a>
                </p>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-6 col-sm-12 text-md-left text-center mb-2">
                    <?php get_search_form(  ); ?>
                </div>
            </div>
        </div>

        <!--Navigation Menu-->
        <nav class="navbar navbar-expand-md bg-white" id="top-menu">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a href="<?php echo home_url( ); ?>" class="navbar-brand d-sm-block d-block d-md-none ml-sm-4 ml-2"><img src="<?php bloginfo('template_url'); ?>/img/web-logo.png" class="img-responsive" /></a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu" style="color:#003552"></i>
                </button>

                <?php
                wp_nav_menu( array(
                    'menu'              => 'STIMAT',
                    'theme_location'    => 'primary',
                    'depth'             => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbarCollapse',
                    'menu_class'        => 'navbar-nav mr-auto w-100 justify-content-end',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav>
        
    </header>