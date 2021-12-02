<?php
try {
    // $PDO = new PDO("mysql:host=localhost;dbname=peterjar_netmatters", "peterjar_contact_admin", "ABQdTJeV_wny/Z*d");
    $PDO = new PDO("mysql:host=localhost;dbname=contact", "contact_admin", "ABQdTJeV_wny/Z*d"); //This is for testing purposes
} catch (PDOException $e) {
    // echo $e->getMessage();
}

