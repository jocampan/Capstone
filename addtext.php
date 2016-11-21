<html>
<body>

<form action="aboutus.php" method="post">
name/description: <input type="text" name="name" /><br><br>
<br><br>
 

</form>
 
<?php
$con = mysql_connect("localhost","jocampan_jcuser","jc1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("jocampan_jcpub", $con);
 
$sql="INSERT INTO aboutus (name)
VALUES
('$_POST[name]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>
 