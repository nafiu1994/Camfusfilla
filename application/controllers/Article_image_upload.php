<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("includes/config.php");

//handle ajax image upload from editor.
class Article_image_upload extends CI_controller{

	public function index()
	{
		//Load url helper for use later.(base_url()).
		$this->load->helper("url");

		if($_POST["file_type"] === "img")
		{
			$img_url = $this->upload_img();
			echo stripslashes(json_encode($img_url));
		}
		
		
	    echo "string";
	}
	private function upload_img()
	{
		// Allowed extentions.
	    $allowedExts = array("jpeg", "jpg", "png");

	    // Get filename.
	    $temp = explode(".", $_FILES["file"]["name"]);

	    // Get extension.
	    $extension = end($temp);

	    // An image check is being done in the editor but it is best to
	    // check that again on the server side.
	    // Do not use $_FILES["file"]["type"] as it can be easily forged.
	    $finfo = finfo_open(FILEINFO_MIME_TYPE);
	    $mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);

	    if ((($mime == "image/jpeg")
	    || ($mime == "image/pjpeg")
	    || ($mime == "image/x-png")
	    || ($mime == "image/png"))
	    && in_array($extension, $allowedExts)) {
	        // Generate new random name.
	        //#TODO $_SESSION["user_id"] . "-" .
	        $name =  sha1(microtime()) . "." . $extension;

	        // Save file in the uploads folder.
	        move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/campusfila/assets/uploads/img' . $name);

	        // Generate response.
	        $response = new StdClass;
	        $response->link = base_url("assets/uploads/") . $name;
	        
	        return $response;
	    }
	}
}


?>