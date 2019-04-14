<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller
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
        
        if (!$this->session->has_userdata('login')) {
            redirect('admin/dashboard');
        }
    }

    /*
    !-----------------------------------------
    ! Job Form
    !-----------------------------------------
    */
    public function add_job()
    {

       $data['jobcats']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();

        //echo "<pre>";
        //print_r($data['jobcats']); die;

        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/add-job');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! save_job 
    !----------------------------------------
    */
    
    public function save_job()
    { 
        if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }
       
        $data['job_title'] = $this->input->post('job_title');
        $data['jobcat_id'] = $this->input->post('jobcat_id');
        $data['skill'] = $this->input->post('skill');
        $data['job_descri'] = $this->input->post('job_descri');
        $data['company_name'] = $this->input->post('company_name');
        $data['salary'] = $this->input->post('salary');
        $data['posted_date'] = date('Y-m-d');
        $data['deadline']    = date('Y-m-d');
        if (!empty($_FILES['job_thumbnail']['name'])) {

            $config['upload_path'] = './uploads/job/';
            $config['allowed_types'] = 'gif|jpg|png|gif|JPG|PNG|JPEG|GIF';
            $config['max_size']     = 10000;
            $config['max_width']    = 10000;
            $config['max_height']   = 10000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('job_thumbnail')) {
                
            } else {
                $upload_data = array('upload_data' => $this->upload->data());
                $data['job_thumbnail'] = $upload_data['upload_data']['file_name'];
            }
        }else{
            $data['job_thumbnail'] = 'default.png';
        }
        
        
        $this->db->insert('tbl_job',$data);
        $this->session->set_flashdata('success', 'Data Added successfully .');
        redirect('admin/job-list');
    }

    /*
    !-----------------------------------------
    ! Job Form
    !-----------------------------------------
    */
    public function job_list()
    {
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $data['jobs']  = $this->db->get('tbl_job')->result_object();
        

        //echo "<pre>";
        //print_r($data['jobs']); die;

        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/joblist');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !-----------------------------------------
    ! Edit Job Form
    !-----------------------------------------
    */
    public function edit_job($job_id)
    {
        $this->db->join('tbl_job_category','tbl_job_category.jobcat_id = tbl_job.jobcat_id');
        $this->db->where('job_id',$job_id);
        $data['job']  = $this->db->get('tbl_job')->result_object();
        $data['jobcats']  = $this->db->order_by('jobcat_name','asc')->get('tbl_job_category')->result_object();
    
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/edit_job');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! update_job 
    !----------------------------------------
    */
    
    public function update_job($job_id)
    { 

        $data['job_title'] = $this->input->post('job_title');
        $data['jobcat_id'] = $this->input->post('jobcat_id');
        $data['job_descri'] = $this->input->post('job_descri');
        $data['company_name'] = $this->input->post('company_name');
        $data['salary'] = $this->input->post('salary');
        $data['posted_date'] = date('Y-m-d');
        $data['deadline'] = date('Y-m-d');
        $this->db->set($data);
        $this->db->where('job_id',$job_id);
        $this->db->update('tbl_job');

        $this->session->set_flashdata('success', 'Successfully Updated Data.');
        redirect('admin/job-list');
    }

    /*
    !----------------------------------------
    ! delete View
    !----------------------------------------
    */
    
    public function delete_job($job_id)
    { 

        $this->db->where('job_id',$job_id);
        $this->db->delete('tbl_job');
        $this->session->set_flashdata('success', 'Successfully deleted Data.');
        redirect('admin/job-list');
    }



    /*
    !-----------------------------------------
    ! Add Job Category
    !-----------------------------------------
    */
    public function add_job_category()
    {
        $this->load->view('back/lib/header');
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/add-job-category');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! save_job Category
    !----------------------------------------
    */
    
    public function save_job_category()
    { 
        if (!$this->session->has_userdata('admin')) {
            redirect('admin');
        }

        if($this->db->where(['jobcat_name'=>$this->input->post('jobcat_name')])->get('tbl_job_category')->result_id->num_rows >0 )
        {
            $this->session->set_flashdata('error', 'Category  already exist');
            redirect('admin/add-job-category');
        }
       
        $data['jobcat_name'] = ucfirst($this->input->post('jobcat_name'));
        $this->db->insert('tbl_job_category',$data);
        $this->session->set_flashdata('success', 'Category Added Successfully .');
        redirect('admin/job-category-list');
    }


    /*
    !-----------------------------------------
    ! Job Category List
    !-----------------------------------------
    */
    public function job_category_list()
    {

        $data['jobcats']  = $this->db->get('tbl_job_category')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/job-category-list');
        $this->load->view('back/lib/footer'); 
    }


    /*
    !-----------------------------------------
    ! Edit Job Category
    !-----------------------------------------
    */
    public function edit_job_category($jobcat_id)
    {

        $data['jobcat']  = $this->db->where('jobcat_id',$jobcat_id)->get('tbl_job_category')->result_object();
        $this->load->view('back/lib/header',$data);
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/edit_job_category');
        $this->load->view('back/lib/footer'); 
    }

    /*
    !----------------------------------------
    ! update job category 
    !----------------------------------------
    */
    
    public function update_job_category($jobcat_id)
    { 
        
        $data['jobcat_name'] = ucfirst($this->input->post('jobcat_name'));
        
        $this->db->set($data);
        $this->db->where('jobcat_id',$jobcat_id);
        $this->db->update('tbl_job_category');

        $this->session->set_flashdata('success', 'Category Successfully updated to <strong>'.$data['jobcat_name']."</strong>");
        redirect('admin/job-category-list');
    }

    /*
    !----------------------------------------
    ! delete jobo category
    !----------------------------------------
    */
    
    public function delete_job_category($jobcat_id)
    { 
        $this->db->where('jobcat_id',$jobcat_id);
        $this->db->delete('tbl_job_category');
        $this->session->set_flashdata('success', 'Category Successfully Deleted');
        redirect('admin/job-category-list');
    }

    


}