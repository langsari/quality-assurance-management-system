<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       <?php 
include_once("scripts/connect.php");
$sql = "SELECT * FROM admin";

$sqlquery = mysql_db_query($name, $sql);
print"จำนวนผู้สมัครสมาชิกท้งหมด".mysql_num_rows($sqlquery)."คน";
mysql_close();

?>
    </body>
</html>
