
<html>
<body>
<?php include "security.php";  ?>
<h1>Remove Salads Listing</h1>



<?php 

$con = mysqli_connect("localhost","jocampan_jcuser","jc1234","jocampan_jcpub");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
  }

$result = mysqli_query($con,"SELECT * FROM salads order by name");
$rownum = 0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
} else {
    echo "There are no salads left";
	exit();
}
echo "<table>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>Description</td>";
echo "<td>Price</td>";
echo "<td>Remove</td>";
echo '</tr>';

while($row = mysqli_fetch_assoc($result))
{
	$name = $row['name'];
	$description = $row['description'];
	$price = $row['price'];
	$rownum = $row['id'];
	$removelink = "removesalad.php?rownum=".$rownum;
	echo "<tr>";
	echo "<td>".$name."</td>";
	echo "<td>".$description."</td>";
	echo "<td>".$price."</td>";
	echo "<td>"."<a href='".$removelink."'>Remove Salad</a>"."</td>";
	echo '</tr>';

}
echo "</table>";



mysqli_close($con); 

?> 
<?php include "bottommenu.php";  ?>
<a href="salads.php">Go to Salads Menu</a>
</body>
</html>