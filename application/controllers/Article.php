<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("includes/config.php");

class Article extends CI_controller{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");

    }

	public function index()
	{
		//redirect to homepage. No article specified.
		redirect("home");
	}

	public function view($article_id)
	{
		//get article info from db.
		$data = $this->get_article($article_id);


		$this->load->view("header");
		$this->load->view("nav");
		if(!$data)
		{
			$this->load->view("apology", array("apology" => "article not found!"));
		}
		else
		{
			$this->load->view("article", $data);
		}
		$this->load->view("footer");
	}

	private function get_article($id){
		if(is_numeric($id))
		{
			$result = query("SELECT * FROM article WHERE article_id = ?", $id);
			if(count($result) === 1)
			{
				query("UPDATE article SET views = views + 1 WHERE article_id = ?", $id);
				return $result[0];
			}
			else{
				return false;
			}
			
		}

	}

	//Get top 5 most viewed articles in the database. 
	private function get_popular_articles()
	{
		$result = query("SELECT article_id,title, cover_pic FROM article ORDER BY views DESC, time_published DESC LIMIT 5");

		return $result;
	}


	// Get top 5 recently published articles.
	private function get_recent_articles()
	{
		$result = query("SELECT article_id,title, cover_pic FROM article ORDER BY time_published DESC LIMIT 5");

		return $result;
	}

	//Get
}


?>