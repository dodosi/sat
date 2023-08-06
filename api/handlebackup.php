<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Origin: http://localhost:3000");
$post =json_decode(file_get_contents('php://input'));
//$post='{"1":"21-25","2":"man","3":"Elementary (primary education or below)","4":"Employed","5":"Agriculture","7":"Two","8":"other","12":"yes","13":"Hearing","14":"Yes","15":"Coaster","16":"Bicycle","17":["It is cheaper","It is more comfortable"],"18":"Few days a week","19":["Evening peak hours","Offpeak hours"],"20":["Medical purposes","Social & leisure purposes"],"21":"1000- 5000 Frws","22":"Yes","23":"Yes","24":"fdgfdgfdg","30":"10 to 30 minutes","31":{"Lateness":2,"Tiredness":2,"Loss of property":2,"Harassment":2},"32":["Cash"],"33":"unsatisified","34":"fdgfdg","37":"other","40":"1-3 times","8-Comment":"ghgfdgfdgf","37-Comment":"fdgfdgfdg"}';
$post=json_decode($post);
require 'db_connect.php';
$respondent=generateRandomString();
//$survey_id='123456';
$survey_id=$_GET['id'];
foreach($post as $key=>$value) {
   if(isJSON(json_encode($value))) { 
        $arr = json_decode(json_encode($value), true);
		// Loop through the associative array
		foreach($arr as $key2=>$value){
			//echo $key . "=>" . $value . "<br>";
			//$message =$key.':'.$key2 . "-" . $value . "\n";
			//echo $message.'<br>';
			//addData($connect, $respondent,$survey_id,$key,$key2 . "-" . $value);
			$value2=$key2 . '-' . $value;
			$sql="INSERT INTO `results`(`responder`,`survey_id`,`question_id`,`answer`) 
	                            VALUES ('$respondent','$survey_id','$key','$value2')";

			if($connect->query($sql) === TRUE) {
				$response='ok';

			} else {
				$response='FAILED';
			}
		}
		 
	}else if(is_array($value)){
		for($i=0;$i<count($value);$i++){
			//$message = $key . ":" . $value[$i] . "\n";
			//echo $message;
			//addData($connect, $respondent ,$survey_id,$key,$value);
			$sql="INSERT INTO `results`(`responder`,`survey_id`,`question_id`,`answer`) 
	                            VALUES ('$respondent','$survey_id','$key','$value')";

			if($connect->query($sql) === TRUE) {
				$response='ok';

			} else {
				$response='FAILED';
			}
		}
		
	}else{
		    //$message = $key . ":" . $value . "\n";
			//echo $message;
			//addData( $connect, $respondent,$survey_id,$key,$value);
			$sql="INSERT INTO `results`(`responder`,`survey_id`,`question_id`,`answer`) 
	                            VALUES ('$respondent','$survey_id','$key','$value')";

			if($connect->query($sql) === TRUE) {
				$response='ok';

			} else {
				$response='FAILED';
			}
	}
	
}
$connect->close();
echo 'ok';

function isJSON($string){
   return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
}

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