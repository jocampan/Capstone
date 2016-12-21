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

if($event_date =='1234567890//'and $title !='' and $description){
//Insert Query of SQL
$query = mysql_query("insert into event_calendar(event_date, title, description) values ('$event_date', '$title', '$description')");

$event_date = '03/22/2010';
$test_arr  = explode('/', $event_date);
if (checkdate($test_arr[0], $test_arr[1], $test_arr[2])) {
    // valid date ...
}

$success="Data Inserted successfully...!!";
//echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank or date is entered incorrectly....!!</p>";
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
<input class="input" name="title" type="text" size="20" maxlength="15"value="">
<label>Description:</label>
<textarea name="description" wrap="hard" cols="30" rows="3" maxlength="120" ></textarea>
<input class="submit" name="submit" type="submit" value="Insert">
<div><?php echo $success ?></div>
</form>
</div>
</div>
<?php include "bottommenu.php";  ?>
</body>
</html>