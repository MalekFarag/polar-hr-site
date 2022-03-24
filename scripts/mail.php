
<?php


function build_email($title, $text, $link, $button_text){
    return include "email_template.php";
}

$from_email = "info@polarhr.com";


if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $company = trim($_POST['company']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);


    if(!empty($name) || !empty($email)){
        
        // TO USER
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = $from_email;
        $to = $email;
        $subject = "Welcome to Polar HR";

        $text = "Hi $name,
        
Thanks for breaking the ice! We have received your message. A Polar HR representative will contact you within 1-2 business days.

- The Polar HR Team";

        $message = build_email($subject, $text, FALSE, FALSE);

        $headers = 'From: '.$from;
        // Sending mail
        mail($to,$subject,$message,$headers);

    
        // TO POLAR
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = $from_email;
        $to = $from_email;
        $subject = "Message From $name | Polar HR Site";

        $text = "Hi Polar HR team,

A message has been received from $name.

-------------

Name: $name
Company: $company
Email: $email
Message:

$message";

        $message = build_email($subject, $text, FALSE, FALSE);

        $headers = 'From:'.$from;
        mail($to,$subject,$message,$headers);

        redirect_to('https://polar-hr.ca/success');
                
                        
        }
    }



    

