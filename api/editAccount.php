<?php 	

require_once 'db_connect.php';

$response='FAILED';

if($_POST) {	
    $firstname = addslashes($_POST['firstname']);
	$lastname = addslashes($_POST['lastname']);
	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);
	$position=addslashes($_POST['position']);
	
	$sql="UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`password`='$password',`position`='$position' WHERE `username`='$username'";

		if($connect->query($sql) === TRUE) {
		$response='ok';

		} else {
		$response='FAILED';
		}
	$connect->close();

	echo $response;
 
} // /if $_POST
?>