<?php get_header( ); ?>

<!--Hero Header & Forms Start-->
<div class="container-fluid hero" id="hero">
    <div class="row">
        <!--Headings-->
        <div class="hero-text text-center">
            <h1 class="big-text">St.Thomas Institute of Management and Technology</h1>			
        </div>

        <div class="hero-newsreel">
            <h3 class="text-white text-start ml-2 ml-md-3 application-form-heading mb-3 text-md-start text-center">Jiunge Nasi Sasa</h3>
        </div>
        
        <!--Forms Buttons-->
        <div class="container-fluid g-0">
            <div class="bg-trans gold-lined px-2 mb-md-0 mb-1 mx-1 mx-md-0">
                <div class ="row g-2 px-2">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button class="apply-btn py-3">
                            Online Application
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button class="dwld-btn py-3">
                            <span class="fa fa-download"></span>&nbsp;Application Form
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button class="dwld-btn py-3">
                            <span class="fa fa-download">&nbsp;Joining Instructions</span>
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button class="dwld-btn py-3">
                            <span class="fa fa-download">&nbsp;Scholarship Application</span>
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button class="dwld-btn py-3">
                            <span class="fa fa-download">&nbsp;Medical Form</span>
                        </button>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <button class="dwld-btn py-3">
                            <span class="fa fa-download">&nbsp;Confirmation Form</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!--Hero Header & Forms End-->

<!-- Intro Section Start-->
<section class="bg-gray py-5 px-2">
    <div class="container-fluid">
        <div class="row mx-md-2 gx-md-5 justify-content-between">
            <div class=" col-lg-4 col-md-5 px-lg-4 px-md-3">
                <div class="intro-left-col bg-white py-5">
                    <div>
                        <?php get_search_form(  ); ?>
                    </div>
                </div>
                
                <div class="bg-theme text-white">
                    <h4>NEWS</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 px-lg-4 px-md-3">
                <div class="intro-right-col bg-white py-5">
                    <p>Leoani dsjfkdgnjkfhjsadsfjkgljkadf</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intro Section End-->

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
                            <i class="text-red fa fa-calendar">
                            &nbsp;<?php echo get_the_time('F j, Y'); ?>
                        </p>
                        <p class="px-1 mt-2 mb-2 post-intro d-none d-sm-block"><?php echo get_the_excerpt(  ); ?></p>
                        <a href="<?php the_permalink(  ); ?>">
                            <p class="px-1 post-link d-none d-sm-block">Read more <i class="fa fa-long-arrow-right"></p>
                        </a>
                    </div>
                    <div class="col-12 px-1 d-sm-none">
                        <p class="px-1 my-1 post-intro"><?php echo get_the_excerpt(  ); ?></p>
                        <a href="<?php the_permalink(  ); ?>">
                            <p class="px-1 post-link">Read more <i class="fa fa-long-arrow-right"></p>
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