<?php
session_start();
include("lib/utility.php");
db_connect();
$username = $_POST['username'];
$password = $_POST['password'];
//echo $username, $password;

$sql = "SELECT * FROM admin where username='$username' and password='$password'";
$result = mysql_query($sql);
$row = mysql_num_rows($result);
$sql_m = "SELECT * FROM manager where username='$username' and password='$password'";
$result_m = mysql_query($sql_m);
$row_m = mysql_num_rows($result_m);
$sql_o = "SELECT * FROM officer where username='$username' and password='$password'";
$result_o = mysql_query($sql_o);
$row_o = mysql_num_rows($result_o);
$sql_l = "SELECT * FROM lecturer where username='$username' and password='$password'";
$result_l = mysql_query($sql_l);
$row_l = mysql_num_rows($result_l);
if($row == 1){
   $_SESSION['username'] = $username;
    header("Location:admin_home.php");
} 
 else if($row_m == 1){
    header("Location:../manager/manager_home.php");
}
else if($row_o == 1){
    header("Location:../officer/officer_home.php");
} 
else if($row_l == 1){
    header("Location:../lecturer/lecturer_home.php");
}
else {
    header("Location:index.php"); }
?>

