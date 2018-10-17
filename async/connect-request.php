<?php


// this code will check whether user login or not 
session_start();
if(!isset($_SESSION['MKohaanlaisd'])){
	echo "error";
	return;
}


// this condition will check request send by index page now its decoded into plain string /by some algorith....
if(isset($_REQUEST['agent'])){
	$agent=$_REQUEST['agent'];
	$agent=hex2bin($agent);
	$agent=base64_decode($agent);
	$agent=(($agent/5)-300)/5;


	$sender=$_SESSION['MKohaanlaisd'];
	$sender=hex2bin($sender);
	$sender=base64_decode($sender);
	$sender=(($sender/5)-300)/5;


	include '../common/connection.php';
	$sql="INSERT INTO freindrequestmodl29 (senderid,recieverid) values ('$sender','$agent')";


	if(mysqli_query($conn,$sql)){
		echo "requested";
	}else{
		echo "try again";
	}
}

session_write_close();