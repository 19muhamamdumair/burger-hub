<?php

	//echo $_POST['name'];
	
	//echo "name=".$_POST['name']."<br>";

	//echo "Email=".$_POST['email']."<br>";

	echo "cname=".$_POST['cname']."<br>";

	echo "cadress=".$_POST['cadress']."<br>";

	echo "cphone=".$_POST['cphone']."<br>";

	
	$con=new mysqli("localhost","root","","wad");

	$name=$_POST['cname'];
	$adress=$_POST['cadress'];
	$phone=$_POST['cphone'];
	//$q = "INSERT INTO `tbl_p`( `name`, `image`, `price`) VALUES (\'Burger1\',\'cardimg1.png\',\'500.00\');";
	$q = "INSERT INTO `cdetails`( `name`, `adress`,`phone`) VALUES ('".$name."','".$adress"','".$phone."')";

	if($con->query($q)==TRUE)
	{
		echo "data inserted succesfully";
	}
	else{
		echo $con->error;
		$con->close();
	}



 ?>