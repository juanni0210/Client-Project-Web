<?php
if(isset($_GET["submit_btn"])) {
    $err = NULL;
    $success = false;

    // Validate full name
    if($_GET["fname"]) {
        $fname = $_GET["fname"];
    } else {
        $err = "<p class=\"error\">Your name?</p>";
    }


    if ($_GET["email"]) {
        // check if the format of the email is proper
        if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_GET["email"];    
        } else {
            $err .= "<p class=\"error\">Invalid email!</p>";
        }
    } else {
        // CREATE CORRESPONDING ERROR MESSAGE
        $err .= "<p class=\"error\">Email?</p>";
    }

    // Validate message
    if($_GET["message"]) {
        $msg = $_GET["message"];
    } else {
        $err .= "<p class=\"error\">Message?</p>";
    }

    //create feedback
    if (!empty($email) && !empty($fname) && !empty($msg)) {
        $success = true;
        $feedback = "Hello $fname. Thank you for your message:<br>$msg<br><br>We are going to email you at $email if any change happens in your program.";
    }
}
?>