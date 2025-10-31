 <!------- Section-2 == about Company== Start ---- -->
    <section class="mb-md-5 mb-3">
        <div class="container">
        <?php 
            $company_prfile = new WP_Query(array(
            'post_type'         => 'company_profile',
            'posts_per_page'    => 1,
            'order'             => 'DESC',
            ));
       
            while($company_prfile->have_posts()): $company_prfile->the_post();
            ?>
            <div class="row d-flex justify-content-between">
                <!-- item start  -->
                <div class="col-md-7 mb-md-0 mb-4">
                    <h1 class="mb-3 fw-normal"><?php 
                    $title_name = get_the_title();
                    $trim_title = wp_trim_words($title_name, 2, '...');
                    echo $trim_title;
                    ?>
                
                </h1>
                    <p class="mb-md-5 mb-3"> 
                    <?php 
                       $content = get_the_content();
                       $trim_words = wp_trim_words($content, 50, '...');
                       echo $trim_words;

                    
                    ?> 

                    </p>
                    <button class="btn btn-secondary rounded-0"> <a class="text-decoration-none text-white" href="<?php the_permalink();?>"> Read More </a> </button>
                </div>
                <!-- item end -->
                <!-- item start  -->
                <div class="col-md-4 d-flex align-items-center">
               
                    <div class="ratio ratio-16x9 shadow-lg">
                        <?php
                            $yvideo = get_field('youtube_video');
                        ?>
                        <iframe src="https://www.youtube.com/embed/<?php echo $yvideo;?>?si=jwnCzZs6N7WEHoDU"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- item end -->
            </div>
            <?php endwhile; wp_reset_postdata();?>


        </div>
    </section>
    <!------- Section-2 == about Company== End ---- -->