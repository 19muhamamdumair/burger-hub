
<?php
    session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once "vendor/autoload.php";
$name=$_POST['name'];
$message=$_POST['message'];
$phone=$_POST['phone'];



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
    
$body4='<h3>Name:'.$_POST['name'].'<br> Phone:'.$_POST['phone'].'<br>Message:'.$_POST['message'].'</h3><br>';
$mail->Body=$body4;
$mail->send();
    echo 'Message has been sent'; 
    echo '<script>window.location="web.php"</script>'; 

}
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
?>
