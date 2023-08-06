<?php

$requestData = file_get_contents('php://input');
$data = json_decode($requestData);

include 'db_connect.php';
$querry="INSERT INTO `server_attendance`(`id_code`, `name`, `id_number`, `id_given_date`, `entry_time`, `expiry_time`, `time_difference`)  
                          VALUES ('$data->id_code', '$data->name','$data->id_number','$data->id_given_date','$data->entry_time','$data->expiry_time','$data->time_difference')";
$result=$conn->query($querry);
if(!$result){
echo  mysqli_error($conn);
    exit;
}
else{
echo "Ok";
}
mysqli_close($conn);

?>