<?php
session_start();
$connect=new mysqli("localhost","root","","wad");
$q="CREATE TABLE IF NOT EXISTS `".$_SESSION['user_email']."` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(250) NOT NULL,
    `quantity` int(11) NOT NULL,
    `price` float NOT NULL,
    `total` float NOT NULL,
    PRIMARY KEY (`id`))";
    $connect->query($q);
  
  {  
    $query="SELECT* FROM `".$_SESSION['user_name']."` ORDER BY id ASC";
    $output=mysqli_query($connect,$query);
    if(mysqli_num_rows($output)>0)
    {
      while($row=mysqli_fetch_array($output))
      {
          $insert = "INSERT INTO `".$_SESSION['user_email']."`( `name`, `quantity`, `price`, `total`)
          VALUES ('".$row["name"]."','".$row["quantity"]."','".$row["price"]."','".$row["total"]."')";
          if($connect->query($insert))
          {
              echo "\n";
          }
          else{
              echo $connect->error;
          }
      }
         
      $_SESSION['check']=1;
      echo '<script>window.location="delete.php"</script>'; 
           $connect->close();
  }

  }


 
?>