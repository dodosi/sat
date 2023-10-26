<?php

$id=" ";
include 'connect.php';
if(isset($_GET['name'])){
$name=$_GET['name'];
}
$querry=" DELETE FROM `choice` WHERE   `question_name`='$name'";
$result=$connect->query($querry);
if(!$result){
echo  mysqli_error($conn);
    exit;
}else{

$querry=" DELETE FROM `question` WHERE   `name`='$name'";
$result=$connect->query($querry);
if(!$result){
echo  mysqli_error($connect);
    exit;
}else{
echo "Successifuly ";

header( 'Location:questionsAndChoices.php' ) ;


}

}
mysqli_close($connect);
?>