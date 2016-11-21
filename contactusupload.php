<?php include "security.php";  ?>
<?php
	$success ="";
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
	 
$connection = mysql_connect("localhost", "jocampan_jcuser", "jc1234"); // Establishing Connection with Server
$db = mysql_select_db("jocampan_jcpub", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into contactus(name, email, phone, comments) values ('$name', '$email', '$phone','$comments')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
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
<title>Contact Us</title>
<link href="css/insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">

</div>
<h4><form action="contactus.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h1>Please eneter your Information </h1>
<br></br>
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<br></br>
<label>Email:</label>
<input class="input" name="email" type="text" value="">
<br></br>
<label>Phone:</label>
<input class="input" name="phone" type="text" value="">
<br></br>
<label>Comments:</label>
<textarea name="comments" rows="5" cols="40"></textarea>
<br></br>
<input class="submit" name="submit" type="submit" value="Insert">
<div> </h4>
<?php echo $success ?></div>
</form>
</div>
</div>
<?php include "bottommenu.php";  ?>
</body>
</html>