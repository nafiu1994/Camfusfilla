<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("includes/config.php");

class Home extends CI_controller{
	public function __construct()
    {
            parent::__construct();
            $this->error = "";
            
            //Load CI url helper for use later.(base_url()).
            $this->load->helper("url");
    }

	public function index()
	{
		$data["breaking_news"] = $this->get_breaking_news();
		$data["headlines"] = $this->get_headlines();
		$data["category"]["fila"] = $this->get_news_category("fila");
		$data["category"]["business"] = $this->get_news_category("business");
		$data["category"]["entertainment"] = $this->get_news_category("entertainment");


		//Load home page.
		$this->load->view("header");
		$this->load->view("nav");
		$this->load->view("home", $data);
		$this->load->view("footer");
	}

	/* 
	** returns the 5 most recent articles.
	**
	*/
	private function get_headlines()
	{
		$results = query("SELECT * FROM article ORDER BY time_published DESC LIMIT 5");
		return $results;
	}

	//Get user preferencial news
	private function get_user_news($user_id)
	{

	}

	/* Get news by category 
	** accepts category
	** returns 4 articles from that category.
	**
	*/
	private function get_news_category($category)
	{
		$results = query("SELECT * FROM article WHERE category = ? ORDER BY time_published DESC LIMIT 4", $category);
		return $results;
	}

	//Get breaking news
	private function get_breaking_news()
	{
		$results = query("SELECT title FROM article ORDER BY time_published DESC LIMIT 5");
		return $results;
	}
}


?>