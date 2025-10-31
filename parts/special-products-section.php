<!------- Section-3 == Products == Start ---- -->

<section class="bg-color-product py-md-5 py-3 mb-md-5 mb-3">
    <div class="container">

        <h2 class="text-white text-center">Specialized Products</h2>

        <div class="row g-3 my-md-5 mb-3">


            <?php
            $special_products = new WP_Query(array(
                'post_type' => 'special_products',
                'posts_per_page' => 8,
                'order' => 'DESC',
            ));
            while ($special_products->have_posts()):
                $special_products->the_post();
                ?>

                <!-- single product start  -->
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <div class="bg-white p-md-3 p-2">
                        <div class="position-relative product-card">
                            <a href="<?php the_permalink();?>">

                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('medium', array(
                                        'class' => 'img-fluid',
                                        'alt' => get_the_title()
                                    )); ?>
                                <?php else: ?>

                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/no-image-thumbnail.jpg'); ?>"
                                        class="img-fluid" alt="product">
                                <?php endif; ?>
                            </a>
                            <div class="product-overlay d-flex flex-column align-items-center justify-content-center">
                                <div class="icon-bg text-center rounded-circle mb-2">
                                    <i class="bi bi-link-45deg fs-5 text-primary"></i>
                                </div>
                                <h6 class="text-white mb-0">
                                    <a href="<?php the_permalink();?>" class="text-white text-decoration-none stretched-link">
                                        <?php the_title(); ?></a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end  -->
            <?php endwhile;
            wp_reset_postdata(); ?>

        </div>
    </div>
</section>
<!------- Section-3 == Products == End ---- -->