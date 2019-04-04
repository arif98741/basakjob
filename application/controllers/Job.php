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
        $this->load->view('back/lib/header');
        $this->load->view('back/lib/sidebar');
        $this->load->view('back/add-job');
        $this->load->view('back/lib/footer'); 
    }

  


}