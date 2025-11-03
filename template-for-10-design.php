<?php
/**
 * Template Name: 10 Design
 */
get_header();

get_template_part('includes/breadcrums');
?>


<!-- ===================================== -->
<!-- 1. Classic News Grid (4 Columns) -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-primary">1. Classic News Grid</h3>
    <div class="row g-4">
        <?php
        $news_design = new WP_Query(array(

            'post_type'         => 'fish',
            'posts_per_page'    => 4,
            'order'             => 'DESC',
        ));
        while ($news_design->have_posts()):
            $news_design->the_post();
            ?>

            <div class="col-md-3">
                <div class="card h-100 shadow-sm">

                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('photo-400X250', array('class' => 'card-img-top img-fluid'));
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() . '/images/no-image-400X250.jpg'; ?>"
                            class="card-img-top img-fluid" alt="">
                    <?php } ?>

                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text text-muted small">Short excerpt of the post goes here...</p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </div>
</section>

<!-- ===================================== -->
<!-- 2. List View with Thumbnails -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-success">2. List View Layout</h3>
    <div class="list-group">


        <?php
        $news_design = new Wp_Query(array(
            'post_type' => 'fish',
            'posts_per_page' => 2,
            'offset' => 4,
            'order' => 'DESC',
        ));
        while ($news_design->have_posts()):
            $news_design->the_post();
            ?>
            <a href="<?php the_permalink();?>" class="list-group-item list-group-item-action d-flex align-items-center">

                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('photo-100X100', array('class' => 'me-3 rounded img-fluid'));
                } else { ?>
                    <img src="<?php echo get_template_directory_uri() . '/images/no-image100X100.jpg' ?>" class="me-3 rounded"
                        alt="">

                <?php } ?>

                <?php ?>



                <div>
                    <h5> 
                        <?php 
                        $my_title = get_the_title(); 
                        $trim_title = wp_trim_words($my_title, 3, '...');
                        echo $trim_title;
                        ?> 
                    </h5>

                    <p class="mb-1 small text-muted">

                        <?php 
                        $my_content = get_the_content();
                        $trim_words = wp_trim_words($my_content, 5, '...');
                        echo $trim_words;
                        ?>

                    </p>
                </div>
            </a>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </div>
</section>

<!-- ===================================== -->
<!-- 3. Featured Large + Small Grid -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-danger">3. Featured + Grid</h3>

    <?php
    $news_design = new Wp_Query(array(
        'post_type' => 'fish',
        'posts_per_page' => 1,
        'offset' => 6,
        'order' => 'DESC',
    ));
    while ($news_design->have_posts()):
        $news_design->the_post();
        ?>

        <div class="card bg-dark text-white mb-4">


            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('photo-800X400', array('class' => 'card-img img-fluid'));

            } else { ?>
                <img src="<?php echo get_template_directory_uri() . '/images/no-image-800X400.jpg' ?>"
                    class="card-img img-fluid" alt="">

            <?php }
            ?>

            <?php ?>



            <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h3 class="bg-dark bg-opacity-75 p-2 rounded"> <?php the_title(); ?> </h3>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>

    <div class="row g-4">

        <?php
        $news_design = new Wp_Query(array(
            'post_type' => 'fish',
            'posts_per_page' => 3,
            'offset' => 7,
            'order' => 'DESC',
        ));
        while ($news_design->have_posts()):
            $news_design->the_post();
            ?>

            <div class="col-md-4">
                <div class="card h-100">


                    <?php
                    if (has_post_thumbnail()) {

                        the_post_thumbnail('photo-400X250', array('class' => 'card-img-top img-fluid'));

                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() . '/images/no-image-400X250.jpg' ?>"
                            class="card-img-top img-fluid" alt="">

                    <?php }
                    ?>


                    <div class="card-body">
                        <h6><?php the_title(); ?></h6>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </div>
</section>

<!-- ===================================== -->
<!-- 4. Horizontal Media Object -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-warning">4. Horizontal Media Layout</h3>


    <?php
    $news_design = new Wp_Query(array(
        'post_type' => 'fish',
        'posts_per_page' => 2,
        'offset' => 10,
        'order' => 'DESC',
    ));
    while ($news_design->have_posts()):
        $news_design->the_post();
        ?>

        <div class="d-flex mb-4 border-bottom pb-3">


            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('photo-200X150', array('class' => 'me-3 rounded img-fluid'));

            } else { ?>
                <img src="<?php echo get_template_directory_uri() . '/images/no-image-200X150.jpg' ?>"
                    class="me-3 rounded img-fluid" alt="">

            <?php }
            ?>

            <div>
                <h5><?php the_title(); ?></h5>
                <p class="text-muted small">Brief summary for the news article...</p>
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm">Read More</a>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>


</section>

<!-- ===================================== -->
<!-- 5. Card Overlay with Gradient -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-info">5. Overlay Gradient Style</h3>

    <div class="row g-4">

        <?php
        $news_design = new Wp_Query(array(
            'post_type' => 'fish',
            'posts_per_page' => 2,
            'offset' => 12,
            'order' => 'DESC',
        ));
        while ($news_design->have_posts()):
            $news_design->the_post();
            ?>
            <div class="col-md-6">
                <div class="card text-white">



                    <?php
                    if (has_post_thumbnail()) {

                        the_post_thumbnail('photo-600X350', array('class' => 'card-img img-fluid'));

                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() . '/images/no-image-600X350.jpg' ?>"
                            class="card-img img-fluid" alt="">

                    <?php }
                    ?>



                    <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                        <h4> <?php the_title(); ?> </h4>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>


    </div>
</section>

<!-- ===================================== -->
<!-- 6. Sidebar News List -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-secondary">6. Sidebar News Layout</h3>
    <div class="row">

        <?php
        $news_design = new Wp_Query(array(
            'post_type' => 'fish',
            'posts_per_page' => 1,
            'offset' => 14,
            'order' => 'DESC',
        ));
        while ($news_design->have_posts()):
            $news_design->the_post();
            ?>
            <div class="col-md-8">


                <?php
                if (has_post_thumbnail()) {

                    the_post_thumbnail('photo-800X400', array('class' => 'img-fluid rounded mb-3'));

                } else { ?>
                    <img src="<?php echo get_template_directory_uri() . '/images/no-image-800X400.jpg' ?>"
                        class="img-fluid rounded mb-3" alt="">

                <?php }
                ?>

                <h4><?php the_title(); ?></h4>
                <p class="text-muted small">Main story details or summary text goes here...</p>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>



        <div class="col-md-4">
            <ul class="list-group">
                <?php
                $news_design = new Wp_Query(array(
                    'post_type' => 'fish',
                    'posts_per_page' => 4,
                    'offset' => 15,
                    'order' => 'DESC',
                ));
                while ($news_design->have_posts()):
                    $news_design->the_post();
                    ?>
                    <li class="list-group-item d-flex align-items-center">


                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('photo-80X80', array('class' => 'me-2 rounded'));

                        } else { ?>
                            <img src="<?php echo get_template_directory_uri() . '/images/no-image-80X80.jpg' ?>"
                                class="me-2 rounded" alt="">
                        <?php }
                        ?>




                        <span><?php the_title(); ?></span>
                    </li>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</section>

<!-- ===================================== -->
<!-- 7. Carousel Headlines -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-primary">7. Carousel Headlines</h3>

    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators -->
        <div class="carousel-indicators">
            <?php
            $news_design = new WP_Query(array(
                'post_type'      => 'fish',
                'posts_per_page' => 3,
                'offset'         => 10,
                'order'          => 'DESC',
            ));

            $indicator_index = 0;
            while ($news_design->have_posts()):
                $news_design->the_post();
            ?>
                <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="<?php echo $indicator_index; ?>"
                    class="<?php echo ($indicator_index == 0) ? 'active' : ''; ?>"
                    aria-current="<?php echo ($indicator_index == 0) ? 'true' : 'false'; ?>"
                    aria-label="Slide <?php echo $indicator_index + 1; ?>"></button>
            <?php
                $indicator_index++;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

        <!-- Inner slides -->
        <div class="carousel-inner rounded">
            <?php
            $news_design = new WP_Query(array(
                'post_type'      => 'fish',
                'posts_per_page' => 3,
                'offset'         => 10,
                'order'          => 'DESC',
            ));

            $active = 0;
            while ($news_design->have_posts()):
                $news_design->the_post();
            ?>

                <div class="carousel-item <?php echo ($active == 0) ? 'active' : ''; ?>">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('photo-800X400', array('class' => 'd-block w-100 img-fluid'));
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() . '/images/no-image-800X400.jpg'; ?>"
                            class="d-block w-100 img-fluid" alt="">
                    <?php } ?>

                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                        <h5><?php the_title(); ?></h5>
                    </div>
                </div>

            <?php
                $active++;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</section>


<!-- ===================================== -->
<!-- 8. Two Column Masonry Style -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-danger">8. Masonry Grid</h3>
    <div class="row row-cols-1 row-cols-md-2 g-4">

        <?php
        $news_design = new Wp_Query(array(
            'post_type' => 'fish',
            'posts_per_page' => 2,
            'offset' => 14,
            'order' => 'DESC',
        ));
        while ($news_design->have_posts()):
            $news_design->the_post();
            ?>

            <div class="col">
                <div class="card h-100">

                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('photo-600X300', array('class' => 'card-img-top img-fluid'));
                    } else { ?>
                        <img src="<?php echo get_template_directory_uri() . '/images/no-image-600X300.jpg'; ?>"
                            class="card-img-top img-fluid" alt="">
                    <?php }
                    ?>


                    <div class="card-body">
                        <h5> <?php the_title(); ?> </h5>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>



    </div>
</section>

<!-- ===================================== -->
<!-- 9. Timeline Style News -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-success">9. Timeline Layout</h3>
    <ul class="list-unstyled">



        <?php
        $timeline_news_sections = get_posts(array(
            'post_type' => 'fish',
            'posts_per_page' => 2,
            'offset' => 12,
            'order' => 'DESC',
            'fields'  => 'ids',
            'no_found_rows' => true,
            'update_post_meta_cache' => false,
            'update_post_term_cache' => false,
        ));
        if ($timeline_news_sections){
            foreach($timeline_news_sections as $timeline_news_section) { ?>
       
            <li class="mb-4 border-start border-3 ps-3">

                <h6> <?php echo get_the_date('M j, Y', $timeline_news_section);?> </h6>

                <h5> <a href="<?php echo esc_url(get_permalink($timeline_news_section));?>" class="text-decoration-none"> 
                    <?php echo esc_html(get_the_title($timeline_news_section)); ?> 
                </a> </h5>
            </li>

        <?php  } 
        } else {?>

            <li>No posts found.</li>

        <?php } ?>

    </ul>
</section>

<!-- ===================================== -->
<!-- 10. Minimal Title List -->
<!-- ===================================== -->
<section class="container my-5">
    <h3 class="mb-4 border-bottom pb-2 text-dark">10. Minimal Titles</h3>
    <ul class="list-unstyled">


        <?php
        $news_design = new Wp_Query(array(
            'post_type' => 'fish',
            'posts_per_page' => 3,
            'offset' => 9,
            'order' => 'DESC',
        ));
        while ($news_design->have_posts()):
            $news_design->the_post();
            ?>
            <li class="border-bottom py-2"><a href="#" class="text-decoration-none"><?php the_title(); ?></a></li>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </ul>
</section>



<?php get_footer(); ?>