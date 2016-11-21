 <?php $con = mysql_connect("localhost","jocampan_jcuser","jc1234");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("jocampan_jcpub", $con);

$result = mysql_query("SELECT * FROM aboutus");

while($row = mysql_fetch_array($result))
{

  
echo "<div>".$row['name']."</div>";
echo "<div>".$row['size']."</div>";
echo "<div>".$row['image']."</div>";


echo "<br />";
}

mysql_close($con); ?>