<?php get_header(); ?>



<h1> eta holo single page desing sodo mataro company_profile erjonn </h1>

    <!--*** Breadcumb Design Start *** -->
    <div class="container-fluid vig-bg-photo position-relative px-0">
        <div class="vig-bg-color position-absolute d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 fs-3 d-flex justify-content-center align-items-center">
                        <p class="mb-0"> <a href="index.html" class="text-decoration-none text-white"> Home </a> </p> 
                        <small class="text-white px-md-3 px-2 fs-6"> <i class="bi bi-chevron-double-right"></i> </small>
                        <p class="mb-0 text-white fw-bold text-center">About Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*** Breadcumb Design End *** -->

<div class="section">
    <div class="container my-md-5 my-2">
        <div class="row">
           <!-- part-one start  -->
            <div class="col-md-3 single-page-linkmenu-hover">

            <?php
                wp_nav_menu(array(
                'theme_location' => 'about_menu',
                'menu_class'     => 'list-unstyled border',
                'container'      => false,
                ));
            ?>
                     <!-- <ul class="list-unstyled border">
                            <li class="border"><a class="text-decoration-none p-2" href="company-profile.html">Company Profile</a></li>
                            <li class="border"><a class="text-decoration-none p-2" href="vision-and-mission.html">Vision &
                                    Mission</a></li>
                           <li class="border"><a class="text-decoration-none p-2" href="message-from-chairperson.html">Message from Chairperson</a></li>
                            <li class="border"><a class="text-decoration-none p-2" href="message-from-managing-director.html">Message from Managing Director</a></li>
                            
                            <li class="border"><a class="text-decoration-none p-2" href="board-of-directors.html">Board of Directors</a></li>
                            <li class="border"><a class="text-decoration-none p-2" href="quality-policy.html">Quality Policy</a></li>
                    </ul> -->
            </div>
            <!-- part-one end -->

            <!-- part-two start  -->
            <div class="col-md-6">
                <h3 class="mb-3 fw-normal"><?php the_title();?></h3>
                <div class="ratio ratio-16x9 shadow-lg">
                        <?php
                            $yvideo = get_field('youtube_video');
                        ?>
                        
                        <iframe src="https://www.youtube.com/embed/<?php echo $yvideo;?>?si=jwnCzZs6N7WEHoDU"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>
                    <!-- item start  -->
                <div class="mt-md-4 mt-2"> 
                    
                    <?php the_content();?>
                    
                </div>
                <!-- item end -->
            </div>
            <!-- part-two end  -->

            

            <!-- part-three start  -->
        <div class="col-md-3">


             <?php 
             $global_reach = new WP_Query(array(
                'post_type'     => 'our_global_reach',
                'posts_per_page' => 1, 
                'order'         => 'DESC'            
            ));

         
            while ($global_reach->have_posts()) : $global_reach->the_post();
             ?>


                <!-- item start  -->
                <div class="our-global-reach mb-md-3 mb-2">
                    <p class="bg-secondary-subtle border-start border-primary border-3 py-2 px-3"> <?php the_title();?></p>
                    <p>  <?php 
                       $content_global = get_the_content();
                       $trim_words = wp_trim_words($content_global, 15, '...');
                       echo $trim_words;
                       ?>
                    </p>
                    <a href="<?php the_permalink()?>">
                    <button class="btn btn-secondary rounded-0">Find More <i class="bi bi-box-arrow-in-right"></i></button>
                    </a>
                </div>
                <!-- item end -->


                <?php endwhile; wp_reset_postdata();?>





            <!-- item start  -->
             <?php 
             $product_facility = new WP_Query(array(
                'post_type'     => 'prod_facilities',
                'posts_per_page' => 1, 
                'order'         => 'DESC'            
            ));

         
            while ($product_facility->have_posts()) : $product_facility->the_post();
             ?>


                <div class="our-global-reach">
                    <p class="bg-secondary-subtle border-start border-primary border-3 py-2 px-3"> <?php the_title();?></p>
                    <p> <?php the_content();?> </p>
                    <button class="btn btn-secondary rounded-0">Find More <i class="bi bi-box-arrow-in-right"></i></button>
                </div>
               


                <?php endwhile; wp_reset_postdata();?>

            <!-- item end -->

             </div>
            <!-- part-three end -->
        </div>
    </div>
</div>

<?php get_footer();


