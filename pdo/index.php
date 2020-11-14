<?php

$dns = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=matriculado';
$user = 'sa';
$password = 'database2020';

$db = new PDO ($dns, $user, $password);

$sql = 'SELECT id, nome FROM matriculado';

foreach ($db->query ($sql) as $registro) {
    echo "Id: {$registro['id']} Nome: {$registro['nome']} <br>";
}
