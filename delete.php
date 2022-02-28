<?php
session_start();
  $connect = new mysqli("localhost","root","","wad");
  $query="SELECT* FROM `".$_SESSION['user_name']."` ORDER BY id ASC";
  $output=mysqli_query($connect,$query);
  if(mysqli_num_rows($output)>0)
  {
    while($row=mysqli_fetch_array($output))
    {
        $delete = "DELETE FROM `".$_SESSION['user_name']."` WHERE id=".$row["id"];
        $connect->query($delete);
    }
    //$query2="ALTER TABLE `".$_SESSION['user_name']."` RENAME TO `".$_SESSION['user_email']."`";
    //$output2=mysqli_query($connect,$query2);
    //create new table
  
      $connect->close();
        header("location: web.php");
        
  }
  else{
      echo $connect->error;
  }
  /*
  $connect = new mysqli("localhost","root","","wad");
  if($_SESSION['check']==0)
  {
    $query2="RENAME TABLE `".$_SESSION['user_name']."` TO  `".$_SESSION['user_email']."`";
    $output2=mysqli_query($connect,$query2);
     $_SESSION['user_name']=$_SESSION['user_email'];
    $connect->close();
  }

  $_SESSION["check"]=1;
      header("location: web.php");
      
 
  $query="SELECT* FROM `".$_SESSION['user_name']."` ORDER BY id ASC";
  $output=mysqli_query($connect,$query);
  if(mysqli_num_rows($output)>0)
  {
    while($row=mysqli_fetch_array($output))
    {
        $delete = "DELETE FROM `".$_SESSION['user_name']."` WHERE id=".$row["id"];
        $connect->query($delete);
    }
    $query2="ALTER TABLE `".$_SESSION['user_name']."` RENAME TO `".$_SESSION['user_email']."`";
    $output2=mysqli_query($connect,$query2);
    if(mysqli_num_rows($output2)>0)
    {
        session_destroy();
        header("location: web.php");
         $connect->close();
    }
  }*/

  ?>
  