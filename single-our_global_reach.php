<?php get_header(); ?>



<h1> eta holo single page desing sodo mataro our_global_reach erjonn </h1>

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
            <div class="col-md-9">
                <h3 class="mb-3 fw-normal"><?php the_title();?></h3>
                
                    <!-- item start  -->
                <div class="mt-md-4 mt-2"> 
                    
                    <?php the_content();?>
                    
                </div>
                <!-- item end -->
            </div>
            <!-- part-two end  -->

            

           



             
            <!-- part-three end -->
        </div>
    </div>
</div>

<?php get_footer();


