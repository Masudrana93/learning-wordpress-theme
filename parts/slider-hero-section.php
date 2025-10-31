<!---------- Section-1 == Slider == Start  ---------->
    <section class="position-relative mb-md-5 mb-3">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">


            <?php 

              $sliders = new WP_Query(array(
                'post_type'         => 'slider',
                'posts_per_page'    => 3,
                'order'             => 'DESC'
              ));


              $active = 0;
              while($sliders->have_posts()): $sliders->the_post();
              $active++ ;
              if( $active == 1 ) :  
            ?>
                <div class="carousel-item active">
                    <?php else : ?>
                        <div class="carousel-item">
                    <?php endif; 
                    the_post_thumbnail();
                ?>
                    <!-- <img src="<?php //echo esc_url(get_template_directory_uri() . '/images/1.jpg');?>" class="d-block w-100" alt="Slider-photo"> -->
                </div>
                
              <?php  endwhile; wp_reset_postdata(); ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- ticker-slider-for-heading-scrolling  start -->
        <div class="container-fluid bg-ticker position-absolute bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center py-md-3 py-1">
                        <ul class="bxslider list-unstyled d-flex gap-3 align-items-center">

                            <?php 
                                $tickers = new WP_Query(array(
                                    'post_type'         => 'ticker',
                                    'posts_per_page'    => 4,
                                    'order'             => 'ASC'
                                ));
                                while($tickers->have_posts()): $tickers->the_post();
                            ?>
                            <li class="text-white"><?php the_title();?> |</li>
                            <?php endwhile; wp_reset_postdata();?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ticker-slider-for-heading-scrolling end -->

    </section>
    <!---------- Section-1 == Slider == End --- ------->