<?php
session_start();
$connect = new mysqli("localhost","root","","wad");
$query="DROP TABLE `".$_SESSION['user_name']."`";
$output=mysqli_query($connect,$query);
$_SESSION['login']=0;
    session_destroy();
    header("location:login.php");

?>