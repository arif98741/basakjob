<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] 	 = 'publicview';


/*
!---------------------------------------------------
! 	Controller For User
!---------------------------------------------------
*/
$route['login'] 		  = 'main/index';
//$route['registration'] 	  = 'main/registration';
$route['dashboard'] 	  = 'main/dashboard';
$route['settings'] 		  = 'main/settings';
$route['profile'] 		  = 'main/profile';
$route['profile_update']  = 'main/profile_update';
$route['apply_rule']  	  = 'main/apply_rule';
$route['switch_system']   = 'main/switch_system';
$route['switch_admit']    = 'main/switch_admit';
$route['apply_rule']      = 'main/apply_rule';
$route['pay_rule']        = 'main/pay_rule';
$route['apply_fee']       = 'main/apply_fee';
$route['buy_sms']         = 'main/buy_sms';
$route['edit_student/(:num)']   = 'main/edit_student/$1';
$route['admit_rule']      = 'main/admit_rule';
$route['public_notice']   = 'main/public_notice';
$route['logout'] 		  = 'main/logout';



/*
!---------------------------------------------------
! 	Admin
!---------------------------------------------------
*/
$route['admin'] 			= 'admin/index';
$route['admin/add-job'] 	= 'job/add_job';
$route['admin/job-list'] 	= 'job/job_list';
$route['admin/edit_job/(:num)']= 'job/edit_job/$1';
$route['admin/update_job/(:num)']= 'job/update_job/$1';
$route['admin/delete_job/(:num)']= 'job/delete_job/$1';






$route['404_override'] 		   = 'error404'; //override by controller
$route['translate_uri_dashes'] = FALSE;

