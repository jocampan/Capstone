
<html>
<body>
<?php include "security.php";  ?>
<h1>Remove Event Listing</h1>



<?php 

$con = mysqli_connect("localhost","jocampan_jcuser","jc1234","jocampan_jcpub");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  die();
  }

$result = mysqli_query($con,"SELECT * FROM event_calendar order by event_date");
$rownum = 0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
} else {
    echo "There are no events left";
	exit();
}
echo "<table>";
echo "<tr>";
echo "<td>Event Date</td>";
echo "<td>Title</td>";
echo "<td>Description</td>";
echo "<td>Remove</td>";
echo '</tr>';

while($row = mysqli_fetch_assoc($result))
{
	$event_date = $row['event_date'];
	$title = $row['title'];
	$description = $row['description'];
	$rownum = $row['id'];
	$removelink = "removeevent.php?rownum=".$rownum;
	echo "<tr>";
	echo "<td>".$event_date."</td>";
	echo "<td>".$title."</td>";
	echo "<td>".$description."</td>";
	echo "<td>"."<a href='".$removelink."'>Remove Event</a>"."</td>";
	echo '</tr>';

}
echo "</table>";



mysqli_close($con); 

?> 
<?php include "bottommenu.php";  ?>
<a href="events.php">Go to Events Page</a>
</body>
</html>