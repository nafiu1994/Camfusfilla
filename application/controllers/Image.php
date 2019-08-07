<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

	private $global_name;

	public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->global_name = "";

    }

	public function index()
	{
		if($this->input->server("REQUEST_METHOD") === "POST")
		{
			if($this->upload_img())
			{
				echo "upload success<br>";
				echo $this->global_name ."<br>";
				if (!$this->image_resize($this->global_name))
				{
				    echo "failed";
				}
				else
				{
					echo "successful resize";
				}
			}
			else {
				echo "failed";
			}

		}
		else
		{
			$this->load->view('image_sizing');
		}
	}

	private function upload_img()
	{
		// Allowed extentions.
	    $allowedExts = array("jpeg", "jpg", "png");

	    // Get filename.
	    $temp = explode(".", $_FILES["cover"]["name"]);

	    // Get extension.
	    $extension = end($temp);

	    // An image check is being done in the editor but it is best to
	    // check that again on the server side.
	    // Do not use $_FILES["file"]["type"] as it can be easily forged.
	    $finfo = finfo_open(FILEINFO_MIME_TYPE);
	    $mime = finfo_file($finfo, $_FILES["cover"]["tmp_name"]);

	    if ((($mime == "image/jpeg")
	    || ($mime == "image/pjpeg")
	    || ($mime == "image/x-png")
	    || ($mime == "image/png"))
	    && in_array($extension, $allowedExts)) {
	        // Generate new random name.
	        //#TODO $_SESSION["user_id"] . "-" .
	        $name =  sha1(microtime()) . "." . $extension;

	        // Save file in the uploads folder.
	        move_uploaded_file($_FILES["cover"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/campusfila/assets/uploads/img/img' . $name);

	        
	        $this->global_name =  $name;
	        
	        return true;
	    }
	}

    private function image_resize($path)
    {
    	$config['image_library'] = 'gd2';
		$config['source_image'] = $_SERVER['DOCUMENT_ROOT'].'/campusfila/assets/uploads/img/img' . $this->global_name;
		$config['new_image'] = $_SERVER['DOCUMENT_ROOT'].'/campusfila/assets/uploads/img/covers/img' . $this->global_name;
		$config['maintain_ratio'] = TRUE;
		$config['widh']         = 600;
		$config['height']       = 300;

		echo $_SERVER['DOCUMENT_ROOT'].'/campusfila/assets/uploads/img/img' . $this->global_name;
		$this->load->library('image_lib');
		$this->load->library('image_lib');
		// Set your config up
		$this->image_lib->initialize($config);
		// Do your manipulation
		if (!$this->image_lib->resize())
		{
		        echo $this->image_lib->display_errors();
		        return false;
		}
		else
		{
			echo "success";
			return true;
		}

		$this->image_lib->clear();
		
    }
}
