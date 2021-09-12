<?php

          require 'class.phpmailer.php';
          require 'class.smtp.php';
          $SMTPHost = "smtp.gmail.com";

           $inputKey = $_GET["key"];
           $inputCode = $_GET["code"];
           $inputmailID = $_GET["mailID"];
           $inputOffer = $_GET["offer"];
           $inputOfferType = $_GET["offerType"];
           $inputName = $_GET["Name"];
           $inputPhoneNumber = $_GET["phoneNumber"];
           $inputIMEI = $_GET["IMEI"];
           $inputDeviceName = $_GET["deviceName"];
           $inputSaleDate = $_GET["saleDate"];
           $inputOfferName = $_GET["offerName"];

        if ($inputKey == "kService2020:18") {



$msg= "<div><h3>Thankyou For Buying At Gokak Mobile Sales!</h3><br><div style='background-color=grey;'><b>Purchase Details:</b><br>Name:<b> ".$inputName."</b><br>PhoneNumber:<b> ".$inputPhoneNumber."</b><br>EmailID: <b>".$inputmailID."</b><br>Device IMEI: <b>".$inputIMEI."</b><br>Product Name: <b>".$inputDeviceName."</b><br> Date: <b>".$inputSaleDate."</b><br>Offer Plan: <b>".$inputOfferName."</b></div><br>You have purchased device with ".$inputOffer." Offer Plan.<br>We have sent you the voucher code to activate your plan. Use this code to sign in the ".$inputOffer." application.</div><div style='display:flex;align-items:center;justify-content:center;'><h2 style='width:70%;background-color:#FFFFEA;padding:10%;'>VoucherCode: ".$inputCode ."</h2></div><br><br><br><i>Do Not Share This Code To Anyone.</i>";

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $SMTPHost;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'gokak.mobileservice18@gmail.com';                 // SMTP username
$mail->Password = 'Gokakmobile@18';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('gokak.mobileservice18@gmail.com', 'GokakMobileSales');
$mail->addAddress($inputmailID,"GokakMobilesCustomer");     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(True);                                  // Set email format to HTML

$mail->Subject = "Gokak Mobile Sales: Your ".$inputOffer." Voucher Activation Code!";
$mail->Body    = $msg;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '1';
}


    }
         
  else{
  echo "invalidKey!";
  }
?>
