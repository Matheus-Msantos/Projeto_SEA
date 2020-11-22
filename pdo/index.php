<?php

/* Conectando no SQLServer usando driver invocation */

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=sea';
$user = 'sa';
$password = 'database2020';

try {
    $db = new PDO($dsn, $user, $password); 
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


$sql = 'SELECT ID_INTERESSADO, NOME, EMAIL FROM Interessado ORDER BY NOME';
foreach ($db->query($sql) as $registro) {
    echo "ID: {$registro['ID_INTERESSADO']} NOME: {$registro['NOME']} EMAIL: {$registro['EMAIL']} <br>";
}

