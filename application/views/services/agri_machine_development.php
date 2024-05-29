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
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo base_url() ?>assets/img/bg/bdrc-bg.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Agri-Machine Development</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Agri-Machine Development using Robotics and 3D Printing</li>
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
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/gallery/gallery-01.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>

                            <h2> Customised Equipment </h2>
                            <p>Utilise 3D Printing technology to rapidly prototype and manufacture customised agricultural equipment tailored to specific farm requirements.</p>

                            <!-- Two Column -->
                            <div class="two-column">
                                <div class="row">
                                    <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/gallery/gallery-02.jpg" alt=""></figure>
                                    </div>
                                    <div class="text-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/gallery/gallery-03.jpg" alt=""></figure>
                                    </div>

                                </div>
                            </div>

                            <h3>Autonomous Systems</h3>

                            <p>Develop robotic systems for tasks such as planting, weeding, and harvesting, enhancing efficiency and reducing labour costs.</p>

                            <h3>Remote Monitoring and Control</h3>
                            <p>Implement IoT connectivity in agricultural machinery to enable remote monitoring, diagnostics, and control, improving operational efficiency and reducing downtime.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- service-details-area-end -->
</main>
<!-- main-area-end -->