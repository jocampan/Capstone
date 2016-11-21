<?php include "security.php";  ?>
<?php
 $success ="";
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
	 
$connection = mysql_connect("localhost", "jocampan_jcuser", "jc1234"); // Establishing Connection with Server
$db = mysql_select_db("jocampan_jcpub", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$event_date = $_POST['event_date'];
$title = $_POST['title'];
$description = $_POST['description'];

if($event_date !=''||$title !=''){
//Insert Query of SQL
$query = mysql_query("insert into event_calendar(event_date, title, description) values ('$event_date', '$title', '$description')");

$success="Data Inserted successfully...!!";
//echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}


mysql_close($connection); // Closing Connection with Server
?>


<!DOCTYPE html>
<html>
<head>
<title>Events Update</title>
<link href="css/insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<H1>&nbsp;John John's Dogs</H1><H2>"Events" Webpage Maintenance</H2>
<p> Please enter an event update below</p>
</div>
<form action="eventsupload.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Event_date:</label>
<input class="input" name="event_date" type="text" value="">
<label>Title:</label>
<input class="input" name="title" type="text" value="">
<label>Description:</label>
<input class="input" name="description" type="text" value="">
<input class="submit" name="submit" type="submit" value="Insert">
<div><?php echo $success ?></div>
</form>
</div>
</div>
<?php include "bottommenu.php";  ?>
</body>
</html>