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
               $news_design = new Wp_Query(array(

                    'post_type'         => 'fish',
                    'posts_per_page'    => 4,
                    'order'             => 'DESC',
               ));
               while($news_design->have_posts()): $news_design->the_post();
            ?>

            <div class="col-md-3">
                <div class="card h-100 shadow-sm">

                <?php the_post_thumbnail('photo-400X250', array('class' => 'card-img-top img-fluid'))?>

                    <!-- <img src="<?php //echo get_template_directory_uri() . '/https://picsum.photos/400/250?random=11'?>" class="card-img-top" alt=""> -->

                    <div class="card-body">
                        <h5 class="card-title"><?php the_title();?></h5>
                        <p class="card-text text-muted small">Short excerpt of the post goes here...</p>
                        <a href="<?php the_permalink();?>" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>
            
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
                'post_type'         => 'fish',
                'posts_per_page'    => 2,
                'offset'            => 4,
                'order'             => 'DESC',
            ));
            while($news_design->have_posts()): $news_design->the_post();
        ?>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">

                <?php the_post_thumbnail('photo-100X100', array('class' => 'me-3 rounded'));?>

                <!-- <img src="https://picsum.photos/100/100?random=21" class="me-3 rounded" alt=""> -->

                <div>
                    <h5> <?php the_title();?> </h5>
                    <p class="mb-1 small text-muted">Quick summary or short description here...</p>
                </div>
            </a>
            <?php endwhile; wp_reset_postdata();?>
            
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
                    'offset'  => 6,
                    'order' => 'DESC',
            ));
            while($news_design->have_posts()): $news_design->the_post();
        ?>

        <div class="card bg-dark text-white mb-4">

            <?php the_post_thumbnail('photo-800X400', array('class' => 'card-img'));?>

            <!-- <img src="https://picsum.photos/800/400?random=31" class="card-img" alt=""> -->

            <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h3 class="bg-dark bg-opacity-75 p-2 rounded">F<?php the_title();?></h3>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>

        <div class="row g-4">

        <?php
            $news_design = new Wp_Query(array(
                'post_type' => 'fish',
                'posts_per_page' => 3,
                'offset' => 7,
                'order' => 'DESC',
            ));
            while($news_design->have_posts()): $news_design->the_post();
        ?>

            <div class="col-md-4">
                <div class="card h-100">

                    <?php the_post_thumbnail('photo-400X250', array('class' => 'card-img-top'));?>

                    <!-- <img src="https://picsum.photos/400/250?random=32" class="card-img-top" alt=""> -->

                    <div class="card-body">
                        <h6><?php the_title();?></h6>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>
            
        </div>
    </section>

    <!-- ===================================== -->
    <!-- 4. Horizontal Media Object -->
    <!-- ===================================== -->
    <section class="container my-5">
        <h3 class="mb-4 border-bottom pb-2 text-warning">4. Horizontal Media Layout</h3>


        <?php
           $news_design = new Wp_Query(array(
                'post_type'         => 'fish',
                'posts_per_page'    => 2,
                'offset'            => 10,
                'order'             => 'DESC',
           ));
           while($news_design->have_posts()): $news_design->the_post();
        ?>
        <div class="d-flex mb-4 border-bottom pb-3">
           <?php the_post_thumbnail('photo-200X150', array('class' => 'me-3 rounded img-fluid'));?>

            <!-- <img src="https://picsum.photos/200/150?random=41" class="me-3 rounded" alt=""> -->

            <div>
                <h5><?php the_title();?></h5>
                <p class="text-muted small">Brief summary for the news article...</p>
                <a href="<?php the_permalink();?>" class="btn btn-outline-warning btn-sm">Read More</a>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>

    
    </section>

    <!-- ===================================== -->
    <!-- 5. Card Overlay with Gradient -->
    <!-- ===================================== -->
    <section class="container my-5">
        <h3 class="mb-4 border-bottom pb-2 text-info">5. Overlay Gradient Style</h3>

        <div class="row g-4">

           <?php
            $news_design = new Wp_Query(array(
                'post_type'         => 'fish',
                'posts_per_page'    => 2,
                'offset'            => 12,
                'order'             => 'DESC',
            ));
            while($news_design->have_posts()): $news_design->the_post();
           ?>
            <div class="col-md-6">
                <div class="card text-white">

                <?php the_post_thumbnail('photo-600X350', array('class' => 'card-img img-fluid'));?>

                    <!-- <img src="https://picsum.photos/600/350?random=51" class="card-img" alt=""> -->

                    <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                        <h4> <?php the_title();?> </h4>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>

            
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
                'post_type'         => 'fish',
                'posts_per_page'    => 1,
                'offset'            => 14,
                'order'             => 'DESC',
            ));
            while($news_design->have_posts()): $news_design->the_post();
        ?>
            <div class="col-md-8">
            <?php the_post_thumbnail('photo-800X400', array('class' => 'img-fluid rounded mb-3'));?>

                <!-- <img src="https://picsum.photos/800/400?random=61" class="img-fluid rounded mb-3" alt=""> -->

                <h4><?php the_title();?></h4>
                <p class="text-muted small">Main story details or summary text goes here...</p>
            </div>
            <?php endwhile; wp_reset_postdata();?>



            <div class="col-md-4">
                <ul class="list-group">

                <?php 
                     $news_design = new Wp_Query(array(
                        'post_type' => 'fish',
                        'posts_per_page' => 4,
                        'offset' => 15,
                        'order' => 'DESC',
                    ));
                    while($news_design->have_posts()): $news_design->the_post();
                ?>
                    <li class="list-group-item d-flex align-items-center">

                    <?php the_post_thumbnail('photo-80X80', array('class' => 'me-2 rounded'));?>

                        <!-- <img src="https://picsum.photos/80/80?random=62" class="me-2 rounded" alt=""> -->

                        <span><?php the_title();?></span>
                    </li>
                    <?php endwhile; wp_reset_postdata();?>

                    
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
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/800/400?random=71" class="d-block w-100" alt="">
                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                        <h5>Carousel Post One</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/800/400?random=72" class="d-block w-100" alt="">
                    <div class="carousel-caption bg-dark bg-opacity-75 rounded">
                        <h5>Carousel Post Two</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <!-- 8. Two Column Masonry Style -->
    <!-- ===================================== -->
    <section class="container my-5">
        <h3 class="mb-4 border-bottom pb-2 text-danger">8. Masonry Grid</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://picsum.photos/600/300?random=81" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5>Masonry Post 1</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://picsum.photos/600/500?random=82" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5>Masonry Post 2</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <!-- 9. Timeline Style News -->
    <!-- ===================================== -->
    <section class="container my-5">
        <h3 class="mb-4 border-bottom pb-2 text-success">9. Timeline Layout</h3>
        <ul class="list-unstyled">
            <li class="mb-4 border-start border-3 ps-3">
                <h6>Nov 1, 2025</h6>
                <h5>Timeline Headline One</h5>
            </li>
            <li class="mb-4 border-start border-3 ps-3">
                <h6>Oct 30, 2025</h6>
                <h5>Timeline Headline Two</h5>
            </li>
        </ul>
    </section>

    <!-- ===================================== -->
    <!-- 10. Minimal Title List -->
    <!-- ===================================== -->
    <section class="container my-5">
        <h3 class="mb-4 border-bottom pb-2 text-dark">10. Minimal Titles</h3>
        <ul class="list-unstyled">
            <li class="border-bottom py-2"><a href="#" class="text-decoration-none">Simple Post Title One</a></li>
            <li class="border-bottom py-2"><a href="#" class="text-decoration-none">Simple Post Title Two</a></li>
            <li class="border-bottom py-2"><a href="#" class="text-decoration-none">Simple Post Title Three</a></li>
        </ul>
    </section>



<?php get_footer(); ?>
