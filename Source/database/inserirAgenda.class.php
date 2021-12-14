<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Atividade de LDI (4º bimestre)</title>

    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">

    <link rel="stylesheet" href="../../assets/css/templatemo-training-studio.css">

</head>

<?php
session_start();
require __DIR__ . "/DBConnection.class.php";

use Source\Database\Connect;

if ($_REQUEST) {
    
function inserirAgenda() {
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

    INSERT INTO tb_agenda_pagamento (nome_cli, placa_veiculo_cli, hora_entrada_veiculo_cli)
    VALUES ('{$nomeCli}', '{$placaCli}', '{$hrEntrada}00');
";

try {
    $query = Connect::getInstance()->query($inset);
    header("Location: ../../");
    $_SESSION['msg'] = "<center><p style='padding: 10px; border: 1px solid gray; border-radius: 3px; margin: 10px;
    font-size: 18px; border-color: #87c940; color: #fff; background-color: #a0d468; width: 290px;'>Entrada efetuada com sucesso!</p></center><br>";
    header("Location: ../../#entrada_veiculos");
} catch (PDOException $exception) {
        header("Location: ../../");
        $_SESSION['msg_erro'] = "<center><p style='padding: 10px; border: 1px solid gray; border-radius: 3px; margin: 10px;
        font-size: 18px; border-color: #e8273b; color: #fff; background-color: #e8273b; width: 290px;'>OPS! Veículo já cadastrado.</p></center><br>"; 
        header("Location: ../../#entrada_veiculos");
}
};
inserirAgenda();
}
else {
    echo "Nenhuma requisição foi feita.";
}
?>