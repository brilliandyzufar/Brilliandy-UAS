<?php

$db_host = "10.0.0.220";
$db_user = "nazario";
$db_pass = "Nazario02589";
$db_name = "uas2";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}