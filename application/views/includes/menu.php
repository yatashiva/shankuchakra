<!-- header -->
<header class="header-area header-three">
    <div class="header-mid d-none d-md-block pt-25 pb-25">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-12 d-none d-md-block">
                    <div class="logo">
                        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 text-right d-none d-lg-block">
                    <div class="header-cta">
                        <ul>
                            <li>
                                <div class="call-box">
                                    <div class="icon">
                                        <i class="fal fa-phone-alt"></i>
                                    </div>
                                    <div class="text">
                                        <span>Call Now:</span>
                                        <strong>+91 854 789-8746</strong>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="call-box">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <span>Email Now:</span>
                                        <strong>info@scagro.com</strong>
                                    </div>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="call-box">
                                    <div class="icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="text">
                                        <span>Working Hours:</span>
                                        <strong>Mon - Sat 9:00Am - 9:00Pm</strong>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li>
                                <a href="contact.html" class="btn ss-btn"><i class="fal fa-long-arrow-right"></i> Read more</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-12  d-lg-none d-x-none">
                        <div class="logo">
                            <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10">

                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-sub">
                                        <a href="<?php echo base_url() ?>">Home</a>
                                    </li>
                                    <li><a href="<?php echo base_url('aboutUs') ?>">About Us</a></li>
                                    <li class="has-sub">
                                        <a href="<?php echo base_url('technologies') ?>">Technologies</a>
                                        <!-- <ul>
                                            <li><a href="<?php echo base_url('services') ?>">Technologies</a></li>
                                            <li><a href="<?php echo base_url('services/details') ?>">Services Details</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="<?php echo base_url('services') ?>">Services</a></li>
                                    <!-- <li class="has-sub"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="<?php echo base_url('Contact_us') ?>">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 text-right d-none d-lg-block">
                        <div class="login">
                            <ul>
                                <li><a href="#" class="menu-tigger"><img src="<?php echo base_url() ?>assets/img/icon/search.png" alt="logo"></a></li>
                                <li>
                                    <a href="#" class="menu-tigger"><img src="<?php echo base_url() ?>assets/img/icon/bar-menu.png" alt="logo"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
<!-- offcanvas-area -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fas fa-times"></i></span>
    <!-- <form role="search" method="get" id="searchform" class="searchform" action="">
        <input type="text" name="s" id="search" placeholder="Search" />
        <button><i class="fa fa-search"></i></button>
    </form> -->

    <div id="cssmenu3" class="menu-one-page-menu-container">
        <ul class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo base_url() ?>">Home</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo base_url('aboutUs') ?>">About Us</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo base_url('technologies') ?>">Technologies</a></li>
            <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Team </a></li> -->
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo base_url('services') ?>">Services</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo base_url('Contact_us') ?>">Contact</a></li>
        </ul>
    </div>

    <div id="cssmenu2" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-12" class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+91 91234 56897</span></a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
        </ul>
    </div>
</div>
<div class="offcanvas-overly"></div>
<!-- offcanvas-end -->