<?php

$dsn = 'mysql:$dbname=test;host=localhost';
$dbuser = 'root';
$dbpass = '';

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'ok';
} catch (PDOException $e) {
    echo "Falhou" . $e->getMessage();
}
