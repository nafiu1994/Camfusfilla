<?php
/**
 * Created by PhpStorm.
 * User: Dennis Bilson
 * Date: 7/29/2017
 * Time: 1:18 AM
 */

	require_once 'dbconn.php';

?>

<?php
	//Store new users
	function storeUser($uid,$username,$password,$token,$nickname,$campus,$course,$level){
		//connection
		global $conn;
		
		//Check condition
		if ($uid == '' || $username == '' || $token == '' || $password == '' || $nickname == '')
			return false;
		else{
			//Add query
			$query = "INSERT INTO user(uid,username,password,access_token,nickname,campus,course,level) "
				. "VALUES('$uid','$username','$password','$token','$nickname','$campus','$course','$level')";
			
			//check result
			$result = mysqli_query ($conn,$query);
			
			if ($result){
				//query result
				$user = "SELECT * FROM user WHERE username = '$username'";
				
				//
				$res = mysqli_query ($conn,$user);
				
				while ($user = mysqli_fetch_assoc ($res)){
					//returns user
					return $user;
				}
			}else {
				//returns false
				return false;
			}
		}
	}
	
	
	//Delete user account
	function deleteAccount($username){
		global  $conn;
		
		if ($username == '')
			return false;
		else{
			$query = "DELETE FROM user WHERE username = '$username'";
			
			//check result
			$result = mysqli_query ($conn,$query);
			
			if ($result){
				//returns true
				return true;
			}else {
				//returns false
				return false;
			}
		}
	}
	

	//Add new folder
	function addFolder($name,$username)
	{
		//connection
		global $conn;
		
		//Add query
		$query = "INSERT INTO folders(name,username,url) VALUES ('$name','$username','$name')";
		
		//check result
		$result = mysqli_query ($conn, $query);
		
		if ($result) {
			//query result
			$folder = "SELECT * FROM folders WHERE username = '$username'";
			
			//
			$res = mysqli_query ($conn, $folder);
			
			while ($folder = mysqli_fetch_assoc ($res)) {
				//returns user
				return $folder;
			}
		} else {
			//returns false
			return false;
		}
	}
	

	//Add comments
	function addComment($news_id,$profile,$content,$username){
		global $conn;
		
		$query = "INSERT INTO comment(news_id,user_profile,content,username) VALUES('$news_id','$profile','$content','$username')";
		
		$result = mysqli_query ($conn,$query);
		if ($result){
			//query result
			$folder = "SELECT * FROM comment WHERE username = '$username'";
			
			//
			$res = mysqli_query ($conn,$folder);
			
			while ($folder = mysqli_fetch_assoc ($res)){
				//returns user
				return $folder;
			}
		}else {
			//returns false
			return false;
		}
		
	}
	
	//Get all comments
	function getAllComments(){
		global $conn;
		
		$query = "SELECT * FROM comment ORDER BY id DESC ";
		
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return $query;
		}else{
			return false;
		}
		
	}
	
	//Get user
	function getUser($username, $password){
		global $conn;
		
		$query = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return $query;
		}else{
			return false;
		}
	}

	//Get single user instance
	function getSingleUser($username){
		global $conn;
		
		$query = "SELECT * FROM user WHERE username = '{$username}'";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return $query;
		}else{
			return false;
		}
	}
	
	//Get all messages
	function getAllMessages($sender,$recipient){
		global $conn;
		
		$query = "SELECT * FROM message WHERE sender = '$sender' AND recipient = '$recipient'";
		
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return $query;
		}else{
			return false;
		}
	}
	
	//Get a list of friends
	function getAllFriends($recipientId){
		global $conn;
		
		$request = "SELECT * FROM friends WHERE recipientId = '$recipientId'";
		
		//result
		$result = mysqli_query ($conn,$request);
		
		if ($result){
			return $request;
		}else{
			return false;
		}
	}
	
	//Find friend by id
	function findFriend($senderId,$recipientId){
		global $conn;
		
		$request = "SELECT * FROM friends WHERE senderId = '$senderId' AND recipientId = '$recipientId'";
		
		//result
		$result = mysqli_query ($conn,$request);
		
		if ($result){
			return $request;
		}else{
			return false;
		}
	}
	
	//Send message
	function sendMessage($sender,$recipient,$profile,$body,$time){
		global $conn;
		
		$query = "INSERT INTO message(sender, recipient, profile, body, time) VALUES ('$sender','$recipient','$profile','$body','$time')";
		
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			$project = "SELECT * FROM message WHERE sender = '$sender' AND recipient = '$recipient'";
			
			$res = mysqli_query ($conn, $project);
			
			while ($project = mysqli_fetch_assoc ($res)) {
				//returns message
				return $project;
			}
		} else {
			//returns false
			return false;
		}
	}

	//Get folder
	function getFolder($username){
		global $conn;
		
		$query = "SELECT * FROM folders WHERE username = '{$username}'";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return $query;
		}else{
			return false;
		}
	}
	
	//Check username existence
	function checkUsername($username){
		global $conn;
		
		$query = "SELECT username FROM user WHERE username = '{$username}'";
		
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			
			$res = mysqli_query ($conn,$query);
			
			while ($query = mysqli_fetch_assoc ($res)){
				return true;
			}
			
		}else{
			return false;
		}
		
	}
	
	//Check request existence
	function checkRequest($senderId,$recipientId){
		global $conn;
		
		$query = "SELECT * FROM requests WHERE senderId = '$senderId' AND recipientId = '$recipientId'";
		
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			
			$res = mysqli_query ($conn,$query);
			
			while ($query = mysqli_fetch_assoc ($res)){
				return true;
			}
			
		}else{
			return false;
		}
	}

	//Check friend existence
	function checkFriend($senderId,$recipientId){
		global $conn;
		
		$query = "SELECT * FROM friends WHERE senderId = '$senderId' AND recipientId = '$recipientId'";
		
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			
			$res = mysqli_query ($conn,$query);
			
			while ($query = mysqli_fetch_assoc ($res)){
				return true;
			}
			
		}else{
			return false;
		}
	}
	
	//Query articles
	function queryArticles($query) {
		global $conn;
		
		if ($query == '') {
			
			return FALSE;
			
		}else {
			$search = "SELECT * FROM news WHERE title = '$query'";
			
			$result = mysqli_query ($conn, $search);
			
			if ($result) {
				return $search;
			} else {
				return false;
			}
		}
		
	}
	
	
	//Get all news feeds
	function getFeed() {
		global $conn;
		
		$search = "SELECT * FROM news";
		
		$result = mysqli_query ($conn, $search);
		
		if ($result) {
			return $search;
		} else {
			return false;
		}
		
	}
	
	
	//Get all students
	function getStudents() {
		global $conn;
		
		$search = "SELECT id,uid,username,nickname,password,profile,course,access_token,interest"
			. ",new_password,campus,level,user_type,post_count,followers_count,followings_count "
			. "FROM user WHERE user_type = 'student'";
		
		$result = mysqli_query ($conn, $search);
		
		if ($result) {
			return $search;
		} else {
			return false;
		}
		
	}
	
	
	//Add news
	function addNews($title,$content,$author,$authorProfile,$type,$category,$image,$url,$news_uid,$uid) {
		global $conn;
		
		$search = "INSERT INTO news(title,news_uid,content,author,author_profile,type,category,image,url,uid) VALUES('$title','$news_uid','$content','$author','$authorProfile','$type','$category','$image','$url','$uid')";
		
		
		$result = mysqli_query ($conn, $search);
		
		if ($result) {
			$query = "SELECT * FROM news WHERE author = '$author' AND title = '$title' AND uid = '$uid'";
			
			$res = mysqli_query ($conn,$query);
			
			//
			while ($query = mysqli_fetch_assoc ($res)){
				//returns the article posted
				return $query;
			}
			
		} else {
			return false;
		}
		
	}
	
	//todo: add function in php
	//Add new feed from friends
	function addFeeds($title,$content,$author,$authorProfile,$type,$category,$image,$url,
	                  $uniqueId,$user_uid) {
		global $conn;
		
		$search = "INSERT INTO feeds(title,uniqueId,content,author,author_profile,type,category,image,url,user_uid) VALUES('$title'";
		$search .= ",'$uniqueId','$content','$author','$authorProfile','$type','$category','$image','$url','$user_uid')";
		
		
		$result = mysqli_query ($conn, $search);
		
		if ($result) {
			$query = "SELECT * FROM feeds";
			
			$res = mysqli_query ($conn,$query);
			
			//
			while ($query = mysqli_fetch_assoc ($res)){
				//returns the article posted
				return $query;
			}
			
		} else {
			return false;
		}
		
	}

	//todo: add function in php
	//Get all news feeds from friends
	function getFriendsFeeds() {
		global $conn;
		
		$search = "SELECT * FROM feeds";
		
		$result = mysqli_query ($conn, $search);
		
		if ($result) {
			return $search;
		} else {
			return false;
		}
		
	}


//Create discussion
	function createDiscussion($discussion_id,$topic,$admin,$users,$url){
		global $conn;
		
		$query = "INSERT INTO discussion(discussion_id,topic,admin,users,url) VALUES('$discussion_id','$topic','$admin','$users','$url')";
		
		//check result
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			//query result
			$ans = "SELECT * FROM discussion WHERE topic = '$topic' OR admin = '$admin' ORDER BY id DESC ";
			
			//
			$res = mysqli_query ($conn,$ans);
			
			while ($ans = mysqli_fetch_assoc ($res)){
				//returns discussion
				return $ans;
			}
		}else {
			//returns false
			return false;
		}
	}
	
	//Retrieve discussions by id
	function getDiscussion($discussion_id){
		global $conn;
		
		$search = "SELECT  discussion_id,topic,admin,users,votes,url FROM discussion WHERE discussion_id = '$discussion_id'";
		//result
		$result = mysqli_query ($conn,$search);
		if ($result)
			return $search;
		else
			return false;
		
	}

	function getPhoto($username,$folder_name){
		global $conn;

		$search = "SELECT * FROM photos WHERE username = '$username' AND folder_name = '$folder_name'";
		//result
		$result = mysqli_query ($conn,$search);
		if ($result)
			return $search;
		else
			return false;

	}
	
	//Get Feels for a news article
	function getFeels($news_id){
		global $conn;
		
		$search = "SELECT * FROM feels WHERE news_id = '$news_id'";
		
		//result
		$result = mysqli_query ($conn,$search);
		
		if ($result)
			return $search;
		else
			return false;
	}
	
	
	function follow($userID,$count){
		global $conn;
		
		$search = "UPDATE user SET followers_count = '$count' WHERE uid = '$userID'";
		
		//result
		$result = mysqli_query ($conn,$search);
		
		$result = mysqli_query ($conn, $search);
		
		if ($result) {
			$query = "SELECT uid,username,nickname,campus,course,followers_count FROM user WHERE uid = '$userID'";
			
			$res = mysqli_query ($conn,$query);
			
			//
			while ($query = mysqli_fetch_assoc ($res)){
				//returns the article posted
				return $query;
			}
			
		} else {
			return false;
		}
	}

	function unfollow($userID,$count){
		global $conn;
		
		$search = "UPDATE user SET followers_count = '$count' WHERE uid = '$userID'";
		
		//result
		$result = mysqli_query ($conn,$search);
		
		$result = mysqli_query ($conn, $search);
		
		if ($result) {
			$query = "SELECT uid,username,nickname,campus,course,followers_count FROM user WHERE uid = '$userID'";
			
			$res = mysqli_query ($conn,$query);
			
			//
			while ($query = mysqli_fetch_assoc ($res)){
				//returns the article posted
				return $query;
			}
			
		} else {
			return false;
		}
	}

	function getNewsComment($news_id){
	global $conn;
	
	$search = "SELECT * FROM comment WHERE news_id = '$news_id'";
	
	//result
	$result = mysqli_query ($conn,$search);
	
	if ($result)
		return $search;
	else
		return false;
}

	//Add feels
	function addFeels($news_id,$user_id){
		global $conn;
		
		$add = "INSERT INTO feels(news_id, user_id) VALUES ('$news_id','$user_id')";
		
		$result = mysqli_query ($conn, $add);
		
		if ($result) {
			$query = "SELECT * FROM feels WHERE news_id = '$news_id'";
			
			$res = mysqli_query ($conn,$query);
			
			//
			while ($query = mysqli_fetch_assoc ($res)){
				//returns the article posted
				return $query;
			}
			
		} else {
			return false;
		}
	}
	
	//Add Photo
	function addPhoto($userId,$folder_name,$folder_id,$image){
		global $conn;
		
		$query = "INSERT INTO photos(userId, folder_name, folder_id, image) VALUES('$userId','$folder_name','$folder_id','$image')";
		
		$result = mysqli_query ($conn, $query);
		
		if ($result) {
			$query = "SELECT * FROM photos WHERE userId = '$userId' AND folder_name = '$folder_name'";
			
			$res = mysqli_query ($conn,$query);
			
			if ($res){
				return $query;
			}else{
				return false;
			}
			
		}
	}
	
	//Send request
	function sendRequest($senderId,$recipientId,$username,$nickname,$profile){
		global $conn;
		
		$query = "INSERT INTO requests(senderId, recipientId,username,nickname,profile) VALUES ('$senderId','$recipientId','$username','$nickname','$profile')";
		
		$result = mysqli_query ($conn,$query);
		
		if ($result) {
			$query = "SELECT * FROM requests WHERE senderId = '$senderId' AND recipientId = '$recipientId'";
			
			$res = mysqli_query ($conn,$query);
			
			if ($res){
				return $query;
			}else{
				return false;
			}
			
		}
		
	}
	
	//Add new friend
	function addFriend($senderId,$recipientId,$username,$nickname,$profile){
		global $conn;
		
		$query = "INSERT INTO friends(senderId, recipientId,username,nickname,profile) VALUES ('$senderId','$recipientId','$username','$nickname','$profile')";
		
		$result = mysqli_query ($conn,$query);
		
		if ($result) {
			$query = "SELECT * FROM friends WHERE senderId = '$senderId' AND recipientId = '$recipientId'";
			
			$res = mysqli_query ($conn,$query);
			
			if ($res){
				return $query;
			}else{
				return false;
			}
			
		}
	}
	
	//Do like
	function doLike($like_count,$news_id,$user_id,$date){
		global $conn;
		
		$query = "UPDATE news SET like_count = '$like_count' WHERE news_uid = '$news_id'";
		
		$result = mysqli_query ($conn, $query);
		
		if ($result) {
			$query = "SELECT * FROM news WHERE news_uid = '$news_id'";
			
			$res = mysqli_query ($conn,$query);

			$append = "INSERT INTO feels(news_id,user_id,timestamp) VALUES('$news_id','$user_id','$date') ";

			$add  = mysqli_query ($conn,$append);
			
			//
			while ($query = mysqli_fetch_assoc ($res)){
				//returns the article posted
				return $query;
			}
			
		} else {
			return false;
		}
	}

	//Do like
	function doFeedLike($like_count,$news_id,$user_id,$date){
		global $conn;
		
		$query = "UPDATE feeds SET like_count = '$like_count' WHERE uniqueId = '$news_id'";
		
		$result = mysqli_query ($conn, $query);
		
		if ($result) {
			$query = "SELECT * FROM feeds WHERE uniqueId = '$news_id'";
			
			$res = mysqli_query ($conn,$query);

			$append = "INSERT INTO feels(news_id,user_id,timestamp) VALUES('$news_id','$user_id','$date') ";

			$add  = mysqli_query ($conn,$append);
			
			//
			while ($query = mysqli_fetch_assoc ($res)){
				//returns the article posted
				return $query;
			}
			
		} else {
			return false;
		}
	}
	
	//Get followers for a post
	function getFollowers(){
		global $conn;
		
		//	todo: make this work
		$search = "SELECT follower FROM follow";
	}
	
	function updateProfile($username,$profile){
		global $conn;
		$query = "UPDATE user SET profile = '$profile' WHERE username = '$username'";
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return $query;
		}else {
			return false;
		}
	}

	
	
	function updateCampus($username,$campus,$interest){
		global $conn;
		$query = "UPDATE user SET campus = '$campus',interest = '$interest'  WHERE username = '$username'";
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return $query;
		}else {
			return false;
		}
	}
	
	function getAllCampuses(){
		global $conn;
		
		$query = "SELECT * FROM campus ORDER BY name DESC ";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result)
			return $query;
		else
			return false;
	}

	
	
	//Get a list of all courses
	function getAllCourses(){
		global $conn;
		
		$query = "SELECT * FROM course ORDER BY id DESC ";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result)
			return $query;
		else
			return false;
	}

	//Get course by name
	function getCourseByName($name){
		global $conn;
		
		$query = "SELECT * FROM course WHERE name = '$name'";
		
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return $query;
		}else{
			return false;
		}
	}
	
	//Get course by name
	function getCourseById($uniqueId){
	global $conn;
	
	$query = "SELECT * FROM course WHERE uniqueId = '$uniqueId'";
	
	$result = mysqli_query ($conn,$query);
	
	if ($result){
		return $query;
	}else{
		return false;
	}
}

	//Add new course to database
	function addCourse($name,$uniqueId){
		global $conn;
		
		$query = "INSERT INTO course(name,uniqueId) VALUES('$name','$uniqueId')";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return true;
		} else{
			return false;
		}
	}


	function getAllNotices(){
		global $conn;
		
		$query = "SELECT * FROM notice ORDER BY id DESC ";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result)
			return $query;
		else
			return false;
	}

	function addNotice($title,$date,$content,$uniqueId){
		global $conn;
		
		$query = "INSERT INTO notice(title, uniqueId, date, content) VALUES('$title','$uniqueId','$date','$content')";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return true;
		} else{
			return false;
		}
	}

	function getNoticeByID($uniqueId){
	global $conn;
	
	$query = "SELECT * FROM notice WHERE uniqueId = '$uniqueId'";
	
	$result = mysqli_query ($conn,$query);
	
	if ($result){
		return $query;
	}else{
		return false;
	}
}


	
	function getAllSeminars(){
		global $conn;
		
		$query = "SELECT * FROM seminar ORDER BY id DESC ";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result)
			return $query;
		else
			return false;
	}

	function addSeminar($title,$date,$content,$uniqueId,$url){
	global $conn;
	
	$query = "INSERT INTO seminar(title, uniqueId, date, content,url) VALUES('$title','$uniqueId','$date','$content','$url')";
	
	//result
	$result = mysqli_query ($conn,$query);
	
	if ($result){
		return true;
	} else{
		return false;
	}
}

	function getSeminarByID($uniqueId){
	global $conn;
	
	$query = "SELECT * FROM seminar WHERE uniqueId = '$uniqueId'";
	
	$result = mysqli_query ($conn,$query);
	
	if ($result){
		return $query;
	}else{
		return false;
	}
}
	

	function getAllClasses(){
		global $conn;
		
		$query = "SELECT * FROM class ORDER BY id DESC ";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result)
			return $query;
		else
			return false;
	}

	function addClass($uniqueId,$course,$campus,$userId){
		global $conn;
		
		$query = "INSERT INTO class(uniqueId,campus,course,userId) VALUES ('$uniqueId','$campus','$course','$userId')";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return true;
		} else{
			return false;
		}
		
	}

	function addGroup($uniqueId,$course,$campus,$userId,$username){
		global $conn;
		
		$query = "INSERT INTO groups(uniqueId,campus,course,member,username) VALUES ('$uniqueId','$campus','$course','$userId','$username')";
		
		//result
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return true;
		} else{
			return false;
		}
		
	}
	
	
	function deleteClass($uniqueId){
		global $conn;
		
		$query  = "DELETE FROM class WHERE uniqueId = '$uniqueId'";
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return true;
		} else{
			return false;
		}
	}
	
	
	function updateNickname($username,$nickname){
		global $conn;
		$query = "UPDATE user SET nickname = '$nickname' WHERE username = '$username'";
		$result = mysqli_query ($conn,$query);
		
		if ($result){
			return $query;
		}else {
			return false;
		}
	}

	/*Set cookie for token to last for 30 secs*/
	function set_cookie($token){
		setcookie("demo",$token,time() + 10,"/");
	}
	
	/*Compares the values of the token*/
	function compare($token){
		$stored_token = $_COOKIE['demo'];
		if ($token == $stored_token){
			return $token;
		}else{
			return "No value found";
		}
	}

	//Token generator
	function RandomToken($length = 32){
		if(!isset($length) || intval($length) <= 8 ){
			$length = 32;
		}
		if (function_exists('random_bytes')) {
			return bin2hex(random_bytes($length));
		}
		if (function_exists('mcrypt_create_iv')) {
			return bin2hex(mcrypt_create_iv($length, MCRYPT_DEV_URANDOM));
		}
		if (function_exists('openssl_random_pseudo_bytes')) {
			return bin2hex(openssl_random_pseudo_bytes($length));
		}
	}
	
	//Salt
	function Salt(){
		return substr(strtr(base64_encode(hex2bin(RandomToken(32))), '+', '.'), 0, 44);
	}

	/*echo (RandomToken());
	echo "\n";
	echo Salt();
	echo "\n";*/

	/*
	This function is same as above but its only used for debugging
	*/
	function RandomTokenDebug($length = 32){
		if(!isset($length) || intval($length) <= 8 ){
			$length = 32;
		}
		$randoms = array();
		if (function_exists('random_bytes')) {
			$randoms['random_bytes'] = bin2hex(random_bytes($length));
		}
		if (function_exists('mcrypt_create_iv')) {
			$randoms['mcrypt_create_iv'] = bin2hex(mcrypt_create_iv($length, MCRYPT_DEV_URANDOM));
		}
		if (function_exists('openssl_random_pseudo_bytes')) {
			$randoms['openssl_random_pseudo_bytes'] = bin2hex(openssl_random_pseudo_bytes($length));
		}
		
		return $randoms;
	}
	
	
