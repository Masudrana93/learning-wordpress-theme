<?php 
/**
 * Template Name: Board of Directors
 */
get_header();
get_template_part('includes/breadcrums');
?>

 

    <div class="container py-5">
        <h1 class="text-center mb-5">Board of Directors</h1>

        <div class="row justify-content-center g-4">


        <?php 
             $board_directors = new Wp_Query(array(
                'post_type'       =>  'directors_board',
                'posts_per_page'  =>    -1,
                'order'           => 'ASC',

            ));
            while ($board_directors->have_posts()):
                $board_directors->the_post();
        ?>

            <!-- Chairman -->
            <div class="col-md-3 col-12">
                <div class="card director-card text-center">

                    <?php 
                        the_post_thumbnail('thumbnail');
                        // the_post_thumbnail('medium');
                        // the_post_thumbnail('large', array('class' => 'img-fluid rounded-circle'));
                        // the_post_thumbnail('full');
                    ?>

                    <div class="card-body">

                    <?php 
                            $designation_holders_name = get_field('designation_holders_name'); 
                            $designation= get_field('directors_designation');
                            ?>


                        <h5 class="card-title">
                            <?php the_title(); ?> 
                        </h5>

                        <p class="card-text">
                            <?php
                            if ( !empty($designation) ){
                                echo $designation;
                            } else{
                                echo "Designation";
                            }
                        ?>
                        </p>
                    </div>
                </div>
            </div>


        <?php endwhile;
        wp_reset_postdata();
        ?>
           


        </div>


            

        <div class="row">

        <?php 
                while( $board_directors->have_posts()):  $board_directors->the_post();
            ?>
            <div class="col-md-3">
                <?php the_post_thumbnail('bd-photo');?>
            </div>
            <?php endwhile; wp_reset_postdata();?>
          
        </div>
    </div>



   <?php get_footer();?>