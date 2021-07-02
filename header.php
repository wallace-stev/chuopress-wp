<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!--MetaTags-->
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Wallace S. Msagusa, Aspire Creative" />

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
    <header class="header">
        <div class="logo-overlay d-none d-sm-none d-md-block my-2">
            <a href="<?php echo home_url( ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/web-logo.png"/></a>
        </div>

        <div class="container-fluid px-lg-5 px-md-3 px-1 bg-theme">
            <div class="row text-primary d-flex justify-content-md-end justify-content-center contact-bar">
                <div class="col-auto my-1 me-lg-3 me-md-2">
                    <span class="fas fa-phone-alt"></span>&nbsp;
                    <a class="text-white" href="tel:+255-767-778069">+255 767 778069</a> | 
                    <a class="text-white" href="tel:+255-622-818818">+255 622 818818</a>
                </div>
                <div class="col-auto my-1">
                    <span class="fa fa-envelope"></span>&nbsp;
                    <a class="text-white" href="mailto:chagua@stimat.ac.tz">chagua@stimat.ac.tz</a> |
                    <a class="text-white" href="mailto:principal@stimat.ac.tz">principal@stimat.ac.tz</a>
                </div>
            </div>
        </div>

        <!--Navigation Menu-->
        <nav class="navbar navbar-expand-md bg-white" id="top-menu">
            <div class="container-fluid py-3 px-lg-4 px-md-3 px-1">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a href="<?php echo home_url( ); ?>" class="navbar-brand d-sm-block d-block d-md-none ml-sm-4 ml-2"><img src="<?php bloginfo('template_url'); ?>/img/web-logo.png" class="img-responsive" /></a>
                <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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