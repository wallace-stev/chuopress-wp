<?php //Overriding excerpt length for search results
add_filter( 'excerpt_length', function( $length ) {  return 30; }, 999); ?>

<?php get_header( ); ?>

<!--Dynamic Search Header Starts-->
<div class="container px-2 mt-md-4 mt-3" id="page_header">
    <div>
        <h3 class="text-left search-heading pb-3">Search results containing: '<?php echo get_search_query(); ?>'</h3>
    </div>
</div>
<!--Dynamic Search Header Ends-->

<!--Displaying Page Content Starts Here-->
<div class="container px-2 mt-lg-3 py-2 mt-md-2 mt-1">
    <div class="row px-2">
        <div class="px-lg-2 px-2 col-lg-9 col-12 page-content-text">
            <?php if ( have_posts()) : ?>
                <h3 class="search-subheading ml-md-2 ml-0 mb-md-3 mb-2 text-red">
                    Content Found
                </h3>
                <ul class="ml-md-3 ml-0">
                    <?php while (have_posts() ) : the_post(); ?>
                        <li class="result-items">
                            <a class="text-capitalize" href="<?php the_permalink( ); ?>">
                                <?php the_title(); ?> 
                                (<?php echo get_post_type(  ) ?>)
                            </a>
                            <p class="post-date my-1 text-gray">
                                <i class="text-red fa fa-calendar"></i>
                                &nbsp;<?php echo get_the_time('F j, Y'); ?>
                            </p>
                            <?php echo the_excerpt(  ); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="col-12">
                    <p class="mx-2">
                        <?php echo paginate_links( array (
                            'prev_next'    => true,
                            'prev_text'    => sprintf( '<i></i> %1$s', __( '&laquo; Previous', 'text-domain' ) ),
                            'next_text'    => sprintf( '%1$s <i></i>', __( 'Next &raquo;', 'text-domain' ) )
                        ));?>
                    </p>
                </div>
            <?php
                else:
                    echo '<h3 class="search-subheading ml-md-2 ml-0 mb-2 text-red">
                        Sorry, the content you are looking for was not found
                    </h3>';
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

<?php get_footer(  ); ?>