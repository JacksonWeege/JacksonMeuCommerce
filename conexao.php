<?php

$username = 'root';
$password = '';
$hostname = 'localhost';
$dbname   = 'meu_commerce';

try {
    $conn = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}