<?php

require_once 'db.php';

// Consultar tabela de interessados
$tabela = array();

$consulta = (' SELECT id, nome, telefone, email, estudouIngles, quantoTempo, nota, imagem, mensagem, data FROM Interessado ORDER BY nome');

foreach ( $db->query( $consulta ) as $reg ) {
    $tabela[ $reg['id'] ] = [ 'nome' => $reg['nome'], 'telefone' => $reg['telefone'], 'email' => $reg['email'], 'estudouIngles' => $reg['estudouIngles'], 'quantoTempo' => $reg['quantoTempo'], 'nota' => $reg['nota'], 'imagem' => $reg['imagem'], 'mensagem' => $reg['mensagem'], 'data' => $reg['data'] ];
}
