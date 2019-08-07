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
		$this->load->view("header");
		$this->load->view("nav");
		$this->load->view("apology", array("apology" => "article not found!"));
		$this->load->view("footer");
	}
	}

	public function view($article_id)
	{
		//get article info from db.
		$data["article"] = $this->get_article($article_id);
		//$data["writer"] = $this->get_writer_info($article_id);
		$data["breaking_news"] = $this->get_breaking_news();


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
	
	//Get breaking news
	private function get_breaking_news()
	{
		$results = query("SELECT title FROM article ORDER BY time_published DESC LIMIT 5");
		return $results;
	}
	
	private function get_writer_info($article_id)
	{
	   // $result = $this->query("SELECT member.member_id, member.first_name, member.last_name FROM article LEFT JOIN member ON article.member_id = member.member_id WHERE article_id = ?", $article_id);
	}
	
	
	// Make query from TTCJN database.
	/*private function query()
    {
        // SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . "campusfi_ttcjn" . ";host=" . "127.0.0.1", "campusfi_lawal", "lawalfila001");

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);

        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }*/
}


?>