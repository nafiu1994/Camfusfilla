<?php
/**
 * Created by PhpStorm.
 * User: Dennis Bilson
 * Date: 7/29/2017
 * Time: 2:30 AM
 */
	//include functions
	include_once 'func.php';
	global $conn;
	
	$response = array();
	$data = null;
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		//Params
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//Check condition
		if ($username == '' || $password == ''){
			$response['message'] = 'Fill required slots';
			echo json_encode ($response,JSON_PRETTY_PRINT);
			return false;
		} else {
			//Get user
			$user = getUser ($username,$password);
			
			//result
			if ($user != false){
				//user found
				$query = "SELECT id,uid,username,nickname,password,profile,course,access_token,interest,"
					. "new_password,campus,level,user_type,post_count,followers_count,followings_count FROM user WHERE username = '{$username}' "
					. "AND password ='{$password}'";
				
				//result
				$result = mysqli_query ($conn,$query);
				if (mysqli_num_rows ($result) > 0){
					while ($row[] = $result->fetch_assoc ()){
						$data = $row;
					}
				}
				
				//confirm result and return data
				if ($result)
					echo json_encode ($data,JSON_PRETTY_PRINT);
				else
					echo json_encode ($data,JSON_PRETTY_PRINT);
				
			}else {
				//no user returned
				$response['message'] = 'no user with these details found';
				echo json_encode ($response,JSON_PRETTY_PRINT);
			}
		}
	}else {
		//Not post method
		$response['message'] = 'Wrong post method';
		echo json_encode ($response,JSON_PRETTY_PRINT);
	}
	
	mysqli_close ($conn);