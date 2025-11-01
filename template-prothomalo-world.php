<?php
/**
 * Template Name: Prothom Alo World
 */
get_header();

get_template_part('includes/breadcrums');
?>



<!--*** Section Start *** -->

<div class="container-fluid">
    <div class="container my-5">
        <div class="row mb-md-5 mb-3">

            <h2><a href="#" class="text-decoration-none">বিশ্ব</a></h2>
            <div class="col-12">
                <ul class="d-flex list-unstyled">
                    <li class="px-2"><a href="#" class="text-decoration-none">ফিলিস্তিন-ইসরায়েল সংঘাত</a></li>
                    <li class="px-2"><a href="#" class="text-decoration-none">ভারত</a></li>
                    <li class="px-2"><a href="#" class="text-decoration-none">পাকিস্তান</a></li>
                    <li class="px-2"><a href="#" class="text-decoration-none">চীন</a></li>
                    <li class="px-2"><a href="#" class="text-decoration-none">ফিলিস্তিন</a></li>
                </ul>
            </div>
        </div>

        <div class="row  mb-3">
            <div class="col-md-9 col-12 border-end">


            <?php
                $prthomalo_world = new Wp_Query(array(
                    'post_type' => 'fish',
                    'posts_per_page' => 1,
                    'order'  => 'DESC'
                ));
                while($prthomalo_world-> have_posts()): $prthomalo_world->the_post();
            ?>
                <div class="position-relative">
                    <?php the_post_thumbnail('large', array('class' => 'img-fluid'))?>

                    <!-- <img src="<?php //echo get_template_directory_uri() . '/images/yunus.webp'; ?>" alt="Photo" class="img-fluid">-->

                    <div class="position-absolute bottom-0 start-0 px-3 pb-2">
                        <h4><a href="#" class="text-decoration-none"><?php the_title();?></a></h4>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata();?>
            </div>

            <div class="col-md-3 col-12">
                <?php
                    $side_news = new Wp_Query(array(
                        'post_type'         => 'fish',
                        'posts_per_page'    => 1,
                        'offset'            => 1,  // 1 mane holo shorboses 1 news badh diye porer ta theke show korbe.
                        'order'             => 'DESC',
                    ));
                    while($side_news->have_posts()): $side_news->the_post();
                ?>
                <div class="mb-3">
                    <?php the_post_thumbnail('medium', array('class' => 'img-fluid'))?>

                    <!-- <img src="<?php //echo get_template_directory_uri() . '/images/yunus.webp'; ?>" alt="Photo" class="img-fluid"> -->
                </div>
                <div class="s">
                    <h5><a href="#" class="text-decoration-none"><?php the_title();?></a>
                    </h5>
                    <p><a href="#" class="text-decoration-none text-secondary"> <?php the_content();?> </a></p>
                    <small class="text-secondary"><?php $time_diff = human_time_diff(get_the_time('U'), current_time('timestamp')); echo $time_diff . ' আগে';?></small>
                </div>
                <?php endwhile; wp_reset_postdata();?>

            </div>

            <div>
                <hr>
            </div>
        </div>

        <div class="row mb-3">
                

                    <?php 
                       $side_news   = new Wp_Query(array(
                            'post_type'             => 'fish',
                            'posts_per_page'        => 4,
                            'offset'                => 2,
                            'order'                 => 'DESC',
                       ));
                       while($side_news->have_posts()): $side_news->the_post();
                    ?>
            <div class="col-md-3 col-12 border-end">
                <div class="mb-3">

                <?php the_post_thumbnail('medium', );?>
                    <!-- <img src="<?php //echo get_template_directory_uri() . '/images/yunus.webp'; ?>" alt="Photo" class="img-fluid"> -->
                </div>
                <div class="s">
                    <h5><a href="#" class="text-decoration-none"> <?php the_title();?></a>
                    </h5>
                    <p><a href="#" class="text-decoration-none text-secondary"><?php the_content();?></a></p>
                    <small class="text-secondary"><?php $time_diff = human_time_diff(get_the_time('U'), current_time('timestamp')); echo $time_diff . ' আগে';?></small>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>

            
        </div>
    </div>
</div>
<!--*** Section End *** -->



<!-- section-2 Start -->

<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div>
                <hr>
            </div>
            <h4 class="text-secondary">আরও - বিশ্ব</h4>

            <div class="col-md-6 mt-3">

            <?php 
                 $side_news = new Wp_Query(array(
                    'post_type' => 'fish',
                    'posts_per_page' => 5,
                    'offset' => 6,
                    'order'   => 'DESC',
                 ));
                 while($side_news->have_posts()): $side_news->the_post();
            ?>

                <div class="row mb-3">
                    <div class="col-8">
                        <h5><a href="#" class="text-decoration-none"><?php the_title();?></a>
                        </h5>
                        <p><a href="#" class="text-decoration-none text-secondary"> <?php the_content();?> </a></p>
                        <small class="text-secondary"><?php $time_diff = human_time_diff(get_the_time('U'), current_time('timestamp')); echo $time_diff . ' আগে';?></small>
                    </div>
                    <div class="col-4">
                        <?php the_post_thumbnail('mideum', array('class' => 'img-fluid'));?>
                        <!-- <img src="<?php //echo get_template_directory_uri() . '/images/yunus.webp'; ?>" alt="Photo" class="img-fluid"> -->
                    </div>

                    <div>
                        <hr>
                    </div>
                </div>

                <?php endwhile; wp_reset_postdata();?>

            </div>
        </div>
    </div>
</section>
<!-- section-2 end -->

<?php get_footer(); ?>
