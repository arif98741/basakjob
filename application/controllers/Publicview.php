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
        $data['users'] = $this->db->get('tbl_user')->result_object();

        //$this->load->view('public/lib/header',$data);
        //$this->load->view('public/lib/slider');
        $this->load->view('public/index');
        //$this->load->view('public/lib/footer');
        
        
    }



}