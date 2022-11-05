<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer-master/src/PHPMailer.php';
// require 'PHPMailer-master/src/SMTP.php';
// require 'PHPMailer-master/src/Exception.php';
require_once "./vendor/autoload.php";
require_once(__DIR__ . '/vendor/autoload.php');
// $mail = new PHPMailer\PHPMailer\PHPMailer;

class Service
{

    public static function sendMail($data=array(),$file_tme)
    {
        try {
            $mail = new PHPMailer(true);

            $mail->SMTPDebug = SMTP::DEBUG_OFF; //Enable verbose debug output
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'cradfield.com.ng'; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = 'Supportcenter@cradfield.com.ng'; //SMTP username
            $mail->Password = 'modupsyoffice22'; //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('Supportcenter@cradfield.com.ng', 'cradfield');
            $mail->addAddress('Supportcenter@cradfield.com.ng'); //Add a recipient
            

            //Attachments
            if(!empty($file_tme)){

                $mail->addAttachment($file_tme);         //Add attachments
            }
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'cradfieldlimited';
            $mail->Body = '
            <table cellspacing="10px"  cellpadding="5px">
            <tr>
              <th>Name</th>
              <th>UserName</th>
              <th>Topic</th>
              <th>Country</th>
              <th>Address</th>
              <th>State/City</th>
              <th>Zipcode</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Message</th>

            </tr>


            <tr>
            <td>'.$data["fname"].' '.$data["lname"].'</td>
            <td>'.$data["uname"].'</td>
            <td>'.$data["topic"].'</td>
            <td>'.$data["country"].'</td>
            <td>'.$data["address"].'</td>
            <td>'.$data["state"].' '.$data["city"].'</td>
            <td>'.$data["zipcode"].'</td>
            <td>'.$data["email"].'</td>
            <td>'.$data["phonenumber"].'</td>
            <td>'.$data["message"].'</td>

          </tr>

            </table>


            ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        } catch (Exception $e) {
            echo $e->errorMessage();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    
}


