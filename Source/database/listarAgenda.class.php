<?php

include_once 'DBConnection.class.php';

function listarAgenda() {
    $DBConnection = new DBConnection();
    $sqlCmd = "SELECT *FROM tb_agenda_veiculos;";
    $resultSet =  $DBConnection->query($sqlCmd);
    if ($resultSet) {
        while ( $linha = mysqli_fetch_assoc($resultSet)) {
            print_r($linha);
            echo "<hr>";
        };
    }
    else {
        echo "<center>Não foi possível listar os agendamentos.</center>";
    }
   
};
listarAgenda();
?>