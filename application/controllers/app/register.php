<?php
/**
 * Created by PhpStorm.
 * User: Dennis Bilson
 * Date: 7/29/2017
 * Time: 2:53 AM
 */
	//include functions
	require_once 'func.php';
	global $conn;
	
	$response = array();
	$data = null;
	
	//Post method used
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		//echo json_encode ('Post method used',JSON_PRETTY_PRINT);
		
		
		//Params
		$_name = $_POST['username'];
		$_password = $_POST['password'];
		$_nickname =  $_POST['nickname'];
		$_course =  $_POST['course'];
		$_level =  $_POST['level'];
		$_campus =  $_POST['campus'];
		

		//check condition
		if ($_name == '' || $_password == '' || $_nickname == ''){
			$response['message'] = 'Fill required slots';
			echo json_encode ($response,JSON_PRETTY_PRINT);
			return false;
		}else {
			$name = checkUsername ($_name);

			if ($name != false){
				$response['message'] = 'username exists';
				echo json_encode ($response,JSON_PRETTY_PRINT);
			}else {
				//token
				$token = RandomToken (10);
				$uid = RandomToken (6);

				//do registration
				$user = storeUser ($uid,$_name,$_password,$token,$_nickname,$_campus,$_course,$_level);

				if ($user != false){
					//user stored
					$query = "SELECT id,uid,username,nickname,password,profile,course,access_token,interest,"
						. "new_password,campus,level,user_type,post_count,followers_count,followings_count FROM user WHERE username = '{$_name}' "
						. "AND password ='{$_password}'";

					$result = mysqli_query ($conn,$query);
					if (mysqli_num_rows ($result) > 0){
						while ($row[] = $result->fetch_assoc()){
							$data = $row;
						}
					}

					if ($result){
						//success
						echo json_encode ($data,JSON_PRETTY_PRINT);
					}else{
						//failed
						echo json_encode ($data,JSON_PRETTY_PRINT);
					}
				}
			}
		}
	}else {
		$response['message'] = 'Invalid call';
		echo json_encode ($response,JSON_PRETTY_PRINT);
	}
	//Close connection
	mysqli_close ($conn);
