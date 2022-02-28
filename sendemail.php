
<?php
    session_start();
    $_SESSION['cname']=$_POST['cname'];

    $_SESSION['cadress']=$_POST['cadress'];

    $_SESSION['cphone']=$_POST['cphone'];

  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once "vendor/autoload.php";




$mail = new PHPMailer(true);
 
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'umairboi20@gmail.com';   //username
    $mail->Password = 'Pakistan1@345';   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                    //smtp port
  
    $mail->setFrom('umairboi20@gmail.com', $_POST['cname']);
    $mail->addAddress('umairboi20@gmail.com', 'BURGER HOUSE');

    //php
    $connect=new mysqli("localhost","root","","wad"); 
    $query="SELECT* FROM `".$_SESSION['user_name']."` ORDER BY id ASC";
    $output=mysqli_query($connect,$query);
     $body='
     <table style="width:100%; border: 1px solid black; border-collapse: collapse;">
 <tr style=" border: 1px solid black; border-collapse: collapse;">
 <th width="40%" style=" border: 1px solid black; border-collapse: collapse;">Item Name</th>
 <th width="10%" style=" border: 1px solid black; border-collapse: collapse;">Quantity</th>
 <th width="20%" style=" border: 1px solid black; border-collapse: collapse;">Price</th>
 <th width="15%"style=" border: 1px solid black; border-collapse: collapse;" >Total</th>
</tr>';
if(mysqli_num_rows($output)>0)
{
  $total = 0;
  $mail->isHTML(true);
    $mail->Subject = 'New Order';
function ofbody($output,$total){
    while($row=mysqli_fetch_array($output))
{
  
$body2=$body2.'<tr style=" border: 1px solid black; border-collapse: collapse;" align="center">
<td style=" border: 1px solid black; border-collapse: collapse;">'.$row["name"].'</td>
<td style=" border: 1px solid black; border-collapse: collapse;">'.$row["quantity"].'</td>
<td style=" border: 1px solid black; border-collapse: collapse;">$'.$row["price"].'</td>
<td style=" border: 1px solid black; border-collapse: collapse;" >$'.$row["total"].'</td>

</tr>';

}

 
    
 
    return $body2;
}
$output2=mysqli_query($connect,$query);
$i=0;
while($row=mysqli_fetch_array($output2))
{
    $i++;
    $total = $total + ($row["quantity"] * $row["price"]);  

}

$_SESSION['total']=$total;


$body3='<tr style=" border: 1px solid black; border-collapse: collapse;;">
<td colspan="3" align="right" style=" border: 1px solid black; border-collapse: collapse;">Total</td>
<td align="right" style=" border: 1px solid black; border-collapse: collapse;">$ '.$total.'.00</td>
</tr>
</table>
';
$body4='<h3>Name:'.$_POST['cname'].'<br> Adress:'.$_POST['cadress'].'<br>Phone:'.$_POST['cphone'].'</h3><br>';
echo '<script>alert("Your Order Has Confirmed");</script>';
echo '<script>window.location="orderDetails.php"</script>'; 
  
   

}
else{
    echo '<script>alert("Empty cart");</script>';
    echo '<script>window.location="details.php"</script>'; 
}
$mail->Body=$body.ofbody($output,$total).$body3.$body4;
$mail->send();
    echo 'Message has been sent'; 
}
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
?>
