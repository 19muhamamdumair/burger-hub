<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='details.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>BURGER HOUSE</title>
</head>

<body>
    <div style="clear:both"></div>
    <br />
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
                             
            session_start();
            if($_SESSION['login']==0)
{
    echo "<script>alert('Login First')</script>";
    header("location:login.php");
}
                        if((strlen($_SESSION['user_name'])>5))
                        {
                            ?>

                        <button type="button " class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>
                            <?php
                            echo $_SESSION["user_name"];
                            ?>
                        </button>
                        <?php
                        }
                        else{
                            ?>

                        <button type="button " class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>
                            <?php
                            echo $_SESSION["user_name"];
                            ?>
                        </button>
                        <?php
                        }
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
                            <li> <a class="dropdown-item active" style="margin-right:1em;text-align: center;"
                                    href="web.php">Home</a></li>
                            <li> <a class="dropdown-item " style="text-align: center;" href="logout.php">Log out</a>
                         
                                   


                        </div>
                        <br>
                    </div>
                </div>
                <br>



                   </div> <!-- menu tag -->

</div>
</div>
    <h3>Order Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
            <?php  
     
       
            
                  $connect=new mysqli("localhost","root","","wad"); 
                 
                  $query="SELECT* FROM `".$_SESSION['user_name']."`ORDER BY id ASC";
                  $output=mysqli_query($connect,$query);
                  if(mysqli_num_rows($output)>0)
                  {
                    $total = 0;
                    while($row=mysqli_fetch_array($output))
                    {
                         
               echo"<tr>";
                    echo"<td>".$row["name"]."</td>";
                    echo"<td>".$row["quantity"]."</td>";
                    echo"<td>$".$row["price"]."</td>";
                   echo "<td>$".$row["total"]."</td>";
                   echo "<td><a href='remove.php?id=".$row["id"]."'><span
                   class='text-danger'>Remove</span></a></td>";
               
              echo" </tr>";

           
                 $total = $total + ($row["quantity"] * $row["price"]);  
                       
                    }
                  ?>

            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                <td></td>
            </tr>
            <?php  
                  }  
                  ?>
        </table>
    </div>
    <div class="container-fluid">
        <h3>ENTER DATA FOR HOME DELIVERY</h3>
        <form action="sendemail.php" method="POST">
            <div class="form-group">
                <label for="cname">Enter name:</label>
                <input type="text" name="cname" class="form-control" id="cname" placeholder="Your Name">
                <br>
                <label for="cadress">Enter adress:</label>
                <input type="text" name="cadress" class="form-control" id="cadress" placeholder="Your Adress">
                <br>

                <label for="cphone">Enter Phone no:</label>
                <input type="text" name="cphone" class="form-control" id="cphone" placeholder="Your Phone no">
                  <br>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="submit" value="Submit" class="btn btn-primary form-check-input"></input>
                    </label>
                </div>
            </div>


        </form>


    </div>
                </div>
                <script>
    function scrolldiv(id) {
        var elem = document.getElementById(id);
        elem.scrollIntoView();
    }
    </script>
</body>

</html>