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
    public function search_job()
    {
        $search = '';
        $data['searchkey'] = '';
        $this->db->join('tbl_job_category','tbl_job.jobcat_id = tbl_job_category.jobcat_id');

        if (isset($_GET['location'])) {

            $data['searchkey']  .= "Location: ".$this->input->get('location');
            $this->db->or_like('location', $this->input->get('location'));

        } elseif(isset($_GET['category'])){

            $data['searchkey']  .= ". Category: ".$this->input->get('category');
            $this->db->or_like('tbl_job_category.jobcat_name', $this->input->get('category'));

        }elseif(isset($_GET['starting_salary'])  && isset($_GET['ending_salary'])){

            $data['searchkey']  .= ". Starting Salary: ".$this->input->get('starting_salary'). " and Ending Salary ".$this->input->get('ending_salary');

            $this->db->where('tbl_job.salary >=', $this->input->get('starting_salary'));
            $this->db->where('tbl_job.salary <=', $this->input->get('ending_salary'));
        }else{
            $data['searchkey']  .= $search;
            $this->db->like('job_title', $this->input->get('search'));
            $this->db->or_like('location', $this->input->get('search'));
            $this->db->or_like('salary', $this->input->get('search'));
        }

        $this->db->order_by('job_id','desc')->limit(10);
        $data['jobs']  = $this->db->get('tbl_job')->result();
       
        $data['jobcats']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
        

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/search');
        $this->load->view('public/lib/footer'); 
    }

       /*
    !-----------------------------------------
    ! Job Search
    !-----------------------------------------
    */
    public function jobs_category($category="")
    {
       // echo $this->input->get('category'); die;
        $this->db->join('tbl_job_category','tbl_job.jobcat_id = tbl_job_category.jobcat_id');
        $this->db->where('tbl_job_category.jobcat_name',$this->input->get('category'));
        $this->db->order_by('job_id','desc')->limit(10);
        $data['jobs']  = $this->db->get('tbl_job')->result();
       
        $data['jobcats']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
        $data['category'] = $this->input->get('category');

        $this->load->view('public/lib/header',$data);
        $this->load->view('public/jobs_category');
        $this->load->view('public/lib/footer'); 
    }


    


}