<?php include "security.php";  ?>
<?php
 $success ="";
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
	 
$connection = mysql_connect("localhost", "jocampan_jcuser", "jc1234"); // Establishing Connection with Server
$db = mysql_select_db("jocampan_jcpub", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

if($name !=''||$description !=''){
//Insert Query of SQL
$query = mysql_query("insert into drinks(name, description, price) values ('$name', '$description', '$price')");
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
<title>Drinks Update</title>
<link href="css/insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<H1>&nbsp;John John's Dogs</H1><H2>"Drinks" Webpage Maintenance</H2>
<p> Please enter a new Drink update below</p>
</div>
<form action="drinksupload.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>Description:</label>
<input class="input" name="description" type="text" value="">
<label>Price:</label>
<input class="input" name="price" type="text" value="">
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>
<?php include "bottommenu.php";  ?>
</body>
</html>