<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("includes/config.php");

class News extends CI_controller{
	public function __construct()
    {
            parent::__construct();
            $this->error = "";
            
            //Load url helper for use later.(base_url()).
            $this->load->helper("url");
    }

	public function index()
	{
		//Load url helper for use later.(base_url()).
		redirect(base_url("index.php"));
	}
}


?>