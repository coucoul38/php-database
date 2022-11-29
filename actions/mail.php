<?php
    $to = "dafrankfurtofficiel@gmail.com"
    $subject = $_POST['subject']
    $message = $_POST['msg']
    $send = False
    if(empty($message)){
        echo "Le message ne peux pas être vide"
        $send = FALSE
    }
    else{
        $send = TRUE
    }
    if(empty($subject)){
        $subject = "Commentaire sur le site"
    }
    //envoie le mail
    if($send){
        mail($to, $subject, $message);
    }    
?>