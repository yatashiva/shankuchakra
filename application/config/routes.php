<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index 
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['aboutUs'] = 'home/about_us';

$route['technologies'] = 'technologies';
$route['Artificial_Intelligence'] = 'technologies/tech_details';
$route['Machine_Learning'] = 'technologies/ml';
$route['computer_vision'] = 'technologies/computer_vision';
$route['internet_of_things'] = 'technologies/internet_of_things';
$route['geographic_information_systems'] = 'technologies/geographic_information_systems';
$route['robotic_technology'] = 'technologies/robotic_technology';
$route['drone_technology'] = 'technologies/drone_technology';
$route['3d_Printing_technology'] = 'technologies/three_d_Printing_technology';

$route['services'] = 'services';
$route['soil_and_water_health_monitoring'] = 'services/soil_and_water_health_monitoring';
$route['crop_production_using_computer'] = 'services/crop_production';
$route['agri_machine_development'] = 'services/agri_machine_development';
$route['crop_health_monitoring'] = 'services/crop_health_monitoring';
$route['crop_harvesting'] = 'services/crop_harvesting';
$route['post_harvesting'] = 'services/post_harvesting';
$route['pre_and_final_food_processing'] = 'services/pre_and_final_food_processing';
$route['team'] = 'team';

$route['gallery'] = 'gallery';
$route['contact_us'] = 'contact_us';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
