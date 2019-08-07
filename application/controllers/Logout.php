<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("includes/config.php");

class Logout extends CI_controller{

	public function index()
	{
		//Load url helper for use later.(for base_url()).
		$this->load->helper("url");
		query("INSERT INTO log (username, IP, activity) VALUES( ?, ?, ?)", $_SESSION["username"], get_ip(),"User logged out" );
		logout();
		redirect(base_url("index.php/home"));
	}

}


?>