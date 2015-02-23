<?php
/**
 * Created by PhpStorm.
 * User: Ned4417
 * Date: 12/27/14
 * Time: 3:28 PM
 *
 * Mailer for the contact form.
 */

///email sent to us/////////////////////////////////////////////////////////

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(isset($_POST['submit']))
{
        $body = "Name: $name\n\n\t
                Email: $email\n\n\t
                Comments: $message"
        ;

/*    $headers = 'From:'  . $name . '<' . $email .'>';
    $headers .= "Reply-To: " . $email .  "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";*/

    //send the mail
    mail("thebigday613@gmail.com", "Wedding Email", $body, $headers);
}




////Thank you email/////////////////////////////////////////////////////////////

//Still need to work on the wedding reply so that I don't get an mailer daemon email when I reply.///

if (isset($_POST['submit']))
{
    $body = '<html><body style="font-size: 16px; padding-bottom: 25px;">';
    $body .= '<h2>Thank You</h2>';
    $body .= '<p style="padding-bottom: 15px;">'. $name .',</p>';
    $body .= '<p>Thank you for contacting us. We appreciate all of your thoughts and wishes. We hope to see you on our big day!!!!!</p>';
    $body .= '<p>Sincerely,</p>';
    $body .= '<p style="padding-top: 20px;">Kayla and Eddie</p>';
    $body .= '</body></html>';

    $headers = 'From: Kayla and Eddie <wedding@thebigday.etuell.com>';
    $headers .= "Reply-To: thebigday613@gmail.com" . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    //send the mail
    mail($email, "Thank You", $body, $headers);
}



?>