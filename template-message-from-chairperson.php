<?php 
/**
 * Template Name: Message from Chairperson
 */
get_header();
get_template_part('includes/breadcrums');
?>


<!-- **** Message from Chairperson Start **** -->

    <section class="my-md-5 my-3">
        <div class="container">



        <?php 
             $Chairman_message = new WP_Query(array(
                'post_type'         => 'chairman_message',
                'posts_per_page'    => 1,
                'order'             =>'DESC',
            ));
            while ($Chairman_message->have_posts()):
                $Chairman_message->the_post();
         ?>


            <div class="row pb-md-5 pb-3 justify-content-between">
                <!-- About Founder start  -->
                <div class="col-md-7 order-md-1 order-2 mt-md-0 mt-4">
                    <h2 class="fw-bold fs-1 mb-md-5 mb-3">Message From <span class="text-primary"> <?php the_title();?> </span></h2>
                   
                     <div class="for-text-justify">
                        <?php the_content();?>
                    </div>
                    
                </div>
                <!-- About Founder end  -->

                <!-- Founder photo start  -->
                <div class="col-md-3 d-flex justify-content-center flex-column order-md-2 order-1">
                    <div class="bg-color p-4 shadow rounded-2 mb-md-3 mb-2">

                    <?php 
                    if (has_post_thumbnail()):
                        the_post_thumbnail('large', array(
                            'class' => 'img-fluid border border-3 shadow-lg rounded-2',
                            'alt'   => "Chairperson's photo",
                        ))
                ?>
                <?php else:?>

                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/no-image-thumbnail.jpg'); ?>"
                    alt="Company's Photo" class="img-fluid border border-3 shadow-lg rounded-2">
                <?php endif;?>
                
                      
                    </div>
                    <div class="text-start">
                        <?php 
                            $designation_holders_name = get_field('designation_holders_name'); 
                            $designation= get_field('designation');
                            ?>
                        <h5><?php if ( !empty($designation_holders_name) ){
                            echo $designation_holders_name;
                        } else {
                            echo "Chairman's Name";
                        }
                        ?> 
                        </h5>
                        <h6 class="fw-normal">
                            <?php
                            if ( !empty($designation) ){
                                echo $designation;
                            } else{
                                echo "Designation";
                            }
                        ?>
                        </h6>
                    </div>
                </div>
                <!-- Founder photo end  -->
            </div>

            <?php endwhile;
            wp_reset_postdata();?>

        </div>
    </section>
<!-- **** Message from Chairperson  End **** -->



<?php get_footer();?>