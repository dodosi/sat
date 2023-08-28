<?php
    require_once 'db_connect.php';
    $username=$_REQUEST['username'];
    $sql = "SELECT * FROM users where `username`='$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        // Loop through the result set
        //$users = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $users = $row;
            }
    }
    // Close the database connection
    echo json_encode($users);
    $connect->close();
?>