<?php

use PHPMailer\PHPMailer\PHPMailer;

if($_POST)
{
    require_once "PHPMailer/Exception.php";
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";

    $mail = new PHPMailer();

    $your_email = "efurspam@gmail.com";


    //Start the session
    session_start();


    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        //exit script outputting json data
        $output = json_encode(
            array(
                'type'=>'error',
                'text' => 'Request must come from Ajax'
            ));

        $_SESSION['POST'] = ["error" => true];
        header("Location: ../index.php#beratung");
    }


    if(isset($_POST["beratungmail"])) {
       $beratungmail = $_POST["beratungmail"];
    } else {

        $_SESSION['POST'] = ["error" => true];
        header("Location: ../index.php#beratung");

    }



    //Server settings
//    $mail->isSMTP();                                            // Send using SMTP
//    $mail->Host       = 'smtp.googlemail.com';                    // Set the SMTP server to send through
//    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//    $mail->Username   = 'website@gmail.com';                     // SMTP username
//    $mail->Password   = 'your password';                         // SMTP password
//    $mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
//    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($user_Email,$user_Name);
    $mail->addAddress($your_email, 'Website Kings');     // Add a recipient
    $mail->addReplyTo($your_email, 'Information');


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Neuer Beratungswunsch von Website-Kings';
    $mail->Body  = "<h4 style='text-align: center;padding: 25px 15px;background-color: #0c6c9e;color: #FFFFFF;font-size:16px;width:90%;border-radius: 10px;'>Neuer Kunde hat Interesse an einem Beratungsgespräch!</h4><br><br>";

    if(isset($_POST["beratungmail"])) {
        $mail->Body .= "<strong>Email: </strong>" . $beratungmail . "<br>";
    }

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


    if(!$mail->send())
    {
        $_SESSION['POST'] = ["error" => true];
        header("Location: ../index.php#beratung");
    }else{
        $_SESSION['POST'] = ["error" => false];
        header("Location: ../index.php#beratung");
    }
}
?>