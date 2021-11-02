<?php

$servername = "localhost";
$username = "contact_admin";
$password = "ABQdTJeV_wny/Z*d";
$db = "contact";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from news order by date DESC limit 3";
$results = mysqli_query($conn, $sql);
print_r($results);

// try {    
//     echo '<pre>';
//     print_r($sql);
//     echo '</pre>';
//     die();
// } catch(Exception $e) {
//     echo $e->getMessage();
// }


// $articles = $results->fetchALL(PDO::FETCH_ASSOC);

 ?>