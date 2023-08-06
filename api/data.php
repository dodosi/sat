<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Origin: http://localhost:3000");
echo file_get_contents( "v1.json" ); // get the contents, and echo it out.
?>