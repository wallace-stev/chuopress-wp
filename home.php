<?php get_header( ); ?>

<!-- News Reel Starts -->
<section class="container-fluid pt-4 mt-2 px-lg-5">
    <h1 class="mt-2 mb-3 news-section-title">News & Updates</h1>
    <div class="row">
    <?php

        $currentPage = get_query_var('paged');
        
        $args = array(
            'post_type' =>  'post',
            'paged' =>  $currentPage
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

        <div class="col-12">
            <p class="mx-2">
                <?php echo paginate_links( array (
                    'total' =>$the_query->max_num_pages,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( '&laquo; Previous', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( 'Next &raquo;', 'text-domain' ) )
                ));?>
            </p>
        </div>

        <?php else: ?>
            <p><?php __('No news yet'); ?></p>
        <?php endif; wp_reset_postdata();?>
    </div>
</section>
<!--News Reel Ends -->

<?php get_footer(  ); ?>