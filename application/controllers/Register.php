<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("includes/config.php");

class Register extends CI_controller{
    private $error;
    
    public function __construct()
    {
            parent::__construct();
            $this->error = "";
    }

	public function index()
	{
		if($this->input->server("REQUEST_METHOD") === "POST")
		{
			$form_data = $this->input->post(NULL, TRUE);

            //add user to database
            if(!$this->registration_user($form_data))
            {
                redirect("register");
            }
            else
            {
                redirect("../index.php/home");
            }
		}
		else
		{
			
			$this->load->helper("url");

			//load registration form.
			$this->load->view("header");
			$this->load->view("nav");
			$this->load->view("multi-reg-form");
			$this->load->view("footer");



		$this->load->helper("url");

		$this->input->post("key");
		}	
	}

	
    private function registration_user($input)
    {
        if($input['firstName'] === NULL || $input['lastName'] === NULL || $input['username'] === NULL || $input['password'] === NULL || $input['confirm_pass'] === NULL || $input['DOB_birth'] === NULL || $input['gender'] === NULL || $input['user'] === NULL || $input['whatsapp'] === NULL || $input['email'] === NULL || $input['agreement'] === NULL || $input['phone'] === NULL)
        {
            //code for null fields.
            $this->error = 'NULL';
            return false;
        }
        if(empty($input['firstName']) || empty($input['lastName']) || empty($input['username']) || empty($input['password']) || empty($input['confirm_pass']) || empty($input['DOB_birth']) || empty($input['gender']) || empty($input['user']) || empty($input['whatsapp']) || empty($input['email']) || empty($input['agreement']) || empty($input['phone']))
        {
            //code for empty fields.
            $this->error = 'empty';
            return false;
        }

        if($input["password"] !== $input["confirm_pass"])
        {
            //code for password.
            $this->error = 'password';
            return false;
        }

        //validate email input.
        if (!filter_var($input["email"], FILTER_VALIDATE_EMAIL)) 
        {
            //code for email verification.
            $this->error = 'email';
            return false; 
        }

        //gender check
        if($input["gender"] !== 'M' && $input["gender"] !== 'F')
        {
            //code for gender input.
            $this->error = 'gender';
            return false;
        }
        #agreement check
        if($input["agreement"] !== 'on')
        {
            //code for agreement check.
            $this->error = 'agreement';
            return false;
        }

        if($input['firstName'] !== htmlspecialchars($input['firstName']) || $input['lastName'] !== htmlspecialchars($input['lastName']) || $input['username'] !== htmlspecialchars($input['username']) || $input['password'] !== htmlspecialchars($input['password']) || $input['confirm_pass'] !== htmlspecialchars($input['confirm_pass']) || $input['DOB_birth']['month'] !== htmlspecialchars($input['DOB_birth']['month']) || $input['DOB_birth']['day'] !== htmlspecialchars($input['DOB_birth']['day']) || $input['DOB_birth']['year'] !== htmlspecialchars($input['DOB_birth']['year']) || $input['gender'] !== htmlspecialchars($input['gender']) || $input['user'] !== htmlspecialchars($input['user']) || $input['phone'] !== htmlspecialchars($input['phone']) || $input['whatsapp'] !== htmlspecialchars($input['whatsapp']) || $input['agreement'] !== htmlspecialchars($input['agreement']))
        {
            //code for htmlspecialchars.
            $this->error = 'htmlspecialchars';
            return false;
        }


        foreach ($input as $key => &$value) {

            $input[$key]  = trim($input[$key]);
            $input[$key]  = stripslashes($input[$key]);
            $input[$key]  = mysql_real_escape_string($input[$key]);
        }

        $options = [
		    'cost' => 10,
		    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
		];

        $result = query("INSERT INTO `user`(`username`, `hash`, `last_name`, `first_name`, `gender`, `email`, `whatsapp`, `phone`, `dob`, `user_type`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $input["username"], password_hash($input["password"], PASSWORD_BCRYPT, $options), $input["lastName"], $input["firstName"], $input["gender"], $input["email"], $input["whatsapp"], $input["phone"], $input["DOB_birthDay"], $input["user"]);

        if($result === false)
        {
            return false;
        }

        if($input['user'] === "student")
        {
            if($input['institution'] === NULL || $input['program'] === NULL || $input['level'] === NULL)
            {
                //code for null institution.
                $this->error = 'instNULL';
                return false;
            }

            if(empty($input['institution']) || empty($input['program']) || empty($input['level']))
            {
                //code for null institution.
                $this->error = 'instNULL';
                return false;
            }
            if($input['institution'] !== htmlspecialchars($input['institution']) || $input['program'] !== htmlspecialchars($input['program']) || $input['level'] !== htmlspecialchars($input['level'])) 
            {
                //code for HTMLspecialchars error institution.
                $this->
                error = 'instHTML';
                return false;
            }

            $input['institution']  = trim($input['institution']);
            $input['program']  = trim($input['program']);
            $input['level']  = trim($input['level']);
            $input['institution']  = stripslashes($input['institution']);
            $input['program']  = stripslashes($input['program']);
            $input['level']  = stripslashes($input['level']);

            //Insert extra details for student.
            $result = query("UPDATE `user` SET `institution` = ? , `program` = ?, `level` = ? WHERE user_id = LAST_INSERT_ID()", $input['institution'], $input['program'], $input['level']);

        }

        query("INSERT INTO log (username, IP, activity) VALUES( ?, ?, ?)", $input["username"], get_ip(),"Successful registration" );
        return true;
    }

}
?>