
<?php

get_header();
?>


<section class="container my-5">

    <!-- ====== Title & Meta Info ====== -->
    <div class="text-center mb-5">
        <h1 class="post-title"> <?php the_title();?> </h1>
        <p class="post-meta text-muted small">
            Published on <span> <?php the_time('M j, Y');?> </span>
        </p>
    </div>



    
    <!-- ====== Featured Image ====== -->
    <div class="text-center mb-4">

    <?php 
    if ( has_post_thumbnail() ) {
        the_post_thumbnail('full', array('class' => 'img-fluid rounded shadow-sm'));

    } else{?>

        <img src="<?php echo get_template_directory_uri() . '/images/no-image-800X400.jpg'?>" alt="Post Thumbnail"
             class="img-fluid rounded shadow-sm">
   <?php }
    ?>
    
        
    </div>

    <!-- ====== Main Content ====== -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <article class="post-content mb-5">
                <p> <?php the_content();?> </p>

                <h3>Subheading Example</h3>

                <?php the_content();?>
            </article>

           

            <!-- ====== Navigation Links ====== -->
            <div class="post-navigation d-flex justify-content-between mt-4 border-top pt-3">
                
                <?php 
                previous_post_link('%link', '← %title');
                next_post_link('%link', '%title →');
                ?>
                
            
            </div>
        </div>
    </div>
</section>

<!-- ====== Related Posts Section ====== -->
<section class="container my-5">
    <h4 class="mb-4 border-bottom pb-2 text-secondary">Related Posts</h4>
    <div class="row g-4">


    <?php
        $current_id = get_the_ID();  // aki post jeno 2 bar na dekhai
         $related_post = new WP_Query(array(
            'post_type' => 'fish',
            'posts_per_page' => 3,
            'post__not_in' => array($current_id),
            'order' => 'DESC',
        ));
        while($related_post->have_posts()): $related_post->the_post();
    ?>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">


                <?php 
                if (has_post_thumbnail()){
                    
                    the_post_thumbnail('photo-400X250', array('class' => 'card-img-top'));

                } else{?>

                     <img src="<?php echo get_template_directory_uri() . '/images/no-image-400X250.jpg'?> " class="card-img-top" alt=""> 

                <?php }
                ?>
                
                <div class="card-body">
                    <h6 class="card-title"><?php the_title();?></h6>
                    <a href="<?php the_permalink();?>" class="btn btn-sm btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>
       
    </div>
</section>


<?php get_footer();?>
