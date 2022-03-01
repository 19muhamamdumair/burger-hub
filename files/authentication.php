<?php
$con=new mysqli("localhost","root","","wad");
if($_POST['password']=='123'&&$_POST['username']=='admin')
{
    $_SESSION['adminlogin']=1;
    header("location:admin.php");

}
else{
    echo "<script>alert('wrong password');</script>";
    header("location:adminLogin.php");
}
?>