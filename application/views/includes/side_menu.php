<div class="col-sm-12 col-md-12 col-lg-4 order-2">
    <aside class="sidebar services-sidebar">

        <!-- Category Widget -->
        <div class="sidebar-widget categories">
            <div class="widget-content">
                <h2 class="widget-title"> Technologies</h2>
                <!-- Services Category -->
                <ul class="services-categories">
                    <li class="<?= ($this->uri->segment(1) === 'Artificial_Intelligence') ? 'active' : '' ?>"><a href="<?php echo base_url('Artificial_Intelligence') ?>">Artificial Intelligence (AI)</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'Machine_Learning') ? 'active' : '' ?>"><a href="<?php echo base_url('Machine_Learning') ?>">Machine Learning (ML)</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'computer_vision') ? 'active' : '' ?>"><a href="<?php echo base_url('computer_vision') ?>">Computer Vision</a></li>

                    <li class="<?= ($this->uri->segment(1) === 'internet_of_things') ? 'active' : '' ?>"><a href="<?php echo base_url('internet_of_things') ?>">Internet of Things (IoT)</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'geographic_information_systems') ? 'active' : '' ?>"><a href="<?php echo base_url('geographic_information_systems') ?>">GPS and GIS</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'robotic_technology') ? 'active' : '' ?>"><a href="<?php echo base_url('robotic_technology') ?>">Robotic Technology</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'drone_technology') ? 'active' : '' ?>"><a href="<?php echo base_url('drone_technology') ?>">Drone Technology</a></li>
                    <li class="<?= ($this->uri->segment(1) === '3d_Printing_technology') ? 'active' : '' ?>"><a href="<?php echo base_url('3d_Printing_technology') ?>">3D Printing Technology</a></li>
                </ul>
            </div>
        </div>

        <div class="sidebar-widget brochures-box">
            <div class="inner">
                <h4 class="widget-title">Services</h4>
                <ul class="services-categories">
                    <li class="<?= ($this->uri->segment(1) === 'soil_and_water_health_monitoring') ? 'active' : '' ?>"><a href="<?php echo base_url('soil_and_water_health_monitoring') ?>">Soil and Water Health Monitoring</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'crop_production_using_computer') ? 'active' : '' ?>"><a href="<?php echo base_url('crop_production_using_computer') ?>">Crop Production using Computer</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'agri_machine_development') ? 'active' : '' ?>"><a href="<?php echo base_url('agri_machine_development') ?>">Agri-Machine Development</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'crop_health_monitoring') ? 'active' : '' ?>"><a href="<?php echo base_url('crop_health_monitoring') ?>">Crop Health Monitoring</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'crop_harvesting') ? 'active' : '' ?>"><a href="<?php echo base_url('crop_harvesting') ?>">Crop Harvesting</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'post_harvesting') ? 'active' : '' ?>"><a href="<?php echo base_url('post_harvesting') ?>">Post-Harvesting and Packaging</a></li>
                    <li class="<?= ($this->uri->segment(1) === 'pre_and_final_food_processing') ? 'active' : '' ?>"><a href="<?php echo base_url('pre_and_final_food_processing') ?>">Pre and Final Food Processing</a></li>

                </ul>
            </div>
        </div>
    </aside>
</div>