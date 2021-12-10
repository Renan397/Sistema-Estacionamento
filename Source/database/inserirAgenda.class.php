<?php
session_start();
require __DIR__ . "/DBConnection.class.php";

use Source\Database\Connect;

$nomeCli  = $_REQUEST["nome_cli"];
$telCli   = $_REQUEST["tel_cli"];
$carCli   = $_REQUEST["veiculo_cli"];
$placaCli = $_REQUEST["placa_veiculo_cli"];
$datEntrada = $_REQUEST["data_entrada_cli"];
$Y = date("Y");
$m = substr("{$datEntrada}", 5, -3);
$d = substr("{$datEntrada}", 8);
$datEntrada = date("$Y$m$d");
$hrEntrada = $_REQUEST["hora_entrada_cli"];
$H = substr("{$hrEntrada}", 0, -3);
$ms = substr("{$hrEntrada}", 3);
$hrEntrada = date("$H$ms");

$inset =
    "
    INSERT INTO tb_agenda_veiculos (nome_cli, telefone_cli, veiculo_cli, placa_veiculo_cli, data_entrada_veiculo_cli, hora_entrada_veiculo_cli)
    VALUES ('{$nomeCli}', '{$telCli}', '{$carCli}', '{$placaCli}', '{$datEntrada}', '{$hrEntrada}00');
";

try {
    $query = Connect::getInstance()->query($inset);
    header("Location: ../../");
    $_SESSION['msg'] = "<center><p style='padding: 10px; border: 1px solid gray; border-radius: 3px; margin: 10px;
    font-size: 18px; border-color: #87c940; color: #fff; background-color: #a0d468; width: 290px;'>Agendamento efetuado com sucesso!</p></center><br>";
    header("Location: ../../#entrada_veiculos");
} catch (PDOException $exception) {
    die("OPS! Erro ao enviar.");
}
