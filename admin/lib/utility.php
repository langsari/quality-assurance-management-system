<?php
function db_connect() {
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "qa";
    $con = mysql_connect($hostname, $username, $password) or die(mysql_error());
    mysql_select_db($db_name, $con) or die(mysql_error);
}
function id_check(){
}
function check_login($username, $dest) {
    if(!isset($_SESSION['$username'])) {
        header("location: $dest");
        return;
    }
}
?>