<?php

$wasSent = false;
$failedSend = false;

try {
    $PDO = new PDO(dsn:"mysql:host=localhost;dbname=contact", username:"contact_admin", password:"ABQdTJeV_wny/Z*d");

    if(isset($_POST['email']) &&  $_POST['email'] != ' ' && [filter_var($_POST['email']), FILTER_VALIDATE_EMAIL]){

        if(isset($_POST['name']) &&  $_POST['name'] != ' ') {

            if(isset($_POST['phoneNumber']) &&  $_POST['phoneNumber'] != ' ' ){

                if(isset($_POST['subject']) &&  $_POST['subject'] != ' '){

                    if(isset($_POST['message']) &&  $_POST['message'] != ' '){

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phoneNumber'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];

                        $sql = $PDO->prepare(query:"INSERT INTO form(name,email,phone_number,subject,message)
                                            VALUES('$name','$email','$phone','$subject','$message')");
                        $sql->execute();

                        $wasSent = true;
                    }

                }

            }

        }

    } 
} catch (PDOException $e) {
    // echo $e->getMessage();
}

?>
