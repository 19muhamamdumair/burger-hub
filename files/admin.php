<?php
session_start();



?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='details.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<div class="main">
    <div class="contain">
        <div class="header">


            <div class="logo"><img src="./assets/logo.png" width="263px" height="58px"></div>

            <div class="menu">

                <h1 style="font-size: 14px;color: brown;margin-top: 0em;padding-left: 5em;font-weight: lighter;"> <img
                        src="vso.png" width="31px" height="23px" style="margin-right: 1em;">Express Delivery +1 93 4054
                    40495

                </h1>
                <br>

                <div style="">
                    <div class="btn-group" style="float:left;margin-top: -4em;padding-left: 26.5em;">
                        <?php 
                             
       
                    
                            ?>

                        <button type="button " class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>
                            <?php
                            echo "admin";
                            ?>
                        </button>
                        <?php
                        
                          /*if((strlen($_SESSION['user_name'])>5))
                          {
                              $size=strlen($_SESSION['user_name'])/2;
                            for($i=0;$i<strlen($_SESSION['user_name'])/2;$i++)
                            {
                             
                                echo $_SESSION["user_name"][$i];
                              
                            }
                            for($j=$size;$i<strlen($_SESSION['user_name']);$j++)
                            {
                             
                                echo $_SESSION["user_name"][$j];
                              
                            }
                          }
                          else{
                            echo $_SESSION["user_name"];
                          }*/
                       
                      
                      ?>
                        <div class="dropdown-menu "
                            style="text-align: center;margin-bottom:1em;margin-left: -10em;margin-top: 0em;position:relative !important;">
                        
                            <li> <a class="dropdown-item " style="text-align: center;" href="adminlogout.php">Log out</a>
                         
                                   


                        </div>
                        <br>
                    </div>
                </div>
                <br>



                   </div> <!-- menu tag -->

</div>
</div>

    <?php
	$con = new mysqli("localhost","root","","wad");
	
	$select = "SELECT * FROM myorder";
	$data = $con->query($select);
   ?>
    <div class="main">
    <div class="table-responsive">
        <table class="table table-bordered">
            <?php 
    echo "<tr>";
		echo "<th>Customer ID</th>";
		echo "<th>Customer Name</th>";
		echo "<th>Customer Address</th>";
        echo "<th>Customer Phone</th>";
        echo "<th>Customer Total</th>";
	echo "</tr>";
	while ($x = $data->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$x["id"]."</td>";
		echo "<td>".$x["cname"]."</td>";
		echo "<td>".$x["caddress"]."</td>";
		echo "<td>".$x["cphone"]."</td>";
		echo "<td>".$x["total"]."$</td>";
		echo "</tr>";
	}
	

	?>
    </table>

    </div>
</div>

</body>

</html>