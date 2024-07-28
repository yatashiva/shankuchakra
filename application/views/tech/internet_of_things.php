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
                            <h2>Internet of Things</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Internet of Things</li>
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
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/tech/ai4.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>

                            <h2>Precision Irrigation</h2>
                            <p>IoT sensors monitor soil moisture levels and weather conditions in real-time, allowing farmers to optimize irrigation schedules and conserve water. By providing precise information on soil conditions, IoT helps in applying the right amount of water at the right time. This reduces water usage, lowers costs, and ensures that crops receive optimal hydration for healthy growth.</p>

                            <!-- Two Column -->
                            <div class="two-column">
                                <div class="row">
                                    <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/tech/ir1.jpg" alt=""></figure>
                                    </div>
                                    <div class="text-column col-xl-6 col-lg-12 col-md-12">
                                        <figure class="image"><img src="<?php echo base_url() ?>assets/img/tech/ir2.jpg" alt=""></figure>
                                    </div>

                                </div>
                            </div>
                            <h3>Livestock Monitoring</h3>

                            <p>IoT devices track the health and location of livestock, providing early warning signs of illness or distress and enabling timely intervention. Wearable sensors monitor vital signs and activity levels, alerting farmers to potential health issues before they become serious. This proactive approach improves animal welfare, reduces veterinary costs, and enhances the efficiency of livestock management.</p>

                            <h3>Smart Farming:</h3>
                            <p>IoT-enabled devices such as smart tractors and drones automate tasks like planting, fertilizing, and spraying pesticides, increasing efficiency and reducing labor requirements. These smart machines use data from sensors to perform tasks with high precision, ensuring optimal use of inputs and minimizing environmental impact. Automation of routine tasks frees up farmers to focus on more strategic activities, improving overall farm management.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- service-details-area-end -->
</main>
<!-- main-area-end -->