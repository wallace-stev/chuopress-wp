<?php get_header( ); ?>

<!--Hero Header & Forms Start-->
<div class="container-fluid hero" id="hero">
    <div class="row">
        <!--Headings-->
        <div class="hero-text">
            <h1 class="big-text py-1 text-center mb-md-5 mb-sm-3 mb-1">St.Thomas Institute of Management and Technology</h1>			
        </div>
        
        <!--Forms Buttons-->
        <div class="container-fluid download-pop">
            <h3 class="text-white text-left ml-2 ml-md-3 application-form-heading mb-3 text-md-left text-center">Jiunge Nasi Sasa</h3>
            <div class="bg-trans gold-lined py-1 px-2 mb-md-0 mb-1 mx-1 mx-md-0">
                <form action="" method="POST" class=" px-2 form-row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button type="submit"  id="app-form" class="form-group apply-btn py-3 mt-2 mb-2">
                            Online Application
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button type="submit"  id="app-form" class="form-group dwld-btn py-3 mt-2 mb-2">
                            <span><i class="fa fa-download mx-2"></i></span>Fomu ya Maombi
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button type="submit"  id="conf-form" class="form-group dwld-btn py-3 mt-2 mb-2">
                            <span><i class="fa fa-download mx-2"></i>Kuthibitisha Kujiunga</span>
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button type="submit"  id="join-form" class="form-group dwld-btn py-3 mt-2 mb-2">
                            <span><i class="fa fa-download mx-2"></i>Maelekezo ya Kujiunga</span>
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button type="submit"  id="scho-form" class="form-group dwld-btn py-3 mt-2 mb-2">
                            <span><i class="fa fa-download mx-2"></i>Maombi ya Skolashipu</span>
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button type="submit"  id="med-form" class="form-group dwld-btn py-3 mt-2 mb-2">
                            <span><i class="fa fa-download mx-2"></i>Fomu ya Kupima Afya</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
<!--Hero Header & Forms End-->

<!-- Academic Departments Start-->
<section class="service-area bg-gray">
    <div class="container-fluid depts">
        <div class="service-all bg-white mx-2 mx-md-0">
            <div class="row dept-row">
                <div class="col-lg-4 col-md-6 col-sm-6 my-xl-3 my-2">
                    <a href="#">
                        <div class="dept-text px-1">
                            <img src="<?php bloginfo('template_url'); ?>/img/agriculture.jpg"/>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 my-xl-3 my-2">
                    <a href="#">
                        <div class="dept-text px-1">
                            <img src="<?php bloginfo('template_url'); ?>/img/community.jpg"/>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 my-xl-3 my-2">
                    <a href="#">
                        <div class="dept-text px-1">
                            <img src="<?php bloginfo('template_url'); ?>/img/social.jpg"/>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 my-xl-3 my-2">
                    <a href="#">
                        <div class="dept-text px-1">
                            <img src="<?php bloginfo('template_url'); ?>/img/ict.jpg"/>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 my-xl-3 my-2">
                    <a href="#">
                        <div class="dept-text px-1">
                            <img src="<?php bloginfo('template_url'); ?>/img/records.jpg"/>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 my-xl-3 my-2">
                    <a href="#">
                        <div class="dept-text px-1">
                            <img src="<?php bloginfo('template_url'); ?>/img/business.jpg"/>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Academic Departments End-->

<!-- News Reel Starts -->
<section class="container-fluid pt-4 mt-2 px-lg-5">
    <h1 class="mt-2 mb-3 news-section-title">Habari na Matukio</h1>
    <div class="row">
        <?php 
        $args = array(
            'post_type' =>'post',
            'posts_per_page' =>'3'   
        );
        // The Query
        $the_query = new WP_Query( $args );

        if (have_posts(  )) : ?>
        <?php while($the_query->have_posts()) : $the_query->the_post(  ); ?>
            <div class="col-xl-3 col-md-4 col-12">
                <div class="row my-2">
                    <div class="col-md-12 col-sm-3 col-4 pl-sm-3 pr-sm-3 pr-0 pl-2">
                        <a href="<?php the_permalink(  ); ?>">
                        <?php if(has_post_thumbnail( )): ?>
                        <div class="post-thumb">
                            <?php the_post_thumbnail( ); ?>
                        </div>
                        <?php endif; ?>
                        </a></div>
                    <div class="col-md-12 col-sm-9 col-8">
                        <a href="<?php the_permalink(  ); ?>">
                            <h2 class="post-title px-md-1 px-0 mt-md-2 mb-md-1 "><?php echo get_the_title() ; ?></h2>
                        </a>
                        <p class="post-date my-2 px-md-1 px-0 text-gray">
                            <i class="text-red fa fa-calendar"></i>
                            &nbsp;<?php echo get_the_time('F j, Y'); ?>
                        </p>
                        <p class="px-1 mt-2 mb-2 post-intro d-none d-sm-block"><?php echo get_the_excerpt(  ); ?></p>
                        <a href="<?php the_permalink(  ); ?>">
                            <p class="px-1 post-link d-none d-sm-block">Read more <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>
                    <div class="col-12 px-1 d-sm-none">
                        <p class="px-1 my-1 post-intro"><?php echo get_the_excerpt(  ); ?></p>
                        <a href="<?php the_permalink(  ); ?>">
                            <p class="px-1 post-link">Read more <i class="fa fa-long-arrow-right"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
            <p><?php __('No news yet'); ?></p>
        <?php endif; wp_reset_postdata();?>

        <?php if (is_active_sidebar( 'calendar' )): ?>
            <?php dynamic_sidebar( 'calendar' ); ?>
        <?php endif; ?>
    </div>
</section>
<!--News Reel Ends -->

<?php get_footer(  ); ?>