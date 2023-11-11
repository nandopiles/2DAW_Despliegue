<?php

namespace Ferran\App\public;

// use Ferran\App\src\core\Database;
use PDO;
use PDOException;



$host = '172.27.0.2';
$dbname = 'ae1_despliegue';
$username = 'root';
$password = 'root';

// Intentar establecer la conexión con PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Consulta SQL para recuperar información de la tabla "people"
$sql = "SELECT id, name, surname FROM people";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo "ID: {$row['id']}, Name: {$row['name']}, Surname: {$row['surname']}<br>";
    }
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

// Closes the connection.
$pdo = null;
