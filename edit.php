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
                <h2 class="text-center">User Registration</h2>
                <form id="registrationForm">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Enter first name" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Enter last name" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" id="valid">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label" id="cvalid">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" placeholder="Re-type password" required>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <select class="form-control" id="position" required>
                            <option value="" selected disabled>Select a position</option>
                            <option value="CEO">CEO</option>
                            <option value="CFO">CFO</option>
                            <option value="CISO">CISO</option>
                            <option value="CTO">CTO</option>
                            <option value="CIO">CIO</option>
                            <option value="PO">PO</option>
                            <option value="CPO">CPO</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
