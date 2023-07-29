<?php
//Specify your email here
$to = 'lishufang1121@gmail.com';

if ($_POST) {
    $name = sanitizeString($_POST['name']);
    $email = sanitizeEmail($_POST['email']);
    $subject = sanitizeString($_POST['subject']);
    $message = sanitizeString($_POST['message']);

    //prepare email body
    $body = "You have received an email from: " . $name . " \n\n" . $message;
    //send the email
    if (mail($to, $subject, $body, "From:" . $email)) {
        echo 'Message sent! Thank you for contacting us.';
    } else {
        echo 'Error! Message not sent.';
    }
}

//sanitize data
function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

function sanitizeEmail($var)
{
    $var = filter_var($var, FILTER_SANITIZE_EMAIL);
    return $var;
}

?>
