<?php

$servername = "localhost";

$username = "jocampan_jcuser";

$password = "jc1234";

$dbname = "jocampan_jcpub";


// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
  }
  
?>

	