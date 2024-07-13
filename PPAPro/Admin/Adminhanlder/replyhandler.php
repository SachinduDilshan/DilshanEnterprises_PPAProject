<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $to='speedytirepro@gmail.com';
        $reply=$_POST['message'];
        $email=$_POST['email'];
        $subject = $_POST['subject'];

        $headers="From:$email";

        if(mail($to, $reply, $email, $subject, $headers)){
            echo "Email Successfully Sent to $email" ;
        }
        else{
            
            echo "Email sending failed!";
        }
    }

?>