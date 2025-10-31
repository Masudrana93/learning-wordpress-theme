<?php
/**
 * Template Name: Company Profile
 */
get_header();

get_template_part('includes/breadcrums');

?>

<!-- **** About Our Company section Start **** -->

<section class="my-md-5 my-3">
    <div class="container">



         <?php 
             $about_company = new WP_Query(array(
                'post_type'  => 'company_profile',
                'posts_per_page' => 1,
                'order' =>'DESC',
            ));
            while ($about_company->have_posts()):
                $about_company->the_post();
         ?>

        <div class="row pb-md-5 pb-3 justify-content-between">
            <!-- About Our Company start  -->
            <div class="col-md-7 order-md-1 order-2">
                <h2 class="fs-2 mb-md-4 mb-2"> <?php the_title();?>   <code class="text-primary fs-2 fw-bold"> <?php bloginfo('name');?></code>
                </h2>
                <div class="for-text-justify">
                    <?php the_content();?>
                </div>
                
            </div>
            <!-- About Our Company end  -->

            <!-- Copany photo start  -->
            <div class="col-md-4 d-flex align-items-center order-md-2 order-1 mb-md-0 mb-3">
                
                <?php 
                    if (has_post_thumbnail()):
                        the_post_thumbnail('medium', array(
                            'class' => 'img-fluid shadow-lg',
                        ))
                ?>
                <?php else:?>

                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/no-image-thumbnail.jpg'); ?>"
                    alt="Company's Photo" class="img-fluid shadow-lg">
                <?php endif;?>
                
            </div>
            <!-- Company photo end  -->
        </div>
        <?php endwhile;
            wp_reset_postdata();?>


    </div>
</section>
<!-- **** About Our Company section  End **** -->



<?php get_footer(); ?>

