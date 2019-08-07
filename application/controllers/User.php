<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("includes/config.php");

class User extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            
            //Load CI url helper for use later.(base_url()).
            $this->load->helper("url");
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view("nav");
        $this->load->view('construction');
        $this->load->view('footer');
    }

    public function profile()
    {
        $this->load->view('header');
        $this->load->view("nav");
        $this->load->view('construction');
        $this->load->view('footer');
    }

    public function logout()
    {
        $this->load->view('header');
        $this->load->view("nav");
        $this->load->view('construction');
        $this->load->view('footer');
    }

    public function personalize()
    {
        $this->load->view('header');
        $this->load->view("nav");
        $this->load->view('construction');
        $this->load->view('footer');
    }

    private function get_user_data()
    {

    }

    private function update_user_data()
    {

    }

    private function add_interests()
    {

    }

    private function remove_interest()
    {
        
    }
}
