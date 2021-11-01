<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phoneNumber'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$servername = "localhost";
$username = "contact_admin";
$password = "ABQdTJeV_wny/Z*d";
$db = "contact";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into form(name,email,phone_number,subject,message)
        values('$name','$email','$phone','$subject','$message')";

if ($conn->query($sql) === TRUE){
    echo "Message sucessful.";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>
