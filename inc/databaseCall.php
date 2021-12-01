<?php
try {
    $PDO = new PDO("mysql:host=localhost;dbname=peterjar_netmatters", "peterjar_contact_admin", "ABQdTJeV_wny/Z*d");
     
} catch (PDOException $e) {
    // echo $e->getMessage();
}