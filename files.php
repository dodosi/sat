<?php
session_start();
if (isset($_SESSION['position'])) {
    if($_SESSION['position']=='ADMIN') {
        include 'navbar.html';
    }else{
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }
}else{
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}   
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<div class="container">
<h2>Uploaded questionaires</h2>
<table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>File Name</th>
                    <th>Uploaded on</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //session_start();
                require_once 'api/db_connect.php';
                    // Check the connection
                // Fetch user records from the database
                    $sql = "SELECT `id`, `name`, `type`, `date` FROM `files` WHERE 1";
                    $result = $connect->query($sql);

                    if ($result->num_rows > 0) {
                        // Loop through the result set
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>{$row['id']}</td>";
                            echo "<td>{$row['name']}</td>";
                            echo "<td>{$row['date']}</td>";
                            echo "<td>
                                    <a href='api/download.php?file_name={$row['name']}' class='btn btn-primary btn-sm'>Download</a>
                                    <a href='api/deletefile.php?file_name={$row['name']}' class='btn btn-warning btn-sm'>Remove</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No users found</td></tr>";
                    }

                    // Close the database connection
                    $connect->close();
                ?>
            </tbody>
        </table>
        <?php
        if(isset($_SESSION['position'])){
            echo '<a href="upload.php" class="btn btn-success">Upload File</a>';
        }
         
        ?>
    </div>
    </div> 
  </div>
</div> 
</body>

</html>