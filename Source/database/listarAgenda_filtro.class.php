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
require __DIR__ . "/DBConnection.class.php";

use Source\Database\Connect;

function listaAgenda_filtro() {
try {
    $placa_filtro = $_REQUEST["placa_filtro"];
    $viewList = 
"
    SELECT *FROM tb_agenda_veiculos WHERE placa_veiculo_cli = '{$placa_filtro}';
";
    $query = Connect::getInstance()->query($viewList);
    $retDados = $query-> fetchAll(PDO::FETCH_ASSOC);
    return $retDados;
} catch (PDOException $exception) {
    die($exception);
}
}
?>

<?php
$agendamentos_filtro = listaAgenda_filtro();
?>
    <table class='table table-striped table-bordered table-hover'>
            <thead>
                <tr class='active'>
                    <th>Código do cliente</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Veículo</th>
                    <th>Placa do veículo</th>
                    <th>Data de entrada</th>
                    <th>Horário de entrada</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($agendamentos_filtro as $agendamentos_filtro) : ?>
                   <tr>
                     <td><?=$agendamentos_filtro['id_cli']?></td>
                     <td><?=$agendamentos_filtro['nome_cli']?></td>
                     <td><?=$agendamentos_filtro['telefone_cli']?></td>
                     <td><?=$agendamentos_filtro['veiculo_cli']?></td>
                     <td><?=$agendamentos_filtro['placa_veiculo_cli']?></td>
                     <td><?=$agendamentos_filtro['data_entrada_veiculo_cli']?></td>
                     <td><?=$agendamentos_filtro['hora_entrada_veiculo_cli']?></td>
                    </tr>
               <?php endforeach; ?>
            </tbody>
            </table>
            <center><a href="../../"><button class="btn btn-primary" style="background-color: orangered;">Voltar</button></a><br><br></center>