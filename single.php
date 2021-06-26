<?php get_header( ); ?>

<!--Static Pages Header Starts-->
<div class="container px-2 mt-md-4 mt-3" id="page_header">
    <div>
        <h1 class="page-header-title text-left"><?php the_title( ); ?></h1>
    </div>
</div>
<!--Static Pages Header Header Ends-->

<!--Displaying Page Content Starts Here-->
<div class="container px-2 mt-lg-3 py-2 mt-md-2">
    <div class="row px-2">
        <div class="px-lg-2 px-2 col-lg-9 col-12 page-content-text">
            <?php
                if ( have_posts()) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                else:
                    echo '<p>Sorry, the content is not available</p>';
                endif;
            ?>
        </div>

        <div class="px-3 px-lg-0 py-2 ml-lg-5 ml-0 col-lg-2 mt-0 d-none d-lg-block sidebar-text">
            <?php if (is_active_sidebar( 'sidebar' )): ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
        </div>
    </div>

</div>
<!--Displaying Page Content Ends Here-->

<!-- News Reel Starts -->
<section class="container-fluid pt-4 mt-2 px-lg-5 d-block d-sm-none d-lg-none d-md-block d-sm-block">
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