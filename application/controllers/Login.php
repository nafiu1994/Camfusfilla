<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("includes/config.php");

class Login extends CI_controller{

	public function __construct()
    {
            parent::__construct();
            $this->load->helper("url");
    }

	public function index()
	{

		if($this->input->server("REQUEST_METHOD") === "POST")
		{
			if($this->login_user($_POST["username"], $_POST["password"]))
			{
				redirect(base_url("index.php/home"));
				return;
			}
			else
			{
				//redirect("login");
				return;
			}
		}
		else if($this->input->server("REQUEST_METHOD") === "GET")
		{
			//Load url helper for use later.(base_url()).
			$this->load->helper("url");

			//Load home page.
			$this->load->view("header");
			$this->load->view("nav");
			$this->load->view("login_page");
			$this->load->view("footer");
		}
	}
	private function login_user($username, $password)
	{
		if ($username === NULL || $password === NULL)
        {
            return false;
        }
        if (empty($username) || empty($password))
        {
            return false;
        }
        if($username !== htmlspecialchars($username) || $password !== htmlspecialchars($password))
        {
            query("INSERT INTO log (username, IP, activity) VALUES( ?, ?, ?)", $row[0]["username"], get_ip(),"Login failed due to htmlspecialchars()" );
            return false;
        }

        
        $username  = trim($username);
        $password  = trim($password);
        $username  = stripslashes($username);
        $password = stripslashes($password);
        $username  = mysql_real_escape_string($username);
        $password  = mysql_real_escape_string($password);

        $row = query("SELECT hash, username, user_id, first_name, user_type FROM user WHERE username = ?", $username);
        echo "string1";

        if (count($row) === 1)
        {
        	$hash = $row[0]["hash"];
            echo "string2";
            // compare hash of user's input against hash that's in database
            if (password_verify($password, $hash))
            {
            	echo "string3";
                //log in user
                $_SESSION["authenticated"] = "user";
                $_SESSION["username"] = $row[0]["username"];
                $_SESSION["firstname"] = $row[0]["first_name"];
                $_SESSION["user_id"] = $row[0]["user_id"];

                //log activity
                query("INSERT INTO log (username, IP, activity) VALUES( ?, ?, ?)", $row[0]["username"], get_ip(),"Successful Login" );
                return true;
            } 

            query("INSERT INTO log (username, IP, activity) VALUES( ?, ?, ?)", $row[0]["username"], get_ip(),"Login failed due to wrong password" );
            return false;
        }
        else{
	        query("INSERT INTO log (username, IP, activity) VALUES( ?, ?, ?)", $row[0]["username"], get_ip(),"Login failed due to wrong credentials" );
	        return false;
        }
	}
}


?>