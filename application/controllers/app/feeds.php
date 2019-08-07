<?php
/**
 * Created by PhpStorm.
 * User: Dennis Bilson
 * Date: 7/29/2017
 * Time: 3:36 AM
 */
//include functions
	include_once 'func.php';
	global $conn;
	
	$response = array();
	$data = null;
	
	if ($_SERVER['REQUEST_METHOD'] == 'GET'){
		//Get feed
		$feed = getFeed ();
		
		//check result
		if ($feed != false){
			$query = 'SELECT id,title,news_uid,category,type,content,author,author_profile,url,width,height,like_count,view_count,comment_count,image FROM news';
			
			//result
			$result = mysqli_query ($conn,$feed);
			if (mysqli_num_rows ($result) > 0){
				while ($row[] = $result->fetch_assoc ()){
					$data = $row;
				}
			}
			
			//return data
			if ($result)
				echo json_encode ($data,JSON_PRETTY_PRINT);
			else
				echo json_encode ($data,JSON_PRETTY_PRINT);
		}else{
			$response['message'] = 'No data found';
			echo json_encode ($response,JSON_PRETTY_PRINT);
		}
		
	}else{
		//Not post method
		$response['message'] = 'Wrong get method';
		echo json_encode ($response,JSON_PRETTY_PRINT);
	}
	
	mysqli_close ($conn);