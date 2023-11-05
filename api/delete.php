<?php 	

require_once 'db_connect.php';

$response='FAILED';

if($_POST) {	
	$username = addslashes($_POST['username']);
	$sql="DELETE FROM users WHERE `username`='$username'";

		if($connect->query($sql) === TRUE) {
		$response='ok';

		} else {
		$response='FAILED';
		}
	$connect->close();

	echo $response;
 
} // /if $_POST
?>