<?php
/**
 * Template Name: Fish
 */
get_header();

get_template_part('includes/breadcrums');
?>



<!--*** Section Start *** -->

<div class="container-fluid">
    <div class="container">
        <div class="row my-5">

        <?php 
             $fish_details = new Wp_Query(array(

                'post_type'       => 'fish',
                'posts_per_page'  => 12 ,
                'order'           => 'DESC',
            ));
            while($fish_details->have_posts()): $fish_details->the_post();
        ?>

            <div class="col-md-3 mb-md-4 mb-2">
                <div class="border p-2 rounded-3">
                    <a href="#"> 

                    <?php the_post_thumbnail('fish-photo', array('class' => 'img-fluid rounded-3 mb-3'));?>
                        
                    <!-- <img src="<?php //echo get_template_directory_uri() . '/images/HilsaLanding.png' ?>" alt="Fish-Photo"
                        class="img-fluid">  -->
                    
                    
                    </a>
                    <h4><a href="#" class="text-decoration-none"> <?php the_title();?>  </a></h4>
                    <p class="text-secondary">Key Nutrients: <?php the_content();?> </p>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata();?>
            

        </div>
    </div>
</div>
<!--*** Section End *** -->

<?php get_footer(); ?>