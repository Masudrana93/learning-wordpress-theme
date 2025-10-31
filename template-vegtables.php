<?php
/**
 * Template Name: Vegtables
 */
get_header();

get_template_part('includes/breadcrums');
?>



<!--*** Section Start *** -->

<div class="container-fluid">
    <div class="container">
        <div class="row my-5">

            <div class="col-md-3 mb-md-4 mb-3">
                <div class="border border-danger rounded-2 p-2">
                    <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/brinjal-500x500.webp';?>" alt="Vegtable's photo" class="img-fluid mb-2 rounded-2"></a>

                    <h4> <a href="#" class="text-decoration-none">Brinjal</a> </h4>
                    <p class="text-secondary">Contains antioxidants, such as nasunin, which help protect cells from damage and may prevent certain cancers.</p>
                </div>

            </div>

           
        </div>
    </div>
</div>
<!--*** Section End *** -->

<?php get_footer(); ?>







<!-- For making dynamic a page from html to wordpress with php

1. design in html class 

for dynamic:   
1. data insert into database (post type register)
2. template page create with php and then select specific page in backend
3. query and loop  -->