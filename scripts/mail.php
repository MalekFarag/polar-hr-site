
<?php


function build_email($title, $text, $link, $button_text){
    return include "email_template.php";
}

$from_email = "chantelle@polarhr.ca";


if(isset($_POST['submit']) && isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){

    // VERIFYING RECAPTCHA
    $secret = '6LfqnA4fAAAAABdi_ZiOvXe3x7b3EXfLiw30vn4f';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response);

    if($response->success == True) {
        // What happens when the CAPTCHA was entered correctly

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
            $subject = "Welcome to Polar HR!";

            $text = "Hi $name,
        
Thanks for breaking the ice! We have received your message. A Polar HR representative will contact you within 1-2 business days.

- The Polar HR Team";

            $message = build_email($subject, $text, FALSE, FALSE);

            $headers = 'From:'.$from;
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

            redirect_to('./success');
        }
                
                        
    }
}



    

