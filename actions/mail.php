<?php
    //Recipient
    $to = "dafrankfurtofficiel@gmail.com";
    //Subject
    $subject = $_POST['subject'];
    //Message
    $message = $_POST['msg'];
    $email = $_POST['email'];
    //Header
    if(empty($_SESSION['user'])){
        $headers = "From: Unknown user <dafrankfurtofficiel@gmail.com>\r\n";
    }
    else{
        $headers = "From: ".$_SESSION['user']['username']." <dafrankfurtofficiel@gmail.com>\r\n";
    }
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "Content-type: text/html\r\n";


    $send = False;
    if(empty($message)){
        echo "Le message ne peux pas être vide";
        $send = FALSE;
    }
    else{
        $send = TRUE;
    }
    if(empty($subject)){
        $subject = "Commentaire sur le site";
    }
    //envoie le mail
    if($send){
        mail($to, $subject, $message, $headers);
    }    
?>