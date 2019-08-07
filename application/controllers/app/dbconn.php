<?php
/**
 * Created by PhpStorm.
 * User: Dennis Bilson
 * Date: 7/29/2017
 * Time: 1:16 AM
 */
//Connection to server
$conn =  mysqli_connect("localhost","root","","campus") or die(mysqli_error($conn));
$response = array();

//Debug connection
if ($conn){
    $response['message'] = 'success';
    //echo json_encode($response,JSON_PRETTY_PRINT);
}else {
    $response['message'] = 'failed';
    //echo json_encode($response,JSON_PRETTY_PRINT);
}

