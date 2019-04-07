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
        $data['jobs']  = $this->db->order_by('job_id','desc')->limit(3)->get('tbl_job')->result_object();
        $data['featuredjobs']  = $this->db->where('featured_job','1')->limit(4)->get('tbl_job')->result_object();



        $this->load->view('public/lib/header',$data);
        $this->load->view('public/lib/slider');
        $this->load->view('public/index');
        $this->load->view('public/lib/footer');
        
    }

    /*
    !-----------------------------------------
    ! Job Form
    !-----------------------------------------
    */
    public function jobs()
    {
        $data['jobcats']  = $this->db->get('tbl_job_category')->result_object();
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $data['jobs']  = $this->db->order_by('job_id','desc')->get('tbl_job')->result_object();

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/jobs');
        $this->load->view('public/lib/footer'); 
    }


    /*
    !-----------------------------------------
    ! Job Search
    !-----------------------------------------
    */
    public function job_single($id, $slug = '')
    {
        //echo $id; die;
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->where(['job_id'=>$id]);
        $data['job']  = $this->db->get('tbl_job')->result_object();
        
        //echo "<pre>";
        //print_r($data['job']); die;

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/job_single');
        $this->load->view('public/lib/footer'); 
    }


     /*
    !-----------------------------------------
    ! Job Search
    !-----------------------------------------
    */
    public function search_job($jobcat_id='', $Marketing = '', $location='', $startging='',$ending='')
    {
        
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        if (isset($_GET['jobcat_id'])) {
            $this->db->like('tbl_job.job_title', $this->input->get('jobcat_id'));
        }

        if (isset($_GET['location'])) {
            $this->db->or_where('tbl_job.location', $this->input->get('location'));
        }

        // if (isset($_GET['starting_salary']))
        //  {
        //   $this->db->where('tbl_job.salary ',$this->input->get(30000));
        // }






        if (isset($_GET['ending_salary'])) {
           $this->db->where("tbl_job.salary = '00-00-00 00:00:00')");
        }

        

        

        
        $this->db->order_by('job_id','desc')->limit(10);
        $data['jobs']  = $this->db->get('tbl_job')->result();
        //echo "<pre>";
        //print_r($data['jobs']); die;

        
        
        $data['jobcats']  = $this->db->get('tbl_job_category')->result_object();

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/job_search');
        $this->load->view('public/lib/footer'); 
    }

     /*
    !--------------------------------------------------------
    !      Proifle  View
    !--------------------------------------------------------
    */
    public function profile()
    {
         $data['jobcats'] = $this->db->order_by('jobcat_name')->get('tbl_job_category')->result_object();
         $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
         $data['jobs']  = $this->db->order_by('job_id','desc')->limit(3)->get('tbl_job')->result_object();
        $data['featured_jobs']  = $this->db->where('featured_job','1')->limit(4)->get('tbl_job')->result_object();



        $this->load->view('public/lib/header',$data);
        
        $this->load->view('public/profile');
        $this->load->view('public/lib/footer');
        
    }
    


}