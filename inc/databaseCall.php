<?php
try {
    $PDO = new PDO("mysql:host=localhost;dbname=peterjar_netmatters", "peterjar_contact_admin", "zEoH^W90O=yp");
} catch (PDOException $e) {
    // echo $e->getMessage();
}

