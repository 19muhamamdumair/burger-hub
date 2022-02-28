<?php
session_start();
  $connect = new mysqli("localhost","root","","wad");
  $query="SELECT* FROM `".$_SESSION['user_name']."` ORDER BY id ASC";
  $output=mysqli_query($connect,$query);
  if(mysqli_num_rows($output)>0)
  {
     
     $delete = "DELETE FROM `".$_SESSION["user_name"]."` WHERE id=".$_GET["id"];
     if($connect->query($delete)==TRUE){
          
          header("location: details.php");
     }
     else{
          echo $connect->error;
     }
    
  }
  else{
       echo $connect->error;
  }
  $connect->close();
  ?>