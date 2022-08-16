
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Home load controller
$route['default_controller'] = 'home_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Login load controller

$route['Login']='login_controller/index';
$route['Logout']='login_controller/logout';
$route['Admin']='admin_controller/index';
$route['Setting']='admin_controller/setting';


$route['Subject']='Subject_controller/index';
$route['Subject_Delete']='subject_controller/delete';
$route['Subject_Update']='subject_controller/update';
$route['Subject_Update_Data']='subject_controller/update_data';


// Student contoller load 
$route['Student']='student_controller/index';
$route['Student_Delete']='student_controller/delete';
$route['Student_Update']='student_controller/update';
$route['Student_Update_Data']='student_controller/update_data';


$route['Result']='result_controller/index';
$route['Result_Delete']='result_controller/delete';
$route['Result_Update']='result_controller/update';
$route['Result_Update_Data']='result_controller/update_data';
