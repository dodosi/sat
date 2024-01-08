<?php
	//Login to the system submission to make attendence
	session_start();
	include 'db_connect.php';  
	$postion='NON';
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$querry="SELECT `firstname`, `lastname`, `username`, `password`, `position` FROM `users` WHERE username='$username' and password='$password'";

		$resultl=$connect->query($querry);
		if($resultl){
			while($row=$resultl->fetch_assoc()){
				$_SESSION['position']=$row['position'];
				$_SESSION['username']=$row['username'];
				$postion= $row['position'];
				$username= $row['username'];
			}
			 $response = array('username' => $username, 'position' => $postion);
			 echo json_encode($response);
		}else {
				echo mysql_error();
		}
		//echo $postion;
function generateRandomString($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
?>