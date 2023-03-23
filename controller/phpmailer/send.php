<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    
    function verify($nama,$email,$pesan) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'danaprint123@gmail.com';                     //SMTP username
        $mail->Password   = 'yoyjwxiwpaxljpbt';                               //SMTP password                 //Enable verbose debug output
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    

        $mail->setFrom('danaprint123@gmail.com', 'verifikasi');
        $mail->addAddress($email);     //Add a recipient
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $pesan;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        if($mail->send()){
            echo"
            <script>alert('pesan terkirim')</script>
            ";
        }
    } 
?>