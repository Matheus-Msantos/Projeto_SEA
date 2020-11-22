<?php

// Dados do banco
$dbhost = "DESKTOP-IBM9RRE\SQLEXPRESS"; #Nome do host
$db = "sea"; #Nome do banco de dados
$user = "sa"; #Nome do usuário
$password = "database@2020"; #Senha do usuário


// Dados da tabela
$tabela = "Interessado"; #Nome da tabela
$campo1 = "NOME"; #Nome do campo da tabela
$campo2 = "EMAIL"; #Nome de outro campo da tabela

$conninfo = array("Database" => $db, "UID" => $user, "PWD" => $password);
$conn = sqlsrv_connect($dbhost, $conninfo);

$instrucaoSQL = "SELECT $campo1, $campo2 
                 FROM $tabela";

$params = array();
$options =array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$consulta = sqlsrv_query($conn, $instrucaoSQL, $params, $options);
$numRegistros = sqlsrv_num_rows($consulta);

echo "Esta tabela contém $numRegistros registros!\n<hr>\n";

if ($numRegistros!=0) {
    while ($cadaLinha = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC)) {
        echo "$cadaLinha[$campo1] – $cadaLinha[$campo2]\n<br>\n";
    }
}