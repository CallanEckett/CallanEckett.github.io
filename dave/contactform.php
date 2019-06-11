<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $postcodeErr = $messageErr = "";
$name = $email = $phone = $postcode = $message = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "An email address is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address format";
        }
    }
    
    if (empty($_POST["phone"])) {
        $phone = "";
    } else {
        $phone = test_input($_POST["phone"]);
    }
    
    if (empty($_POST["postcode"])) {
        $postcode = "";
    } else {
        $postcode = test_input($_POST["postcode"]);
    }
    
    if (empty($_POST["message"])) {
        $messageErr = "A message is required";
    } else {
        $message = test_input($_POST["message"]);
    }
    
    if ($nameErr == '' and $emailErr == '' and $phoneErr == '' and $messageErr == ''){
        $message_body = '';
        unset($_POST['submit']);
        
        $message_body .= "Name: ".($name)."\n";
        $message_body .= "Email Address: ".($email)."\n";
        $message_body .= "Phone Number: ".($phone)."\n";
        $message_body .= "Postcode: ".($postcode)."\n";
        $message_body .= "Message: ".($message)."\n";
        
        $headers .='From: countymolecatcher <judd@countymolecatcher.co.uk>';
        $to = 'callaneckett.system@gmail.com';
        $subject = 'Contact Form Submission';
        if (mail($to, $subject, $message_body, $headers)){
            $name = $email = $phone = $postcode = $message = "";
            $success = "Email sent";
        }
        else {
            $success = "Something went wrong";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?> 
