
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
	$sql = "delete from drinks where id=".$id;
	$result = mysqli_query($con,$sql);
	

}

header("Location: drinksremove.php");

?>
<?php include "bottommenu.php";  ?>