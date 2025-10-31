<?php get_header(); ?>

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
                    
                    <?php //the_content();?>
                    
                </div>
                <!-- item end -->
            </div>
            <!-- part-two end  -->

            <!-- part-three start  -->
             <div class="col-md-3">
                <!-- item start  -->
                <div class="our-global-reach">
                    <p class="bg-secondary-subtle border-start border-primary border-3 py-2 px-3"> Our Global Reach</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laudantium sequi illo dolores vel obcaecati dolor, atque quos odio vero!</p>
                    <button class="btn btn-secondary rounded-0">Find More <i class="bi bi-box-arrow-in-right"></i></button>
                </div>
                <!-- item end -->

                 <!-- item start  -->
                <div class="our-products mt-md-5 mt-3">
                    <p class="bg-secondary-subtle border-start border-primary border-3 py-2 px-3"> Our Products</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laudantium sequi illo dolores vel obcaecati dolor, atque quos odio vero!</p>
                    <button class="btn btn-secondary rounded-0">Find More <i class="bi bi-box-arrow-in-right"></i></button>
                </div>
                <!-- item end -->
             </div>
            <!-- part-three end -->
        </div>
    </div>
</div>

<?php get_footer();


