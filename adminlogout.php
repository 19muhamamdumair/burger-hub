<?php
session_start();
$connect = new mysqli("localhost","root","","wad");

$_SESSION['adminlogin']=0;
    session_destroy();
    header("location:adminLogin.php");

?>