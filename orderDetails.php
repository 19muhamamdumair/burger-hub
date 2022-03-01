<?php
session_start();
$connect=new mysqli("localhost","root","","wad");

$insert = "INSERT INTO myorder( `cname`, `caddress`, `cphone`, `total`) VALUES ('".$_SESSION["cname"]."','".$_SESSION["cadress"]."','".$_SESSION["cphone"]."','".$_SESSION["total"]."')";
          if($connect->query($insert))
          {
            echo '<script>window.location="customerDetails.php"</script>'; 
          }
          else{
              echo $connect->error;
          }
?>