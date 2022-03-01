<?php
$con=new mysqli("localhost","root","","wad");
$q="CREATE TABLE IF NOT EXISTS `myproducts` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(250) NOT NULL,
    `price` double(9,2) NOT NULL,
    `image` varchar(250) NOT NULL,
    `description` varchar(1000) NOT NULL,
    PRIMARY KEY (`id`))";
  
  if($con->query($q)==TRUE)
  {
      echo "data 1 inserted succesfully <br>";
  }
  else{
      echo $con->error;
  }

  
  $q2="INSERT INTO `myproducts` (`id`, `name`, `price`, `image`,`description`) VALUES
  (1, 'Burger 1',  500.00, './assets/cardimg1.png','A hamburger is not made of ham but of ground-up beef, shaped into a patty,which is then grilled and placed between the two halves of a sesame seed bun.'),
  (2, 'BUrger 2',  600.00, './assets/cardimg2.png','A hamburger is not made of ham but of ground-up beef, shaped into a patty,which is then grilled and placed between the two halves of a sesame seed bun.'),
  (3, 'Burger 3',  700.00, './assets/cardimg3.png','A hamburger is not made of ham but of ground-up beef, shaped into a patty,which is then grilled and placed between the two halves of a sesame seed bun.')";
    if($con->query($q2)==TRUE)
    {
        echo "data 2 inserted succesfully";
    }
    else{
        echo $con->error;
        $con->close();
    }
?>