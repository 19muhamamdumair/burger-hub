<?php
session_start();
if($_SESSION['login']==0)
{
    echo "<script>alert('Login First')</script>";
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en" style=" scroll-behavior: smooth;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='web.css'>
    <title>BURGER HOUSE</title>
</head>

<body>
    <div class="contain">
        <div class="header">


            <div class="logo"><img src="./assets/logo.png" width="263px" height="58px"></div>

            <div class="menu">

                <h1 style="font-size: 14px;color: brown;margin-top: 0em;padding-left: 6em;font-weight: lighter;"> <img
                        src="vso.png" width="31px" height="23px" style="margin-right: 1em;">Express Delivery +1 93 4054
                    40495

                </h1>
                <!-- <div class="dropdown">
                    <div class="add" style="float:left;margin-top: -2.5em;padding-left: 28.5em;">
                        <a class="btn btn-danger btn-sm dropdown-toggle" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>

                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>

                </div>-->
                <div style="">
                    <div class="btn-group" style="float:left;margin-top: -2.5em;padding-left: 26.5em;">
                        <?php 
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
                                    href="details.php">View Cart</a></li>
                            <li> <a class="dropdown-item " style="text-align: center;" href="logout.php">Log out</a>
                          


                        </div>
                        <br>
                    </div>
                </div>
                <br>



                <nav class="navbar navbar-expand-sm bg-light">

                    <div class="container-fluid">
                        <!-- Links -->
                        <ul class="navbar-nav" style="list-style-type:none;">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <h1><b>HOME</b></h1>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href='javascript:scrolldiv("mymenu");'>
                                    <h1><b>MENU</b></h1>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="javascript:scrolldiv('contact');">
                                    <h1><b>CONATCT US</b></h1>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:scrolldiv('story');">
                                    <h1><b>OUR STORY</b></h1>
                                </a>
                            </li>


                        </ul>
                    </div>

                </nav>
            </div> <!-- menu tag -->

            <div class="text">
                <h1
                    style="border: 1px dashed black; width: 70%;font-size: 16px; padding: 1em;margin: 1em; font-family: sans-serif;">
                    IT IS A GOOD TIME FOR THE GREAT TASTE OF BURGERS</h1>


                <br>
                <h1 style="font: sans-serif bolder ;font-size: 4em;padding-left: 16px;margin: 0px;"><b>BURGER</b></h1>
                <h1 style="font: sans-serif  ;font-size: 3em;padding-left: 16px;margin: 0px"><b>WEEK</b></h1>

            </div>
            <div class="img1"><img src="./assets/burger.png" width="470px" height="556px"></div>
        </div>
        <!--header-->

        <div class="body1">
            <div class="image1"><img src="./assets/body1img.png"></div>
            <div class="image2"><img src="./assets/body1img1.png"></div>
            <div class="image3"><img src="./assets/body1img2.png"></div>
        </div>
        <div class="content1">
            <div class="text1"
                style="width: 35%;height: 20%;padding-bottom: 10px;border: 1px solid yellow;background-color: #ffbf45;margin: auto;">
                <h1 style="font: sans-serif bold ; text-align: center;"><b>ALWAYS TASTY BURGER</b></h1>
            </div>
            <div class="text2"
                style="width: 80%;height: 40%;  font-family: sans-serif ;font:bolder ;font-size: 2em; color: brown; text-align: center;margin: auto;">
                <h1 style="margin-top: 0;"><strong>CHOOSE & ENJOY</strong></h1>
            </div>
            <div class="text3"
                style="width: 80%;height: 20%;  font-family: sans-serif ;font-size: 22px; color: brown; text-align: center;margin: auto;margin-top: 0;">
                <p style="margin-top:0;padding-top: 0;">The best burgers offer a combination of tastes and textures –
                    sweet, sour, salt – with a bit of crunch</p>
            </div>
        </div>
        <!--content1-->

        <div class="cards" id="mymenu">
            <div class="add" style="float:right;">
                <a href="details.php" class="btn btn-danger btn-md">
                    <span class="glyphicon glyphicon-shopping-cart"></span> View Cart
                </a>
            </div>
            <div class="cart">
                <?php
              $connect=new mysqli("localhost","root","","wad");
                  $query="SELECT* FROM myproducts ORDER BY id ASC";
                  $result=mysqli_query($connect,$query);
                  
                  if(mysqli_num_rows($result)>0)
                  {
                    while($row=mysqli_fetch_array($result))
                    {

                   
                    
                ?>
                <div class="card1">
                    <form method="post" action="insertorder.php">
                        <div align="center">
                            <img src="<?php echo $row["image"]; ?>" width="349px" height="303px" />
                            <h1 align="center"><?php echo $row["name"];?></h1>
                            <p align="center"><?php echo $row["description"];?></p>
                            <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger"
                                value="Add to Cart" />
                        </div>
                    </form>
                </div>
                <?php
                       }
                  }
                ?>

            </div>
            <!--card1-->

        </div>
     
        <div class="footer">

            <div class="text" id="contact">
                <form action="sendmsg.php" method="POST">
                    <div class="form-group">
                        <label for="name">Enter name:</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                        <br>


                        <label for="phone">Enter Phone no:</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone no">
                        <br>
                        <label for="message">Enter message:</label>
                        <input type="text" name="message" class="form-control" id="message" placeholder="Your Message">
                        <br>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="submit" value="Submit" class="btn btn-primary form-check-input"></input>
                            </label>
                        </div>
                    </div>

                </form>

                <h3> BURGER HOUSE Regional Office</h3>
                <p>
                    27-A, Ali Block,<br>

                    Barkat Market, New Garden Town,<br>

                    Lahore, Pakistan.<br>

                    Ph#: 0425884570
                </p>
            </div>
            <div class="footerimg"  style="float: left;">
                <img src="./assets/footer.png" width="700px" height="440px">
            </div>
            <div class="design" >
                <div class="text">
                    <h3>Building a legacy takes it's time, effort, consistency and dedication.</h3>
                    <h4>With just a thought in mind to deliver with creativity and the taste Burger lovers crave, we
                        started with a simple take away outlet at Khayaban-e-Rahat in Karachi.

                        From introducing the American burger smash technique into the market, serving delicious
                        mouth-watering burgers with saucy and scrumptious fries, we’re doing it all!

                        Our key to success has solely been innovating and experimenting, living up to our name ''BURGER
                        LAB".

                        Growing to 32 outlets across 9 cities in Pakistan in just 8 years, the brand has become a
                        household name.

                        Not long from now, we wish to establish it in the near future as an International Burger
                        Franchise</h4>
                </div>
                <div class="footerimg" style="float: left;" id="story">
                    <img src="./assets/about us.jpg" width="700px" height="440px">
                </div>
               
                <!-- <img src="./assets/about us.jpg" width="1330" height="525px">-->
            </div>
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