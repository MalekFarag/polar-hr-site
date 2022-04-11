
<?php


$from_email = "Polar HR <chantelle@polarhr.ca>";


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
        <br>
Thanks for breaking the ice! We have received your message. A Polar HR representative will contact you within 1-2 business days.
<br>
- The Polar HR Team<br><br><br>";

            $body = file_get_contents("./scripts/email_template.php");
            $body = str_replace("%TITLE%", $subject, $body);
            $body = str_replace("%TEXT%", $text, $body);
            
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From:" . $from;

            // Sending mail
            mail($to,$subject,$body,$headers);

        
            // TO POLAR
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $from = $from_email;
            $to = $from_email;
            $subject = "Message From $name | Polar HR Site";

            $text = "Hi Polar HR team,
<br>
A message has been received from $name.
<br><br>
-------------<br>
<br><br>
Name: $name<br>
Company: $company<br>
Email: $email<br>
Message:<br>

$message
<br><br><br>
";

            $body = file_get_contents("./scripts/email_template.php");
            $body = str_replace("%TITLE%", $subject, $body);
            $body = str_replace("%TEXT%", $text, $body);

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From:" . $from;

            mail($to,$subject,$body,$headers);

            header('Location: https://polarhr.ca/success');
        }
                
                        
    }
}



    

