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
<head>
    <title>User Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="my-4">User Management</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
               require_once 'api/db_connect.php';
                // Check the connection
               // Fetch user records from the database
                $sql = "SELECT * FROM users";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    // Loop through the result set
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['firstname']}</td>";
                        echo "<td>{$row['lastname']}</td>";
                        echo "<td>{$row['username']}</td>";
                        echo "<td>{$row['position']}</td>";
                        echo "<td>
                                <a href='edit.php?id={$row['username']}' class='btn btn-primary btn-sm'>Edit</a>
                                <a href='delete.php?id={$row['username']}' class='btn btn-danger btn-sm'>Delete</a>
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
        <a href="registration.php" class="btn btn-success">Add User</a>
    </div>
</body>
</html>
