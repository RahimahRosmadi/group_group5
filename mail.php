<?php
//setup phpmailer
$message=$_GET['message'];
$firstname=$_GET['firstname'];
$email=$_GET['email'];
$subject=$_GET['subject'];


      

      ?>
      <!DOCTYPE html>
      <html>
      <head>
            <title>123</title>
      </head>
      <body>
      <?php
      require_once("class.phpmailer.php");


      $to['email'] = "dream.c4fe@gmail.com";      
      $to['name'] = "Dream Cafe";

      $mail = new PHPMailer;
      $mail->isSMTP();
      $mail->Host = "smtp.gmail.com";
      $mail->SMTPAuth = true;
      
      $mail->Username = "dream.c4fe1@gmail.com";  // SMTP username
      $mail->Password = "Dreamcafe2002"; // SMTP password
      
      $mail->SMTPSecure = "ssl";
      $mail->Port = 465;

    
      $mail->FromName = $firstname;
      $mail->AddReplyTo($email); 
      $mail->Priority = 1;

      $mail->AddAddress($to['email'],$to['name']);

      $mail->Subject = $subject;
      $mail->Body    = $message;

      if (!$mail->send()) {
      $mail->ErrorInfo;
      } else {
      echo "<script type='text/javascript'>window.top.location='feedback.html';</script>"; exit;
    
      }
      ?>
      
      </body>
      </html>