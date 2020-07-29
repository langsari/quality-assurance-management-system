<?php
include 'lib/utility.php';
db_connect();
$username = $_POST['username'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$e_mail = $_POST['e_mail'];
$department = $_POST['department'];

// Insert a row of information into the table "example"

$sql = "insert into manager (username, password, fname, lname, phone ,e_mail, department) VALUES ('$username','$password','$fname','$lname','$phone','$e_mail','$department')" ;              
$result = mysql_query($sql);
?>



<head>

	<!--Meta Tags-->
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta http-equiv="refresh" content="1; url=manager_view.php" />
</head>

