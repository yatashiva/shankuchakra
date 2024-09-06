<!-- main-area -->
<main>
    <!-- search-popup -->
    <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content search-popup">
                <div class="text-center">
                    <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                </div>
                <div class="row search-outer">
                    <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                    <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /search-popup -->
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo base_url() ?>assets/img/tech.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>3D Printing Technology</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">3D Printing Technology</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- service-details-area -->
    <div class="about-area5 about-p p-relative">
        <div class="container pt-120 pb-90">
            <div class="row">
                <!-- #right side -->
                <?php $this->load->view('includes/side_menu') ?>
                <!-- #right side end -->
                <div class="col-lg-8 col-md-12 col-sm-12 order-1">
                    <div class="service-detail">
                        <div class="content-box">
                            <!-- Two Column -->
                            <div class="two-column">
                                <div class="row">
                                    <div class="image-column col-xl-12 col-lg-12 col-md-12">
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/tech/3d1.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                            <h2>Customised Equipment</h2>
                            <p>3D printing creates customized agricultural tools and parts on-demand, reducing lead times and costs associated with traditional manufacturing. Farmers can design and produce equipment tailored to their specific needs, ensuring that tools are perfectly suited to their operations. This flexibility enhances efficiency and productivity, as farmers can quickly adapt to changing requirements.</p>
                            <!-- Two Column -->
                            <div class="two-column">
                                <div class="row">
                                    <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/tech/3d2.jpg" alt=""></figure>
                                    </div>
                                    <div class="text-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/tech/3d3.jpg" alt=""></figure>
                                    </div>

                                </div>
                            </div>
                            <h3>Prototyping</h3>
                            <p>Farmers use 3D printing to rapidly prototype new designs for farm equipment or infrastructure, allowing for quick iteration and testing before full-scale production. This rapid prototyping capability enables the development of innovative solutions and the ability to test new ideas without significant investment. Successful prototypes can then be scaled up for wider use, driving continuous improvement and innovation in farming practices.</p>
                            <h3>Vertical Farming</h3>
                            <p>3D printing fabricates structures for vertical farming systems, optimizing space utilization and increasing crop yields in urban environments. These structures can be designed to maximize light exposure, water efficiency, and space use, creating highly productive indoor farming environments. Vertical farming supported by 3D printing offers a sustainable solution for food production in cities, reducing the need for transportation and ensuring fresh produce year-round.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- service-details-area-end -->
</main>
<!-- main-area-end -->