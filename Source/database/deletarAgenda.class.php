<?php

include_once 'DBConnection.class.php';

if ($_REQUEST) {
    $codAgenda = $_REQUEST['codAgendamento'];
 
    function deletarAgenda($codAgenda) {
        $DBConnection = new DBConnection();
        $sqlCmd = "DELETE FROM tb_agenda_veiculos WHERE id_cli = '$codAgenda'";
        $resultSet = $DBConnection->query($sqlCmd);
        if ($resultSet) {
            echo "<center>Agendamento deletado com sucesso!</center>";
        }
        else {
            echo "<center>Não foi possível deletar o agendamento.</center>";
        }
    }
    deletarAgenda($codAgenda);
};
?>