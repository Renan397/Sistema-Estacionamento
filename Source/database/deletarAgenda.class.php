<?php
session_start();
require __DIR__ . "/DBConnection.class.php";

use Source\Database\Connect;

$placaCli = $_REQUEST["placa_saida"];
$hora_saida = $_REQUEST["hora_saida_cli"];
$taxa_hora = 6.00;

try {
    $select = 
    "
    SELECT *FROM tb_agenda_veiculos WHERE placa_veiculo_cli = '{$placaCli}';
    ";
    $query = Connect::getInstance()->query($select);
    $retorno = $query-> fetchAll(PDO::FETCH_ASSOC);
    $hora_entrada = $retorno[0]["hora_entrada_veiculo_cli"];
    $H_entrada_number = intval(substr("{$hora_entrada}", 0, -6));
    $H_saida_number = intval(substr("{$hora_saida}", 0, -3));
    $horas_a_pagar = ($H_saida_number - $H_entrada_number)*($taxa_hora);
    $insertPagamento = 
    "
    INSERT INTO tb_agenda_pagamento(pagamento_total) VALUES({$horas_a_pagar}.00)
    ";
    $query = Connect::getInstance()->query($insertPagamento);
    $_SESSION["retornoPagamento"] = "
    <center><p style='color:black; font-size: 18px;'>O total a ser pago é: R$ $horas_a_pagar,00</p></center>
    ";
    $delete = 
    "
        DELETE FROM tb_agenda_veiculos WHERE placa_veiculo_cli = '{$placaCli}';
    ";
    $query = Connect::getInstance()->query($delete);
    $_SESSION['msg1'] = "<center><p style='padding: 10px; border: 1px solid gray; border-radius: 3px; margin: 10px;
    font-size: 18px; border-color: #87c940; color: #fff; background-color: #a0d468; width: 290px;'>Saída efetuada com sucesso!</p></center><br>";
    header("Location: ../../#saida_veiculos");
} catch (PDOException $exception) {
    die($exception);
}
?>