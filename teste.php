 <?php
   // require_once '/PHPMailer/PHPMailerAutoload.php';
    require_once '/PHPMailer/src/PHPMailer.php';
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Debugoutput = 'html';
  $mail->Host = "smtp.gmail.com.br";
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->IsHTML(true);
  $mail->Username = "teste@gmail.com";
  $mail->Password = "senhagmail";
  $mail->setFrom('teste@gmail.com', 'PIAG');
  $mail->addAddress("teste2@gmail.com", 'teste2');
  $mail->Subject = 'Recupera senha';
  $conteudo_email = "Teste ";
  $mail->Body = $conteudo_email;
  
  //send the message, check for errors
  if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      echo "Enviado";
  }
 

  ?>
  