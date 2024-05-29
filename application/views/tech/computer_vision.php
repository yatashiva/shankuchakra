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
                            <h2>Computer Vision</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Computer Vision</li>
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
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/tech/ai3.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>

                            <h2>Crop Monitoring</h2>
                            <p>Computer Vision systems can analyse images captured by drones or cameras to monitor crop growth, detect weeds, and assess plant health without the need for manual inspection.</p>

                            <!-- Two Column -->
                            <div class="two-column">
                                <div class="row">
                                    <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/tech/cm1.jpg" alt=""></figure>
                                    </div>
                                    <div class="text-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/tech/cm2.jpg" alt=""></figure>
                                    </div>

                                </div>
                            </div>

                            <h3>Harvesting Automation</h3>

                            <p>Computer Vision can guide robotic harvesters to identify and selectively pick ripe fruits or vegetables, reducing labour costs and increasing efficiency.</p>

                            <h3>Quality Control</h3>
                            <p>Computer Vision algorithms can inspect harvested produce for defects or irregularities, ensuring only high-quality products reach the market.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- service-details-area-end -->
</main>
<!-- main-area-end -->