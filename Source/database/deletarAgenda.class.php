<?php
session_start();
require __DIR__ . "/DBConnection.class.php";

use Source\Database\Connect;

$placaCli = $_REQUEST["placa_saida"];

$delete = 
"
    DELETE FROM tb_agenda_veiculos WHERE placa_veiculo_cli = '{$placaCli}';
";

try {
    $query = Connect::getInstance()->query($delete);
    header("Location: ../../");
    $_SESSION['msg1'] = "<center><p style='padding: 10px; border: 1px solid gray; border-radius: 3px; margin: 10px;
    font-size: 18px; border-color: #87c940; color: #fff; background-color: #a0d468; width: 290px;'>Saida com exito!</p></center><br>";
    header("Location: ../../#saida_veiculos");
} catch (PDOException $exception) {
    die($exception);
}