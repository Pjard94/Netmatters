<?php
require_once 'inc/databaseCall.php';

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST['phone_number'], FILTER_SANITIZE_NUMBER_INT);
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

if(isset($email) &&  $email != ' ' && filter_var($email, FILTER_VALIDATE_EMAIL)){

        if(isset($name) &&  $name != ' ') {

            if(isset($phone) &&  $phone != ' ' && filter_var($phone, FILTER_VALIDATE_INT)){

                if(isset($subject) &&  $subject != ' '){

                    if(isset($message) &&  $message != ' '){


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
