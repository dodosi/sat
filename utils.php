<?php
 function checkStatus($data_capture){
    if(isset($_SESSION['username'])) {
       $usernames=$_SESSION['username'];
    } 
   // echo $username;
    include 'api/db_connect.php';
    $status=true;
    // Check the connection
    // Fetch user records from the database
    $sql = "SELECT * FROM logs where data_capture='$data_capture' and username='$usernames'";
    //echo $sql;
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
       // Loop through the result set
       while ($row = $result->fetch_assoc()) {
          $status=true;
       }
   } else {
         $status=false;
   }
   if($status){
    echo '<span class="badge">Done</span>';
   }        
   // Close the database connection
   $connect->close();
 }
?>