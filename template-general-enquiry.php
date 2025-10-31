<?php 
/**
 * Template Name: General Enquiry
 */
get_header();
get_template_part('includes/breadcrums');
?>

    <!--*** Contact information & Get in touch Section Start *** -->

    <div class="container-fluid">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-5">
                    <div class="row">
                        <div class="py-5 px-4 bg-color">
                            <div class="col-12 mb-5">
                                <h4 class="mb-2 text-white">Contact Information</h4>
                                <hr class="text-white">
                                <div class="d-flex gap-2">
                                    <i class="bi bi-geo-alt text-white" aria-hidden="true"></i>
                                    <div>
                                        <a href="#" class="text-decoration-none text-white d-block mb-2">
                                            House# 00, Block# 0, Road# 0 Banasree,
                                            Dhaka 1219, Bangladesh
                                        </a>
                                    </div>
                                </div>
                                <a href="tel:+880123465674" class="text-decoration-none d-block text-white mb-2">
                                    <i class="bi bi-phone-vibrate"></i> +880123465674
                                </a>
                                <a href="mailto:ascenpharma@gmail.com" class="text-decoration-none d-block text-white d-block mb-2">
                                    <i class="bi bi-envelope-at"></i> ascenpharma@gmail.com
                                </a>
                            </div>

                            <div class="col-12">
                                <h4 class="mb-3 text-white">Follow Us</h4>

                                <hr class="text-white">
                                <div class="social-logo">
                                    <ul class="list-unstyled d-flex ps-0 gap-3">
                                        <li class="me-2">
                                            <a href="#" class="text-decoration-none text-white"><i
                                                    class="bi bi-instagram fs-4"></i> </a>
                                        </li>

                                        <li class="me-2">
                                            <a href="#" class="text-decoration-none text-white"><i
                                                    class="bi bi-facebook fs-4"></i> </a>
                                        </li>

                                        <li class="me-2">
                                            <a href="#" class="text-decoration-none text-white"><i
                                                    class="bi bi-youtube fs-4"></i> </a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <!-- Get In Touch part start  -->

                <div class="col-md-7 mt-md-0 mt-3 ">

                    <div class="form-part border">

                        <div class="d-flex p-3">
                            <div class="vr icon-color opacity-100" style="width:5px ; height: 35px;"></div>
                            <h3 class="ps-3">Get In Touch</h3>
                        </div>

                        <div class="px-3">
                            <label for="exampleFormControlInput2" class="form-label">Enter Your Name</label>
                            <input type="name" class="form-control border-0 border-bottom rounded-0"
                                id="exampleFormControlInput2">

                        </div>

                        <div class="px-3">
                            <label for="exampleFormControlInput3" class="form-label pt-2">Enter Your Phone</label>
                            <input type="phone" class="form-control border-0 border-bottom rounded-0"
                                id="exampleFormControlInput3">
                        </div>

                        <div class="px-3">
                            <label for="exampleFormControlInput1" class="form-label pt-2">Enter Your Email</label>
                            <input type="email" class="form-control border-0 border-bottom rounded-0"
                                id="exampleFormControlInput1">
                        </div>

                        <div class="px-3">
                            <label for="exampleFormControlTextarea1" class="form-label pt-2">Type Message</label>
                            <textarea class="form-control border-0 border-bottom rounded-0"
                                id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="py-3 d-flex justify-content-center">
                            <a href="#"> <button type="submit" class="brand-color border-0 py-2 px-3 rounded-1"> Send
                                    Message
                                </button></a>
                        </div>

                    </div>

                </div>
                <!-- Get In Touch part end  -->
            </div>
        </div>
    </div>
    <!--*** Contact information & Get in touch Section End *** -->

    <!-- Location Map Start  -->

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <div class="mapouter" style="position:relative; text-align:right;  height:450px;">
                        <div class="gmap_canvas" style="overflow:hidden; background:none!important;  height:450px;">
                            <iframe height="450px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed/v1/place?q=mouck%20market%2C%20malibag&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                        <a href="https://norsumediagroup.com/embed-google-map-website-free" target="_blank"
                            rel="noopener noreferrer" class="gme-generated-link">Embed Map on Website for Free</a>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Location Map End -->



 <?php get_footer();?>