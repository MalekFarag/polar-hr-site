
<?php

$from_email = "info@polarhr.com"


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
        $subject = "Thanks For Breaking the Ice! | Reve Solutions";

        $message = '';

        $headers = 'From: '.$from;
        // Sending mail
        mail($to,$subject,$message,$headers);

    
        // TO POLAR
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = $from_email;
        $to = $from_email;
        $subject = "Inquiry From $company | Polar HR Site";
        $message = '';

        $headers = 'From:'.$from;
        mail($to,$subject,$message,$headers);

        redirect_to('https://revesolutions.ca/sent');
                
                        
        }
    }



    

