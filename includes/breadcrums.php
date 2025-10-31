<!--*** Breadcumb Design Start *** -->
<div class="container-fluid vig-bg-photo position-relative px-0">
    <div class="vig-bg-color position-absolute d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 fs-3 d-flex justify-content-center align-items-center">
                    <p class="mb-0"> <a href="<?php echo esc_url(home_url());?>" class="text-decoration-none text-white"> Home </a> </p>
                    <small class="text-white px-md-3 px-2 fs-6"> <i class="bi bi-chevron-double-right"></i> </small>
                    <p class="mb-0 text-white fw-bold text-center"> 
                        
                    <?php 
                    if ( is_page() ) {
                        echo get_the_title();
                    }
                    ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--*** Breadcumb Design End *** -->