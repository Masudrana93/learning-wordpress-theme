<?php get_header(); ?>

    <!--*** Breadcumb Design Start *** -->
    <div class="container-fluid vig-bg-photo position-relative px-0">
        <div class="vig-bg-color position-absolute d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 fs-3 d-flex justify-content-center align-items-center">
                        <p class="mb-0"> <a href="<?php echo esc_url(home_url());?>" class="text-decoration-none text-white"> Home </a> </p> 
                        <small class="text-white px-md-3 px-2 fs-6"> <i class="bi bi-chevron-double-right"></i> </small>
                        <p class="mb-0 text-white fw-bold text-center">Product's Details</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*** Breadcumb Design End *** -->

<div class="section">
    <div class="container my-md-5 my-2">
        <div class="row">
           

            <div class="col-md-8">
                <h3 class="mb-3 fw-normal"><?php the_title();?></h3>
                <?php if (has_post_thumbnail()):
                        the_post_thumbnail('large', array(
                                        'class' => 'img-fluid',
                                        'alt'   => get_the_title()
                                    )); ?>
                                <?php else: ?>

                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/no-image-thumbnail.jpg'); ?>"
                                        class="img-fluid" alt="product">
                                <?php endif; ?>

            </div>
            <!-- part-two end  -->

            <!-- part-three start  -->
             <div class="col-md-4">
              

                 <!-- item start  -->
                <div class="our-products mt-md-5 mt-3">
                    <p class="bg-secondary-subtle border-start border-primary border-3 py-2 px-3"> Our Products</p>



            <?php
            $special_products = new WP_Query(array(
                'post_type'             => 'special_products',
                'posts_per_page'        => 8,
                'post__not_in'          => array(get_the_ID()),
                'order'                 => 'DESC',
            ));
            while ($special_products->have_posts()):
                $special_products->the_post();
                ?>
                    <!-- single item start -->
                    <div class="row d-flex justify-content-center align-items-center mb-md-4 mb-2">
                        <div class="col-6">
                            <a href="<?php the_permalink();?>">

                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('medium', array(
                                        'class' => 'img-fluid',
                                        'alt'   => get_the_title()
                                    )); ?>
                                <?php else: ?>

                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/no-image-thumbnail.jpg'); ?>"
                                        class="img-fluid" alt="product">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="col-6">
                            <h5><a href="<?the_permalink();?>" class="text-decoration-none text-secondary"><?php the_title();?></a></h5>
                        </div>
                    </div>
                    <!-- single item end -->
                <?php endwhile;
                    wp_reset_postdata();?> 

                    
                </div>
                <!-- item end -->
             </div>
            <!-- part-three end -->
        </div>
    </div>
</div>

<?php get_footer();


