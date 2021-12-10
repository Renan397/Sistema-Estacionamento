<?php
require __DIR__ . "/DBConnection.class.php";

use Source\Database\Connect;

$placaCli = $_REQUEST["placa_saida"];

$delete = 
"
    DELETE FROM tb_agenda_veiculos WHERE placa_veiculo_cli = '{$placaCli}';
";

try {
    $query = Connect::getInstance()->query($delete);
} catch (PDOException $exception) {
    die($exception);
}