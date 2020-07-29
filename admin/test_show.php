<?php
include 'lib/utility.php';
$sql = "SELECT * FROM manager";
$result = mysql_query($sql);
while($result_row = mysql_fetch_row($result)){
     echo "<h3>" .$result_row['fname']."</h3>";
}
?>
