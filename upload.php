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
    <title>Add new questionaires</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h3>Upload New questionaires</h3>
            <form method="POST" action="api/upload.php" enctype="multipart/form-data">
            <label for="position" class="form-label">Choose Sector</label>
            <select class="form-control" name="position" id="position" required>
                <option value="" selected disabled>Select a sector</option>
                <option value="CEO">CEO</option>
                <option value="CFO">CFO</option>
                <option value="CISO">CISO</option>
                <option value="IT">IT</option>
                <option value="PO">PO</option>
            </select><br>
            <label for="position" class="form-label">Browse Questionaire (JSON)</label></br>              
            <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-success">
            <input type="submit" value="Upload" name="submit" class="btn btn-success">
            </form>
        </div>
      </div> 
    </div>
</body>
</html>
