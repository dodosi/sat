<?php
 // Set Content-Security-Policy header
 header("Content-Security-Policy: frame-src http://162.240.104.198:8088/ http://162.240.104.198:8088/");
?>
<?php
 include 'navbar.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Embedded Superset Dashboard</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
    }
    .container {
        text-align: center;
        margin-top: 20px; /* Space between navbar and content */
    }
    table {
        margin: 0 auto;
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
        color: #333;
        font-size: 1.5em;
    }
    td a {
        text-decoration: none;
        color: #007bff;
        font-size: 1.25em;
    }
    td a:hover {
        color: #0056b3;
    }
    h1 {
        margin-bottom: 30px;
        font-size: 2.5em;
        color: #333;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <table class="display" >
            <thead>
                <tr>
                    <th>Dashboard Name</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                
                    <td>DSbD-specific awareness</td>
                    <td><a href="dashboard.php?dash=DSbD">Explore</a></td>
                </tr>
                <tr>
                   <td>Security in technology adoption</td>
                    <td><a href="dashboard.php?dash=STA">Explore</a></td>
                </tr>
                <tr>
                   <td>Security priority and investment</td>
                    <td><a href="dashboard.php?dash=SPI">Explore</a></td>
                </tr>
                <tr>
                    <td>Incidents and breaches</td>
                    <td><a href="dashboard.php?dash=IAB">Explore</a></td>
                </tr>
                <tr>
                    <td>Technology and data usage</td>
                    <td><a href="dashboard.php?dash=TDU">Explore</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
