<?php
//include dbconnect.php;


mysql_connect('localhost', 'jocampan_jcuser', 'jc1234');
mysql_select_db('jocampan_jcpub');

$sql = "SELECT * FROM `menucat` ORDER by displayorder";
$result = mysql_query($sql);


echo "<select name='category'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['category'] . "'>" . $row['category'] . "</option>";
}
echo "</select>";

?>

