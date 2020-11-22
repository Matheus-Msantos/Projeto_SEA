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


$sql = 'SELECT ID_INTERESSADO, NOME, EMAIL, TELEFONE, ESTUDOU_INGLES, QUANTO_TEMPO_INGLES, NOTA_TESTE, IMG_TESTE, MENSAGEM, DATA FROM Interessado ORDER BY ID_INTERESSADO';

foreach ($db->query($sql) as $registro) {
    echo "ID: {$registro['ID_INTERESSADO']} - NOME: {$registro['NOME']} - EMAIL: {$registro['EMAIL']} - TELEFONE: {$registro['TELEFONE']} - ESTUDOU_INGLES: {$registro['ESTUDOU_INGLES']} - QUANTO_TEMPO_INGLES: {$registro['QUANTO_TEMPO_INGLES']} - NOTA_TESTE: {$registro['NOTA_TESTE']} - IMG_TESTE: {$registro['IMG_TESTE']} - MENSAGEM: {$registro['MENSAGEM']} - DATA: {$registro['DATA']} <br><br>";
}

$consulta = $db->query($sql); 

if ( $db->query('DELETE FROM Interessado WHERE ID_INTERESSADO = 4') ) {
    echo"Registro apagado!<br><br>";
}else {
    echo"Registro não apagado!<br><br>";
}


if ($db->query('INSERT INTO Interessado (NOME, EMAIL, TELEFONE, ESTUDOU_INGLES, NOTA_TESTE,  DATA) VALUES ("Teste04", "teste04@email.com", 1170399876, "sim", 6, "22/11/2020")' ) ) {
    echo"Registro inserido!<br><br>";
}else{
    echo"Registro não inserido!<br><br>";
}

foreach ($db->query($sql) as $registro) {
    echo "ID: {$registro['ID_INTERESSADO']} - NOME: {$registro['NOME']} - EMAIL: {$registro['EMAIL']} - TELEFONE: {$registro['TELEFONE']} - ESTUDOU_INGLES: {$registro['ESTUDOU_INGLES']} - QUANTO_TEMPO_INGLES: {$registro['QUANTO_TEMPO_INGLES']} - NOTA_TESTE: {$registro['NOTA_TESTE']} - IMG_TESTE: {$registro['IMG_TESTE']} - MENSAGEM: {$registro['MENSAGEM']} - DATA: {$registro['DATA']} <br><br>";
}