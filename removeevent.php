
<?php include "security.php";  ?>
<?php

$id = isset($_GET['rownum']) ? (int)$_GET['rownum'] : 0;

if($id){

	$con = mysqli_connect("localhost","jocampan_jcuser","jc1234","jocampan_jcpub");

	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  die();
	  }
	$sql = "delete from event_calendar where id=".$id;
	$result = mysqli_query($con,$sql);
	

}

header("Location: eventsremove.php");

?>
<?php include "bottommenu.php";  ?>