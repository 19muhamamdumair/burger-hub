<?php
	 session_start();
	//echo $_POST["name"];
	
	//echo "Name = ".$_POST["name"]."<br>";
	//echo "Email = ".$_POST["email"]."<br>";
	$name = $_POST["hidden_name"];
	$price = $_POST["hidden_price"];
    $quantity=$_POST["quantity"];
    $total=$price*$quantity;
  
	$con = new mysqli("localhost","root","","wad"); //1-servr name 2- username of database 3- password 4- database name
   
    /* $query="SELECT* FROM myorder ORDER BY id ASC";
    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_array($result))
      {
        $total=$row["total"]+($price*$quantity);
      }

    }
    else{
        $total=$price*$quantity;
    }
    echo $total;*/
   
    $flag=TRUE;

    $q2="SELECT `name` FROM ".$_SESSION["user_name"]. ";";
    $output=mysqli_query($con,$q2);
    if(mysqli_num_rows($output)>0)
    {
        while ($row=mysqli_fetch_array($output)) {
            
            if($row['name']==$name)
            {
                $flag=FALSE;
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="web.php"</script>';
            }
          
          } 
    }
    
    /*$q2="SELECT* FROM myorder where `name`=$name ORDER BY id ASC";
    $output=mysqli_query($con,$q2);
    if(mysqli_num_rows($output)>0)
    {
        echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="web2.php"</script>';  

    }*/
	if($flag==TRUE)
    {
        $q = "insert into `".$_SESSION['user_name']."`(name,quantity,price,total) values('".$name."','".$quantity."','".$price."','".$total."')";
        //echo $q;
    
        if($con->query($q)==TRUE){
            //echo "Data Inserted";
            header("Location:web.php");
    
        }else{
            echo $con->error;
        
        }
    }
   

		$con->close();
?>

