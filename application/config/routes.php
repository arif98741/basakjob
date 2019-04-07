<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] 	 = 'publicview';

/*
!---------------------------------------------------
! 	Admin
!---------------------------------------------------
*/
$route['admin'] 			= 'admin/index';
$route['admin/login'] 		= 'admin/login';
$route['admin/add-job'] 	= 'job/add_job';
$route['admin/job-list'] 	= 'job/job_list';
$route['admin/edit_job/(:num)']= 'job/edit_job/$1';
$route['admin/update_job/(:num)']= 'job/update_job/$1';
$route['admin/delete_job/(:num)']= 'job/delete_job/$1';
$route['admin/add-job-category']= 'job/add_job_category';
$route['admin/job-category-list']= 'job/job_category_list';
$route['admin/edit-job-category/(:num)']= 'job/edit_job_category/$1';
$route['admin/update-job-category/(:num)']	= 'job/update_job_category/$1';
$route['admin/delete-job-category/(:num)']	= 'job/delete_job_category/$1';


$route['jobs']				 = 'publicview/jobs';
$route['jobs/(:num)'] = 'publicview/job_single/$1';
$route['jobs/search']		 = 'publicview/search_job';
$route['jobs/category']		= 'publicview/jobs_category';
$route['jobs/job_single/(:num)']	       = 'publicview/job_single/$1';
$route['profile']	       = 'registration/profile';
$route['registration']	   = 'registration/registration';
$route['login']	  		   = 'registration/login';
$route['logout']	  	    = 'registration/logout';


$route['404_override'] 		   = 'error404'; //override by controller
$route['translate_uri_dashes'] = FALSE;


