<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

//send email
    if(mail("galiev.maksat@gmail.com", "This is an email from:" .$email, $message)){
        echo "good";
    } else{
        echo "bad";
    }
    //echo($message);
}
?>