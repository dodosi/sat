<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>
<!-- Bootstrap CSS CDN -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
<script src="https://unpkg.com/survey-jquery@1.9.109/survey.jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/survey-jquery@1.9.109/defaultV2.min.css" />

<style>
    /* Additional styles can be added here if needed */
    .left-pane, .content-pane {
        padding: 10px;
        margin-top: 0px;
    }
    .left-pane {
        border-right: 1px solid #ccc;
    }
    .card {
        margin-bottom: 0px;
    }
     /* Styling for the dark blue div */
     .dark-blue-div {
        border: 2px solid #0cad5d;
        border-radius: 15px; 
        background-color: #506fa1;
        color: white;
        padding: 10px;
    }
    .blue-card {
        background-color: #506fa1;
     
    }
     /* Styling for the rounded border div */
     .rounded-border-div {
        border: 2px solid #0cad5d; /* You can change the border color or width as desired */
        border-radius: 15px; /* This creates the rounded corners */
        padding: 10px;
        margin: 5px auto; /* Centers the div horizontally */
        text-align: center; /* Centers the content inside */
        /* color: white; */
    }
    /* Styling for the rounded border div */
    .rounded-border-div-1 {
        border: 2px solid #0cad5d; /* You can change the border color or width as desired */
        border-radius: 10px; /* This creates the rounded corners */
        padding: 1px;
        margin: 1px auto; /* Centers the div horizontally */
        text-align: center; /* Centers the content inside */
    }
    /* styles.css */
    .white-text {
        color: white;
    }
</style>
</head>
<body>
<!-- Dark Blue Div with Heading -->
<a href="http://162.240.104.198:8088/" style="color: blue; text-decoration: underline; text-align: right;">Go To Dashboard</a>
  |&nbsp<a href="logout.php" id="logoutLink" style="color: blue; text-decoration: underline; text-align: right;">Logout</a>
<div>
    <div class="dark-blue-div">
        <h2>DSbD Self-Assessment Tool  <span style="float: right;">ROLE:
        <?php 
                session_start();
                if(isset($_SESSION['position'])) {
                    echo $_SESSION['position'];
                } 
            ?>
        </span>
        
        </h2>
    </div>     
    <div class="container-fluid">
        <div class="row">
            <!-- Left Pane -->
            <div class="col-md-3 left-pane">
                <!-- Card 1 -->
                <div class="card blue-card rounded-border-div-1">
                    <div class="card-body">
                        <h5 class="card-title" style=>
                          <a href="testing2.php?dc=Security Priority and Investment" style="color: white;"> <p>Security Priority and Investment </p></a>
                        </h5>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div  class="card  blue-card rounded-border-div-1">
                    <div class="card-body">
                        <h5 class="card-title white-text" >
                        <a href="testing2.php?dc=Incidents and Breaches" style="color: white;"> <p>Incidents and Breaches </p></a>
                    
                        </h5>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="card  blue-card rounded-border-div-1">
                    <div class="card-body">
                        <h5 class="card-title">
                          <a href="testing2.php?dc=Technology and Data Usage" style="color: white;"> <p>Technology and Data Usage </p></a>
                        
                        </h5>
                    </div>
                </div>
                
                <!-- Card 4 -->
                <div class="card  blue-card rounded-border-div-1">
                    <div class="card-body">
                        <h5 class="card-title">
                        <a href="testing2.php?dc=Security in technology adoption" style="color: white;"> <p>Security in technology adoption</p></a>
                        </h5>
                    </div>
                </div>
                
                <!-- Card 5 -->
                <div class="card  blue-card rounded-border-div-1">
                    <div class="card-body">
                        <h5 class="card-title">
                        <a href="testing2.php?dc=DSbD specific awareness" style="color: white;"> <p>DSbD-specific awareness </p></a>
                        </h5>
                    </div>
                </div>
                
            </div>
            
            <!-- Content Pane -->
            <div class="col-md-9 content-pane">
                    <!-- <div class="dark-blue-div rounded-border-div">
                        <h2>
                            <?php
                           // if(isset($_GET['dc'])){
                               // echo $_GET['dc'];
                           // }
                         ?>
                        </h2>
                    </div> -->
                    <div class="rounded-border-div-1" style="border: 2px solid #0cad5d; border-radius: 15px; padding: 20px; min-height: 300px; margin: 5px auto; text-align:left;">
                        <div id="surveyContainer"></div>
                        <div id="surveyElement"></div>
                    </div>
            </div>    
        </div>
    </div>
    <div class="dark-blue-div">
        <h6>DSbD Self-Assessment Tool <span style="float: right;"><button class="btn-primary">Save for later use</button></span></h6>
    </div> 
</div>    
<!-- Bootstrap JS and Popper.js CDN -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./js/json.js"></script>
<script src="./js/theme.js"></script>
<script>
    function logout() {
        
            sessionStorage.removeItem("position");
            sessionStorage.removeItem("username");
            sessionStorage.removeItem("questionare");
            sessionStorage.clear();
            window.location="login.php";
    }

    $(document).ready(function() {
        $("#logoutLink").click(function(event) {
            event.preventDefault();
            logout();
        });
    });
    </script>
</body>
</html>