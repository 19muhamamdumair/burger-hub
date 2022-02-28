<?php
session_start();
$_SESSION['login']=1;
$_SESSION['user_name'] = $_POST['username'];
$_SESSION['user_email'] = $_POST['useremail'];
$_SESSION['check']=0;
$name = $_POST["username"];
$con=new mysqli("localhost","root","","wad");
$q="CREATE TABLE IF NOT EXISTS `".$_SESSION['user_name']."` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(250) NOT NULL,
    `quantity` int(11) NOT NULL,
    `price` float NOT NULL,
    `total` float NOT NULL,
    PRIMARY KEY (`id`))";
  
  if($con->query($q)==TRUE)
  {
     
   echo '<script>window.location="web.php"</script>'; 
  }
  else{
      echo $con->error;
  }
?>