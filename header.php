<!doctype html>
<html <?php language_attributes();?> >

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head();?>

</head>

<body>

    <!-------------- Header Section Start - ------->
    <!-- navbar start  -->
    <nav class="navbar navbar-expand-lg bg-color shadow-lg py-md-4">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="<?php echo esc_url(home_url());?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/main-logo.png');?>" alt="ascendpharma.com.bd main logo" class="img-fluid main-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- WP Dynamic Header Menu -->
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container'      =>  false,
                    'menu_class'     => 'navbar-nav ms-auto',
                    'walker'         => new Wp_Bootstrap_Navwalker(),
                ));
            ?>

                <!-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu hover-for-dropdown rounded-0 py-0 bg-dropdown border-0 shadow">
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="company-profile.html">Company Profile</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="vision-and-mission.html">Vision &
                                    Mission</a></li>
                           <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="message-from-chairperson.html">Message from Chairperson</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="message-from-managing-director.html">Message from Managing Director</a></li>
                            
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="board-of-directors.html">Board of Directors</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="quality-policy.html">Quality Policy</a></li>
                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Divisions
                        </a>
                        <ul class="dropdown-menu hover-for-dropdown rounded-0 py-0 bg-dropdown border-0 shadow">
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="vaccine-division.html">Vaccine
                                    Division</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="chemical-division.html">Chemical
                                    Division</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="herbal-and-nutricare-division.html">Herbal &
                                    Nutricare Division</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="animal-health-division.html">Animal
                                    Health Division</a></li>
                        </ul>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu hover-for-dropdown rounded-0 py-0 bg-dropdown border-0 shadow">
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="by-trade-name.html">By Trade
                                    Name</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="by-generic-name.html">By Generic Name</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="by-vaccine.html">By
                                    Vaccine</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="by-animal-health-products.html">By Animal
                                    Health Products</a></li>
                        </ul>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Facilities
                        </a>
                        <ul class="dropdown-menu hover-for-dropdown rounded-0 py-0 bg-dropdown border-0 shadow">
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="production-facilities.html">Production
                                    Facilities</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="r-and-d-facilities.html">R&D
                                    Facilities</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white"
                                    href="warehouse.html">Warehouse</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="virtual-tours.html">Virtual
                                    Tours</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="photo-gallery.html">Photo
                                    Gallery</a></li>
                        </ul>

                    </li>

                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Global Operations
                        </a>
                        <ul class="dropdown-menu hover-for-dropdown rounded-0 py-0 bg-dropdown border-0 shadow">
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="our-global-reach-and-recognitions.html">Our Global
                                    Reach & Recognitions</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white"
                                    href="international-business.html">International Business</a></li>
                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="distribution-network.html">Distribution Network</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Career
                        </a>
                        <ul class="dropdown-menu hover-for-dropdown rounded-0 py-0 bg-dropdown border-0 shadow">
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="join-with-us.html">Join With
                                    Us</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="who-works-here.html">Who Works
                                    Here</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="our-culture-and-values.html">Our Culture
                                    & Values</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="working-environment.html">Working
                                    Environment</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="career-growth.html">Career
                                    Growth</a></li>
                        </ul>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Contact & Enquiry
                        </a>
                        <ul class="dropdown-menu hover-for-dropdown rounded-0 py-0 bg-dropdown border-0 shadow">
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white"
                                    href="general-enquiry.html">General
                                    Enquiry</a></li>
                            <li><a class="dropdown-item py-2 border-bottom border-white text-white" href="product-complain.html">Product
                                    Complain</a></li>
                        </ul>

                    </li>


                </ul> -->

            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-------- Header Section End -------------- -->
