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
    <title>User Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/edit.js"></script></head>
  
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
               <form id="DeleteForm">
                    
                    <div class="mb-3">
                        <input type="text" hidden class="form-control" id="username" placeholder="Enter username" required>
                    </div>
                    
                    <div class="d-grid">
                    <h2 class="text-left" id="confMessage">Confirm to delete <?php echo $_GET['username']; ?></h2>
                
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
