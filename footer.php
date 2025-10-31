    <!------------- Footer Section Start --------- -->
    <section class="bg-color py-md-5 py-4">
        <div class="container">
            <div class="row">
                <!-- item start  -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="fw-bold text-white">About Us</h5>

                    <?php wp_nav_menu(array(
                        'theme_location' => 'about-us-menu',
                        'container'      => false,
                        'menu_class'     => 'footer-item-hover list-unstyled d-flex flex-column gap-1 mb-0',

                    ));?>

                    <!-- <ul class="footer-item-hover list-unstyled d-flex flex-column gap-1 mb-0">
                        <li><a href="company-profile.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                Company profile</a></li>
                        <li><a href="vision-and-mission.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                Mission &amp; vision</a></li>
                        <li><a href="message-from-chairperson.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                Message from Chairperson</a></li>
                        <li><a href="message-from-managing-director.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                Message from Managing Director</a></li>
                                <li><a href="board-of-directors.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                Board of Directors</a></li>
                        
                        
                        <li><a href="quality-policy.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                Quality policy</a></li>
                    </ul> -->

                </div>
                <!-- item end  -->

                <!-- item start  -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="fw-bold text-white">Products</h5>

                    <?php wp_nav_menu(array(
                        'theme_location' => 'products-menu',
                        'container'      => false,
                        'menu_class'     => 'footer-item-hover list-unstyled d-flex flex-column gap-1 mb-0',

                    ));?>

                    <!-- <ul class="footer-item-hover list-unstyled d-flex flex-column gap-1 mb-0">
                        <li><a href="by-trade-name.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                By trade name</a></li>
                        <li><a href="by-generic-name.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                By generic name</a></li>
                        <li><a href="by-vaccine.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                By vaccine name</a></li>
                        <li><a href="by-animal-health-products.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                By animal health products</a></li>
                    </ul> -->


                </div>
                <!-- item end  -->

                <!-- item start  -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="fw-bold text-white">Facility</h5>

                    <?php wp_nav_menu(array(
                        'theme_location' => 'facility-menu',
                        'container'      =>  false,
                        'menu_class'     => 'footer-item-hover list-unstyled d-flex flex-column gap-1 mb-0',
                    ));?>

                    <!-- <ul class="footer-item-hover list-unstyled d-flex flex-column gap-1 mb-0">
                        <li><a href="production-facilities.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i> Production facilities</a></li>
                        <li><a href="r-and-d-facilities.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                R&amp;D facilities</a></li>
                        <li><a href="virtual-tours.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i>
                                Virtual tours</a></li>
                        <li><a href="photo-gallery.html" class="text-decoration-none text-white"> <i class="bi bi-caret-right"></i> Photo
                                gallery</a></li>
                    </ul> -->

                </div>
                <!-- item end  -->

                <!-- item start  -->
                <div class="col-md-3 mb-md-0">
                    <h5 class="fw-bold text-white">Contact Us</h5>

                    <div class="d-flex gap-2 mb-2">
                        <div><i class="bi bi-geo-alt-fill text-white"></i></div>
                        <div class="text-white">Brahmanbaria-3400, Bangladesh</div>
                    </div>
                    <div class="d-flex gap-2 mb-2">
                        <div><i class="bi bi-envelope text-white"></i></div>
                        <div class="text-white">hm.murad66@gmail.com</div>
                    </div>
                    <div class="d-flex gap-2">
                        <div><i class="bi bi-telephone text-white"></i></div>
                        <div class="text-white">+8801716395866</div>
                    </div>

                </div>
                <!-- item end  -->
            </div>
        </div>
    </section>

    <!-- footer copyright start  -->
    <section class="bg-secondary text-white">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 py-2 text-center">
                    <small class="mb-0 ">© 2025. Ascend Pharmaceuticals Ltd. All rights reserved.</small>
                </div>
                <div class="col-md-1 col-12 border-end" width="1px"></div>
                <div class="col-12 border-bottom d-md-none d-block"></div>
                <div class="col-md-5 py-2 text-center">
                    <small class="mb-0 developer-address-hover">Site by <a href="#"
                            class="text-decoration-none text-white"> webnewsdesign.com</a></small>
                </div>
            </div>
        </div>
    </section>
    <!-- footer copyright End  -->
    <!------------- Footer Section End --------- -->




    <script src="js/bxslider.js"></script>

    <?php wp_footer(); ?>
</body>

</html>