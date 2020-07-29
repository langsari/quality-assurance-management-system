<?php
session_start();
if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
    header("location:index.php");
   // exit;
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
