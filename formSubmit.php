<?php
require_once 'inc/databaseCall.php';

if(isset($_POST['email']) &&  $_POST['email'] != ' ' && [filter_var($_POST['email']), FILTER_VALIDATE_EMAIL]){

        if(isset($_POST['name']) &&  $_POST['name'] != ' ') {

            if(isset($_POST['phone_number']) &&  $_POST['phone_number'] != ' ' ){

                if(isset($_POST['subject']) &&  $_POST['subject'] != ' '){

                    if(isset($_POST['message']) &&  $_POST['message'] != ' '){

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone_number'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];

                        $sql = $PDO->prepare("INSERT INTO form(name,email,phone_number,subject,message)
                                            VALUES('$name','$email','$phone','$subject','$message')");
                        $sql->execute();

                        echo json_encode(
                            array(
                                'sent' => true
                            )
                        );
                        
                    }else {
                        echo json_encode(
                            array(
                                'sent' => false
                            )
                            );
                        }

                }else {
                    echo json_encode(
                        array(
                            'sent' => false
                        )
                        );
                    }

            }else {
                echo json_encode(
                    array(
                        'sent' => false
                    )
                    );
                }

        }else {
            echo json_encode(
                array(
                    'sent' => false
                )
                );
            }
}else {
    echo json_encode(
        array(
            'sent' => false
        )
        );
    }
?>
