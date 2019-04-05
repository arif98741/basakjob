<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Publicview extends CI_Controller
{

    /*
    !--------------------------------------------------------
    !       Constructor Load During Creation of Object
    !--------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('security');
    }

    /*
    !--------------------------------------------------------
    !       Default Function for Public View
    !--------------------------------------------------------
    */
    public function index()
    {
        $data['jobcats'] = $this->db->order_by('jobcat_name')->get('tbl_job_category')->result_object();
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $data['jobs']  = $this->db->limit(5)->get('tbl_job')->result_object();
        $data['featured_jobs']  = $this->db->where('featured_job','1')->limit(4)->get('tbl_job')->result_object();

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/lib/slider');
        $this->load->view('public/index');
        $this->load->view('public/lib/footer');
        
        
    }



}