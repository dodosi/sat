<?php
    $id=" ";
    include 'connect.php';
    if(isset($_GET['name'])){
        $name=$_GET['name'];
    }
    $querry1=" DELETE FROM `choice` WHERE   `question_name`='$name'";
    $querry2=" DELETE FROM `question` WHERE   `name`='$name'";
    $result1=$connect->query($querry1);
    $result2=$connect->query($querry2);
    if(!$result1&&$result2){
        echo  mysqli_error($conn);
        exit;
    }else{
        header( 'Location:questionsAndChoices.php' ) ;
    }
    mysqli_close($connect);
?>