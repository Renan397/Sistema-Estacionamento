<?php
require __DIR__ . "/DBConnection.class.php";

use Source\Database\Connect;

$nomeCli  = $_REQUEST["nome_cli"];
$telCli   = $_REQUEST["tel_cli"];
$carCli   = $_REQUEST["veiculo_cli"];
$placaCli = $_REQUEST["placa_veiculo_cli"];

$inset = 
"
    INSERT INTO tb_agenda_veiculos (nome_cli, telefone_cli, veiculo_cli, placa_veiculo_cli, data_entrada_veiculo_cli, hora_entrada_veiculo_cli)
    VALUES ('{$nomeCli}', '{$telCli}', '{$carCli}', '{$placaCli}', '20210521', '133000');
";

try {
    $query = Connect::getInstance()->query($inset);
} catch (PDOException $exception) {
    die($exception);
}