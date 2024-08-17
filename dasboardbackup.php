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
</head>
<body>
<!-- Embedding Superset Dashboard URL within an iframe -->
<iframe src="http://162.240.104.198:8088/dashboard/list/?standalone=1" 
        width="100%" 
        height="800px" 
        frameborder="0">
  <!-- Fallback content or message if iframes are not supported or accessible -->
  <p>Your browser does not support iframes.</p>
</iframe>

</body>
</html>
